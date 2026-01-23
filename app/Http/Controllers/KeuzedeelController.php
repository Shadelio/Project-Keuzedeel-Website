<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keuzedeel;
use App\Models\Inschrijving;

class KeuzedeelController extends Controller
{
    /**
     * Toon alle beschikbare keuzedelen
     */
    public function index()
    {
        $keuzedelen = Keuzedeel::orderBy('startdatum')->get();
        return view('keuzedelen', compact('keuzedelen'));
    }

    /**
     * Toon details van een specifiek keuzedeel
     */
    public function show($id)
    {
        $keuzedeel = Keuzedeel::findOrFail($id);
        $isIngeschreven = auth()->user()->isIngeschrevenVoorKeuzedeel($id);
        
        return view('keuzedeel-detail', compact('keuzedeel', 'isIngeschreven'));
    }

    /**
     * Schrijf gebruiker in voor keuzedeel
     */
    public function inschrijven(Request $request, $id)
    {
        $user = auth()->user();
        $keuzedeel = Keuzedeel::findOrFail($id);

        // Controleer of gebruiker al is ingeschreven
        if ($user->isIngeschrevenVoorKeuzedeel($id)) {
            return back()->with('error', 'Je bent al ingeschreven voor dit keuzedeel.');
        }

        // Controleer of keuzedeel vol is
        if ($keuzedeel->isVol()) {
            return back()->with('error', 'Dit keuzedeel is helaas vol.');
        }

        // Controleer of keuzedeel beschikbaar is
        if (!$keuzedeel->isBeschikbaar()) {
            return back()->with('error', 'Dit keuzedeel is niet beschikbaar voor inschrijving.');
        }

        // Maak inschrijving aan
        $inschrijving = Inschrijving::create([
            'user_id' => $user->id,
            'keuzedeel_id' => $keuzedeel->id,
            'status' => 'ingeschreven',
            'inschrijfdatum' => now(),
            'opmerkingen' => $request->opmerkingen,
        ]);

        // Update aantal deelnemers
        $keuzedeel->huidige_deelnemers += 1;
        $keuzedeel->save();

        return redirect()->route('mijn-keuzedelen')
            ->with('success', 'Je bent succesvol ingeschreven voor ' . $keuzedeel->titel);
    }

    /**
     * Schrijf gebruiker uit voor keuzedeel
     */
    public function uitschrijven($id)
    {
        $user = auth()->user();
        $inschrijving = Inschrijving::where('user_id', $user->id)
            ->where('keuzedeel_id', $id)
            ->firstOrFail();

        $keuzedeel = $inschrijving->keuzedeel;

        // Verwijder inschrijving
        $inschrijving->delete();

        // Update aantal deelnemers
        if ($keuzedeel->huidige_deelnemers > 0) {
            $keuzedeel->huidige_deelnemers -= 1;
            $keuzedeel->save();
        }

        return redirect()->route('mijn-keuzedelen')
            ->with('success', 'Je bent uitgeschreven voor ' . $keuzedeel->titel);
    }

    /**
     * Toon ingeschreven keuzedelen van gebruiker
     */
    public function mijnKeuzedelen()
    {
        $user = auth()->user();
        $inschrijvingen = $user->inschrijvingen()->with('keuzedeel')->get();
        
        return view('mijn-keuzedelen', compact('inschrijvingen'));
    }
}

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

        // Check if user is already enrolled
        if ($user->isIngeschrevenVoorKeuzedeel($keuzedeel)) {
            return redirect()->route('keuzedeel.show', $id)
                ->with('error', 'Je bent al ingeschreven voor dit keuzedeel.');
        }

        // Check if keuzedeel is full
        if ($keuzedeel->isVol()) {
            return redirect()->route('keuzedeel.show', $id)
                ->with('error', 'Dit keuzedeel is helaas vol.');
        }

        // Create inschrijving with geaccepteerd status
        Inschrijving::create([
            'user_id' => $user->id,
            'keuzedeel_id' => $keuzedeel->id,
            'status' => 'geaccepteerd',
            'inschrijfdatum' => now(),
            'opmerkingen' => $request->opmerkingen,
        ]);

        return redirect()->route('mijn-keuzedelen')
            ->with('success', 'Je bent succesvol ingeschreven voor ' . $keuzedeel->titel);
    }

    /**
     * Schrijf gebruiker uit voor keuzedeel
     */
    public function uitschrijven($id)
    {
        try {
            $user = auth()->user();
            $inschrijving = Inschrijving::where('user_id', $user->id)
                ->where('keuzedeel_id', $id)
                ->firstOrFail();

            $keuzedeel = $inschrijving->keuzedeel;

            // Verwijder inschrijving
            $inschrijving->delete();

            return redirect()->route('mijn-keuzedelen')
                ->with('success', 'Je bent succesvol uitgeschreven voor ' . $keuzedeel->titel);
                
        } catch (\Exception $e) {
            return redirect()->route('mijn-keuzedelen')
                ->with('error', 'Er is een fout opgetreden bij het uitschrijven. Probeer het opnieuw.');
        }
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

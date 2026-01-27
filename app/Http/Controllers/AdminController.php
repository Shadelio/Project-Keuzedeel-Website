<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Keuzedeel;
use App\Models\Inschrijving;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Check if user is authenticated and admin
        if (!auth()->check() || !auth()->user()->isAdmin()) {
            abort(403, 'Geen toegang - Admin rechten vereist');
        }

        $stats = [
            'totaal_studenten' => User::students()->active()->count(),
            'totaal_keuzedelen' => Keuzedeel::count(),
            'actieve_keuzedelen' => Keuzedeel::actief()->count(),
            'totaal_inschrijvingen' => Inschrijving::count(),
            'geaccepteerde_inschrijvingen' => Inschrijving::where('status', 'geaccepteerd')->count(),
            'wachtende_inschrijvingen' => Inschrijving::where('status', 'ingeschreven')->count(),
        ];

        $recente_inschrijvingen = Inschrijving::with(['user', 'keuzedeel'])
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();

        $keuzedelen_weinig_inschrijvingen = Keuzedeel::withCount('inschrijvingen')
            ->having('inschrijvingen_count', '<', Setting::get('min_deelnemers_grens', 15))
            ->get();

        $volle_keuzedelen = Keuzedeel::whereHas('inschrijvingen', function($query) {
            $query->where('status', 'geaccepteerd');
        })->get()->filter(function($keuzedeel) {
            return $keuzedeel->isVol();
        });

        return view('admin.dashboard', compact(
            'stats', 
            'recente_inschrijvingen', 
            'keuzedelen_weinig_inschrijvingen', 
            'volle_keuzedelen'
        ));
    }

    public function inschrijvingen()
    {
        if (!auth()->check() || !auth()->user()->isAdmin()) {
            abort(403, 'Geen toegang - Admin rechten vereist');
        }

        $inschrijvingen = Inschrijving::with(['user', 'keuzedeel'])
            ->orderBy('created_at', 'desc')
            ->paginate(20);

        return view('admin.inschrijvingen', compact('inschrijvingen'));
    }

    public function keuzedelen()
    {
        if (!auth()->check() || !auth()->user()->isAdmin()) {
            abort(403, 'Geen toegang - Admin rechten vereist');
        }

        $keuzedelen = Keuzedeel::withCount(['inschrijvingen' => function($query) {
            $query->where('status', 'geaccepteerd');
        }])->orderBy('titel')->paginate(15);

        return view('admin.keuzedelen', compact('keuzedelen'));
    }

    public function toggleKeuzedeel($id)
    {
        if (!auth()->check() || !auth()->user()->isAdmin()) {
            abort(403, 'Geen toegang - Admin rechten vereist');
        }

        $keuzedeel = Keuzedeel::findOrFail($id);
        $keuzedeel->is_active = !$keuzedeel->is_active;
        $keuzedeel->save();

        return back()->with('success', "Keuzedeel '{$keuzedeel->titel}' is " . 
            ($keuzedeel->is_active ? 'geactiveerd' : 'gedeactiveerd'));
    }

    public function instellingen()
    {
        if (!auth()->check() || !auth()->user()->isAdmin()) {
            abort(403, 'Geen toegang - Admin rechten vereist');
        }

        $settings = Setting::all()->keyBy('key');
        return view('admin.instellingen', compact('settings'));
    }

    public function updateInstellingen(Request $request)
    {
        if (!auth()->check() || !auth()->user()->isAdmin()) {
            abort(403, 'Geen toegang - Admin rechten vereist');
        }

        $request->validate([
            'inschrijfperiode_open' => 'boolean',
            'max_deelnemers_per_keuzedeel' => 'integer|min:1|max:100',
            'min_deelnemers_grens' => 'integer|min:1|max:50',
        ]);

        Setting::set('inschrijfperiode_open', $request->boolean('inschrijfperiode_open'), 'boolean');
        Setting::set('max_deelnemers_per_keuzedeel', $request->max_deelnemers_per_keuzedeel, 'integer');
        Setting::set('min_deelnemers_grens', $request->min_deelnemers_grens, 'integer');

        return back()->with('success', 'Instellingen zijn bijgewerkt');
    }

    public function dubbeleInschrijvingen()
    {
        if (!auth()->check() || !auth()->user()->isAdmin()) {
            abort(403, 'Geen toegang - Admin rechten vereist');
        }

        $dubbele_inschrijvingen = DB::table('inschrijvingen as i1')
            ->join('inschrijvingen as i2', function($join) {
                $join->on('i1.user_id', '=', 'i2.user_id')
                     ->on('i1.keuzedeel_id', '!=', 'i2.keuzedeel_id')
                     ->where('i1.status', '=', 'geaccepteerd')
                     ->where('i2.status', '=', 'geaccepteerd');
            })
            ->join('users', 'i1.user_id', '=', 'users.id')
            ->join('keuzedelen as k1', 'i1.keuzedeel_id', '=', 'k1.id')
            ->join('keuzedelen as k2', 'i2.keuzedeel_id', '=', 'k2.id')
            ->select(
                'users.name as student_naam',
                'users.email as student_email',
                'k1.titel as keuzedeel1',
                'k1.startdatum as startdatum1',
                'k1.einddatum as einddatum1',
                'k2.titel as keuzedeel2',
                'k2.startdatum as startdatum2',
                'k2.einddatum as einddatum2'
            )
            ->get();

        return view('admin.dubbele-inschrijvingen', compact('dubbele_inschrijvingen'));
    }

    public function studenten()
    {
        if (!auth()->check() || !auth()->user()->isAdmin()) {
            abort(403, 'Geen toegang - Admin rechten vereist');
        }

        $studenten = User::students()->withCount('inschrijvingen')
            ->orderBy('name')
            ->paginate(20);

        return view('admin.studenten', compact('studenten'));
    }

    public function toggleStudent($id)
    {
        if (!auth()->check() || !auth()->user()->isAdmin()) {
            abort(403, 'Geen toegang - Admin rechten vereist');
        }

        $student = User::findOrFail($id);
        $student->is_active = !$student->is_active;
        $student->save();

        return back()->with('success', "Student '{$student->name}' is " . 
            ($student->is_active ? 'geactiveerd' : 'gedeactiveerd'));
    }
}

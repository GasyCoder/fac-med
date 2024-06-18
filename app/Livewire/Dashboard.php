<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Candidate;

class Dashboard extends Component
{
    public function render()
    {   
        $candidat_national = Candidate::where('country', 'Madagascar')->where('status', 'Valide')->count();
        $candidat_externe = Candidate::where('country', '!=', 'Madagascar')->where('status', 'Valide')->count();
        $candidat_femme = Candidate::where('sexe', 'F')->where('status', 'Valide')->count();
        $candidat_homme = Candidate::where('sexe', 'H')->where('status', 'Valide')->count();

        return view('dashboard', [

            'candidat_national'     => $candidat_national,
            'candidat_externe'      => $candidat_externe,
            'candidat_femme'        => $candidat_femme,
            'candidat_homme'        => $candidat_homme,
        ]);
    }
}

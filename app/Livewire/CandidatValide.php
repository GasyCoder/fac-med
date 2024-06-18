<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Candidate;
use Livewire\WithPagination;
use App\Notifications\CandidateNotValide;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class CandidatValide extends Component
{   
    use WithPagination, LivewireAlert;
    protected $paginationTheme = 'bootstrap';
    public $page = 30;
    public $status;
    public $document;
    public $candidateId, $candidateInfo;
    public $full_name, $type_candidat, $grade, $sexe, $email, $phone, 
    $job, $affiliation, $type_com, $projet_file, $country, $city;
    public function showMessage($message)
    {
        $this->alert('success', $message, [
            'toast' => true,
            'icon' => 'success',
            'timer' => 3000,
            'timerProgressBar' => true,
            'onClose' => 'refresh',
            'message' => $message
        ]);
    }

    
    public function projetFile($id)
    {
        $document = Candidate::findOrFail($id);
        return response()->file(storage_path("app/public/{$document->projet_file}"));
    }
    
    public function setCandidateId($id)
    {
        $this->candidateId = $id;
    }

    public function rejeter()
    {
        $rejeter = Candidate::find($this->candidateId);
        if ($rejeter) {
            $rejeter->update([
                'status' => 'Notvalide',
            ]);
            // Mise à jour de l'état local du composant
            $this->status = $rejeter->status;
            $rejeter->notify(new CandidateNotValide()); // Envoi de la notification
            // Affichage d'un message de confirmation
            $this->showMessage('Candidature Non validée');
            return $this->redirect('/dashboard', navigate: false);
        }
    }

    public function detail($id)
    {
        $candidate = Candidate::find($id);
        $this->candidateId = $candidate->id;
        $this->full_name = $candidate->full_name;
        $this->type_candidat = $candidate->type_candidat;
        $this->grade = $candidate->grade;
        $this->sexe = $candidate->sexe;
        $this->email = $candidate->email;
        $this->phone = $candidate->phone;
        $this->job = $candidate->job;
        $this->affiliation = $candidate->affiliation;
        $this->type_com = $candidate->type_com;
        $this->projet_file = $candidate->projet_file;
        $this->country = $candidate->country;
        $this->city = $candidate->city;
    }

    public function render()
    {
         $candidates = Candidate::query()
            ->where('status', 'Valide')
            ->latest()
            ->paginate($this->page);

        $valide_candidates = Candidate::where('status', 'Valide')->count();
        return view('livewire.candidat-valide', [
            'candidates'            => $candidates,
            'valide_candidates'     => $valide_candidates,
            'candidateId'           => $this->candidateId,
        ]);
    }
}

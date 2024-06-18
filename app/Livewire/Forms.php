<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Candidate;
use Livewire\WithFileUploads;
use App\Notifications\Soumission;
use App\Http\Requests\CandidateRequest;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Forms extends Component
{
    use WithFileUploads, LivewireAlert;

    public $full_name, $type_candidat, $grade, $sexe, $email, $phone, 
    $job, $affiliation, $type_com, $projet_file, $country, $city;
    public $currentStep = 1;
    public $grades = [];
    public $countries;

    public function mount()
    {
        $this->updateGrades();
        $this->countries = config('countries');
    }

    public function updatedTypeCandidat()
    {
        $this->updateGrades();
    }

    public function updateGrades()
    {
        if ($this->type_candidat === '0') {
            $this->grades = ['Etudiant'];
            $this->grade = 'Etudiant';
        } elseif ($this->type_candidat === '1') {
            $this->grades = ['Professeur', 'Docteur', 'Monsieur', 'Madame'];
            $this->grade = '';
        }
    }
    public function showMessage($message)
    {
        $this->alert('success', $message, [
            'toast' => true,
            'icon' => 'success',
            'timer' => 4000,
            'timerProgressBar' => true,
            'onClose' => 'refresh',
            'message' => $message
        ]);
    }

    public function updatingSignup()
    {
        $this->resetErrorBag();
    }

    public function increaseStep()
    {
        $this->resetErrorBag();

        $candidateRequest = new CandidateRequest();

        if ($this->currentStep == 1) {
            $this->validate($candidateRequest->rulesStep1(), $candidateRequest->messages());
        } elseif ($this->currentStep == 2) {
            $this->validate($candidateRequest->rulesStep2(), $candidateRequest->messages());
        }

        $this->currentStep++;
    }

    public function decreaseStep()
    {
        $this->resetErrorBag();
        $this->currentStep--;
    }

    public function signup()
    {
        $candidateRequest = new CandidateRequest();

        $this->validate($candidateRequest->rulesStep3(), $candidateRequest->messages());

        $filePath = $this->projet_file->store('uploads', 'public');

        $candidature = Candidate::create([
            'full_name' => $this->full_name,
            'type_candidat' => $this->type_candidat,
            'grade' => $this->grade,
            'sexe' => $this->sexe,
            'email' => $this->email,
            'phone' => $this->phone,
            'job' => $this->job,
            'country' => $this->country,
            'city' => $this->city,
            'affiliation' => $this->affiliation,
            'type_com' => $this->type_com,
            'projet_file' => $filePath,
        ]);
        $candidature->notify(new Soumission()); // Envoi de la notification
        $this->reset();
        $this->showMessage('Formulaire soumis avec succès.');
        session()->flash('message', 'Merci pour votre soumission. Nous vous confirmerons dans les meilleurs délais.');

        return $this->redirect('/', navigate: false);
    }

    public function render()
    {
        return view('livewire.forms')->layout('layouts.main');
    }
}

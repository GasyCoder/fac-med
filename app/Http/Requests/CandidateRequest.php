<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CandidateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [];
    }

    public function rulesStep1()
    {
        return [
            'full_name' => 'required|string|max:255',
            'type_candidat' => 'required|boolean',
            'grade' => 'required',
            'sexe' => 'required',
        ];
    }

    public function rulesStep2()
    {
        $rules = [
            'email' => ['required', 'email', Rule::unique('candidates', 'email')],
            'phone' => 'required|string|max:15',
            'affiliation' => 'required|string|max:255',
        ];

        if ($this->type_candidat == '1') { // Si le candidat est un professionnel
            $rules['job'] = 'required|string|max:255';
        }

        return $rules;
    }


    public function rulesStep3()
    {
        return [
            'country' => 'required',
            'city' => 'required',
            'type_com' => 'required|boolean',
            'projet_file' => 'required|mimes:pdf,doc,docx|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Ce champ est obligatoire.',
            'string' => 'Ce champ doit être une chaîne de caractères.',
            'max' => 'Ce champ ne doit pas dépasser :max caractères.',
            'email' => 'Ce champ doit être une adresse email valide.',
            'mimes' => 'Le fichier doit être un PDF ou un DOC.',
            'projet_file.max' => 'Le fichier ne doit pas dépasser 2 Mo.',
            'email.unique' => 'Cette adresse email a déjà été utilisée pour soumettre le formulaire.',
        ];
    }
}

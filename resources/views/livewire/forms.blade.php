<div>
    <div>
        @if (session()->has('message'))
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Succès!</h4>
            <p>{{ session('message') }}</p>
            <hr>
            <p class="mb-0">Veuillez consulter votre boîte email pour toute confirmation.</p>
        </div>
        @endif
    </div>
    <!-- Title -->
    <h2 class="mb-0 h3">Soumission</h2>
    <p class="mb-0 text-sm">Remplissez le formulaire ci-dessous pour soumettre votre résumé en suivant les instructions.</p>
   <!-- Progress Bar -->
   <x-barprogress :currentStep="$currentStep" />
    <!-- resources/views/livewire/forms.blade.php -->
    <form class="mt-3 mt-sm-4 text-start" wire:submit.prevent="signup">
        <div x-data="{ uploading: false, progress: 0 }" 
            x-on:livewire-upload-start="uploading = true"
            x-on:livewire-upload-finish="uploading = false" 
            x-on:livewire-upload-cancel="uploading = false"
            x-on:livewire-upload-error="uploading = false" 
            x-on:livewire-upload-progress="progress = $event.detail.progress">
            
        @if ($currentStep == 1)
        {{-- STEP 1 --}}
        <div>
            <div class="mb-3">
                <label class="form-label text-dark">Nom complet</label>
                <input type="text" wire:model="full_name" placeholder="Nom complet" class="form-control border-secondary">
                @error('full_name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
    
            <div class="mb-3">
                <label for="sex-select" class="form-label text-dark">Type de candidat</label>
                <div class="p-2 border rounded d-flex border-secondary">
                    <div class="form-check radio-bg-light me-4">
                        <input class="form-check-input" type="radio" value="0" wire:model.live="type_candidat" id="candidat1">
                        <label class="form-check-label" for="candidat1"> Etudiant </label>
                    </div>
                    <div class="form-check radio-bg-light">
                        <input class="form-check-input" type="radio" value="1" wire:model.live="type_candidat" id="candidat2">
                        <label class="form-check-label" for="candidat2"> Professionnel </label>
                    </div>
                </div>
                @error('type_candidat') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
    
            <div class="row g-2 g-sm-4">
                <div class="mb-3 col-6">
                    <label for="grade-select" class="form-label text-dark">Titre</label>
                    <select id="grade-select" wire:model="grade" class="form-select border-secondary" aria-label="Select grade">
                        <option value="">---Choisir---</option>
                        @foreach($grades as $option)
                        <option value="{{ $option }}">{{ $option }}</option>
                        @endforeach
                    </select>
                    @error('grade') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="mb-3 col-6">
                    <label for="sex-select" class="form-label text-dark">Sexe</label>
                    <div class="p-2 border rounded d-flex border-secondary">
                        <div class="form-check radio-bg-light me-4">
                            <input class="form-check-input" type="radio" value="H" wire:model="sexe" id="sexe1">
                            <label class="form-check-label" for="sexe1"> Homme </label>
                        </div>
                        <div class="form-check radio-bg-light">
                            <input class="form-check-input" type="radio" value="F" wire:model="sexe" id="sexe2">
                            <label class="form-check-label" for="sexe2"> Femme </label>
                        </div>
                    </div>
                    @error('sexe') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>
        {{-- FIN STEP 1 --}}
        @endif
    
        @if ($currentStep == 2)
        {{-- STEP 2 --}}
        <div>
            <div class="row g-2 g-sm-4">
                <div class="mb-3 col-6">
                    <label class="form-label text-dark">Email</label>
                    <input type="email" wire:model="email" placeholder="Adresse email"
                        class="form-control border-secondary">
                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label text-dark">Téléphone</label>
                    <input type="text" wire:model="phone" placeholder="Numéro de téléphone"
                        class="form-control border-secondary">
                    @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
           
            @if ($type_candidat != '0')
            <div class="mb-3">
                <label class="form-label text-dark">Profession</label>
                <input type="text" wire:model="job" placeholder="Profession" class="form-control border-secondary">
                @error('job') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            @endif
         
            <div class="mb-3">
                <label class="form-label text-dark">Etablissement d'origine/Affiliation</label>
                <input type="text" wire:model="affiliation" placeholder="Etablissement d'origine/Affiliation"
                    class="form-control border-secondary">
                @error('affiliation') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
        {{-- FIN STEP 2 --}}
        @endif
    
        @if ($currentStep == 3)
        {{-- STEP 3 --}}
        <div>
      <div class="mb-3">
        <label class="form-label text-dark">Pays</label>
        <select wire:model="country" class="form-control border-secondary">
            <option value="">Sélectionnez un pays</option>
            @foreach ($countries as $countryCode => $countryName)
            <option value="{{ $countryCode }}">{{ $countryName }}</option>
            @endforeach
        </select>
        @error('country') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
        <div class="mb-3">
            <label class="form-label text-dark">Ville</label>
            <input type="text" id="city" wire:model="city" placeholder="Ville actuel" class="form-control border-secondary">
            @error('city') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
            <div class="mb-3">
                <label for="sex-select" class="form-label text-dark">Type de communication</label>
                <div class="p-2 border rounded d-flex border-secondary">
                    <div class="form-check radio-bg-light me-4">
                        <input class="form-check-input" type="radio" value="0" wire:model="type_com" id="comme1">
                        <label class="form-check-label" for="comme1"> Orale </label>
                    </div>
                    <div class="form-check radio-bg-light">
                        <input class="form-check-input" type="radio" value="1" wire:model="type_com" id="comme2">
                        <label class="form-check-label" for="comme2"> Affichée </label>
                    </div>
                </div>
                @error('type_com') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
    
            <div class="mb-3">
                <label class="form-label text-dark">Soumission de résumé (200 mots max, PDF ou DOC)</label>
                <input type="file" wire:model="projet_file" class="form-control border-secondary">
                @error('projet_file') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
    
            <!-- Progress Bar -->
            <div x-show="uploading" class="mt-2 progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="0"
                    aria-valuemin="0" aria-valuemax="100" x-bind:style="{ width: progress + '%' }"></div>
            </div>
        </div>
        {{-- FIN STEP 3 --}}
        <!-- Conditions d'utilisation -->
        <div class="mt-2 mb-3 d-flex align-items-center">
            <input type="checkbox" class="form-check-input me-2" id="rememberCheck" required>
            <label class="mb-0 form-check-label" for="rememberCheck">J'ai lu les <a href="#appel">instructions</a>.</label>
        </div>
        @endif
    
        <div class="mt-4 d-flex justify-content-between">
            @if ($currentStep > 1)
            <button type="button" class="btn btn-secondary" wire:click="decreaseStep">
                <i class="ml-2 bi bi-chevron-double-left"></i> Précédent 
            </button>
            @endif
    
            @if ($currentStep < 3) <button type="button" class="btn btn-primary" wire:click="increaseStep">
                Suivant <i class="bi bi-chevron-double-right ms-2"></i>
            </button>
            @endif
    
            @if ($currentStep == 3)
            <!-- Bouton de soumission avec spinner et bouton normal -->
            <div class="d-grid">
                <div wire:loading wire:target="signup">
                    <button disabled class="mb-0 btn btn-primary">
                        <i class="spinner-border spinner-border-sm" role="status"></i>
                        En cours de soumission...
                    </button>
                </div>
                <div wire:loading.remove wire:target="signup">
                    <button type="submit" class="mb-0 btn btn-success" wire:loading.attr="disabled">
                        <i class="ml-1 bi bi-check-lg"></i> Soumettre 
                    </button>
                </div>
            </div>
            @endif
        </div>
    </form>
    <!-- Form END -->
</div>

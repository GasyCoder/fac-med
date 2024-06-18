<!-- Modal START -->
<div wire:ignore.self class="modal fade" id="candidatInfo" tabindex="-1" aria-labelledby="candidatInfoLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">

            <!-- Modal header -->
            <div class="modal-header bg-dark">
                <h5 class="text-white modal-title" id="candidatInfoLabel">Informations du candidat</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Fermer"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row">
                            <!-- Information item -->
                            <div class="col-md-6">
                                <ul class="list-unstyled">
                                    <li class="mb-2"><strong>Nom complet :</strong>  
                                    {{ $full_name }}
                                    </li>
                                    <li class="mb-2"><strong>Genre :</strong> {{ $sexe }}</li>
                                    <li class="mb-2"><strong>Pays :</strong> {{ $country }}</li>
                                    <li class="mb-2"><strong>Ville :</strong> {{ $city }}</li>
                                </ul>
                            </div>
                            <!-- Information item -->
                            <div class="col-md-6">
                                <ul class="list-unstyled">
                                    <li class="mb-2"><strong>Email :</strong> {{ $email }}</li>
                                    <li class="mb-2"><strong>Téléphone :</strong> {{ $phone }}</li>
                                    <li class="mb-2"><strong>Profession :</strong> 
                                       @if($type_candidat == false) Etudiant @else {{ $job }} @endif
                                    </li>
                                    <li class="mb-2"><strong>Affiliation :</strong> {{ $affiliation }}</li>
                                </ul>
                            </div>
                            <!-- Information item -->
                            <div class="col-12">
                                <p class="mb-2"><strong>Type de communication :</strong> 
                                   <span class="badge {{ $type_com ? 'bg-info bg-opacity-10 text-info' : 'bg-primary bg-opacity-10 text-primary' }}">
                                        {{ $type_com ? 'Affichage' : 'Orale' }}
                                    </span>
                                </p>
                            </div>
                            <!-- Information END -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger-soft" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal END -->
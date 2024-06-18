<div>
    <section class="mb-4 position-relative"
        style="background-image:url({{ asset('assets/images/appel.jpeg') }}); background-size: cover;">
        <!-- Background dark overlay -->
        <div class="bg-overlay bg-blue opacity-9"></div>
        <div class="container z-index-9 position-relative">
           <div class="row g-4 g-sm-3 justify-content-between">
                <!-- Content -->
                <div class="col-lg-6 mb-10">
                    <h2 class="text-white">Journée en Sciences de la santé</h2>
                    <p class="mb-3 text-white">
                        Dans le cadre de la célébration de son <b>40ème anniversaire</b>, la Faculté de Médecine de Mahajanga
                        organisera un Congrès
                        scientifique en Science de la Santé sur le thème : <br>
                       <span class="stylish-text">"Santé pour tous"</span>
                    </p>
                    <ul class="mt-3 list-group list-group-borderless mb-sm-3">
                        <li class="text-white list-group-item h6 fw-light d-flex">
                            <i class="fas fa-check-circle fa-fw text-success me-2"></i>
                            Date : 28 et 29 Août 2024
                        </li>
                        <li class="text-white list-group-item h6 fw-light d-flex">
                            <i class="fas fa-check-circle fa-fw text-success me-2"></i>
                            Lieu : Hôtel Baobab Tree, Mahajanga
                        </li>
                        <li class="text-white list-group-item h6 fw-light d-flex">
                            <i class="fas fa-check-circle fa-fw text-success me-2"></i>
                            Date fin pour inscription : 30 Juillet 2024
                        </li>
                    </ul>
                    <a href="#appel" class="mb-2 btn btn-white">Appel à communication
                        <i class="bi bi-arrow-down ms-1"></i>
                    </a>
                    <a href="#" class="mb-2 btn btn-success">Suivre en ligne
                        <i class="bi bi-globe ms-1"></i>
                    </a>
                </div>
    
                <!-- Form -->
                <div class="col-lg-8 col-xl-6 mb-n9">
                    <div class="p-4 shadow-lg card card-body p-sm-5">
                        
                        <livewire:forms/>
                        
                    </div>
                </div>
    
            </div> <!-- Row END -->
        </div>
    </section>

    <livewire:appel-communication lazy />
    
</div>

<div>
        <!-- Title -->
        <div class="mb-3 row">
            <div class="col-12">
                <h1 class="mb-2 h4 mb-sm-0">Candidats récentes 
                    <span class="badge bg-orange bg-opacity-10 text-orange">{{ $latest_candidates }}</span>
                </h1>
            </div>
        </div>
    
        <!-- Main card START -->
        <div class="bg-transparent border card">
            <!-- Card header START -->
            <div class="card-header bg-light border-bottom">
                <!-- Search and select START -->
                <div class="row g-3 align-items-center justify-content-between">
                    <!-- Search bar -->
                    <div class="col-md-12">
                        <form class="rounded position-relative">
                            <input class="form-control bg-body" type="search" placeholder="Recherche..." aria-label="Search">
                            <button
                                class="p-2 bg-transparent border-0 position-absolute top-50 end-0 translate-middle-y text-primary-hover text-reset"
                                type="submit">
                                <i class="fas fa-search fs-6 "></i>
                            </button>
                        </form>
                    </div>
                </div>
                <!-- Search and select END -->
            </div>
            <!-- Card header END -->
    
            <!-- Card body START -->
            <div class="card-body">
                <!-- Instructor request table START -->
                <div class="border-0 table-responsive">
                    <table class="table p-4 mb-0 align-middle table-dark-gray table-hover">
                        <!-- Table head -->
                        <thead>
                            <tr>
                                <th scope="col" class="border-0">#</th>
                                <th scope="col" class="border-0">Nom complet</th>
                                <th scope="col" class="border-0">Affiliation</th>
                                <th scope="col" class="border-0">Pays</th>
                                <th scope="col" class="border-0">Inscrit</th>
                                <th scope="col" class="text-center border-0 rounded-end">Action</th>
                            </tr>
                        </thead>
                        <!-- Table body START -->
                        <tbody>
                            <!-- Table row -->
                            @foreach($candidates as $key => $candidate)
                            <tr>
                                <!-- Table data -->
                                <td>{{ $key + 1 }}</td>
                                <td>
                                    <div class="d-flex align-items-center position-relative">
                                        <div class="flex-shrink-0 avatar avatar-md">
                                            <div class="avatar-img rounded-circle bg-purple bg-opacity-10">
                                                <span class="text-purple position-absolute top-50 start-50 translate-middle fw-bold">
                                                    {{ strtoupper(substr($candidate->full_name, 0, 2)) }}
                                                </span>
                                            </div>
                                        </div>
                                        <div class="mb-0 ms-2">
                                            <!-- Title -->
                                            <h6 class="mb-0">
                                                <a href="#!" wire:click="detail({{ $candidate->id }})" data-bs-toggle="modal"
                                                    data-bs-target="#candidatInfo" class="stretched-link">
                                                    @if($candidate->grade == 'Professeur')
                                                    Pr.
                                                    @elseif($candidate->grade == 'Docteur')
                                                    Dr.
                                                    @elseif($candidate->grade == 'Monsieur')
                                                    Mr.
                                                    @elseif($candidate->grade == 'Madame')
                                                    Mme.
                                                    @endif
                                                    {{ Str::limit($candidate->full_name, 15) }}
                                                </a>
                                            </h6>
                                        </div>
                                    </div>
                                </td>
                                <!-- Table data -->
                                <td class="text-center text-sm-start">
                                    {{ Str::limit($candidate->affiliation, 15) }}
                                </td>
                                <td class="text-center text-sm-start">
                                    {{ $candidate->country }}
                                </td>
                                <!-- Table data -->
                                <td>
                                    {{ $candidate->created_at->diffForHumans() }}
                                </td>
                                <!-- Table data -->
                                <td>
                                    <button class="mb-1 btn btn-success-soft me-1 mb-lg-0" data-bs-toggle="modal" data-bs-target="#valide"
                                        wire:click="setCandidateId('{{ $candidate->id }}')">
                                        Accepter
                                    </button>
                                    <button class="mb-1 btn btn-danger-soft me-1 mb-lg-0" data-bs-toggle="modal"
                                        data-bs-target="#rejeter" wire:click="setCandidateId('{{ $candidate->id }}')">Rejeter
                                    </button>
                                    <a href="{{ route('project_file', ['id' => $candidate->id, 'uuid' => $candidate->uuid]) }}"
                                        target="_blank" class="mb-0 btn btn-primary me-1">
                                        Voir projet
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <!-- Table body END -->
                    </table>
                </div>
                <!-- Instructor request table END -->
            </div>
            <!-- Card body END -->
    
            <!-- Card footer START -->
            <div class="pt-0 bg-transparent card-footer">
                <!-- Pagination START -->
                <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                    <!-- Content -->
                    {{ $candidates->links() }}
                </div>
                <!-- Pagination END -->
            </div>
            <!-- Card footer END -->
        </div>
        <!-- Main card END -->
    <!-- Page main content END -->
    @include('livewire.pages.valide')
    @include('livewire.pages.notvalide')
    @include('livewire.pages.info')
</div>

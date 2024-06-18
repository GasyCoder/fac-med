<!-- Page main content START -->
<div class="border page-content-wrapper">

    <!-- Counter boxes START -->
    <div class="mb-4 row g-4">
        <!-- Counter item -->
        <div class="col-md-6 col-xxl-3">
            <div class="p-4 card card-body bg-warning bg-opacity-15 h-100">
                <div class="d-flex justify-content-between align-items-center">
                    <!-- Digit -->
                    <div>
                        <h2 class="mb-0 purecounter fw-bold" data-purecounter-start="0" data-purecounter-end="{{ $candidat_national }}"
                            data-purecounter-delay="200">0</h2>
                        <span class="mb-0 h6 fw-light">Candidats national</span>
                    </div>
                    <!-- Icon -->
                    <div class="mb-0 text-white icon-lg rounded-circle bg-warning"><i class="fas fa-users fa-fw"></i></div>
                </div>
            </div>
        </div>

        <!-- Counter item -->
        <div class="col-md-6 col-xxl-3">
            <div class="p-4 card card-body bg-purple bg-opacity-10 h-100">
                <div class="d-flex justify-content-between align-items-center">
                    <!-- Digit -->
                    <div>
                        <h2 class="mb-0 purecounter fw-bold" data-purecounter-start="0" data-purecounter-end="{{ $candidat_externe }}"
                            data-purecounter-delay="200">0</h2>
                        <span class="mb-0 h6 fw-light">Candidats International</span>
                    </div>
                    <!-- Icon -->
                    <div class="mb-0 text-white icon-lg rounded-circle bg-purple"><i class="fas fa-users fa-fw"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Counter item -->
        <div class="col-md-6 col-xxl-3">
            <div class="p-4 card card-body bg-primary bg-opacity-10 h-100">
                <div class="d-flex justify-content-between align-items-center">
                    <!-- Digit -->
                    <div>
                        <h2 class="mb-0 purecounter fw-bold" data-purecounter-start="0" data-purecounter-end="{{ $candidat_femme }}"
                            data-purecounter-delay="200">0</h2>
                        <span class="mb-0 h6 fw-light">Candidats Feminine</span>
                    </div>
                    <!-- Icon -->
                    <div class="mb-0 text-white icon-lg rounded-circle bg-primary"><i
                            class="fas fa-users fa-fw"></i></div>
                </div>
            </div>
        </div>

        <!-- Counter item -->
        <div class="col-md-6 col-xxl-3">
            <div class="p-4 card card-body bg-success bg-opacity-10 h-100">
                <div class="d-flex justify-content-between align-items-center">
                    <!-- Digit -->
                    <div>
                        <div class="d-flex">
                            <h2 class="mb-0 purecounter fw-bold" data-purecounter-start="0" data-purecounter-end="{{ $candidat_homme }}"
                                data-purecounter-delay="200">0</h2>
                        </div>
                        <span class="mb-0 h6 fw-light">Candidats Masculine</span>
                    </div>
                    <!-- Icon -->
                    <div class="mb-0 text-white icon-lg rounded-circle bg-success"><i class="fas fa-users fa-fw"></i></div>
                </div>
            </div>
        </div>
    </div>
    
    <livewire:candidates-latest lazy>
</div>
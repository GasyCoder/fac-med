<!-- Modal START -->
<div wire:ignore class="modal fade" id="rejeter" tabindex="-1" aria-labelledby="rejeterlabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- Modal header -->
            <div class="text-white modal-header bg-dark">
                <h5 class="modal-title" id="rejeter">Confirmer l'Action</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <!-- Modal body -->
            <div class="p-4 modal-body">
                <div class="text-center">
                    <i class="mb-3 bi bi-exclamation-triangle-fill text-warning fs-1"></i>
                    <h5>Êtes-vous sûr de vouloir continuer?</h5>
                    <p>Cette action est irréversible et vous ne pourrez pas revenir en arrière.</p>
                </div>
            </div>
            <!-- Spinner de chargement -->
            <div wire:loading wire:target="rejeter" class="mt-6 text-center loading-spinner">
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Chargement...</span>
                </div>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer justify-content-center">
                <button wire:click="rejeter()" class="btn btn-danger me-2" id="confirmBtn">Oui, rejeter</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Non</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal END -->
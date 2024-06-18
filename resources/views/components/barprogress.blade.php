@if($currentStep > 1)
<div class="mt-4 mb-4 progress bg-opacity-10">
    @php
    $progressPercentage = 0;
    if ($currentStep == 2) {
    $progressPercentage = 33;
    } elseif ($currentStep == 3) {
    $progressPercentage = 66;
    }
    @endphp
    <div wire:loading.delay wire:target="signup" class="progress-bar bg-primary progress-bar-animated"
        role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
        100%
    </div>
    <div wire:loading.remove wire:target="signup" class="progress-bar bg-primary" role="progressbar"
        style="width: {{ $progressPercentage }}%;" aria-valuenow="{{ $progressPercentage }}" aria-valuemin="0"
        aria-valuemax="100">
        {{ $progressPercentage }}%
    </div>
</div>
@endif
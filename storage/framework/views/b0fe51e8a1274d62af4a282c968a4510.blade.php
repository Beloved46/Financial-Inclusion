<dialog 
    {{ $attributes->except('wire:model')->class(["modal"]) }}
    
    @if($id)
        id="{{ $id }}"
    @else
        x-data="{open: @entangle($attributes->wire('model')).live }"                         
        :class="{'modal-open !animate-none': open}"
        :open="open"
        @keydown.escape.window = "$wire.{{ $attributes->wire('model')->value() }} = false"
    @endif
>
    <div class="modal-box">
        @if($title)
            <x-header :title="$title" :subtitle="$subtitle" size="text-2xl" :separator="$separator" class="mb-5" />
        @endif

        <p class="">
            {{ $slot }}
        </p>

        @if($separator) 
            <hr class="mt-5" /> 
        @endif

        <div class="modal-action">
            {{ $actions }}
        </div>
    </div>
</dialog>
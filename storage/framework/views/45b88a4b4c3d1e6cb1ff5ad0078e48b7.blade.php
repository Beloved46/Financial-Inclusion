    @php 
        $id = $id ?? $attributes?->whereStartsWith('wire:model')->first() 
    @endphp

    <div class="drawer absolute z-50 @if($right) drawer-end @endif">
        <!-- Toggle visibility  -->
        <input 
            id="{{ $id }}" 
            type="checkbox" 
            class="drawer-toggle" 
            {{ $attributes->whereStartsWith('wire:model') }} />

        <div class="drawer-side">
            <!-- Overlay effect , click outside -->                        
            <label for="{{ $id }}" class="drawer-overlay"></label>

            <!-- Content -->
            <div {{ $attributes->class(['bg-base-100 min-h-screen']) }}>
                {{ $slot }}
            </div>
        </div>
    </div>
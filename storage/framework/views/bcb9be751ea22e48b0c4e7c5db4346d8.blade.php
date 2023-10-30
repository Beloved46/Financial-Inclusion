    <div
        {{ $attributes->class(["bg-base-100 rounded-lg px-5 py-4  w-full", "lg:tooltip lg:$tooltipPosition" => $tooltip]) }}

        @if($tooltip)
            data-tip="{{ $tooltip }}"
        @endif
    >
        <div class="flex items-center gap-3">
            @if($icon)
                <div class="  {{ $color }}">
                    <x-icon :name="$icon" class="w-9 h-9" />
                </div>
            @endif

            <div class="text-left">
                @if($title)
                    <div class="text-xs text-gray-500 whitespace-nowrap">{{ $title }}</div>
                @endif

                <div class="font-black text-xl">{{ $value ?? $slot }}</div>

                @if($description)
                    <div class="stat-desc">{{ $description }}</div>
                @endif
            </div>
        </div>

        <!--  Force tailwind compile tooltip classes   -->
        <span class="hidden">
            <span class="lg:tooltip lg:tooltip-left lg:tooltip-right lg:tooltip-bottom lg:tooltip-top"></span>
        </span>
    </div>
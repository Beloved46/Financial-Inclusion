    @aware(['activateByRoute' => false, 'activeBgColor' => 'bg-base-300'])

    <li>
        <a
            {{
                $attributes->class([
                    "my-0.5 hover:text-inherit rounded-md",
                    "mary-active-menu $activeBgColor" => ($active || ($activateByRoute && $routeMatches()))
                ])
            }}

            @if($link)
                href="{{ $link }}" wire:navigate
            @endif
        >
            @if($icon)
                <x-icon :name="$icon" />
            @endif

            <span class="mary-hideable whitespace-nowrap">
                @if($title)
                    {{ $title }}

                    @if($badge)
                        <span class="badge badge-ghost badge-sm {{ $badgeClasses }}">{{ $badge }}</span>
                    @endif
                @else
                    {{ $slot }}
                @endif
            </span>
        </a>
    </li>
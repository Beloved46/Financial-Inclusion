<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="cupcake">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'FinPal' }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        {{-- Chart.js  --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
    </head>
    <body class="min-h-screen font-sans antialiased">
        <x-main full-width>
            <x-slot:sidebar drawer="main-drawer" collapsible class="pt-3 text-white" style="background-color: #471fbb;">
         
                {{-- Hidden when collapsed --}}
                {{-- <div class="hidden-when-collapsed ml-5 font-black text-4xl text-yellow-500">mary</div> --}}
         
                {{-- Display when collapsed --}}
                <div class="display-when-collapsed ml-5 font-black text-4xl text-orange-500">m</div>
         
              
                <x-menu activate-by-route active-bg-color="bg-blue-50" class=" mt-20 items-center">
 
                    {{-- User --}}
                    @if($user = auth()->user())
                        <div class="avatar">
                            <div class="w-24 rounded-full mb-3 h-20">
                            <img src="https://cdn5.vectorstock.com/i/1000x1000/43/94/default-avatar-photo-placeholder-icon-grey-vector-38594394.jpg" />
                            </div>
                        </div>
                        <x-menu-sub title="{{ Auth::user()->name }}" icon="o-cog-6-tooth">
                            <x-menu-item title="Profile" icon="o-user" link="{{ route('profile.edit') }}"/>
                            {{-- <x-menu-item title="Logout" icon="o-archive-box"  /> --}}

                             <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-responsive-nav-link :href="route('logout')" class="text-white" 
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Logout') }}
                                </x-responsive-nav-link>
                            </form>
                        </x-menu-sub>
                        <x-menu-item title="{{ Auth::user()->email }}"   />
                    @endif

                    
                    <x-menu-separator />

                    <x-menu-item title="Home" icon="o-home" class="font-bold" link="/docs/components/alert" />
                    <x-menu-item title="Transactions" icon="o-arrow-path-rounded-square" class="font-bold" link="/docs/components/alert" />
                    <x-menu-item title="Bill Payment" icon="o-ticket" class="font-bold" link="/docs/components/alert" />
                    <x-menu-item title="Settings" icon="o-cog-6-tooth" link="/docs/components/alert" />
                 
                    <x-menu-separator />
                 
                 
                   
                </x-menu>
            </x-slot:sidebar>
         
            {{-- The `$slot` goes here --}}
            <x-slot:content>
                {{ $slot }} 
            </x-slot:content>
        </x-main>
    </body>
</html>

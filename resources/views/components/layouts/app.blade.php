<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="cupcake">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'FinPal' }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        {{-- Chart.js  --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
    </head>
    <body class="min-h-screen font-sans antialiased">
        <x-nav sticky full-width class="pt-3  text-white" style="background-color: #7400B8;">
 
            <x-slot:brand>
                {{-- Drawer toggle for "main-drawer" --}}
                <label for="main-drawer" class="lg:hidden mr-3">
                    <x-icon name="o-bars-3" class="cursor-pointer" />
                </label>
         
                {{-- Your logo --}}
               <h1 class="text-center text-lg font-bold items-center">Hi! {{Auth::user()->name}}</h1>

            </x-slot:brand>
        </x-nav>
        <x-main full-width>
          
            
            
            <x-slot:sidebar drawer="main-drawer" collapsible class="pt-3  text-white" style="background-color: #7400B8;">
         
                {{-- Hidden when collapsed --}}
               
              
                <x-menu activate-by-route active-bg-color="bg-blue-50" class=" mt-20 items-center">
 
                    {{-- User --}}
                    @if($user = auth()->user())
                        <div class="avatar">
                            <div class="w-24 rounded-full mb-3 h-20">
                            <img src="{{ asset('img/avatar.jpg') }}" />
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

                    <x-menu-item title="Home" icon="o-home" class="font-bold" link="/" />
                    <x-menu-item title="Transact" icon="o-arrow-path-rounded-square" class="font-bold" link="#" />
                    <x-menu-item title="Analysis" icon="o-ticket" class="font-bold" link="#" />
                    <x-menu-item title="Loans" icon="o-hand-raised" class="font-bold" link="#" />
                    <x-menu-item title="Settings" icon="o-cog-6-tooth" link="#" />
                 
                    <x-menu-separator />
                 
                 
                    <div class="w-24 rounded-full mt-12 h-20">
                        <img src="{{ asset('img/pngtree-smart-chatbot-cartoon-clipart-png-image_6620453.png') }}" />
                    </div>
                   
                </x-menu>
            </x-slot:sidebar>
         
            {{-- The `$slot` goes here --}}
            <x-slot:content>
                {{ $slot }} 
            </x-slot:content>
        </x-main>

         
    </body>
</html>

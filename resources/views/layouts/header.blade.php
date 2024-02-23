<header class="bg-white">
    <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
      <div class="flex lg:flex-1">
        <a href="#" class="-m-1.5 p-1.5">
          <span class="sr-only">Your Company</span>
          <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="" />
        </a>
      </div>
      <div class="flex lg:hidden">
        <button
          type="button"
          class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700"
    
        >
          <span class="sr-only">Open main menu</span>
    
      
        </button>
      </div>
      <div class="hidden lg:flex lg:gap-x-12">
        {{-- Iterate over navigation items --}}
        <a href="/accueil" class="text-sm font-semibold leading-6 text-gray-900">Accueil</a>
<a href="/a-propos" class="text-sm font-semibold leading-6 text-gray-900">À propos</a>
<a href="/services" class="text-sm font-semibold leading-6 text-gray-900">Services</a>
<a href="/contact" class="text-sm font-semibold leading-6 text-gray-900">Contact</a>
      </div>
      @if(!Auth::guard('customer')->user())
      <div class="hidden lg:flex lg:flex-1 lg:justify-end">
        <a href="#" class="text-sm font-semibold leading-6 text-gray-900">
          Log in <span aria-hidden="true">&rarr;</span>
        </a>
      </div>
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <nav-link class="text-sm font-semibold leading-6 text-gray-900" :href="route('logout')"
                onclick="event.preventDefault();
                            this.closest('form').submit();">
            {{ __('Log Out') }}
        </nav-link>
    </form>
        @endif
        @if(Auth::guard('customer')->user())
      <div class="hidden lg:flex lg:flex-1 lg:justify-end">
        <a href="#" class="text-sm font-semibold leading-6 text-gray-900">
          Inscription <span aria-hidden="true">&rarr;</span>
        </a>
      </div>
        @endif
        @include('components.language-switcher')
     
    </nav>
  
    {{-- Mobile menu --}}

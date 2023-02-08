<div class="bg-white navbar w-full shadow-lg h-24 lg:px-32 sticky top-0 z-50" >
    <div class="flex-1">
      <a class="btn btn-ghost normal-case text-xl space-x-2">
        <img src="{{asset('../assets/image/logo.svg')}}" class="w-9" />

        <span class="text-xl">Dentiest</span>
      </a>
    </div>
    <div class="flex-none  ">
      <ul class="menu menu-horizontal px-1 space-x-0 lg:space-x-4 hidden md:flex">

        

       
        <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/" class="btn btn-ghost">{{__("web.home")}}</a></li>
        <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="/about" class="btn btn-ghost">{{__("web.about")}}</a></li>
        <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="/contact" class="btn btn-ghost">{{__("web.contact")}}</a></li>
        <li class="{{ Request::is('service') ? 'active' : '' }}"><a href="/service" class="btn btn-ghost">{{__("web.service")}}</a></li>
      
        <li><a href="#" class="btn btn-ghost shadow-lg tracking-widest text-md active:text-primary"><i class='bx bx-phone text-xl text-primary '></i> 07729830123</a></li>

        <li><a href="/book" class="btn btn-primary text-stone-50 ">{{__("web.booknow")}}</a></li>
        <label class="swap">
          <input type="checkbox" />
          <div class="swap-{{App::isLocale('ar')?'on':'off'}}">
            {{-- <a href="{{route('Lang')}}">العربية</a> --}}
          </div>
         
        </label>
      </ul>
        <label tabindex="0" class="btn btn-ghost btn-circle  md:hidden" for="my-drawer">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" /></svg>
        </label>
    </div>
  </div>


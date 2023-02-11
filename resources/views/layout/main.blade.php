<!doctype html>
<html class="scroll-smooth hover:scroll-auto" lang='en'>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('style.css')}}">
  <title>{{config('app.name')}} - {{$title}}</title>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body >

  <div class="drawer ">
    <input id="my-drawer" type="checkbox" class="drawer-toggle" hidden/>
    <div class="drawer-content scroll-smooth">
      <x-navbar />
      @yield("content")
      <x-footer/>
    </div> 
    <div class="drawer-side">
      <label for="my-drawer" class="drawer-overlay"></label>
      <ul class="menu p-4 w-80 bg-base-100 text-base-content">
        <div class="flex my-10 justify-center">
          <a class="btn btn-ghost normal-case text-xl space-x-2">
            <img src="{{asset('../assets/image/logo.svg')}}" class="w-9" />
    
            <span class="text-xl">Dentiest</span>
          </a>
        </div>
          <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/" class="btn btn-ghost">{{__("web.home")}}</a></li>
          <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="/about" class="btn btn-ghost">{{__("web.about")}}</a></li>
          {{-- <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="/contact" class="btn btn-ghost">{{__("web.contact")}}</a></li> --}}
          <li class="{{ Request::is('service') ? 'active' : '' }}"><a href="/service" class="btn btn-ghost">{{__("web.service")}}</a></li>
        
          <li><a href="#" class="btn btn-ghost shadow-lg tracking-widest text-md active:text-primary"><i class='bx bx-phone text-xl text-primary '></i> 07729830123</a></li>
         
          <li><button href="#" class="btn btn-primary text-stone-50 ">{{__("web.booknow")}}</button></li>
          <br>
          <label class="swap">
            <input type="checkbox" />
            <div class="swap-{{App::isLocale('ar')?'on':'off'}}">
              {{-- <a href="{{route('Lang')}}">العربية</a> --}}
            </div>
           
          </label>
        
      </ul>
    </div>
  </div>

  

</body>
</html>
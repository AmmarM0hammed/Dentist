<!doctype html>
<html class="scroll-smooth">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('style.css')}}">
  <title>{{config('app.name')}} - {{$title}}</title>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body >

    <div class="drawer drawer-mobile">
        <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content p-10">
          
          <p class="text-3xl font-semibold first-letter:uppercase">
            {{ request()->segment(count(request()->segments())) }}
          </p>
          @yield("content")
          <div class="navbar bg-white shadow-lg h-24 lg:px-32 fixed top-0 z-50 lg:hidden">
            <div class="flex-1">
                <a class="btn btn-ghost normal-case text-xl space-x-2">
                  <img src="{{asset('../assets/image/logo.svg')}}" class="w-9" />
                  <span class="text-xl">Dentiest</span>
                </a>
              </div>
            <div class="flex-none">
              <label class="btn btn-square btn-ghost drawer-button lg:hidden" for="my-drawer-2" >
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path></svg>
              </label>
            </div>
          </div>
        </div> 

        <div class="drawer-side bg-white shadow-lg">
          <label for="my-drawer-2" class="drawer-overlay"></label> 
          <ul class="menu p-4 w-80 space-y-5 bg-white  text-base-content">
                <div class="btn btn-ghost mt-5 flex justify-start normal-case text-xl space-x-2 mb-5">
                  <img src="{{asset('../assets/image/logo.svg')}}" class="w-9" />
                  <span class="text-xl">Dentiest</span>
                </div>
                
                <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}"><a><i class='bx bx-home-alt text-2xl font-bold'></i> Home</a></li>
                <li class="{{ Request::is('admin/users') ? 'active' : '' }}"><a><i class='bx bx-user text-2xl font-bold'></i> Users</a></li>
                <li class="{{ Request::is('admin/booklist') ? 'active' : '' }}">
                <div class="indicator w-full flex justify-between items-center">
                    <a><i class='bx bx-bell text-2xl font-bold relative top-1'></i> Request</a>
                    <span class="indicator-item badge badge-error relative right-3">0</span> 
                </div>
                </li>

                <li class=" absolute w-72 bottom-16"><a href="#"><i class='bx bx-user text-2xl font-bold '></i> Ammar Mohammed</a></li>
                <li class="absolute w-72 bottom-5"><a href="{{route('logout')}}"><i class='bx bx-log-out text-2xl font-bold '></i> Logout</a></li>
            
          </ul>
        
        </div>
      </div>
</body>
</html>
@extends('layout.main' , ["title" => "Home"])
@section('content')

<section class="app">
    
    <div class="flex wrap flex-row {{ (App::isLocale('ar')) ? "flex-row-reverse" : ''}}  md:justify-around">
        <div class="my-24 md:my-48 space-y-6 px-6 md:px-24">
            <p class=" text-4xl text-center md:text-left md:text-5xl font-bold"><span class="text-primary">{{__("web.dentist")}}</span> {{__("web.youcantrust")}}</p>
            <p class="opacity-70 text-lg text-center md:text-left"> {{__("web.disc")}}</p>
            <div class="relative space-x-3 z-30 top-11 justify-center flex md:justify-start flex-wrap">
                
                <a href="/book" class="btn btn-primary md:btn-lg">{{__("web.bookapp")}}</a>
                <button class="btn btn-ghost md:btn-lg shadow-md focus:bg-slate-100">{{__("web.ourservice")}}</button>
                <a href="#state">
                <i class="bx bx-mouse absolute top-44 left-56 text-4xl animate-bounce text-primary"></i>
                </a>
            </div>
        </div>
        
        <div class="lg:w-[65em] hidden md:flex w-[55em] -top-24 relative z-10">
            <img src="{{ asset('assets/image/bg.jpg')}} " class="w-fit rounded-3xl shadow-sm"/>
        </div>
    </div>
    {{-- Ring --}}
    <div  class="absolute outline-none -left-40 top-96 z-0">
        <img src="{{ asset('assets/image/ring.png')}} "/>
    </div>

    <div  class="absolute outline-none left-[42%] -top-2 z-0">
      <img src="{{ asset('assets/image/ring.png')}} "/>
  </div>

    {{-- State --}}
    <div id="state" class=" flex flex-wrap flex-row md:text-md py-10 justify-between px-2 md:px-10 items-center mx-5 bg-white lg:mx-48 h-fit relative  mb-5 z-30 rounded-[30px] shadow-lg">
        {{-- Contact --}}
        <div class="flex justify-between">
            <img class="h-24 w-24 relative -top-3" src="{{asset('assets/image/mail.png')}}" alt="">
            <div class="flex D flex-col ">
                <span class="text-3xl font-bold 	">{{__("web.contact")}}</span>
                <br>
                <p class="text-gray-500">+9647729830123</p>
                <p class="text- ml-1">amar661232@gmail.com</p>
                
                <a href="/book" class="btn btn-link relative -left-6">{{__("web.bookapp")}}</a>
            </div>
            
        </div>
        <div class="divider lg:divider-horizontal"></div> 
        {{-- Time --}}
        <div class="flex justify-between">
            <img class="h-24 w-24 relative -top-3" src="{{asset('assets/image/time.png')}}" alt="">
            <div class="flex D flex-col ">
                <span class="text-3xl font-bold">{{__('web.opentime')}}</span>
                <br>
                
                <p class="text-gray-500"><span class="text-primary font-semibold break-normal text-sm "> Sun , - Mon :</span> 8:00AM to 9:00PM </p>
                <p class="text-gray-500"><span class="text-primary font-semibold"> Sun , - Mon :</span> 8:00AM to 9:00PM </p>
                <p class="text-gray-500"><span class="text-primary font-semibold"> Sun , - Mon :</span> 8:00AM to 9:00PM </p>
                <br>
            </div>
            
        </div>
        <div class="divider lg:divider-horizontal"></div> 

        <div class="flex justify-between">
            <img class="h-24 w-24 relative -top-3" src="{{asset('assets/image/dentiest.png')}}" alt="">
            <div class="flex D flex-col ">
                <span class="text-3xl font-bold">{{__("web.ourservice")}}</span>
                <br>
                <p class="text-gray-500"> Test</p>
                <p class="text-gray-500">Test </p>
                <p class="text-gray-500"> Test</p>
                <br>
            </div>
            
        </div>
    </div>
    <br>
    {{-- Our Service --}}
    <div class="btn btn-secondary ml-24 mb-5 relative ">Our Services</div>
    <div class="flex items-center mx-3 md:mx-12 flex-wrap justify-center space-y-2  space-x-4  rounded-box relative  ">

        <div class="card  sm:w-80 w-full bg-base-100 shadow-xl ">
            <figure><img src="{{ asset('assets/image/teeth.svg') }}" class="w-full" /></figure>
            <div class="card-body">
              <h2 class="card-title">
                Shoes!
                <div class="badge badge-secondary">NEW</div>
              </h2>
              <p>If a dog chews shoes whose shoes does he choose?</p>
              <div class="card-actions justify-end">
                <div class="badge badge-outline">Fashion</div> 
                <div class="badge badge-outline">Products</div>
              </div>
            </div>
          </div>
          
          <div class="card sm:w-80 w-full bg-base-100 shadow-xl">
            <figure><img src="{{ asset('assets/image/teeth.svg') }}" class="w-full"/></figure>
            <div class="card-body">
              <h2 class="card-title">
                Shoes!
                <div class="badge badge-secondary">NEW</div>
              </h2>
              <p>If a dog chews shoes whose shoes does he choose?</p>
              <div class="card-actions justify-end">
                <div class="badge badge-outline">Fashion</div> 
                <div class="badge badge-outline">Products</div>
              </div>
            </div>
          </div>
          <div class="card sm:w-80 w-full bg-base-100 shadow-xl">
            <figure><img src="{{ asset('assets/image/teeth.svg') }}" class="w-full"/></figure>
            <div class="card-body">
              <h2 class="card-title">
                Shoes!
                <div class="badge badge-secondary">NEW</div>
              </h2>
              <p>If a dog chews shoes whose shoes does he choose?</p>
              <div class="card-actions justify-end">
                <div class="badge badge-outline">Fashion</div> 
                <div class="badge badge-outline">Products</div>
              </div>
            </div>
          </div>
          <div class="card sm:w-80 w-full bg-base-100 shadow-xl">
            <figure><img src="{{ asset('assets/image/teeth.svg') }}" class="w-full"/></figure>
            <div class="card-body">
              <h2 class="card-title">
                Shoes!
                <div class="badge badge-secondary">NEW</div>
              </h2>
              <p>If a dog chews shoes whose shoes does he choose?</p>
              <div class="card-actions justify-end">
                <div class="badge badge-outline">Fashion</div> 
                <div class="badge badge-outline">Products</div>
              </div>
            </div>
          </div>
    </div>
<br>
{{-- About us --}}
<div class="bg-slate-100 my-11 w-full h-96 flex flex-row flex-wrap">
    <div class=""></div>
</div>

<footer class="footer p-10 bg-base-200 text-base-content">
    <div>
      <span class="footer-title">Services</span> 
      <a class="link link-hover">Branding</a> 
      <a class="link link-hover">Design</a> 
      <a class="link link-hover">Marketing</a> 
      <a class="link link-hover">Advertisement</a>
    </div> 
    <div>
      <span class="footer-title">Company</span> 
      <a class="link link-hover">About us</a> 
      <a class="link link-hover">Contact</a> 
      <a class="link link-hover">Jobs</a> 
      <a class="link link-hover">Press kit</a>
    </div> 
    <div>
      <span class="footer-title">Legal</span> 
      <a class="link link-hover">Terms of use</a> 
      <a class="link link-hover">Privacy policy</a> 
      <a class="link link-hover">Cookie policy</a>
    </div>
  </footer> 
  <footer class="footer px-10 py-4 border-t bg-base-200 text-base-content border-base-300">
    <div class="items-center grid-flow-col">
      <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" class="fill-current"><path d="M22.672 15.226l-2.432.811.841 2.515c.33 1.019-.209 2.127-1.23 2.456-1.15.325-2.148-.321-2.463-1.226l-.84-2.518-5.013 1.677.84 2.517c.391 1.203-.434 2.542-1.831 2.542-.88 0-1.601-.564-1.86-1.314l-.842-2.516-2.431.809c-1.135.328-2.145-.317-2.463-1.229-.329-1.018.211-2.127 1.231-2.456l2.432-.809-1.621-4.823-2.432.808c-1.355.384-2.558-.59-2.558-1.839 0-.817.509-1.582 1.327-1.846l2.433-.809-.842-2.515c-.33-1.02.211-2.129 1.232-2.458 1.02-.329 2.13.209 2.461 1.229l.842 2.515 5.011-1.677-.839-2.517c-.403-1.238.484-2.553 1.843-2.553.819 0 1.585.509 1.85 1.326l.841 2.517 2.431-.81c1.02-.33 2.131.211 2.461 1.229.332 1.018-.21 2.126-1.23 2.456l-2.433.809 1.622 4.823 2.433-.809c1.242-.401 2.557.484 2.557 1.838 0 .819-.51 1.583-1.328 1.847m-8.992-6.428l-5.01 1.675 1.619 4.828 5.011-1.674-1.62-4.829z"></path></svg>
      <p>ACME Industries Ltd. <br/>Providing reliable tech since 1992</p>
    </div> 
    <div class="md:place-self-center md:justify-self-end">
      <div class="grid grid-flow-col gap-4">
        <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg></a> 
        <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path></svg></a>
        <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path></svg></a>
      </div>
    </div>
  </footer>

</section>




@endsection
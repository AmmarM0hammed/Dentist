@extends('layout.main' , ["title" => "Home"])
@section('content')

<section class="app">
    
    <div class="flex wrap flex-row {{ (App::isLocale('ar')) ? "flex-row-reverse" : ''}}   {{ (App::isLocale('ar')) ? "justify-center" : ''}}">
        <div class="my-24 md:my-48 space-y-6 px-6 md:px-24">
          
            <p class=" text-4xl text-center  {{ (App::isLocale('ar')) ? "lg:text-right" : ''}} md:text-5xl font-bold"><span class="text-primary {{ (App::isLocale('ar')) ? "text-right" : ''}}">{{__("web.dentistPh")}}</span> {{__("web.dentistName")}}</p>
            <p class="opacity-70 text-lg text-center break-words whitespace-pre-line w-96 {{ (App::isLocale('ar')) ? "lg:text-right" : ''}}"> {{__("web.disc")}}</p>
            <div class="relative space-x-3 z-30 top-11 justify-center flex md:justify-start flex-wrap {{ (App::isLocale('ar')) ? "flex-row-reverse" : ''}}">
                
                <a href="/book" class="btn btn-primary md:btn-lg mx-2">{{__("web.bookapp")}}</a>
                <a href="/service" class="btn btn-secondary md:btn-lg shadow-md focus:bg-slate-100">{{__("web.ourservice")}}</a>
                
                <a href="#state">
                <i class="bx bx-mouse absolute top-44 left-56 text-4xl animate-bounce text-primary"></i>
                </a>
            </div>
        </div>
        
        <div class="lg:w-[42em] hidden md:flex w-[50em] {{ (App::isLocale('ar')) ? "-left-36" : ''}} -top-24 relative z-10">
            <img src="{{ asset('assets/image/bg.jpg')}} " class="w-fit rounded-3xl shadow-sm"/>
        </div>
    </div>
    {{-- Ring --}}
    <div  class="absolute outline-none -left-40 top-96 z-0 ring-bg">
        <img src="{{ asset('assets/image/ring.png')}} "/>
    </div>

    <div  class="absolute outline-none left-[42%] -top-2 z-0 ring-bg">
      <img src="{{ asset('assets/image/ring.png')}} "/>
  </div>

    {{-- State --}}
    <div id="state" class=" flex flex-wrap flex-row md:text-md py-10 justify-between px-2 md:px-10 items-center mx-5 bg-white lg:mx-48 h-fit relative  mb-5 z-30 rounded-[30px] shadow-lg ">
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
    {{-- About us --}}
<div class="bg-slate-100 my-11 w-full h-fit flex flex-row flex-wrap p-10">
  <div class="bg-primary relative overflow-hidden items-center w-full lg:mx-20 rounded-3xl shadow-xl flex flex-row flex-wrap md:flex-nowrap justify-betweenw">

    <img src="{{asset('assets/image/girl.jpg')}}" class="w-full md:w-[30em]" >
    <div class="space-y-10 w-full">
      <p class="text-2xl md:text-4xl text-white font-semibold p-10 text-right">عيادة أسنان تخصصية في طب الاسنان وجراحة الفم</p>
      <a href="/book" class="btn btn-secondary btn-lg w-full md:w-60 float-right mx-0 md:mx-10 rtl">{{__("web.booknow")}}</a>
    </div>
  </div>
</div>

    {{-- Our Service --}}
    <div class="btn btn-secondary ml-24 mb-5 relative ">{{__('web.ourservice')}}</div>
    <div class="flex items-center mx-3 md:mx-12 flex-wrap justify-center space-y-2  space-x-4  rounded-box relative">
      
     
      <x-card title='تنظيف أسنان' image='1.svg' disc="شرح"/>
      <x-card title='تنظيف أسنان' image='2.svg' disc="شرح"/>
      <x-card title='تنظيف أسنان' image='3.svg' disc="شرح"/>
      <x-card title='تنظيف أسنان' image='4.svg' disc="شرح"/>
      
          
         
    </div>
<br>



</section>




@endsection
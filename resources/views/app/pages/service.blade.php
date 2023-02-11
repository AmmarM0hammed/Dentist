@extends("layout.main",["title" => "Service"])

@section("content")

<section class="app">
    
    <div class="text-center justify-center my-20">
       <p class="text-3xl md:text-5xl font-bold">خدماتنا <span class="text-primary">.</span></p>
        <p class="opacity-70 text-center text-md md:text-lg  my-12 tracking-wide font-semibold">عيادة طب اسنان تخصصية متكاملة مع افضل الاطباء المختصون  </p>
    </div>
    <br>
    <div class="flex items-center my-5 mx-12 flex-wrap justify-center  flex-grow-0 space-y-2  space-x-4  rounded-box relative -top-20 ">

      <x-card title='تنظيف أسنان' image='1.svg' disc="شرح"/>
      <x-card title='تنظيف أسنان' image='2.svg' disc="شرح"/>
      <x-card title='تنظيف أسنان' image='3.svg' disc="شرح"/>
      <x-card title='تنظيف أسنان' image='4.svg' disc="شرح"/>
      <x-card title='تنظيف أسنان' image='5.svg' disc="شرح"/>
      <x-card title='تنظيف أسنان' image='6.svg' disc="شرح"/>
    </div>
    
</section>

@endsection
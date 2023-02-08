@extends("layout.main" , ["title" => "About"])

@section("content")

<section class="app">
    <div class="flex wrap ">
        <div class="my-24 md:my-48 space-y-6 px-6 md:px-24">
            <p class=" text-4xl text-center md:text-left md:text-5xl font-bold"><span class="text-primary">Dentist</span> You Can't trust</p>
            <p class="opacity-70 text-lg text-center md:text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit velit, sapien habitant integer senectus malesuada ac.</p>
            <div class="relative top-11 justify-center flex md:justify-start flex-wrap">
                
                <button class="btn btn-primary md:btn-lg">Contact us</button>
                
            </div>
        </div>
        
        <div class="lg:w-[55em] hidden md:flex w-[50em] -top-24 relative z-10">
            <img src="{{ asset('assets/image/bg.jpg')}} " class="w-fit rounded-3xl shadow-sm"/>
        </div>
    </div>
    {{-- Ring --}}
    <div  class="absolute outline-none left-[42%] -top-2 z-0">
        <img src="{{ asset('assets/image/ring.png')}} "/>
    </div>

</section>

@endsection
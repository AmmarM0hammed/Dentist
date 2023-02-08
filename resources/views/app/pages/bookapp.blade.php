@extends("layout.main",["title" => "Book"])

@section("content")

<section class="app">
      {{-- Ring --}}
      <div  class="absolute outline-none left-[42%] -top-2 z-0">
        <img src="{{ asset('assets/image/ring.png')}} "/>
    </div>
    <div class=" flex flex-row flex-wrap justify-center sm:justify-between lg:justify-around mx-4 lg:mx-28 my-20">
        
        <div class="flex flex-col  md:w-2/4">
            <p class="text-3xl text-left md:text-5xl font-bold">Book <span class="text-primary">Appoenmit</span></p>
            <p class="opacity-70 text-md md:text-lg  my-12 tracking-wide font-semibold">Lorem ipsum dolor sit amet, consectetur adipiscing elit velit, sapien habitant integer senectus malesuada ac.</p>

            <p class="text-xl font-bold">More Info</p>
                <div class="my-5 flex flex-row items-center space-x-2">
                    <i class='bx bxs-map icon-contact'></i>  
                    <span class="text-lg font-semibold">IRAQ-BAGHDAD الحرية</span>
                </div>
                <div class="my-5 flex flex-row items-center space-x-2">
                    <i class='bx bxs-envelope icon-contact' ></i>
                    <span class="text-lg font-semibold">amar661232@gmail.com</span>
                </div>
                <div class="my-5 flex flex-row items-center space-x-2">
                    <i class='bx bxs-phone icon-contact'></i>  
                    <span class="text-lg font-semibold">+9647729830123</span>
                </div>
        </div>
        
        <div class="my-5 w-full md:w-96 z-30 bg-white rounded-3xl shadow-lg pb-3">
            <form class="flex flex-col justify-center space-y-4 mx-5 mt-5">
                <input type="text" placeholder="Fullname" class="input w-full " />
                <input type="text" placeholder="Email" class="input w-full " />
                <input type="text" placeholder="Phone Number" class="input w-full " />
                <select class="select w-full ">
                    <option disabled selected>Pick your favorite Simpson</option>
                    <option>Homer</option>
                    <option>Marge</option>
                    <option>Bart</option>
                    <option>Lisa</option>
                    <option>Maggie</option>
                  </select>
                <textarea class="textarea h-36" placeholder="Bio"></textarea>

                <button class="btn btn-primary mt-20 mb-20">Submit</button>
            </form>
        </div>
    </div>
</section>

@endsection
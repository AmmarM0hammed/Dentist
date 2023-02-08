@extends("layout.main",["title" => "Service"])

@section("content")

<section class="app">
    
    <div class="text-center justify-center my-20">
       <p class="text-3xl md:text-5xl font-bold">Service <span class="text-primary">.</span></p>
        <p class="opacity-70  text-md md:text-lg  my-12 tracking-wide font-semibold">Lorem ipsum dolor sit amet, consectetur adipiscing elit velit, sapien habitant integer senectus malesuada ac.</p>
    </div>
    <br>
    <div class="flex items-center my-5 mx-12 flex-wrap justify-center  flex-grow-0 space-y-2  space-x-4  rounded-box relative -top-20 ">

        <div class="card transition-all w-80 bg-base-100 shadow-xl ">
            <figure><img src="{{ asset('assets/image/teeth.svg') }}" /></figure>
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
          
          <div class="card w-80 bg-base-100 shadow-xl">
            <figure><img src="{{ asset('assets/image/teeth.svg') }}" /></figure>
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
          <div class="card w-80 bg-base-100 shadow-xl">
            <figure><img src="{{ asset('assets/image/teeth.svg') }}" /></figure>
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
          <div class="card w-80 bg-base-100 shadow-xl">
            <figure><img src="{{ asset('assets/image/teeth.svg') }}" /></figure>
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
    
</section>

@endsection
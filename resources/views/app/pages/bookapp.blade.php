@extends("layout.main",["title" => "Book"])

@section("content")

<section class="app">
    @if(session()->has('success'))
    <div class="alert alert-success shadow-lg z-50 mt-5" >
        <div>
          <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
          <span>{{session("success")}}</span>
        </div>
      </div>
      @endif
      {{-- Ring --}}
      <div  class="absolute outline-none left-[42%] -top-2 z-0 ring-bg">
        <img src="{{ asset('assets/image/ring.png')}} "/>
    </div>
    <div class=" flex flex-row flex-wrap {{ (App::isLocale('ar')) ? "flex-row-reverse" : ''}} justify-center md:justify-between lg:justify-evenly mx-4 lg:mx-28 my-20">
       
        <div class="flex flex-col {{ (App::isLocale('ar')) ? "text-right" : ''}}  md:w-2/4">
            <p class="text-3xl  {{ (App::isLocale('ar')) ? "text-right" : 'text-left'}} md:text-5xl font-bold">{{__('web.book')}} <span class="text-primary">{{__('web.app')}}</span></p>
            <p class="opacity-70 text-md md:text-lg  my-12 tracking-wide font-semibold">{{__('web.bookDis')}}</p>

            <p class="text-xl font-bold">{{__('web.contact.info')}}</p>
                <div class="my-5 flex flex-row {{ (App::isLocale('ar')) ? "flex-row-reverse" : ''}} items-center space-x-2">
                    <i class='bx bxs-map icon-contact'></i>  
                    <span class="text-lg font-semibold px-2">IRAQ-BAGHDAD </span>
                </div>
                <div class="my-5 flex flex-row items-center  {{ (App::isLocale('ar')) ? "flex-row-reverse" : ''}} ">
                    <i class='bx bxs-envelope icon-contact' ></i>
                    <span class="text-lg font-semibold px-2">amar661232@gmail.com</span>
                </div>
                <div class="my-5 flex flex-row {{ (App::isLocale('ar')) ? "flex-row-reverse" : ''}} items-center space-x-2">
                    <i class='bx bxs-phone icon-contact'></i>  
                    <span class="text-lg font-semibold px-2">+9647729830123</span>
                </div>
        </div>
        
        <div class="my-3 w-full md:w-96 z-30 bg-white rounded-3xl shadow-lg pb-3">
            <form class="flex flex-col justify-center space-y-4 mx-5 mt-5" method="POST" action="{{ route('bookapp') }}">
                @csrf
                @method("post")
                <div class="form-control ">
                    <input value="{{old('name')}}" type="text" name="name" placeholder="Fullname" class="input input-bordered  @error('name')border-red-500 @enderror" />
                    @error('name')
                        <label class="label">
                        <span class="label-text-alt text-red-500">{{$message}}</span>
                        </label>
                    @enderror
              </div>
                
              <div class="form-control ">
                <input value="{{old('email')}}" type="email" name="email" placeholder="Email" class="input input-bordered  @error('email')border-red-500 @enderror" />
                @error('email')
                    <label class="label">
                    <span class="label-text-alt text-red-500">{{$message}}</span>
                    </label>
                @enderror
              </div>

              <div class="form-control ">
                <input value="{{old('phone')}}" type="number" name="phone" placeholder="Phone Number" class="input input-bordered  @error('phone')border-red-500 @enderror" />
                @error('phone')
                    <label class="label">
                    <span class="label-text-alt text-red-500">{{$message}}</span>
                    </label>
                @enderror
              </div>
               
              <div class="form-control ">
                <select name="select" class="select w-full @error('select') border-red-500 @enderror">
                    <option>مراجعة</option>
                    <option>قلع سن</option>
                    <option>حشوة ضوئية</option>
                    <option>حشوة جذر</option>
                    <option>تركيب</option>
                    <option>تنظيف اسنان</option>
                    <option>تبيض اسنان</option>
                    <option>فحص أسنان</option>
                    <option>غير ذالك</option>
                  </select>
                @error('select')
                    <label class="label">
                    <span class="label-text-alt text-red-500">{{$message}}</span>
                    </label>
                @enderror
              </div>
               

              <div class="form-control ">
                <textarea name="description" class="textarea h-36 @error('description') border-red-500 @enderror"" placeholder="Description"></textarea>
                @error('description')
                    <label class="label">
                    <span class="label-text-alt text-red-500">{{$message}}</span>
                    </label>
                @enderror
              </div>
               
               

                <button class="btn btn-primary mt-20 mb-20">Submit</button>
            </form>
        </div>
    </div>
</section>

@endsection
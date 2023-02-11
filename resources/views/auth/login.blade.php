@extends('layout.main' , ["title" => "Home"])
@section('content')

    {{-- Ring --}}
    <div  class="absolute outline-none -left-40 top-96 z-0">
        <img src="{{ asset('assets/image/ring.png')}} "/>
    </div>

    <div  class="absolute outline-none left-[42%] -top-2 z-0">
      <img src="{{ asset('assets/image/ring.png')}} "/>
  </div>


<section class="app h-[87vh] flex flex-col justify-center items-center align-middle">
    @if(session()->has('error'))
    <div class="alert alert-error shadow-lg w-96 z-50">
      <div>
        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
        <span>{{session("error")}}</span>
      </div>
    </div>
    @endif
  <div class="my-5 py-6 w-96  z-30 bg-white rounded-3xl shadow-lg ">
    <form method="POST" action="{{route('login')}}" class="flex flex-col justify-center space-y-5  mx-5 p-3">
        @csrf
        @method("POST")
       <div>
        <p class="text-2xl mt-0 font-medium">Login Admin Panel</p>
        <p class="text-md  opacity-70">This page for just admins !</p>
       </div>

       <div class="form-control w-full max-w-xs">
            <input value="{{old('email')}}" type="email" name="email" placeholder="Email" class="input input-bordered w-full max-w-xs @error('email')border-red-500 @enderror"" />
            @error('email')
                <label class="label">
                <span class="label-text-alt text-red-500">{{$message}}</span>
                </label>
            @enderror
      </div>

      <div class="form-control w-full max-w-xs">
        <input value="{{old('password')}}" type="password" name="password" placeholder="Password" class="input input-bordered w-full max-w-xs @error('password')border-red-500 @enderror"" />
        @error('password')
            <label class="label">
            <span class="label-text-alt text-red-500">{{$message}}</span>
            </label>
        @enderror
    </div>
        <div class="form-control w-full max-w-xs">
            <input value="{{old('code')}}"   type="text" name="code" placeholder="Security Code" class="input input-bordered w-full max-w-xs @error('code')border-red-500 @enderror"" />
            @error('code')
                <label class="label">
                <span class="label-text-alt text-red-500">{{$message}}</span>
                </label>
            @enderror
        </div>
        <a href="#" class="text-primary text-sm font-semibold underline pl-2">Send Code</a>
        <button class="btn btn-primary mt-20 mb-20">Login</button>
        
    </form>
</div>


</section>

@endsection
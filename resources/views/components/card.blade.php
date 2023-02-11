<div class="card  sm:w-80 w-full bg-base-100 shadow-xl ">
    <figure><img src="{{ asset('assets/image/'.$image) }}" class="w-full" /></figure>
    <div class="card-body">
      <h2 class="card-title flex justify-end {{ (App::isLocale('ar')) ? "text-right" : ''}} ">
        {{$title}}
      </h2>
      <p class="{{ (App::isLocale('ar')) ? "text-right" : ''}} ">{{$disc}}</p>
      <div class="card-actions justify-end">
      </div>
    </div>
  </div>
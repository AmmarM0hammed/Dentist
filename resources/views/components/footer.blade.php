<footer class="footer footer-center  p-10 bg-white border-slate-200 border text-base-content rounded">
  <div class="flex flex-col justify-center items-center" >
    <img src="{{asset('assets/image/logo.svg')}}" class="w-11">
    <p class="text-center text-lg font-bold">{{config('app.name')}}</p>
  </div>
 
  <div class="grid grid-flow-col  gap-4 font-bold text-primary">

    <a href="/book" class="link link-hover">{{__('web.booknow')}}</a> 
    <a href="/about" class="link link-hover">{{__('web.about')}}</a> 
    <a href="/service" class="link link-hover">{{__('web.service')}}</a> 
    <a href="/" class="link link-hover">{{__('web.home')}}</a> 
   
  </div> 
  <div>
    
    <div class="grid grid-flow-col gap-4">
      <div class="grid grid-flow-col gap-4 text-primary">
        <a href="#" class="text-4xl">
          <i class='bx bxl-facebook-circle'></i>
        </a>
        <a href="#" class="text-4xl">
         <i class='bx bxl-instagram' ></i>
        </a>
       </div>
    </div>
  </div> 
 
</footer>
<footer class="footer footer-center p-4 bg-white text-base-content">
  <div>
    <p>Made By <a target="_blank" href="https://instagram.com/_jk_4" class="text-primary underline">Ammar Mohammed</a></p>
  </div>
</footer>

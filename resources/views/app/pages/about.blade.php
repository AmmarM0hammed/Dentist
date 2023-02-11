@extends("layout.main" , ["title" => "About"])

@section("content")

 <div class=" absolute outline-none left-[42%] -top-2 ring-bg">
        <img src="{{ asset('assets/image/ring.png')}} "/>
    </div>

<section class="app my-20 ">
   <div class="space-y-2 px-20 " >
        <p class=" text-2xl md:text-5xl font-bold text-center md:text-right md:mx-20"> عيادة أسنان يمكن الوثوق بها</p>
        <p class="text-1xl font-bold text-center md:text-right md:mx-20 opacity-70">التخصصية في طب الاسنان و جراحة الفم {{config('app.name')}} عيادة </p>
   </div>
   <div class="lg:px-40">
    <img src="{{asset('assets/image/about.jpg')}}" class="z-50  my-12 rounded-3xl shadow-xl w-fit">
   </div>

   {{-- <div class="flex flex-col justify-center items-center space-y-5 my-32">
        <p  class="px-5 py-1 border-slate-200 border rounded-lg bg-white text-center font-bold text-primary text-xl">هدفنا </p>
        <p class="font-bold text-4xl">هو جعل أبتسامتك أفضل</p>
   </div> --}}
<br>
   <div class="flex flex-col justify-center items-center space-y-5 my-32">
        <p  class="px-5 py-1 border-slate-200 border rounded-lg bg-white text-center font-bold text-primary text-xl">الخدمة </p>
        <p class="font-bold text-2xl md:text-4xl"> قيمنا الأساسية في تقديم الخدمة</p>
        <br>
        <div class="grid grid-cols-1  md:grid-cols-2 gap-5">

            <div class="bg-white w-full md:w-96 p-5 rounded-3xl shadow-xl flex items-center flex-row-reverse ">
                <img src="{{asset('assets/image/about/trust.svg')}}" class="rounded-2xl">
                <p class="font-bold text-2xl mx-5">ثقة عملائنا</p>
            </div>

            <div class="bg-white w-96 p-5 rounded-3xl shadow-xl flex items-center flex-row-reverse ">
                <img src="{{asset('assets/image/about/care.svg')}}" class="rounded-2xl">
                <p class="font-bold text-2xl mx-5">العناية والخدمة </p>
            </div>

            <div class="bg-white w-96 p-5 rounded-3xl shadow-xl flex items-center flex-row-reverse ">
                <img src="{{asset('assets/image/about/res.svg')}}" class="rounded-2xl">
                <p class="font-bold text-2xl mx-5">المسؤولية</p>
            </div>

            <div class="bg-white w-96 p-5 rounded-3xl shadow-xl flex items-center flex-row-reverse ">
                <img src="{{asset('assets/image/about/com.svg')}}" class="rounded-2xl">
                <p class="font-bold text-2xl mx-5">ألتزام </p>
            </div>
        </div>
   </div>


   <div class="flex flex-row-reverse lg:flex-row  justify-evenly mx-32 flex-wrap">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d213393.64379883546!2d44.495990193123!3d33.31160745313569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15577f67a0a74193%3A0x9deda9d2a3b16f2c!2z2KjYutiv2KfYrw!5e0!3m2!1sar!2siq!4v1676133548170!5m2!1sar!2siq" width="600" height="450"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="rounded-2xl shadow-xl my-5"></iframe>
    <div class="flex flex-col {{ (App::isLocale('ar')) ? "text-right" : ''}}  md:w-2/4">
        <p class="text-4xl  {{ (App::isLocale('ar')) ? "text-right" : 'text-left'}} md:text-5xl font-bold my-5">معلومات عنا</p>
  

        <p class="text-xl font-bold">{{__('web.contact.info')}}</p>
            <div class="my-5 flex flex-row {{ (App::isLocale('ar')) ? "flex-row-reverse" : ''}} items-center space-x-2">
                <i class='bx bxs-map icon-contact'></i>  
                <span class="text-lg font-semibold px-2"> IRAQ-BAGHDAD </span>
            </div>
            <div class="my-5 flex flex-row items-center  {{ (App::isLocale('ar')) ? "flex-row-reverse" : ''}} ">
                <i class='bx bxs-envelope icon-contact' ></i>
                <span class="text-lg font-semibold  px-2"">amar661232@gmail.com</span>
            </div>
            <div class="my-5 flex flex-row {{ (App::isLocale('ar')) ? "flex-row-reverse" : ''}} items-center space-x-2">
                <i class='bx bxs-phone icon-contact'></i>  
                <span class="text-lg font-semibold mx-2">+9647729830123</span>
            </div>
    </div>
    
   </div>


  

  
</section>
 
@endsection
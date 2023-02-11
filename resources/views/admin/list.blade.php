@extends("admin.layout.main" , ["title" => "List"])

@section("content")

<section class="app">
    @if(session()->has('success'))
    <div class="alert alert-success shadow-lg my-4">
        <div>
          <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
          <span>{{session("success")}}</span>
        </div>
      </div>
      @endif

      @if(session()->has('error'))
    <div class="alert alert-error shadow-lg">
        <div>
          <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
          <span>Error! Task failed successfully.</span>
        </div>
      </div>
      @endif
    <div class="overflow-x-auto w-full my-5">
        <table class="table w-full ">
          <!-- head -->
          <thead>
            <tr>
              
              <th>ID</th>
              <th>Name</th>
              <th>email</th>
              <th>Phone</th>
              <th>Vist type</th>
              <th>Description</th>
              <th>Time</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>

            <!-- row 1 -->
            @foreach ($appoenmits as $appoenmit)
                
    
            <tr>
                <td>
                    {{$appoenmit->id}}
              </td>
              <td>
                <div class="font-bold">{{$appoenmit->name}}</div>
              </td>
              
              <td>{{$appoenmit->email}}</td>
              <td>{{$appoenmit->phone}}</td>
              <td>{{$appoenmit['vist-type']}}</td>
              <td ><p class=" transition-all  break-words truncate hover:whitespace-normal hover:text-clip w-40 ">{{$appoenmit->bio}}<p></td>
              <td>{{date('m/d/Y h:i:s a', strtotime($appoenmit->created_at))}}</td>
          
              <th>
              
                <div class="flex space-x-1">
                    <form method="POST" action="{{route('admin.request.restore')}}">
                        @csrf                
                        <input value="{{$appoenmit->id}}" name="id"  hidden>
                        <button class="btn btn-primary btn-xs">Restore</button>
                    </form>
                   
                </div>
              
         
              </th>
            </tr>
           
            @endforeach
          
        </table>
        <br>
        <br>
        @if ($appoenmits->hasPages())
        <ul class="pagination flex felx-row justify-center space-x-5 mx-5 mt-list-reset text-white font-bold">
    
            {{-- Previous Page Link --}}
            @if ($appoenmits->onFirstPage())
                <li class="disabled">
                    <span class="button bg-transparent border border-brown py-2 px-4 rounded opacity-50 cursor-not-allowed">@lang('pagination.previous')</span>
                </li>
            @else
                <li>
                    <a class="button bg-transparent border border-brown py-2 px-4 rounded opacity-85" href="{{ $appoenmits->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a>
                </li>
            @endif
            <div class="divider lg:divider-horizontal"></div> 

            {{-- Next Page Link --}}
            @if ($appoenmits->hasMorePages())
                <li>
                    <a class="button bg-transparent border border-brown py-2 px-4 rounded opacity-85" href="{{ $appoenmits->nextPageUrl() }}" rel="next">@lang('pagination.next')</a>
                </li>
            @else
                <li class="disabled ">
                    <span class="button bg-transparent border border-brown py-2 px-4 rounded opacity-50 cursor-not-allowed">@lang('pagination.next')</span>
                </li>
            @endif
        </ul>
    @endif

      </div>
</section>

@endsection
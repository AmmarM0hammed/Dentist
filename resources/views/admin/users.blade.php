@extends('admin.layout.main',['title'=>'Users'])


@section('content')

<section class="flex flex-col  my-5">

    @if(session()->has('success'))
    <div class="alert alert-success shadow-lg">
        <div>
          <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
          <span>{{session("success")}}</span>
        </div>
      </div>
      @endif

      @if(session()->has('Error-manager'))
    <div class="alert alert-error shadow-lg">
        <div>
          <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
          <span>{{session("Error-manager")}}</span>
        </div>
      </div>
      @endif
      @if(session()->has('del-error'))
    <div class="alert alert-error shadow-lg">
        <div>
          <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
          <span>{{session("del-error")}}</span>
        </div>
      </div>
      @endif
  <!-- The button to open modal -->

  @if(auth()->user()->roll == 'admin')
<label for="my-modal-4" class="btn btn-primary w-52 my-5" id="openModle">Add User</label>
@endif
<!-- Put this part before </body> tag -->
<input type="checkbox" id="my-modal-4" class="modal-toggle" />
<label for="my-modal-4" class="modal cursor-pointer z-50">
  <label class="modal-box relative" for="">
    <h3 class="text-lg font-bold">Add New User</h3>
    <div class="w-full">
        <form method="POST" action="{{route('admin.user.add')}}" class="flex flex-col space-y-5 ">
            @csrf
            @method("POST")
           <div class="form-control">
                <input value="{{old('name')}}" type="text" name="name" placeholder="Full name" class="input input-bordered w-full  @error('email')border-red-500 @enderror" />
                @error('name')
                    <label class="label">
                    <span class="label-text-alt text-red-500">{{$message}}</span>
                    </label>
                @enderror
          </div>

           <div class="form-control">
                <input value="{{old('email')}}" type="email" name="email" placeholder="Email" class="input input-bordered w-full  @error('email')border-red-500 @enderror" />
                @error('email')
                    <label class="label">
                    <span class="label-text-alt text-red-500">{{$message}}</span>
                    </label>
                @enderror
          </div>
           <div class="form-control">
                <input value="{{old('phone')}}" type="phone" name="phone" placeholder="Phone" class="input input-bordered w-full  @error('phone')border-red-500 @enderror" />
                @error('phone')
                    <label class="label">
                    <span class="label-text-alt text-red-500">{{$message}}</span>
                    </label>
                @enderror
          </div>
    
           <div class="form-control">
                <input  type="password" name="password" placeholder="Password" class="input input-bordered w-full  @error('password')border-red-500 @enderror" />
                @error('password')
                    <label class="label">
                    <span class="label-text-alt text-red-500">{{$message}}</span>
                    </label>
                @enderror
          </div>

           <div class="form-control">
                <input  type="password" name="retype-password" placeholder="Re-type Password" class="input input-bordered w-full  @error('retype-password')border-red-500 @enderror" />
                @error('retype-password')
                    <label class="label">
                    <span class="label-text-alt text-red-500">{{$message}}</span>
                    </label>
                @enderror
          </div>
    
           <div class="form-control">
            <select name="roll" class="select w-full @error('roll')border-red-500 @enderror">
                <option>admin</option>
                <option>user</option>
              </select>
                @error('roll')
                    <label class="label">
                    <span class="label-text-alt text-red-500">{{$message}}</span>
                    </label>
                @enderror
          </div>
            <button class="btn btn-primary mt-20 mb-20" type="submit">Add</button>
            
        </form>
    </div>
  </label>
</label>
    <div class="overflow-x-auto w-full">
        <table class="table w-full ">
          <!-- head -->
          <thead>
            <tr>
              
              <th>ID</th>
              <th>Name</th>
              <th>email</th>
              <th>Phone</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>

            <!-- row 1 -->
            @foreach ($users as $user)
                
    
            <tr>
                <td>
                    {{$user->id}}
              </td>
              <td>
                <div class="flex items-center space-x-3">
                  <div>
                    <div class="font-bold">{{$user->name}}</div>
                    <div class="text-sm opacity-50">{{$user->roll}}</div>
                  </div>
                </div>
              </td>
              
              <td>{{$user->email}}</td>
              <td>{{$user->phone}}</td>
              <th>
                @if(auth()->user()->roll == 'admin')
                <form method="POST" action="{{route('admin.user.delete')}}">
                    @csrf
                <input value="{{$user->id}}" name="id"  hidden>
                <button class="btn btn-error btn-xs">Delete</button>
                </form>
              </th>
            </tr>
            @else
              <button class="btn btn-error btn-xs " disabled>Delete</button>
            @endif
            @endforeach
          
        </table>
      </div>

</section>

<script type="text/javascript">
    @if (count($errors) > 0)
        document.querySelector('#openModle').click();
    @endif
    </script>

@endsection
<x-layout>
    <div class="container">
     <div class="row">
         <div class="col-md-5 mx-auto">
             <div class="card p-4 my-3 shadow-sm">
                 <form method="POST" action="/login">
                     @csrf
                     <h3 class="text-primary text-center my-2">Login form</h3>
                     <div class="mb-3">
                       <label for="exampleInputEmail1" class="form-label">Email address</label>
                       <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('email') }}">
                     </div>
                     @error('email')
                     <p class="text-danger">{{$message}}</p>
                     @enderror
                     <div class="mb-3">
                       <label for="exampleInputPassword1" class="form-label">Password</label>
                       <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                     </div>
                     @error('password')
                     <p class="text-danger">{{$message}}</p>
                     @enderror
                     <button type="submit" class="btn btn-primary">Submit</button>
                   </form>
             </div>
         </div>
     </div>
    </div>
   </x-layout>

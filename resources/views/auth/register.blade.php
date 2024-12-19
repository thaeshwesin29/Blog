<x-layout>

   <div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="card p-4 my-3 shadow-sm">
                <form method="POST" action="/register">
                    @csrf
                    <h3 class="text-primary text-center my-2">Register form</h3>
                    <div class="mb-3">
                        <label for="" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="" aria-describedby="emailHelp" value="{{old('name')}}">
                      </div>

                        @error('name')
                        <p class="text-danger">{{$message}}</p>
                        @enderror

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('username')}}">
                      </div>
                      @error('username')
                      <p class="text-danger">{{$message}}</p>
                      @enderror
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('email')}}">
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

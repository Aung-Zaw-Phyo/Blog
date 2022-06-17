<x-layout>

<div class="container my-5">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <h3 class="text-center text-primary">Register Form</h3>
            <div class="card shadow-sm p-4 mt-3">
                <form method="POST">
                    @csrf
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" required
                    value="{{old('name')}}"
                    >
                    <x-error name='name'/>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" id="exampleInputEmail1" required
                    value="{{old('username')}}"
                    >
                    <x-error name='username'/>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" required
                    value="{{old('email')}}"
                    >
                    <x-error name='email'/>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" required >
                    <x-error name='password'/>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>

                    <!-- <ul>
                        @foreach($errors->all() as $error)
                            <li> {{$error}} </li>
                        @endforeach
                    </ul> -->

                </form>
            </div>
        </div>
    </div>
</div>

</x-layout>
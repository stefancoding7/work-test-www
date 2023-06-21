@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-md-6 col-12">
        <div class="card own-card shadow-lg ">
            <div class="card-body text-center">
                <h2>Login</h2>
                <form action="{{route('login-post')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
                        
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                    
                    <button type="submit" class="btn btn-primary rounded-pill" style="width: 100px">Login</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-12 d-none d-md-block">
        <div class="login-side d-flex justify-content-center align-items-center">
            <div>
                <h3 style="color: white;">Work Test Shop</h3>
                
            </div>
        </div>
    </div>
</div>

    
@endsection
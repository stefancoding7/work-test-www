@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-md-6 col-6">
        <div class="card own-card shadow-lg ">
            <div class="card-body text-center">
                <h2>Login</h2>
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    
                    <button type="submit" class="btn btn-primary rounded-pill" style="width: 100px">Login</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-6">
        <div class="login-side">

        </div>
    </div>
</div>

    
@endsection
@extends('layouts.master')
 
@section('title', 'Login')
 
@section('content')
<div class="card mt-2">
    <div class="card-header">
        Login
    </div>
    <div class="card-body">
        <form method='POST' action='{{ route("login") }}'>
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp" value='demo@demo.com'>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" value='demo'>
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@stop
<!-- การเรียกใช้งาน Tempate -->
@extends('layouts.master_template')
@section('title') เข้าสู่ระบบ @endsection
@section('content')

<div class="container d-flex align-items-center" style="height: 70vh;">
        
    <form class="col-md-4 offset-md-4" action="dashboard.html">
        <p class="text-center"><img src="{{asset('assets/images/logo.png')}}" width="200"></p>
        <div class="form-group row">
            <label for="email" class="col-sm-4 col-form-label">Email</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="email" id="email" placeholder="ป้อนอีเมล์">
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-sm-4 col-form-label">Password</label>
            <div class="col-sm-8">
                <input type="password" class="form-control" name="password" id="password" placeholder="ป้อนรหัสผ่าน">
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-sm-4 col-form-label"></label>
            <div class="col-sm-8">
                <input type="submit" class="btn btn-block btn-primary" value="Login">
            </div>
        </div>
    </form>

</div>


@endsection
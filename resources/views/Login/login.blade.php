@extends('Template/template')
@section('App')
<div class="container-fluid mt-5">
    <h2 class="text-center">Login Page</h2>
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <img src="https://img.freepik.com/free-vector/mobile-login-concept-illustration_114360-83.jpg?w=2000" class="img-fluid" alt="">
        </div>
        <div class="col-md-6 col-sm-12 d-flex flex-column justify-content-center">
            <form action="{{ route('login.perform') }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="mb-3 row ">
                    <label for="staticEmail" class="col-sm-2 col-form-label">User ID</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputUserId" name="userid" placeholder="Masukkan USER ID Yang Sudah Terdaftar">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Masukkan Password">
                    </div>
                </div>
                <div class="d-grid gap-3 d-md-flex justify-content-md-end">
                  <button type="submit" name="submit" id="btnLogin" class="btn btn-primary">Login</button>
                  <button type="button" name="" id="btnRegistrasi" class="btn btn-danger">Registrasi</button>
                </div>

            </form>
        </div>
    </div>

</div>
@endsection
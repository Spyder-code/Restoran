@extends('layouts.user.main')
@section('container')

<div class="container">


    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-12">
                <img  class="text-center mt-2" style="width:1110px; height:300px;" src="{{ asset('assets/img/logo.jpg') }}" alt="">
            <div class="card o-hidden border-0 shadow-lg my-5" >
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Restoran Pemuas Lidah</h1>
                                </div>
                            <form method="post">
                                @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control @error ('user') is-invalid @enderror"
                                        id="exampleInputEmail" name="user" placeholder="Username...">
                                        @error('user') <div class="invalid-feedback">{{ $message }}</div>@enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<div class="row">
    <div class="col col-sm-12 text-center">
        <a href="{{ url('customer-servis') }}" class="btn btn-success">Kritik Saran</a>
    </div>
</div>

@endsection


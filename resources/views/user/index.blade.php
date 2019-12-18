@extends('layouts/user/main')
@section('container')


<form method="post">
    @csrf

    <h1 class=" text-center mt-4 mb-5">Restoran Pemuas Lidah</h1>
    <div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-8">
            <h2 class="text-center">Makanan</h2>
            <hr>
                <div class="row text-center">
                        @foreach ($product as $food)
                    <div class="col-sm-3 ml-3">
                        <div class="card mt-3 ml-2" style="width: 200px;">
                            <img src="{{asset('assets/img/'.$food->image)}}" style="width:200px; height:150px">
                            <div class="card-body">
                                <h5 class="card-title" id="nama">{{$food->nama}}</h5>

                                @if ($food->rating>=50&&$food->rating<60)
                                <div class="rating">
                                        <i class="fas fa-star" style="color:yellow"></i>
                                        <i class="fas fa-star" style="color:yellow"></i>
                                        <i class="fas fa-star" style="color:yellow"></i>
                                        <i class="fas fa-star" style="color:yellow"></i>
                                </div>
                            @elseif($food->rating>=60)
                            <div class="rating">
                                    <i class="fas fa-star" style="color:yellow"></i>
                                    <i class="fas fa-star" style="color:yellow"></i>
                                    <i class="fas fa-star" style="color:yellow"></i>
                                    <i class="fas fa-star" style="color:yellow"></i>
                                    <i class="fas fa-star" style="color:yellow"></i>
                            </div>
                            @else
                            <div class="rating">
                                    <i class="fas fa-star" style="color:yellow"></i>
                                    <i class="fas fa-star" style="color:yellow"></i>
                                    <i class="fas fa-star" style="color:yellow"></i>
                                </div>
                            @endif


                                <p class="card-text" id="harga">Rp.{{$food->harga}}</p>
                                                    <form method="post">
                                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Jumlah</label>
                                        <input type="number" class="form-control " id="jumlah" name="jumlah" value="{{ old('jumlah') }}" placeholder="0" >
                                            <input type="hidden" name="nama" value="{{$food->nama}}">
                                            <input type="hidden" name="user" value="{{ $user->id }}">
                                            <input type="hidden" name="harga" value="{{$food->harga}}">
                                            <input type="hidden" name="rating" value="{{$food->rating}}">
                                        </div>
                                        @if ($food->rating>=100)
                                        <button type="submit" class="btn btn-secondary disabled ">Habis</button>
                                        @else
                                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                                        @endif
                                </form>
                            </div>
                        </div>
                        {{-- card end --}}
                    </div>
                    @endforeach
                </div>
                {{-- awal --}}
                <hr>
                <h2 class="text-center mt-5">Minuman</h2>
                <hr>
                <div class="row text-center">
                        @foreach ($drink as $drink)
                    <div class="col-sm-3 ml-3">
                        <div class="card mt-3 ml-2" style="width:200px;">
                                    <form method="post">
                                        @csrf
                                <img src="{{asset('assets/img/'.$drink->image)}}" style="width:200px; height:150px">
                            <div class="card-body">
                                <h5 class="card-title" id="nama">{{$drink->nama}}</h5>
                                @if ($drink->rating>=50&&$drink->rating<60)
                                <div class="rating">
                                        <i class="fas fa-star" style="color:yellow"></i>
                                        <i class="fas fa-star" style="color:yellow"></i>
                                        <i class="fas fa-star" style="color:yellow"></i>
                                        <i class="fas fa-star" style="color:yellow"></i>
                                </div>
                                @elseif($drink->rating>=60)
                                <div class="rating">
                                        <i class="fas fa-star" style="color:yellow"></i>
                                        <i class="fas fa-star" style="color:yellow"></i>
                                        <i class="fas fa-star" style="color:yellow"></i>
                                        <i class="fas fa-star" style="color:yellow"></i>
                                        <i class="fas fa-star" style="color:yellow"></i>
                                </div>
                                @else
                                <div class="rating">
                                        <i class="fas fa-star" style="color:yellow"></i>
                                        <i class="fas fa-star" style="color:yellow"></i>
                                        <i class="fas fa-star" style="color:yellow"></i>
                                    </div>
                                @endif



                                <p class="card-text" id="harga">Rp.{{$drink->harga}}</p>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Jumlah</label>
                                            <input type="number" class="form-control @error('jumlah') is-invalid @enderror" id="jumlah" name="jumlah" placeholder="0">
                                        @error('jumlah')<div class="invalid-feedback">{{$message}}</div>@enderror
                                            <input type="hidden" name="nama" value="{{$drink->nama}}">
                                            <input type="hidden" name="harga" value="{{$drink->harga}}">
                                            <input type="hidden" name="user" value="{{ $user->id }}">
                                            <input type="hidden" name="rating" value="{{$food->rating}}">
                                        </div>
                                        @if ($drink->rating>=100)
                                        <button type="submit" class="btn btn-secondary disabled ">Habis</button>
                                        @else
                                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                                        @endif
                                </form>
                            </div>
                        </div>
                        {{-- card end --}}
                    </div>
                        @endforeach
        </div>
    </div>
        <div class="col-4">
                <div class="card text-center sticky-top">
                    <h3 class="card-title mt-2">Transaksi</h3>
                    <hr>
                    <div class="card-body">
                            <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    @foreach ($trans as $trans)
                                        <tbody>
                                        <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{$trans->nama}}</td>
                                        <td>{{$trans->jumlah}}</td>
                                        <td>{{$trans->total}}</td>
                                        <form action="{{ $trans->id }}" method="post" class="mt-5">
                                                @method('delete')
                                                @csrf
                                                <input type="hidden" name="user" value="{{ $user->id }}">
                                                <td><button type="submit" class="badge badge-danger" onclick="return confirm('Are you sure ?')">Hapus</button></form>
                                            </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                            </table>
                            <hr>
                        <h5>Total Rp. {{ $total }}</h5>
                                <a href="{{ $user->id }}/confirm" onclick="return confirm('Are you sure ?')" class="btn btn-success btn-lg btn-block">Pesan</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
@endsection

@extends('layouts.user.main')

@section('container')

<div class="container" style="padding-top:10px;">
        <div class="row">
            <div class="col col-sm-12">
                <div class="card border-0 shadow-lg">
                    <div class="card-header mt-3 text-center"><h2>Nota Transaksi</h2></div>
                    <hr>
                    <div class="card-body">
                    <h4 class="ml-4">Atas nama   : {{$user->user }}</h4>
                    <h4 class="ml-4">No. Antrian : {{ $user->id }}</h4>
                        <table class="table  text-center">
                            <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Subtotal</th>
                            </tr>
                            </thead>
                            @foreach ($trans as $trans)
                                <tbody>
                                <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$trans->nama}}</td>
                                <td>{{$trans->jumlah}}</td>
                                <td>{{$trans->harga}}</td>
                                <td>{{ $trans->total }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                    </table>
                    <div class="row float-right">
                        <div class="col col-sm-12 mr-5">
                                <p>Total Rp.{{ $total }}</p>
                                <p>Tunai Rp.{{ $user->uang}}</p>
                                <p>Kembali Rp.{{ $user->kembalian }}</p>
                        </div>
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    window.print();
    var delay = 1500;
    setTimeout(function(){ window.location='http://localhost/restaurant/public/kasir';},delay);
    </script>
@endsection

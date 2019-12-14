@extends('layouts.admin.main')

@section('content')

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
    <hr>
    <p class="card-footer"><h3 class="float-right mr-4">Total Rp.{{ $total }}</h3>
        <h3 class="float-left mr-4">Kembali Rp.{{ $user->kembalian }}</h3>
    </p>
    </div>
<form method="POST" class="text-center mb-5">
        @method('patch')
        @csrf
        <input type="text" class="form-control  @error ('bayar') is-invalid @enderror d-inline" style="width:300px;" name="bayar" placeholder="Masukan nominal uang">
        @error('bayar') <div class="invalid-feedback">{{ $message }}</div>@enderror
        <button type="submit" class="btn btn-primary">Bayar</button>
    </form>
<a href="{{ url('print/') }}/{{ $user->id }}" class="btn btn-secondary">Print</a>
@endsection

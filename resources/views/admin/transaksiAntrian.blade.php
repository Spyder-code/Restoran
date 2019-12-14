@extends('layouts.admin.main')

@section('content')
<form action="{{ url('transaksi') }}" method="post">
    @csrf
    <input type="text" name="cari" class="form-control d-inline mt-3 ml-3 mb-4" style="width:300px;" placeholder="Cari berdasarkan antrian">
    <button type="submit" class="btn btn-primary">Search</button>
    <a href="{{ url('/kasir') }}" class="btn btn-secondary d-inline">Tampilkan semua</a>
</form>

<table class="table">
        <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Antrian</th>
        <th scope="col">Nama</th>
        <th scope="col">Status</th>
        <th scope="col">Aksi</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($trans as $tran)
            <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $tran->id }}</td>
            <td>{{ $tran->user }}</td>
            <td>
                @if($tran->status==0)
                    <button class="btn btn-danger">Belum</button>
                @else
                <button class="btn btn-success">Sudah</button>

                @endif
            </td>
            <td>
            <a href="{{ $tran->id }}/confirm" class="btn btn-primary">Confirm</a>
            </td>
            </tr>
            @endforeach
        </tbody>
        </table>





@endsection

@extends('layouts.admin.main')

@section('content')
<form action="{{ url('transaksi') }}" method="post">
    @csrf
    <input type="text" name="cari" class="form-control d-inline mt-3 ml-3 mb-4" style="width:300px;" placeholder="Cari berdasarkan antrian">
    <button type="submit" class="btn btn-primary">Search</button>
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
            @foreach ($cus as $tran)
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
                @if($tran->status==0)
                <a href="{{ $tran->id }}/confirm" class="btn btn-primary">Confirm</a>
            @else
            <a href="{{ $tran->id }}/detail" class="btn btn-secondary">Detail</a>

            @endif
            </td>
            </tr>
            @endforeach
        </tbody>
        </table>





@endsection

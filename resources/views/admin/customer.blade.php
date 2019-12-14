@extends('layouts.admin.main')

@section('content')
<table class="table">
        <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Email</th>
        <th scope="col">Subjek</th>
        <th scope="col">Isi pesan</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($mes as $pro)
            <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $pro->email }}</td>
            <td>{{ $pro->subjek }}</td>
            <td>{{ $pro->pesan }}</td>
            </tr>
            @endforeach
        </tbody>
        </table>
@endsection

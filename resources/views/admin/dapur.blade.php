    @extends('layouts.admin.main')

    @section('content')
    <table class="table">
            <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Antrian</th>
            <th scope="col">Nama</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Status</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($trans as $pro)
                <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $pro->id_customers }}</td>
                <td>{{ $pro->nama }}</td>
                <td>{{ $pro->jumlah }}</td>
                <td>
                        @if($pro->status==0)
                        <a href="{{ $pro->id }}/edit" onclick="return confirm('Are you sure ?')" class="btn btn-danger">Belum</a>
                    @else
                    <button class="btn btn-success">Sudah</button>

                    @endif
                </td>
                </tr>
                @endforeach
            </tbody>
            </table>
            <br>
            <br>

    @endsection

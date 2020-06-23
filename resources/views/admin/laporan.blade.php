@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Laporan</div>

                <div class="card-body">

                  <table class="table table-bordered table-md">
                    <tbody><tr>
                      
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Tanggal Masuk</th>
                    </tr>
                    
                    @foreach ($laporan as $laporans)
                    <tr>
                      
                          
                      <td><a href="laporan/{{$laporans->id}}" >{{$laporans->name}}</a></td>
                      <td>{{$laporans->email}}</td>
                      <td><div class="badge badge-info">{{$laporans->created_at}}</div></td>
                      
                    </tr>
                    @endforeach
                    

                  </tbody>
                </table>

                {{ $laporan->links() }}

                </div>
            </div>
        </div>

    </div>
</div>
@endsection

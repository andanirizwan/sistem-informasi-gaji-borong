@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Absensi</div>

                <div class="card-body">

                  <table class="table table-bordered table-md">
                    <tbody><tr>
                      
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Tanggal Masuk</th>
                    </tr>
                    
                    @foreach ($absensi as $absensis)
                    <tr>
                      
                          
                      <td><a href="absensi/{{$absensis->id}}" >{{$absensis->name}}</a></td>
                      <td>{{$absensis->email}}</td>
                      <td><div class="badge badge-info">{{$absensis->created_at}}</div></td>
                      
                    </tr>
                    @endforeach
                    

                  </tbody>
                </table>

                {{ $absensi->links() }}

                </div>
            </div>
        </div>

    </div>
</div>
@endsection

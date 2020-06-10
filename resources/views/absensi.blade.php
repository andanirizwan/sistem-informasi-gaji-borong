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
                      
                      <th>Tanggal</th>
                      <th>Jam Masuk</th>
                      <th>Status</th>
                    </tr>
                    
                    @foreach ($absensi as $absensis)
                    <tr>
                      
                          
                      <td>{{$absensis->waktu}}</td>
                      <td>{{$absensis->jam_masuk}}</td>
                      <td><div class="badge badge-info">Masuk</div></td>
                      
                    </tr>
                    @endforeach
                    

                  </tbody>
                </table>

                </div>
            </div>
        </div>

    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Laporan Kerjaan</div>

                <div class="card-body">
                
                  <form class="form-inline" method="GET" action="/laporan">
                    <input type="date" class="form-control mb-2 mr-sm-2" name="waktu1" >
                    <input type="date" class="form-control mb-2 mr-sm-2" name="waktu2" >

                    <button class="btn btn-primary mr-1" type="submit">Filter</button>  
                    
                  </form><br>

                  <table class="table table-bordered table-md">
                    <tbody><tr>
                      <th>No</th>
                      <th>foto</th>
                      <th>barang</th>
                      <th>jenis sablon</th>
                      <th>qty</th>
                      <th>harga</th>
                      <th>gaji</th>
                      <th>insentif</th>
                      <th>#</th>
                    </tr>

                    @php
                      $i=1
                    @endphp
                    @foreach ($laporan as $laporans)
                    

                    <tr>
                      <th>{{$i++}}</th>
                      <th><img src="{{asset('storage/'.$laporans->foto)}}" alt="" width="50px" height="50px"></th>
                      <th>{{$laporans->barang}}</th>
                      <th>{{$laporans->jenis}}</th>
                      <th>{{$laporans->qty}}</th>
                      <th>Rp. {{$laporans->harga}}</th>
                      <th>Rp. {{$laporans->gaji}}</th>
                      <th><div class="badge badge-success">Rp. {{$laporans->insentif}}</div></th>

                    </tr>
                        
                    @endforeach

                  </tbody>
                </table>

                @isset($total)
                  <h3 class="text text-right">Total Gaji Pegawai = Rp. {{$total}}</h3>
                @endisset


                @if (session('alert'))
                  <div class="alert alert-info">
                      {{ session('alert') }}
                  </div>
                @endif

                </div>
            </div>
        </div>

    </div>
</div>
@endsection

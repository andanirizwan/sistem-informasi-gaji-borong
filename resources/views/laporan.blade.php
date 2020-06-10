@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Kerjaan</div>

                <div class="card-body">

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
                      <th>{{$laporans->gaji}}</th>
                      <th><div class="badge badge-success">{{$laporans->insentif}}</div></th>
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

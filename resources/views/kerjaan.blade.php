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
                      <th>#</th>
                    </tr>

                    @php
                      $i=1
                    @endphp
                    @foreach ($kerjaan as $kerjaans)
                    

                    <tr>
                      <th>{{$i++}}</th>
                      <th><img src="{{asset('storage/'.$kerjaans->foto)}}" alt="" width="50px" height="50px"></th>
                      <th>{{$kerjaans->barang}}</th>
                      <th>{{$kerjaans->jenis}}</th>
                      <th>{{$kerjaans->qty}}</th>
                      <th>Rp. {{$kerjaans->harga}}</th>
                      <th><a href="#" class="btn btn-info">Pilih</a></th>
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

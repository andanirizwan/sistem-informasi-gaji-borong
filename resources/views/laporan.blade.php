@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Laporan Kerjaan</div>

                <div class="card-body">

                  <table class="table table-bordered table-md">
                    <tbody><tr>
                      <th>No</th>
                      <th>foto</th>
                      <th>barang</th>
                      <th>qty</th>
                      <th>harga</th>
                      <th>tanggal</th>
                      <th>gaji</th>
                      <th>bonus</th>
                    </tr>
                    <tr>
                      <th>1</th>
                      <th><img src="" alt=""></th>
                      <th>sablon plastik</th>
                      <th>1 dus</th>
                      <th>Rp. 500</th>
                      <th>01-01-2020</th>
                      <th>Rp. 500.000</th>
                      <th><div class="badge badge-success">Rp. 100.000</div></th>
                    </tr>
                    <tr>

                  </tbody>
                </table>

                </div>
            </div>
        </div>

    </div>
</div>
@endsection

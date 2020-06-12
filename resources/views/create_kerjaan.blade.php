@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Create Kerjaan</div>

                <div class="card-body">
                  <form class="form-horizontal" method="POST" action="{{route('kerjaan.store')}}" enctype="multipart/form-data">
                  <div class="form-group">
                    <label>Nama Barang :</label>
                    <input type="text" class="form-control" name="barang" required>
                  </div>
                  <div class="form-group">
                    <label>-- Jenis Sablon --</label>
                    <select class="form-control" name="jenis">
                      <option value="plastik">Plastik</option>
                      <option value="kardus">Kardus</option>
                      <option value="map">Map</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Qty :</label>
                    <input type="text" class="form-control" name="qty" required>
                  </div>
                  <div class="form-group">
                    <label>File</label>
                    <input type="file" class="form-control" name="foto">
                  </div>
                  <div class="form-group">
                    <label>Harga :</label>
                    <input type="text" class="form-control" name="harga" required>
                  </div>
                  @csrf
                  <button class="btn btn-primary mr-1" type="submit">Submit</button>
                  </form>
                </div>

              
            </div>
        </div>

    </div>
</div>
@endsection

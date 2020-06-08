@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Create Kerjaan</div>

                <div class="card-body">

                  <div class="form-group">
                    <label>Nama Barang :</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>-- Jenis Sablon --</label>
                    <select class="form-control">
                      <option>Plastik</option>
                      <option>Kardus</option>
                      <option>Map</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Qty :</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>keterangan : </label>
                    <textarea class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <label>File</label>
                    <input type="file" class="form-control">
                  </div>
                  <button class="btn btn-primary mr-1" type="submit">Submit</button>

                </div>

              
            </div>
        </div>

    </div>
</div>
@endsection

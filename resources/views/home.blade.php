@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif                    

                    <div class="row">

                        <div class="col-md-6 ">
                          <div class="card card-statistic-1">
                            <div class="card-icon bg-info">
                              <i class="far fa-file"></i>
                            </div>
                            <div class="card-wrap">
                              <div class="card-header">
                                <h4>Total Pekerjaan</h4>
                              </div>
                              <div class="card-body">
                                10
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6 ">
                            <div class="card card-statistic-1">
                              <div class="card-icon bg-primary">
                                <i class="far fa-newspaper"></i>
                              </div>
                              <div class="card-wrap">
                                <div class="card-header">
                                  <h4>Sudah dikerjaan</h4>
                                </div>
                                <div class="card-body">
                                  10
                                </div>
                              </div>
                            </div>
                          </div>
                            
                      </div>

                </div>
            </div>
        </div>


        <div class="col-md-6">
            <div class="card">
                <div class="card-header"><h4>Absensi</h4></div>

                <div class="card-body">
                
                    <div class="row">

                        <form class="form-inline">
                            <label class="sr-only" for="inlineFormInputName2">Name</label>
                            <input type="date" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" disabled>
      
                            <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
                            <div class="input-group mb-2 mr-sm-2">
                              <input type="time" class="form-control" id="inlineFormInputGroupUsername2" disabled>
                            </div>
                            <button class="btn btn-primary mr-1" type="submit">Submit</button>
                          </form>
                            
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
@endsection

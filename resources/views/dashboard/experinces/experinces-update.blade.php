@extends('layouts.backend')
@section('backendscontent')
  
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Experinces contents</h4>
                    <form action="{{ route('experinces.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf 
                        <input type="hidden" name="id" value="{{ $thisPage->id }}">
                        <div class="form-body">  
                            <div class="row">  
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Experinces Block Icon Image</label>
                                        <input type="file" class="form-control" name="counter_icon"  value="{{ $thisPage->counter_icon }}">
                                        <img src="{{ asset($thisPage->counter_icon) }}" width="100px" alt="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Counter block Number</label>
                                        <input type="number" class="form-control" name="counter_number" placeholder="{ counter number }" value="{{ $thisPage->counter_number }}" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Counter Desc</label>
                                        <input name="counter_contents" class="form-control" placeholder="desc" value="{{ $thisPage->counter_contents }}"/> 
                                    </div>
                                </div>
                            </div>  
                        </div>
                        <div class="form-actions">
                            <div class="text-right">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <button type="reset" class="btn btn-danger">Reset</button>
                                <a href="{{ url('admin/experinces/') }}" type="reset" class="btn btn-dark">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> 
    </div>
    
 
@endsection
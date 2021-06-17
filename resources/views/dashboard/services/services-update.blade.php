@extends('layouts.backend')
@section('backendscontent')
  
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Hero contents</h4>
                    <form action="{{ route('services.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf 
                        <input type="hidden" name="id" value="{{ $thisPage->id }}">
                        <div class="form-body"> 
                            <div class="row">  
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Services heading</label>
                                        <input type="text" class="form-control" name="services_heading" placeholder="{ services heading }"  value="{{ $thisPage->services_heading }}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Services Icon Image</label> 
                                        <input type="file" class="form-control" name="services_icon" value="{{ $thisPage->about_image }}" >
                                        <img src="{{ asset($thisPage->services_icon) }}" width="100px" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Services Desc</label>
                                        <textarea name="services_contents" class="form-control">{{ $thisPage->services_contents }}</textarea> 
                                    </div>
                                </div>
                            </div>  
                        </div>
                        <div class="form-actions">
                            <div class="text-right">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <button type="reset" class="btn btn-danger">Reset</button>
                                <a href="{{ url('admin/services/') }}" type="reset" class="btn btn-dark">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> 
    </div>
     
@endsection
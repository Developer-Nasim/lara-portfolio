@extends('layouts.backend')
@section('backendscontent')
  
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Testimonial contents Update</h4>
                    <form action="{{ route('testimonails.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf 
                        <input type="hidden" name="id" value="{{ $thisPage->id }}">
                        <div class="form-body">   
                            
                            <div class="row">  
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Client Image</label>
                                        <input type="file" class="form-control" name="client_img" value="{{ $thisPage->client_img }}">
                                        <img src="{{ asset($thisPage->client_img) }}" width="100px" alt="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="client_name" placeholder="{ client_name }" value="{{ $thisPage->client_name }}"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Client proffesion</label>
                                        <input type="text" class="form-control" name="client_proffesion" placeholder="{ client proffesion }" value="{{ $thisPage->client_proffesion }}"/>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Client feedback</label>
                                        <textarea name="client_feedback" class="form-control">{{ $thisPage->client_feedback }}</textarea> 
                                    </div>
                                </div>
                            </div>  
                        </div>
                        <div class="form-actions">
                            <div class="text-right">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <button type="reset" class="btn btn-danger">Reset</button>
                                <a href="{{ url('admin/testimonails/') }}" type="reset" class="btn btn-dark">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> 
    </div>
     
@endsection
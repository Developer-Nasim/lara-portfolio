@extends('layouts.backend')
@section('backendscontent')
  
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Hero contents</h4>
                    <form action="{{ route('about.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf 
                        <input type="hidden" name="id" value="{{ $thisPage->id }}">
                        <div class="form-body">
                            <div class="row"> 
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>About Desc</label>
                                        <textarea type="text" class="form-control" name="aboutText" placeholder="{ About }">{{ $thisPage->about_description }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>About Image</label>
                                        <input type="file" class="form-control" name="aboutImg" value="{{ $thisPage->about_image }}" >
                                        <img src="{{ asset($thisPage->about_image) }}" width="100px" alt="">
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="form-actions">
                            <div class="text-right">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <button type="reset" class="btn btn-danger">Reset</button>
                                <a href="{{ url('admin/about/') }}" type="reset" class="btn btn-dark">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> 
    </div>
    
@endsection
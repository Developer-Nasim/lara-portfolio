@extends('layouts.backend')
@section('backendscontent')
  
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Hero contents</h4>
                    <form action="{{ route('social.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf 
                        <input type="hidden" name="id" value="{{ $thisPage->id }}">
                        <div class="form-body">  
                            <div class="row"> 
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Add icon</label>
                                        <input type="text" class="form-control" name="socialIcon" value="{{ $thisPage->icon }}" placeholder="{ fab fa-facebook-f }"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Link</label>
                                        <input type="text" class="form-control" value="{{ $thisPage->link }}" name="socialLink" >
                                    </div>
                                </div>
                            </div>  

                        </div>
                        <div class="form-actions">
                            <div class="text-right">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <button type="reset" class="btn btn-danger">Reset</button>
                                <a href="{{ url('admin/social/') }}" type="reset" class="btn btn-dark">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> 
    </div>
    
@endsection
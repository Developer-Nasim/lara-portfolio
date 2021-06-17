@extends('layouts.backend')
@section('backendscontent')
  
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Hero contents</h4>
                    <form action="{{ route('hero.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf 
                        <input type="hidden" name="id" value="{{ $thisPage->id }}">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Hero Heading</label>
                                        <input type="text" class="form-control" name="heading" value="{{ $thisPage->title }}" placeholder=" { Artisan William } ">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Sub Heading</label>
                                        <input type="text" class="form-control" name="subheading" value="{{ $thisPage->subtitle }}" placeholder="{ Sub Heading }">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Video Link</label>
                                        <input type="text" class="form-control" name="link" value="{{ $thisPage->link }}" placeholder=" { http://youtube.com/v/asas356 } ">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Animated Text</label>
                                        <input type="text" class="form-control" name="animText" value="{{ $thisPage->animated_text }}" placeholder="{ Designer }">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Hero Image</label>
                                        <input type="file" class="form-control" value="{{ $thisPage->image }}" name="heroImg" >
                                        <img src="{{ asset($thisPage->image) }}" width="100px" alt="">
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="form-actions">
                            <div class="text-right">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <button type="reset" class="btn btn-danger">Reset</button>
                                <a href="{{ url('admin/hero/contents') }}" type="reset" class="btn btn-dark">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> 
    </div>
    
@endsection
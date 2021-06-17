@extends('layouts.backend')
@section('backendscontent')
  
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Section Title Updates</h4>
                    <form action="{{ route('sectionTitle.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf 
                        <input type="hidden" name="id" value="{{ $thisPage->id }}">
                        <div class="form-body">   
                            <div class="row"> 
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Sub Title</label>
                                        <input type="text" class="form-control" name="subtitle" placeholder="{ ... }" value="{{ $thisPage->subheading }}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="sections">Title</label>
                                        <select name="whichSection" class="form-control" id="sections">
                                            <option value="{{ $thisPage->thisection }}" selected>{{ $thisPage->thisection }}</option>
                                            <option value="hero">Hero</option>
                                            <option value="about">about</option>
                                            <option value="wedo">wedo</option> 
                                            <option value="let-work">let-work</option> 
                                            <option value="portfolio">portfolio</option> 
                                            <option value="resume">resume</option> 
                                            <option value="counter">counter</option> 
                                            <option value="testimonial">testimonial</option> 
                                            <option value="blog">blog</option> 
                                            <option value="contact">contact</option> 
                                            <option value="footer">footer</option> 
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" class="form-control" name="title" value="{{ $thisPage->heading }}">
                                    </div>
                                </div>
                            </div>  
                        </div> 
                        <div class="form-actions">
                            <div class="text-right">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <button type="reset" class="btn btn-danger">Reset</button>
                                <a href="{{ url('admin/section-title/') }}" type="reset" class="btn btn-dark">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> 
    </div>
    
@endsection
@extends('layouts.backend')
@section('backendscontent')
  
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Hero contents</h4>
                    <form action="{{ route('resume.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf 
                        <input type="hidden" name="id" value="{{ $thisPage->id }}">
                        <div class="form-body">  
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Cirtificate image</label>
                                        <input type="file" class="form-control" name="cirtificate_img" placeholder="{ Cirtificate image }" value="{{ $thisPage->cirtificate_img }}"/>
                                        <img src="{{ asset($thisPage->cirtificate_img) }}" width="100px" alt="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Heading</label>
                                        <input type="text" class="form-control" name="heading" value="{{ $thisPage->heading }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Company</label>
                                        <input type="text" class="form-control" name="company" placeholder="{ company }" value="{{ $thisPage->company }}"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>From</label>
                                        <input type="date" class="form-control" name="from" placeholder="{ from }" value="{{ $thisPage->from }}"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>To</label>
                                        <input type="date" class="form-control" name="to" value="{{ $thisPage->to }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>forthis</label>
                                        <select name="forthis" class="form-control"> 
                                            <option  value="{{ $thisPage->forthis }}">{{ $thisPage->forthis }}</option>
                                            <option value="Educations">Educations</option>
                                            <option value="Experience">Experience</option>
                                        </select> 
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea name="desciption" class="form-control">{{ $thisPage->desciption }}</textarea>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="form-actions">
                            <div class="text-right">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <button type="reset" class="btn btn-danger">Reset</button>
                                <a href="{{ url('admin/resume/') }}" type="reset" class="btn btn-dark">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> 
    </div>
     
@endsection
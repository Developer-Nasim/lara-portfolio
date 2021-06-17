@extends('layouts.backend')
@section('backendscontent')
  
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Skill contents</h4>
                    <form action="{{ route('skills.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf 
                        <input type="hidden" name="id" value="{{ $thisPage->id }}">
                        <div class="form-body"> 
                            <div class="row"> 
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Skill heading</label>
                                        <input type="text" class="form-control" name="skillTitle" placeholder="{ skill heading }" value="{{ $thisPage->skill_heading }}" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Skill description</label>
                                        <textarea class="form-control" name="skillText" placeholder="{ skill description }" >{{ $thisPage->skill_description }}</textarea>
                                    </div>
                                </div>
                            </div>  
                        </div>
                        <div class="form-actions">
                            <div class="text-right">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <button type="reset" class="btn btn-danger">Reset</button>
                                <a href="{{ url('admin/skills/') }}" type="reset" class="btn btn-dark">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> 
    </div>
    
@endsection
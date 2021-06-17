@extends('layouts.backend')
@section('backendscontent')
  
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Skill contents</h4>
                    <form action="{{ route('main.skills.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf 
                        <input type="hidden" name="id" value="{{ $thisPage->id }}">
                        <div class="form-body">  
                            <div class="row"> 
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Skill Name</label>
                                        <input type="text" class="form-control" name="skillName" placeholder="{ Html }" value="{{ $thisPage->skill_name }}" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Skill Rates</label>
                                        <input type="number" class="form-control" name="skillRates" placeholder="{ 96% }" value="{{ $thisPage->skill_rate }}" /> 
                                    </div>
                                </div>
                            </div>  
                        </div>
                        <div class="form-actions">
                            <div class="text-right">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <button type="reset" class="btn btn-danger">Reset</button>
                                <a href="{{ url('admin/skills/main/skills') }}" type="reset" class="btn btn-dark">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> 
    </div>
    
@endsection
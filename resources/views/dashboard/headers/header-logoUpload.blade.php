@extends('layouts.backend')
@section('backendscontent')

    <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Change Header Logo</h4>
                    <form action="{{ route('logo.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Logo</label>
                                        <input type="hidden" name="number" value="{{$thisPage->id}}">
                                        <input type="file" name="logofiles" class="form-control">
                                        <img src="{{ asset('frontend/img/logo/'.$thisPage->logo) }}" style="width: 100px;margin-top: 10px;" alt="">
                                    </div>
                                </div> 
                            </div> 
                        </div>
                        <div class="form-actions">
                            <div class="text-right">
                                <button type="submit" name="submit" class="btn btn-info">Submit</button>
                                <button type="reset" class="btn btn-dark">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> 
    </div>
    
 
@endsection
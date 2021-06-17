@extends('layouts.backend')
@section('backendscontent')
  
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Services contents</h4>
                    <form action="{{ route('services.content') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-body">
                            <div class="row">  
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Services heading</label>
                                        <input type="text" class="form-control" name="services_heading" placeholder="{ services heading }" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Services Icon Image</label>
                                        <input type="file" class="form-control" name="services_icon" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Services Desc</label>
                                        <textarea name="services_contents" class="form-control"></textarea> 
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="form-actions">
                            <div class="text-right">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <button type="reset" class="btn btn-dark">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Services Contents</h4>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered no-wrap">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Heading</th> 
                                    <th>Description</th> 
                                    <th>Status</th>
                                    <th>Created</th>
                                    <th>Updated</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody> 
                                @foreach( $theData as $conts )
                                    <tr> 	
                                        <td><img src="{{ asset('/'.$conts->services_icon) }}" style="width: 50px;overflow: hidden;display: block;" alt=""></td>
                                        <td>{{ $conts->services_heading }}</td>  
                                        <td>{{ $conts->services_contents }}</td>  
                                        <td>  
                                            @if($conts->status == 0)
                                                <span class="badge badge-primary">Active</span> 
                                            @else
                                                <span class="badge badge-danger">Not Active</span>  
                                            @endif
                                        </td>
                                        <td>
                                            @if($conts->created_at)
                                                {{ $conts->created_at->diffForHumans() }}
                                            @endif
                                        </td>
                                        <td> 
                                            @if($conts->updated_at)
                                                {{ $conts->updated_at->diffForHumans() }}
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ url('admin/services/delete/'.$conts->id) }}" class="btn btn-danger">Delete</a>
                                            <a href="{{ url('admin/services/update/'.$conts->id) }}" class="btn btn-primary">Update</a>
                                            @if($conts->status == 0)
                                                <a href="{{ url('admin/services/status/'.$conts->id) }}" class="btn btn-danger">Dactive It</a>
                                            @else
                                                <a href="{{ url('admin/services/status/'.$conts->id) }}" class="btn btn-primary">Active It</a>
                                            @endif
                                        </td>
                                    </tr> 
                                @endforeach
                            </tbody> 
                        </table>
                    </div> 
                </div>
            </div>
        </div>
    </div>
@endsection
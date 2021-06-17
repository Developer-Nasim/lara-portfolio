@extends('layouts.backend')
@section('backendscontent')
  
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">			
                    <h4 class="card-title">Testimonial contents</h4>
                    <form action="{{ route('testimonails.content') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-body">
                            <div class="row">  
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Client Image</label>
                                        <input type="file" class="form-control" name="client_img" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="client_name" placeholder="{ client_name }" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Client proffesion</label>
                                        <input type="text" class="form-control" name="client_proffesion" placeholder="{ client proffesion }" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Client feedback</label>
                                        <textarea name="client_feedback" class="form-control"></textarea> 
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
                    <h4 class="card-title">Testimonial Contents</h4>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered no-wrap">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Name</th> 
                                    <th>client_proffesion</th> 
                                    <th>Feedback</th> 
                                    <th>Status</th>
                                    <th>Created</th>
                                    <th>Updated</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody> 
                                @foreach( $theData as $conts )
                                    <tr> 				
                                        <td><img src="{{ asset('/'.$conts->client_img) }}" style="width: 50px;overflow: hidden;display: block;" alt=""></td>
                                        <td>{{ $conts->client_name }}</td>  
                                        <td>{{ $conts->client_proffesion }}</td>  
                                        <td>{{ $conts->client_feedback }}</td>  
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
                                            <a href="{{ url('admin/testimonails/delete/'.$conts->id) }}" class="btn btn-danger">Delete</a>
                                            <a href="{{ url('admin/testimonails/update/'.$conts->id) }}" class="btn btn-primary">Update</a>
                                            @if($conts->status == 0)
                                                <a href="{{ url('admin/testimonails/status/'.$conts->id) }}" class="btn btn-danger">Dactive It</a>
                                            @else
                                                <a href="{{ url('admin/testimonails/status/'.$conts->id) }}" class="btn btn-primary">Active It</a>
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
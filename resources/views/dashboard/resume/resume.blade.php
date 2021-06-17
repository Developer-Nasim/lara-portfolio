@extends('layouts.backend')
@section('backendscontent')
  
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Resume contents</h4>
                    <form action="{{ route('resume.content') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-body"> 
                            <div class="row">  
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Cirtificate image</label>
                                        <input type="file" class="form-control" name="cirtificate_img" placeholder="{ Cirtificate image }" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Heading</label>
                                        <input type="text" class="form-control" name="heading" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Company</label>
                                        <input type="text" class="form-control" name="company" placeholder="{ company }" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>From</label>
                                        <input type="date" class="form-control" name="from" placeholder="{ from }" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>To</label>
                                        <input type="date" class="form-control" name="to" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>forthis</label>
                                        <select name="forthis" class="form-control"> 
                                            <option value="Educations">Educations</option>
                                            <option value="Experience">Experience</option>
                                        </select> 
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea name="desciption" class="form-control"></textarea>
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
                    <h4 class="card-title">Resume Contents</h4>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered no-wrap">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Heading</th> 
                                    <th>Company</th> 
                                    <th>From -  to</th> 
                                    <th>for</th> 
                                    <th>Status</th>
                                    <th>Created</th>
                                    <th>Updated</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>  
                                @foreach( $theData as $conts )
                                    <tr> 	
                                        <td><img src="{{ asset('/'.$conts->cirtificate_img) }}" style="width: 50px;overflow: hidden;display: block;" alt=""></td>
                                        <td>{{ $conts->heading }}</td>  
                                        <td>{{ $conts->company }}</td>  
                                        <td>{{ $conts->from.' = '.$conts->to }}</td>  
                                        <td>{{ $conts->forthis }}</td>  
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
                                            <a href="{{ url('admin/resume/delete/'.$conts->id) }}" class="btn btn-danger">Delete</a>
                                            <a href="{{ url('admin/resume/update/'.$conts->id) }}" class="btn btn-primary">Update</a>
                                            @if($conts->status == 0)
                                                <a href="{{ url('admin/resume/status/'.$conts->id) }}" class="btn btn-danger">Dactive It</a>
                                            @else
                                                <a href="{{ url('admin/resume/status/'.$conts->id) }}" class="btn btn-primary">Active It</a>
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
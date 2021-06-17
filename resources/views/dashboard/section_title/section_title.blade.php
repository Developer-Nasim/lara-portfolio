@extends('layouts.backend')
@section('backendscontent')
  
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Section Titles</h4>
                    <form action="{{ route('sectionTitle.content') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-body">
                            <div class="row"> 
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Sub Title</label>
                                        <input type="text" class="form-control" name="subtitle" placeholder="{ ... }"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="sections">Title</label>
                                        <select name="whichSection" class="form-control" id="sections">
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
                                        <input type="text" class="form-control" name="title" >
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
                    <h4 class="card-title">All Section Titles</h4>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered no-wrap">
                            <thead>
                                <tr>
                                    <th>Sub Heading</th> 
                                    <th>Heading</th>
                                    <th>For</th>
                                    <th>Status</th>
                                    <th>Created</th>
                                    <th>Updated</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>   
                                @foreach( $theData as $conts )
                                    <tr> 	
                                        <td>{{ $conts->subheading }}</td> 
                                        <td>{{ $conts->heading }}</td> 
                                        <td>{{ $conts->thisection }}</td> 
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
                                            <a href="{{ url('admin/section-title/delete/'.$conts->id) }}" class="btn btn-danger">Delete</a>
                                            <a href="{{ url('admin/section-title/update/'.$conts->id) }}" class="btn btn-primary">Update</a>
                                            @if($conts->status == 0)
                                                <a href="{{ url('admin/section-title/status/'.$conts->id) }}" class="btn btn-danger">Dactive It</a>
                                            @else
                                                <a href="{{ url('admin/section-title/status/'.$conts->id) }}" class="btn btn-primary">Active It</a>
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
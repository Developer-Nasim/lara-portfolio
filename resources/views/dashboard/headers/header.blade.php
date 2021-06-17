@extends('layouts.backend')
@section('backendscontent')

    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Header Contents</h4>
                    <form action="{{ route('logo.upload') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">


                                    @if ($message = Session::get('success'))
                                        <div class="alert alert-success">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @endif
                                    @if (count($errors) > 0)
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                        <label>Logo</label>
                                        <input type="file" name="logofile" class="form-control">
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
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Header Contents</h4>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered no-wrap">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            @php
                                $num = 1;
                            @endphp
                            @foreach( $theData as $conts )
                                <tr>
                                    <td>{{ $num++ }}</td>
                                    <td><img src="{{ asset('frontend/img/logo/'.$conts->logo) }}" style="width: 50px;overflow: hidden;display: block;" alt=""></td>
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
                                        <a href="{{ url('admin/headers/logo/delete/'.$conts->id) }}" class="btn btn-danger">Delete</a>
                                        <a href="{{ url('admin/headers/logo/update/'.$conts->id) }}" class="btn btn-primary">Update</a>
                                        @if($conts->status == 0)
                                            <a href="{{ url('admin/headers/logo/status/'.$conts->id) }}" class="btn btn-danger">Dactive It</a>
                                        @else
                                            <a href="{{ url('admin/headers/logo/status/'.$conts->id) }}" class="btn btn-primary">Active It</a>
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
@extends('layouts.backend')
@section('backendscontent')
  
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Portfolio contents</h4>
                    <form action="{{ route('portfolio.content') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-body">
                            <div class="row">   
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Sub title</label>
                                        <input type="text" class="form-control" name="subtitle" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>For the</label>
                                        <select name="forthis" class="form-control"> 
                                            @foreach( $theMenuData as $categ )
                                                <option value="{{ $categ->filter_name }}">{{ $categ->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Heading</label>
                                        <input name="heading" class="form-control"/> 
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Link</label>
                                        <input name="link" class="form-control"/> 
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" class="form-control" name="image" >
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
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Portfolio Categorys</h4>
                    <form action="{{ route('portfolio.category') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-body">
                            <div class="row">   
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Category Name</label>
                                        <input type="text" class="form-control cateName" name="cateName" />
                                        <input type="hidden" class="form-control theslug" name="slug" />
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
        <div class="col-md-7">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Portfolio Contents</h4>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered no-wrap">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Sub Heading</th> 
                                    <th>Heading</th> 
                                    <th>Link</th> 
                                    <th>Status</th>
                                    <th>Created</th>
                                    <th>Updated</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody> 
                                @foreach( $theData as $conts )
                                    <tr> 	
                                        <td><img src="{{ asset('/'.$conts->image) }}" style="width: 50px;overflow: hidden;display: block;" alt=""></td>
                                        <td>{{ $conts->subtitle }}</td>  
                                        <td>{{ $conts->heading }}</td>  
                                        <td><a href="{{ $conts->link }}" title="{{ $conts->link }}" target="_blank">Link</a></td>  
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
                                            <a href="{{ url('admin/portfolio/delete/'.$conts->id) }}" class="btn btn-danger">Delete</a>
                                            <a href="{{ url('admin/portfolio/update/'.$conts->id) }}" class="btn btn-primary">Update</a>
                                            @if($conts->status == 0)
                                                <a href="{{ url('admin/portfolio/status/'.$conts->id) }}" class="btn btn-danger">Dactive It</a>
                                            @else
                                                <a href="{{ url('admin/portfolio/status/'.$conts->id) }}" class="btn btn-primary">Active It</a>
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
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Categorys Name</h4>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered no-wrap">
                            <thead>
                                <tr> 
                                    <th>Name</th>   
                                    <th>Status</th>
                                    <th>Created & Updated</th> 
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody> 
                                @if($theMenuData) 
                                @foreach( $theMenuData as $categ )
                                    <tr> 	 
                                        <td>{{ $categ->name }}</td>     
                                        <td>  
                                            @if($categ->status == 0)
                                                <span class="badge badge-primary">Active</span> 
                                            @else
                                                <span class="badge badge-danger">Not Active</span>  
                                            @endif
                                        </td>
                                        <td>
                                            @if($categ->created_at)
                                                {{ $categ->created_at->diffForHumans() }}
                                            @endif
                                            @if($categ->updated_at)
                                               <span style="display:block">&</span> 
                                                {{ $categ->updated_at->diffForHumans() }}
                                            @endif
                                        </td> 
                                        <td>
                                            <a href="{{ url('admin/portfolio/categ/delete/'.$categ->id) }}" class="btn btn-danger">Delete</a> 
                                            @if($categ->status == 0)
                                                <a href="{{ url('admin/portfolio/categ/status/'.$categ->id) }}" class="btn btn-danger">Dactive It</a>
                                            @else
                                                <a href="{{ url('admin/portfolio/categ/status/'.$categ->id) }}" class="btn btn-primary">Active It</a>
                                            @endif
                                        </td>
                                    </tr> 
                                @endforeach
                                @endif
                            </tbody> 
                        </table>
                    </div> 
                </div>
            </div>
        </div>
    </div>


    <script>
          

        let catName = document.querySelector('.cateName');
        let theslug = document.querySelector('.theslug');
        catName.addEventListener('keyup', (e) => {
            let data = e.target.value;
            let regEx = /[^a-z]/gi;
            let mainData = data.replace(regEx, '') 
            theslug.value = mainData; 
        })
    </script>
@endsection
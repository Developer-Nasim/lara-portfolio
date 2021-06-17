@extends('layouts.backend')
@section('backendscontent')
  
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Hero contents</h4>
                    <form action="{{ route('blogs.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf 
                        <input type="hidden" name="id" value="{{ $thisPage->id }}">
                        <div class="form-body">   
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Blog heading </label>
                                        <input type="text" class="form-control blog-heading" name="heading" value="{{ $thisPage->blog_heading }}" placeholder="{ heading }" />
                                        <input type="hidden" class="form-control blog-slug" name="slug" value="{{ $thisPage->blog_slug }}"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Blog Image</label>
                                        <input type="file" class="form-control" name="blog_img" value="{{ $thisPage->blog_image }}">
                                        <img src="{{ asset($thisPage->blog_image) }}" width="100px" alt="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Blog Content</label>
                                        <textarea name="blog_contents" class="form-control">{{ $thisPage->blog_contents }}</textarea> 
                                    </div>
                                </div>
                            </div>     
                        </div>
                        <div class="form-actions">
                            <div class="text-right">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <button type="reset" class="btn btn-danger">Reset</button>
                                <a href="{{ url('admin/blog/') }}" type="reset" class="btn btn-dark">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> 
    </div>
    <script>
        tinymce.init({selector:'textarea'});
        
        let title = document.querySelector('.blog-heading')
        let slug  = document.querySelector('.blog-slug') 
        title.addEventListener('keyup', (e) => { 
            let data  = e.target.value;
            let regEx = /[0-9]/gi;
            let Rslt  = data.replace(regEx, '')
            let all   = Rslt.replace(/\s/gi, '-')
            slug.value = all 
        })  


    </script>
@endsection
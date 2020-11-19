@extends('layouts.admin')
@section('sliders') active @endsection
@section('admin') 

    <!-- START: Main Content-->
    <main>
        <div class="container-fluid">

              <!-- START: Breadcrumbs-->
              <div class="row ">
                <div class="col-12  align-self-center">
                    <div class="sub-header mt-3 py-3 px-3 align-self-center d-sm-flex w-100 rounded">
                        <div class="w-sm-100 mr-auto"><h4 class="mb-0">Slider</h4></div> 
                        <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item">Add</li>
                            <li class="breadcrumb-item">Slider</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- END: Breadcrumbs-->


            <!-- START: Card Data-->
            <div class="row">
                <div class="col-12 mt-3 mb-5">
                    <div class="card">
                        <div class="card-header  justify-content-between align-items-center">    
                            <div class="row">
                                <div class="col-lg-6">
                                    <h4 class="card-title">Add Slider</h4>
                                </div>    
                                <div class="col-lg-6 text-right">
                                    <a href="{{url('/admin/header/all/slider')}}" class="bg-primary color-light" style="    
                                    border: none;
                                    padding: 10px 20px;
                                    color: #fff;
                                    border-radius: 5px;
                                    outline:none
                                    ">See the Slider</a>
                                </div>    
                            </div>                            
                        </div>
                        <div class="card-body">
                            @if (session('slider_added'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>{{session('slider_added')}}</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif  
                            <form action="{{route('add.slider')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <div class="product_img slider_img">
                                            <input type="file" id="sliderImg" name="sliderImg" required/>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="blog_content">Slider Content</label>
                                        <textarea name="blog_content" id="blog_content" class="summernote"><h2>The New</h2>
                                            <h1>Hand Tools</h1>
                                            <p>Buy One Get One Free End July 05</p></textarea>
                                    </div> 
                                </div>
                                <button type="submit" id="submit" class="btn btn-primary">Upload</button>
                            </form>  
                        </div>
                    </div> 

                </div>                  
            </div>
            <!-- END: Card DATA-->
        </div>
    </main>
    <!-- END: Content-->

@endsection
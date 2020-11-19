@extends('layouts.admin')
@section('product') active @endsection
@section('admin') 

    <!-- START: Main Content-->
    <main>
        <div class="container-fluid">

            <!-- START: Breadcrumbs-->
            <div class="row ">
                <div class="col-12  align-self-center">
                    <div class="sub-header mt-3 py-3 px-3 align-self-center d-sm-flex w-100 rounded">
                        <div class="w-sm-100 mr-auto"><h4 class="mb-0">All Product</h4></div> 
                        <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item">Add</li>
                            <li class="breadcrumb-item">Product</li> 
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
                                    <h4 class="card-title">Add Product</h4>
                                </div>    
                                <div class="col-lg-6 text-right">
                                    <a href="{{url('/admin/all/products')}}" class="bg-primary color-light" style="    
                                    border: none;
                                    padding: 10px 20px;
                                    color: #fff;
                                    border-radius: 5px;
                                    outline:none
                                    ">See the products</a>
                                </div>    
                            </div>                            
                        </div>
                        <div class="card-body">
                            <form id="add_product"> 
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="brand">Brand</label>
                                        <select id="brand" name="brand" class="form-control" required>
                                            <option selected>Choose...</option>
                                            @foreach ($allBrand as $branditem) 
                                                <option value="{{$branditem->name}}">{{$branditem->name}}</option> 
                                            @endforeach 
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="Main_category">Category</label>
                                        <select id="Main_category" name="Main_category" class="form-control" required>
                                            <option selected>Choose...</option>
                                            @foreach ($mainCategory as $cateItem)
                                                <option value="{{$cateItem->id}}">{{$cateItem->name}}</option> 
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="Sub_category">Sub category</label>
                                        <select id="Sub_category" name="Sub_category" class="form-control" required>
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="under_sub_category">Under sub-category</label>
                                        <select id="under_sub_category" name="under_sub_category" class="form-control" required>
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="Title">Title</label>
                                        <input type="text" class="form-control" placeholder="Title" name="Title" id="Title" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="Price">Price</label>
                                        <input type="number" min="0" class="form-control" placeholder="Price" name="Price" id="Price" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="Quantity">Quantity</label>
                                        <input type="number" min="0" class="form-control" placeholder="Quantity" name="Quantity" id="Quantity" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="Discount">Discount</label>
                                        <input type="number" min="0" class="form-control" placeholder="Discount" name="Discount" id="Discount" required>
                                    </div> 
                                    <div class="form-group product_check col-md-2">
                                        <span>Avaible in stock</span>
                                        <input type="checkbox" id="button" name="stock" value="avilable" required/>
                                        <label for="button"></label>
                                    </div> 
                                    <div class="form-group col-md-4">
                                        <div class="multiselect" id="countries" multiple="multiple" data-target="multi-0">
                                            <div class="title noselect">
                                                <span class="text" name="colors">Select Avaible Colors</span>
                                                <span class="close-icon">&times;</span>
                                                <span class="expand-icon">&plus;</span>
                                            </div>
                                            <div class="container">
                                                <option value="White">White</option>
                                                <option value="Black">Black</option>
                                                <option value="Blue">Blue</option>
                                                <option value="Yellow">Yellow</option>
                                                <option value="Purple">Purple</option>
                                                <option value="Red">Red</option>
                                                <option value="Green">Green</option>
                                                <option value="Coffee">Coffee</option>
                                                <option value="Brown">Brown</option>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="form-group col-md-12">
                                        <div class="product_img">  
                                            <input type="file" id="files" name="product_img[]" multiple  required/>
                                        </div> 
                                    </div>
                                    <div class="form-group col-md-12"> 
                                        <label for="">Short description</label>
                                        <textarea name="short_desc" class="summernote" required></textarea>
                                    </div> 
                                    <div class="form-group col-md-12"> 
                                        <label for="">Full description</label>
                                        <textarea name="full_desc" class="summernote" required></textarea>
                                    </div> 
                                    <div id="msg"></div> 
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
@extends('admin.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Product</h3></div>
                    <div class="card-body">
                        <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-12">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="productName" name="product_name" type="text" placeholder="Product Name" />
                                    <label for="productName">Product Name</label>
                                </div>
                            </div>
                            <br>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input class="form-control" id="productPrice" name="price" type="number" placeholder="Product price" />
                                    <label for="productPrice">Product price</label>
                                </div>
                            </div>
                            <br>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="categoryName" name="category_name" type="text" placeholder="Category Name" />
                                        <label for="categoryName">Category Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="brandName" name="brand_name" type="text" placeholder="Brand Name" />
                                        <label for="brandName">Brand Name</label>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <textarea  name="description" class="form-control"  id="" cols="69" rows="2"></textarea>
                                    <label for="description">Description</label>
                                </div>
                            </div>

                            <br>
                            <div class="col-md-12">
                                <input class="form-control" type="file" name="image"/>
                            </div>

{{--                            <div class="mt-4 mb-0 text-center" >--}}
{{--                                <input type="submit" class="btn btn-outline-success" value="Create Product">--}}
{{--                            </div>--}}

                            <div class="col-12 mt-4 mb-0">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Create Product</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

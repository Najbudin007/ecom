@extends('admin.layouts.main')

@section('content')
<div class ="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 ml-4 text-gray-800">Product</h1>
    <ol class ="breadcrumb">
    <li class="breadcrumb-items"><a href="./">Home</a></li>
    <li class="breadcrumb-items active" aria-current="page">Product</li>
</ol>
</div>

<div class="row justify-content-center">
    @if(Session::has('message'))
    <div class="alert alert-success">{{session::get('message')}}</div>
    @endif

    <div class="col-lg-12">
        <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">@csrf
            <div class="card mb-6">
                <div class ="card-header py-3 d-flex felx-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">create product</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"  id="" aria-describedby="" placeholder="Enter name of Product">
                        @error('name')
                        <span class="invalid-feedback"
                        role="alert">
                        <strong>{{ $message }}</strong>
                        </span>

                        @enderror
                    </div>


                     <div class ="form-group">
                         <div class="custom-files">
                            <label class="custom-file-label" for="custom-files">choose file</label>
                             <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="custom-files" name="image">
                             @error('image')
                             <span class="invalid-feedback"
                             role="alert">
                             <strong>{{ $message }}</strong>
                             </span>

                             @enderror


                         </div>

                         <div class="form-group">
                            <label for="">description</label>
                             <textarea name="description" class="form-control @error('description') is-invalid @enderror"></textarea>
                             {{-- <textarea  id="summary-ckeditor" name="description" class="form-control @error('description') is-invalid @enderror"></textarea> --}}
                            @error('description')
                            <span class="invalid-feedback"
                            role="alert">
                            <strong>{{ $message }}</strong>
                            </span>

                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">price</label>
                            <input type="integer" name="price" class="form-control @error('price') is-invalid @enderror"  id="" aria-describedby="" placeholder="Enter price">
                            @error('price')
                            <span class="invalid-feedback"
                            role="alert">
                            <strong>{{ $message }}</strong>
                            </span>

                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Additional_info</label>
                            <textarea name="additional_info"  class="form-control @error('description') is-invalid @enderror"></textarea>
                            @error('additional_info')
                            <span class="invalid-feedback"
                            role="alert">
                            <strong>{{ $message }}</strong>
                            </span>

                            @enderror
                        </div>




                         <div class ="form-group">

                                <label for="">Choose Category</label>
                                <select name="category" class="form-control  @error('category') is-invalid @enderror">
                                    <option value="">Select category</option>
                                    @foreach(App\Category::all() as $category)
                                <option value="{{$category->id}}">
                                    {{$category->name}}</option>
                                 @endforeach
                                </select>
                                @error('category')
                                <span class="invalid-feedback"
                                role="alert">
                                <strong>{{ $message }}</strong>
                                </span>

                                @enderror


                             </div>

                             <div class ="form-group">

                                <label for="">Choose SubCategory</label>
                                <select name="Subcategory" class="form-control">
                                    <option value="">Select</option>

                                </select>



                             </div>


                     </div>

                     <button type="submit" class="btn btn-primary">submit</button>

                </div>
            </div>
        </form>
    </div>
</div>


@endsection

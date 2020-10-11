@extends('layouts.app')
@section('content')
<div class="container">
 <div class="card">
     <div class="row">
         <aside class="col-sm-5 border-right">
             <section class="gallery-wrap">
                 <div class="img-big-wrap">
                     <a href="#">
                     <img src="{{Storage::url($product->image)}}"class="img-fluid pt-5 mx-3">
                     </a>
                 </div>
             </section>
         </aside>
         <aside class="col-sm-7">
             <section class="card-body p-5">
                <h3 class="title mb-3">
                <p style="color: blue"><b>{{$product->name}}</b></p>
                </h3>
                <p class="price-detail-wrap">
                    <span class="price h3 text-danger">
                    <span class="currency">US ${{$product->price}}</span>
                    </span>
                </p>
                <h3>Description</h3>
            <p style="color: darkgreen">{{$product->description}}</p>
                <h3>Additional information</h3>
            <p style="color: darkgreen ">{{$product->additional_info}}</p>

                <hr>

                <div class="row">
                    <div class="form-inline">
                        <h3 class="pr-2">Quantity</h3>
                        <input type="text" name="Qty" class="form-control">
                        <button class="btn btn-success  ml-3">SUBMIT</button>
                        <a href="#" class="btn btn-primary ml-2">ADD TO CART</a>
                    </div>

                </div>
             </section>
         </aside>
     </div>
 </div>

<div class="jumbotron">

    <h3>You may like</h3>
    <div class="row">


        @foreach ($productFromSameCategories as $product)
        <div class="col-md-4">
          <div class="card  card-body mt-4 " >
              <div class="card-body">
                <img src="{{Storage::url($product->image)}}" class="img" height="250" width="270">

                  <h4 style="color: dimgray;" class="pt-3 mx-3"><b><u>{{$product->name}}</u></b></h4>

                      <div class="card-text">
                          {{$product->description}}
                      </div>

                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a href="product/{{$product->id}}"> <button type="button" class="btn btn-sm btn-outline-primary">View</button> </a>
                          <button type="button" class="btn btn-sm btn-outline-success">Add to cart</button>
                        </div>
                      <span class="text-muted pr-2">${{$product->price}}</span>
                      </div>

              </div>
          </div>
      </div>
      @endforeach

      </div>
</div>






</div>

@endsection



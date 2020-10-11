@extends('layouts.app')

@section('content')
<main role="main">

    <section class="jumbotron text-center">
      <div class="container">
        <h1 class="jumbotron-heading">Album example</h1>
        <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
        <p>
          <a href="#" class="btn btn-primary my-2">Main call to action</a>
          <a href="#" class="btn btn-secondary my-2">Secondary action</a>
        </p>
      </div>
    </section>
    <h2>Category</h2>
    @foreach (App\Category::all() as $cat)
    <button class="btn btn-secondary">
        {{$cat->name}}
    </button>
    @endforeach

    <div class="album py-5 bg-light">
      <div class="container">
        <h2>Products</h2>
        <div class="row">


          @foreach ($products as $product)
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


<hr>
<h3 class="text-center" style="color: greenyellow">SUGGESTIONS</h3>
<hr>

<div class="jumbotron">

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <div class="row">
            @foreach ($randomActiveproducts as $product)


            <div class="col-4">
                <div class="card  card-body mt-4 " >
                    <div class="card-body">
                      <img src="{{Storage::url($product->image)}}" class="img img-fluid" >

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
    <div class="carousel-item">
        <div class="row">
            @foreach ($randomActiveproducts as $product)


            <div class="col-4">
                <div class="card  card-body mt-4 " >
                    <div class="card-body">
                      <img src="{{Storage::url($product->image)}}" class="img img-fluid" >

                        <h4 style="color: dimgray;" class="pt-3 mx-3"><b><u>{{$product->name}}</u></b></h4>

                            <div class="card-text">
                                {{Str::limit($product->description,100)}}
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
</div>
    </div>


  </main>

  <footer id="main-footer" class="py-5 bg-secondary text-white">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-6 ml-auto">
          <p class="lead">
            Copyright &copy;
            <span id="year"></span>
          </p>
        </div>
      </div>
    </div>
  </footer>










</div>
@endsection

@extends('layouts.template')

@section('metadata')
    @php  
        $image= explode(',', $product->image) ;  
        $metaimage=asset($image[0]);  

        $title ="";
        if($category2->name == $product->name){
            $title = $product->name;
        }
        else{
            $title = $category2->name . ": " .$product->name;
        } 
    @endphp
  @include('meta::manager', [
    'title'         => $title.  '  económico aquí en  CAMI & VALE INDUSTRIAL S.A.C',
    'description'   => $product->description,
    'keywords'   => $product->name. ', ' .$category2->name .', ' .$category2->description,
    'image' => $metaimage,
])
@endsection

@section('links')
    <style>
        .table-category{
            padding:1rem 1rem !important;
            border-left: 2px solid #447FEB;
            border-right: 2px solid #447FEB;
        }
        .table-category a{
            padding:1rem 2rem;
            text-transform :uppercase;
        }
    
    </style>
    
@endsection

@section('content')
    

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark"  data-bg-img="{{asset('img/bg/product.jpg')}}" loading="lazy">
        <div class="container pt-100 pb-50">
          <!-- Section Content -->
          <div class="section-content pt-50">
            <div class="row"> 
              <div class="col-sm-8 text-left flip xs-text-center">
                <h2 class="title text-white">{{$product->name}}  </h2>
              </div>
              <div class="col-sm-4">
                <ol class="breadcrumb text-right sm-text-center text-black mt-10">
                  <li><a href="{{route('home.index')}}" class="text-white">Inicio</a></li>
                  <li><a href="{{route('product.index')}}" class="text-white">{{$category2->name}}</a></li>
                  <li class="active text-theme-colored">{{$product->name}}</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </section>

    <section style=>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 hidden-xs hidden-sm">
                <div class="table-responsive" >
                    <table class="table" style="background: #fff; position: absolute;top:-1.5rem; ">
                        <thead>
                            @foreach ($categories as $category)
                                <th class="table-category"><a href="{{route('product.show', $category)}}">{{$category->name}}</a></th>
                            @endforeach
                        </thead>
                    </table>
                </div>
            </div>
        </div>


        <div class="container mt-30 mb-30 pt-30 pb-30">
        <div class="row">
            <div class="col-md-10 pull-right flip sm-pull-none">
            <div class="blog-posts">
                <div class="col-md-12">
                <div class="row list-dashed">
                    <article class="post clearfix mb-30 pb-30">
                        <div class="entry-header">
                            <div class="post-thumb thumb"> 
                            </div>
                        </div>
                        <div class="entry-content border-1px p-20 pr-10">
                            <div class="row">
                                <h2 class="alert alert-danger text-uppercase ">
                                    @if($category2->name == $product->name)
                                        {{$product->name}}
                                    @else 
                                        {{$category2->name}} :: {{$product->name}}
                                    @endif
                                </h2>
                                <div class="col-md-8">
                                   {!!$product->description!!}
                                </div>
                                <div class="col-md-4">
                                    <hr>
                                    <div id="carousel1" class="carousel slide mt-60" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carousel1" data-slide-to="0" class="active"></li>
                                            <li data-target="#carousel1" data-slide-to="1"></li>
                                            <li data-target="#carousel1" data-slide-to="2"></li>
                                            <li data-target="#carousel1" data-slide-to="3"></li>
                                        </ol>
                                        <div class="carousel-inner" role="listbox">
                                            <div class="item active">
                                                <img src="{{asset($image[0])}}" class="d-block w-100" alt="{{$product->name}}-1" loading="lazy">
                                            </div>
                        
                                            <div class="item">
                                                <img src="{{asset($image[1])}}" class="d-block w-100" alt="{{$product->name}}-2" loading="lazy">
                                            </div>
                        
                                            <div class="item">
                                                <img src="{{asset($image[2])}}" class="d-block w-100" alt="{{$product->name}}-3" loading="lazy">
                                            </div>
                                            <div class="item">
                                                <img src="{{asset($image[3])}}" class="d-block w-100" alt="{{$product->name}}-4" loading="lazy">
                                            </div>
                                        </div>
                                        <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                            <span class="sr-only">Anterior</span>
                                        </a>
                                        <a class="right carousel-control" href="#carousel1" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                            <span class="sr-only">Siguiente</span>
                                        </a>
                                        </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                    </article>

                </div>
                </div>
                
            </div>
            </div>
            <div class="col-md-2">
            <div class="sidebar sidebar-right mt-sm-30">
                <div class="widget">
                <h5 class="widget-title">{{$category2->name}} </h5>
                <ul class="list-divider list-border list check">
                    @foreach ($category2->products as $product)
                        @php $category =$category2 @endphp
                        <li><a href="{{route('product.product',[$category,$product])}}">{{$product->name}}</a></li>
                    @endforeach
                </ul>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section> 
    <!-- end main-content -->

@endsection
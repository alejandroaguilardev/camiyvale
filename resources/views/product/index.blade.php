@extends('layouts.template')

@section('metadata')
  @include('meta::manager', [
    'title'         => 'Nuestros Productos Vávulas, Tuberías, Conexiones y  Bridas - CAMI & VALE INDUSTRIAL S.A.C',
    'description'   => 'Somos importadores y comercializadores de productos  industriales como válvulas, bridas, conexiones, tubos, empaquetaduras y juntas, también fabricamos piezas especiales .',
])
@endsection



@section('content')
    
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark"  data-bg-img="{{asset('img/bg/product.jpg')}}" loading="lazy">
        <div class="container pt-100 pb-50">
          <!-- Section Content -->
          <div class="section-content pt-50">
            <div class="row"> 
              <div class="col-sm-8 text-left flip xs-text-center">
                <h2 class="title text-white">Nuestros Productos </h2>
              </div>
              <div class="col-sm-4">
                <ol class="breadcrumb text-right sm-text-center text-black mt-10">
                  <li><a href="{{route('home.index')}}" class="text-white">Inicio</a></li>
                  <li class="active text-theme-colored">Productos</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </section>


      <section id="doctors">
        <div class="container">
        <div class="section-title text-center">
            <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2 class=" mt-0 line-height-1">Nuestros <span class="text-theme-colored">Productos</span></h2>
                <center>
                <span class=border-bt-2></span>
                <p>Comercialización de tuberías, válvula y conexiones de acero y ferretería industrial en general.</p>
                </center>
            </div>
            </div>
        </div>
        <div class="row mtli-row-clearfix">
            @foreach ($categories as $category)    
                <div class="col-md-4">
                    <article class="post clearfix maxwidth600 mb-30 wow fadeInRight" data-wow-delay=".2s">
                    <div class="entry-header">
                    <div class="post-thumb thumb">
                        <a href="{{route('product.show', $category)}}"> 
                            <img src="{{asset($category->image)}}" alt="{{$category->name}}"  title="{{$category->name}}" class="img-responsive img-fullwidth" loading="lazy">
                        </a> 
                    </div>
                    </div>
                    <div class="bg-theme-colored2 p-5 text-center pt-10 pb-10">
                    <a href="{{route('product.show', $category)}}"><span class="mb-10 text-white mr-10 font-13"><i class="fa fa-cubes mr-5 text-white"></i>{{$category->name}}</span></a>
                    </div>
                    <div class="entry-content bg-lighter p-20 pr-10">
                        <div class="clearfix"></div>
                    </div>
                </article>
                </div>
            @endforeach
                
            </div>
            </div>
        </div>
        </div>
    </section>
@endsection
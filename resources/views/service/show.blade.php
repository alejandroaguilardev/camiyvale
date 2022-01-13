@extends('layouts.template')


@section('metadata')
  @php $image = asset($service->image); @endphp
  @include('meta::manager', [
    'title'         => 'Realizamos '. $service->name.  ' rápido y económico aquí en  CAMI & VALE INDUSTRIAL S.A.C',
    'description'   => $service->description,
    'keywords'   => $service->name. ': ' .$service->description,
    'image' => $image,
])
@endsection

@section('content')
    
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark"  data-bg-img="{{asset('img/bg/service.jpg')}}" loading="lazy">
        <div class="container pt-100 pb-50">
          <!-- Section Content -->
          <div class="section-content pt-50">
            <div class="row"> 
              <div class="col-sm-8 text-left flip xs-text-center">
                <h2 class="title text-white">{{$service->name}}</h2>
              </div>
              <div class="col-sm-4">
                <ol class="breadcrumb text-right sm-text-center text-black mt-10">
                  <li><a href="{{route('home.index')}}" class="text-white">Inicio</a></li>
                  <li><a href="{{route('service.index')}}" class="text-white">Servicio</a></li>
                  <li class="active text-theme-colored">{{$service->name}}</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </section>


      <section>
        <div class="container mt-30 mb-30 pt-30 pb-30">
          <div class="row">
            <div class="col-md-8">
              <div class="blog-posts">
                <div class="col-md-12">
                  <div class="row list-dashed">
                
                    <article class="post clearfix mb-30 pb-30">
                      <div class="entry-header">
                        <div class="post-thumb thumb"> 
                          <img src="{{asset($service->image)}}" title="{{$service->name}}" alt="{{$service->name}}" class="img-responsive img-fullwidth" loading="lazy"> 
                        </div>
                      </div>
                      <div class="entry-content border-1px p-20 pr-10">
                        <div class="entry-meta media mt-0 no-bg no-border">
                          <div class="media-body pl-15">
                            <div class="event-content pull-left flip">
                              <h3 class="entry-title  text-uppercase m-0 mt-5">{{$service->name}}</h3><br>
                              <span class="border-bt"></span>
                          </div>
                        </div>
                       {!!$service->description!!}
                       <a class="btn btn-colored btn-flat btn-theme-colored mt-15 mt-sm-10 pt-10 pb-10 " href="https://wa.me/{{$informations->whatsapp}}/?text=Buen día, estoy interesado"  target="_blank">Cotizar</a>
                       <div class="clearfix"></div>
                      </div>
                    </article>
  
  
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="sidebar sidebar-right mt-sm-30">
                <div class="widget">
                  <h5 class="widget-title"><b>OTROS SERVICIOS</b></h5>
                  <span class="border-bt"></span>
                  <div class="widget-image-carousel">
                        @foreach ($services_related as $service)
                            <div class="item">
                                <a href="{{route('service.show', $service)}}">
                                    <img style="width:365px;height:180px;objet-fit:cover" src="{{asset($service->image)}}" alt="{{$service->name}}" title="{{$service->name}}" loading="lazy">
                                    <h4 class="title"><b>Servicio {{$service->name}}<b></h4> 
                                </a>
                                <hr>
                            </div> 
                        @endforeach
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> 

@endsection
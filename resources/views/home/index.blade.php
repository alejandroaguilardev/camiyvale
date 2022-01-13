@extends('layouts.template')

@section('metadata')
  @include('meta::manager', [
    'title'         => 'CAMI & VALE INDUSTRIAL S.A.C - Comercialización de válvulas, tubos, conexiones de acero ',
    'description'   => 'Somos importadores y comercializadores de productos  industriales como válvulas, bridas, conexiones, tubos, empaquetaduras y juntas, también fabricamos piezas especiales .',
    'keywords'   => 'Valvulas, Tuberias, Bridas, Conexiones, Empaquetaduras y juntas, Galvanizados en Caliente, Arenado / Sanblasting, Granallado, Fabricaciones de Piezas Especiales, San Miguel, Lima'
])
@endsection

@section('content')

    @include('layouts.partials.slider')
    
    <!-- Section: about -->
    <section id="about">
    	<div class="container">
    		<div class="section-content">
    			<div class="row">
    				<div class="col-md-6">
              <img  src="{{asset('img/about/nosotros-conexiones-industriales-3.jpg')}}" alt="Una tubería conectada mostrando sobre los productos que comercializamos" title="Imagen de Tuberíaa conectado" loading="lazy">
    				</div>
    				<div class="col-md-6">
              <h4 class="text-uppercase text-gray-bbb mt-30 mb-0 mt-sm-10">Nuestra Empresa</h4>
              <h2>Brindando nuestros productos con total garantía y certificación correspondiente.</h2>
              <span class="border-bt"></span>
     
              <p><span><strong>CAMI & VALE INDUSTRIAL S.A.C<strong> es una empresa peruana dedicada a la comercialización de válvulas, tubos, conexiones de acero , empaquetaduras y demás insumos afines para la industria minera, de hidrocarburos, pesquera, construcción, química, alimentaria y manufacturera en general, interviniendo como socia estratégica en las principales obras y proyectos que marcan el desarrollo del país.
              <hr>
              <a class="btn btn-colored btn-flat btn-theme-colored mt-15 mt-sm-10 pt-10 pb-10 " href="{{route('about.index')}}">Leer más</a>

              </span></p>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>


    <!-- Divider: Funfact -->
    <section class="divider parallax layer-overlay overlay-theme-colored-8 hidden-xs" data-bg-img="{{asset('img/bg/banner.jpg')}}" data-parallax-ratio="0.7" loading="lazy">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-smile mt-5 text-white"></i>
              <h2 data-animation-duration="2000" data-value="200" class="animate-number text-white font-42 font-weight-500">0</h2>
              <h4 class="text-white text-uppercase font-weight-600">Clientes</h4>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-rocket mt-5 text-white"></i>
              <h2 data-animation-duration="2000" data-value="100" class="animate-number text-white font-42 font-weight-500">0</h2>
              <h4 class="text-white text-uppercase font-weight-600">Productos</h4>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-add-user mt-5 text-white"></i>
              <h2 data-animation-duration="2000" data-value="50" class="animate-number text-white font-42 font-weight-500">0</h2>
              <h4 class="text-white text-uppercase font-weight-600">Prof  esionales</h4>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-global mt-5 text-white"></i>
              <h2 data-animation-duration="2000" data-value="25" class="animate-number text-white font-42 font-weight-500">0</h2>
              <h4 class="text-white text-uppercase font-weight-600">Colaboradores</h4>
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
          <div class="col-md-12">
            <div class="owl-carousel-3col">

              @foreach ($categories as $category)    
              <div class="item">
                <article class="post clearfix maxwidth600 mb-30 wow fadeInRight" data-wow-delay=".2s">
                  <div class="entry-header">
                    <div class="post-thumb thumb"> 
                      <img src="{{asset($category->image)}}" alt="{{$category->name}}"  title="{{$category->name}}" class="img-responsive img-fullwidth" loading="lazy"> 
                    </div>
                  </div>
                  <div class="bg-theme-colored2 p-5 text-center pt-10 pb-10">
                    <span class="mb-10 text-white mr-10 font-13"><i class="fa fa-cubes mr-5 text-white"></i>{{$category->name}}</span>
                  </div>
                  <div class="entry-content bg-lighter p-20 pr-10">
                    
                    <p class="mt-10" style="overflow: auto;height:8rem;">{{$category->description}}</p>
                    <div class="mt-10"> <a href="https://wa.me/{{$informations->whatsapp}}/?text=Buen día, estoy interesado en {{$category->name}}"  target="_blank" class="btn btn-theme-colored pt-5 pb-5 pl-10 pr-10">Cotizar</a> </div>
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


    <!-- Section: Call To Action -->
    <section  class="divider parallax layer-overlay overlay-theme-colored-8" data-bg-img="{{asset('img/bg/banner.jpg')}}" loading="lazy">
      <div class="container">
        <div class="call-to-action">
          <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
              <h2 class="text-white"><i class="pe-7s-call text-white"></i><a class="text-white" href="javacript:void()"> {{$informations->phone}} / {{$informations->mobile}}</a></h2>
              <h2 class="text-white">Llámenos o Escríbanos, le contestaremos en breve</h2>
              <p class="text-white text-center">Cubrimos  necesidades de cualquier actividad industrial especialmente para el sector minero, petrolero, pesquero, alimenticio, agro industrial y de construcción.</p>
              <a href="https://wa.me/{{$informations->whatsapp}}/?text=Buen día, estoy interesado"  target="_blank" class="btn btn-default btn-theme-colored2 mt-20">Escríbenos</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    
    <!-- Section: Services -->
    <section class="bg-silver-light">
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2" style="display: flex; justify-content: center">
                <center>
                  <h2 class="text-uppercase mt-0 line-height-1">Nuestros Servicios</h2>
                  <span class=border-bt-2></span>
                  <p>Revisa los servicios que te ofrecemos de primera calidad</p>
                </center>
             </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">

            @foreach ($services as $service)    
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="icon-box iconbox-theme-colored2 left media p-0">
                  <a href="{{route('service.show', $service)}}" class="icon icon-gray icon-circled media-left pull-left"><i class="fa fa-gear text-theme-colored"></i></a>
                  <div class="media-body">
                    <h3 class="media-heading heading">{{$service->name}}</h3>
                    <div>{!!Str::substr($service->description,0,100)!!}... </div>
                    <div class="mt-10"> 
                      <a href="{{route('service.show', $service)}}" class="btn btn-theme-colored  pt-5 pb-5 pl-10 pr-10">Escríbenos</a>
                    </div>


                  </div>
                </div>
              </div>
            @endforeach
            
          </div>
        </div>
      </div>
    </section>
    
    
  </div>
  <!-- end main-content -->


@endsection






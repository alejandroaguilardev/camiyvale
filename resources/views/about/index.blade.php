@extends('layouts.template')

@section('metadata')
  @include('meta::manager', [
    'title'         => 'CAMI & VALE INDUSTRIAL S.A.C - Sobre Nuestra Compañia',
    'description'   => 'CAMI & VALE INDUSTRIAL S.A.C,  empresa peruana Somos importadores y comercializadores de productos  industriales y servicios.',
])
@endsection

@section('content')

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark"  data-bg-img="{{asset('img/bg/about.jpg')}}" loading="lazy" >
        <div class="container pt-100 pb-50">
          <!-- Section Content -->
          <div class="section-content pt-50">
            <div class="row"> 
              <div class="col-sm-8 text-left flip xs-text-center">
                <h2 class="title text-white">Nosotros</h2>
              </div>
              <div class="col-sm-4">
                <ol class="breadcrumb text-right sm-text-center text-black mt-10">
                  <li><a href="{{route('home.index')}}" class="text-white">Inicio</a></li>
                  <li class="active text-theme-colored">Nosotros</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </section>


    <!-- Section About -->
    <section>
        <div class="container pb-0">
          <div class="section-content">
            <div class="row">
              <div class="col-md-5 visible-lg">
                <div id="carousel1" class="carousel slide mt-100" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel1" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel1" data-slide-to="1"></li>
                    <li data-target="#carousel1" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="{{asset('img/about/nosotros-conexiones-industriales-2.jpg')}}" class="d-block w-100" alt="Industrial-2" loading="lazy">
                    </div>

                    <div class="item">
                        <img src="{{asset('img/about/nosotros-conexiones-industriales-3.jpg')}}" class="d-block w-100" alt="Industrial 2" loading="lazy">
                    </div>

                    <div class="item">
                        <img src="{{asset('img/about/nosotros-conexiones-industriales.jpg')}}" class="d-block w-100" alt="Cami & Vale Industrial  SAC" loading="lazy">
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
              <div class="col-md-7">
                <h1 class=" mt-30 ">Conócenos como <span class="text-theme-colored">Empresa</span></h1>
                <span class="border-bt"></span>
                CAMI & VALE INDUSTRIAL S.A.C es una empresa peruana dedicada a la comercialización de válvulas, tubos, conexiones de acero , empaquetaduras y demás insumos afines para la industria minera, de hidrocarburos, pesquera, construcción, química, alimentaria y manufacturera en general, interviniendo como socia estratégica en las principales obras y proyectos que marcan el desarrollo del país.</p>
                <p>Desde nuestra apertura hemos creado alianzas tanto nacionales como internacionales con las mejores marcas de tuberías, válvulas y conexiones industriales para ofrecer a nuestros clientes solo la más alta calidad al mejor precio y servicio.</p>
                <p>Nuestro objetivo no es solo ofrecerle un producto de calidad, sino también brindarle asesoría técnica en la selección y dimensionamiento para garantizar la correcta aplicación y durabilidad de nuestros productos.</p>
                <p>Brindando nuestros productos con total garantía y certificación correspondiente.</p>
                <a class="btn btn-colored btn-flat btn-theme-colored mt-15 mt-sm-10 pt-10 pb-10" href="https://wa.me/{{$informations->whatsapp}}/?text=Buen día, estoy interesado"  target="_blank">Escríbenos</a>
              </div>
            </div>
          </div>
        </div>
      </section>



    <section class="bg-silver-light mb-100">
        <div class="container pb-0">
          <div class="section-content">
            <div class="row">
                <div class=" col-md-4 mt-100">
                    <img src="{{asset('img/about/mision-vision.jpg')}}" class="d-block w-100" alt="...">
                </div>
                <div class=" col-md-8">
                    <div class="col-md-6">
                        <div class="icon-box iconbox-theme-colored2 mt-20">
                            <a class="icon icon-bordered icon-circled icon-border-effect effect-circled"><i class="fa fa-bullseye  text-theme-colored"></i></a>
                            <div class="features-details">
                                <h3>Nuestra Misión</h3>
                                <span class="border-bt"></span>
                                <p>Trabajar con honestidad pensando en nuestros clientes, con el compromiso de cubrir sus necesidades satisfaciéndolos a través de una gama de productos de comercialización en stock.</p>
                                <p>Todos nuestros productos cuentan con total garantía directa del fabricante y certificados de calidad.<p>                   
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="icon-box iconbox-theme-colored2 mt-20">
                            <a class="icon icon-bordered icon-circled icon-border-effect effect-circled"><i class="fa fa-eye text-theme-colored"></i></a>
                            <div class="features-details">
                            <h3>Nuestra Visión</h3>
                            <span class="border-bt"></span>

                            <p>Consolidarnos como empresa líder en comercialización de productos industriales con valores añadidos utilizando tecnología e innovación en la presentación de nuestros productos.</p>                    </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </section>

@endsection
@extends('layouts.template')

@section('metadata')
  @include('meta::manager', [
    'title'         => 'CAMI & VALE INDUSTRIAL S.A.C - Contáctanos',
    'description'   => 'Somos una empresa peruana puede encontrarnos en el distrito de San miguel en Lima   comercializadores de productos y ofrecemos diversos servicios',
    'keywords'   => ' Calle San Carlos 163 Urb. Santa Florencia - San Miguel Lima-Perú, 691 4753 / 944 731 380, ventas@camiyvaleindustrial.com,  San Miguel, Lima, cotiza'
])
@endsection

@section('content')

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark"  data-bg-img="{{asset('img/bg/contacto.jpg')}}">
        <div class="container pt-100 pb-50">
          <!-- Section Content -->
          <div class="section-content pt-50">
            <div class="row"> 
              <div class="col-sm-8 text-left flip xs-text-center">
                <h2 class="title text-white">Contáctanos</h2>
              </div>
              <div class="col-sm-4">
                <ol class="breadcrumb text-right sm-text-center text-black mt-10">
                  <li><a href="{{route('home.index')}}" class="text-white">Inicio</a></li>
                  <li class="active text-theme-colored">Contáctanos</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </section>

      
      
      <!-- Divider: Contact -->
      <section class="divider">
        <div class="container">
          <div class="row pt-30">
            <div class="col-md-4">
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-map-2 text-theme-colored"></i></a>
                    <div class="media-body">
                      <h5 class="mt-0">Dirección de Contacto</h5>
                      <p>{{$informations->direction}}</p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-12">
                  <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-call text-theme-colored"></i></a>
                    <div class="media-body">
                      <h5 class="mt-0">Números de Contacto</h5>
                      <p>{{$informations->phone}} / {{$informations->mobile}}</p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-12">
                  <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-mail text-theme-colored"></i></a>
                    <div class="media-body">
                      <h5 class="mt-0">Correo Electrónico</h5>
                      <p>{{$informations->email}}</p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-12">
                  <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <i class="fa fa-skype text-theme-colored"></i></a>
                    <div class="media-body">
                      <h5 class="mt-0">Horario de Atención</h5>
                      <p>{{$informations->schedule}}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <h3 class="line-bottom mt-0 mb-30">¿Interesado en Cotizar?</h3>
              @if (session('alert'))
                  <div class="alert alert-success">{{session('alert')}}</div>
              @endif
              <!-- Contact Form -->
              <form action="{{route('contact.store')}}" method="post">
                @csrf
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Nombre <small>*</small></label>
                      <input name="nombre" class="form-control" type="text" value="{{old('name')}}" placeholder="Ingresar Nombre" required style="text-transform:capitalize;">
                      @error('name')
                        <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Email <small>*</small></label>
                      <input name="correo" class="form-control required email"  value="{{old('email')}}" type="email" placeholder="Ingresar Correo" required >
                      @error('email')
                        <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                  </div>
                </div>
                  
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Asunto <small>*</small></label>
                      <input name="asunto" class="form-control required" type="text" value="{{old('subject')}}" placeholder="Ingresar Asunto" required>
                      @error('name')
                        <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Teléfono</label>
                      <input name="telefono" class="form-control" type="text"  value="{{old('message')}}" placeholder="Ingresar Teléfono" required>
                      @error('phone')
                        <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                  </div>
                </div>
  
                <div class="form-group">
                  <label>Mensaje</label>
                  <textarea name="mensaje" class="form-control required" rows="5" placeholder="Ingresar Mensaje" required></textarea>
                  @error('message')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5" >Enviar Tu Mensaje</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- end main-content -->
  

          
      <!-- Divider: Google Map -->
      <section>
        <div class="container-fluid pt-0 pb-0">
          <div class="row">
  
            <!-- Google Map HTML Codes -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.417359487283!2d-77.07818128532385!3d-12.083554791442793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c90ba294ea99%3A0xb41ea2ec21e535bb!2sCalle%20San%20Carlos%20163%2C%20San%20Miguel%2015086!5e0!3m2!1ses!2spe!4v1611960915361!5m2!1ses!2spe" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>  
          </div>
        </div>
      </section>
    
@endsection
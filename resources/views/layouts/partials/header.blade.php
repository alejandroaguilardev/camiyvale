  <!-- Header -->
  <header id="header" class="header modern-header modern-header-white modern-header-nav-autopadding">
    <div class="header-top bg-theme-colored2 sm-text-center pt-10 pb-50  visible-lg">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="widget">
              <ul class="list-inline sm-text-center list-bordered styled-icon-info">
                <li class="text-white"> <i class="fa fa-clock-o"></i> <a class="text-white" href="javascript:void()">{{$informations->schedule}}</a> </li>
              </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="widget">
              <ul class="list-inline sm-text-center list-bordered styled-icon-info">
                <li class="text-white"> <i class="fa fa-phone"></i> Llámanos <a class="text-white" href="javascript:void()">{{$informations->phone}} / {{$informations->mobile}}</a> </li>
                <li> <i class="fa fa-envelope-o"></i> <a class="text-white" href="mail:{{$informations->email}}">{{$informations->email}}</a> </li>
              </ul>
            </div>
          </div>

          <div class="col-md-2">
            <div class="widget">
              <ul class="styled-icons icon-dark icon-sm mt-10">
                <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".1s" data-wow-offset="10"><a href="{{$informations->facebook}}" target="_blank" data-bg-color="#3B5998"><i class="fa fa-facebook"></i></a></li>
                <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".1s" data-wow-offset="10"><a href="{{$informations->facebook}}" target="instagram" data-bg-color="#3f729b "><i class="fa fa-instagram"></i></a></li>
                <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s" data-wow-offset="10"><a href="{{$informations->facebook}}" target="twitter" data-bg-color="#02B0E8"><i class="fa fa-twitter"></i></a></li>
                <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".3s" data-wow-offset="10"><a href="{{$informations->facebook}}" target="whatsapp" data-bg-color="#00bb2d "><i class="fa fa-whatsapp"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed navbar-sticky-animated">
        <div class="container">
          <nav id="menuzord-right" class="menuzord blue pl-15 pr-15" style="padding:10px 0 5px">
            <a class="pull-left" href="{{route('home.index')}}"><img src="{{asset('img/logo.png')}}" title="Logotype de CAMI & VALE INDUSTRIAL S.A.C" alt="Logotype de CAMI & VALE INDUSTRIAL S.A.C"  style="max-height: 3.8rem;height:4rem;padding:.25rem;"></a>
            <ul class="menuzord-menu">
              <li class="{{request()->routeis('home.index') ? 'active':''}}"><a href="{{route('home.index')}}">Inicio</a></li>
              <li class="{{request()->routeis('about.index') ? 'active':''}}"><a href="{{route('about.index')}}">Nosotros</a></li>
              <li class="{{request()->routeis('product.*') ? 'active':''}}"><a href="{{route('product.index')}}">Productos</a>
                <ul class="dropdown">
                  @foreach ($categories as $category)
                    @php $count =0; @endphp
                    @foreach ($category->products as $product)
                      @php $count +=1; @endphp
                    @endforeach
                    @if($count<2)
                      <li><a href="{{route('product.show', $category)}}">{{$category->name}}</a>
                    @else
                      <li><a href="{{route('product.show', $category)}}">{{$category->name}}</a>
                        <ul class="dropdown">
                          @foreach ($category->products as $product)
                            <li><a href="{{route('product.show', $category)}}">{{$product->name}}</a></li>
                          @endforeach
                        </ul>
                      </li>
                    @endif
                  @endforeach
                </ul>
              </li>
              <li class="{{request()->routeis('service.*') ? 'active' : ''}}"><a href="{{route('service.index')}}">Servicios</a>
                <ul class="dropdown">
                  @foreach ($services as $service)
                    <li><a href="{{route('service.show', $service)}}">{{$service->name}}</a></li>
                  @endforeach
                </ul>
              </li>
              <li class="{{request()->routeis('contact.index') ? 'active' : '' }}"><a href="{{route('contact.index')}}">Contáctanos</a></li>
              <li  style="background: #4A89FF; "><a class="text-white" href="https://wa.me/{{$informations->whatsapp}}/?text=Buen día, estoy interesado"  target="_blank">Cotización</a></li> 
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
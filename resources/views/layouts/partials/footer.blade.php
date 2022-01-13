<!-- Divider: Clients -->
<section class="clients bg-theme-colored">
  <div class="container pt-10 pb-0">
    <div class="row">
      <div class="col-md-12 pt-10 pb-10">
        
      </div>
    </div>
  </div>
</section>

  
<a href="https://api.whatsapp.com/send?phone={{$informations->whatsapp}}&text=Buen día, estoy interesado" title="Whatsapp " target=_blank>
  <img src="{{asset('img/wsp1.png')}}" class="wsp1  hidden-xs hidden-sm animate-wsp1" id="wsp1">
  <img src="{{asset('img/whatsapp.png')}}" class="wsp2 visible-xs visible-sm">
</a>
<script>
$('#wsp1').mouseover(function() {
  document.getElementById("wsp1").classList.remove("animate-wsp1");
});
</script>
  <!-- Footer -->
  <footer id="footer" class="footer">
    <div class="container pt-70 pb-40">
      <div class="row border-bottom-black">
        <div class="col-sm-4 col-md-4">
          <div class="widget dark">
            <img src="{{asset('img/logo-white.png')}}" title="Logotype de CAMI & VALE INDUSTRIAL S.A.C" alt="Logotype de CAMI & VALE INDUSTRIAL S.A.C"  style="width:80%;margin-bottom:2rem;">
            <p>Es una empresa peruana dedicada a la comercialización de válvulas, tubos, conexiones de acero , empaquetaduras y demás .</p>
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
        <div class="col-sm-4 col-md-4">
          <div class="widget dark">
            <h4 class="widget-title">Información</h4>
            <ul class="list-border">
              <ul class="mt-5">
                <li class="m-0 pl-0 pr-10"> <i class="fa fa-globe text-theme-colored mr-5"></i> <a class="text-gray" href="javascript:void()">{{$informations->direction}}</a> </li>
                <li class="m-0 pl-0 pr-10"> <i class="fa fa-phone text-theme-colored mr-5"></i> <a class="text-gray" href="javascript:void()">{{$informations->phone}} / {{$informations->mobile}}</a> </li>
                <li class="m-0 pl-0 pr-10"> <i class="fa fa-envelope-o text-theme-colored mr-5"></i> <a class="text-gray" href="javascript:void()">{{$informations->mobile}}</a> </li>
                <li class="m-0 pl-0 pr-10"> <i class="fa fa-clock-o text-theme-colored mr-5"></i> <a class="text-gray" href="javascript:void()">{{$informations->schedule}}</a> </li>
              </ul>
            </ul>
          </div>
        </div>
        <div class="col-sm-4 col-md-4">
          <div class="widget dark">
            <h4 class="widget-title">Productos</h4>
            <div class="latest-posts">
              @foreach($categories as $category)
                <article class="post media-post clearfix pb-0 mb-10">
                  <a href="{{route('product.index')}}" class="post-thumb"><img style="object-fit: cover;width: 3rem;height:2rem" alt="navegación de {{$category->name}}" title ="Titulo {{$category->name}}" src="{{asset($category->image)}}"></a>
                  <div class="post-right">
                    <h5 class="post-title mt-0 mb-5"><a href="{{route('product.show',$category)}}" style="text-transform: uppercase">{{$category->name}}</a></h5>
                    {{-- <p class="post-date mb-0 font-12">Mar 08, 2015</p> --}}
                  </div>
                </article>
              @endforeach
              
            </div>
          </div>
        </div>
        
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container pt-20 pb-20">
        <div class="row">
          <div class="col-md-6 sm-text-center">
            <p class="font-13 text-black-777 m-0">Copyright &copy;2021 CAMI & VALE INDUSTRIAL S.A.C. </p>
          </div>
          <div class="col-md-6 text-right">
            <p class="font-13 text-black-777 m-0">Desarrollado por Alejandro Aguilar</p>
          </div>
        </div>
      </div>
    </div>
  </footer>


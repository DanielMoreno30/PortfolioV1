@extends('plantillas.plantilla')

<!-- Modal Video -->
@extends('plantillas.video')

<!-- Modal Manual Identidad Corporativa -->
@extends('plantillas.manual')

@section('titulodecadapagina')
    <title>Daniel Moreno</title>
    <link rel="icon" href="{{ asset('img/bolaicon.png') }}" type="image/png" height="50"/>
@endsection

@section('bootstrap5.1')
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    @endsection

@section('cssdecadapagina')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('contenido')
<div class="container" id="app" style="border-radius: 25px; background-color: #FFFFFF">
    <div class="row" style="margin-top: 30px; margin-bottom: 30px;">
        <div class="col-lg-4" id="sobremi" style="margin-top: 65px;">
            <img src="{{ asset('img/logo.png') }}" alt="">
        </div>
        <div class="col-lg-8" style="margin-top: 25px; margin-bottom: 25px;">
            <h3 class="fw-bold text-center">Full Stack Developer</h3>
            <br>
            <div class="row">
                <div class="col-lg-6 text-center" style="box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 1px;">
                  <p class="fw-bold">
                    Daniel Moreno Fernandez
                  </p>
                  <p>
                    30/12/1998
                  </p>
                  <p>
                    23
                    {{trans('multi-leng.años') }}
                  </p>
                </div>
                <div class="col-lg-6 text-center"  style="box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 1px;">
                  <p>
                    danimoreno80@gmail.com
                  </p>
                  <p>
                    +34 666671785
                  </p>
                  <p>Santa Perpetua de la Mogoda, Barcelona</p>
                </div>
            </div>
            <br>
            <p class="text-center">{{trans('multi-leng.descripcion') }}</p>

        <div class="d-grid gap-2 d-md-flex justify-content-between dropdown">
          <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #00A2FF; color: white;">
            Curriculum Vitae
          </a>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="pdf/CV.pdf" target="_blank">{{trans('multi-leng.curriculumcastellano') }} <img src="{{ asset('img/banderaespañola.png') }}" width="20" height="20" class="rounded-circle"></a></li>
            <li><a class="dropdown-item" href="pdf/CV.pdf" target="_blank">{{trans('multi-leng.curriculumingles') }} <img src="{{ asset('img/banderainglesa.png') }}" width="20" height="20" class="rounded-circle"></a></li>
            <li><a class="dropdown-item" href="pdf/CV_CAT.pdf" target="_blank">{{trans('multi-leng.curriculumcatalan') }} <img src="{{ asset('img/banderacatalana.png') }}" width="20" height="20" class="rounded-circle"></a></li>
          </ul>

          <button type="button" class="btn" style="background-color: #00A2FF; color: white;" data-bs-toggle="modal" data-bs-target="#manualidentidadcorporativa" disabled>{{trans('multi-leng.botonmanualidentidadcorporativa') }}
          </button>

          <button type="button" class="btn" style="background-color: #00A2FF; color: white;" data-bs-toggle="modal" data-bs-target="#videointeractivo" disabled>{{trans('multi-leng.botonvideointeractivo') }}
          </button>
        </div>
        </div>
      </div>
</div>

<div class="container" id="app" style="width: 85%; border-radius: 25px; background-color: #FFFFFF">
        <div class="row" style="margin-top: 50px; margin-bottom: 50px;">
          <div class="col-lg-4" style="margin-top: 115px;">
              <img src="{{ asset('img/proyectos.png') }}" class="center" width="200px" height="200px" alt="" style="display: block; margin-left: auto; margin-right: auto;">
          </div>
          <div class="col-lg-8" id="proyectos" style="margin-top: 25px; margin-bottom: 25px;">
              <h3 class="fw-bold">{{trans('multi-leng.proyectoshome') }}</h3>
              <div class="row">
                    <div id="carouselExampleCaptions" class="col-lg-12 carousel slide" data-bs-ride="carousel">
                      <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                      </div>
                      <div class="carousel-inner">
                        <div class="carousel-item active imgrecomercem">
                          <a href="https://github.com/DanielMoreno30/Recomercem2020" target="_blank"><img src="{{ asset('img/recomercem.png') }}" class="d-block w-100" alt="..."
                          style="border-radius: 25px;"></a>
                          <div class="carousel-caption d-none d-md-block textosproyectos">
                            <h5>Recomercem [2020]</h5>
                            <p>{{trans('multi-leng.recomercemdescripcion') }}</p>
                          </div>
                        </div>
                        <div class="carousel-item imgportesobertes">
                          <a href="https://github.com/DanielMoreno30/PortesObertes2021" target="_blank"><img src="{{ asset('img/portesobertes.png') }}" class="d-block w-100" alt="..."
                          style="border-radius: 25px;"></a>
                          <div class="carousel-caption d-none d-md-block textosproyectos">
                            <h5>Portes Obertes [2021]</h5>
                            <p>{{trans('multi-leng.portesobertes2021') }}</p>
                          </div>
                        </div>
                        {{-- <div class="carousel-item imgbroggi2021">
                          <a href="https://github.com/DanielMoreno30/Broggi2021" target="_blank"><img src="{{ asset('img/escritorio.png') }}" class="d-block w-100" alt="..."
                          style="border-radius: 25px;"></a>
                          <div class="carousel-caption d-none d-md-block textosproyectos">
                            <h5>Broggi [2021]</h5>
                            <p>{{trans('multi-leng.broggi2021') }}</p>
                          </div>
                        </div> --}}
                        <div class="carousel-item imgbroggi2022">
                          <a href="https://github.com/DanielMoreno30/Broggi2022" target="_blank"><img src="{{ asset('img/broggi.png') }}" class="d-block w-100" alt="..."
                          style="border-radius: 25px;"></a>
                          <div class="carousel-caption d-none d-md-block textosproyectos">
                            <h5>Broggi [2022]</h5>
                            <p>{{trans('multi-leng.broggi2022') }}</p>
                          </div>
                        </div>
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                    {{-- <p class="text-decoration-underline" style="font-size: 19px;">Recomercem 2020</p>
                    <p>{{trans('multi-leng.recomercemdescripcion') }}</p>
                      
                      <a href="http://daw.abp-politecnics.com/daw2b02/Hector/Recomercem/index.php" target="_blank"><button type="button" class="btn btn-dark">{{trans('multi-leng.botonweb') }}</button></a>
                      <a href="https://github.com/DanielMoreno30/Recomercem2020" target="_blank"><button type="button" class="btn btn-dark">{{trans('multi-leng.botonrepogithub') }}</button></a>

                    <br>
                    <br>

                    <p class="text-decoration-underline" style="font-size: 19px;">Portes Obertes 2021</p>
                    <p>{{trans('multi-leng.portesobertes2021') }}</p>

                      <a href="" target="_blank"><button type="button" class="btn btn-dark">{{trans('multi-leng.botonweb') }}</button></a>
                      <a href="https://github.com/DanielMoreno30/PortesObertes2021" target="_blank"><button type="button" class="btn btn-dark">{{trans('multi-leng.botonrepogithub') }}</button></a> --}}

                  {{-- <div class="col-lg-6">
                    <p class="text-decoration-underline" style="font-size: 19px;">Broggi 2021</p>
                    <p>{{trans('multi-leng.broggi2021') }}</p>
                   

                    <a href="http://daw.abp-politecnics.com/daw2b02/Hector/Recomercem/index.php" target="_blank"><button type="button" class="btn btn-dark">{{trans('multi-leng.botonweb') }}</button></a>
                    <a href="https://github.com/DanielMoreno30/Broggi2021" target="_blank"><button type="button" class="btn btn-dark">{{trans('multi-leng.botonrepogithub') }}</button></a>

                    <br>
                    <br>

                    <p class="text-decoration-underline" style="font-size: 19px;">Broggi 2022 <br>
                    <p>{{trans('multi-leng.broggi2022') }}</p>
                   

                    <a href="http://daw.abp-politecnics.com/daw2b02/Hector/Recomercem/index.php" target="_blank"><button type="button" class="btn btn-dark">{{trans('multi-leng.botonweb') }}</button></a>
                    <a href="https://github.com/DanielMoreno30/Broggi2022" target="_blank"><button type="button" class="btn btn-dark">{{trans('multi-leng.botonrepogithub') }}</button></a>
                  </div> --}}
              </div>
          </div>
        </div>
</div>
<div class="container" id="app" style="width: 85%; border-radius: 25px; background-color: #FFFFFF">
    <div class="row" style="margin-top: 50px; margin-bottom: 50px;">
      <div class="col-lg-4" style="margin-top: 60px;">
          <img src="{{ asset('img/bolamundo.png') }}" class="center" width="200px" height="200px" alt="" style="display: block; margin-left: auto; margin-right: auto;">
      </div>
      <div class="col-lg-8" id="lenguajes" style="margin-top: 25px;">
          <h3 class="fw-bold">{{trans('multi-leng.lenguajes') }}</h3>
          <div class="row text-center">
              <div class="col-lg-4 banderas">
                <p class="text-decoration-underline" style="font-size: 19px;">{{trans('multi-leng.castellano') }}</p>
                <img src="{{ asset('img/banderaespañola.png') }}" alt="banderacatalana" class="imgespaña"  width="130" height="100">
                <p style="margin-top: 10px;">{{trans('multi-leng.nativo') }}</p>
                
                <br>
                <br>
          </div>

              <div class="col-lg-4 banderas">
                <p class="text-decoration-underline" style="font-size: 19px;">Catalan</p>
                <img src="{{ asset('img/banderacatalana.png') }}" alt="banderacatalana" class=""  width="130" height="100">
                <p style="margin-top: 10px;">{{trans('multi-leng.nativo') }}</p>
                
                <br>
                <br>
              </div>

              <div class="col-lg-4 banderas">
                <p class="text-decoration-underline" style="font-size: 19px;">Inglés</p>
                <img src="{{ asset('img/banderainglesa.png') }}" alt="banderacatalana" class=""  width="130" height="100">
                <p style="margin-top: 10px;">B1</p>

                <br>
                <br>
              </div>
          </div>
      </div>
    </div>
</div>
<div class="container" id="app" style="width: 85%; border-radius: 25px; background-color: #FFFFFF">
    <div class="row" style="margin-top: 50px; margin-bottom: 50px;">
    <div class="text-center" id="skills" style="margin-top: 25px; margin-bottom: 25px;">
      <h1 class="fw-bold" style="margin-bottom: 20px;">Hard Skills / Soft Skills</h1>
                <div class="row">
                  <div id="carouselExampleControls" class="carousel slide col-lg-6" data-bs-ride="carousel" style="margin-top: 15px;">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <i class="fa-brands fa-html5 fa-5x hardskills"></i>
                        <i class="fa-brands fa-css3-alt fa-5x hardskills"></i>
                        <i class="fa-brands fa-js-square fa-5x hardskills"></i>
                        <i class="fa-brands fa-php fa-5x hardskills"></i>
                      </div>
                      <div class="carousel-item">
                        <i class="fa-brands fa-angular fa-5x hardskills"></i>
                        <i class="fa-brands fa-java fa-5x hardskills"></i>
                        <i class="fa-brands fa-sass fa-5x hardskills"></i>
                        <i class="fa-brands fa-bootstrap fa-5x hardskills"></i>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                    
                    <div class="col-lg-3" style="box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 1px;">
                      <p> {{trans('multi-leng.softskill1') }} </p>
                      <p> {{trans('multi-leng.softskill2') }} </p>
                      <p> {{trans('multi-leng.softskill3') }} </p>
                    </div>
                    <div class="col-lg-3" style="box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 1px;">
                      <p> {{trans('multi-leng.softskill4') }} </p>
                      <p> {{trans('multi-leng.softskill5') }} </p>
                      <p> {{trans('multi-leng.softskill6') }} </p>
                    </div>
                </div>

              <br>
              <br>

                <div class="row">
                  <div id="carouselExampleControls" class="carousel slide col-lg-6" data-bs-ride="carousel" style="margin-top: 15px;">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <i class="fa-brands fa-apple fa-5x hardskills"></i>
                        <i class="fa-brands fa-android fa-5x hardskills"></i>
                        <i class="fa-brands fa-linux fa-5x hardskills"></i>
                        <i class="fa-brands fa-windows fa-5x hardskills"></i>
                      </div>
                      <div class="carousel-item">
                        <i class="fa-solid fa-database fa-5x hardskills"></i>
                        <i class="fa-brands fa-laravel fa-5x hardskills"></i>
                        <i class="fa-brands fa-vuejs fa-5x hardskills"></i>
                        <i class="fa-solid fa-terminal fa-5x hardskills"></i>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>

                  <div class="col-lg-3" style="box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 1px;">
                      <p> {{trans('multi-leng.softskill7') }} </p>
                      <p> {{trans('multi-leng.softskill8') }} </p>
                      <p> {{trans('multi-leng.softskill9') }} </p>
                  </div>
                  <div class="col-lg-3" style="box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 1px;">
                      <p> {{trans('multi-leng.softskill10') }} </p>  
                      <p> {{trans('multi-leng.softskill11') }} </p>
                      <p> {{trans('multi-leng.softskill12') }} </p>
                  </div>
                </div>
              </div>
    </div>
    
    </div>
@endsection

@section('footer')

<footer class="text-center text-lg-start" style="background-color: #221f28;">
  <div class="text-center p-3" style="color: white;">
    © 2022 -
    <a class="text-light" href="https://www.linkedin.com/in/danielmorenofernandezdmf/" target="_blank">Daniel Moreno Fernández</a>
  </div>
</footer>

@endsection
@extends('layouts.master')

@section('title', 'universal | home')




@section('content')
<style>
#satu {
  position: absolute;
  left: 0px;
  top: 0px;
  z-index: -1;
}
</style>

<section id="satu" style="padding-top:50px">
  <img src="/img/header2.png" class="d-block w-100" alt="img-responsive"  width="50%">

</section>
<div class="container py-5">
  <div class="card">
  <div class="jumbotron-fluid py-2" style="background-color:white">
    <img src="/img/header3.png" class="d-block w-100 px-2" alt="img-responsive"  width="50%">
    <div class="container text-black text-center">
  </div>
  </div>

  <div class="accordion" id="accordionExample">
    <div class="row">
      <div class="col-sm-3 pl-4">
        <!-- @foreach($ukss as $uks)
        <div class="col pt-4 pb-2 ">
          <div class="card text-center" id="headingOne" style="margin-top:5px;margin-bottom:5px;background-color:#f7f7f7">
                <button class="btn btn-link mt-1" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <a href="{{ route('link', $uks->id) }}">{{$uks->nama_uks}}</a>
                </button>
          </div>
        </div>
        @endforeach -->

        <div class="col pt-4 pb-2 ">
          <div class="card text-center" id="headingOne" style="margin-top:5px;margin-bottom:5px;background-color:#f7f7f7">
                <button class="btn btn-link mt-1" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <h6>HADROH</h6>
                </button>
          </div>
        </div>
        <div class="col py-2">
          <div class="card text-center" id="headingTwo"  style="margin-top:5px;margin-bottom:5px;background-color:#f7f7f7">
                <button class="btn btn-link mt-1" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                  <h6>NASYID</h6>
                </button>
          </div>
        </div>
        <div class="col py-2">
          <div class="card text-center" id="headingThree" style="margin-top:5px;margin-bottom:5px;background-color:#f7f7f7">
                <button class="btn btn-link mt-1" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                  <h6>MARAWIS</h6>
                </button>
          </div>
        </div>
        <div class="col py-2">
          <div class="card text-center" id="headingFour" style="margin-top:5px;margin-bottom:5px;background-color:#f7f7f7">
                <button class="btn btn-link mt-1" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                  <h6>AVICENA</h6>
                </button>
          </div>
        </div>
        <div class="col py-2">
          <div class="card text-center" id="headingFive" style="margin-top:5px;margin-bottom:5px;background-color:#f7f7f7">
                <button class="btn btn-link mt-1" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                  <h6>SEBLAQ BASHO</h6>
                </button>
          </div>
        </div>
        <div class="col py-2">
          <div class="card text-center" id="headingSix" style="margin-top:5px;margin-bottom:5px;background-color:#f7f7f7">
                <button class="btn btn-link mt-1" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                  <h6>TRADISI</h6>
                </button>
          </div>
        </div>
        <div class="col py-2">
          <div class="card text-center" id="headingSeven" style="margin-top:5px;margin-bottom:5px;background-color:#f7f7f7">
                <button class="btn btn-link mt-1" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                  <h6>TUKANG PELM</h6>
                </button>
          </div>
        </div>
      </div>
      <div class="col-sm-9">
        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="col py-4 pr-3">
            <div class="card-header text-center">
                  Hadroh
              <div class="card-body">
                <div class="text-center mx-2">
                  <img src="/img/Slider/Slider1.jpg" alt="" width="50%">
                </div>

                @foreach($ukss as $uks)
                <div class="text py-3 my-2 mx-2" style="border-box">
                      <a href="{{ route('link', $uks->id) }}">{{$uks->nama_uks}}</a> 
                </div>
                @endforeach



              </div>
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="col py-4 pr-3">
              <div class="card-header text-center">
                    Nasyid
                <div class="card-body">
                  <div class="text-center mx-2">
                    <img src="/img/Slider/Slider2.jpg" alt="" width="50%">
                  </div>
                  <div class="text py-3 my-2 mx-2" style="border-box">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        <br>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="col py-4 pr-3">
              <div class="card-header text-center">
                    Marawis
                <div class="card-body">
                  <div class="text-center mx-2">
                    <img src="/img/Slider/Slider3.jpg" alt="" width="50%">
                  </div>
                  <div class="text py-3 my-2 mx-2" style="border-box">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        <br>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        <br>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        <br>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
            <div class="card-body">
              44444444444444444444444444444444444444444444444444444444444444444444444444
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
            <div class="card-body">
              55555555555555555555555555555555555555555555555555555555555555555555555555
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
            <div class="card-body">
              6666666666666666666666666666666666666666666666666666666666666666666666666
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
            <div class="card-body">
              777777777777777777777777777777777777777777777777777777777777777777777777
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>



<section id="footer" class="footer">
  <div class="jumbotron-fluid text-light" style="background:#1B2626" >
    <div class="container text-center">
      <div class="footer-copyright text-center py-1">© 2019 Copyright :
        <a > PPMU </a>
      </div>
    </div>
  </div>
</section>


<div class="container" style="padding-top:100px">
<h1> Data UKS yang terdaftar</h1>

@foreach($ukss as $uks)
<br>

<li>
   <a href="{{ route('link', $uks->id) }}">{{$uks->nama_uks}}</a>

</li>
@endforeach
</div>

@endsection

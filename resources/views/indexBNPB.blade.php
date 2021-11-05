@extends('masterBNPB')
@section('content')

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="section-heading text-uppercase">BNPB MENU</h2><br>
              <hr><br>
              <h3 class="section-subheading text-muted"></h3>

            </div>
          </div>
          <div class="row">
            <div class="col-sm-4">
              <div class="bnpb">
                <a href="peta"><img class="mx-auto rounded-circle" src="img/pemetaan.png" alt="" style="background-color: #fed136"></a>
                <h4>PEMETAAN</h4>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="bnpb">
                <a href="/verif"><img class="mx-auto rounded-circle" src="img/verif.png" alt="" style="background-color: #fed136"></a>
                <h4>VERIFIKASI LAPORAN</h4>
              </div>
            </div>
            <!--<div class="col-sm-3">
              <div class="team-member">
                <a href="/5"><img class="mx-auto rounded-circle" src="img/team/3.jpg" alt=""></a>
                <h4>VERIFIKASI KORBAN</h4>
              </div>
            </div>-->
            <div class="col-sm-4">
              <div class="bnpb">
                <a href="laporan"><img class="mx-auto rounded-circle" src="img/edit.png" alt="" style="background-color: #fed136"></a>
                <h4>EDIT POST</h4>
              </div>
            </div>
          </div>


        </div>
      </div>
      <style>
        .bnpb img{
        width:150px;height:150px;border:5px solid #fff}
        }
      </style>
    </header>
@endsection

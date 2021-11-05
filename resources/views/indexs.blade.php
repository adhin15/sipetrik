@extends("master")
@section("content")
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <style>
    /* Make the image fully responsive */
    .carousel-inner img {
      width: 100%;
      height: 10%;
    }
    </style>
    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span><br>
          <div class="intro-heading text-uppercase">Sistem Pemetaan Triase Korban Bencana</div>
          <hr>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#news">Report a news</a>
          <!-- Button trigger modal -->
          <br><br><button type="button" class="btn btn-primary btn-xl text-uppercase" data-toggle="modal" data-target="#ModalLogin">
        LOGIN
          </button>
          <hr>
        </div>
      </div>
      <style>
        hr{
          border-color: #fed136;
          border-width: 3px;
          max-width: 50px;
        }
      </style>
        </header>

    <!-- News -->
    <section id="news">
      <div class="container">
        <div class="intro-text">
          <div class="intro-text">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">News</h2>
            <h3 class="section-subheading text-muted">You can see the detail or Report a news.</h3>
            <button type="button" class="btn btn-primary btn-xl text-uppercase" data-toggle="modal" data-target="#ModalReport">REPORT A NEWS</button>

            <br><br>
          </div>
            </div>

            <div class="container">
          <header  class="masthead">
            <div id="demo" class="carousel slide" data-ride="carousel">


      <div class="carousel-inner">
        <div class="carousel-item active">
           <a data-toggle="modal" href="#portfolioModal1">
             <img src="img/news/merapi.jpg" alt="Merapi" width="1100"  height="500">
            <div class="carousel-caption">
            <h3>Gunung Merapi Meletus!</h3>
              <p>Click to see further information</p>
            </div>
          </a>
        </div>
        @foreach($tampil as $tampil)
        @if($tampil -> status == 'Sudah Verifikasi' )
        <div class="carousel-item">
         <a data-toggle="modal" href="#haha{{$tampil->id}}">
             <img src="storage/upload/{{$tampil->file}}"  width="1000px"  >
            <div class="carousel-caption">
           <form>
            {{ csrf_field() }} {{method_field('PUT')}}
            <h3>{{$tampil -> namabencana}} di {{$tampil -> prov['name']}} </h3>
              <p>Click to see further information</p>
            </form>
            </div>
          </a>
        </div>

         <div class="portfolio-modal modal fade" id="haha{{$tampil->id}}" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>

          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body" style="color: black">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">{{$tampil -> namabencana}}</h2>
                 <img src="storage/upload/{{$tampil->file}}"  width="400px">
              <br><br>





                   <ul class="list-inline">
                    <li>Kabupaten : {{$tampil -> kot['name']}}</li>
                    <li>Kecamatan :  {{$tampil -> kec['name']}}</li>
                    <li>Korban Jiwa : {{$tampil->korbanmati}}</li>
                    <li>Korban Intensitas Berat : {{$tampil->korbanberat}}</li>
                    <li>Korban Intensitas Sedang : {{$tampil->korbansedang}}</li>
                    <li>Korban Intensitas Ringan : {{$tampil->korbanringan}}</li>

                  </ul>

                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    @endif
        @endforeach
      </div>
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>


              </div>

            </div>


          </div>
        </div>
        </div>
        </header>



      </div>
    </section>

    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">About</h2>
            <h3 class="section-subheading text-muted">How it works</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/1.png" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>1</h4>
                    <h4 class="subheading">Report the disaster victim</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">The reporter reports the disaster victim to the Si Petrik with the actual report,  reliable report, and can be held accountable. The report covers the number of victims and the disaster location.</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/2.png" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>2</h4>
                    <h4 class="subheading">Waiting to be verified</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">The reporter waits for the report that has been reported for verification by BNPB. BNPB will check the validity of the report</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/3.png" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>3</h4>
                    <h4 class="subheading">Report has been verified</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">After bnpb validates the report, BNPB will change the status of the report to be verified</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/4.png" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>4</h4>
                    <h4 class="subheading">Report displayed on the news</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Verified reports will be displayed on the news</p>
                  </div>
                </div>
              </li>
              <li >
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/5.png" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>5</h4>
                    <h4 class="subheading">BNPB handles the reports </h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">reports that have been verified will be handled by BNPB responsibly. BNPB will help disaster victims</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <h4>Be Part
                    <br>to help
                    <br>the other!</h4>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Team -->
    <section class="bg-light" id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Our Team</h2>
            <h3 class="section-subheading text-muted">Kaleng Sarden Team.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-3">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/gilang.jpg" alt="">
              <h4>Gilang Persda</h4>
              <p class="text-muted">17523052</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.instagram.com/giloeng/?hl=en">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/faza.jpg" alt="">
              <h4>Faza Nur Azizi</h4>
              <p class="text-muted">17523112</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.instagram.com/fazaazizi/?hl=en">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/izzan.jpg" alt="">
              <h4>Izzan Yattaqi</h4>
              <p class="text-muted">17523060</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/adhin.jpg" alt="">
              <h4>Adhin Alifarchan</h4>
              <p class="text-muted">17523062</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <p class="large text-muted"></p>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact -->
    <!--<section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Contact Us</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate="novalidate">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>-->

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; KalengSarden 2018</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Portfolio Modals -->



    <!-- Modal -->

    <style>
      .modal-content{
        background-color: white;
        border: none;
      }

    .modal-footer{
      border-top: none;
      background-color: #fed136;
    }
    .modal-body{
      padding: 0rem;
    }
    </style>
<!--MODAL LOGIN-->

    <div class="modal fade" id="ModalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

      <div class="modal-dialog" role="document">
        <div class="modal-content">

          <div class="modal-body">

            <div class="wrap-login100">
              <form class="login100-form validate-form" action="{{ route('login') }}" method="post" >
                        @csrf
                <span class="login100-form-logo">
                  <i class="zmdi zmdi-landscape"></i>
                </span>

                <span class="login100-form-title p-b-34 p-t-27">
                  Login
                </span>

                <div class="wrap-input100 validate-input" data-validate = "Enter username">
                  <input class="input100" type="number" name="id" placeholder="ID" value="{{ old('email') }}" required>

                  <span class="focus-input100" data-placeholder="&#xf207;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                  <input class="input100" type="password" name="password" placeholder="Password">
                  @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                  <span class="focus-input100" data-placeholder="&#xf191;"></span>
                </div>



                <div class="container-login100-form-btn">
                  <button class="login100-form-btn" type="submit" >
                    Login
                  </button>
                </div>

                <div class="text-center p-t-90">
                  <a class="txt1" href="#">
                    Forgot Password?
                  </a>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>
<!--MODAL REPORT-->
    <div class="modal fade" id="ModalReport" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">

          <div class="modal-body">

            <div class="wrap-login100">
              <form method="post" action="home" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    Email :
                    <input type="email" class="form-control" name="email" placeholder="name@example.com">
                  </div>
                <div class="form-group">
                    Full Name :
                    <input type="text" class="form-control" name="nama" placeholder="Example Name">
                  </div>
                <div class="form-group">
                    Phone Number :
                    <input type="text" class="form-control" name="nohp" placeholder="08123456789">
                </div>
                 <div class="form-group">
                    Nama Bencana :
                    <input type="text" class="form-control" name="namabencana" placeholder="Nama Bencana">
                </div>
                <div class="form-group">
               <div class="row">
  <div class="col-sm">
    <label>Provinsi</label>
    {!! Form::select('id_province',[''=>'--- Pilih Provinsi ---']+$provinces,null,['class'=>'form-control','required']) !!}
  </div>
  <div class="col-sm">
    <label>Kota</label>
    {!! Form::select('id_regency',[''=>'--- Pilih Kabupaten/Kota ---'],null,['class'=>'form-control','required']) !!}
  </div>
</div>

<div class="row">
  <div class="col-sm">
    <label>Kecamatan</label>
     {!! Form::select('id_district',[''=>'--- Pilih Kecamatan ---'],null,['class'=>'form-control','required']) !!}
  </div>
  <div class="col-sm">
    <label>Kelurahan</label>
    {!! Form::select('id_villages',[''=>'--- Pilih Kelurahan ---'],null,['class'=>'form-control','required']) !!}

  </div>
</div>

             <!--    <div class="row">
                  <div class="form-group col-sm-6">
                    <label>Provinsi</label>
                       <select class="form-control" name="lokasi"  >
                      <option value="" disabled selected>Pilih Provinsi</option>
                      <option value="Aceh">Aceh</option>
                      <option value="Sumatera Utara">Sumatera Utara</option>
                      <option value="Sumatera Barat">Sumatera Barat</option>
                      <option value="Riau">Riau</option>
                      <option value="Jambi">Jambi</option>
                      <option value="Sumatera Selatan">Sumatera Selatan</option>
                      <option value="Bengkulu">Bengkulu</option>
                      <option value="Lampung">Lampung</option>
                      <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
                      <option value="Kepulauan Riau">Kepulauan Riau</option>
                      <option value="DKI Jakarta">DKI Jakarta</option>
                      <option value="Jawa Barat">Jawa Barat</option>
                      <option value="Jawa Tengah">Jawa Tengah</option>
                      <option value="DI Yogyakarta">DI Yogyakarta</option>
                      <option value="Jawa Timur">Jawa Timur</option>
                      <option value="Banten">Banten</option>
                      <option value="Bali">Bali</option>
                      <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                      <option value="Nusa Tenggara Timur">Nusa Tunggara Timur</option>
                      <option value="Kalimantan Barat">Kalimantan Barat</option>
                      <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                      <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                      <option value="Kalimantan Timur">Kalimantan Timur</option>
                      <option value="Kalimantan Utara">Kalimantan Utara</option>
                      <option value="Sulawesi Utara">Sulawesi Utara</option>
                      <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                      <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                      <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                      <option value="Gorontalo">Gorontalo</option>
                      <option value="Sulawesi Barat">Sulawesi Barat</option>
                      <option value="Maluku">Maluku</option>
                      <option value="Maluku Utara">Maluku Utara</option>
                      <option value="Papua Barat">Papua barat</option>
                      <option value="Papua">Papua</option>
                    </select>
                  </div>
                </div> -->
                  <div class="form-group col-sm-6">
                      <br>
                       <div class="form-group">
                    <input type="hidden" class="form-control" name="status" value="Belum Terverifikasi" >

                  <a data-toggle="modal" data-target="#ModalDetail"> <button>NEXT</button> </a>
                  </div>



                </div>
              </div>
            </div>
            </div>

          </div>

      </div>
    </div>


    <!--Modal Detail Laporan -->
    <div class="modal fade" id="ModalDetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">

          <div class="modal-body">

            <div class="wrap-login100">
        <div class="row">
          <div class="col-lg-12 text-left">
            <h2 class="section-heading text-uppercase">DETAIL LAPORAN</h2>
            <hr><br>
          </div>
        </div>



          <div class="form-group">
              Korban Meninggal :
              <input type="number" class="form-control" name="korbanmati" placeholder="0">
            </div>

          <div class="form-group">
            Korban Intensitas Berat :
            <input type="number" class="form-control" name="korbanberat" placeholder="0">
          </div>

          <div class="form-group">
            Korban Intensitas Sedang :
            <input type="number" class="form-control" name="korbansedang" placeholder="0">
          </div>


          <div class="form-group">
            Korban Intensitas Ringan :
            <input type="number" class="form-control" name="korbanringan" placeholder="0">
          </div>




            <div class="form-group">
                Gambar Bencana :
                <input type="file" class="form-control" name="file">
                <br>
            <button class="login100-form-btn" type="submit" >
              Report
            </button>
              </div>




            </div>

          </div>
        </div>
    </form>
      </div>




 <script type="text/javascript">
    $("select[name='id_province']").change(function(){
        var id_province = $(this).val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: "<?php echo route('select-ajax') ?>",
            method: 'POST',
            data: {id_province:id_province, _token:token},
            success: function(data) {
              $("select[name='id_regency'").html('');
              $("select[name='id_regency'").html(data.options);
            }
        });
    });

     $("select[name='id_regency']").change(function(){
        var id_regency = $(this).val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: "<?php echo route('select-ajax') ?>",
            method: 'POST',
            data: {id_regency:id_regency, _token:token},
            success: function(data) {
              $("select[name='id_district'").html('');
              $("select[name='id_district'").html(data.options);
            }
        });
    });

      $("select[name='id_district']").change(function(){
        var id_district = $(this).val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: "<?php echo route('select-ajax') ?>",
            method: 'POST',
            data: {id_district:id_district, _token:token},
            success: function(data) {
              $("select[name='id_villages'").html('');
              $("select[name='id_villages'").html(data.options);
            }
        });
    });
  </script>
@endsection

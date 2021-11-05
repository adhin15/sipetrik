@extends("master")
@section("content")


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <style>
    /* Make the image fully responsive */
    .carousel-inner img {
      width: 100%;
      height: 100%;
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
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">News</h2>
            <h3 class="section-subheading text-muted">You can see the detail or Report a news.</h3>
            <button type="button" class="btn btn-primary btn-xl text-uppercase" data-toggle="modal" data-target="#ModalReport">REPORT A NEWS</button> 
            <br><br>
          </div>
        </div>
        <div class="container">
          <header class="masthead">
            <table background-color="black" class="table">
                    <thead class="table-info">
                        <tr>
                            <th>Bencana</th>
                            <th>Lokasi</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Gunung Api Meletus</td>
                            <td>Kaliurang, Pakem, Sleman, Yogyakarta</td>
                            <td>
                              <button type="button" class="btn btn-primary btn-m " data-toggle="modal" data-target="#ModalLaporan1">Lihat Detail</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Tornado</td>
                            <td>Sardonoharjo, Ngaglik, Sleman, Yogyakarta</td>
                            <td>
                              <button type="button" class="btn btn-primary btn-m " data-toggle="modal" >Lihat Detail</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Tsunami</td>
                            <td>Parangkusumo, Kretek, Bantul, Yogyakarta</td>
                            <td>
                              <button type="button" class="btn btn-primary btn-m " data-toggle="modal" >Lihat Detail</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                </div>
              </div>
            </div>
          </div>
        </header>
        </div>
      </div>
    </div>
  </div>
</div>
            <!--<div id="demo" class="carousel slide" data-ride="carousel">
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
      </ul>

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
        <div class="carousel-item">
          <a data-toggle="modal" href="#portfolioModal2">
            <img src="img/news/tornado.jpg" alt="Tornado" width="1100" height="500">
            <div class="carousel-caption">
              <h3>Tornado</h3>
              <p>Click to see further information</p>
            </div>
          </a>
        </div>
        <div class="carousel-item">
          <a data-toggle="modal" href="#portfolioModal3">
            <img src="img/news/Tsunami1.jpg" alt="Tsunami" width="1100" height="500">
            <div class="carousel-caption">
              <h3>Tsunami</h3>
              <p>Click to see further information</p>
            </div></a>
        </div>
      </div>
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>-->

          </div>
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
              <form class="login100-form validate-form">
                <span class="login100-form-logo">
                  <i class="zmdi zmdi-landscape"></i>
                </span>

                <span class="login100-form-title p-b-34 p-t-27">
                  Login
                </span>

                <div class="wrap-input100 validate-input" data-validate = "Enter username">
                  <input class="input100" type="text" name="username" placeholder="Username">
                  <span class="focus-input100" data-placeholder="&#xf207;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                  <input class="input100" type="password" name="pass" placeholder="Password">
                  <span class="focus-input100" data-placeholder="&#xf191;"></span>
                </div>

                <div class="contact100-form-checkbox">
                  <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                  <label class="label-checkbox100" for="ckb1">
                    Remember me
                  </label>
                </div>

                <div class="container-login100-form-btn">
                  <button class="login100-form-btn">
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
              <form>
                <div class="form-group">
                    Email :
                    <input type="email" class="form-control" name="email" placeholder="name@example.com">
                  </div>
                <div class="form-group">
                    Full Name :
                    <input type="text" class="form-control" name="name" placeholder="Example Name">
                  </div>
                <div class="form-group">
                    Phone Number :
                    <input type="text" class="form-control" name="phoneNumber" placeholder="08123456789">
                </div>
                <div class="form-group">
                    Disaster Place :
                    <select class="form-control" name="disasterPlace">
                      <option value="Yogyakarta">Yogyakarta</option>
                      <option value="Jakarta">Jakarta</option>
                      <option value="JawaTengah">Jawa Tengah</option>
                      <option value="JawaBarat">Jawa Barat</option>
                      <option value="JawaTimur">Jawa Timur</option>
                    </select>
                </div>
                  <button class="login100-form-btn">
                    Report
                  </button>
                </div>

              </form>
            </div>

          </div>
        </div>
      </div>
    </div>



  <div class="modal fade" id="ModalLaporan1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">

          <div class="modal-body">

            <div class="wrap-login100">
              <h2 class="section-heading text-uppercase">DETAIL DATA</h2><br>
              <img src="img/news/merapi.jpg" alt="" width="400px">
              <br><br>
              <div class="row">
                <div class="col">
                  Korban Meninggal
                </div>
                <div class="col">
                  : 10
                </div>
              </div>
              <div class="row">
                <div class="col">
                  Korban Berat
                </div>
                <div class="col">
                  : 5
                </div>
              </div>
              <div class="row">
                <div class="col">
                  Korban Sedang
                </div>
                <div class="col">
                  : 3
                </div>
              </div>
              <div class="row">
                <div class="col">
                  Korban Ringan
                </div>
                <div class="col">
                  : 2
                </div>
              </div>
              <div class="row">
                <div class="col">
                  Jumlah Korban
                </div>
                <div class="col">
                  : 20
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    @if(Session::has('flash_message'))
    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
@endif


<style>
.table {
  border: none;
  background-color: #212529;
}

.table-definition thead th:first-child {
  pointer-events: none;
  background: white;
  border: none;
}

.table-info{
  background-color: #212529;
  border: none;
}

.table td {
  vertical-align: middle;
  border-top: black;
}

.page-item > * {
  border: none;
}

.custom-checkbox {
min-height: 1rem;
padding-left: 0;
margin-right: 0;
cursor: pointer;
}
.custom-checkbox .custom-control-indicator {
  content: "";
  display: inline-block;
  position: relative;
  width: 30px;
  height: 10px;
  background-color: #818181;
  border-radius: 15px;
  margin-right: 10px;
  -webkit-transition: background .3s ease;
  transition: background .3s ease;
  vertical-align: middle;
  margin: 0 16px;
  box-shadow: none;
}
  .custom-checkbox .custom-control-indicator:after {
    content: "";
    position: absolute;
    display: inline-block;
    width: 18px;
    height: 18px;
    background-color: #f1f1f1;
    border-radius: 21px;
    box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4);
    left: -2px;
    top: -4px;
    -webkit-transition: left .3s ease, background .3s ease, box-shadow .1s ease;
    transition: left .3s ease, background .3s ease, box-shadow .1s ease;
  }
.custom-checkbox .custom-control-input:checked ~ .custom-control-indicator {
  background-color: #84c7c1;
  background-image: none;
  box-shadow: none !important;
}
  .custom-checkbox .custom-control-input:checked ~ .custom-control-indicator:after {
    background-color: #84c7c1;
    left: 15px;
  }
.custom-checkbox .custom-control-input:focus ~ .custom-control-indicator {
  box-shadow: none !important;
}
</style>
    
@endsection

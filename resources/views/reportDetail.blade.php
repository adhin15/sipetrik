@extends('masterBNPB')
@section('content')
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title >SIPETRIK</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('https://fonts.googleapis.com/css?family=Montserrat:400,700')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('https://fonts.googleapis.com/css?family=Kaushan+Script')}}" rel='stylesheet' type='text/css'>
    <link href="{{asset('https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic')}}" rel='stylesheet' type='text/css'>
    <link href="{{asset('https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700')}}" rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="{{asset('css/agency.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <link rel="icon" type="image/png" href="{{asset('images/icons/favicon.ico')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/iconic/css/material-design-iconic-font.min.css')}}">



  </head>

  <body id="page-top">

    <!-- Navigation -->
   
    <!--ISI-->
<style>
  hr{
    border-color: #212529;
    border-width: 3px;
    max-width: 50px;
    text-align: left;
  }

</style>

                                            @if (count($errors) > 0)
                                              <div class="alert alert-danger imgdiv">
                                                  <strong>Whoops!</strong> There were some problems with your input.
                                                  <ul>
                                            <!-- print  error -->
                                                      @foreach ($errors->all() as $error_val)
                                                          <li>{{ $error_val }}</li>
                                                      @endforeach
                                                  </ul>
                                              </div>
                                          @endif
                                          @if ($success_message = Session::get('success'))
                                          <div class="alert alert-success alert-block imgdiv">
                                              <button type="button" class="close imgdiv" data-dismiss="alert">×</button>
                                                  <strong>{{ $success_message }}</strong>
                                          </div>
                                          @endif
<!-- Header -->
<header class="masthead">
  <div class="container">
    <div class="intro-text">
      <div class="wrap-login100">
   


<!-- count error -->
    <table>
    <form action="{{url('laporan/'.$edit -> id)}}" method="post">
      {{ csrf_field() }} {{method_field('PUT')}}
      <div class="row">
          <div class="col-lg-12 text-left">
            <h2 class="section-heading text-uppercase" style="text-align: center;">EDIT LAPORAN</h2>
            <hr><br>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 center">
          <tr>
          <td>
      <input type="hidden" class="form-control" name="status" value="Sudah Verifikasi" >      </td>
        </tr>
        <tr>
          <td>Korban Meninggal :</td>
          <td>
        <input type="number" class="form-control"  name="korbanmati" value="{{$edit -> korbanmati}}">
          </td>
        </tr>
        <tr>
          <td>Korban Luka Berat : </td>
          <td>
        <input type="number" class="form-control"  name="korbanberat" value="{{$edit -> korbanberat}}">
          </td>
        </tr>
        <tr>
          <td>Korban Luka Sedang : </td>
          <td>
        <input type="number" class="form-control"  name="korbansedang" value="{{$edit -> korbansedang}}">
          </td>
        </tr>
        <tr>
          <td>Korban Luka Ringan : </td>
          <td>
        <input type="number" class="form-control"  name="korbanringan" value="{{$edit -> korbanringan}}">
          </td>
        </tr>
          <tr>
          <td>Prioritas :</td>
          <td>
        <input type="number" class="form-control"  name="prioritas" value="{{$edit -> prioritas}}">
          </td>
        </tr>
          <td></td>
          <td></td>
        </div>
        </div>
      <div class="row center">
        <tr>
        <td>
            <br>
      <button type="submit" class="btn btn-primary text-align">Submit</button> </td>
        </tr>
      </div>
          
          </form>
        </table>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('https://code.jquery.com/jquery-3.3.1.slim.min.js')}}" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js')}}" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js')}}" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
          </div>
    </div>
  </div>
    </header>

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Contact form JavaScript -->
    <script src="{{asset('js/jqBootstrapValidation.js')}}"></script>
    <script src="{{asset('js/contact_me.js')}}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{asset('js/agency.min.js')}}"></script>

    </body>

    </html>
@endsection
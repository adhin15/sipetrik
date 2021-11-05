<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Form barang</title>
  </head>
  <body>
    <a href="{{url('barang')}}" class="btn btn-outline-success">Home</a>
<h1>Form barang</h1>


<!-- count error -->
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


    <form action="{{url('barang')}}" method="post">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="">Nama Barang</label>
        <input type="text" class="form-control" placeholder="Name" name="nama_barang">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Barang Table</title>
  </head>
  <body>
    <a href="{{url('view')}}" class="btn btn-outline-success">Home</a>
    <h1>Barang Table</h1>

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

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id Barang</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach($tampil as $tampil)
  </tr>
  <td>{{$tampil -> id}}</td>
  <td>{{$tampil -> nama_barang}}</td>
  <td>
    <a href="{{url('barang/'.$tampil->id.'/edit')}}" class="btn btn-primary">EDIT</a>
    <form action="{{url('barang/'.$tampil->id)}}" method="post">
      {{csrf_field()}} {{method_field('DELETE')}}
      <button type="submit" class="btn btn-danger">HAPUS</button>
    </form>
  </td>
    <tr>

    @endforeach
  </tbody>
</table>
<a href="{{url('barang/create')}}" class="btn btn-outline-success">Tambah List Barang</a>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>

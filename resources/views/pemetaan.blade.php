@extends('masterBNPB')
@section('content')

<header class="masthead">

<div class="container">
  <div class="intro-text">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">PEMETAAN</h2><br><hr><br>
          <form method="post">
            @csrf
          <select class="form-control btn btn-primary" name="lokasi">
             <option value="semua">Semua</option>
            <option value="" disabled selected>Pilih Provinsi</option>
                    @foreach($provinces as $province)

                     <option value="{{$province->id}}">{{$province->name}}</option>
                    @endforeach
          </select>
          <button type="submit" class="btn btn-primary">Filter Berdasarkan Provinsi</button>
          </form>
          <br>

        <div class="scrollablewrapper"> <table background-color="black" class="table">
                  <thead class="table-info">
                      <tr>
                          
                          <th>Bencana</th>
                          <th>Lokasil</th>
                          <th>Meninggal</th>
                          <th>Berat</th>
                          <th>Sedang</th>
                          <th>Ringan</th>
                          <th>Prioritas</th>
                      </tr>
                  </thead>
                  <tbody>
                        @foreach($tampil as $tampil)
                      <tr>
                          
                          <td>{{$tampil -> namabencana}}</td>
                          <td>{{$tampil ->prov['name']}}</td>
                          <td>{{$tampil ->korbanmati}}</td>
                          <td>{{$tampil -> korbanberat}}</td>
                          <td>{{$tampil -> korbansedang}}</td>
                          <td>{{$tampil -> korbanringan}}</td>
                          <td>{{$tampil -> prioritas}}</td>
                          <td></td>
                      </tr>
                      
                      @endforeach

                      
                  </tbody>
              </table>
              </div>
      </div>
    </div>

    <style>
    html {
      font-family: Lato, 'Helvetica Neue', Arial, Helvetica, sans-serif;
      font-size: 14px;
    }

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
    .scrollablewrapper {
display: block;
        overflow-x: auto;
        white-space: nowrap;
}
    </style>

  </div>
</div>
</div>
</header>
@endsection

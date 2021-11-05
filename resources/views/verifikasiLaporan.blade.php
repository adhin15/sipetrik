@extends('masterBNPB')
@section('content')

                        
<!-- Modal -->


<style>
  .modal-content{
    background-color: none;
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


<header class="masthead">

<div class="container">
  <div class="intro-text">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">VERIFIKASI LAPORAN</h2><br><hr><br>
        <header class="masthead">
          
           <div class="scrollablewrapper"> <table background-color="black" class="table">
                    <thead class="table-info">
                        <tr>
                            
                            <th>Status</th>
                            <th>Nama</th>
                            <th>Bencana</th>
                            <th>Lokasi</th>
                            <th>Lihat Detail</th>
                            <th>Hapus</th>
                        </tr>
                    </thead>
                    <tbody>
                      @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

                          @foreach($tampil as $tampil)


        
                            
                           
                              
                        <tr>          
                          <td>
                            <div class="form-group">{{$tampil->status}} </div>
                          <td>{{$tampil -> nama}}</td>
                          <td>{{$tampil ->namabencana}}</td>
                          <td>{{$tampil ->prov['name']}}</td>
                          <td><a data-toggle="modal"  data-target="#abc{{$tampil->id}}">

                          <button  class="btn btn-primary btn-m ">Lihat Detail</button></a></td>
                          <td> <form  onclick="delete_form" method="post" action="{{url('verif/'.$tampil->id)}}">
                            {{ csrf_field() }}  {{method_field('DELETE')}}
                            <button type="submit" onclick="return confirm('Apakah anda yakin?')" class="btn btn-danger">HAPUS</button> 
                          </form></td>

                         
                        </tr>
                          

                          <div class="modal fade" id="abc{{$tampil->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                          <div class="modal-content">

                          <div class="modal-body">

            <div class="wrap-login100 ">
              <h2 class="section-heading text-uppercase">DETAIL DATA</h2><br>
              <img src="storage/upload/{{$tampil->file}}" alt="" width="400px">
              <br><br>

                  
                  
                    
                    
                    <div class="row">
                    Nama Pengirim
                    :  {{$tampil->nama}}
                    </div>
                    <div class="row">
                      Alamat Email
                      :  {{$tampil->email}}
                    </div>
                    <div class="row">
                    Nomor Hp Pengirim
                    :  {{$tampil->nohp}}
                    </div>
                    <div class="row">
                    Kabupaten
                    :  {{$tampil->kot['name']}}
                    </div>
                    <div class="row">
                    Kecamatan
                    :  {{$tampil->kec['name']}}
                    </div>
                    <div class="row">
                    Desa
                    :  {{$tampil->kel['name']}}
                    </div>
                    
                    <div class="row">
                     <form  method="post" action="{{url('verif/'.$tampil->id)}}">
                            {{ csrf_field() }}  {{method_field('PUT')}}
                      <input type="hidden" name="status" value="Sudah Verifikasi">
                       </div> <br>
                      <div class="row">
                            <button type="submit" class="btn btn-danger " onclick="return confirm('Apakah anda yakin?')"  >Verifikasi</button> 
                      </div>
                          </form>
                        
                  
                  
                
                
          
            </div>

          </div>
        </div>
      </div>
    </div>
                    
                          
                            
                        
                        

                          @endforeach

                          
                    </tbody>
                </table>
 
                </div>
              </div>
            </div>


          </div>
        </div>
        </div>
        </header>
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

<!--MODAL LAPORAN-->
    
                  
@endsection

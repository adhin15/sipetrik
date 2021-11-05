@extends('masterBNPB')
@section('content')

    <style>
        hr {
            border-color: #fed136;
            border-width: 3px;
            max-width: 50px;
        }

    </style>
    <!-- Modal -->

    <style>
        .modal-content {
            background-color: white;
            border: none;
        }

        .modal-footer {
            border-top: none;
            background-color: #fed136;
        }

        .modal-body {
            padding: 0rem;
        }

    </style>
    <!-- Header -->
    <header class="masthead">
        <div class="container">
            <div class="intro-text">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading text-uppercase">LIST NEWS</h2><br>
                        <hr><br>
                        <h3 class="section-subheading text-muted"></h3>

                    </div>
                </div>
                <div class="scrollablewrapper">
                    <table background-color="black" class="table">
                        <thead class="table-info">
                            <tr>
                                <th>Status</th>
                                <th>Nama</th>
                                <th>Bencana</th>
                                <th></th>
                                <th>Tolak</th>
                                <th>Edit</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                            @foreach ($tampil as $tampil)

                                @if ($tampil->status == 'Sudah Verifikasi')



                                    <tr>
                                        <td>
                                            <div class="form-group">{{ $tampil->status }} </div>
                                        <td>{{ $tampil->nama }}</td>
                                        <td>{{ $tampil->namabencana }}</td>
                                        <td><a data-toggle="modal" data-target="#abc{{ $tampil->id }}">

                                                <button class="btn btn-primary btn-m ">Lihat Detail</button></a></td>
                                        <td>
                                            <form method="post" action="{{ url('laporan/' . $tampil->id) }}">
                                                {{ csrf_field() }} {{ method_field('DELETE') }}
                                                <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Apakah anda yakin?')">HAPUS</button>
                                            </form>
                                        </td>

                                        <td> <a href="{{ url('laporan/' . $tampil->id . '/edit') }}"
                                                class="btn btn-primary">EDIT</a>
                                    </tr>


                                    <div class="modal fade" id="abc{{ $tampil->id }}" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">

                                                <div class="modal-body">

                                                    <div class="wrap-login100 ">
                                                        <h2 class="section-heading text-uppercase">DETAIL DATA</h2><br>
                                                        <img src="storage/upload/{{ $tampil->file }}" alt="" width="400px">
                                                        <br><br>





                                                        <div class="row">
                                                            Korban Meninggal
                                                            :{{ $tampil->korbanmati }}
                                                        </div>
                                                        <div class="row">
                                                            Korban Berat
                                                            {{ $tampil->korbanberat }}
                                                        </div>
                                                        <div class="row">
                                                            Korban Luka Sedang
                                                            :{{ $tampil->korbansedang }}
                                                        </div>
                                                        <div class="row">
                                                            Korban Luka Ringan
                                                            :{{ $tampil->korbanringan }}
                                                        </div>





                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>





                                @endif
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

            .table-info {
                background-color: #212529;
                border: none;
            }

            .table td {
                vertical-align: middle;
                border-top: black;
            }

            .page-item>* {
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

            .custom-checkbox .custom-control-input:checked~.custom-control-indicator {
                background-color: #84c7c1;
                background-image: none;
                box-shadow: none !important;
            }

            .custom-checkbox .custom-control-input:checked~.custom-control-indicator:after {
                background-color: #84c7c1;
                left: 15px;
            }

            .custom-checkbox .custom-control-input:focus~.custom-control-indicator {
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
    </header>



@endsection

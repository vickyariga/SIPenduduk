@extends('main')

@section('title', 'Dashboard')

@section('breadcrumbs')
 <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <!-- <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active"><i class="fa fa-dashboard"></i></li>
                        </ol>
                    </div>
                </div>
            </div> -->
        </div>
@endsection

@section('content')
 <div class="content mt-3">

            <div class="animated fadeIn">
                <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Informasi Kabupaten Solok Selatan</h4>
                                </div>
                                <div class="card-body">
                                    <div class="default-tab">
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Kecamatan</a>
                                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Nagari</a>
                                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Jorong</a>
                                            </div>
                                        </nav>
                                        <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                                    <strong> 1. Kecamatan Sangir </strong><br>
                                                    <strong> 2. Kecamatan Sangir Jujuan </strong><br>
                                                    <strong> 3. Kecamatan Sangir Balai Janggo </strong><br>
                                                    <strong> 4. Sangir Batang Hari </strong><br>
                                                    <strong> 5. Sungai Pagu </strong><br>
                                                    <strong> 6. Pauh Duo </strong><br>
                                                    <strong> 7. Koto Parik Gadang Diateh </strong><br>
                                            </div>
                                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                <p>ini nagari</p>
                                            </div>
                                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                                <p>ini jorong</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
            </div>

        </div>

@endsection

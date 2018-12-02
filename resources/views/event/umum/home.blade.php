@extends('layouts.appumum')
@section('title')
    IFC
@endsection
@section('content')
    <div class="bg-image" style="background-image: url('assets/img/photos/bg.jpg');">
        <div class="hero bg-black-op">
            <div class="hero-inner">
                <div class="content content-full">
                    <div class="row justify-content-center">
                        <div class="col-md-6 py-30 text-center">
                            <h1 class="display-4 font-w700 text-white mb-10">ITS Futsal Championship</h1>
                            <h2 class="h4 font-w400 text-white-op pb-30 mb-20 border-white-op-b">Biggest annual event of UKM Sepakbola ITS</h2>

                            <!-- Countdown.js (class is initialized in js/pages/op_coming_soon.js), for more examples you can check out https://github.com/hilios/jQuery.countdown -->
                            <div class="js-countdown mb-20"></div>

                            <a class="btn btn-hero btn-noborder btn-rounded btn-outline-warning" href="be_pages_generic_blank.html">
                                <i class="fa fa-arrow-left mr-10"></i> Go Back to UKM Sepakbola's Dashboard
                            </a>
                            <div class="form-group row text-center">
                                <div class="col-md-2"></div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-block btn-alt-primary" onclick="window.location.href='../peserta/login'">
                                        <i class="fa fa-user mr-5"></i>Login Peserta
                                    </button>
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-block btn-alt-warning"  onclick="window.location.href='../panitia/login'">
                                        <i class="fa fa-soccer-ball-o mr-5"></i> Login Panitia
                                    </button>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
    
@endsection
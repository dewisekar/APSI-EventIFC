@extends('peminjaman.main')

@section('content')
<main id="main-container">
                <!-- Page Content -->
                <div class="content">
                    <h2 class="content-heading">Peminjaman Inventaris UKM Sepakbola ITS</h2>
                    <div class="row">
                        <div class="col-md-6 col-xl-3">
                            <!-- Developer Plan -->
                            <a class="block block-link-pop block-rounded block-bordered text-center" href="javascript:void(0)">
                                <div class="block-header">
                                    <h3 class="block-title">Bola Sepak</h3>
                                </div>
                                <div class="block-content bg-gray-lighter">
                                    <div class="col-12 animated fadeIn">
                                        <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
                                            <img class="img-fluid options-item" src="assets/img/photos/bola_sepak.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <p>Jumlah Tersedia: <strong>15</strong></p>
                                    <p>Bola ukuran standar yang berkualitas</p>
                                </div>
                                <div class="block-content block-content-full bg-gray-lighter">
                                    <button class="btn btn-lg btn-rounded btn-noborder btn-alt-success min-width-75" data-toggle="modal" data-target="#modal-pinjam"><i class="si si-basket"></i> Pinjam</button>
                                </div>
                            </a>
                            <!-- END Developer Plan -->
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <!-- Startup Plan -->
                            <a class="block block-link-pop block-rounded block-bordered text-center" href="javascript:void(0)">
                                <div class="block-header">
                                    <h3 class="block-title">Gawang Kecil</h3>
                                </div>
                                <div class="block-content bg-gray-lighter">
                                    <div class="col-12 animated fadeIn">
                                        <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
                                            <img class="img-fluid options-item" src="assets/img/photos/gawang_kecil.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <p>Jumlah Tersedia: <strong>5</strong></p>
                                    <p>Gawang berukuran kecil untuk latihan akurasi tendangan</p>
                                </div>
                                <div class="block-content block-content-full bg-gray-lighter">
                                    <button class="btn btn-lg btn-rounded btn-noborder btn-alt-success min-width-75" data-toggle="modal" data-target="#modal-pinjam"><i class="si si-basket"></i> Pinjam</button>
                                </div>
                            </a>
                            <!-- END Startup Plan -->
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <!-- Business Plan -->
                            <a class="block block-link-pop block-rounded block-bordered text-center" href="javascript:void(0)">
                                <div class="block-header">
                                    <h3 class="block-title">Sarung Tangan Kiper</h3>
                                </div>
                                <div class="block-content bg-gray-lighter">
                                    <div class="col-12 animated fadeIn">
                                        <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
                                            <img class="img-fluid options-item" src="assets/img/photos/sarung_tangan.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <p>Jumlah Tersedia: <strong>10</strong></p>
                                    <p>Sarung tangan bagi kiper untuk mengurangi rasa sakit</p>
                                </div>
                                <div class="block-content block-content-full bg-gray-lighter">
                                    <button class="btn btn-lg btn-rounded btn-noborder btn-alt-success min-width-75" data-toggle="modal" data-target="#modal-pinjam"><i class="si si-basket"></i> Pinjam</button>
                                </div>
                            </a>
                            <!-- END Business Plan -->
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <!-- VIP Plan -->
                            <a class="block block-link-pop block-rounded block-bordered text-center" href="javascript:void(0)">
                                <div class="block-header">
                                    <h3 class="block-title">Pelindung Tulang Kering</h3>
                                </div>
                                <div class="block-content bg-gray-lighter">
                                    <div class="col-12 animated fadeIn">
                                        <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
                                            <img class="img-fluid options-item" src="assets/img/photos/deker.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <p>Jumlah Tersedia: <strong>17</strong></p>
                                    <p>Pelindung tulang kering (deker) untuk mengurangi kontak terhadap tulang kering</p>
                                </div>
                                <div class="block-content block-content-full bg-gray-lighter">
                                    <button class="btn btn-lg btn-rounded btn-noborder btn-alt-success min-width-75" data-toggle="modal" data-target="#modal-pinjam"><i class="si si-basket"></i> Pinjam</button>
                                </div>
                            </a>
                            <!-- END VIP Plan -->
                        </div>
                    </div>
                    </div>
                </div>
                <div class="modal fade" id="modal-popin1" tabindex="-1" role="dialog" aria-labelledby="modal-popin" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-popin" role="document">
                        <div class="modal-content">
                            <div class="block block-themed block-transparent mb-0">
                                <div class="block-header bg-primary-dark">
                                    <h3 class="block-title">Bola Sepak</h3><br/>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                            <i class="si si-close"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <img class="img-fluid options-item" src="assets/img/photos/bola_sepak.jpg" alt="">
                                    <h3 class="block-title">Jumlah tersedia : 15 buah</h3>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-alt-success" data-dismiss="modal" data-toggle="modal" data-target="#modal-pinjam">
                                    <i class="si si-basket"></i> Pinjam
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="modal-popin2" tabindex="-1" role="dialog" aria-labelledby="modal-popin" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-popin" role="document">
                        <div class="modal-content">
                            <div class="block block-themed block-transparent mb-0">
                                <div class="block-header bg-primary-dark">
                                    <h3 class="block-title">Gawang Kecil</h3><br/>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                            <i class="si si-close"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <img class="img-fluid options-item" src="assets/img/photos/gawang_kecil.jpg" alt="">
                                    <h3 class="block-title">Jumlah tersedia : 5 buah</h3>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-alt-success" data-dismiss="modal" data-toggle="modal" data-target="#modal-pinjam">
                                    <i class="si si-basket"></i> Pinjam
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="modal-popin3" tabindex="-1" role="dialog" aria-labelledby="modal-popin" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-popin" role="document">
                        <div class="modal-content">
                            <div class="block block-themed block-transparent mb-0">
                                <div class="block-header bg-primary-dark">
                                    <h3 class="block-title">Sarung Tangan Kiper</h3><br/>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                            <i class="si si-close"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <img class="img-fluid options-item" src="assets/img/photos/sarung_tangan.jpg" alt="">
                                    <h3 class="block-title">Jumlah tersedia : 5 buah</h3>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-alt-success" data-dismiss="modal" data-toggle="modal" data-target="#modal-pinjam">
                                    <i class="si si-basket"></i> Pinjam
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="modal-pinjam" tabindex="-1" role="dialog" aria-labelledby="modal-popin" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-popin" role="document">
                        <div class="modal-content">
                            <div class="block block-themed">
                                <div class="block-header bg-gd-aqua">
                                    <h3 class="block-title">Form Peminjaman</h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                            <i class="si si-refresh"></i>
                                        </button>
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                            <i class="si si-close"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <form action="be_forms_premade.html" method="post" onsubmit="return false;">
                                        <div class="form-group row">
                                            <label class="col-12" for="nama">Nama Peminjam</label>
                                            <div class="col-12">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="nama" placeholder="Nama Peminjam">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="tanggal">Tanggal Peminjaman</label>
                                            <div class="col-12">
                                                <div class="input-group">
                                                    <input type="text" class="js-datepicker form-control" id="tanggal" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="dd/mm/yy" placeholder="Tanggal Peminjaman">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">
                                                            <i class="fa fa-calendar"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="durasi">Durasi Peminjaman</label>
                                            <div class="col-12">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="durasi" placeholder="Durasi Peminjaman (dalam Hari)">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">
                                                            <i class="fa fa-clock-o"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label class="css-control css-control-sm css-control-success css-switch">
                                                    <input type="checkbox" class="css-control-input" id="register3-terms" name="register3-terms">
                                                    <span class="css-control-indicator"></span> Saya menyetujui <a href="/peminjaman/about_us">Syarat dan Ketentuan</a> yang berlaku
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-alt-success pull-right">
                                                    <i class="si si-basket mr-5"></i> Pinjam
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->
            </main>
@endsection

@section('js')
<!-- Codebase Core JS -->
        <script src="assets/js/core/jquery.min.js"></script>
        <script src="assets/js/core/bootstrap.bundle.min.js"></script>
        <script src="assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="assets/js/core/jquery.appear.min.js"></script>
        <script src="assets/js/core/jquery.countTo.min.js"></script>
        <script src="assets/js/core/js.cookie.min.js"></script>
        <script src="assets/js/codebase.js"></script>

        <!-- Page JS Plugins -->
        <script src="assets/js/plugins/magnific-popup/magnific-popup.min.js"></script>
        <script src="assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="assets/js/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script src="assets/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
        <script src="assets/js/plugins/select2/select2.full.min.js"></script>
        <script src="assets/js/plugins/jquery-tags-input/jquery.tagsinput.min.js"></script>
        <script src="assets/js/plugins/jquery-auto-complete/jquery.auto-complete.min.js"></script>
        <script src="assets/js/plugins/masked-inputs/jquery.maskedinput.min.js"></script>
        <script src="assets/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
        <script src="assets/js/plugins/dropzonejs/min/dropzone.min.js"></script>

        <!-- Page JS Code -->
        <script>
            jQuery(function () {
                // Init page helpers (Magnific Popup plugin)
                Codebase.helpers('magnific-popup');
            });
        </script>
        <script src="assets/js/pages/be_forms_plugins.js"></script>
        <script>
            jQuery(function () {
                // Init page helpers (BS Datepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Input + Range Sliders + Tags Inputs plugins)
                Codebase.helpers(['datepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider', 'tags-inputs']);
            });
        </script>
@endsection
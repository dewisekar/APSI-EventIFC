@extends('peminjaman.main')

@section('content')
<main id="main-container">
                <!-- Page Content -->
                <div class="content">
                <!-- Advanced Gallery (.js-gallery class is initialized in Codebase() -> uiHelperMagnific()) -->
                    <!-- For more info and examples you can check out http://dimsemenov.com/plugins/magnific-popup/ -->
                    <h2 class="content-heading">Peminjaman Inventaris UKM Sepakbola ITS</h2>
                    <div class="row items-push js-gallery">
                        <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                            <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
                                <img class="img-fluid options-item" src="assets/img/photos/bola_sepak.jpg" alt="">
                                <div class="options-overlay bg-black-op-75">
                                    <div class="options-overlay-content">
                                        <h3 class="h4 text-white mb-5">Bola Sepak</h3>
                                        <h4 class="h6 text-white-op mb-15">Bola ukuran standar yang berkualitas</h4>
                                        <a class="btn btn-sm btn-rounded btn-noborder btn-alt-primary min-width-75 img-lightbox" data-toggle="modal" data-target="#modal-popin1">
                                            <i class="fa fa-search-plus"></i> View
                                        </a>
                                        <a class="btn btn-sm btn-rounded btn-noborder btn-alt-success min-width-75" href="javascript:void(0)"><i class="si si-basket"></i> Pinjam</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                            <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
                                <img class="img-fluid options-item" src="assets/img/photos/gawang_kecil.jpg" alt="">
                                <div class="options-overlay bg-black-op-75">
                                    <div class="options-overlay-content">
                                        <h3 class="h4 text-white mb-5">Gawang Kecil</h3>
                                        <h4 class="h6 text-white-op mb-15">Gawang berukuran kecil untuk latihan akurasi tendangan</h4>
                                        <a class="btn btn-sm btn-rounded btn-noborder btn-alt-primary min-width-75 img-lightbox" data-toggle="modal" data-target="#modal-popin1">
                                            <i class="fa fa-search-plus"></i> View
                                        </a>
                                        <a class="btn btn-sm btn-rounded btn-noborder btn-alt-success min-width-75" href="javascript:void(0)"><i class="si si-basket"></i> Pinjam</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Advanced Gallery -->
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
                                                        <button type="button" class="btn btn-alt-success" data-dismiss="modal">
                                                            <i class="si si-basket"></i> Pinjam
                                                        </button>
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

        <!-- Page JS Code -->
        <script>
            jQuery(function () {
                // Init page helpers (Magnific Popup plugin)
                Codebase.helpers('magnific-popup');
            });
        </script>
@endsection
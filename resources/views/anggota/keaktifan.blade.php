@extends('anggota.main')

@section('content')
<div class="block">
    <div class="block-header block-header-default pb-0">
        <h2 class="block-heading mb-0">Data Keaktifan Delegasi UKM Sepakbola ITS</h2>
    </div>
    <div class="block-content">
        <div class="block-content">
            <table class="js-table-sections table table-hover">
                <thead>
                    <tr>
                        <th style="width: 30px;"></th>
                        <th>Nama Perlombaan</th>
                        <th style="width: 15%;">Status</th>
                        <th class="d-none d-sm-table-cell" style="width: 20%;">Tanggal</th>
                    </tr>
                </thead>
                <tbody class="js-table-sections-header">
                    <tr>
                        <td class="text-center">
                            <i class="fa fa-angle-right"></i>
                        </td>
                        <td class="font-w600">UB CUP 2017</td>
                        <td>
                            <span class="badge badge-success">Terlaksana</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <em class="text-muted">Desember 5, 2017 12:00</em>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <td class="text-center"></td>
                        <td class="font-w600">Abyan Dafa</td>
                        <td class="font-size-sm"><button type="button" class="btn btn-sm btn-center btn-rounded btn-outline-primary mr-1" data-toggle="modal" data-target="#modalinfo">
                                    Detail
                                </button></td>
                        <td class="d-none d-sm-table-cell">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center"></td>
                        <td class="font-w600">Muhammad Arrafi</td>
                        <td class="font-size-sm"><button type="button" class="btn btn-sm btn-center btn-rounded btn-outline-primary mr-1" data-toggle="modal" data-target="#modalinfo">
                                    Detail
                                </button></td>
                        <td class="d-none d-sm-table-cell">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center"></td>
                        <td class="font-w600">Ibrahim Tamtama Adi</td>
                        <td class="font-size-sm"><button type="button" class="btn btn-sm btn-center btn-rounded btn-outline-primary mr-1" data-toggle="modal" data-target="#modalinfo">
                                    Detail
                                </button></td>
                        <td class="d-none d-sm-table-cell">
                        </td>
                    </tr>
                </tbody>
                <tbody class="js-table-sections-header table-active">
                    <tr>
                        <td class="text-center">
                            <i class="fa fa-angle-right"></i>
                        </td>
                        <td class="font-w600">IFC 2018</td>
                        <td>
                            <span class="badge badge-danger">Akan datang</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <em class="text-muted">Oktober 19, 2018 12:00</em>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <td class="text-center"></td>
                        <td class="font-w600">Almas Aqmarina</td>
                        <td class="font-size-sm"><button type="button" class="btn btn-sm btn-center btn-rounded btn-outline-primary mr-1" data-toggle="modal" data-target="#modalinfo">
                                    Detail
                                </button></td>
                        <td class="d-none d-sm-table-cell">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center"></td>
                        <td class="font-w600">Dewi Sekarini</td>
                        <td class="font-size-sm"><button type="button" class="btn btn-sm btn-center btn-rounded btn-outline-primary mr-1" data-toggle="modal" data-target="#modalinfo">
                                    Detail
                                </button></td>
                        <td class="d-none d-sm-table-cell">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center"></td>
                        <td class="font-w600">Diana Hudani</td>
                        <td class="font-size-sm"><button type="button" class="btn btn-sm btn-center btn-rounded btn-outline-primary mr-1" data-toggle="modal" data-target="#modalinfo">
                                    Detail
                                </button></td>
                        <td class="d-none d-sm-table-cell">
                        </td>
                    </tr>
                    <tr>
                        <th class="text-center" scope="row"></th>
                        <td colspan="3"><button class="btn btn-sm btn-rounded btn-primary" data-toggle="modal" data-target="#modaltambahpeserta"><i class="fa fa-plus"></i> Tambah peserta</button>
                        </td>
                    </tr>
                </tbody>
                <tbody class="js-table-sections-header">
                    <tr>
                        <td class="text-center">
                            <i class="fa fa-angle-right"></i>
                        </td>
                        <td class="font-w600">LIMA (Liga Mahasiswa)</td>
                        <td>
                            <span class="badge badge-danger">Akan datang</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <em class="text-muted">Januari 27, 2019 12:16</em>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <td class="text-center"></td>
                        <td class="font-w600">Vincent Marcello Dwi Tanujaya</td>
                        <td class="font-size-sm"><button type="button" class="btn btn-sm btn-center btn-rounded btn-outline-primary mr-1" data-toggle="modal" data-target="#modalinfo">
                                    Detail
                                </button></td>
                        <td class="d-none d-sm-table-cell">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center"></td>
                        <td class="font-w600">Muhammad Alam Cahya Nugraha</td>
                        <td class="font-size-sm"><button type="button" class="btn btn-sm btn-center btn-rounded btn-outline-primary mr-1" data-toggle="modal" data-target="#modalinfo">
                                    Detail
                                </button></td>
                        <td class="d-none d-sm-table-cell">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center"></td>
                        <td class="font-w600">Fandy Putra Mohammad</td>
                        <td class="font-size-sm"><button type="button" class="btn btn-sm btn-center btn-rounded btn-outline-primary mr-1" data-toggle="modal" data-target="#modalinfo">
                                    Detail
                                </button></td>
                        <td class="d-none d-sm-table-cell">
                        </td>
                    </tr>
                    <tr>
                        <th class="text-center" scope="row"></th>
                        <td colspan="3"><button class="btn btn-sm btn-rounded btn-primary" data-toggle="modal" data-target="#modaltambahpeserta"><i class="fa fa-plus"></i> Tambah peserta</button>
                        </td>
                    </tr>
                </tbody>
                <tbody class="js-table-sections-header">
                    <tr>
                        <th class="text-center" scope="row"></th>
                        <td colspan="3"><button class="btn btn-rounded btn-primary" data-toggle="modal" data-target="#modaltambah"><i class="fa fa-plus"></i> Tambah</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="modal fade" id="modaledit" tabindex="-1" role="dialog" aria-labelledby="modal-popin" aria-hidden="true">
            <div class="modal-dialog modal-dialog-popout" role="document">
                <div class="modal-content">
                    <div class="block block-themed">
                        <div class="block-header bg-gd-aqua">
                            <h3 class="block-title">Ubah Data Kegiatan</h3>
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
                            <form action="" method="post" onsubmit="return false;">
                                <div class="form-group row">
                                    <label class="col-12" for="nama">Nama Kegiatan</label>
                                    <div class="col-12">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="nama" placeholder="Nama Kegiatan">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12" for="nama">Tanggal</label>
                                    <div class="col-12">
                                        <div class="input-group">
                                            <input type="text" class="js-datepicker form-control" id="tanggal" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="dd/mm/yy" placeholder="Tanggal Kegiatan">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12" for="tanggal">Tempat</label>
                                    <div class="col-12">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="tempat" placeholder="Tempat">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12" for="nama">Biaya</label>
                                    <div class="col-12">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="biaya" placeholder="Biaya Kegiatan">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12" for="durasi">Penyelenggara</label>
                                    <div class="col-12">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="penyelenggara" placeholder="Penyelenggara Kegiatan">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-alt-success pull-right">
                                            <i class="fa fa-check mr-5"></i> Ubah
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modaltambah" tabindex="-1" role="dialog" aria-labelledby="modal-popin" aria-hidden="true">
            <div class="modal-dialog modal-dialog-popout" role="document">
                <div class="modal-content">
                    <div class="block block-themed">
                        <div class="block-header bg-gd-aqua">
                            <h3 class="block-title">Tambah Data Kegiatan</h3>
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
                            <form action="" method="post" onsubmit="return false;">
                                <div class="form-group row">
                                    <label class="col-12" for="nama">Nama Kegiatan</label>
                                    <div class="col-12">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="nama" placeholder="Nama Kegiatan">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12" for="nama">Tanggal</label>
                                    <div class="col-12">
                                        <div class="input-group">
                                            <input type="text" class="js-datepicker form-control" id="tanggal" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="dd/mm/yy" placeholder="Tanggal Kegiatan">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12" for="tanggal">Tempat</label>
                                    <div class="col-12">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="tempat" placeholder="Tempat">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12" for="nama">Biaya</label>
                                    <div class="col-12">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="biaya" placeholder="Biaya Kegiatan">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12" for="durasi">Penyelenggara</label>
                                    <div class="col-12">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="penyelenggara" placeholder="Penyelenggara Kegiatan">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-alt-success pull-right">
                                            <i class="fa fa-check mr-5"></i> Tambah
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalinfo" tabindex="-1" role="dialog" aria-labelledby="modal-popin" aria-hidden="true">
            <div class="modal-dialog modal-dialog-popout" role="document">
                <div class="modal-content">
                    <div class="block block-themed">
                        <div class="block-header bg-gd-aqua">
                            <h3 class="block-title">Detail Berkas Pemain</h3>
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
                            <form action="" method="post" onsubmit="return false;">
                                <div class="form-group row">
                                    <label class="col-12" for="nama">Akta Kelahiran</label>
                                    <div class="col-12">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="akta" placeholder="Akta_Kelahiran_05xxxxxxxx.pdf">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    Upload
                                                </span>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    Download
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12" for="nama">KTM</label>
                                    <div class="col-12">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="ktm" placeholder="KTM_05xxxxxxxx.pdf">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    Upload
                                                </span>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    Download
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12" for="tanggal">KRSM</label>
                                    <div class="col-12">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="krsm" placeholder="KRSM_05xxxxxxxx.pdf">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    Upload
                                                </span>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    Download
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-alt-primary pull-right" data-dismiss="modal">
                                        Tutup
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modaltambahpeserta" tabindex="-1" role="dialog" aria-labelledby="modal-popin" aria-hidden="true">
            <div class="modal-dialog modal-dialog-popout" role="document">
                <div class="modal-content">
                    <div class="block block-themed">
                        <div class="block-header bg-gd-aqua">
                            <h3 class="block-title">Tambah Delegasi</h3>
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
                            <form action="" method="post" onsubmit="return false;">
                                <div class="form-group row">
                                    <label class="col-12" for="nama">Nama Peserta</label>
                                    <div class="col-12">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="nama" placeholder="Nama Peserta">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="si si-user"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12" for="nama">Akta Kelahiran</label>
                                    <div class="col-12">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="akta" placeholder="Akta_Kelahiran_05xxxxxxxx.pdf">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    Upload
                                                </span>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    Download
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12" for="nama">KTM</label>
                                    <div class="col-12">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="ktm" placeholder="KTM_05xxxxxxxx.pdf">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    Upload
                                                </span>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    Download
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12" for="tanggal">KRSM</label>
                                    <div class="col-12">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="krsm" placeholder="KRSM_05xxxxxxxx.pdf">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    Upload
                                                </span>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    Download
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-alt-success pull-right" data-dismiss="modal">
                                        <i class="fa fa-check"></i> Tambah
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection

@section('js')
<script src="../assets/js/core/jquery.min.js"></script>
        <script src="../assets/js/core/bootstrap.bundle.min.js"></script>
        <script src="../assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="../assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="../assets/js/core/jquery.appear.min.js"></script>
        <script src="../assets/js/core/jquery.countTo.min.js"></script>
        <script src="../assets/js/core/js.cookie.min.js"></script>
        <script src="../assets/js/codebase.js"></script>

        <script src="../assets/js/plugins/bootstrap-notify/bootstrap-notify.min.js"></script>
        <script src="../assets/js/plugins/sweetalert2/es6-promise.auto.min.js"></script>
        <script src="../assets/js/plugins/sweetalert2/sweetalert2.min.js"></script>

        <!-- Page JS Code -->
        <script src="../assets/js/pages/be_ui_activity.js"></script>
        <script>
            jQuery(function () {
                // Init page helpers (BS Notify Plugin)
                Codebase.helpers('notify');
            });
        </script>
        <script>
            jQuery(function () {
                // Init page helpers (Table Tools helper)
                Codebase.helpers('table-tools');
            });
        </script>
@endsection
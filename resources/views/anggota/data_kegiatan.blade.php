@extends('anggota.main')

@section('content')
<div class="block">
                        <div class="block-header block-header-default pb-0">
                            <h2 class="block-heading mb-0">Data Kegiatan UKM Sepakbola ITS</h2>
                        </div>
                        <div class="block-content">
                            <table class="table table-vcenter">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 50px;">#</th>
                                        <th>Nama Kegiatan</th>
                                        <th class="d-none d-sm-table-cell" style="width: 15%;">Status</th>
                                        <th class="text-center" style="width: 150px;">Tindakan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th class="text-center" scope="row">1</th>
                                        <td>Rapat Kerja 1</td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-success">Terlaksana</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-rounded btn-outline-warning mr-1" data-toggle="modal" data-target="#modaledit" title="Edit">
                                                    <i class="fa fa-pencil"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-rounded btn-outline-danger js-swal-confirm" data-toggle="tooltip" title="Delete">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-center" scope="row">2</th>
                                        <td>IFC 2019</td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-danger">Akan datang</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-rounded btn-outline-warning mr-1" data-toggle="modal" data-target="#modaledit" title="Edit">
                                                    <i class="fa fa-pencil"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-rounded btn-outline-danger js-swal-confirm" data-toggle="tooltip" title="Delete">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-center" scope="row">3</th>
                                        <td>Sparring dengan ITB</td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-warning">Sedang berjalan</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-rounded btn-outline-warning mr-1" data-toggle="modal" data-target="#modaledit" title="Edit">
                                                    <i class="fa fa-pencil"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-rounded btn-outline-danger js-swal-confirm" data-toggle="tooltip" title="Delete">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-center" scope="row">4</th>
                                        <td>Serah terima jabatan</td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-success">Terlaksana</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-rounded btn-outline-warning mr-1" data-toggle="modal" data-target="#modaledit" title="Edit">
                                                    <i class="fa fa-pencil"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-rounded btn-outline-danger js-swal-confirm" data-toggle="tooltip" title="Delete">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-center" scope="row"></th>
                                        <td colspan="4"><button class="btn btn-rounded btn-primary" data-toggle="modal" data-target="#modaltambah"><i class="fa fa-plus"></i> Tambah</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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
@endsection
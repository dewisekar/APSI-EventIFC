@extends('anggota.main')

@section('content')
<div class="block">
                        <div class="block-header block-header-default pb-0">
                            <h2 class="block-heading mb-0">Daftar Pemain UKM Sepakbola ITS</h2>
                        </div>
                        <div class="block-content">
                            <table class="table table-vcenter">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 50px;">#</th>
                                        <th>Nama</th>
                                        <th class="d-none d-sm-table-cell" style="width: 15%;">Jenis Kelamin</th>
                                        <th class="text-center" style="width: 150px;">Tindakan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th class="text-center" scope="row">1</th>
                                        <td>Dewi Sekarini</td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-danger">Perempuan</span>
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
                                        <td>Vincent Marcello Dwi Tanujaya</td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-primary">Laki-laki</span>
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
                                        <td>Ibrahim Tamtama Adi</td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-primary">Laki-laki</span>
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
                                        <td>Fandy Putra Mohammad</td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-primary">Laki-laki</span>
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
                                        <th class="text-center" scope="row">5</th>
                                        <td>Muhammad Alam Cahya Nugraha</td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-primary">Laki-laki</span>
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
                                        <th class="text-center" scope="row">6</th>
                                        <td>Almas Aqmarina</td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-danger">Perempuan</span>
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
                                                <h3 class="block-title">Ubah data pemain</h3>
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
                                                        <label class="col-12" for="nama">Nama Pemain</label>
                                                        <div class="col-12">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" id="nama" placeholder="Nama Pemain">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-12" for="nama">Tempat & Tanggal Lahir</label>
                                                        <div class="col-12">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" id="ttl" placeholder="Tempat dan Tanggal Lahir">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-12" for="tanggal">NRP</label>
                                                        <div class="col-12">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" id="nrp" placeholder="Format NRP">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-12" for="nama">Departemen</label>
                                                        <div class="col-12">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" id="dept" placeholder="Departemen">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-12" for="durasi">Alamat</label>
                                                        <div class="col-12">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" id="alamat" placeholder="Alamat Pemain">
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
                                                <h3 class="block-title">Tambah pemain</h3>
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
                                                        <label class="col-12" for="nama">Username</label>
                                                        <div class="col-12">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" id="uname" placeholder="Nama Pemain">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-12" for="nama">Password</label>
                                                        <div class="col-12">
                                                            <div class="input-group">
                                                                <input type="password" class="form-control" id="pass" placeholder="Nama Pemain">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-12" for="nama">Nama Pemain</label>
                                                        <div class="col-12">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" id="nama" placeholder="Nama Pemain">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-12" for="nama">Tempat & Tanggal Lahir</label>
                                                        <div class="col-12">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" id="ttl" placeholder="Tempat dan Tanggal Lahir">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-12" for="tanggal">NRP</label>
                                                        <div class="col-12">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" id="nrp" placeholder="Format NRP">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-12" for="nama">Departemen</label>
                                                        <div class="col-12">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" id="dept" placeholder="Departemen">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-12" for="durasi">Alamat</label>
                                                        <div class="col-12">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" id="alamat" placeholder="Alamat Pemain">
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
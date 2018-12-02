@extends('layouts.appadmin')

@section('title')
    Hasil Pertandingan
@endsection

@section('content')
    <h3 class="block-title">Hasil Pertandingan</h3>
    <div class="block">
        <div class="block-content block-content-full">
            <nav class="breadcrumb push">
                <a class="breadcrumb-item" href="dashboard">Dashboard</a>
                <a class="breadcrumb-item" href="dashboard">Jadwal Pertandingan</a>
                <span class="breadcrumb-item active">Hasil Pertandingan > Informatika vs Kimia</span>
            </nav>
        </div>
    </div>
    <!-- Partial Table -->
    <a class="block block-link-shadow overflow-hidden" href="javascript:void(0)">        
        <div class="block-content block-content-full">
            <h3 class="block-title font-w600"  style="text-align:center">Senin, 4 April 2019 - 18.00</h3>
            <h3 class="block-title font-w600"  style="text-align:center">Putra</h3>
            <h3 class="block-title font-w600"  style="text-align:center">Penyisihan Group</h3>
            <h3 class="block-title font-w600"  style="text-align:center">Group A</h3>
            <div class="row py-20">
                <div class="col-6 text-right border-r">
                    <div class="invisible" data-toggle="appear" data-class="animated fadeInLeft">
                        <div class="font-size-h3 font-w600 text-info">-</div>
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Informatika</div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="invisible" data-toggle="appear" data-class="animated fadeInRight">
                        <div class="font-size-h3 font-w600 text-info">-</div>
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Kimia</div>
                    </div>
                </div>
            </div>
            <div class="form-group row text-center">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-block btn-alt-primary" data-toggle="modal" data-target="#modal-edit">
                        <i class="fa fa-edit mr-5"></i> Ubah Score Pertandingan
                    </button>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </a>
    <div class="row">
        <div class="col-md-12">
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Hasil Pertandingan</h3>
                    <div class="btn-group btn-group-sm ">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-gol">
                            <i class="fa fa-plus"> </i> Tambah Gol
                        </button>
                    </div>
                </div>               
                <div class="block-content">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="block-title font-w600"  style="text-align:center">Informatika</h3>
                            <table class="table table-striped table-vcenter">
                                <thead>
                                    <tr>
                                        <th>Waktu Gol</th>
                                        <th>No. Punggung</th>
                                        <th class="d-none d-sm-table-cell">Nama Pemain</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>12</td>
                                        <td>28</td>
                                        <td class="d-none d-sm-table-cell">Dewi</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-secondary" data-toggle="modal" title="Hapus" data-target="#modal-delete">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>      
                                        <td>15</td>
                                        <td>28</td>
                                        <td class="d-none d-sm-table-cell">Dewi</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-secondary" data-toggle="modal" title="Hapus" data-target="#modal-delete">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <h3 class="block-title font-w600"  style="text-align:center">Kimia</h3>
                            <table class="table table-striped table-vcenter">
                                <thead>
                                    <tr>
                                        <th>Waktu Gol</th>
                                        <th>No. Punggung</th>
                                        <th class="d-none d-sm-table-cell">Nama Pemain</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>20</td>
                                        <td>10</td>
                                        <td class="d-none d-sm-table-cell">Almas</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-secondary" data-toggle="modal" title="Hapus" data-target="#modal-delete">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Partial Table -->
    </div>
    <!--Insert Jadwal Modal-->
    <div class="modal fade" id="modal-gol" tabindex="-1" role="dialog" aria-labelledby="modal-fadein" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header" style="background-color: #02495d">
                        <h3 class="block-title">Tambah Jadwal</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="si si-close"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <div class="form-group row">
                            <label class="col-12" for="example-masked-time">Waktu Gol</label>
                            <div class="col-md-12">
                                <input type="text" class="js-masked-time form-control" id="example-masked-time" name="example-masked-time" placeholder="00:00">
                            </div>
                        </div>
                        <div class="form-group row">
                                <label class="col-12" for="example-text-input">Tim</label>
                            <div class="col-md-12">
                                <select class="form-control" id="example-select" name="example-select">
                                    <option value="0">Informatika</option>
                                    <option value="1">Kimia</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                                <label class="col-12" for="example-text-input">No. Punggung</label>
                            <div class="col-md-12">
                                <select class="form-control" id="example-select" name="example-select">
                                    <option value="0">Dewi</option>
                                    <option value="1">Almas</option>
                                </select>
                            </div>
                        </div>                       
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-alt-success" data-dismiss="modal">
                        <i class="fa fa-check"></i> Tambah
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!--Delete Account Modal-->
    <div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="modal-fadein" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header" style="background-color: #5d0202">
                        <h3 class="block-title">Apakah anda yakin untuk menghapus gol in?</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="si si-close"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-alt-danger" data-dismiss="modal">
                        <i class="fa fa-trash"></i> Hapus
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!--Insert Jadwal Modal-->
    <div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="modal-fadein" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header" style="background-color: #02495d">
                        <h3 class="block-title">Ubah Score Pertandingan</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="si si-close"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <div class="form-group row">
                            <label class="col-12" for="example-select">Score Informatika</label>
                            <div class="col-lg-12">
                                <input type="text" class="form-control" id="example-datepicker2" name="example-datepicker2" placeholder="Score home">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="example-masked-time">Score Kimia</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="example-masked-time" name="example-masked-time" placeholder="Score away">
                            </div>
                        </div>                  
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-alt-success" data-dismiss="modal">
                        <i class="fa fa-check"></i> Ubah
                    </button>
                </div>
            </div>
        </div>
    </div>
    
@endsection
@section('js')
    <script>
        jQuery(function () {
            // Init page helpers (BS Datepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Input + Range Sliders + Tags Inputs plugins)
            Codebase.helpers(['datepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider', 'tags-inputs']);
        });
    </script>
@endsection
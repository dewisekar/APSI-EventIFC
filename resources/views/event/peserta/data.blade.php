@extends('layouts.apppeserta')

@section('title')
    Dashboard Peserta
@endsection

@section('judul')
    Berkas Peserta
@endsection

@section('judul2')
    Halaman Berkas Peserta
@endsection

@section('content')
    <div class="block">
        <div class="block-content">
            <nav class="breadcrumb push">
                <a class="breadcrumb-item" href="dashboard">Dashboard</a>
                <span class="breadcrumb-item active">Berkas Peserta</span>
            </nav>
        </div>
        <div class="block-content block-content-full">
            <div class="row">
                <div class="col-md-8">
                    <table class="table table-striped table-vcenter">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Catatan Verifikasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> 1. </td>
                                <td >KRS untuk nomor punggu 10 tidak valid</td>
                            </tr>
                            <tr>      
                                <td> 2. </td>                  
                                <td>KTM nomor punggung 18 tidak terlihat dengan jelas</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-4">
                    <!-- Crystal on Background Color -->
                    <div class="block">
                        <div class="block-content block-content-full ribbon ribbon-crystal" style="background-color:skyblue">
                            <div class="ribbon-box">
                                Status Verifikasi
                            </div>
                            <div class="text-center py-50">
                                <h4 class="font-w700 text-white text-uppercase mb-0">Belum Diverifikasi</h4>
                            </div>
                        </div>
                    </div>
                    <!-- END Crystal on Background Color -->
                </div>
            </div>
        </div>
    </div>
    <!-- Partial Table -->
    <div class="row">
        <div class="col-md-12">
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Daftar Pemain</h3>
                    <div class="btn-group btn-group-sm ">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-tambah">
                            <i class="fa fa-plus"> </i> Tambah Pemain
                        </button>
                    </div>
                </div>
                
                
                <div class="block-content">
                    <table class="table table-striped table-vcenter">
                        <thead>
                            <tr style="text-align:center">
                                <th style="width: 5%;">No.</th>
                                <th>Nama</th>
                                <th style="width: 8%;">NRP</th>
                                <th class="d-none d-sm-table-cell" style="width: 5%;">No. Punggung</th>
                                <th class="d-none d-sm-table-cell">Posisi</th>
                                <th class="d-none d-sm-table-cell" style="width: 30%">KTM</th>
                                <th class="d-none d-sm-table-cell" style="width: 30%">KRSM</th>
                                <th class="text-center" style="width: 100px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> 1. </td>
                                <td>Dewi Sekarini</td>
                                <td>05111640000004</td>
                                <td  class="d-none d-sm-table-cell">21</td>
                                <td class="d-none d-sm-table-cell">Pemain</td>
                                <td class="d-none d-sm-table-cell"><img class="img-detail" src="../assets/img/photos/photo1.jpg" alt="" style="width:100%"></td>
                                <td class="d-none d-sm-table-cell">-</td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-secondary" data-toggle="modal" title="Edit" data-target="#modal-edit">
                                            <i class="fa fa-pencil"></i>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-secondary" data-toggle="modal" title="Hapus" data-target="#modal-delete">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>      
                                <td> 2. </td>
                                <td>Almas</td>  
                                <td>05111640000171</td>  
                                <td  class="d-none d-sm-table-cell">18</td>            
                                <td class="d-none d-sm-table-cell">Pemain</td>
                                <td class="d-none d-sm-table-cell"><img class="img-detail" src="../assets/img/photos/photo1.jpg" alt="" style="width:100%"></td>
                                <td class="d-none d-sm-table-cell">-</td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-secondary" data-toggle="modal" title="Edit" data-target="#modal-edit">
                                            <i class="fa fa-pencil"></i>
                                        </button>
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
        <!-- END Partial Table -->
    </div>
    <!--Delete Account Modal-->
    <div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="modal-fadein" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header" style="background-color: #5d0202">
                        <h3 class="block-title">Apakah anda yakin untuk menghapus pemain ini?</h3>
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
    <!--Insert New Account Modal-->
    <div class="modal fade" id="modal-tambah" tabindex="-1" role="dialog" aria-labelledby="modal-fadein" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header" style="background-color: #02495d">
                        <h3 class="block-title">Tambah Pemain</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="si si-close"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <div class="form-group row">
                            <label class="col-12" for="example-text-input">Nama Pemain </label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="example-text-input" name="example-text-input" placeholder="Eg: Informatika">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="example-text-input">NRP</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="example-text-input" name="example-text-input" placeholder="14 Digit">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="example-text-input">No. Punggung</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="example-text-input" name="example-text-input" placeholder="Antara 1-99">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="example-select">Posisi</label>
                            <div class="col-md-12">
                                <select class="form-control" id="example-select" name="example-select">
                                    <option value="0">Pemain</option>
                                    <option value="1">Kiper</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12">Foto KTM</label>
                            <div class="col-12">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="example-file-input-custom" name="example-file-input-custom">
                                    <label class="custom-file-label" for="example-file-input-custom">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12">Dokumen KRSM</label>
                            <div class="col-12">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="example-file-input-custom" name="example-file-input-custom">
                                    <label class="custom-file-label" for="example-file-input-custom">Choose file</label>
                                </div>
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
    <!--Edit Account Modal-->
    <div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="modal-fadein" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header" style="background-color: #02495d">
                        <h3 class="block-title">Ubah Pemain</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="si si-close"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <div class="form-group row">
                            <label class="col-12" for="example-text-input">Nama Pemain </label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="example-text-input" name="example-text-input" placeholder="Eg: Informatika">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="example-text-input">NRP</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="example-text-input" name="example-text-input" placeholder="14 Digit">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="example-text-input">No. Punggung</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="example-text-input" name="example-text-input" placeholder="Antara 1-99">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="example-select">Posisi</label>
                            <div class="col-md-12">
                                <select class="form-control" id="example-select" name="example-select">
                                    <option value="0">Pemain</option>
                                    <option value="1">Kiper</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12">Foto KTM</label>
                            <div class="col-12">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="example-file-input-custom" name="example-file-input-custom">
                                    <label class="custom-file-label" for="example-file-input-custom">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12">Dokumen KRSM</label>
                            <div class="col-12">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="example-file-input-custom" name="example-file-input-custom">
                                    <label class="custom-file-label" for="example-file-input-custom">Choose file</label>
                                </div>
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
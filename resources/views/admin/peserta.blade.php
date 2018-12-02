@extends('layouts.appadmin')

@section('title')
    Manajemen Tim
@endsection

@section('content')
    <h2 class="content-heading">Manajemen Peserta</h2>
     <!-- Partial Table -->
    <div class="block">
            <ul class="nav nav-tabs nav-tabs-block align-items-center" data-toggle="tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" href="#btabs-static-home">Daftar Tim Putra</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#btabs-static-profile">Daftar Tim Putri</a>
                </li>
                <li class="nav-item ml-auto">
                     <div class="btn-group btn-group-sm mr-15">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-fadein">
                            <i class="fa fa-plus"> </i> Tambah Tim
                        </button>
                    </div>
                </li>
            </ul>
            
            <div class="block-content tab-content">
                <div class="tab-pane active" id="btabs-static-home" role="tabpanel">
                    <table class="table table-striped table-vcenter">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Tim</th>
                                <th class="d-none d-sm-table-cell" style="width: 30%;">Username</th>
                                <th class="d-none d-md-table-cell" style="width: 15%;">Status Verifikasi</th>
                                <th class="text-center" style="width: 100px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> 1. </td>
                                <td class="font-w600">Informatika</td>
                                <td class="d-none d-sm-table-cell">informatika-putra</td>
                                <td class="d-none d-md-table-cell">
                                    <span class="badge badge-success">Terverifikasi</span>
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-secondary" data-toggle="modal" title="Edit" data-target="#modal-edit">
                                            <i class="fa fa-pencil"></i>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-secondary" data-toggle="modal" title="Hapus" data-target="#modal-delete">
                                            <i class="fa fa-times"></i>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" onclick="window.location.href='detailpeserta'" title="Detail Peserta">
                                            <i class="fa fa-search-plus"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>      
                                <td> 2. </td>                  
                                <td class="font-w600">Teknik Material</td>
                                <td class="d-none d-sm-table-cell">tmaterial-putra</td>
                                <td class="d-none d-md-table-cell">
                                    <span class="badge badge-danger">Revisi</span>
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-secondary" data-toggle="modal" title="Edit" data-target="#modal-edit">
                                            <i class="fa fa-pencil"></i>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-secondary" data-toggle="modal" title="Hapus" data-target="#modal-delete">
                                            <i class="fa fa-times"></i>
                                        </button>
                                       <button type="button" class="btn btn-sm btn-secondary" onclick="window.location.href='detailpeserta'" title="Detail Peserta">
                                            <i class="fa fa-search-plus"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> 3. </td>
                                <td class="font-w600">Teknik Kelautan</td>
                                <td class="d-none d-sm-table-cell">tkelautan-putra</td>
                                <td class="d-none d-md-table-cell">
                                    <span class="badge badge-info">Belum Diverifikasi</span>
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-secondary" data-toggle="modal" title="Edit" data-target="#modal-edit">
                                            <i class="fa fa-pencil"></i>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-secondary" data-toggle="modal" title="Hapus" data-target="#modal-delete">
                                            <i class="fa fa-times"></i>
                                        </button>
                                       <button type="button" class="btn btn-sm btn-secondary" onclick="window.location.href='detailpeserta'" title="Detail Peserta">
                                            <i class="fa fa-search-plus"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> 4. </td>
                                <td class="font-w600">Teknik Sipil</td>
                                <td class="d-none d-sm-table-cell">tsipil-putra</td>
                                <td class="d-none d-md-table-cell">
                                    <span class="badge badge-danger">Revisi</span>
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-secondary" data-toggle="modal" title="Edit" data-target="#modal-edit">
                                            <i class="fa fa-pencil"></i>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-secondary" data-toggle="modal" title="Hapus" data-target="#modal-delete">
                                            <i class="fa fa-times"></i>
                                        </button>
                                       <button type="button" class="btn btn-sm btn-secondary" onclick="window.location.href='detailpeserta'" title="Detail Peserta">
                                            <i class="fa fa-search-plus"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane" id="btabs-static-profile" role="tabpanel">
                    <table class="table table-striped table-vcenter">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Tim</th>
                                <th class="d-none d-sm-table-cell" style="width: 30%;">Username</th>
                                <th class="d-none d-md-table-cell" style="width: 15%;">Status Verifikasi</th>
                                <th class="text-center" style="width: 100px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> 1. </td>
                                <td class="font-w600">Statistika</td>
                                <td class="d-none d-sm-table-cell">Statistika-putra</td>
                                <td class="d-none d-md-table-cell">
                                    <span class="badge badge-success">Terverifikasi</span>
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-secondary" data-toggle="modal" title="Edit" data-target="#modal-edit">
                                            <i class="fa fa-pencil"></i>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-secondary" data-toggle="modal" title="Hapus" data-target="#modal-delete">
                                            <i class="fa fa-times"></i>
                                        </button>
                                       <button type="button" class="btn btn-sm btn-secondary" onclick="window.location.href='detailpeserta'" title="Detail Peserta">
                                            <i class="fa fa-search-plus"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>      
                                <td> 2. </td>                  
                                <td class="font-w600">Teknik Material</td>
                                <td class="d-none d-sm-table-cell">tmaterial-putri</td>
                                <td class="d-none d-md-table-cell">
                                    <span class="badge badge-danger">Revisi</span>
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-secondary" data-toggle="modal" title="Edit" data-target="#modal-edit">
                                            <i class="fa fa-pencil"></i>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-secondary" data-toggle="modal" title="Hapus" data-target="#modal-delete">
                                            <i class="fa fa-times"></i>
                                        </button>
                                       <button type="button" class="btn btn-sm btn-secondary" onclick="window.location.href='detailpeserta'" title="Detail Peserta">
                                            <i class="fa fa-search-plus"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> 3. </td>
                                <td class="font-w600">Teknik Kimia</td>
                                <td class="d-none d-sm-table-cell">tkimia-putri</td>
                                <td class="d-none d-md-table-cell">
                                    <span class="badge badge-info">Belum Diverifikasi</span>
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-secondary" data-toggle="modal" title="Edit" data-target="#modal-edit">
                                            <i class="fa fa-pencil"></i>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-secondary" data-toggle="modal" title="Hapus" data-target="#modal-delete">
                                            <i class="fa fa-times"></i>
                                        </button>
                                       <button type="button" class="btn btn-sm btn-secondary" onclick="window.location.href='detailpeserta'" title="Detail Peserta">
                                            <i class="fa fa-search-plus"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--Delete Account Modal-->
        <div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="modal-fadein" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header" style="background-color: #5d0202">
                            <h3 class="block-title">Apakah anda yakin untuk menghapus akun tim in?</h3>
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
        <div class="modal fade" id="modal-fadein" tabindex="-1" role="dialog" aria-labelledby="modal-fadein" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header" style="background-color: #02495d">
                            <h3 class="block-title">Tambah Tim</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="form-group row">
                                <label class="col-12" for="example-text-input">Nama Tim (Departemen)</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="example-text-input" name="example-text-input" placeholder="Eg: Informatika">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12" for="example-select">Putra/putri</label>
                                <div class="col-md-12">
                                    <select class="form-control" id="example-select" name="example-select">
                                        <option value="0">Putra</option>
                                        <option value="1">Putri</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12" for="example-text-input">Username</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="example-text-input" name="example-text-input" placeholder="Format: departemen-putra/putri">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12" for="example-text-input">Password</label>
                                <div class="col-md-12">
                                    <input type="password" class="form-control" id="example-text-input" name="example-text-input" placeholder="Minimal 6 karakter">
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
                            <h3 class="block-title">Ubah Tim</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="form-group row">
                                <label class="col-12" for="example-text-input">Nama Tim (Departemen)</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="example-text-input" name="example-text-input" placeholder="Eg: Informatika">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12" for="example-select">Putra/putri</label>
                                <div class="col-md-12">
                                    <select class="form-control" id="example-select" name="example-select">
                                        <option value="0">Putra</option>
                                        <option value="1">Putri</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12" for="example-text-input">Username</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="example-text-input" name="example-text-input" placeholder="Format: departemen-putra/putri">
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
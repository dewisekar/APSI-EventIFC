@extends('layouts.appadmin')

@section('title')
    Detail Peserta
@endsection

@section('content')
    <h2 class="content-heading">Detail Peserta - Informatika Putra</h2>
    <div class="block">
        <div class="block-content block-content-full">
            <nav class="breadcrumb push">
                <a class="breadcrumb-item" href="dashboard">Dashboard</a>
                <a class="breadcrumb-item" href="peserta">Manajemen Peserta</a>
                <span class="breadcrumb-item active">Informatika Putra</span>
            </nav>
            <div class="col-md-6">
                <form action="" method="post" onsubmit="return false;">
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label" for="example-hf-email">Ubah status verifikasi:</label>
                        <div class="col-lg-8">
                            <select class="form-control mb-2 mr-sm-2 mb-sm-0" id="example-select" name="example-select">
                                <option value="0">Belum diverifikasi</option>
                                <option value="1">Revisi</option>
                                <option value="1">Terverifikasi</option>
                            </select>
                        </div>
                        <div class="col-lg-1 ml-auto">
                            <button type="submit" class="btn btn-alt-primary">Ubah</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Partial Table -->
    <div class="row">
        <div class="col-md-8">
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Daftar Anggota Tim</h3>
                </div>
                <div class="block-content">
                    <table class="table table-striped table-vcenter">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th class="d-none d-sm-table-cell" style="width: 30%;">NRP</th>
                                <th class="d-none d-md-table-cell" style="width: 15%;">No. Punggung</th>
                                <th class="text-center" style="width: 100px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> 1. </td>
                                <td class="font-w600">Deka</td>
                                <td class="d-none d-sm-table-cell">05111640000081</td>
                                <td class="d-none d-md-table-cell">10</td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-secondary" data-toggle="modal" data-target="#modal-detail">
                                            <i class="fa fa-search-plus"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>      
                                <td> 2. </td>                  
                                <td class="font-w600">Almas</td>
                                <td class="d-none d-sm-table-cell">05111640000171</td>
                                <td class="d-none d-md-table-cell">18</td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-secondary"  data-toggle="modal" data-target="#modal-detail">
                                            <i class="fa fa-search-plus"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> 3. </td>
                                <td class="font-w600">Dewi</td>
                                <td class="d-none d-sm-table-cell">05111640000004</td>
                                <td class="d-none d-md-table-cell">21</td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-secondary"  data-toggle="modal" data-target="#modal-detail">
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
        <!-- END Partial Table -->
        <div class="col-md-4">
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Catatan Verifikasi</h3>
                </div>
                <div class="block-content">
                    <div class="form-group row">
                        <label class="col-12" for="example-textarea-input">Tambah catatan verifikasi:</label>
                        <div class="col-md-12">
                            <textarea class="form-control" id="example-textarea-input" name="example-textarea-input" rows="3" placeholder="Catatan verifikasi..."></textarea>
                        </div>                        
                    </div>
                    <div class="form-group row text-right">
                        <div class="col-12">
                            <button type="submit" class="btn btn-rounded btn-alt-primary">
                                <i class="fa fa-plus mr-5"></i> Tambah
                            </button>
                        </div>
                    </div>                    
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
            </div>
        </div>

        <!-- END Partial Table -->
    </div>
    <!--Detail Account Modal-->
    <div class="modal fade" id="modal-detail" tabindex="-1" role="dialog" aria-labelledby="modal-fadein" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header" style="background-color: #02495d">
                        <h3 class="block-title">Detail</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="si si-close"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <table class="table table-striped table-vcenter">
                            <style>
                                .img-detail{
                                    width: 50%;
                                }
                                @media screen and (max-width: 600px) {
                                    .img-detail {
                                        width: 87%;
                                    }
                                }
                            </style>
                            <tr>
                                <th>Nama:</th>
                                <td>Deka</td>
                            </tr>
                            <tr>
                                <th>NRP:</th>
                                <td>05111640000081</td>
                            </tr>
                            <tr>
                                <th>No. Punggung:</th>
                                <td>10</td>
                            </tr>
                            <tr>
                                <th>Posisi:</th>
                                <td>Pemain</td>
                            </tr>
                            <tr>
                                <th>KRSM:</th>
                                <td><img class="img-detail" src="../assets/img/photos/photo1.jpg" alt=""></td>
                            </tr>
                            <tr>
                                <th>KTM:</th>
                                <td><img class="img-detail" src="../assets/img/photos/gawang_kecil.jpg" alt=""></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
@endsection
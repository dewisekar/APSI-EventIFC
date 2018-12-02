@extends('layouts.appadmin')

@section('title')
    Detail Peserta
@endsection

@section('content')
    <h2 class="content-heading">Detail Peserta - Informatika Putra</h2>
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
                                        <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Detail Peserta">
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
                                        <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Detail Peserta">
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
                                        <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Detail Peserta">
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
                            <textarea class="form-control" id="example-textarea-input" name="example-textarea-input" rows="3" placeholder="Content.."></textarea>
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
    
@endsection
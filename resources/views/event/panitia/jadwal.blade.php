@extends('layouts.appadmin')

@section('title')
    Jadwal Pertandingan
@endsection

@section('content')
    <h2 class="content-heading">Jadwal Pertandingan</h2>
    <div class="block">
        <div class="block-content block-content-full">
            <nav class="breadcrumb push">
                <a class="breadcrumb-item" href="dashboard">Dashboard</a>
                <span class="breadcrumb-item active">Jadwal Pertandigan</span>
            </nav>
        </div>
    </div>
    <!-- Partial Table -->
    <div class="row">
        <div class="col-md-12">
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Daftar Jadwal Pertandingan</h3>
                    <div class="btn-group btn-group-sm ">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-jadwal">
                            <i class="fa fa-plus"> </i> Tambah Jadwal
                        </button>
                    </div>
                </div>
                
                
                <div class="block-content">
                    <table class="table table-striped table-vcenter">
                        <thead>
                            <tr>
                                <th>Tanggal, Waktu</th>
                                <th class="d-none d-sm-table-cell">Tipe</th>
                                <th class="d-none d-sm-table-cell">Jenis Pertandigan</th>
                                <th class="d-none d-sm-table-cell">Group</th>
                                <th>Tim Home</th>
                                <th>Tim Away</th>
                                <th class="d-none d-sm-table-cell" style="width: 5%;">Score Home</th>
                                <th class="d-none d-sm-table-cell" style="width: 5%;">Score Away</th>
                                <th class="text-center" style="width: 100px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="font-w600"> Senin, 4 April 2019, 18.00 </td>
                                <td class="d-none d-sm-table-cell">Putra</td>
                                <td class="d-none d-sm-table-cell">Penyisihan Grup</td>
                                <td class="d-none d-sm-table-cell">A</td>
                                <td>Informatika</td>
                                <td>Kimia</td>
                                <td class="d-none d-sm-table-cell">-</td>
                                <td class="d-none d-sm-table-cell">-</td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-secondary" data-toggle="modal" title="Edit" data-target="#modal-edit">
                                            <i class="fa fa-pencil"></i>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-secondary" data-toggle="modal" title="Hapus" data-target="#modal-delete">
                                            <i class="fa fa-times"></i>
                                        </button>
                                       <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" onclick="window.location.href='hasilpertandingan'" title="Hasil Pertandingan">
                                            <i class="fa fa-search-plus"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>      
                                <td class="font-w600"> Senin, 4 April 2019, 19.00 </td>
                                <td class="d-none d-sm-table-cell">Putra</td> 
                                <td class="d-none d-sm-table-cell">Penyisihan Grup</td>
                                <td class="d-none d-sm-table-cell">B</td>
                                <td>Matematika</td>  
                                <td>Biologi</td>              
                                <td class="d-none d-sm-table-cell">-</td>
                                <td class="d-none d-sm-table-cell">-</td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-secondary" data-toggle="modal" title="Edit" data-target="#modal-edit">
                                            <i class="fa fa-pencil"></i>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-secondary" data-toggle="modal" title="Hapus" data-target="#modal-delete">
                                            <i class="fa fa-times"></i>
                                        </button>
                                       <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" onclick="window.location.href='hasilpertandingan'" title="Hasil Pertandingan">
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
    </div>
    <!--Insert Jadwal Modal-->
    <div class="modal fade" id="modal-jadwal" tabindex="-1" role="dialog" aria-labelledby="modal-fadein" aria-hidden="true">
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
                            <label class="col-12" for="example-select">Tanggal Pertandingan</label>
                            <div class="col-lg-12">
                                <input type="text" class="js-datepicker form-control" id="example-datepicker2" name="example-datepicker2" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="dd/mm/yy" placeholder="dd/mm/yy">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="example-masked-time">Jam Pertandingan</label>
                            <div class="col-md-12">
                                <input type="text" class="js-masked-time form-control" id="example-masked-time" name="example-masked-time" placeholder="00:00">
                            </div>
                        </div>
                        <div class="form-group row">
                                <label class="col-12" for="example-text-input">Jenis Pertandingan</label>
                            <div class="col-md-12">
                                <select class="form-control" id="example-select" name="example-select">
                                    <option value="0">Penyisihan Grup</option>
                                    <option value="1">Semifinal</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                                <label class="col-12" for="example-text-input">Putra/Putri</label>
                            <div class="col-md-12">
                                <select class="form-control" id="example-select" name="example-select">
                                    <option value="0">Putra</option>
                                    <option value="1">Putri</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                                <label class="col-12" for="example-text-input">Group</label>
                            <div class="col-md-12">
                                <select class="form-control" id="example-select" name="example-select">
                                    <option value="0">A</option>
                                    <option value="1">B</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="example-text-input">Tim Home</label>
                            <div class="col-md-12">
                                <select class="form-control" id="example-select" name="example-select">
                                    <option value="0">Informatika</option>
                                    <option value="1">Teknik Material</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="example-text-input">Tim Away</label>
                            <div class="col-md-12">
                                <select class="form-control" id="example-select" name="example-select">
                                    <option value="0">Informatika</option>
                                    <option value="1">Teknik Material</option>
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
                        <h3 class="block-title">Apakah anda yakin untuk menghapus jadwal in?</h3>
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
                        <h3 class="block-title">Ubah Jadwal</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="si si-close"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <div class="form-group row">
                            <label class="col-12" for="example-select">Tanggal Pertandingan</label>
                            <div class="col-lg-12">
                                <input type="text" class="js-datepicker form-control" id="example-datepicker2" name="example-datepicker2" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="dd/mm/yy" placeholder="dd/mm/yy">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="example-masked-time">Jam Pertandingan</label>
                            <div class="col-md-12">
                                <input type="text" class="js-masked-time form-control" id="example-masked-time" name="example-masked-time" placeholder="00:00">
                            </div>
                        </div>
                        <div class="form-group row">
                                <label class="col-12" for="example-text-input">Jenis Pertandingan</label>
                            <div class="col-md-12">
                                <select class="form-control" id="example-select" name="example-select">
                                    <option value="0">Penyisihan Grup</option>
                                    <option value="1">Semifinal</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                                <label class="col-12" for="example-text-input">Putra/Putri</label>
                            <div class="col-md-12">
                                <select class="form-control" id="example-select" name="example-select" value="Putra">
                                    <option value="0">Putra</option>
                                    <option value="1">Putri</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                                <label class="col-12" for="example-text-input">Group</label>
                            <div class="col-md-12">
                                <select class="form-control" id="example-select" name="example-select" value="A">
                                    <option value="0">A</option>
                                    <option value="1">B</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="example-text-input">Tim Home</label>
                            <div class="col-md-12">
                                <select class="form-control" id="example-select" name="example-select" value="Informatika">
                                    <option value="0">Informatika</option>
                                    <option value="1">Teknik Material</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="example-text-input">Tim Away</label>
                            <div class="col-md-12">
                                <select class="form-control" id="example-select" name="example-select" value="Kimia">
                                    <option value="0">Kimia</option>
                                    <option value="0">Informatika</option>
                                    <option value="1">Teknik Material</option>
                                </select>
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
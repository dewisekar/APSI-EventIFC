@extends('layouts.appumum')
@section('title')
    Jadwal Pertandingan
@endsection
@section('content')
    <style>
        body{
            background-image: url('../assets/img/photos/header.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: top; 
            background-size: auto;
        }
    </style>
    <div class="content content-full">
    <!-- Dummy content -->
    <div class="" style="">
        <div class="">
            <div class="content text-center">
                <div class="pt-10 pb-20">
                    <h1 class="font-w700 text-white mb-10">Jadwal Pertandingan </h1>
                </div>
            </div>
        </div>
    </div>           
    <div class="block" >
        <div class="block-content">
            <table class="table table-striped table-vcenter" >
                <thead>
                    <tr>
                        <th>Senin, 4 April 2018</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class=""> 18.00 - Informatika vs Kimia </td>
                    </tr>
                    <tr>      
                        <td class=""> 19.00 - T. Material vs Fisika </td>
                    </tr>
                </tbody>
                <thead>
                    <tr>
                        <th>Selasa, 5 April 2018</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class=""> 18.00 - Informatika vs Kimia </td>
                    </tr>
                    <tr>      
                        <td class=""> 19.00 - T. Material vs Fisika </td>
                    </tr>
                </tbody>
            </table>
        </div>    
        <!-- END Dummy content -->
    </div>
    
    
@endsection
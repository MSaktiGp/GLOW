@extends('layout')

@section('title','Profil')

@section('content')
<div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card">
                        <div class="card-header bg-dark text-white">
                            <h4 class="mb-0">Profil</h4>
                        </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Nama</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">M.Sakti Guruh Pratama</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">NIM</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">F1E123053</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Kelas</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">R-001</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @endsection
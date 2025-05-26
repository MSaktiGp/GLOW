@extends('layout')

@section('title','Kontak kami')

@section('content')

<div class="container py-5">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    <h4 class="mb-0">Informasi Kontak</h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <i class="fas fa-phone me-2"></i>
                            +62 812 3456 7890
                        </li>
                        <hr>
                        <li class="mb-3">
                            <i class="fas fa-envelope me-2"></i>
                            sakti@unja.id
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
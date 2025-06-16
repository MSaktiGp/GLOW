@extends('user.layouts.profil-layout')
@section('title','Profile')
@section ('content')

@push('css')
<style>
    .main-content {
      flex: 1;
      padding-top: 2rem;
      padding-bottom: 3rem;
    }

    .profile-card {
      background-color: #ffeaf6;
      border-radius: 16px;
      padding: 2rem;
      box-shadow: 0 6px 15px rgba(241, 137, 184, 0.2);
      max-width: 600px;
      margin: auto;
      text-align: center;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .profile-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 20px rgba(241, 137, 184, 0.3);
    }

    .profile-avatar {
      width: 100px;
      height: 100px;
      background-color: #f189b8;
      border-radius: 50%;
      margin: auto;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 2.5rem;
      margin-bottom: 1rem;
    }

    .profile-title {
      color: #F189B8;
      font-weight: bold;
      margin-bottom: 2rem;
      font-size: 1.8rem;
    }
    
    .text-pink {
    color: #F189B8; }
</style>
@endpush

<!-- Main Profile Content -->
  <div class="main-content">
    <h2 class="text-center profile-title">Halo, {{ $user->name }}!</h2>
    <div class="profile-card">
      <div class="profile-avatar">
        <i class="bi bi-person-fill"></i>
      </div>
      <hr style="color: #e06a9c;">
      <!-- Profil detail dengan flex -->
      <div class="text-start">
        <div class="d-flex justify-content-between mb-2 px-2">
          <span class="text-pink fw-semibold">Username</span>
          <span class="text-pink">{{ $user->username }}</span>
        </div>
        <div class="d-flex justify-content-between mb-2 px-2">
          <span class="text-pink fw-semibold">Nomor HP</span>
          <span class="text-pink">{{ $user->phone }}</span>
        </div>
        <div class="d-flex justify-content-between mb-2 px-2">
          <span class="text-pink fw-semibold">Alamat</span>
          <span class="text-pink text-end">{{ $user->address }}</span>
        </div>
      </div>
    </div>
    </div>
    </div>
  </div>

@endsection
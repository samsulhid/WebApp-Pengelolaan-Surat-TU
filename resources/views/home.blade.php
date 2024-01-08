@extends('layouts.template')

@section('content')
<div class="jumbotron py-4 px-5">
    @if (Session::get('message'))
    <div class="alert alert-danger">{{ Session::get('message') }}</div>
    @endif
    <h1 class="display-4">
        Selamat datang! {{ Auth::user()->name }}
    </h1>
    <hr class="my-4">
    <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Surat Keluar</h5>
              <p class="card-text">1</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Klasifikasi Surat</h5>
              <p class="card-text">1</p>
            </div>
          </div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Staff TU</h5>
              <p class="card-text">1</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Guru</h5>
              <p class="card-text">2</p>

            </div>
          </div>
        </div>
      </div>
@endsection

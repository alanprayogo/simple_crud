@extends('layouts.admin')

@section('title', 'Tambah Data')

@push('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
@endpush

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item " aria-current="page"><a href="{{ route('pegawai') }}">Data Master</a></li>
    <li class="breadcrumb-item " aria-current="page"><a href="{{ route('pegawai') }}">Data Pegawai</a></li>
    <li class="breadcrumb-item">Tambah Data Pegawai</li>
@endsection

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-8">
      <div class="card">
        <div class="card-body">
          <form action="/insertdata" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Full Name</label>
              <input type="text" class="form-control" name="name" id="name" aria-describedby="fullname">
            </div>
            <div class="mb-3">
              <label for="gender" class="form-label">Gender</label>
              <select class="form-select" name="gender" aria-label="gender">
                <option selected>Pilih Jenis Kelamin</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="phone" class="form-label">Whatsapp</label>
              <input type="number" name="phone" class="form-control" id="phone" aria-describedby="Whatsapp">
            </div>
            <div class="mb-3">
              <label for="photo" class="form-label">Photo Employee</label>
              <input type="file" class="form-control" name="photo" id="photo" aria-describedby="photo">
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div> 
@endsection
    
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>   
@endpush
@extends('layouts.admin')

@section('title', 'Data Pegawai')

@push('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item " aria-current="page"><a href="{{ route('pegawai') }}">Data Master</a></li>
    <li class="breadcrumb-item">Data Pegawai</li>
@endsection

@section('content')
<div class="container">
  <a href="/tambahpegawai" class="btn btn-primary">Tambah +</a>
  <a href="/pegawai" class="btn btn-wait">Beranda</a>
  <div class="row g-3 align-items-center mt-2">
    <div class="col-auto">
    <form action="/pegawai" method="get">
      <input type="search" id="search" name="search" class="form-control" aria-describedby="search">
    </form>
    </div>
    <div class="col-auto">
      <a href="/exportpdf" class="btn btn-info">Export PDF</a>
      <a href="/exportexcel" class="btn btn-success">Export Excel</a>
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Import Data
      </button>

      <!-- begin::Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/importexcel" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
              <div class="form-group">
                <input type="file" name="file" required>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </form>
        </div>
      </div>
      {{-- end::Modal --}}

    </div>
  </div>
  <div class="row">
    {{-- @if ($message = Session::get('success'))
    <div class="alert alert-success" role="alert">
      {{ $message }}
    </div>
    @endif --}}
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama</th>
          <th scope="col">Foto Pegawai</th>
          <th scope="col">Jenis Kelamin</th>
          <th scope="col">Whatsapp</th>
          <th scope="col">Dibuat</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($data as $index => $row)
        <tr>
          <th scope="row">{{ $index + $data->firstItem() }}</th>
          <td>{{ $row->name }}</td>
          <td>
            <img src="{{ asset('fotopegawai/'.$row->photo) }}" alt="" width="50px">
          </td>
          <td>{{ $row->gender }}</td>
          <td>0{{ $row->phone }}</td>
          <td>{{ $row->created_at->format('D M Y') }}</td>
          <td>
            <a href="/tampilkantdata/{{ $row->id }}" class="btn btn-info">Edit</a>
            <a href="#" class="btn btn-danger delete" data-id="{{ $row->id }}" data-name="{{ $row->name }}">Delete</a>
          </td>
        </tr>
        @endforeach 
      </tbody>
    </table>
    {{ $data->links() }}
  </div>
</div>
@endsection
   
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.0.slim.js" integrity="sha256-7GO+jepT9gJe9LB4XFf8snVOjX3iYNb0FHYr5LI1N5c=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
$('.delete').click(function(){
  var pegawaiid = $(this).attr('data-id');
  var name = $(this).attr('data-name');
  swal({
    title: "Yakin?",
    text: "Kamu akan menghapus data pegawai dengan nama "+name+"? ",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
      window.location = "/delete/"+pegawaiid+""
      swal("Data berhasil dihapus", {
        icon: "success",
      });
    } else {
      swal("Data tidak jadi dihapus");
    }
  });
})
</script>
<script>
@if (Session::has('success'))
  toastr.success("{{ Session::get('success') }}");
@endif
</script>
@endpush
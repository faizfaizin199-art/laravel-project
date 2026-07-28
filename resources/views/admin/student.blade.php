@extends('template.admin_template')

@section('title', $title)

@section('content')

<div class="col-12">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Student Management</h1>
            </div>
            <div class="col-12">
                <table id="student" class="table" style="color: #000 |important;">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th class="text-center" ><a href="#AddPart" class="btn btn-mini btn-block btn-inverse" data-toggle="modal" data-target="#AddPart">Tambah Data</a></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>{{ $item->address }}</td>
                            <td align="center">
                                <a class="me-2" href="#EditPart{{ $item->id }}" data-toggle="modal" data-target="#EditPart{{ $item->id }}"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="{{ url('student/hapus/' . $item->id) }}" onclick="return confirm('Data akan dihapus ?')"> <i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- Add Part -->
<!-- Modal -->
<div class="modal fade" id="AddPart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body form">
        <form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{ url('student/simpan') }}">
            @csrf
            <div class="row">
                <div class="col-12">
                    <fieldset class="form-group">
                        <label class="form-label">Name</label>
                        <input name="name" type="text" class="form-control" placeholder="Nama Student">
                    </fieldset>
                    <fieldset class="form-group">
                        <label class="form-label">Email</label>
                        <input name="email" type="text" class="form-control" placeholder="Email">
                    </fieldset>
                    <fieldset class="form-group">
                        <label class="form-label">Phone</label>
                        <input name="phone" type="text" class="form-control" placeholder="Phone">
                    </fieldset>
                    <fieldset class="form-group">
                        <label class="form-label">Address</label>
                        <textarea name="address" class="form-control" placeholder="Address"></textarea>
                    </fieldset>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
    </form>
    </div>
  </div>
</div>

<!-- Edit Sparepart -->
    @foreach ($students as $item)
    <div class="modal fade" id="EditPart{{ $item->id }}" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body form">
        <form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{ url('student/update') . '/' . $item->id }}">
            @csrf
            <div class="row">
                <div class="col-12">
                    <fieldset class="form-group">
                        <label class="form-label">nama</label>
                        <input name="name" type="text" class="form-control" placeholder="Nama Student" value="{{$item -> name }}">
                    </fieldset>
                    <fieldset class="form-group">
                        <label class="form-label">Email</label>
                        <input name="email" type="text" class="form-control" placeholder="Email" value="{{$item -> email }}">
                    </fieldset>
                    <fieldset class="form-group">
                        <label class="form-label">Phone</label>
                        <input name="phone" type="text" class="form-control" placeholder="Phone" value="{{$item -> phone }}">
                    </fieldset>
                    <fieldset class="form-group">
                        <label class="form-label">Address</label>
                        <textarea name="address" class="form-control" placeholder="Address"></textarea>
                    </fieldset>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
    </form>
    </div>
  </div>
</div>

    @endforeach


@endsection

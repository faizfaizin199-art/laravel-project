@extends('layouts.admin_template')
@section('title', 'Data Blog')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="font-weight-bold">{{ $title ?? '' }}</h6>
                </div>
                <div class="card-body">
                    <div align="right" class="mb-3">
                        <a href="{{ route('blog.create') }}" class="btn btn-primary">Create New Blog</a>
                    </div>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Content</th>
                                <th>Photo</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blogs as $index => $value)
                                <tr>
                                    <td>{{ $index += 1 }}</td>
                                    <td>{{ $value->title }}</td>
                                    <td>{{ $value->content }}</td>
                                    <td><img width="100" src="{{ asset('storage/' . $value->photo) }}" alt=""></td>
                                    <td>{{ $value->is_active }}</td>
                                    <td>
                                        <a href="" class="btn btn-success btn-sm">
                                            Edit
                                        </a>
                                        <form action="" method="post" class="d-inline">
                                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

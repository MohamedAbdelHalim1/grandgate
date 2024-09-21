@extends('backend.app')

@section('content')

@if(session()->has('success') > 0)
    <div class="row alert alert-success fade show" role="alert">
        <div class="col-10 text-lg-left" >{{ session()->get('success') }}</div>
        <div class="col-1 close">
            <button type="button" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="la la-close"></i></span>
            </button>
        </div>
    </div>

@elseif(count($errors) > 0)
    <div class="alert alert-danger" role="alert">
        <div class="alert-text">
            <h4 class="alert-heading">Input Errors !</h4>
            <p>Some Error has been happened with New Inputs as Follows :</p>
            <hr>
            @foreach($errors->all() as $error)
                <p class="mb-0">{{ $error }}</p>
            @endforeach

        </div>
    </div>
@endif

<h1>SEO Meta Management</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Page</th>
                <th>Title</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($seoMetas as $meta)
                <tr>
                    <td>{{ $meta->page }}</td>
                    <td>{{ $meta->title }}</td>
                    <td>{{ $meta->description }}</td>
                    <td>
                        <a href="{{ route('seo.edit', $meta->id) }}" class="btn btn-primary">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection

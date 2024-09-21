@extends('backend.app')
@section('content')

<section class="forms">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h4>{{trans('all.add_service')}}</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3 lg-gutters-20 text-center">
                                <label for="title"><strong>{{trans('all.title')}}</strong></label>
                                <input type="text" placeholder="{{trans('all.title')}}" name="title" class="form-control" required>
                            </div>

                            <div class="form-group mb-3 lg-gutters-20 text-center">
                                <label for="description"><strong>{{trans('all.description')}}</strong></label>
                                <input type="text" placeholder="{{trans('all.description')}}" name="description" class="form-control" required>
                            </div>

                            <div class="form-group mb-3 lg-gutters-25 text-center">
                                <label for="order"><strong>{{trans('all.order')}}</strong></label>
                                <input type="number" name="order" class="form-control" placeholder="{{trans('all.order')}}" value="1">
                            </div>

                            <div class="form-group mb-3 lg-gutters-25 text-center">
                                <label for="image"><strong>{{trans('all.image')}}*</strong></label>
                                <input type="file" class="form-control" name="image" required>
                            </div>

                            <div class="form-group mb-3 text-right">
                                <button type="submit" class="btn btn-primary">{{trans('all.Save')}}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection

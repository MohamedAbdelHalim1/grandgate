@extends('backend.app')
@section('content')

<section class="forms">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h4>{{trans('all.add_video')}}</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('videos.store') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3 lg-gutters-20 text-center">
                                <label for="title"><strong>{{trans('all.title')}}</strong></label>
                                <input type="text" placeholder="{{trans('all.title')}}" name="title" class="form-control" required>
                            </div>

                            <div class="form-group mb-3 lg-gutters-20 text-center">
                                <label for="url"><strong>{{trans('all.url')}}</strong></label>
                                <input type="text" placeholder="{{trans('all.url')}}" name="url" class="form-control" required>
                            </div>

                            <div class="form-group mb-3 lg-gutters-25 text-center">
                                <label for="order"><strong>{{trans('all.order')}}</strong></label>
                                <input type="number" name="order" class="form-control" placeholder="{{trans('all.order')}}" value="1">
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

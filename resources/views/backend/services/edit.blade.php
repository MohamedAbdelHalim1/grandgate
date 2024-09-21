@extends('backend.app')
@section('content')

<section class="forms">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h4>{{trans('all.edit_service')}}</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('services.update',$service->id) }}" method="POST" enctype="multipart/form-data">@method('PUT')
                            @csrf
                            <div class="form-group mb-3 lg-gutters-20 text-center">
                                <label for="title"><strong>{{trans('all.title')}}</strong></label>
                                <input type="text" value="{{$service->title}}" name="title" class="form-control" required>
                            </div>
                            <div class="form-group mb-3 lg-gutters-20 text-center">
                                <label for="description"><strong>{{trans('all.description')}}</strong></label>
                                <textarea name="description" class="form-control" required>{{nl2br($service->description)}} </textarea>
                            </div>

                            <div class="form-group mb-3 lg-gutters-25 text-center">
                                <label for="order"><strong>{{trans('all.order')}}</strong></label>
                                <input type="number" name="order" class="form-control" value="{{$service->order}}">
                            </div>

                            <div class="form-group mb-3 lg-gutters-25 text-center">
                                <label for="image"><strong>{{trans('all.image')}}*</strong></label>
                                <input type="file" name="image" class="form-control" required>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    @if($service->image)
                                        <img style="width:100%" src="{{asset($service->image)}}" alt="{{$service->title}}">
                                    @endif
                                </div>
                            </div>
                            <div class="form-group mb-3 text-right">
                                <button type="submit" class="btn btn-primary">{{trans('all.update')}}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection

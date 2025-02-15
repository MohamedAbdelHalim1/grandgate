@extends('backend.app')
@section('content')
    <section class="forms">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-center">
                            <h4>{{ trans('all.Edit Accessory') }}</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('accessories.update', $accessory->id) }}" method="POST"
                                enctype="multipart/form-data">@method('PUT')
                                @csrf
                                <div class="row">
                                    <div class="col-5">
                                        <div class="form-group mb-3 lg-gutters-20 text-center">
                                            <label for="name"><strong>{{ trans('all.English Name') }}</strong></label>
                                            <input type="text" value="{{ $accessory->name }}" name="name"
                                                class="form-control" required>
                                        </div>
                                        <div class="form-group mb-3 lg-gutters-20 text-center">
                                            <label for="title"><strong>{{ trans('all.English Title') }}</strong></label>
                                            <input type="text" value="{{ $accessory->title }}" name="title"
                                                class="form-control" required>
                                        </div>

                                        <div class="form-group mb-3 lg-gutters-20 text-center">
                                            <label
                                                for="description"><strong>{{ trans('all.English Description') }}</strong></label>
                                            <textarea name="description" class="form-control" required>{{ $accessory->description }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-1">
                                        <div style="border-right: 1px solid black;height: 400px;"></div>
                                    </div>
                                    <div class="col-1"></div>

                                    <div class="col-5">
                                        <div class="form-group mb-3 lg-gutters-20 text-center">
                                            <label for="name"><strong>{{ trans('all.Arabic Name') }}</strong></label>
                                            <input type="text" value="{{ $accessory->name_ar }}" name="name_ar"
                                                class="form-control" required>
                                        </div>


                                        <div class="form-group mb-3 lg-gutters-20 text-center">
                                            <label for="title"><strong>{{ trans('all.Arabic Title') }}</strong></label>
                                            <input type="text" value="{{ $accessory->title_ar }}" name="title_ar"
                                                class="form-control" required>
                                        </div>


                                        <div class="form-group mb-3 lg-gutters-20 text-center">
                                            <label
                                                for="description"><strong>{{ trans('all.Arabic Description') }}</strong></label>
                                            <textarea name="description_ar" class="form-control" required>{{ $accessory->description_ar }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <hr size:5px>


                                <div class="form-group mb-3 lg-gutters-25 text-center">
                                    <label for="order"><strong>{{ trans('all.order') }}</strong></label>
                                    <input type="number" name="order" class="form-control"
                                        value="{{ $accessory->order }}">
                                </div>
                                <div class="form-group mb-3 lg-gutters-25 text-center">
                                    <label for="cover"><strong>{{ trans('all.Cover') }}</strong></label>
                                    <input type="file" class="form-control" name="cover"
                                        @if (!$accessory->cover) required @endif>
                                </div>
                                @if ($accessory->cover)
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="row" style="height: 100%">
                                                <div class="col-12" style="height: 100%">
                                                    <img style="width:100%; height: 100%"
                                                        src="{{ asset($accessory->cover) }}" alt="{{ $accessory->name }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <div class="form-group mb-3 lg-gutters-25 text-center">
                                    <label for="image"><strong>{{ trans('all.Image') }}</strong></label>
                                    <input type="file" class="form-control" name="image"
                                        @if (!$accessory->image) required @endif>
                                </div>
                                @if ($accessory->image)
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="row" style="height: 100%">
                                                <div class="col-12" style="height: 100%">
                                                    <img style="width:100%; height: 100%"
                                                        src="{{ asset($accessory->image) }}" alt="{{ $accessory->name }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <br>
                                <div class="form-group mb-3 text-right">
                                    <button type="submit" class="btn btn-primary">{{ trans('all.update') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

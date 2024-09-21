@extends('backend.app')
@section('content')

    <section class="forms">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-center">
                            <h4>{{ trans('all.edit_product') }}</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('categories.update', $category->id) }}" method="POST"
                                enctype="multipart/form-data">@method('PUT')
                                @csrf
                                <div class="row">
                                    <div class="col-5">
                                        <div class="form-group mb-3 lg-gutters-20 text-center">
                                            <label for="name"><strong>{{ trans('all.English Name') }}</strong></label>
                                            <input type="text" value="{{ $category->name }}" name="name"
                                                class="form-control" required>
                                        </div>
                                        <div class="form-group mb-3 lg-gutters-20 text-center">
                                            <label for="title"><strong>{{ trans('all.English Title') }}</strong></label>
                                            <input type="text" value="{{ $category->title }}" name="title"
                                                class="form-control" required>
                                        </div>
                                        <div class="form-group mb-3 lg-gutters-20 text-center">
                                            <label
                                                for="description"><strong>{{ trans('all.English Description') }}</strong></label>
                                            <textarea name="description" class="form-control" required>{{ $category->description }}</textarea>
                                        </div>
                                        <div class="form-group mb-3 lg-gutters-20 text-center">
                                            <label for="list"><strong>{{ trans('all.English List') }}</strong></label>
                                            <textarea name="list" class="form-control" placeholder="separate by comma">{{ $category->list }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-1">
                                        <div style="border-right: 1px solid black;height: 400px;"></div>
                                    </div>
                                    <div class="col-1"></div>

                                    <div class="col-5">
                                        <div class="form-group mb-3 lg-gutters-20 text-center">
                                            <label for="name"><strong>{{ trans('all.Arabic Name') }}</strong></label>
                                            <input type="text" value="{{ $category->name_ar }}" name="name_ar"
                                                class="form-control" required>
                                        </div>


                                        <div class="form-group mb-3 lg-gutters-20 text-center">
                                            <label for="title"><strong>{{ trans('all.Arabic Title') }}</strong></label>
                                            <input type="text" value="{{ $category->title_ar }}" name="title_ar"
                                                class="form-control" required>
                                        </div>



                                        <div class="form-group mb-3 lg-gutters-20 text-center">
                                            <label
                                                for="description"><strong>{{ trans('all.Arabic Description') }}</strong></label>
                                            <textarea name="description_ar" class="form-control" required>{{ $category->description_ar }}</textarea>
                                        </div>


                                        <div class="form-group mb-3 lg-gutters-20 text-center">
                                            <label for="list"><strong>{{ trans('all.Arabic List') }}</strong></label>
                                            <textarea name="list_ar" class="form-control" placeholder="separate by comma">{{ $category->list_ar }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <hr size:5px>

                                <div class="form-group mb-3 lg-gutters-25 text-center">
                                    <label for="order"><strong>{{ trans('all.order') }}</strong></label>
                                    <input type="number" name="order" class="form-control"
                                        value="{{ $category->order }}">
                                </div>
                                <div class="form-group mb-3 lg-gutters-25 text-center">
                                    <label for="cover"><strong>{{ trans('all.Cover') }}</strong></label>
                                    <input type="file" class="form-control" name="cover"
                                        @if (!$category->cover) required @endif>
                                </div>
                                @if ($category->cover)
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="row" style="height: 100%">
                                                <div class="col-12" style="height: 100%">
                                                    <img style="width:100%; height: 100%"
                                                        src="{{ asset($category->cover) }}" alt="{{ $category->name }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <div class="form-group mb-3 lg-gutters-25 text-center">
                                    <label for="image"><strong>{{ trans('all.image') }}</strong></label>
                                    <input type="file" name="images[]" class="form-control" multiple
                                        @if (!$category->images->first()) required @endif>
                                </div>
                                <div class="row">
                                    @if ($category->images)
                                        @foreach ($category->images as $image)
                                            <div class="col-3">
                                                <a href="" onclick="removeImg({{ $image->id }})"
                                                    style="color:black">remove</a>
                                                <img style="width:100%" src="{{ asset($image->url) }}"
                                                    alt="{{ $category->name }}">
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
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
@section('script')
    <script type="text/javascript">
        function removeImg(id) {
            console.log("ho");
            var url = "{{ route('remove_img', ':id') }}";
            url = url.replace(':id', id);
            $.ajax({
                type: "GET",
                url: url,
                success: function(response) {
                    location.reload();
                },
                error: function(error) {
                    console.log(error);
                }
            });
        }
    </script>
@endsection

@extends('backend.app')
@section('content')

<section class="forms">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h4>{{trans('all.edit_config')}}</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('configs.update',$config->id) }}" method="POST">
                            @csrf
                            <div class="form-group mb-3 lg-gutters-20 text-center">
                                <label for="key"><strong>{{trans('all.key')}}</strong></label>
                                <input type="text" value="{{$config->key}}" name="key" class="form-control" readonly>
                            </div>

                            <div class="form-group mb-3 lg-gutters-25 text-center">
                                <label for="value"><strong>{{trans('all.value')}}</strong></label>
                                <input type="text" name="value" class="form-control" value="{{$config->value}}" required>
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

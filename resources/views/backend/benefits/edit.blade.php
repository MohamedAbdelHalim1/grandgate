@extends('backend.app')
@section('content')

<section class="forms">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h4>{{trans('all.edit_benefit')}}</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('benefits.update',$benefit->id) }}" method="POST">@method('PUT')
                            @csrf
                            <div class="form-group mb-3 lg-gutters-20 text-center">
                                <label for="name"><strong>{{trans('all.Name')}}</strong></label>
                                <input type="text" value="{{$benefit->title}}" name="title" class="form-control" required>
                            </div>

                            <div class="form-group mb-3 lg-gutters-25 text-center">
                                <label for="icon"><strong>{{trans('all.Icon')}}</strong></label>
                                <br>
                                <button class="form-control" data-icon="{{$benefit->icon}}" role="iconpicker" id="icon_picker" data-rows="3" data-cols="6"></button>
                            </div>
                            <input type="hidden" name="icon" value="{{$benefit->icon}}">

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
@section('script')
<script>
    $('#icon_picker').on('change',function(e){
        var icon = e.icon;
        $('input[name=icon]').val(icon);
    });
</script>
@endsection

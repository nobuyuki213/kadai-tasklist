{!! Form::open(['route' => 'tasks.store']) !!}
    <div class="form-row text-center my-2">
        <div class="col-md-11 col-10">
            {!! Form::text('content', old('content'), ['class' => 'form-control', 'placeholder' => 'Add a to-do']) !!}
        </div>
        <div class="col-md-1 col-2">
            {!! Form::button('＋', ['class' => 'btn btn-primary btn-sm mt-1', 'type' => 'submit']) !!}
        </div>
    </div>
{!! Form::close() !!}
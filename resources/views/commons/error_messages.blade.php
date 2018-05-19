@if(count($errors) > 0)
    <ul class="list-group list-group-flush">
        @foreach($errors->all() as $error)
            <li class="list-group-item list-group-item-danger"><i class="fas fa-exclamation-circle fa-lg"></i> {{ $error }}</li>
        @endforeach
    </ul>
@endif
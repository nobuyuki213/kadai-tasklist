<div class="row mb-2">
    @foreach($users as $user)
        <div class="col-lg-2 col-md-3 col-4 px-1">
            <div class="card mb-2">
                <img class="card-img-top img-responsive" src="{{ Gravatar::src($user->email, 250) }}" alt="Card image cap">
                <div class="card-body">
                    <h6 class="card-title ">{{ $user->name }}</h6>
                    @if (Auth::user()->id === $user->id)
                    {!! link_to_route('users.show', 'task', ['id' => $user->id], ['class' => 'btn btn-primary btn-block text-center']) !!}
                    @else
                    {!! link_to_route('users.show', 'task', ['id' => $user->id], ['class' => 'btn btn-outline-primary btn-block text-center disabled', 'aria-disabled' => 'true']) !!}
                    @endif
                </div>
            </div>
        </div>
    @endforeach
</div>
<div class="text-center">
    {!! $users->render("pagination::bootstrap-4") !!}
</div>

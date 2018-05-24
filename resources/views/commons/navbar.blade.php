<header>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background: rgba(0, 80, 255, 0.8);">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Tasks Box</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-md-auto">
                    @if(Auth::check())
                        <li class="nav-item active">
                            <a class="nav-link" href="/tasks/create"><i class="fas fa-plus-circle"></i> Crate new task <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                {!! link_to_route('logout.get', 'Log out', null, ['class' => 'dropdown-item']) !!}
                            </div>
                        </li>
                    @else
                        <li class="nav-item">{!! link_to_route('signup.get', 'Sign up', null, ['class' => 'nav-link']) !!}</li>
                        <li class="nav-item">{!! link_to_route('login', 'Log in', null, ['class' => 'nav-link']) !!}</li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>


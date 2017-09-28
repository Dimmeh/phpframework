<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="nav-header">


                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a href="{{route('blog.index')}}" class="nav-link active">Laravel Guide</a>
                    </li>
                    <li class="nav-item">
                        <a class=" nav-link " href="{{route('reparation.index')}}">Reparatie</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('other.about')}}">Over ons</a>
                    </li>
                    @if(!Auth::check())
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('register')}}">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('login')}}">Login</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('users.index', ['id' => Auth::user()->id])}}">Mijn Account</a>
                        </li>
                        @if(Auth::user()->role == 10)
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('admin.reparations')}}">All Reparations</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('admin.users.contributors')}}">All Contributors</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('admin.users.customers')}}">All Customers</a>
                            </li>
                        @endif

                        <li class="nav-item">
                            <a class="nav-link"  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    @endif
            </ul>
        </div>
    </div>
</nav>
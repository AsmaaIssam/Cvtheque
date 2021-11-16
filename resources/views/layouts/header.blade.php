<nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow">
    <div class="navbar-container d-flex content">
            
            <ul class="nav navbar-nav align-items-center ml-auto">
                <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none"><span class="user-name font-weight-bolder">{{ Auth::user()->name }}</span><span class="user-status">{{ Auth::user()->getRoleNames()[0] }}</span></div><span class="avatar"><img class="round" src="{{ Auth::user()->profile_photo_url }}" alt="photo de profile" height="40" width="40"><span class="avatar-status-online"></span></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">
                        <a class="dropdown-item" href="{{ route('profile.show') }}">
                            <i class="mr-50" data-feather="user">
                            </i> {{ __('Profile') }}</a>
                        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                            <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                {{ __('API Tokens') }}
                            </x-jet-dropdown-link>
                        @endif  
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
    
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                             onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                       <i class="mr-50" data-feather="power">
                                        </i>{{ __('Se déonnecter') }}
                                       </a>
                                </form>
                            
                       </a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
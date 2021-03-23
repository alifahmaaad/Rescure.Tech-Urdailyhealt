<form method="POST" action="{{ route('logout') }}">
    @csrf

    <x-jet-responsive-nav-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                    this.closest('form').submit();">
        {{ __('Log Out') }}
    </x-jet-responsive-nav-link>
</form>
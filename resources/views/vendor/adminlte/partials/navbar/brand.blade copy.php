<a href="{{ url('/') }}" class="brand-link">
    <img src="{{ Auth::user()->avatar_url ?? asset('images/default-avatar.png') }}"
         alt="User Logo"
         class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">
        {{ Auth::user()->name ?? 'Admin' }}
    </span>
</a>

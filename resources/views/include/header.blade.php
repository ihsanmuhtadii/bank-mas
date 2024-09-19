
<div class="d-flex">
    <div class="dropdown d-none d-sm-inline-block">
        <button type="button" class="btn header-item" id="mode-setting-btn">
            <i data-feather="moon" class="icon-lg layout-mode-dark"></i>
            <i data-feather="sun" class="icon-lg layout-mode-light"></i>
        </button>
    </div>

    <div class="dropdown d-inline-block">
        <button type="button" class="btn header-item bg-soft-light border-start border-end" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            @if(auth()->user()->photo)
            <img class="rounded-circle header-profile-user" src="{{ asset('storage/' . auth()->user()->photo )}}" alt="avatar" height="40" width="40" alt="Header Avatar">
            @else
            <img class="rounded-circle header-profile-user" src="https://ui-avatars.com/api/?name={{auth()->user()->name}}&amp;background=00ADEF&amp;color=fff" alt="avatar" height="40" width="40" alt="Header Avatar">
            @endif
            <span class="d-none d-xl-inline-block ms-1 fw-medium">{{Auth::user()->name}}</span>
            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-end">
            <!-- item-->
            {{-- <a class="dropdown-item" href="apps-contacts-profile.html"><i class="mdi mdi-face-profile font-size-16 align-middle me-1"></i> Profile</a>
            <a class="dropdown-item" href="auth-lock-screen.html"><i class="mdi mdi-lock font-size-16 align-middle me-1"></i> Lock Screen</a> --}}
            <div class="dropdown-divider"></div>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="dropdown-item"><i class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout</button>
            </form>
        </div>
    </div>
</div>
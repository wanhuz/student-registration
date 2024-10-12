<nav id="header" class="navbar navbar-expand-lg text-light sticky-top">
    <div class="container-fluid">
        <div class="flex flex-row">
            <button id="menu-btn" class="btn ms-3 me-3 nav-btn" type="button"><i class="bi bi-list"></i></button>

            <a class="navbar-brand me-1 text-white" href="/">{{ $title }}</a>

            <div class="d-inline me-auto">
                <button type="button" class="btn nav-btn" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="me-2">{{ $username }}</span> 

                </button>
                
                <form id="logout-form" action="{{ route('logout') }}" method="POST"> 
                    @csrf 
                
                </form>
            </div>
        </div>
    </div>
</nav>
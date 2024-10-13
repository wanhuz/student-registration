<nav id="sidebar" class="col-md-2 col-lg-1 d-md-block bg-light sidebar collapse">
    <div class="position-sticky">
        <ul class="nav flex-column">
            <x-nav-btn>
                <x-slot:name>Home</x-slot>
                <x-slot:link>/</x-slot>
                <x-slot:icon>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                </x-slot>
            </x-nav-btn>
            <x-nav-btn>
                <x-slot:name>Course</x-slot>
                <x-slot:link>/course</x-slot>
                <x-slot:icon>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    >
                        <line x1="4" y1="6" x2="20" y2="6"></line>
                        <line x1="4" y1="12" x2="20" y2="12"></line>
                        <line x1="4" y1="18" x2="20" y2="18"></line>
                        <circle cx="2" cy="6" r="1"></circle>
                        <circle cx="2" cy="12" r="1"></circle>
                        <circle cx="2" cy="18" r="1"></circle>
                    </svg>
                </x-slot>
            </x-nav-btn>
            <x-nav-btn>
                <x-slot:name>Report</x-slot>
                <x-slot:link>/report</x-slot>
                <x-slot:icon>
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                >
                    <path d="M3 3v18h18V3H3z" fill="none"></path>
                    <path d="M3 12h4v8H3z" fill="currentColor"></path>
                    <path d="M10 8h4v12h-4z" fill="currentColor"></path>
                    <path d="M17 4h4v16h-4z" fill="currentColor"></path>
                    <line x1="1" y1="21" x2="23" y2="21"></line>
                </svg>
                </x-slot>
            </x-nav-btn>
        </ul>
    </div>
</nav>
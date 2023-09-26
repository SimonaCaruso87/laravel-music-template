<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('page-title') | {{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        @vite('resources/js/app.js')
    </head>
    <body>
        <div class="row g-0 mx-0 vh-100">
            <aside class="col-1 col-sm-3 col-md-2 p-2 bg-primary h-100 d-flex flex-column justify-content-between">
                <div>
                    <div class="text-center py-3">
                        <a href="{{ route('home') }}">
                            <svg width="133" height="28" viewBox="0 0 133 28" fill="none" xmlns="http://www.w3.org/2000/svg" class="navbar-content-logo-desktop"><g clip-path="url(#clip0_1868_2965)"><path d="M12.9866 21.7381L11.0646 23.5888C10.8516 23.7932 10.5631 23.9079 10.2623 23.9079C9.96153 23.9079 9.67302 23.7932 9.46004 23.5888L0.331474 14.8056C0.119177 14.6003 0 14.3225 0 14.0329C0 13.7434 0.119177 13.4656 0.331474 13.2603L9.52731 4.41233C9.74078 4.20828 10.0295 4.09375 10.3304 4.09375C10.6313 4.09375 10.92 4.20828 11.1335 4.41233L13.0588 6.26306C13.2707 6.4679 13.3897 6.74513 13.3897 7.03412C13.3897 7.32312 13.2707 7.60036 13.0588 7.80519L12.8332 8.01986L7.39283 13.2548C7.18043 13.4597 7.06115 13.7372 7.06115 14.0266C7.06115 14.316 7.18043 14.5936 7.39283 14.7985L12.9866 20.1952C13.0924 20.2962 13.1764 20.4164 13.2338 20.5488C13.2911 20.6812 13.3206 20.8232 13.3206 20.9666C13.3206 21.1101 13.2911 21.2521 13.2338 21.3845C13.1764 21.5169 13.0924 21.6371 12.9866 21.7381Z" fill="#00DF6B"></path><path d="M11.8227 25.8398L13.7341 27.6803C13.9469 27.8846 14.2353 27.9993 14.5359 27.9993C14.8366 27.9993 15.125 27.8846 15.3378 27.6803L15.4051 27.614L28.7895 14.7371C28.8952 14.6362 28.979 14.5162 29.0362 14.384C29.0935 14.2518 29.1229 14.11 29.1229 13.9668C29.1229 13.8236 29.0935 13.6818 29.0362 13.5496C28.979 13.4174 28.8952 13.2974 28.7895 13.1965L15.4051 0.318771C15.3001 0.217639 15.1754 0.137409 15.0382 0.0826701C14.9009 0.027931 14.7538 -0.000244141 14.6053 -0.000244141C14.4567 -0.000244141 14.3096 0.027931 14.1724 0.0826701C14.0351 0.137409 13.9104 0.217639 13.8054 0.318771L11.8925 2.15924C11.6809 2.36377 11.5622 2.64058 11.5622 2.92912C11.5622 3.21766 11.6809 3.49447 11.8925 3.69901L21.4615 12.9037L21.7667 13.1957C21.8718 13.2966 21.9552 13.4165 22.012 13.5485C22.0689 13.6805 22.0982 13.8219 22.0982 13.9648C22.0982 14.1077 22.0689 14.2491 22.012 14.3811C21.9552 14.5131 21.8718 14.633 21.7667 14.7339L11.8227 24.3016C11.7176 24.4026 11.6343 24.5225 11.5774 24.6544C11.5205 24.7864 11.4912 24.9279 11.4912 25.0707C11.4912 25.2136 11.5205 25.3551 11.5774 25.487C11.6343 25.619 11.7176 25.7389 11.8227 25.8398Z" fill="#001632"></path><path d="M54.5701 14.1358C54.5701 17.6471 51.927 20.3581 48.7195 20.3581C47.0789 20.3581 45.8771 19.8151 45.0683 18.9201V20.025H41.3916V3.53027H45.065V9.34999C45.8738 8.45502 47.074 7.91282 48.7163 7.91282C51.927 7.91677 54.5701 10.6246 54.5701 14.1358ZM50.8967 14.1358C50.8967 12.3688 49.6711 11.2615 47.9837 11.2615C46.2963 11.2615 45.0683 12.3664 45.0683 14.1358C45.0683 15.9053 46.293 17.0102 47.9837 17.0102C49.6744 17.0102 50.8967 15.9029 50.8967 14.1358Z" fill="#001632"></path><path d="M56.0371 14.1356C56.0371 10.6243 58.9288 7.9165 62.5259 7.9165C66.123 7.9165 69.0171 10.6243 69.0171 14.1356C69.0171 17.6468 66.1255 20.3578 62.5259 20.3578C58.9263 20.3578 56.0371 17.6468 56.0371 14.1356ZM65.3413 14.1356C65.3413 12.4632 64.119 11.3559 62.5259 11.3559C60.9328 11.3559 59.7114 12.4608 59.7114 14.1356C59.7114 15.8103 60.9361 16.9152 62.5259 16.9152C64.1157 16.9152 65.3445 15.8079 65.3445 14.1356H65.3413Z" fill="#001632"></path><path d="M70.4854 14.1356C70.4854 10.6243 73.3754 7.9165 76.9741 7.9165C80.5729 7.9165 83.4653 10.6243 83.4653 14.1356C83.4653 17.6468 80.5745 20.3578 76.9741 20.3578C73.3737 20.3578 70.4854 17.6468 70.4854 14.1356ZM79.7903 14.1356C79.7903 12.4632 78.5647 11.3559 76.9741 11.3559C75.3835 11.3559 74.1571 12.4608 74.1571 14.1356C74.1571 15.8103 75.3876 16.9152 76.9741 16.9152C78.5606 16.9152 79.7903 15.8079 79.7903 14.1356Z" fill="#001632"></path><path d="M85.5435 2.82764H89.2161V20.0248H85.541L85.5435 2.82764Z" fill="#001632"></path><path d="M98.1301 17.1993C99.1326 17.1993 99.9915 16.8213 100.482 16.3036L103.421 17.9309C102.22 19.5315 100.407 20.3578 98.0817 20.3578C93.8932 20.3578 91.2969 17.6468 91.2969 14.1356C91.2969 10.6243 93.9424 7.9165 97.811 7.9165C101.388 7.9165 104.034 10.5786 104.034 14.1356C104.036 14.6106 103.987 15.0846 103.887 15.5499H95.1918C95.6569 16.7747 96.7815 17.1993 98.1301 17.1993ZM100.383 12.9107C99.9915 11.543 98.8889 11.0489 97.7881 11.0489C96.3935 11.0489 95.4584 11.7087 95.1196 12.9107H100.383Z" fill="#001632"></path><path d="M118.551 8.2464V20.0247H114.879V18.9198C114.072 19.8148 112.869 20.3578 111.231 20.3578C108.024 20.3578 105.379 17.6468 105.379 14.1356C105.379 10.6243 108.024 7.9165 111.231 7.9165C112.872 7.9165 114.072 8.4587 114.879 9.35368V8.24877L118.551 8.2464ZM114.879 14.1356C114.879 12.3685 113.656 11.2612 111.966 11.2612C110.276 11.2612 109.052 12.3661 109.052 14.1356C109.052 15.905 110.275 17.0099 111.966 17.0099C113.657 17.0099 114.879 15.9026 114.879 14.1356Z" fill="#001632"></path><path d="M132.999 12.7935V20.0252H129.33V13.312C129.33 11.8504 128.373 11.1677 127.202 11.1677C125.853 11.1677 124.921 11.9206 124.921 13.5938V20.0252H121.248V8.24681H124.921V9.35172C125.582 8.47963 126.807 7.91455 128.424 7.91455C130.893 7.91692 132.999 9.61216 132.999 12.7935Z" fill="#001632"></path></g><defs><clipPath id="clip0_1868_2965"><rect width="133" height="28" fill="white"></rect></clipPath></defs></svg>
                        </a>
                    </div>

                    <nav>
                        <ul class="list-unstyled">
                            @php
                                $linkClasses = 'd-inline-block rounded px-3 py-2 text-decoration-none w-100 fw-bold';
                            @endphp
                            <li>
                                <a href="{{ route('admin.dashboard') }}"
                                    @class([
                                        $linkClasses,
                                        'bg-white text-primary' => request()->routeIs('admin.dashboard'),
                                        'text-white' => !request()->routeIs('admin.dashboard')
                                    ])
                                    >
                                    Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.resources.index') }}"
                                    @class([
                                        $linkClasses,
                                        'bg-white text-primary' => request()->routeIs('admin.resources.index'),
                                        'text-white' => !request()->routeIs('admin.resources.index')
                                    ])>
                                    Risorse
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    @class([
                                        $linkClasses,
                                        'bg-white text-primary' => request()->routeIs('admin.albums.index'),
                                        'text-white' => !request()->routeIs('admin.albums.index')
                                    ])>
                                    Album
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    @class([
                                        $linkClasses,
                                        'bg-white text-primary' => request()->routeIs('admin.genres.index'),
                                        'text-white' => !request()->routeIs('admin.genres.index')
                                    ])>
                                    Generi
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="py-2">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button type="submit" class="btn btn-danger w-100 fw-bold">
                            Log Out
                        </button>
                    </form>
                </div>
            </aside>

            <section class="col-11 col-sm-9 col-md-10 bg-light h-100 overflow-y-auto overflow-x-hidden">
                <header class="bg-primary-subtle px-3 py-2">
                    <h1>
                        @yield('page-title')
                    </h1>
                </header>

                <main>
                    <div class="container-fluid py-4">
                        @yield('main-content')
                    </div>
                </main>
            </section>
        </div>

        {{-- <header>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container">
                    <a class="navbar-brand" href="/">Template</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link 2</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link 3</a>
                            </li>
                        </ul>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <button type="submit" class="btn btn-outline-danger">
                                Log Out
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
        </header>

        <main class="py-4">
            <div class="container">
                @yield('main-content')
            </div>
        </main> --}}
    </body>
</html>
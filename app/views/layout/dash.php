<nav class="navbar border-bottom bg-dark">
    <div class="container-fluid py-1 px-3 col-11">
        <a class="navbar-brand d-flex align-items-center" style="color: #fff; font-size: 1.8em; user-select: none;" href="#">
            You<span style="color: #fff; font-family: 'Allerta Stencil';">Wiki</span>
        </a>
        <div class="d-flex gap-3">
            <div class="d-flex">
                <ul class="navbar-nav d-flex justify-content-center align-items-center flex-row gap-3">
                    <li class="nav-item navbar__link d-flex  justify-content-center align-items-center">
                        <a class="nav-link active" href="#">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 9v11a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V9" />
                                    <path d="M9 22V12h6v10M2 10.6L12 2l10 8.6" />
                                </svg>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="dropdown d-flex align-items-center dropdown__menu">
                <button class="bg-white d-flex align-items-center gap-2 rounded-pill px-4 py-2" type="button" data-bs-toggle="dropdown" data-toggle="dropdown" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="3" y1="12" x2="21" y2="12"></line>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg>
                    <a href="#" class="d-flex align-items-center text-decoration-none">
                        <span class="ms-2"></span>
                    </a>
                </button>
                <ul class="dropdown-menu dropdown-menu-end text-small shadow dropdown__list" aria-labelledby="dropdownUser2">
                    <li><a class="dropdown-item" href="#">Wiki</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="SignOutController">Sign out</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<main class="d-flex w-100" style="height: 89vh; color:lightcyan">
    <div class="d-flex flex-column flex-shrink-0 p-3 bg-dark" style="width: 280px;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 ms-5 me-md-auto link-light text-decoration-none">
            <svg class="ms-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect x="3" y="3" width="7" height="7"></rect>
                <rect x="14" y="3" width="7" height="7"></rect>
                <rect x="14" y="14" width="7" height="7"></rect>
                <rect x="3" y="14" width="7" height="7"></rect>
            </svg>
            <span class="fs-4 ms-2 ">
                <span>Menu</span>
            </span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto ">
            <li>
                <a href="../dashTag" class="nav-link bg-light ">Tags</a>
            </li>
            <li class="nav-item">
                <a href="../dashCategory" class="nav-link" aria-current="page">Category</a>
            </li>
            <li class="nav-item">
                <a href="dashWiki" class="nav-link" aria-current="page">Wikis</a>
            </li>
        </ul>
    </div>
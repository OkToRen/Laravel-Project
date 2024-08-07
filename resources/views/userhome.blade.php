@extends('usernav')

@section('content')
    <style>
        body {
            background-color: #1e1e1e;
            color: #e0e0e0;
        }

        .navbar-light {
            background-color: #222222;
        }

        .navbar-light .navbar-brand,
        .navbar-light .navbar-nav .nav-link,
        .navbar-light .navbar-toggler-icon {
            color: #e0e0e0;
        }

        .navbar-light .navbar-nav .nav-link {
            color: #e0e0e0;
        }

        .navbar-light .navbar-nav .nav-link:hover {
            color: #00bfff;
        }

        .dropdown-menu.custom-width {
            background-color: #333333;
            color: #e0e0e0;
            width: 1000px;
            max-width: 100vw;
            padding: 1.5rem;
        }

        .dropdown-menu.custom-width a {
            color: #e0e0e0;
        }

        .dropdown-menu.custom-width a:hover {
            color: #00bfff;
            background-color: #444444;
        }

        .dropdown-menu.custom-width .text-primary {
            color: #00bfff !important;
        }

        .form-control {
            background-color: #2c2c2c;
            color: #e0e0e0;
            border: 1px solid #444444;
        }

        .form-control::placeholder {
            color: #9e9e9e;
        }

        .btn-outline-primary {
            color: #00bfff;
            border-color: #00bfff;
        }

        .btn-outline-primary:hover {
            background-color: #00bfff;
            color: #1e1e1e;
        }

        .dropdown-menu .list-unstyled li {
            margin-bottom: 0.5rem;
        }

        .dropdown-menu .list-unstyled {
            padding: 0;
        }

        .carousel-container {
            width: 80%;
            max-width: 1200px;
            margin: auto;

        }

        .carousel-item img,
        .carousel-item video {
            width: 100%;
            height: auto;
        }

        .carousel-card {
            display: flex;
            flex-direction: row;
            gap: 1rem;
            align-items: center;
            margin: 0 100px;
            background-color: #141321;
        }

        .carousel-left {
            flex: 1;
        }

        .carousel-right {
            flex: 2;
            padding: 1rem;
        }

        .carousel-right img {
            width: 50px;
            height: auto;
            margin-right: 0.5rem;
        }

        .price {
            font-weight: bold;
        }
    </style>

    <div class="container-fluid">
        <!-- Inner Navbar Container -->
        <div class="inner-navbar-container mt-2">
            <div class="wishlist-cart-section mb-1"></div>
        </div>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light" id="inner-navbar">
            <div class="container">
                <a class="navbar-brand" href="/store/show">Your Store</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Categories</a>
                            <ul class="dropdown-menu custom-width" aria-labelledby="navbarDropdown"
                                style="z-index: 999999999;">
                                <div class="container p-4">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <h6 class="text-primary font-weight-bold text-uppercase">Special Section</h6>
                                            <ul class="list-unstyled">
                                                <li><a href="/search/games?special_offers=on" class="dropdown-item">Special
                                                        Offers</a></li>
                                                <li><a href="/search/games?max_price=0" class="dropdown-item">Free to
                                                        Play</a></li>
                                                <li><a href="/search/games?sort_by=popularity" class="dropdown-item">Most
                                                        Popular</a></li>
                                                <li><a href="/search/games?sort_by=reviews" class="dropdown-item">Most
                                                        Reviewed</a></li>
                                                <li><a href="/search/games?sort_by=release_date" class="dropdown-item">New
                                                        Releases</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <h6 class="text-primary font-weight-bold text-uppercase">Genres</h6>
                                            <div class="row">
                                                <div class="col-6">
                                                    <ul class="list-unstyled">
                                                        <li><a href="1" class="dropdown-item">Fantasy</a></li>
                                                        <li><a href="2" class="dropdown-item">RPG</a></li>
                                                        <li><a href="3" class="dropdown-item">FPS</a></li>
                                                        <li><a href="4" class="dropdown-item">Action</a></li>
                                                        <li><a href="5" class="dropdown-item">Adventure</a></li>
                                                        <li><a href="6" class="dropdown-item">Simulation</a></li>
                                                        <li><a href="7" class="dropdown-item">Sports</a></li>
                                                        <li><a href="8" class="dropdown-item">Puzzle</a></li>
                                                        <li><a href="9" class="dropdown-item">Horror</a></li>
                                                        <li><a href="10" class="dropdown-item">Racing</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-6">
                                                    <ul class="list-unstyled">
                                                        <li><a href="11" class="dropdown-item">Fighting</a></li>
                                                        <li><a href="12" class="dropdown-item">Sandbox</a></li>
                                                        <li><a href="13" class="dropdown-item">Farming</a></li>
                                                        <li><a href="14" class="dropdown-item">Mobilesssss</a></li>
                                                        <li><a href="15" class="dropdown-item">historyaaa</a></li>
                                                        <li><a href="16" class="dropdown-item">GG</a></li>
                                                        <li><a href="17" class="dropdown-item">shoree</a></li>
                                                        <li><a href="18" class="dropdown-item">yey</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <h6 class="text-primary font-weight-bold text-uppercase">Price</h6>
                                            <ul class="list-unstyled">
                                                <li><a href="/search/games?max_price=60000" class="dropdown-item">Under Rp
                                                        60.000</a></li>
                                                <li><a href="/search/games?max_price=120000" class="dropdown-item">Under Rp
                                                        120.000</a></li>
                                                <li><a href="/search/games?max_price=180000" class="dropdown-item">Under Rp
                                                        180.000</a></li>
                                                <li><a href="/search/games?max_price=240000" class="dropdown-item">Under Rp
                                                        240.000</a></li>
                                                <li><a href="/search/games?max_price=360000" class="dropdown-item">Under Rp
                                                        360.000</a></li>
                                                <li><a href="/search/games?max_price=480000" class="dropdown-item">Under
                                                        Rp 480.000</a></li>
                                                <li><a href="/search/games?max_price=600000" class="dropdown-item">Under
                                                        Rp 600.000</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex ms-auto" action="/search/games" method="GET">
                        <input type="hidden" name="_token" value="J75obK9Ju4PTpfgW1ZuZsOK2oKoQ3Rjam8ajwey5">
                        <input class="form-control me-2" type="search" placeholder="Search.." id="search-field"
                            name="title" aria-label="Search">
                        <button class="btn btn-outline-primary" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -960 960 960"
                                width="20" fill="#00bfff">
                                <path
                                    d="M765-144 526-383q-30 22-65.79 34.5-35.79 12.5-76.18 12.5Q284-336 214-406t-70-170q0-100 70-170t170-70q100 0 170 70t70 170.03q0 40.39-12.5 76.18Q599-464 577-434l239 239-51 51ZM384-408q70 0 119-49t49-119q0-70-49-119t-119-49q-70 0-119 49t-49 119q0 70 49 119t119 49Z">
                                </path>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
    <div id="gameCarousel" class="carousel slide">
        <div class="carousel-inner">
            <!-- First Item -->
            <div class="carousel-item active">
                <a href="/game/details/1">
                    <div class="carousel-card">
                        <div class="carousel-left">
                            <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/1245620/capsule_616x353_alt_assets_2.jpg?t=1720627962"
                                alt="Elden Ring">
                            <video
                                src="https://firebasestorage.googleapis.com/v0/b/dteam-29297.appspot.com/o/videos%2F1720504924263?alt=media&amp;token=dad6e088-b0eb-4fc5-b5bc-9227fc142649"
                                autoplay loop></video>
                        </div>
                        <div class="carousel-right">
                            <p class="h2">Elden Ring</p>
                            <div class="d-flex mb-2">
                                <img src="https://firebasestorage.googleapis.com/v0/b/dteam-29297.appspot.com/o/images%2F1720504937055?alt=media&amp;token=2cb1b118-2320-4891-b3dd-46807292a848"
                                    alt="Image 1">
                                <img src="https://firebasestorage.googleapis.com/v0/b/dteam-29297.appspot.com/o/images%2F1720504939907?alt=media&amp;token=68ccf88e-cb04-4e31-b6e0-ee1099884b68"
                                    alt="Image 2">
                                <img src="https://firebasestorage.googleapis.com/v0/b/dteam-29297.appspot.com/o/images%2F1720504942483?alt=media&amp;token=a38cd72a-b4e1-4022-8060-5943c646d721"
                                    alt="Image 3">
                                <img src="https://firebasestorage.googleapis.com/v0/b/dteam-29297.appspot.com/o/images%2F1720504944782?alt=media&amp;token=29458f7f-bfa1-4481-b126-ca336ffe2d46"
                                    alt="Image 4">
                            </div>
                            <p class="h4">Now Available</p>
                            <div class="d-flex mb-2">
                                <span class="badge bg-secondary me-2">Fantasy</span>
                                <span class="badge bg-secondary">RPG</span>
                            </div>
                            <p class="price">Rp 500.000</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Second Item -->
            <div class="carousel-item">
                <a href="/game/details/2">
                    <div class="carousel-card">
                        <div class="carousel-left">
                            <img src="https://image.api.playstation.com/vulcan/ap/rnd/202203/0903/BRSykxZAAT0OuPrG5nJz19fg.jpg"
                                alt="The Quarry">
                            <video
                                src="https://firebasestorage.googleapis.com/v0/b/dteam-29297.appspot.com/o/videos%2F1721708148267?alt=media&amp;token=a89cd21f-f0dd-4951-9266-2fee48825451"
                                autoplay loop></video>
                        </div>
                        <div class="carousel-right">
                            <p class="h2">The Quarry</p>
                            <div class="d-flex mb-2">
                                <img src="https://firebasestorage.googleapis.com/v0/b/dteam-29297.appspot.com/o/images%2F1721708159598?alt=media&amp;token=47d75966-2f45-4edf-bafa-b251cf3e1504"
                                    alt="Image 1">
                                <img src="https://firebasestorage.googleapis.com/v0/b/dteam-29297.appspot.com/o/images%2F1721708160835?alt=media&amp;token=f6e304f7-9436-49ef-882b-3d24e732c085"
                                    alt="Image 2">
                                <img src="https://firebasestorage.googleapis.com/v0/b/dteam-29297.appspot.com/o/images%2F1721708162055?alt=media&amp;token=8ba59596-2607-4256-ae8c-a02b5684b9da"
                                    alt="Image 3">
                                <img src="https://firebasestorage.googleapis.com/v0/b/dteam-29297.appspot.com/o/images%2F1721708163076?alt=media&amp;token=5eff0bc6-a2e9-4e11-bde7-c7c32744fc01"
                                    alt="Image 4">
                            </div>
                            <p class="h4">Now Available</p>
                            <div class="d-flex mb-2">
                                <span class="badge bg-secondary">RPG</span>
                            </div>
                            <p class="price"><span class="text-decoration-line-through">Rp 659.000</span> Rp 500.840
                            </p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Third Item -->
            <div class="carousel-item">
                <a href="/game/details/3">
                    <div class="carousel-card">
                        <div class="carousel-left">
                            <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/1086940/capsule_616x353.jpg?t=1721123311"
                                alt="Baldur's Gate 3">
                            <video
                                src="https://firebasestorage.googleapis.com/v0/b/dteam-29297.appspot.com/o/videos%2F1721708393646?alt=media&amp;token=b1a2bc92-7a6b-48a2-b086-e26711566a7d"
                                autoplay loop></video>
                        </div>
                        <div class="carousel-right">
                            <p class="h2">Baldur's Gate 3</p>
                            <div class="d-flex mb-2">
                                <img src="https://firebasestorage.googleapis.com/v0/b/dteam-29297.appspot.com/o/images%2F1721708401938?alt=media&amp;token=98ed0020-5269-4069-b9b1-712a10e5e39d"
                                    alt="Image 1">
                                <img src="https://firebasestorage.googleapis.com/v0/b/dteam-29297.appspot.com/o/images%2F1721708402684?alt=media&amp;token=735b0ef0-08fc-41de-91a6-4ab8271c1ef9"
                                    alt="Image 2">
                                <img src="https://firebasestorage.googleapis.com/v0/b/dteam-29297.appspot.com/o/images%2F1721708403454?alt=media&amp;token=53481bd9-96f9-48e4-bade-11e1e2816e08"
                                    alt="Image 3">
                                <img src="https://firebasestorage.googleapis.com/v0/b/dteam-29297.appspot.com/o/images%2F1721708405411?alt=media&amp;token=abfcf2f3-ffb6-4cc0-bba5-271241687669"
                                    alt="Image 4">
                            </div>
                            <p class="h4">Now Available</p>
                            <div class="d-flex mb-2">
                                <span class="badge bg-secondary me-2">Fantasy</span>
                                <span class="badge bg-secondary">RPG</span>
                            </div>
                            <p class="price">Rp 699.999</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Fourth Item -->
            <div class="carousel-item">
                <a href="/game/details/4">
                    <div class="carousel-card">
                        <div class="carousel-left">
                            <img src="https://firebasestorage.googleapis.com/v0/b/dteam-29297.appspot.com/o/images%2F1722441734546?alt=media&amp;token=87529b77-0a86-4a16-b96f-e64ec63d9a84"
                                alt="Batman™: Arkham Knight">
                            <video
                                src="https://firebasestorage.googleapis.com/v0/b/dteam-29297.appspot.com/o/videos%2F1721708447870?alt=media&amp;token=af36d11d-ff88-4e48-816b-f7d2c752d2c1"
                                autoplay loop></video>
                        </div>
                        <div class="carousel-right">
                            <p class="h2">Batman™: Arkham Knight</p>
                            <div class="d-flex mb-2">
                                <img src="https://firebasestorage.googleapis.com/v0/b/dteam-29297.appspot.com/o/images%2F1722441736232?alt=media&amp;token=96a5be59-f9b3-4d2a-9f8f-b3b5a59c6eae"
                                    alt="Image 1">
                                <img src="https://firebasestorage.googleapis.com/v0/b/dteam-29297.appspot.com/o/images%2F1722441737462?alt=media&amp;token=839ed458-09f4-465b-8d53-3e74f235c01b"
                                    alt="Image 2">
                                <img src="https://firebasestorage.googleapis.com/v0/b/dteam-29297.appspot.com/o/images%2F1722441738576?alt=media&amp;token=591993ee-6c00-452e-9a7e-54473d7edc5e"
                                    alt="Image 3">
                                <img src="https://firebasestorage.googleapis.com/v0/b/dteam-29297.appspot.com/o/images%2F1722441739547?alt=media&amp;token=337ef2bc-3647-4e9d-81f1-07f4dc60cb4f"
                                    alt="Image 4">
                            </div>
                            <p class="h4">Now Available</p>
                            <div class="d-flex mb-2">
                                <span class="badge bg-secondary me-2">Fantasy</span>
                                <span class="badge bg-secondary">RPG</span>
                            </div>
                            <p class="price">Free To Play</p>
                        </div>
                    </div>
                </a>
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#gameCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#gameCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
@endsection

@extends('layouts.main')
@section('container')
    <header>
        <nav class="navbar navbar-expand-lg navbar-light mt-3" id="nav">
            <div class="container">
                <a class="navbar-brand" href="/" id="brand">GudangCustom.id</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav text-center mx-auto" id="navbar">
                        <li class="nav-item me-2" id="nav-account">
                            <a class="nav-link active" href="#">My Account</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-4" id="nav-about" href="/about">About</a>
                        </li>
                        <li class="nav-item ms-2">
                            <a class="nav-link" id="nav-message" href="#">Message</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav text-center ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><img src="img/icons/Cart.png" alt="" id="nav-cart"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><img src="img/icons/Love.png" alt="" id="nav-love"></a>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
                                <a class="nav-link" id="dropdownSearch" data-bs-toggle="dropdown"
                                    aria-expanded="false"><img src="img/icons/Search.png" alt="" id="nav-search"></a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownSearch">
                                    <form class="d-flex">
                                        <input class="form-control" id="form-box" type="search"
                                            placeholder="Cari barang anda...">
                                        <button class="btn btn-light btn-outline-secondary" type="submit"><i
                                                class="fas fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section>
        <div class="container">
            <div class="row">
                <div class="col">

                </div>
                <div class="col" id="words">
                    <h4 id="word1">you can <u>CUSTOM</u></h4>
                    <h5 id="word2">everything you WANT</h5>
                    <a href="#"><button type="button" id="shop-btn"
                            class="text-decoration-none btn btn-primary btn-lg">SHOP</button></a>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container d-flex justify-content-end">
            <span class="me-3"><a href="#"><img src="img/icons/Instagram.png" alt="" id="ig-icon"></a></span>
            <span><a href="#"><img src="img/icons/Facebook.png" alt="" id="fb-icon"></a></span>
        </div>
    </footer>
@endsection

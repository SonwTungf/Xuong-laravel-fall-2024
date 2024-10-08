@extends('client.layouts.master')

@section('content')
    <header class="navigation fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-white">
                <a class="navbar-brand order-1" href="index.html">
                    <img class="img-fluid" width="100px" src="/client/images/logo.png"
                        alt="Reader | Hugo Personal Blog Template">
                </a>
                <div class="collapse navbar-collapse text-center order-lg-2 order-3" id="navigation">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                homepage <i class="ti-angle-down ml-1"></i>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="index-full.html">Homepage Full Width</a>

                                <a class="dropdown-item" href="index-full-left.html">Homepage Full With Left Sidebar</a>

                                <a class="dropdown-item" href="index-full-right.html">Homepage Full With Right
                                    Sidebar</a>

                                <a class="dropdown-item" href="index-list.html">Homepage List Style</a>

                                <a class="dropdown-item" href="index-list-left.html">Homepage List With Left Sidebar</a>

                                <a class="dropdown-item" href="index-list-right.html">Homepage List With Right
                                    Sidebar</a>

                                <a class="dropdown-item" href="index-grid.html">Homepage Grid Style</a>

                                <a class="dropdown-item" href="index-grid-left.html">Homepage Grid With Left Sidebar</a>

                                <a class="dropdown-item" href="index-grid-right.html">Homepage Grid With Right
                                    Sidebar</a>

                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                About <i class="ti-angle-down ml-1"></i>
                            </a>
                            <div class="dropdown-menu">

                                <a class="dropdown-item" href="about-me.html">About Me</a>

                                <a class="dropdown-item" href="about-us.html">About Us</a>

                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">Pages <i class="ti-angle-down ml-1"></i>
                            </a>
                            <div class="dropdown-menu">

                                <a class="dropdown-item" href="author.html">Author</a>

                                <a class="dropdown-item" href="author-single.html">Author Single</a>

                                <a class="dropdown-item" href="advertise.html">Advertise</a>

                                <a class="dropdown-item" href="post-details.html">Post Details</a>

                                <a class="dropdown-item" href="post-elements.html">Post Elements</a>

                                <a class="dropdown-item" href="tags.html">Tags</a>

                                <a class="dropdown-item" href="search-result.html">Search Result</a>

                                <a class="dropdown-item" href="search-not-found.html">Search Not Found</a>

                                <a class="dropdown-item" href="privacy-policy.html">Privacy Policy</a>

                                <a class="dropdown-item" href="terms-conditions.html">Terms Conditions</a>

                                <a class="dropdown-item" href="404.html">404 Page</a>

                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="shop.html">Shop</a>
                        </li>
                    </ul>
                </div>

                <div class="order-2 order-lg-3 d-flex align-items-center">
                    <select class="m-2 border-0 bg-transparent" id="select-language">
                        <option id="en" value="" selected>En</option>
                        <option id="fr" value="">Fr</option>
                    </select>

                    <!-- search -->
                    <form class="search-bar">
                        <input id="search-query" name="s" type="search" placeholder="Type &amp; Hit Enter...">
                    </form>

                    <button class="navbar-toggler border-0 order-1" type="button" data-toggle="collapse"
                        data-target="#navigation">
                        <i class="ti-menu"></i>
                    </button>
                </div>

            </nav>
        </div>
    </header>
    <!-- /navigation -->

    <div class="py-4"></div>
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class=" col-lg-9   mb-5 mb-lg-0">
                    <article>
                        <div class="post-slider mb-4">
                            <img src="/client/images/post/post-2.jpg" class="card-img" alt="post-thumb">
                        </div>

                        <h1 class="h2">Customer Engage Marketing Marketing Strategy to Economy Structure Everyone.
                        </h1>
                        <ul class="card-meta my-3 list-inline">
                            <li class="list-inline-item">
                                <a href="author-single.html" class="card-meta-author">
                                    <img src="/client/images/john-doe.jpg">
                                    <span>Charls Xaviar</span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <i class="ti-timer"></i>2 Min To Read
                            </li>
                            <li class="list-inline-item">
                                <i class="ti-calendar"></i>14 jan, 2020
                            </li>
                            <li class="list-inline-item">
                                <ul class="card-meta-tag list-inline">
                                    <li class="list-inline-item"><a href="tags.html">Color</a></li>
                                    <li class="list-inline-item"><a href="tags.html">Recipe</a></li>
                                    <li class="list-inline-item"><a href="tags.html">Fish</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="content">
                            <p>It’s no secret that the digital industry is booming. From exciting startups to global
                                brands, companies are reaching out to digital agencies, responding to the new
                                possibilities available. However, the industry is fast becoming overcrowded, heaving
                                with agencies offering similar services — on the surface, at least. Producing creative,
                                fresh projects is the key to standing out. Unique side projects are the best place to
                                innovate, but balancing commercially and creatively lucrative work is tricky. So, this
                                article looks at</p>
                            <p>It’s no secret that the digital industry is booming. From exciting startups to global
                                brands, companies
                                are reaching out to digital agencies, responding to the new possibilities available.
                                However, the industryis fast becoming overcrowded, heaving with agencies offering
                                similar services — on the surface, at least.Producing creative, fresh projects is the
                                key to standing out. Unique side projects are the best place toinnovate, but balancing
                                commercially and creatively lucrative work is tricky. So, this article looks at</p>
                            <p>It’s no secret that the digital industry is booming. From exciting startups to global
                                brands, companies
                                are reaching out to digital agencies, responding to the new possibilities available.
                                However, the industryis fast becoming overcrowded, heaving with agencies offering
                                similar services — on the surface, at least.
                                Producing creative, fresh projects is the key to standing out. Unique side projects are
                                the best place toinnovate, but balancing commercially and creatively lucrative work is
                                tricky. So, this article looks at</p>
                            <p>It’s no secret that the digital industry is booming. From exciting startups to global
                                brands, companies
                                are reaching out to digital agencies, responding to the new possibilities available.
                                However, the industryis fast becoming overcrowded, heaving with agencies offering
                                similar services — on the surface, at least.
                                Producing creative, fresh projects is the key to standing out. Unique side projects are
                                the best place toinnovate, but balancing commercially and creatively lucrative work is
                                tricky. So, this article looks at</p>
                        </div>
                    </article>

                </div>

                <div class="col-lg-9 col-md-12">
                    <div class="mb-5 border-top mt-4 pt-5">
                        <h3 class="mb-4">Comments</h3>

                        <div class="media d-block d-sm-flex mb-4 pb-4">
                            <a class="d-inline-block mr-2 mb-3 mb-md-0" href="#">
                                <img src="/client/images/post/user-01.jpg" class="mr-3 rounded-circle" alt="">
                            </a>
                            <div class="media-body">
                                <a href="#!" class="h4 d-inline-block mb-3">Alexender Grahambel</a>

                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                    sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                    Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in
                                    faucibus.</p>

                                <span class="text-black-800 mr-3 font-weight-600">April 18, 2020 at 6.25 pm</span>
                                <a class="text-primary font-weight-600" href="#!">Reply</a>
                            </div>
                        </div>
                        <div class="media d-block d-sm-flex">
                            <div class="d-inline-block mr-2 mb-3 mb-md-0" href="#">
                                <img class="mr-3" src="/client/images/post/arrow.png" alt="">
                                <a href="#!"><img src="/client/images/post/user-02.jpg" class="mr-3 rounded-circle"
                                        alt=""></a>
                            </div>
                            <div class="media-body">
                                <a href="#!" class="h4 d-inline-block mb-3">Nadia Sultana Tisa</a>

                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                    sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                    Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in
                                    faucibus.</p>

                                <span class="text-black-800 mr-3 font-weight-600">April 18, 2020 at 6.25 pm</span>
                                <a class="text-primary font-weight-600" href="#!">Reply</a>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h3 class="mb-4">Leave a Reply</h3>
                        <form method="POST">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <textarea class="form-control shadow-none" name="comment" rows="7" required></textarea>
                                </div>
                                <div class="form-group col-md-4">
                                    <input class="form-control shadow-none" type="text" placeholder="Name" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <input class="form-control shadow-none" type="email" placeholder="Email" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <input class="form-control shadow-none" type="url" placeholder="Website">
                                    <p class="font-weight-bold valid-feedback">OK! You can skip this field.</p>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Comment Now</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

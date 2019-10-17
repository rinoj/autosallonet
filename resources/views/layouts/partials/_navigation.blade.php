<header class="header-global">
    <nav id="navbar-main" class="navbar @if(Route::is('home')) @endif navbar-expand-lg navbar-dark bg-default">
        <div class="container">
            <a class="navbar-brand mr-lg-5" href="">
                <img src="http://www.winner.ro/imgswinner/title_logo.png">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbar_global">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="">
                                <img src="">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
                    <li class="nav-item">
                        <a href="" class="nav-link" role="button">
                            <i class="ni ni-ui-04 d-lg-none"></i>
                            <span class="nav-link-inner--text font-weight-bold">Sports</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link" role="button">
                            <i class="ni ni-ui-04 d-lg-none"></i>
                            <span class="nav-link-inner--text font-weight-bold">In-Play</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link" role="button">
                            <i class="ni ni-ui-04 d-lg-none"></i>
                            <span class="nav-link-inner--text font-weight-bold">Casino</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link" role="button">
                            <i class="ni ni-ui-04 d-lg-none"></i>
                            <span class="nav-link-inner--text font-weight-bold">Virtual Sports</span>
                        </a>
                    </li>

                   
                </ul>
                <ul class="navbar-nav align-items-lg-center ml-lg-auto">

                    @guest

                        <li class="nav-item d-lg-block ml-lg-4">

                        <form>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Password">
                                    </div>
                                </div>
                                <div class="col-md-3 p-0 m-0">
                                    <button type="button" class="btn btn-danger">Login</button>
                                </div>
                                    
                            </div>
                        </form>
                        </li>

                    @else


                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
                                <i class="ni ni-collection d-lg-none"></i>
                                <span class="nav-link-inner--text font-weight-bold">@lang('saas.header.links.account')</span>
                            </a>
                            <div class="dropdown-menu">

                                <a class="dropdown-item" href="">@lang('saas.header.links.account')</a>

                                <a class="dropdown-item" href=""
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    @lang('saas.header.links.logout')
                                </a>

                                <form id="logout-form" action="" method="POST" style="display: none;">
                                    @csrf
                                </form>

                            </div>
                        </li>

                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</header>
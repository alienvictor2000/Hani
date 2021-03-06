<header style="background: url({{ asset('theme_admin/image/home.jpg') }}) ; height: 600px">
    <div class="contenedor" id="contenedor">
        <nav style="position: fixed; width: 100%;" class="navbar">
            <div class="navbar-header">
                    <img style="border-radius: 50%" src="{{ asset('theme_admin/image/logo.jpg') }}" alt="logo" class="hani-img"/>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('article') }}">About</a> </li>
                <li><a href="{{ route('order') }}">Menu</a></li>
                <li><a href="{{ route('store') }}">Store</a></li>
                <li><a href="https://www.facebook.com/HaniKafeKitchen"><i class="fa fa-facebook" ></i></a></li>
                <li><a href="https://www.instagram.com/hanikafekitchen148/"><i class="fa fa-instagram"></i></a></li>
                <li>
                    <div class="dropdown">
                        <button class="dropbtn" style="font-size: 20px;">
                            <i class="fa fa-search"></i>
                        </button>
                            <div class="dropdown-content">
                                <form class="form-inline" action="{{ route('get.product.list') }}" method="get">
                                    <div class="form-group">
                                        <input name="searchInfo" type="text" class="form-control" maxlength="128" placeholder="Trà, Kafe , ...">
                                    </div>
                                        <button type="submit" class="btn-default"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                    </div>
                </li>
                    <div class="dropdown" style="margin-left: 35px; ">
                        <button class="dropbtn" style="font-size: 20px;">
                            <i class="far fa-user"></i>
                        </button>
                        @if(\Illuminate\Support\Facades\Auth::check())
                        <div class="dropdown-content">
                            <a class="dropdown-item" href="{{ route('userinfo') }}"><i class="fas fa-user"></i><span> Thông tin</span></a>
                            <br>
                            <a class="dropdown-item" href="{{ route('order.cart') }}"><i class="fas fa-shopping-cart"></i><span> Giỏ hàng</span></a>
                            <br>
                            <a class="dropdown-item" href="{{ route('get.logout.user') }}"><i class="fas fa-sign-out-alt"></i><span> Thoát</span></a>
                        </div>
                        @else
                            <div class="dropdown-content">
                                <a class="dropdown-item" href="{{ route('get.register') }}">Đăng ký</a>
                                <br>
                                <a class="dropdown-item" href="{{ route('get.login') }}">Đăng nhập</a>
                            </div>
                        @endif
                    </div>
            </ul>
        </nav>
    </div>
    <div class="textos">
        <h1 style="padding-left: 50px" class="nombre">Hani <span> kafé & kitchen </span></h1>
        <h3 style="padding-left: 100px">A bad day with coffee is better than a good day without it.</h3>
    </div>
    <style>
        .dropbtn {
            background-color: transparent;
            color: white;
            font-size: 16px;
            border: none;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 2;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {background-color: #ddd;}

        .dropdown:hover .dropdown-content {display: block;}
    </style>
</header>

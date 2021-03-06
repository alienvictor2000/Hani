<!DOCTYPE html>
<html lang="en">
<head>
    <title>HANI</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('theme_admin/css/Hani11.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel ="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lobster&family=Mukta&display=swap');
        @import url('https://fonts.googleapis.com/css?family=Open+Sans');
        /* product*/
        .h1 {
            color: white;
            padding-left: 230px;
            padding-top: 20px;
            position: sticky;
        }

        .h2 {
            color: white;
            padding-left: 40px;
            padding-top: 20px;
        }
        @import url('https://fonts.googleapis.com/css2?family=Mukta&display=swap');
        .product h3 {
            font-size: 14px;
            color:white;
            font-family: 'Mukta', sans-serif;
        }

        .products-center1 {
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(110px, 2fr));
            grid-column-gap: 1.5rem;
            grid-row-gap: 2rem;
            padding-top: 10px;
        }

        .search {
            width: 30%;
            position: relative;
            display: flex;
        }

        .searchTerm {
            width: 90%;
            border: 3px solid #00B4CC;
            border-right: none;
            padding: 15px;
            height: 20px;
            border-radius: 5px 0 0 5px;
            outline: none;
            color: white;
        }

        .product-img1 {
            display: inline-block;
            width: 100%;
            min-height: 12rem;
            transition: var(--mainTransition);
            border-radius: 5px;
        }

        .col-sm-4, .col-sm-2, .col-sm-5 {
            width: 70%;
            border-radius: 15px;
            margin-left: 35px;
            max-width: 600px;
        }

        .col-sm-2 a{

        }

        .img-container:hover .bag-btn1 {
            transform: translateX(-50%);
        }
        /*btn thanh toán */
        @import url('https://fonts.googleapis.com/css2?family=Fredoka+One&family=Nerko+One&family=Ubuntu:wght@300&display=swap');
        @import url('https://fonts.googleapis.com/css?family=Raleway:400');
        .btn-tt {
            margin-left: 20px;
            width: 90%;
            text-align: center;
            font-family: 'Raleway', Arial, sans-serif;
            border: none;
            background-color: white;
            color: green;
            cursor: pointer;
            display: inline-block;
            text-transform: uppercase;
            line-height: 46px;
            font-weight: 400;
            font-size: 1em;
            outline: none;
            position: relative;
            overflow: hidden;
            border-radius: 23px;
            letter-spacing: 3px;
            -webkit-transform: translateZ(0);
            -webkit-transition: all 0.35s ease;
            transition: all 0.35s ease;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }
        /*Search bar */
        .searchTerm:focus {
            color: white;
        }

        .searchButton {
            width: 40px;
            height: 36px;
            border: 1px solid #00B4CC;
            background: #00B4CC;
            text-align: center;
            color: white;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
            font-size: 20px;
        }
        /*table*/
        table {
            border-collapse: separate;
            background: saddlebrown;
            border: 1px solid rgb(248, 247, 247);
            font-family: 'Mukta', sans-serif;
        }

        th, td {
            border: 1px solid rgb(252, 243, 243);
            padding: 20px;
            margin: 50px;
            width: 150px;
        }
        .btn-minus {
            cursor: pointer;
            font-size: 7px;
            display: flex;
            align-items: center;
            padding: 5px;
            padding-left: 10px;
            padding-right: 10px;
            border: 1px solid gray;
            border-radius: 2px;
            border-right: 0;
        }

        .btn-plus {
            cursor: pointer;
            font-size: 7px;
            display: flex;
            align-items: center;
            padding: 5px;
            padding-left: 10px;
            padding-right: 10px;
            border: 1px solid gray;
            border-radius: 2px;
            border-left: 0;
        }

        .form-check-label {
            padding-left: 0.25rem;
        }

        .collapse {
            margin: 0px 20px;
        }

        div.section > div {
            width: 100%;
            display: inline-flex;
        }

        div.section > div > input {
            margin: 0;
            padding-left: 5px;
            font-size: 10px;
            padding-right: 5px;
            max-width: 18%;
            text-align: center;
        }

        @media (max-width: 600px) {
            .container {
                margin-top: 0px !important;
            }

            .container > .row {
                padding: 0 !important;
            }

            .container > .row > .col-xs-12.col-sm-5 {
                padding-right: 0;
            }

            .container > .row > .col-xs-12.col-sm-9 > div > p {
                padding-left: 0 !important;
                padding-right: 0 !important;
            }

            .container > .row > .col-xs-12.col-sm-9 > div > ul {
                padding-left: 10px !important;
            }

            .section {
                width: 104%;
            }
        }
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

        .bs-tag {
            position: absolute;
            top: 8px;
            right: 0px;

            color: #000;
            font-family: 'montserrat';
            font-size: 1.5vw;
            letter-spacing: 1vw;
            max-width: 700px;
            background: rgba(255, 253, 160, 1);
            background: -webkit-linear-gradient( left, #00ffff 0%, #97fba0 25%, #97b1fb 50%, #00ffff 100%) repeat;
            -webkit-background-clip: text;
            -ms-background-clip: text;
            -webkit-text-fill-color: transparent;
            -ms-text-fill-color: transparent;
            -moz-text-fill-color: transparent;
            text-fill-color: transparent;
            -webkit-animation-name: masked-animation;
            -webkit-animation-duration: 50s;
            -webkit-animation-iteration-count: infinite;
            -webkit-animation-timing-function: linear;
        }

        .new-tag {
            position: absolute;
            bottom: 0px;
            left: 10px;

            color: #000;
            font-family: 'montserrat';
            font-size: 2vw;
        //letter-spacing: 1vw;
            max-width: 700px;
            background: rgba(255, 253, 160, 1);
            background: -webkit-linear-gradient( left, #00ffff 0%, #97fba0 25%, #97b1fb 50%, #00ffff 100%) repeat;
            -webkit-background-clip: text;
            -ms-background-clip: text;
            -webkit-text-fill-color: transparent;
            -ms-text-fill-color: transparent;
            -moz-text-fill-color: transparent;
            text-fill-color: transparent;
            -webkit-animation-name: masked-animation;
            -webkit-animation-duration: 50s;
            -webkit-animation-iteration-count: infinite;
            -webkit-animation-timing-function: linear;
        }

        @-webkit-keyframes masked-animation {
            0% {
                background-position: 0 0;
            }
            100% {
                background-position: -8000px -3000px;
            }
        }
    </style>
    <script>
        $(document).ready(function(){
            //-- Click on detail
            $("ul.menu-items > li").on("click",function(){
                $("ul.menu-items > li").removeClass("active");
                $(this).addClass("active");
            })

            $(".attr,.attr2").on("click",function(){
                var clase = $(this).attr("class");

                $("." + clase).removeClass("active");
                $(this).addClass("active");
            })

            //-- Click on tăng giảm
            $(".btn-minus").on("click",function(){
                var now = $(this).parent().children("input[type=text]").val();
                if ($.isNumeric(now)){
                    if (parseInt(now)-1 > 0){
                        now--;
                    }
                    $(this).parent().children("input[type=text]").val(now);
                }else{
                    $(this).parent().children("input[type=text]").val("1");
                }

                var sl = $(this).parent().children("input[type=text]").val();
                var value = $(this).parents(".col-lg-7").children(".h4-responsive").text();
                var res = value.substring(1,8)
                var price = $(this).parent().children("input[type=hidden]").val()
                ttprice = parseInt(sl) * parseInt(price)
                addprice = parseInt(res) - parseInt(price);

                if(parseInt(addprice) == parseInt(ttprice)){
                    var replace = value.replace(res,addprice);
                    $(this).parents(".col-lg-7").children(".h4-responsive").text(replace);
                }
            })
            $(".btn-plus").on("click",function(){
                var now = $(this).parent().children("input[type=text]").val();
                $(this).parent().children("input[type=text]").val(parseInt(now)+1);
                console.log($(this).parent().children("input[type=text]").val());

                var sl = $(this).parent().children("input[type=text]").val();
                if(sl >= 2){
                    var price = $(this).parent().children("input[type=hidden]").val();
                    var value = $(this).parents(".col-lg-7").children(".h4-responsive").text();
                    var res = value.substring(1,8)
                    addprice = parseInt(res) + parseInt(price);
                    var replace = value.replace(res,addprice);
                    $(this).parents(".col-lg-7").children(".h4-responsive").text(replace);
                }
            })

            $("input[type=checkbox]").click( function(){
                var productprice = $(this).parents(".col-lg-7").find("input[type=hidden]").val();

                var sl = $(this).parents(".col-lg-7").find("input[type=text]").val()
                var value = $(this).parents(".col-lg-7").children(".h4-responsive").text();
                var res = value.substring(1,7)
                var price = $(this).val();

                console.log(productprice+" "+sl+" "+value+" "+res+" "+price)
                if( $(this).is(':checked') ){
                    totalprice = parseInt(price) + parseInt(productprice)
                    addprice = parseInt(res) + (parseInt(sl)*parseInt(price));
                    var replace = value.replace(res,addprice);
                    console.log(totalprice+" "+addprice+" "+replace)
                    $(this).parents(".col-lg-7").children(".h4-responsive").text(replace);
                    $(this).parents(".col-lg-7").find("input[type=hidden]").val(totalprice);
                }

                if( $(this).is(':checked') == false){
                    totalprice = parseInt(productprice) - parseInt(price)
                    addprice = parseInt(res) - (parseInt(sl)*parseInt(price));
                    var replace = value.replace(res,addprice);
                    $(this).parents(".col-lg-7").children(".h4-responsive").text(replace);
                    $(this).parents(".col-lg-7").find("input[type=hidden]").val(totalprice);
                }
            });
        })
        function myAlert() {
            alertify.error('Chưa có sản phẩm nào trong giỏ hàng');
        }
    </script>
</head>
<body>
<div class="contenedor">
    <nav class="navbar" style="background-color: saddlebrown;">
        <div class="navbar-center">
            <a href="{{ route('home') }}">
                <img src="{{ asset('theme_admin/image/logo.jpg') }}" alt="logo" class="hani-img" />
            </a>
        </div>
        <div class="dropdown" style="margin-left: 35px; ">
            <button class="dropbtn" style="font-size: 20px;">
                <i class="far fa-user" style="margin-right: 150px;"></i>
            </button>
            @if(\Illuminate\Support\Facades\Auth::check())
                <div class="dropdown-content">
                    <a class="dropdown-item" href="{{ route('userinfo') }}"><i class="fas fa-user"></i><span> Thông tin</span></a>
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
    </nav>
</div>
<div class="container-fluid" style="margin-top: 30px;">

    <div class="row">
        <div class="col-sm-2" style="background: saddlebrown; padding: 10px 10px 0px 10px; border: 4px solid black; height: 300px;">
            @if( isset($odd) && isset($even))
                <h1 style="color:white; font-family: 'Fredoka One', cursive;">Drinks </h1>
                @for($i=0; $i<count($odd); $i++)
                    @foreach($odd[$i] as $value)
                        <a href="#{{ $value->c_name }}"  style="color: white; font-size:20px; font-family: 'Fredoka One', cursive;margin:20px">{{ $value->c_name }} <span class="float-right badge badge-light round">{{ $countProductOdd[$i] }}</span></a><br>
                    @endforeach
                @endfor
                <h1 style="color:white; font-family: 'Fredoka One', cursive;">Foods </h1>
                @for($i=0; $i<count($even); $i++)
                    @foreach($even[$i] as $value)
                        <a href="#{{ $value->c_name }}"style="color: white; font-size:20px; font-family: 'Fredoka One', cursive;margin:20px">{{ $value->c_name }} <span class="float-right badge badge-light round">{{ $countProductEven[$i] }}</span></a><br>
                    @endforeach
                @endfor
            @endif
        </div>
        <div class="col-sm-4" style="background: saddlebrown; border: 4px solid black;">
            <h1 class="h1" style="padding-left: 150px;  font-family: 'Fredoka One', cursive;">Menu</h1>
            <hr>

            @for($i=0; $i<$countCate; $i++)
                @if( isset($categories))
                    <h2 id="{{ $categories[$i]->c_name }}" style="margin-top: 50px; border-left: 4px solid orangered; padding-left: 20px; color:white">{{ $categories[$i]->c_name }}</h2>
                @endif

                <div class="products-center1">
                    @foreach($productsND[$i] as $key => $value)
                        <article class="product" style="width: 128px;">
                            <div class="img-container" style="width: 100%;">
                                <img src="{{ pare_url_file($value->pro_avatar) }}" alt="Kafe sữa" class="product-img1">
                                @if($value->pro_hot == 1)
                                    <div class="bs-tag"><i class="fas fa-crown"></i></div>
                                @endif
                                @if($value->pro_active == 1)
                                    <div class="new-tag"><b>New</b></div>
                                @endif
                            </div>
                            <h3 id="product-name"><b>{{ $value->pro_name }}</b></h3>
                            <h4>
                                <span id="product-price">{{ number_format($value->pro_price) }}đ</span>
                                <button type="button" style="border: none; float:right; background-color: unset;" data-toggle="modal" data-target="#{{$value->pro_slug}}">
                                    <i class='fas fa-plus-circle' style="font-size: 16px; color: white;"></i>
                                </button>
                            </h4>

                            <div class="modal fade" id="{{ $value->pro_slug }}" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel"
                                 aria-hidden="true">

                                <div class="modal-dialog modal-lg" role="document">
                                    <input type="hidden" value="{{ $value->pro_price }}">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-5">
                                                    <!--Carousel Wrapper-->
                                                    <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails"
                                                         data-ride="carousel">
                                                        <!--Slides-->
                                                        <div class="carousel-inner" role="listbox">
                                                            <div class="carousel-item active">
                                                                <img class="d-block w-100" src="{{ pare_url_file($value->pro_avatar) }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/.Carousel Wrapper-->
                                                </div>
                                                <div class="col-lg-7">
                                                    <h2 class="h2-responsive product-name">
                                                        <strong>{{ $value->pro_name }}</strong>
                                                    </h2>
                                                    <h4 class="h4-responsive"><span>+</span>{{ $value->pro_price }}</h4>

                                                    <!--------------------- SO LUONG -------------------------------------->
                                                    <div class="section" style="padding-bottom:20px;">
                                                        <h2 class="title-attr"><small>Số lượng</small></h2>
                                                        <div class="quantity-container">
                                                            <div class="btn-minus"><span class="glyphicon glyphicon-minus"></span></div>
                                                            <input max="20" min="1" type="text" value="1" class="form-control" name="sl"/>
                                                            <input type="hidden" class="price" value="{{ $value->pro_price }}">
                                                            <div class="btn-plus"><span class="glyphicon glyphicon-plus"></span></div>
                                                        </div>
                                                    </div>
                                                    <p class="note" style="color: red"><i>Lưu ý: Nếu không chọn Hani sẽ lấy mặc định cho khách: Lạnh, M, 100% đường, 100% đá</i></p>
                                                    <!--Accordion wrapper-->
                                                    <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

                                                        <!--------------------CHON LOAI------------------------------------>
                                                        <div class="card">

                                                            <!-- Card header -->
                                                            <div class="card-header" role="tab" id="headingOne1">
                                                                <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                                                                   aria-controls="collapseOne1">
                                                                    <h5 class="mb-0">
                                                                        Chọn loại <i class="fas fa-angle-down rotate-icon"></i>
                                                                    </h5>
                                                                </a>
                                                            </div>

                                                            <!-- Card body -->
                                                            <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
                                                                 data-parent="#accordionEx">
                                                                <span class="validateRadio" style="color: red; font-size: 10px;"><i>Vui lòng chọn</i></span><br>
                                                                <div class="form-check form-check-inline" style=" margin-right: 7rem;">
                                                                    <input class="form-check-input" type="radio" name="type" id="inlineRadio1" value="option1" required>
                                                                    <label class="form-check-label" for="inlineRadio1">Nóng</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="type" id="inlineRadio2" value="option2">
                                                                    <label class="form-check-label" for="inlineRadio2">Lạnh</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!--------------------CHON SIZE-------------->
                                                        <div class="card">

                                                            <!-- Card header -->
                                                            <div class="card-header" role="tab" id="headingTwo2">
                                                                <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2" aria-expanded="true"
                                                                   aria-controls="collapseTwo2">
                                                                    <h5 class="mb-0">
                                                                        Chọn size <i class="fas fa-angle-down rotate-icon"></i>
                                                                    </h5>
                                                                </a>
                                                            </div>

                                                            <!-- Card body -->
                                                            <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
                                                                 data-parent="#accordionEx">
                                                                <span class="validateRadio" style="color: red; font-size: 10px;"><i>Vui lòng chọn</i></span><br>
                                                                <div class="form-check form-check-inline" style=" margin-right: 7rem;">
                                                                    <input class="form-check-input" type="radio" name="size" id="inlineRadio1" value="0" required>
                                                                    <label class="form-check-label" for="inlineRadio1">M</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="size" id="sizeL" value="5000">
                                                                    <label class="form-check-label" for="inlineRadio2">L</label>
{{--                                                                    <span>&nbsp;(+5000đ)</span>--}}
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!--------------------CHON LUONG DUONG-------------->
                                                        <div class="card">

                                                            <!-- Card header -->
                                                            <div class="card-header" role="tab" id="headingThree3">
                                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3"
                                                                   aria-expanded="false" aria-controls="collapseThree3">
                                                                    <h5 class="mb-0">
                                                                        Chọn lượng đường<i class="fas fa-angle-down rotate-icon"></i>
                                                                    </h5>
                                                                </a>
                                                            </div>

                                                            <!-- Card body -->
                                                            <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
                                                                 data-parent="#accordionEx">
                                                                <span class="validateRadio" style="color: red; font-size: 10px;"><i>Vui lòng chọn</i></span><br>
                                                                <div class="form-check form-check-inline" style=" margin-right: 7rem;">
                                                                    <input class="form-check-input" type="radio" name="sugar" id="inlineRadio1" value="option1" required>
                                                                    <label class="form-check-label" for="inlineRadio1">100%</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="sugar" id="inlineRadio2" value="option2">
                                                                    <label class="form-check-label" for="inlineRadio2">70%</label>
                                                                </div>
                                                                <br>
                                                                <div class="form-check form-check-inline" style=" margin-right: 7.5rem;">
                                                                    <input class="form-check-input" type="radio" name="sugar" id="inlineRadio2" value="option2">
                                                                    <label class="form-check-label" for="inlineRadio2">50%</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="sugar" id="inlineRadio2" value="option2">
                                                                    <label class="form-check-label" for="inlineRadio2">30%</label>
                                                                </div>
                                                                <br>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="sugar" id="inlineRadio2" value="option2">
                                                                    <label class="form-check-label" for="inlineRadio2">Không</label>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <!--------------------CHON LUONG DA--------------------------------->
                                                        <div class="card">

                                                            <!-- Card header -->
                                                            <div class="card-header" role="tab" id="headingFour4">
                                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseFour4"
                                                                   aria-expanded="false" aria-controls="collapseFour4">
                                                                    <h5 class="mb-0">
                                                                        Chọn lượng đá <i class="fas fa-angle-down rotate-icon"></i>
                                                                    </h5>
                                                                </a>
                                                            </div>

                                                            <!-- Card body -->
                                                            <div id="collapseFour4" class="collapse" role="tabpanel" aria-labelledby="headingFour4"
                                                                 data-parent="#accordionEx">
                                                                <span class="validateRadio" style="color: red; font-size: 10px;"><i>Vui lòng chọn</i></span><br>
                                                                <div class="form-check form-check-inline" style=" margin-right: 7rem;">
                                                                    <input class="form-check-input" type="radio" name="ice" id="inlineRadio1" value="option1" required>
                                                                    <label class="form-check-label" for="inlineRadio1">100%</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="ice" id="inlineRadio2" value="option2">
                                                                    <label class="form-check-label" for="inlineRadio2">70%</label>
                                                                </div>
                                                                <br>
                                                                <div class="form-check form-check-inline" style=" margin-right: 7.5rem;">
                                                                    <input class="form-check-input" type="radio" name="ice" id="inlineRadio2" value="option2">
                                                                    <label class="form-check-label" for="inlineRadio2">50%</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="ice" id="inlineRadio2" value="option2">
                                                                    <label class="form-check-label" for="inlineRadio2">30%</label>
                                                                </div>
                                                                <br>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="ice" id="inlineRadio2" value="option2">
                                                                    <label class="form-check-label" for="inlineRadio2">Không</label>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <!--------------------CHON TOPPING-------------------------------------->
                                                        <div class="card">

                                                            <!-- Card header -->
                                                            <div class="card-header" role="tab" id="headingFive5">
                                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseFive5"
                                                                   aria-expanded="false" aria-controls="collapseFive5">
                                                                    <h5 class="mb-0">
                                                                        Chọn topping<i class="fas fa-angle-down rotate-icon"></i>
                                                                    </h5>
                                                                </a>
                                                            </div>

                                                            <!-- Card body -->
                                                            <div id="collapseFive5" class="collapse" role="tabpanel" aria-labelledby="headingFive5"
                                                                 data-parent="#accordionEx">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="defaultCheck1" value="5000">
                                                                    <label class="form-check-label" for="defaultCheck1" name="topping">Trân châu đen</label>
                                                                    <span>(+5000đ)</span>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="defaultCheck2" value="6000">
                                                                    <label class="form-check-label" for="defaultCheck2" name="topping">Trân châu trắng</label>
                                                                    <span>(+6000đ)</span>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="defaultCheck3" value="5000">
                                                                    <label class="form-check-label" for="defaultCheck3" name="topping">Thạch dừa đào</label>
                                                                    <span>(+5000đ)</span>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="defaultCheck4" value="6000">
                                                                    <label class="form-check-label" for="defaultCheck4" name="topping">Thạch dừa chanh dây</label>
                                                                    <span>(+6000đ)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Accordion wrapper -->
                                                         <!-- Add to Cart -->
                                                        <div class="card-body">
                                                            <div class="text-center">
                                                                <a style="color: white" class="btn btn-secondary" data-dismiss="modal">Thoát</a>
                                                                <a style="color: white" alt="{{ $value->id }}" class="btn btn-primary" name="buy-btn">Chọn mua<i class="fas fa-cart-plus ml-2" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                        <!-- /.Add to Cart -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            @endfor
        </div>
        {{--            SHOPPING CARTTTTTTTTTTTTTTTT--}}
        <div class="col-sm-5"  style="background: saddlebrown; border: 4px solid black;"  id="shopping-cart">
            <p class="h2"  style ="font-family: 'Fredoka One', cursive;">Shopping Cart <span style="font-size: 17px; margin-left: 50px;  font-family: 'Fredoka One', cursive;"><a class="del-all" style="cursor: pointer; color: white;">Xóa tất cả</a></span></p>
            <hr>
            @if( \Illuminate\Support\Facades\Session::has("cart") != null)
                <table id="gh"  style="font-size: 13px;color:white;" border="1">
                    <tr>

                        <th>Sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                        <th>Thao tác</th>
                    </tr>
                    <tbody>
                    @foreach(\Illuminate\Support\Facades\Session::get('cart')->products as $item)
                        <tr>
                            <td>
                                <b>{{ $item['productInfo']->pro_name }}</b>
                                <ul>
                                    @if(isset($item['detail'][1]))
                                        <li>{{ $item['detail'][1]}}</li>
                                    @endif
                                    @if(isset($item['detail'][0]))
                                        <li>{{ $item['detail'][0]}}</li>
                                    @endif
                                    @if(isset($item['detail'][2]))
                                        <li>{{ $item['detail'][2] }}</li>
                                    @endif
                                    @if( isset($item['detail'][3]))
                                        <li>{{ $item['detail'][3] }}</li>
                                    @endif
                                </ul>
                                @if(isset($item['topping']))
                                    @foreach($item['topping'] as $topping)
                                        <ul>
                                            <li>{{ $topping }}</li>
                                        </ul>
                                    @endforeach
                                @endif
                            </td>
                            <td class="plus-minus" style="text-align: center">
                                <button  class="plus" data-id="{{ $item['productInfo']->id }}" data-stt="{{ $item['i'] }}" style="border: none; color: white; float: left; font-size: 16px; background-color: unset"><i class="fas fa-plus-circle"></i></button>
                                {{ $item['quantity'] }}
                                <button  class="minus" data-id="{{ $item['productInfo']->id }}" data-stt="{{ $item['i'] }}" style="border: none; color: white; float: right; font-size: 16px; background-color: unset"><i class="fas fa-minus-circle"></i></button>
                            </td>
                            <td>
                                {{ number_format($item['productInfo']->pro_price*$item['quantity']) }}đ
                            </td>
                            <td class="thaotac">
                                <button class="del" data-id="{{ $item['productInfo']->id }}" data-stt="{{ $item['i'] }}" style="border: none; color: white; font-size: 20px; background-color: unset;"><i class="fas fa-times-circle"></i></button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tr>
                        <td>Tổng số lượng</td>
                        <td colspan="3" id="tt" style="text-align: right;">{{ \Illuminate\Support\Facades\Session::get('cart') ->totalQuantity }}</td>
                    </tr>
                    <tr>
                        <td>Tổng tiền</td>
                        <td colspan="3" id="tt" style="text-align: right;">{{ number_format(\Illuminate\Support\Facades\Session::get('cart') ->totalPrice) }}đ</td>
                    </tr>
                </table>
                <a class="btn-tt" href="{{ route('payment') }}" style="margin:20px;">Thanh Toán</a>

            @elseif(\Illuminate\Support\Facades\Session::has("cart") == null)
                <a class="btn-tt" onclick="myAlert()">Thanh Toán</a>
            @endif
        </div>
    </div>
</div>

<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
<script>
    $(document).ready(function(){
        topping = []
        detail = []
        typee = null;
        size = null;
        sugar = null;
        ice = null;

        $("input[type=checkbox]").click(function () {
            var temp = {}
            if ($(this).is(':checked')) {
                temp.name = $(this).parent().children("label").text();
                temp.price = $(this).val();
                topping.push(temp);
            }
            else{
                for(i=0;i<topping.length;i++){
                    if(topping[i].name === $(this).parent().children("label").text())
                        topping.pop(topping[i]);
                }
            }
        });
        $("input[type=radio]").click(function () {
            if ($(this).is(':checked') && $(this).parent().children("input").attr("name")==='type' ){
                $(this).parents(".collapse").children("span").text("Bạn đã chọn loại").css("color","green");
                typee = $(this).parent().children("label").text();
                detail.push(typee);
            }

            if ($(this).is(':checked') && $(this).parent().children("input").attr("name")==='size') {
                $(this).parents(".collapse").children("span").text("Bạn đã chọn size").css("color","green");
                size = $(this).parent().children("label").text();
                detail.push(size);
            }

            if ($(this).is(':checked') && $(this).parent().children("input").attr("name")==='sugar' ) {
                $(this).parents(".collapse").children("span").text("Bạn đã chọn % đường").css("color","green");
                sugar = $(this).parent().children("label").text();
                detail.push(sugar);

            }

            if ($(this).is(':checked') && $(this).parent().children("input").attr("name")==='ice' ) {
                $(this).parents(".collapse").children("span").text("Bạn đã chọn % đá").css("color","green");
                ice = $(this).parent().children("label").text();
                detail.push(ice);
            }

        });

        $(".modal").on("hidden.bs.modal", function() {
            var firstPrice = $(this).children(".modal-dialog").children("input").val();
            $(".form-check-input").parents(".collapse").children("span").text("Vui lòng chọn").css("color","red");
            $(".form-check-input").prop("checked",false);
            $("input[type=text]").val('1');
            topping = [];
            detail = [];
            $(this).find(".h4-responsive").text('+'+firstPrice);
        });

        @if( isset($categories))
        @foreach($productsND[0] as $key => $value)
            $("#{{ $value->pro_slug }}").find(".card").remove();
            $("#{{ $value->pro_slug }}").find(".note").remove();
        @endforeach
        @foreach($productsND[3] as $key => $value)
        $("#{{ $value->pro_slug }}").find(".card").remove();
        $("#{{ $value->pro_slug }}").find(".note").remove();
    @endforeach
        @endif
    });

    $("a[name='buy-btn']").click(function(){
        var id = $(this).attr('alt');
        var quantity = $(this).parents('.col-lg-7').children('.section').children('.quantity-container').children("input[type=text]").val();
        var i = Math.floor(Math.random() * 10000) + 1;

        console.log(typee+" "+size+" "+sugar+" "+ice);
        console.log(id)
        console.log(quantity)
        console.log(topping)

        if(detail.length === 0){
            detail = [" "," "," "," "]
        }

        console.log(detail);

        if(!(topping.length === 0)){
            $.ajax({
                url: 'Add-Cart-With-Topping',
                type: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    id: id,
                    quantity: quantity,
                    topping: topping,
                    detail: detail,
                    i: i
                },
            }).done(function(response){
                RenderCart(response);
                $(".thaotac button").data("stt",i);
                console.log($(".thaotac button").data("stt"));
                topping = [];
                detail = [];
                $(".modal").modal('hide');
                alertify.success('Đã thêm sản phẩm vào giỏ hàng');
            });
        }
        else{
            $.ajax({
                url: 'Add-Cart',
                type: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    id: id,
                    quantity: quantity,
                    detail: detail,
                    i: i
                },
            }).done(function(response){
                RenderCart(response);
                $(".thaotac button").data("stt",i);
                console.log($(".thaotac button").data("stt"));
                console.log(detail);
                detail = [];
                $(".modal").modal('hide');
                alertify.success('Đã thêm sản phẩm vào giỏ hàng');
            });
        }
    });

    $("#shopping-cart").on("click",".thaotac .del",function(){
        console.log($(this).data("stt"));
        $.ajax({
            url: 'Delete-Item-Cart/'+$(this).data("stt"),
            type: 'GET',
        }).done(function(response){
            RenderCart(response);
            alertify.success('Đã xóa sản phẩm khỏi giỏ hàng');
        });
    });

    $("#shopping-cart").on("click",".plus-minus .plus",function(){
        console.log($(this).data("stt"));
        $.ajax({
            url: 'Increase-Item-Cart/'+$(this).data("stt"),
            type: 'GET',
        }).done(function(response){
            RenderCart(response);
        });
    });

    $("#shopping-cart").on("click",".plus-minus .minus",function(){
        console.log($(this).data("stt"));
        $.ajax({
            url: 'Decrease-Item-Cart/'+$(this).data("stt"),
            type: 'GET',
        }).done(function(response){
            RenderCart(response);
        });
    });

    $("#shopping-cart").on("click",".del-all",function(){
        console.log('success');
        $.ajax({
            url: 'Delete-All-Item-Cart',
            type: 'GET',
        }).done(function(response){
            RenderCart(response);
            alertify.success('Đã xóa tất cả sản phẩm');
        });
    });
    function RenderCart(response){
        $('#shopping-cart').empty();
        $('#shopping-cart').html(response);
    }
    // $(document).ready(function(){
    //     $("a[name='buy-btn']").click(function(){
    //         var productname = $(this).parents(".product").children('#product-name').text();
    //         var price = $(this).parents(".product").children('h4').children('#product-price').text();
    //         var quantity = $('.product-quantity').val();
    //         var tt = $("#tt").text()
    //
    //         var tr = "<tr><td>"+productname+"</td><td>"+quantity+"</td><td>"+price+"</td></tr>"
    //         $("#gh tr:last").before(tr)
    //         $("#tt").text(parseInt(tt)+parseInt(price)+',000đ')
    //     });
    // });
</script>
</body>
</html>

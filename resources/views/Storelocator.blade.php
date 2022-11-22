<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Store Locator</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <link rel="stylesheet" href="{{url('css/style.css')}}" />
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- jquery cdn link --}}
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <style>
    @media (min-width: 576px) {
        .store-modal .modal-dialog {
            max-width: 1300px !important;
            margin: 4.75rem auto !important;
            /* margin-right: 20px !important; */
        }
    }

    .get_directions {
        padding: 6px 4%;
        background: transparent;
        color: black;
        border: 2px solid black;
        margin: unset;
        font-size: unset;
    }

    .get_directions:hover {
        background: black;
        color: white;
        transition: .5s;
    }

    .store_details {
        color: black;
    }

    .store_details:hover {
        color: black;
    }

    .four_img img {
        width: 50%;
        float: left;
        padding: 3%;
    }

    .store-modal .modal-content {
        position: relative;
        display: flex;
        flex-direction: column;
        width: 100%;
        pointer-events: auto;
        background-color: Transparent !important;
        background-clip: padding-box;
        border: 0 !important;
        border-radius: none !important;
        outline: 0;
    }

    .store-modal .modal {
        top: -40px !important;
    }

    .store-modal {
        background: #00000060 !important;
    }

    .prev {
        position: absolute;
        left: 0;
        top: 45%
    }

    .next {
        position: absolute;
        right: 0;
        top: 45%
    }

    /* Header */

    .logo-index-page-2 li a {
        color: #fff;
        list-style: none;
        padding: 20px;
    }

    .logo-index-page-2 a {
        /* color: #fff; */
        text-decoration: none;
    }

    .header-top-nav-index-2 .logo-index-page-2 .current-tab a {

        color: #aa8453 !important;
        font-weight: bold;

    }

    .Store-index img {
        padding: 5px;
    }

    .hamburger div {
        width: 18px;
        height: 3px;
        margin-bottom: 2px;
        background-color: #fff;
    }

    @media screen and (max-width: 767px) {
        .header-top-nav-index {
            flex-direction: column !important;
        }

        .logo-index-page img {
            width: 100%;
        }

        .banner h1 {
            font-size: 20px;
        }
    }

    @media screen and (max-width:400px) {
        .banner h1 {
            font-size: 15px !important;
        }
    }


    /* Footer Section  */

    .main-footer-section {
        max-width: 1350px;
        margin: 0 auto;
        display: block;
    }

    .foothead {
        font-weight: bold;
        font-size: 17px;
    }

    .footsection {
        background-color: #070322;
        color: #fff;
    }

    .footdata ul li {
        list-style: none;
        font-size: 16px;
        font-weight: 400;
    }

    .footdata ul {
        padding-left: 0px !important;
    }

    .footer-logo-section {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .footer-logo-section img {
        width: 50%;
    }

    .footer-logo-section p {
        margin: 0 50px;
        font-size: 18px;
        text-align: center;
    }

    .child-foot p {
        font-size: 15px;
        font-weight: 600;
    }

    .foot-email {
        border-radius: 5px;
        border: none;
        padding: 5px 50px 5px 20px;
        background: transparent !important;
        border: 1px solid #fff;
    }

    .foot-email::placeholder {
        font-size: 12px;
    }

    .child-foot {
        display: flex !important;
        /* justify-content: ; */
    }



    .f-email {
        position: relative;
    }

    .f-email::before {
        content: " ";
        position: absolute;
        top: 8px;
        right: 0;
        width: 20px;
        height: 50px;
        background: url("/Images/Path\ 76.png");
        /* background: url("/picture/Icon\ ionic-ios-arrow-down.svg"); */
        background-repeat: no-repeat;
        cursor: pointer;
    }

    @media screen and (max-width: 1199px) {
        .foot-email {
            /* border-radius: 5px;
    border: none; */
            padding: 5px 18px 5px 20px;
        }

        .footer-logo-section p {
            margin: 0 30px;
            font-size: 16px;
            /* text-align: center; */
        }

        .foothead {
            font-weight: bold;
            font-size: 15px;
        }

        .footdata ul li {
            list-style: none;
            font-size: 14px;
            font-weight: 400;
        }
    }

    @media screen and (max-width: 991px) {
        .main-footer-section {
            /* padding-right: 20px; */
        }

        .footdata .quick-links {
            align-items: center;
            justify-content: center;
        }

        .footer-footdata {
            margin-top: 20px !important;
            margin-left: 30px !important;
        }

        .child-foot {
            justify-content: center !important;
            text-align: center !important;
        }

    }

    @media screen and (max-width: 767px) {
        .footsection {
            text-align: center;
        }

        .footdata {
            margin-top: 20px;
        }

        .main-footer-section {
            padding-right: 0px;
        }

        .child-foot {
            text-align: center;
            /* display: block !important; */
            /* float: right !important; */
        }

        .footer-logo-section img {
            width: 45%;
        }

        .footer-logo-section p {
            margin: 0 20px;
            font-size: 15px;
            text-align: center;
        }

        .footer-footdata {
            margin-top: 0px !important;
            margin-left: 0px !important;
        }
    }

    @media screen and (max-width:530px) {
        .child-foot {
            flex-direction: column !important;
        }
    }

    .hamburger {
        display: none;
    }

    .nav-list {
        /* display: flex; */
        justify-content: right;
    }

    .nav-item {
        display: block;
    }

    ul {
        background-color: var(--Dark-blue);
        padding-top: 1rem;
        padding-bottom: 1rem;
    }

    @media (max-width: 767px) {
        .hamburger {
            cursor: pointer;
            display: block;
            padding-left: 1rem;
        }

        .nav-item {
            display: none;
        }

        .nav-item.show {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .logo-index-page-2 {
            background-color: #070322;
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: left !important;
            z-index: 1;
            text-align: left !important;
            position: absolute;
            top: 10.8%;
            left: 0%;
        }
    }
    </style>
</head>

<body>


    <section class="" style="background-color: #070322; border-bottom: 2px solid #aa8453">
        <div class="header-top-nav-index d-flex align-items-center justify-content-between ps-3 pe-3">
            <div class="social-index pt-3 pb-3 d-flex justify-content-between">
                <img class="pe-2" src="/Images/whatsapp.png" alt="" style="width: 100%" />
                <img class="pe-2" src="/Images/linkedin.png" alt="" style="width: 100%" />
                <img src="/Images/facebook.png" alt="" style="width: 100%" />
            </div>
            <div class="logo-index-page pt-3 pb-3">
                <a href="http://43.204.32.147/"> <img src="/Images/Beauty-Luxe.png" alt="" /></a>
            </div>
            <div class="Store-index pt-3 pb-3 d-flex align-items-center">
                <a href="http://43.204.32.147/stores">
                    <div class="d-flex align-items-center">
                        <img src="/Images/Icon material-add-location.svg" alt="" width="20px" class="mb-2" />
                        <h6 class="ps-2" style="color: #fff">Stores</h6>
                    </div>
                </a>
                <div class="ps-5" id="google_element"></div>
            </div>
        </div>
    </section>

    <section class="" style="background-color: #070322">
        <div class="header-top-nav-index-2 d-flex align-items-center justify-content-between ps-3 pe-3">
            <div id="hamburger" class="hamburger" onclick="myFunction()">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="social-index pt-3 pb-3 d-flex justify-content-between"></div>

            <div class="logo-index-page-2 d-flex d-row  nav-list" id="nav-list">
                <li class="nav-item current-tab"><a href="brands.html"> Brands</a></li>
                <li class="nav-item"><a href="fragrance.html"> Fragrance</a></li>
                <li class="nav-item"><a href="skincare.html"> Skincare</a></li>
                <li class="nav-item"><a href="haircare.html"> Haircare</a></li>
                <li class="nav-item"><a href="makeup.html"> Makeup</a></li>
                <li class="nav-item"><a href="sales.html"> Sales</a></li>
                <!-- <img src="/Images/Beauty-Luxe.png" alt="" > -->
            </div>

            <div class="Store-index pt-3 pb-3 d-flex align-items-center">
                <img src="/Images/Icon awesome-search.svg" alt="" style="width: 30px" />
                <img src="/Images/Icon awesome-heart.svg" alt="" style="width: 30px" />
                <img src="/Images/Icon awesome-shopping-cart.svg" alt="" style="width: 30px" />
                <img src="/Images/Icon material-supervisor-account.svg" alt="" style="width: 25px" />

            </div>
        </div>
    </section>

    <!-- <img src="pictures/store-locator-01.png" width="100%" alt="" /> -->


    <div class="container mt-5 mb-5">
        <div class="row">
            <!-- <div class="col-md-1"></div>
            <div class="col-md-10">
                <div style="padding-left: 17px;">
                    <p><b>Inorbit Mall – Vadodara</b></p>
                    <p>Ground Floor Alembic Rd, Opposite to Alembic School, <br> Gorwa, Vadodara, Gujarat - 390023.</p>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="four_img">
                            <img src="http://localhost/beuty_concept/public/pictures/popup1.png" alt="">
                            <img src="http://localhost/beuty_concept/public/pictures/popup2.png" alt="">
                            <img src="http://localhost/beuty_concept/public/pictures/popup3.png" alt="">
                            <img src="http://localhost/beuty_concept/public/pictures/popup4.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-7" style="padding-top: 4%;">
                        <video style="width: 100%;" controls>
                            <source src="http://localhost/beuty_concept/public/video/Bvlgari Rose Goldea Blossom Delight EDT.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div> -->
            <div class="col-md-6 storecard">
                <div class="wrapper mt-3 mb-5">
                    <div class="st">
                        <label class="storelabel">
                            <select onchange="store()" id="store" class="form-select form-store"
                                aria-label="Default select example">
                                <option selected value="0">Store</option>


                                <!---   store data   --->
                                @foreach ($storedata as $store)
                                <option value="{{ $store->id }}">{{ $store->name }}</option>
                                @endforeach
                                <!---   store data   --->


                            </select>
                        </label>
                    </div>

                    <div class="st">
                        <label class="storelabel-2">
                            <select onchange="storeCity()" id="storeCity" class="form-select form-store appendcity"
                                aria-label="Default select example">
                                <option selected value="0">City</option>


                                <!---   city data   --->
                                <!-- @foreach ($storecity as $city)
                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                                @endforeach -->
                                <!---   city data   --->


                            </select>
                        </label>
                    </div>
                </div>
                <div class="scroll-container">


                    <!--------- Your Store Data-------->

                    <div class="scroll-page store">
                        @if($storeaddres)
                        @foreach ($storeaddres as $key => $value)
                        <?php
                     $images = array();
                      $images = DB::table('addresses_images')->where('address_id',$value->id)->get();
                      ?>
                        <p class="mt-m"><b>{{ $value->storename }}</b></p>

                        <p>{{ $value->storeaddress }}</p>
                        <a class="getdirectionbtn" href="{{ $value->Direction }}" target="_blank">Get direction</a>
                        <a data-bs-toggle="modal" data-bs-target="#examplal{{ $value->id }}" id="button_1"
                            class="pt-3 d-block store_details button_1 store-link" href="javascript: void(0);">Store
                            Details</a>

                        <hr>


                        <div class="modal fade store-modal" id="examplal{{ $value->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-fullscreen-sm-down">



                                <div class="modal-content">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                    <div class="modal-body">
                                        <div class="container">
                                            <div class="slideshow-container">
                                                @if(!empty($images))
                                                @foreach ($images as $key => $img)

                                                <div class="mySlides1">
                                                    <img style="width:100%" src="{{ URL::to('/') }}/{{$img->image}}"
                                                        id="imageResult" style="width:100%" height="600px" />
                                                    <div class="note">
                                                    </div>
                                                </div>
                                                @endforeach
                                                @endif
                                            </div>
                                            <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
                                            <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach
                        @endif

                    </div>


                    <!--------- Your Store Data-------->
                </div>
            </div>

            <!-------------map ifram--------------->
            <div class="col-lg-6">
                <div class="iframes">
                    <iframe
                        src="https://www.google.com/maps/d/embed?mid=1MuChuinf5MEmMcCwBcM3bZjpuILEPyc&hl=en&ehbc=2E312F"
                        width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="iframe">

                </div>
            </div>


            <!-------------map ifram--------------->
        </div>
    </div>


    <!-- footer -->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-5"></div>
                <div class="col-lg-4"></div>
                <div class="col-lg-4"></div>
            </div>
        </div>
    </section>

    <div class="container-fluid footsection">
        <div class="main-footer-section">
            <div class="row pt-5 pb-4">
                <div class="col-lg-5 col-md-12">
                    <div class="footer-logo-section">
                        <img src="/Images/Beauty-Luxe-foot.png" alt="" width="100%" />
                        <p class="mt-5">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                            diam nonumy eirmod tempor invidunt ut labore et dolore magna
                            aliquyam erat <br /><br />
                            sed diam voluptua. At vero eos et accusam et justo duo dolores
                            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus
                            est Lorem ipsum dolor sit amet
                        </p>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12s">
                    <div class="row footer-footdata">
                        <div class="col-lg-4 col-md-4">
                            <div class="footdata">
                                <ul>
                                    <li>
                                        <div class="foothead mb-3">BEAUT LUXE</div>
                                    </li>
                                    <li> <a href="#" style="color:#fff; text-decoration:none;"> Who we are ? </a> </li>
                                    <li> <a href="#" style="color:#fff; text-decoration:none;"> Terms & Conditions </a>
                                    </li>
                                    <li> <a href="#" style="color:#fff; text-decoration:none;"> We respect your privacy
                                        </a> </li>
                                    <li> <a href="#" style="color:#fff; text-decoration:none;"> Contact Us </a> </li>
                                    <li> <a href="#" style="color:#fff; text-decoration:none;"> Shipping & Returns </a>
                                    </li>
                                    <li> <a href="#" style="color:#fff; text-decoration:none;"> Authentication
                                            Certificate </a> </li>
                                    <li> <a href="#" style="color:#fff; text-decoration:none;"> FAQs </a> </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="footdata">
                                <ul>
                                    <li>
                                        <div class="foothead mb-3">SHOP BY</div>
                                    </li>
                                    <li> <a href="#" style="color:#fff; text-decoration:none;"> Fragrance For Him</li>
                                    </a>
                                    <li> <a href="#" style="color:#fff; text-decoration:none;"> Fragrance For Her</li>
                                    </a>
                                    <li> <a href="#" style="color:#fff; text-decoration:none;"> Makeup</li></a>
                                    <li> <a href="#" style="color:#fff; text-decoration:none;"> Body Care</li></a>
                                    <li> <a href="#" style="color:#fff; text-decoration:none;"> Home Fragrance</li></a>
                                    <li> <a href="#" style="color:#fff; text-decoration:none;"> Luggage</li></a>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="footdata">
                                <ul class="quick-links">
                                    <li>
                                        <div class="foothead mb-3">QUICK LINKS:</div>
                                    </li>
                                    <a href="#"> <img src="/Images/whatsapp.png" alt="" /></a>&nbsp;&nbsp;&nbsp;
                                    <a href="#"> <img src="/Images/linkedin.png" alt="" /></a>&nbsp;&nbsp;
                                    <a href="#"> <img src="Images/facebook.png" alt="" /></a>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="child-foot align-items-center">
                        <p class="mt-3 pe-2">Sign up for our Newsletter</p>
                        <div class="foot-email-block">
                            <label class="f-email">
                                <input type="email" class="foot-email" placeholder="Your email address" />
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->

    <!-- Button trigger modal -->
    <!-- Modal -->
    <div class="modal fade store-modal" id="examplal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-fullscreen-sm-down">



            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="container">
                        <div class="slideshow-container showall2">



                        </div>
                        <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="{{url('js/storelocator.js')}}"></script>
    <script>
    < link rel = "stylesheet"
    href = "style.css" >
    </script>
    <script src="main.js"></script>

    <script src="http://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script>
    function loadGoogleTranslate() {
        new google.translate.TranslateElement("google_element");
    }
    </script>

    <script>
    $(".button_1").click(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "/pages/test/",
            data: {
                id: $(this).val(), // < note use of 'this' here
                access_token: $("#access_token").val()
            },

        });
    });
    </script>

</body>

</html>
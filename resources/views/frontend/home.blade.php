@extends('layout')

@section('page_content')

    <!-- slider start -->
    <section class="container mt-4 mb-4">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/banners/hospitrade-neopure-putty-light-body.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/banners/hospitrade-new-endo-flowable-syringe.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/banners/hospitrade-disposable-products.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!-- slider end -->

    <!-- fetaured category -->

    <section class="container mt-2 mb-4">
    <h3 class="hospitrade-heading-one">Featured Category</h3>
    <br>
        <div class="row d-flex justify-content-between text-center">
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <div class="fc-image-wrapper">
                    <img src="/images/featured_category/endo_motors.webp" alt="">
                    <h5>Scalers</h5>
                </div>
            </div>
            <!-- Repeat for other images -->
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <div class="fc-image-wrapper">
                    <img src="/images/featured_category/endo_motors.webp" alt="">
                    <h5>Scalers</h5>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <div class="fc-image-wrapper">
                    <img src="/images/featured_category/endo_motors.webp" alt="">
                    <h5>Scalers</h5>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <div class="fc-image-wrapper">
                    <img src="/images/featured_category/endo_motors.webp" alt="">
                    <h5>Scalers</h5>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <div class="fc-image-wrapper">
                    <img src="/images/featured_category/endo_motors.webp" alt="">
                    <h5>Scalers</h5>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <div class="fc-image-wrapper">
                    <img src="/images/featured_category/endo_motors.webp" alt="">
                    <h5>Scalers</h5>
                </div>
            </div>
        </div>
    </section>
    

    <!-- three option image start -->
    <div class="row justify-content-center">
        <div class="col-3"></div>
        <div class="col-5"></div>
        <div class="col-3"></div>
    </div>

    <!-- category start -->
    <!-- category end -->

    <!-- special product div -->
    <section class="container">
        <div class="row d-flex justify-content-between">
            <div class="col-6 d-flex align-items-center flex-column justify-content-center">
                <img src="/images/2_copy_29_800xcbe0.jpg" height="50%" alt="">
            </div>
            <div class="col-6 d-flex align-items-center flex-column justify-content-center">
                <h3 class="hospitrade-heading-one">Nano Hybrid Composite Kit</h3>
                <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis at doloremque adipisci veritatis quaerat similique repellendus alias aliquam! Adipisci ducimus consequatur suscipit hic. Distinctio explicabo tempore temporibus vero est fugiat suscipit id, velit tempora. Error vero libero dolor laboriosam fuga esse, praesentium est assumenda ab. Deserunt quasi necessitatibus ullam vel.</p>
                <button type="button" class="btn btn-info">Show More</button>   
            </div>
        </div>
    </section>
    
    <!-- special product div ends -->

    <!-- banners -->
    <!-- banners -->

    <!-- banners -->
    <!-- banners -->

    <!-- 6 product in one row start -->
    <!-- bread crum -->
    <!-- 6 product in one row start -->

    <section class="container">
        <!-- Medical Materials -->

        <div class="row justify-content-between">
            <div class="col-auto">
                <h4 class="hospitrade-heading-one">Medical Materials</h4>
            </div>
            <div class="col-auto">
                <a href="#" class="text-decoration-none text-dark" type="normal">View all</a>
            </div>
        </div>
        <div id="medicalCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-sm-4 product-slide text-center">
                            <img src="images/1_2_1_1_800x8218.jpg" class="img-fluid" alt="Product 1" />
                            <h4>Product 1</h4>
                            <p>Description of Product 1</p>
                            <h6>£ 20.00</h6>
                        </div>
                        <div class="col-sm-4 product-slide text-center">
                            <img src="images/1_46_1_800x3f20.jpg" class="img-fluid" alt="Product 2" />
                            <h4>Product 2</h4>
                            <p>Description of Product 2</p>
                            <h6>£ 20.00</h6>
                        </div>
                        <div class="col-sm-4 product-slide text-center">
                            <img src="images/1artboard_2_2__1_1024xb758.jpg" class="img-fluid" alt="Product 3" />
                            <h4>Product 3</h4>
                            <p>Description of Product 3</p>
                            <h6>£ 20.00</h6>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-sm-4 product-slide text-center">
                            <img src="images/1artboard_3_2_1024xcf92.jpg" class="img-fluid" alt="Product 4" />
                            <h4>Product 4</h4>
                            <p>Description of Product 4</p>
                            <h6>£ 19.20</h6>
                        </div>
                        <div class="col-sm-4 product-slide text-center">
                            <img src="/images/1_5__1_1024x2f1c.jpg" class="img-fluid" alt="Product 5" />
                            <h4>Product 5</h4>
                            <p>Description of Product 5</p>
                            <h6>£ 20.00</h6>
                        </div>
                        <div class="col-sm-4 product-slide text-center">
                            <img src="images/2_copy_29_800xcbe0.jpg" class="img-fluid" alt="Product 6" />
                            <h4 c>Product 6</h4>
                            <p>Description of Product 6</p>
                            <h5>£ 20.00</h5>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#medicalCarousel" role="button" data-slide="prev">
                <span aria-hidden="true">
                    <i class="fa fa-chevron-left" style="color: orange"></i></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#medicalCarousel" role="button" data-slide="next">
                <span aria-hidden="true">
                    <i class="fa fa-chevron-right" style="color: orange"></i></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <section class="container">
        <!-- Disposabel Materials -->

        <div class="row justify-content-between">
            <div class="col-auto">
                <h4 class="hospitrade-heading-one">Disposabel Materials</h4>
            </div>
            <div class="col-auto">
                <a href="#" class="text-decoration-none text-dark" type="normal">View all</a>
            </div>
        </div>
        <div id="disposableCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-sm-4 product-slide text-center">
                            <img src="images/1_2_1_1_800x8218.jpg" class="img-fluid" alt="Product 1" />
                            <h4>Product 1</h4>
                            <p>Description of Product 1</p>
                            <h6>£ 20.00</h6>
                        </div>
                        <div class="col-sm-4 product-slide text-center">
                            <img src="images/1_46_1_800x3f20.jpg" class="img-fluid" alt="Product 2" />
                            <h4>Product 2</h4>
                            <p>Description of Product 2</p>
                            <h6>£ 20.00</h6>
                        </div>
                        <div class="col-sm-4 product-slide text-center">
                            <img src="images/1artboard_2_2__1_1024xb758.jpg" class="img-fluid" alt="Product 3" />
                            <h4>Product 3</h4>
                            <p>Description of Product 3</p>
                            <h6>£ 20.00</h6>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-sm-4 product-slide text-center">
                            <img src="images/1artboard_3_2_1024xcf92.jpg" class="img-fluid" alt="Product 4" />
                            <h4>Product 4</h4>
                            <p>Description of Product 4</p>
                            <h6>£ 19.20</h6>
                        </div>
                        <div class="col-sm-4 product-slide text-center">
                            <img src="/images/1_5__1_1024x2f1c.jpg" class="img-fluid" alt="Product 5" />
                            <h4>Product 5</h4>
                            <p>Description of Product 5</p>
                            <h6>£ 20.00</h6>
                        </div>
                        <div class="col-sm-4 product-slide text-center">
                            <img src="images/2_copy_29_800xcbe0.jpg" class="img-fluid" alt="Product 6" />
                            <h4 c>Product 6</h4>
                            <p>Description of Product 6</p>
                            <h5>£ 20.00</h5>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#disposableCarousel" role="button" data-slide="prev">
                <span aria-hidden="true">
                    <i class="fa fa-chevron-left" style="color: orange"></i></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#disposableCarousel" role="button" data-slide="next">
                <span aria-hidden="true">
                    <i class="fa fa-chevron-right" style="color: orange"></i></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <section class="container">
        <!-- Medical Instruments -->

        <div class="row justify-content-between">
            <div class="col-auto">
                <h4 class="hospitrade-heading-one">Medical Instruments</h4>
            </div>
            <div class="col-auto">
                <a href="#" class="text-decoration-none text-dark" type="normal">View all</a>
            </div>
        </div>
        <div id="instrumentsCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-sm-4 product-slide text-center">
                            <img src="images/1_2_1_1_800x8218.jpg" class="img-fluid" alt="Product 1" />
                            <h4>Product 1</h4>
                            <p>Description of Product 1</p>
                            <h6>£ 20.00</h6>
                        </div>
                        <div class="col-sm-4 product-slide text-center">
                            <img src="images/1_46_1_800x3f20.jpg" class="img-fluid" alt="Product 2" />
                            <h4>Product 2</h4>
                            <p>Description of Product 2</p>
                            <h6>£ 20.00</h6>
                        </div>
                        <div class="col-sm-4 product-slide text-center">
                            <img src="images/1artboard_2_2__1_1024xb758.jpg" class="img-fluid" alt="Product 3" />
                            <h4>Product 3</h4>
                            <p>Description of Product 3</p>
                            <h6>£ 20.00</h6>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-sm-4 product-slide text-center">
                            <img src="images/1artboard_3_2_1024xcf92.jpg" class="img-fluid" alt="Product 4" />
                            <h4>Product 4</h4>
                            <p>Description of Product 4</p>
                            <h6>£ 19.20</h6>
                        </div>
                        <div class="col-sm-4 product-slide text-center">
                            <img src="/images/1_5__1_1024x2f1c.jpg" class="img-fluid" alt="Product 5" />
                            <h4>Product 5</h4>
                            <p>Description of Product 5</p>
                            <h6>£ 20.00</h6>
                        </div>
                        <div class="col-sm-4 product-slide text-center">
                            <img src="images/2_copy_29_800xcbe0.jpg" class="img-fluid" alt="Product 6" />
                            <h4 c>Product 6</h4>
                            <p>Description of Product 6</p>
                            <h5>£ 20.00</h5>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#instrumentsCarousel" role="button" data-slide="prev">
                <span aria-hidden="true">
                    <i class="fa fa-chevron-left" style="color: orange"></i></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#instrumentsCarousel" role="button" data-slide="next">
                <span aria-hidden="true">
                    <i class="fa fa-chevron-right" style="color: orange"></i></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- 6 product in one row end -->
    </section>

    <!-- not found product -->

    <section style=" background: linear-gradient(to right, #FFFF00, #FFA500);">
        <div class="container ">
            <div class="row d-flex align-items-center justify-content-around  pt-5 pb-5">
                <div class="col-auto  text-center ">
                    <i class="fa fa-whatsapp" style="font-size:48px;color:green"></i>
                </div>
                <div class="col-auto text-center">
                    <h2 class="hospitrade-heading-one">Is the product you are looking for not on our list ?</h2> <br>
                    <h4>Ask us directly!</h4>
                    <button type="button" class="btn btn-success">Contact Us</button>
                </div>
            </div>
        </div>
    </section>
    @endsection



@extends('layout')

@section('page_content')
       <!-- product display page -->

       <div class="mt-2 mb-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Product Name</li>
                </ol>
            </nav>
        </div>

        <div class="mt-4 mb-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <img src="/images/1_2_1_1_800x8218.jpg" alt="" class="img-fluid rounded-lg">
                    </div>
                    <div class="col-md-6">
                        <h2 class="mb-4">Product Name</h2>
                        <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. At saepe perspiciatis officia quasi eos corrupti natus fugit harum velit, aliquid illum placeat tempora quo enim?</p>
                        <h5 class="mb-4">Product Availability: <span class="text-success">In Stock</span></h5>
                        <h4 class="mb-4">£ 20.00</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <button class="btn btn-primary btn-block">Buy Now</button>
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-success btn-block">Add To Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

            <div class="p-2">
                <h3 class="text-center">Detailed Review</h3> <br>
                <div class="container">
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi in distinctio eaque aliquid
                        laudantium. Error eum ipsam ex dolores in incidunt aliquid nobis facere ipsa sunt. Saepe
                        accusantium pariatur voluptas, ab iste, neque sit expedita sapiente voluptate excepturi et
                        debitis obcaecati fuga quam illo incidunt atque, impedit cumque ut quidem ipsa vel? Atque
                        deleniti quod fugiat exercitationem praesentium odit, repudiandae sit illum eius dicta libero
                        aspernatur nam modi, vero suscipit incidunt, sint nihil labore voluptatum velit mollitia beatae
                        impedit! Placeat accusantium itaque aliquid debitis, suscipit est voluptas ipsa totam blanditiis
                        vel beatae accusamus cupiditate sint nihil enim sapiente. Adipisci unde eius commodi quos. A,
                        ducimus ipsum? Corporis dolorem fuga harum neque quia laudantium quam illo ad libero velit,
                        consequuntur necessitatibus exercitationem quis amet reiciendis nihil beatae molestias possimus
                        voluptate consectetur consequatur et in! Assumenda corrupti inventore sint asperiores at, quos
                        voluptatum a illo odit, vitae quasi? Itaque blanditiis illum sit, quidem ducimus mollitia magni
                        commodi ratione deleniti velit, consectetur dicta accusamus nesciunt, quasi tempore vitae!
                        Officiis voluptatum libero saepe culpa deleniti error labore repellendus odio, magnam beatae
                        dolore commodi nam a, alias sint quaerat nobis recusandae tempore provident cupiditate, mollitia
                        quo explicabo. Accusamus provident commodi accusantium aperiam architecto fugiat cumque
                        aspernatur delectus quod. Veritatis labore, placeat odio molestiae velit inventore accusantium
                        accusamus autem saepe delectus? Magnam obcaecati velit alias dolorum, hic totam dignissimos
                        nulla reprehenderit dicta, in sint eaque vero dolorem earum eveniet ab, expedita rerum. Rem
                        necessitatibus modi deserunt ducimus. Atque vel quibusdam voluptas deserunt dicta consequuntur
                        ex voluptatem.
                    </p>
                </div>
            </div>

            <div class="p-2">
                <div class="row align-items-center justify-content-center justify-content-md-around">
                    <div class="col-md-auto mb-3">
                        <div class="d-flex flex-column text-center product-desc-container">
                            <h5>Size Guide</h5>
                            <p class="mb-0">1 x 10 PCS</p>
                        </div>
                    </div>
                    <div class="col-md-auto mb-3">
                        <div class="d-flex flex-column text-center product-desc-container">
                            <h5>Customer Support</h5>
                            <p class="mb-0">info@hospitradeglobal.com</p>
                        </div>
                    </div>
                    <div class="col-md-auto mb-3">
                        <div class="d-flex flex-column text-center product-desc-container">
                            <h5>Reviews</h5>
                            <p class="mb-0">Trustpilot Link</p>
                        </div>
                    </div>
                    <div class="col-md-auto mb-3">
                        <div class="d-flex flex-column text-center product-desc-container">
                            <h5>Social Sharing</h5>
                            <div class="row justify-content-around">
                                <a href=""><i class="fa fa-whatsapp share_icons_product"></i></a>
                                <a href=""><i class="fa fa-instagram share_icons_product"></i></a>
                                <a href=""><i class="fa fa-facebook-square share_icons_product"></i></a>
                                <a href=""><i class="fa fa-envelope share_icons_product"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>


@endsection


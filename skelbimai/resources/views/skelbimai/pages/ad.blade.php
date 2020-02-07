@extends('skelbimai/main')

@section('content')
<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">


                <div class="row justify-content-center mt-5">
                    <div class="col-md-8 text-center">
                        <h1>Gero Apsipirkimo :)</h1>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">

                <div class="mb-4" style="margin-top: -150px;">
                    <div class="slide-one-item home-slider owl-carousel">
                        <div><img src="images/img_2.jpg" alt="Image" class="img-fluid rounded"></div>
                        <div><img src="images/img_3.jpg" alt="Image" class="img-fluid rounded"></div>
                        <div><img src="images/img_4.jpg" alt="Image" class="img-fluid rounded"></div>
                        <div><img src="images/img_1.jpg" alt="Image" class="img-fluid rounded"></div>
                    </div>
                </div>

                <h4 class="h5 mb-4 text-black">Description</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error repellat architecto maiores vero, quasi dolor, accusantium autem aliquam, ullam sequi saepe illum eaque aperiam eius amet! Necessitatibus nam sapiente obcaecati sit, fugit omnis non sunt distinctio aliquid, quibusdam excepturi hic?</p>
                <p>Nisi, error. Molestias, quidem eaque sequi aut perspiciatis assumenda obcaecati ut quod eius reprehenderit. Iure rem numquam totam odio dignissimos aspernatur soluta. Corporis suscipit modi iste consequatur, repellat nihil omnis molestias optio. Dolorem ullam eius officia, eum ratione dolorum assumenda.</p>
                <p>Soluta corporis blanditiis cupiditate debitis eveniet, temporibus ut cumque sint repudiandae quidem tenetur commodi id, quam. Sapiente corrupti magnam quis nulla, asperiores neque tenetur labore aperiam provident nostrum sequi delectus voluptatem fuga officiis repellat, ratione aspernatur eius repellendus modi reprehenderit.</p>
                <p>Sapiente molestias voluptate cupiditate blanditiis quasi qui aperiam accusamus aspernatur ipsam velit nihil quaerat voluptatum soluta laboriosam ipsum veritatis at reiciendis quod voluptates, saepe harum dignissimos placeat dolorum aliquid! Quod quasi praesentium optio ratione non et sit quos excepturi cum?</p>

                <p class="mt-3"><a href="#" class="btn btn-primary">Get In Touch</a></p>

            </div>
            <div class="col-lg-3 ml-auto">

                <div class="mb-5">
                    <h3 class="h5 text-black mb-3">Filters</h3>
                    <form action="#" method="post">
                        <div class="form-group">
                            <input type="text" placeholder="What are you looking for?" class="form-control">
                        </div>
                        <div class="form-group">
                            <div class="select-wrap">
                                <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                                <select class="form-control" name="" id="">
                                    <option value="">All Categories</option>
                                    <option value="" selected="">Real Estate</option>
                                    <option value="">Books &amp;  Magazines</option>
                                    <option value="">Furniture</option>
                                    <option value="">Electronics</option>
                                    <option value="">Cars &amp; Vehicles</option>
                                    <option value="">Others</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <!-- select-wrap, .wrap-icon -->
                            <div class="wrap-icon">
                                <span class="icon icon-room"></span>
                                <input type="text" placeholder="Location" class="form-control">
                            </div>
                        </div>
                    </form>
                </div>

                <div class="mb-5">
                    <form action="#" method="post">
                        <div class="form-group">
                            <p>Radius around selected destination</p>
                        </div>
                        <div class="form-group">
                            <input type="range" min="0" max="100" value="20" data-rangeslider>
                        </div>
                    </form>
                </div>

                <div class="mb-5">
                    <form action="#" method="post">
                        <div class="form-group">
                            <p>Category 'Real Estate' is selected</p>
                            <p>More filters</p>
                        </div>
                        <div class="form-group">
                            <ul class="list-unstyled">
                                <li>
                                    <label for="option1">
                                        <input type="checkbox" id="option1">
                                        Residential
                                    </label>
                                </li>
                                <li>
                                    <label for="option2">
                                        <input type="checkbox" id="option2">
                                        Commercial
                                    </label>
                                </li>
                                <li>
                                    <label for="option3">
                                        <input type="checkbox" id="option3">
                                        Industrial
                                    </label>
                                </li>
                                <li>
                                    <label for="option4">
                                        <input type="checkbox" id="option4">
                                        Land
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </form>
                </div>

                <div class="mb-5">
                    <h3 class="h6 mb-3">More Info</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti voluptatem placeat facilis, reprehenderit eius officiis.</p>
                </div>

            </div>

        </div>
    </div>
</div>

<div class="newsletter bg-primary py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2>Newsletter</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="col-md-6">

                <form class="d-flex">
                    <input type="text" class="form-control" placeholder="Email">
                    <input type="submit" value="Subscribe" class="btn btn-white">
                </form>
            </div>
        </div>
    </div>
</div>
@stop
@extends('layouts.shop')

@section('main')
        <!-- ==========================
    PRODUCTS - START
=========================== -->
<section class="content products">
    <div class="container">
        <article class="product-item product-single">
            <div class="row">
                <div class="col-xs-4">
                    <div class="product-carousel-wrapper">
                        <div id="product-carousel">
                            <div class="item"><img src="/images/products/product-1.jpg" class="img-responsive"
                                                   alt=""></div>
                            <div class="item"><img src="/images/products/product-2.jpg" class="img-responsive"
                                                   alt=""></div>
                            <div class="item"><img src="/images/products/product-3.jpg" class="img-responsive"
                                                   alt=""></div>
                            <div class="item"><img src="/images/products/product-4.jpg" class="img-responsive"
                                                   alt=""></div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-8">
                    <div class="product-body">
                        <h3>Fusce Aliquam</h3>
                        <div class="product-labels">
                            <span class="label label-info">new</span>
                            <span class="label label-danger">sale</span>
                        </div>
                        <div class="product-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                            <span class="price">
                                <del><span class="amount">$36.00</span></del>
                                <ins><span class="amount">$30.00</span></ins>
                            </span>
                        <ul class="list-unstyled product-info">
                            <li><span>ID</span>U-187423</li>
                            <li><span>Availability</span>In Stock</li>
                            <li><span>Brand</span>Esprit</li>
                            <li><span>Tags</span>Dress, Black, Women</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut feugiat mauris eget magna egestas
                            porta. Curabitur sagittis sagittis neque rutrum congue. Donec lobortis dui sagittis,
                            ultrices nunc ornare, ultricies elit. Curabitur tristique felis pulvinar nibh porta. </p>
                        <div class="product-form clearfix">
                            <div class="row row-no-padding">

                                <div class="col-md-3 col-sm-4">
                                    <div class="product-quantity clearfix">
                                        <a class="btn btn-default" id="qty-minus">-</a>
                                        <input type="text" class="form-control" id="qty" value="1">
                                        <a class="btn btn-default" id="qty-plus">+</a>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-4">
                                    <div class="product-size">
                                        <form class="form-inline">
                                            <div class="form-group">
                                                <label>Size:</label>
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control">
                                                    <option>XS</option>
                                                    <option>S</option>
                                                    <option selected="selected">M</option>
                                                    <option>L</option>
                                                    <option>XL</option>
                                                    <option>XXL</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-4">
                                    <div class="product-color">
                                        <form class="form-inline">
                                            <div class="form-group">
                                                <label>Color:</label>
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control">
                                                    <option selected="selected">Black</option>
                                                    <option>White</option>
                                                    <option>Red</option>
                                                    <option>Yellow</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-12">
                                    <a href="" class="btn btn-primary add-to-cart"><i class="fa fa-shopping-cart"></i>Add
                                        to cart</a>
                                </div>

                            </div>
                        </div>
                        <ul class="list-inline product-links">
                            <li><a href="#"><i class="fa fa-heart"></i>Add to wishlist</a></li>
                            <li><a href="#"><i class="fa fa-exchange"></i>Compare</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i>Email to friend</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </article>

        <div class="tabs product-tabs">
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class=""><a href="#description" role="tab" data-toggle="tab"
                                                    aria-controls="description" aria-expanded="false">Description</a>
                </li>
                <li role="presentation" class="active"><a href="#reviews" role="tab" data-toggle="tab"
                                                          aria-controls="reviews" aria-expanded="true">Reviews (25)</a>
                </li>
                <li role="presentation" class=""><a href="#video" role="tab" data-toggle="tab" aria-controls="video"
                                                    aria-expanded="false">Responsive Video</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane" id="description">
                    <h4>Etiam posuere id nulla</h4>
                    <p>Ut arcu ipsum, cursus vitae ligula id, semper sodales mauris. Etiam posuere id nulla lacinia
                        convallis. Sed tortor nisi, semper a auctor id, aliquet et sem. Aliquam suscipit lectus ut arcu
                        pretium, et malesuada tortor finibus. Pellentesque sed arcu nec lectus vulputate pharetra.
                        Vestibulum lobortis dolor massa, et tristique ex tincidunt at. Donec imperdiet elit elit, sit
                        amet posuere dui auctor id. Nullam vel augue varius, ornare purus a, mattis diam.</p>
                    <ul>
                        <li>Etiam posuere id nulla lacinia convallis</li>
                        <li>Sed tortor nisi, semper a auctor id, aliquet</li>
                        <li>Curabitur eros dui</li>
                    </ul>
                    <h5>Pellentesque vel felis pharetra</h5>
                    <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur eros dui, viverra nec
                        nisl quis, aliquet auctor nisi. Pellentesque vel felis pharetra, accumsan purus eu, mattis est.
                        Aliquam tincidunt efficitur nibh nec volutpat. Vestibulum ante ipsum primis in faucibus orci
                        luctus et ultrices posuere cubilia Curae; Nulla ut nisl eu nisi vestibulum consectetur. Quisque
                        egestas dolor neque, at bibendum lorem convallis sed. Maecenas finibus metus ante, non tristique
                        sapien sagittis id. Nam et iaculis massa. Nulla facilisi. Integer at nunc neque. Phasellus
                        posuere et nunc ac blandit. Mauris sollicitudin, sapien vitae luctus pellentesque, risus nunc
                        mattis purus, sed laoreet ante leo congue sem. Etiam eget nisi ipsum. Phasellus consectetur vel
                        turpis vitae eleifend.</p>
                    <h5>Phasellus et libero</h5>
                    <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam erat volutpat. Phasellus et
                        libero nec ligula imperdiet viverra quis et turpis. Aenean quis mattis nunc. Mauris consectetur
                        sed eros sed convallis. Morbi non elit in est tempus scelerisque congue a purus. In eget
                        ullamcorper magna. Nam libero turpis, ullamcorper sit amet molestie nec, cursus ac urna.
                        Suspendisse blandit finibus est, quis pulvinar arcu pretium vel. Aenean et leo nisi. Donec at
                        iaculis ligula. Proin condimentum lobortis ex, in congue nisi molestie eget.</p>
                </div>
                <div role="tabpanel" class="tab-pane active in" id="reviews">

                    <div class="comments">

                        <!-- REVIEW - START -->
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object" alt="" src="/images/default-avatar.png">
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">John Doe</h3>
                                <div class="meta">
                                    <span class="date">20 July 2015</span>
                                    <a data-toggle="modal" data-target="#add-review">Reply</a>
                                </div>
                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                    sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra
                                    turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue
                                    felis in faucibus.</p>
                            </div>
                        </div>
                        <!-- REVIEW - END -->

                        <!-- REVIEW - START -->
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object" alt="" src="/images/default-avatar.png">
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">John Doe</h3>
                                <div class="meta">
                                    <span class="date">20 July 2015</span>
                                    <a data-toggle="modal" data-target="#add-review">Reply</a>
                                </div>
                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                    sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra
                                    turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue
                                    felis in faucibus.</p>

                                <!-- REVIEW - START -->
                                <div class="media">
                                    <div class="media-left">
                                        <img class="media-object" alt="" src="/images/default-avatar.png">
                                    </div>
                                    <div class="media-body">
                                        <h3 class="media-heading">John Doe</h3>
                                        <div class="meta">
                                            <span class="date">20 July 2015</span>
                                        </div>
                                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                            sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus
                                            viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec
                                            lacinia congue felis in faucibus.</p>
                                    </div>
                                </div>
                                <!-- REVIEW - END -->

                                <!-- REVIEW - START -->
                                <div class="media">
                                    <div class="media-left">
                                        <img class="media-object" alt="" src="/images/default-avatar.png">
                                    </div>
                                    <div class="media-body">
                                        <h3 class="media-heading">John Doe</h3>
                                        <div class="meta">
                                            <span class="date">20 July 2015</span>
                                        </div>
                                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                            sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus
                                            viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec
                                            lacinia congue felis in faucibus.</p>
                                    </div>
                                </div>
                                <!-- REVIEW - END -->

                            </div>
                        </div>
                        <!-- REVIEW - END -->

                        <!-- REVIEW - START -->
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object" alt="" src="/images/default-avatar.png">
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">John Doe</h3>
                                <div class="meta">
                                    <span class="date">20 July 2015</span>
                                    <a data-toggle="modal" data-target="#add-review">Reply</a>
                                </div>
                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                    sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra
                                    turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue
                                    felis in faucibus.</p>
                            </div>
                        </div>
                        <!-- REVIEW - END -->

                    </div>

                    <a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#add-review">Add Review</a>

                </div>
                <div role="tabpanel" class="tab-pane" id="video">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe allowfullscreen=""
                                src="http://www.youtube.com/embed/M4z90wlwYs8?feature=player_detailpage"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="releated-products">
            <h2>Related Products</h2>
            <div class="row grid" id="products">

                <!-- PRODUCT - START -->
                <div class="col-sm-3 col-xs-6">
                    <article class="product-item">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="product-overlay">
                                    <div class="product-mask"></div>
                                    <a href="single-product.html" class="product-permalink"></a>
                                    <img src="/images/products/product-1.jpg" class="img-responsive" alt="">
                                    <div class="product-quickview">
                                        <a class="btn btn-quickview" data-toggle="modal"
                                           data-target="#product-quickview">Quick View</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="product-body">
                                    <h3>Lorem ipsum dolor sit amet consectetur</h3>
                                        <span class="price">
                                            <del><span class="amount">$36.00</span></del>
                                            <ins><span class="amount">$30.00</span></ins>
                                        </span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut feugiat mauris eget
                                        magna egestas porta. Curabitur sagittis sagittis neque rutrum congue. Donec
                                        lobortis dui sagittis, ultrices nunc ornare, ultricies elit. Curabitur tristique
                                        felis pulvinar nibh porta. </p>
                                    <div class="buttons buttons-simple">
                                        <a href=""><i class="fa fa-exchange"></i></a>
                                        <a href=""><i class="fa fa-shopping-cart"></i></a>
                                        <a href=""><i class="fa fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- PRODUCT - END -->

                <!-- PRODUCT - START -->
                <div class="col-sm-3 col-xs-6">
                    <article class="product-item">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="product-overlay">
                                    <div class="product-mask"></div>
                                    <a href="single-product.html" class="product-permalink"></a>
                                    <img src="/images/products/product-2.jpg" class="img-responsive" alt="">
                                    <div class="product-quickview">
                                        <a class="btn btn-quickview" data-toggle="modal"
                                           data-target="#product-quickview">Quick View</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="product-body">
                                    <h3>Lorem ipsum dolor sit amet consectetur</h3>
                                        <span class="price">
                                            <del><span class="amount">$36.00</span></del>
                                            <ins><span class="amount">$30.00</span></ins>
                                        </span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut feugiat mauris eget
                                        magna egestas porta. Curabitur sagittis sagittis neque rutrum congue. Donec
                                        lobortis dui sagittis, ultrices nunc ornare, ultricies elit. Curabitur tristique
                                        felis pulvinar nibh porta. </p>
                                    <div class="buttons buttons-simple">
                                        <a href=""><i class="fa fa-exchange"></i></a>
                                        <a href=""><i class="fa fa-shopping-cart"></i></a>
                                        <a href=""><i class="fa fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- PRODUCT - END -->

                <!-- PRODUCT - START -->
                <div class="col-sm-3 col-xs-6">
                    <article class="product-item">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="product-overlay">
                                    <div class="product-mask"></div>
                                    <a href="single-product.html" class="product-permalink"></a>
                                    <img src="/images/products/product-3.jpg" class="img-responsive" alt="">
                                    <div class="product-quickview">
                                        <a class="btn btn-quickview" data-toggle="modal"
                                           data-target="#product-quickview">Quick View</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="product-body">
                                    <h3>Lorem ipsum dolor sit amet consectetur</h3>
                                        <span class="price">
                                            <del><span class="amount">$36.00</span></del>
                                            <ins><span class="amount">$30.00</span></ins>
                                        </span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut feugiat mauris eget
                                        magna egestas porta. Curabitur sagittis sagittis neque rutrum congue. Donec
                                        lobortis dui sagittis, ultrices nunc ornare, ultricies elit. Curabitur tristique
                                        felis pulvinar nibh porta. </p>
                                    <div class="buttons buttons-simple">
                                        <a href=""><i class="fa fa-exchange"></i></a>
                                        <a href=""><i class="fa fa-shopping-cart"></i></a>
                                        <a href=""><i class="fa fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- PRODUCT - END -->

                <!-- PRODUCT - START -->
                <div class="col-sm-3 col-xs-6">
                    <article class="product-item">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="product-overlay">
                                    <div class="product-mask"></div>
                                    <a href="single-product.html" class="product-permalink"></a>
                                    <img src="/images/products/product-4.jpg" class="img-responsive" alt="">
                                    <div class="product-quickview">
                                        <a class="btn btn-quickview" data-toggle="modal"
                                           data-target="#product-quickview">Quick View</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="product-body">
                                    <h3>Lorem ipsum dolor sit amet consectetur</h3>
                                        <span class="price">
                                            <del><span class="amount">$36.00</span></del>
                                            <ins><span class="amount">$30.00</span></ins>
                                        </span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut feugiat mauris eget
                                        magna egestas porta. Curabitur sagittis sagittis neque rutrum congue. Donec
                                        lobortis dui sagittis, ultrices nunc ornare, ultricies elit. Curabitur tristique
                                        felis pulvinar nibh porta. </p>
                                    <div class="buttons buttons-simple">
                                        <a href=""><i class="fa fa-exchange"></i></a>
                                        <a href=""><i class="fa fa-shopping-cart"></i></a>
                                        <a href=""><i class="fa fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- PRODUCT - END -->

            </div>
        </div>

    </div>
</section>
<!-- ==========================
    PRODUCTS - END
=========================== -->
@endsection

@extends('layouts.index')

@section('title', 'Produits')

@section('content')
<div class="row">
    <div class="col-lg-3">
        <h1 class="my-4">eCommercer</h1>
        <div class="list-group">
            <a href="#" class="list-group-item">Category 1</a>
            <a href="#" class="list-group-item">Category 2</a>
            <a href="#" class="list-group-item">Category 3</a>
        </div>
    </div>
    <div class="col-lg-9">
        <div class="row">
            @forelse($products as $product)
                <div class="col-lg-4 col-md-6 mb-4 product-item">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="http://lorempicsum.com/futurama/700/400/6" title="{{ $product->img }}"></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="/product">{{ $product->name }}</a>
                            </h4>
                            <h5>{{ $product->price }} €</h5>
                            <p class="card-text">{{ $product->description }}</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            <br>
                            <a href="/product/1" class="btn btn-primary">Voir le produit</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="alert alert-warning col-9" role="alert">Il n'y a aucun objet correspondent à votre recherche</div>
            @endforelse
        </div>
    </div>
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h5>Lorem ipsum dolar sit amet</h5>
            </div><!-- end modal-header -->
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="carousel slide product-slider" data-ride="carousel" data-interval="false">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <figure>
                                        <img src="img/products/men_01.jpg" alt="">
                                    </figure>
                                </div><!-- end item -->
                                <div class="item">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/NrmMk1Myrxc"></iframe>
                                    </div>
                                </div><!-- end item -->
                                <div class="item">
                                    <figure>
                                        <img src="img/products/men_03.jpg" alt="">
                                    </figure>
                                </div><!-- end item -->
                                <div class="item">
                                    <figure>
                                        <img src="img/products/men_04.jpg" alt="">
                                    </figure>
                                </div><!-- end item -->
                                <div class="item">
                                    <figure>
                                        <img src="img/products/men_05.jpg" alt="">
                                    </figure>
                                </div><!-- end item -->

                                <!-- Arrows -->
                                <a class="left carousel-control" href=".product-slider" data-slide="prev">
                                    <span class="fa fa-angle-left"></span>
                                </a>
                                <a class="right carousel-control" href=".product-slider" data-slide="next">
                                    <span class="fa fa-angle-right"></span>
                                </a>
                            </div><!-- end carousel-inner -->

                            <!-- thumbs -->
                            <ol class="carousel-indicators mCustomScrollbar meartlab">
                                <li data-target=".product-slider" data-slide-to="0" class="active"><img src="img/products/men_01.jpg" alt=""></li>
                                <li data-target=".product-slider" data-slide-to="1"><img src="img/products/men_02.jpg" alt=""></li>
                                <li data-target=".product-slider" data-slide-to="2"><img src="img/products/men_03.jpg" alt=""></li>
                                <li data-target=".product-slider" data-slide-to="3"><img src="img/products/men_04.jpg" alt=""></li>
                                <li data-target=".product-slider" data-slide-to="4"><img src="img/products/men_05.jpg" alt=""></li>
                                <li data-target=".product-slider" data-slide-to="5"><img src="img/products/men_06.jpg" alt=""></li>
                            </ol><!-- end carousel-indicators -->
                        </div><!-- end carousel -->
                    </div><!-- end col -->
                    <div class="col-sm-7">
                        <p class="text-gray alt-font">Product code: 1032446</p>

                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star-half-o text-warning"></i>
                        <span>(12 reviews)</span>
                        <h4 class="text-primary">$79.00</h4>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                        <hr class="spacer-10">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <select class="form-control" name="select">
                                    <option value="" selected="">Color</option>
                                    <option value="red">Red</option>
                                    <option value="green">Green</option>
                                    <option value="blue">Blue</option>
                                </select>
                            </div><!-- end col -->
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <select class="form-control" name="select">
                                    <option value="">Size</option>
                                    <option value="">S</option>
                                    <option value="">M</option>
                                    <option value="">L</option>
                                    <option value="">XL</option>
                                    <option value="">XXL</option>
                                </select>
                            </div><!-- end col -->
                            <div class="col-md-4 col-sm-12">
                                <select class="form-control" name="select">
                                    <option value="" selected="">QTY</option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                    <option value="">4</option>
                                    <option value="">5</option>
                                    <option value="">6</option>
                                    <option value="">7</option>
                                </select>
                            </div><!-- end col -->
                        </div><!-- end row -->
                        <hr class="spacer-10">
                        <ul class="list list-inline">
                            <li><button type="button" class="btn btn-default btn-md round"><i class="fa fa-shopping-basket mr-5"></i>Add to Cart</button></li>
                            <li><button type="button" class="btn btn-gray btn-md round"><i class="fa fa-heart mr-5"></i>Add to Wishlist</button></li>
                        </ul>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end modal-body -->
        </div><!-- end modal-content -->
    </div>
</div>
@endsection








<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h2 class="font-ecommercer">Robe Bleu-Princesse</h2>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-sm-5">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active" style="background-image: url('img/products/robemid.jpg')">
                            </div>
                            <div class="carousel-item" style="background-image: url('img/products/robelg.jpg')">
                            </div>
                            <div class="carousel-item" style="background-image: url('img/products/vestonmid.jpeg')">
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







                </div>
                <div class="col-sm-7">
                    <p class="text-gray alt-font">Catégorie : <a id="hover" class="font-shop" href="#">Fringues</a></p>

                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star-half-o text-warning"></i>
                    <span><a id="hover" class="font-shop" href="#">(12 avis)</a></span>
                    <h4 class="font-shop">Prix : 999€</h4>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                    <hr class="spacer-10">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <select class="form-control" name="select">
                                <option value="" selected="">Couleur</option>
                                <option value="red">Rouge</option>
                                <option value="green">Vert</option>
                                <option value="blue">Bleu</option>
                            </select>
                        </div><!-- end col -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <select class="form-control" name="select">
                                <option value="">Taille</option>
                                <option value="">S</option>
                                <option value="">M</option>
                                <option value="">L</option>
                                <option value="">XL</option>
                                <option value="">XXL</option>
                            </select>
                        </div><!-- end col -->
                        <div class="col-md-4 col-sm-12">
                            <select class="form-control" name="select">
                                <option value="" selected="">Quantité</option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                                <option value="">6</option>
                                <option value="">7</option>
                            </select>
                        </div><!-- end col -->
                    </div><!-- end row -->
                    <hr class="spacer-10">
                   <button type="button" class="btn btn-primary btn-md round btn-shop"><i class="fa fa-shopping-basket mr-5"></i>Ajouter au panier</button>
                   <button type="button" class="btn btn-primary btn-md round btn-shop"><i class="fa fa-heart mr-5"></i>Ajouter à mes favoris</button>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end modal-body -->
    </div><!-- end modal-content -->
</div>
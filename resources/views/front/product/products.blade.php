@extends('front.master')
@section('title')
Products
@endsection

@section('content')

<!-- Page Title -->
<section class="page-title text-center bg-light">
    <div class="container relative clearfix">
      <div class="title-holder">
        <div class="title-text">
          <h1 class="uppercase">catalog</h1>
          <ol class="breadcrumb">
            <li>
              <a href="index.html">Home</a>
            </li>
            <li>
              <a href="index.html">Shop</a>
            </li>
            <li class="active">
              Catalog
            </li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <div class="content-wrapper oh">

    <!-- Catalogue -->
    <section class="section-wrap pt-80 pb-40 catalogue">
      <div class="container relative">

        <!-- Filter -->          
        <div class="shop-filter">
          <div class="view-mode hidden-xs">
            <span>View:</span>
            <a class="grid grid-active" id="grid"></a>
            <a class="list" id="list"></a>
          </div>
          <div class="filter-show hidden-xs">
            <span>Show:</span>
            <a href="#" class="active">12</a>
            <a href="#">24</a>
            <a href="#">all</a>
          </div>
          <form class="ecommerce-ordering">
            <select>
              <option value="default-sorting">Default Sorting</option>
              <option value="price-low-to-high">Price: high to low</option>
              <option value="price-high-to-low">Price: low to high</option>
              <option value="by-popularity">By Popularity</option>
              <option value="date">By Newness</option>
              <option value="rating">By Rating</option>
            </select>
          </form>
        </div>

        <div class="row">
          <div class="col-md-12 catalogue-col right mb-50">
            <div class="shop-catalogue grid-view">

              <div class="row items-grid">

                <div class="col-md-4 col-xs-6 product product-grid">
                  <div class="product-item clearfix">
                    <div class="product-img hover-trigger">
                      <a href="{{ route('product-details') }}">
                        <img src="{{ asset('/') }}frontend-2/img/shop/shop_item_1.jpg" alt="">
                        <img src="{{ asset('/') }}frontend-2/img/shop/shop_item_back_1.jpg" alt="" class="back-img">
                      </a>
                      <div class="product-label">
                        <span class="sale">sale</span>
                      </div>
                      <div class="hover-2">                    
                        <div class="product-actions">
                          <a href="#" class="product-add-to-wishlist">
                            <i class="fa fa-heart"></i>
                          </a>
                        </div>                        
                      </div>
                      <a href="#" class="product-quickview">Quick View</a>
                    </div>

                    <div class="product-details">
                      <h3 class="product-title">
                        <a href="{{ route('product-details') }}">Drawstring Dress</a>
                      </h3>
                      <span class="category">
                        <a href="catalogue-grid.html">Women</a>
                      </span>
                    </div>

                    <span class="price">
                      <del>
                        <span>$730.00</span>
                      </del>
                      <ins>
                        <span class="amount">$159.99</span>
                      </ins>                        
                    </span>

                    <div class="product-description">
                      <h3 class="product-title">
                        <a href="{{ route('product-details') }}">Drawstring Dress</a>
                      </h3>
                      <span class="price">
                        <del>
                          <span>$730.00</span>
                        </del>
                        <ins>
                          <span class="amount">$159.99</span>
                        </ins>                        
                      </span>
                      <span class="rating">
                        <a href="#">3 Reviews</a>
                      </span>
                      <div class="clear"></div>
                      <p>Zenna Shop is a very slick and clean e-commerce template with endless possibilities. Creating an awesome clothes store with this Theme is easy than you can imagine. Grab this theme now.</p>
                      <a href="#" class="btn btn-dark btn-md left"><span>Add to Cart</span></a>
                      <div class="product-add-to-wishlist">
                        <a href="#"><i class="fa fa-heart"></i></a>
                      </div>
                    </div>                      

                  </div>
                </div> <!-- end product -->


                <div class="col-md-4 col-xs-6 product product-grid">
                  <div class="product-item clearfix">
                    <div class="product-img hover-trigger">
                      <a href="{{ route('product-details') }}">
                        <img src="{{ asset('/') }}frontend-2/img/shop/shop_item_2.jpg" alt="">
                        <img src="{{ asset('/') }}frontend-2/img/shop/shop_item_back_2.jpg" alt="" class="back-img">
                      </a>
                      <div class="hover-2">                    
                        <div class="product-actions">
                          <a href="#" class="product-add-to-wishlist">
                            <i class="fa fa-heart"></i>
                          </a>
                        </div>                        
                      </div>
                      <a href="#" class="product-quickview">Quick View</a>
                    </div>

                    <div class="product-details">
                      <h3 class="product-title">
                        <a href="{{ route('product-details') }}">Mesh Brown Sandal</a>
                      </h3>
                      <span class="category">
                        <a href="catalogue-grid.html">Accessories</a>
                      </span>
                    </div>

                    <span class="price">
                      <ins>
                        <span class="amount">$190.00</span>
                      </ins>                       
                    </span>

                    <div class="product-description">
                      <h3 class="product-title">
                        <a href="{{ route('product-details') }}">Mesh Brown Sandal</a>
                      </h3>
                      <span class="price">
                        <ins>
                          <span class="amount">$190.00</span>
                        </ins>                        
                      </span>
                      <span class="rating">
                        <a href="#">3 Reviews</a>
                      </span>
                      <div class="clear"></div>
                      <p>Zenna Shop is a very slick and clean e-commerce template with endless possibilities. Creating an awesome clothes store with this Theme is easy than you can imagine. Grab this theme now.</p>
                      <a href="#" class="btn btn-dark btn-md left"><span>Add to Cart</span></a>
                      <div class="product-add-to-wishlist">
                        <a href="#"><i class="fa fa-heart"></i></a>
                      </div>
                    </div>                      

                  </div>
                </div> <!-- end product -->


                <div class="col-md-4 col-xs-6 product product-grid">
                  <div class="product-item clearfix">
                    <div class="product-img hover-trigger">
                      <a href="{{ route('product-details') }}">
                        <img src="{{ asset('/') }}frontend-2/img/shop/shop_item_3.jpg" alt="">
                        <img src="{{ asset('/') }}frontend-2/img/shop/shop_item_back_3.jpg" alt="" class="back-img">
                      </a>
                      <div class="hover-2">                    
                        <div class="product-actions">
                          <a href="#" class="product-add-to-wishlist">
                            <i class="fa fa-heart"></i>
                          </a>
                        </div>                        
                      </div>
                      <a href="#" class="product-quickview">Quick View</a>
                    </div>

                    <div class="product-details">
                      <h3 class="product-title">
                        <a href="{{ route('product-details') }}">Tribal Grey Blazer</a>
                      </h3>
                      <span class="category">
                        <a href="catalogue-grid.html">Women</a>
                      </span>
                    </div>

                    <span class="price">
                      <ins>
                        <span class="amount">$330.00</span>
                      </ins>                        
                    </span>

                    <div class="product-description">
                      <h3 class="product-title">
                        <a href="{{ route('product-details') }}">Tribal Grey Blazer</a>
                      </h3>
                      <span class="price">
                        <ins>
                          <span class="amount">$330.00</span>
                        </ins>                        
                      </span>
                      <span class="rating">
                        <a href="#">3 Reviews</a>
                      </span>
                      <div class="clear"></div>
                      <p>Zenna Shop is a very slick and clean e-commerce template with endless possibilities. Creating an awesome clothes store with this Theme is easy than you can imagine. Grab this theme now.</p>
                      <a href="#" class="btn btn-dark btn-md left"><span>Add to Cart</span></a>
                      <div class="product-add-to-wishlist">
                        <a href="#"><i class="fa fa-heart"></i></a>
                      </div>
                    </div>

                  </div>
                </div> <!-- end product -->


                <div class="col-md-4 col-xs-6 product product-grid">
                  <div class="product-item clearfix">
                    <div class="product-img hover-trigger">
                      <a href="{{ route('product-details') }}">
                        <img src="{{ asset('/') }}frontend-2/img/shop/shop_item_4.jpg" alt="">
                        <img src="{{ asset('/') }}frontend-2/img/shop/shop_item_back_4.jpg" alt="" class="back-img">
                      </a>
                      <div class="hover-2">                    
                        <div class="product-actions">
                          <a href="#" class="product-add-to-wishlist">
                            <i class="fa fa-heart"></i>
                          </a>
                        </div>                        
                      </div>
                      <a href="#" class="product-quickview">Quick View</a>
                    </div>

                    <div class="product-details">
                      <h3 class="product-title">
                        <a href="{{ route('product-details') }}">Sweater w/ Colar</a>
                      </h3>
                      <span class="category">
                        <a href="catalogue-grid.html">Men</a>
                      </span>
                    </div>

                    <span class="price">
                      <ins>
                        <span class="amount">$299.00</span>
                      </ins>                        
                    </span>

                    <div class="product-description">
                      <h3 class="product-title">
                        <a href="{{ route('product-details') }}">Sweater w/ Colar</a>
                      </h3>
                      <span class="price">
                        <ins>
                          <span class="amount">$299.00</span>
                        </ins>                        
                      </span>
                      <span class="rating">
                        <a href="#">3 Reviews</a>
                      </span>
                      <div class="clear"></div>
                      <p>Zenna Shop is a very slick and clean e-commerce template with endless possibilities. Creating an awesome clothes store with this Theme is easy than you can imagine. Grab this theme now.</p>
                      <a href="#" class="btn btn-dark btn-md left"><span>Add to Cart</span></a>
                      <div class="product-add-to-wishlist">
                        <a href="#"><i class="fa fa-heart"></i></a>
                      </div>
                    </div>

                  </div>
                </div> <!-- end product -->


                <div class="col-md-4 col-xs-6 product product-grid">
                  <div class="product-item clearfix">
                    <div class="product-img hover-trigger">
                      <a href="{{ route('product-details') }}">
                        <img src="{{ asset('/') }}frontend-2/img/shop/shop_item_5.jpg" alt="">
                        <img src="{{ asset('/') }}frontend-2/img/shop/shop_item_back_5.jpg" alt="" class="back-img">
                      </a>
                      <div class="hover-2">                    
                        <div class="product-actions">
                          <a href="#" class="product-add-to-wishlist">
                            <i class="fa fa-heart"></i>
                          </a>
                        </div>                        
                      </div>
                      <a href="#" class="product-quickview">Quick View</a>
                    </div>

                    <div class="product-details">
                      <h3 class="product-title">
                        <a href="{{ route('product-details') }}">Lola May Crop Blazer</a>
                      </h3>
                      <span class="category">
                        <a href="catalogue-grid.html">Women</a>
                      </span>
                    </div>

                    <span class="price">
                      <ins>
                        <span class="amount">$42.00</span>
                      </ins>                        
                    </span>

                    <div class="product-description">
                      <h3 class="product-title">
                        <a href="{{ route('product-details') }}">Lola May Crop Blazer</a>
                      </h3>
                      <span class="price">
                        <ins>
                          <span class="amount">$42.00</span>
                        </ins>                        
                      </span>
                      <span class="rating">
                        <a href="#">3 Reviews</a>
                      </span>
                      <div class="clear"></div>
                      <p>Zenna Shop is a very slick and clean e-commerce template with endless possibilities. Creating an awesome clothes store with this Theme is easy than you can imagine. Grab this theme now.</p>
                      <a href="#" class="btn btn-dark btn-md left"><span>Add to Cart</span></a>
                      <div class="product-add-to-wishlist">
                        <a href="#"><i class="fa fa-heart"></i></a>
                      </div>
                    </div>

                  </div>
                </div> <!-- end product -->


                <div class="col-md-4 col-xs-6 product product-grid">
                  <div class="product-item clearfix">
                    <div class="product-img hover-trigger">
                      <a href="{{ route('product-details') }}">
                        <img src="{{ asset('/') }}frontend-2/img/shop/shop_item_6.jpg" alt="">
                        <img src="{{ asset('/') }}frontend-2/img/shop/shop_item_back_6.jpg" alt="" class="back-img">
                      </a>
                      <div class="product-label">
                        <span class="sale">sale</span>
                      </div>
                      <div class="hover-2">                    
                        <div class="product-actions">
                          <a href="#" class="product-add-to-wishlist">
                            <i class="fa fa-heart"></i>
                          </a>
                        </div>                        
                      </div>
                      <a href="#" class="product-quickview">Quick View</a>
                    </div>

                    <div class="product-details">
                      <h3 class="product-title">
                        <a href="{{ route('product-details') }}">Faux Suits</a>
                      </h3>
                      <span class="category">
                        <a href="catalogue-grid.html">Men</a>
                      </span>
                    </div>

                    <span class="price">
                      <del>
                        <span>$500.00</span>
                      </del>
                      <ins>
                        <span class="amount">$233.00</span>
                      </ins>                        
                    </span>

                    <div class="product-description">
                      <h3 class="product-title">
                        <a href="{{ route('product-details') }}">Faux Suits</a>
                      </h3>
                      <span class="price">
                        <del>
                          <span>$500.00</span>
                        </del>
                        <ins>
                          <span class="amount">$233.00</span>
                        </ins>                       
                      </span>
                      <span class="rating">
                        <a href="#">3 Reviews</a>
                      </span>
                      <div class="clear"></div>
                      <p>Zenna Shop is a very slick and clean e-commerce template with endless possibilities. Creating an awesome clothes store with this Theme is easy than you can imagine. Grab this theme now.</p>
                      <a href="#" class="btn btn-dark btn-md left"><span>Add to Cart</span></a>
                      <div class="product-add-to-wishlist">
                        <a href="#"><i class="fa fa-heart"></i></a>
                      </div>
                    </div>

                  </div>
                </div> <!-- end product -->


                <div class="col-md-4 col-xs-6 product product-grid">
                  <div class="product-item clearfix">
                    <div class="product-img hover-trigger">
                      <a href="{{ route('product-details') }}">
                        <img src="{{ asset('/') }}frontend-2/img/shop/shop_item_7.jpg" alt="">
                        <img src="{{ asset('/') }}frontend-2/img/shop/shop_item_back_7.jpg" alt="" class="back-img">
                      </a>
                      <div class="hover-2">                    
                        <div class="product-actions">
                          <a href="#" class="product-add-to-wishlist">
                            <i class="fa fa-heart"></i>
                          </a>
                        </div>                        
                      </div>
                      <a href="#" class="product-quickview">Quick View</a>
                    </div>

                    <div class="product-details">
                      <h3 class="product-title">
                        <a href="{{ route('product-details') }}">Crew Watch</a>
                      </h3>
                      <span class="category">
                        <a href="catalogue-grid.html">Accessories</a>
                      </span>
                    </div>

                    <span class="price">
                      <ins>
                        <span class="amount">$280.00</span>
                      </ins>                       
                    </span>

                    <div class="product-description">
                      <h3 class="product-title">
                        <a href="{{ route('product-details') }}">Crew Watch</a>
                      </h3>
                      <span class="price">
                        <ins>
                          <span class="amount">$280.00</span>
                        </ins>                       
                      </span>
                      <span class="rating">
                        <a href="#">3 Reviews</a>
                      </span>
                      <div class="clear"></div>
                      <p>Zenna Shop is a very slick and clean e-commerce template with endless possibilities. Creating an awesome clothes store with this Theme is easy than you can imagine. Grab this theme now.</p>
                      <a href="#" class="btn btn-dark btn-md left"><span>Add to Cart</span></a>
                      <div class="product-add-to-wishlist">
                        <a href="#"><i class="fa fa-heart"></i></a>
                      </div>
                    </div>

                  </div>
                </div> <!-- end product -->


                <div class="col-md-4 col-xs-6 product product-grid">
                  <div class="product-item clearfix">
                    <div class="product-img hover-trigger">
                      <a href="{{ route('product-details') }}">
                        <img src="{{ asset('/') }}frontend-2/img/shop/shop_item_8.jpg" alt="">
                        <img src="{{ asset('/') }}frontend-2/img/shop/shop_item_back_8.jpg" alt="" class="back-img">
                      </a>
                      <div class="hover-2">                    
                        <div class="product-actions">
                          <a href="#" class="product-add-to-wishlist">
                            <i class="fa fa-heart"></i>
                          </a>
                        </div>                        
                      </div>
                      <a href="#" class="product-quickview">Quick View</a>
                    </div>

                    <div class="product-details">
                      <h3 class="product-title">
                        <a href="{{ route('product-details') }}">Jersey Stylish</a>
                      </h3>
                      <span class="category">
                        <a href="catalogue-grid.html">Women</a>
                      </span>
                    </div>

                    <span class="price">
                      <ins>
                        <span class="amount">$298.00</span>
                      </ins>                       
                    </span>

                    <div class="product-description">
                      <h3 class="product-title">
                        <a href="{{ route('product-details') }}">Jersey Stylish</a>
                      </h3>
                      <span class="price">
                        <ins>
                          <span class="amount">$298.00</span>
                        </ins>                       
                      </span>
                      <span class="rating">
                        <a href="#">3 Reviews</a>
                      </span>
                      <div class="clear"></div>
                      <p>Zenna Shop is a very slick and clean e-commerce template with endless possibilities. Creating an awesome clothes store with this Theme is easy than you can imagine. Grab this theme now.</p>
                      <a href="#" class="btn btn-dark btn-md left"><span>Add to Cart</span></a>
                      <div class="product-add-to-wishlist">
                        <a href="#"><i class="fa fa-heart"></i></a>
                      </div>
                    </div>

                  </div>
                </div> <!-- end product -->


                <div class="col-md-4 col-xs-6 product product-grid">
                  <div class="product-item clearfix">
                    <div class="product-img hover-trigger">
                      <a href="{{ route('product-details') }}">
                        <img src="{{ asset('/') }}frontend-2/img/shop/shop_item_9.jpg" alt="">
                        <img src="{{ asset('/') }}frontend-2/img/shop/shop_item_back_9.jpg" alt="" class="back-img">
                      </a>
                      <div class="hover-2">                    
                        <div class="product-actions">
                          <a href="#" class="product-add-to-wishlist">
                            <i class="fa fa-heart"></i>
                          </a>
                        </div>                        
                      </div>
                      <a href="#" class="product-quickview">Quick View</a>
                    </div>

                    <div class="product-details">
                      <h3 class="product-title">
                        <a href="{{ route('product-details') }}">Camo Belt</a>
                      </h3>
                      <span class="category">
                        <a href="catalogue-grid.html">Accessories</a>
                      </span>
                    </div>

                    <span class="price">
                      <ins>
                        <span class="amount">$33.00</span>
                      </ins>                       
                    </span>

                    <div class="product-description">
                      <h3 class="product-title">
                        <a href="{{ route('product-details') }}">Camo Belt</a>
                      </h3>
                      <span class="price">
                        <ins>
                          <span class="amount">$33.00</span>
                        </ins>                       
                      </span>
                      <span class="rating">
                        <a href="#">3 Reviews</a>
                      </span>
                      <div class="clear"></div>
                      <p>Zenna Shop is a very slick and clean e-commerce template with endless possibilities. Creating an awesome clothes store with this Theme is easy than you can imagine. Grab this theme now.</p>
                      <a href="#" class="btn btn-dark btn-md left"><span>Add to Cart</span></a>
                      <div class="product-add-to-wishlist">
                        <a href="#"><i class="fa fa-heart"></i></a>
                      </div>
                    </div>

                  </div>
                </div> <!-- end product -->


                <div class="col-md-4 col-xs-6 product product-grid">
                  <div class="product-item clearfix">
                    <div class="product-img hover-trigger">
                      <a href="{{ route('product-details') }}">
                        <img src="{{ asset('/') }}frontend-2/img/shop/shop_item_10.jpg" alt="">
                        <img src="{{ asset('/') }}frontend-2/img/shop/shop_item_back_10.jpg" alt="" class="back-img">
                      </a>
                      <div class="hover-2">                    
                        <div class="product-actions">
                          <a href="#" class="product-add-to-wishlist">
                            <i class="fa fa-heart"></i>
                          </a>
                        </div>                        
                      </div>
                      <a href="#" class="product-quickview">Quick View</a>
                    </div>

                    <div class="product-details">
                      <h3 class="product-title">
                        <a href="{{ route('product-details') }}">Heathered Scarf</a>
                      </h3>
                      <span class="category">
                        <a href="catalogue-grid.html">Accessories</a>
                      </span>
                    </div>

                    <span class="price">
                      <ins>
                        <span class="amount">$180.00</span>
                      </ins>                       
                    </span>

                    <div class="product-description">
                      <h3 class="product-title">
                        <a href="{{ route('product-details') }}">Heathered Scarf</a>
                      </h3>
                      <span class="price">
                        <ins>
                          <span class="amount">$180.00</span>
                        </ins>                       
                      </span>
                      <span class="rating">
                        <a href="#">3 Reviews</a>
                      </span>
                      <div class="clear"></div>
                      <p>Zenna Shop is a very slick and clean e-commerce template with endless possibilities. Creating an awesome clothes store with this Theme is easy than you can imagine. Grab this theme now.</p>
                      <a href="#" class="btn btn-dark btn-md left"><span>Add to Cart</span></a>
                      <div class="product-add-to-wishlist">
                        <a href="#"><i class="fa fa-heart"></i></a>
                      </div>
                    </div>

                  </div>
                </div> <!-- end product -->


                <div class="col-md-4 col-xs-6 product product-grid">
                  <div class="product-item clearfix">
                    <div class="product-img hover-trigger">
                      <a href="{{ route('product-details') }}">
                        <img src="{{ asset('/') }}frontend-2/img/shop/shop_item_11.jpg" alt="">
                        <img src="{{ asset('/') }}frontend-2/img/shop/shop_item_back_11.jpg" alt="" class="back-img">
                      </a>
                      <div class="hover-2">                    
                        <div class="product-actions">
                          <a href="#" class="product-add-to-wishlist">
                            <i class="fa fa-heart"></i>
                          </a>
                        </div>                        
                      </div>
                      <a href="#" class="product-quickview">Quick View</a>
                    </div>

                    <div class="product-details">
                      <h3 class="product-title">
                        <a href="{{ route('product-details') }}">Mantle Brown Bag</a>
                      </h3>
                      <span class="category">
                        <a href="catalogue-grid.html">Accessories</a>
                      </span>
                    </div>

                    <span class="price">
                      <ins>
                        <span class="amount">$150.00</span>
                      </ins>                       
                    </span>

                    <div class="product-description">
                      <h3 class="product-title">
                        <a href="{{ route('product-details') }}">Mantle Brown Bag</a>
                      </h3>
                      <span class="price">
                        <ins>
                          <span class="amount">$150.00</span>
                        </ins>                       
                      </span>
                      <span class="rating">
                        <a href="#">3 Reviews</a>
                      </span>
                      <div class="clear"></div>
                      <p>Zenna Shop is a very slick and clean e-commerce template with endless possibilities. Creating an awesome clothes store with this Theme is easy than you can imagine. Grab this theme now.</p>
                      <a href="#" class="btn btn-dark btn-md left"><span>Add to Cart</span></a>
                      <div class="product-add-to-wishlist">
                        <a href="#"><i class="fa fa-heart"></i></a>
                      </div>
                    </div>

                  </div>
                </div> <!-- end product -->


                <div class="col-md-4 col-xs-6 product product-grid">
                  <div class="product-item clearfix">
                    <div class="product-img hover-trigger">
                      <a href="{{ route('product-details') }}">
                        <img src="{{ asset('/') }}frontend-2/img/shop/shop_item_12.jpg" alt="">
                        <img src="{{ asset('/') }}frontend-2/img/shop/shop_item_back_12.jpg" alt="" class="back-img">
                      </a>
                      <div class="product-label">
                        <span class="sale">sale</span>
                      </div>
                      <div class="hover-2">                    
                        <div class="product-actions">
                          <a href="#" class="product-add-to-wishlist">
                            <i class="fa fa-heart"></i>
                          </a>
                        </div>                        
                      </div>
                      <a href="#" class="product-quickview">Quick View</a>
                    </div>

                    <div class="product-details">
                      <h3 class="product-title">
                        <a href="{{ route('product-details') }}">Sport T-shirt</a>
                      </h3>
                      <span class="category">
                        <a href="catalogue-grid.html">Men</a>
                      </span>
                    </div>

                    <span class="price">
                      <del>
                        <span>$500.00</span>
                      </del>
                      <ins>
                        <span class="amount">$230.00</span>
                      </ins>                       
                    </span>

                    <div class="product-description">
                      <h3 class="product-title">
                        <a href="{{ route('product-details') }}">Sport T-shirt</a>
                      </h3>
                      <span class="price">
                        <del>
                          <span>$500.00</span>
                        </del>
                        <ins>
                          <span class="amount">$230.00</span>
                        </ins>                       
                      </span>
                      <span class="rating">
                        <a href="#">3 Reviews</a>
                      </span>
                      <div class="clear"></div>
                      <p>Zenna Shop is a very slick and clean e-commerce template with endless possibilities. Creating an awesome clothes store with this Theme is easy than you can imagine. Grab this theme now.</p>
                      <a href="#" class="btn btn-dark btn-md left"><span>Add to Cart</span></a>
                      <div class="product-add-to-wishlist">
                        <a href="#"><i class="fa fa-heart"></i></a>
                      </div>
                    </div>

                  </div>
                </div> <!-- end product -->

              </div> <!-- end row -->
            </div> <!-- end grid mode -->
            
            <!-- Pagination -->
            <div class="pagination-wrap clearfix">
              <p class="result-count">Showing: 12 of 80 results</p>                 
              <nav class="pagination right clearfix">
                <a href="#"><i class="fa fa-angle-left"></i></a>
                <span class="page-numbers current">1</span>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#"><i class="fa fa-angle-right"></i></a>
              </nav>
            </div>

          </div> <!-- end col -->

        </div> <!-- end row -->
      </div> <!-- end container -->
    </section> <!-- end catalog -->


    <!-- Newsletter -->
    <section class="newsletter" id="subscribe">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h4>Get the latest updates</h4>
            <form class="relative newsletter-form">
              <input type="email" class="newsletter-input" placeholder="Enter your email">
              <input type="submit" class="btn btn-lg btn-dark newsletter-submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>       
    </section>

    <!-- Footer Type-1 -->
    <footer class="footer footer-type-1">
      <div class="container">
        <div class="footer-widgets">
          <div class="row">

            <div class="col-md-3 col-sm-12 col-xs-12">
              <div class="widget footer-about-us">
                <img src="{{ asset('/') }}frontend-2/img/logo_dark.png" alt="" class="logo">
                <p class="mb-30">Zenna Shop is a very slick and clean eCommerce template.</p>
                <div class="footer-socials">
                  <div class="social-icons nobase">
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                  </div>
                </div>
              </div>
            </div> <!-- end about us -->

            <div class="col-md-2 col-md-offset-1 col-sm-6 col-xs-12">
              <div class="widget footer-links">
                <h5 class="widget-title bottom-line left-align grey">Information</h5>
                <ul class="list-no-dividers">
                  <li><a href="#">Our stores</a></li>
                  <li><a href="#">About us</a></li>
                  <li><a href="#">Business with us</a></li>
                  <li><a href="#">Delivery information</a></li>
                </ul>
              </div>
            </div>

            <div class="col-md-2 col-sm-6 col-xs-12">
              <div class="widget footer-links">
                <h5 class="widget-title bottom-line left-align grey">Account</h5>
                <ul class="list-no-dividers">                  
                  <li><a href="#">My account</a></li>
                  <li><a href="#">Wishlist</a></li>
                  <li><a href="#">Order history</a></li>
                  <li><a href="#">Specials</a></li>
                </ul>
              </div>
            </div>

            <div class="col-md-2 col-sm-6 col-xs-12">
              <div class="widget footer-links">
                <h5 class="widget-title bottom-line left-align grey">Useful Links</h5>
                <ul class="list-no-dividers">
                  <li><a href="#">Shipping Policy</a></li>
                  <li><a href="#">Stores</a></li>
                  <li><a href="#">Returns</a></li>
                  <li><a href="#">Terms &amp; Conditions</a></li>
                </ul>
              </div>
            </div>

            <div class="col-md-2 col-sm-6 col-xs-12">
              <div class="widget footer-links">
                <h5 class="widget-title bottom-line left-align grey">Service</h5>
                <ul class="list-no-dividers">
                  <li><a href="#">Support</a></li>
                  <li><a href="#">Warranty</a></li>
                  <li><a href="#">FAQ</a></li>
                  <li><a href="#">Contact</a></li>
                </ul>
              </div>
            </div>

          </div>
        </div>    
      </div> <!-- end container -->

      <div class="bottom-footer">
        <div class="container">
          <div class="row">

            <div class="col-sm-6 copyright sm-text-center">
              <span>
                &copy; 2017 Zenna Theme, Made by <a href="http://deothemes.com">DeoThemes</a>
              </span>
            </div>

            <div class="col-sm-6 col-xs-12 footer-payment-systems text-right sm-text-center mt-sml-10">
              <i class="fa fa-cc-paypal"></i>
              <i class="fa fa-cc-visa"></i>
              <i class="fa fa-cc-mastercard"></i>
              <i class="fa fa-cc-discover"></i>
              <i class="fa fa-cc-amex"></i>
            </div>

          </div>
        </div>
      </div> <!-- end bottom footer -->
    </footer> <!-- end footer -->

    <div id="back-to-top">
      <a href="#top"><i class="fa fa-angle-up"></i></a>
    </div>

  </div> <!-- end content wrapper -->

@endsection
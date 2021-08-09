@extends('front.master')
@section('title')
    Single Product
@endsection
@push('css')

@endpush

@section('content')


    <!-- Single Product -->
    <section class="section-wrap pb-40 single-product">
        <div class="container-fluid semi-fluid">
            <div class="row">

                <div class="col-md-6 col-xs-12 product-slider mb-60">

                    <div class="flickity flickity-slider-wrap mfp-hover" id="gallery-main">
                        @php
                            //  dd($art->extra_images)
                            if ($art->extra_images) {
                                $extra_images = explode(',', $art->extra_images);
                            }
                        @endphp


                        {{-- <div class="gallery-cell">
              <a href="{{ asset('/') }}frontend/images/shop/item_lg_1.jpg" class="lightbox-img">
                <img src="{{ asset('/') }}frontend/images/shop/item_lg_1.jpg" alt="" />
                <i class="ui-zoom zoom-icon"></i>
              </a>
            </div> --}}
                        <div class="gallery-cell">
                            <a href="{{ @$art->main_images ? asset('images/art/' . @$art->main_images) : '' }}"
                                class="lightbox-img">
                                <img src="{{ @$art->main_images ? asset('images/art/' . @$art->main_images) : '' }}"
                                    alt="" />
                                <i class="ui-zoom zoom-icon"></i>
                            </a>
                        </div>

                        @if ($art->extra_images)

                            @foreach ($extra_images as $extra_image)
                                <div class="gallery-cell">
                                    <a href="{{ asset('extra_image/art/' . $extra_image) }}" class="lightbox-img">
                                        <img src="{{ asset('extra_image/art/' . $extra_image) }}" alt="" />
                                        <i class="ui-zoom zoom-icon"></i>
                                    </a>
                                </div>

                            @endforeach

                        @endif



                    </div>
                    <!-- end gallery main -->

                    <div class="gallery-thumbs">
                        <div class="gallery-cell">
                            <img src="{{ @$art->main_images ? asset('images/art/' . @$art->main_images) : '' }}" alt="" />
                        </div>
                        @if ($art->extra_images)

                            @foreach ($extra_images as $extra_image)
                                <div class="gallery-cell">
                                    <img src="{{ asset('extra_image/art/' . $extra_image) }}" alt="" />
                                </div>

                            @endforeach

                        @endif


                    </div> <!-- end gallery thumbs -->

                </div> <!-- end col img slider -->

                <div class="col-md-6 col-xs-12 product-description-wrap">
                    {{-- <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a href="index.html">Shop</a>
                        </li>
                        <li class="active">
                            Catalog
                        </li>
                    </ol> --}}
                    <h1 class="product-title">{{ $art->name }}</h1>
                    <span class="price">
                        <span class=""><b>Price : </b></span>

                        @if ($type == 'digital')
                            <ins>
                                <span class="amount">₹{{ $art->digital_art_sell }}</span>
                            </ins>
                            <del>
                                <span>₹{{ $art->digital_art_price }}</span>
                            </del>
                            <span class="">
                                {{ $art->digital_art_dis }}% off
                            </span>

                        @elseif($type=='physical')
                            <ins>
                                <span class="amount">₹{{ $art->physical_art_sell }}</span>
                            </ins>
                            <del>
                                <span>₹{{ $art->physical_art_price }} </span>
                            </del>
                            <span class="">
                                {{ $art->physical_art_dis }}% off
                            </span>

                        @endif
                    </span>

                    </span>
                    <span class="rating">
                        <a href="#">3 Reviews</a>
                    </span>
                    <div class="clearfix mt-2" style="margin-top: 10px">
                        <b>Description:</b>
                        <span>{{ $art->description }}</span>
                    </div>
                    <div class="clearfix mt-2" style="margin-top: 10px">
                        <b>Item ID:</b>
                        <span>{{ $art->item_id }}</span>
                    </div>
                    @if ($type == 'physical')
                        <div class="clearfix mt-2" style="margin-top: 10px">
                            <b>Fame color :</b>
                            <span>{{ $art->frame_color }}</span>
                        </div>
                    @endif

                    @if ($type == 'physical')
                        <div class="clearfix mt-2" style="margin-top: 10px">
                            <b>Material we used in painting :</b>
                            <span>{{ $art->materia_used_painting }}</span>
                        </div>
                    @endif


                    @if ($type == 'physical')
                        <div class="clearfix mt-2" style="margin-top: 10px">
                            <b>Physical are delivery time :</b>
                            <span>{{ $art->physical_art_delivery_time }}</span>
                        </div>
                    @endif

                    @if ($type == 'physical')
                        <div class="clearfix mt-2" style="margin-top: 10px">
                            <b>size of physical :</b>
                            <span>{{ $art->size_physical }}</span>
                        </div>
                    @endif






                    <div class="size-options clearfix" style="margin-top: 10px">
                        <span>Size:</span>
                        @if ($type == 'digital')

                        @elseif($type=='physical')

                        @endif
                        <a href="{{ route('art', ['art' => $art->id, 'type' => 'physical']) }}" class="size-s
                                   @if ($type=='physical' ) selected @endif">Physical
                        </a>
                        <a href="{{ route('art', ['art' => $art->id, 'type' => 'digital']) }}" class="size-s
                                   @if ($type=='digital' ) selected @endif">Digital</a>


                    </div>

                    <div class="product-actions">
                        <span>Qty:</span>

                        <div class="quantity buttons_added">
                            <input type="number" step="1" min="0" value="1" title="Qty" class="input-text qty text" />
                            <div class="quantity-adjust">
                                <a href="#" class="plus">
                                    <i class="fa fa-angle-up"></i>
                                </a>
                                <a href="#" class="minus">
                                    <i class="fa fa-angle-down"></i>
                                </a>
                            </div>
                        </div>

                        <a href="#" class="btn btn-dark btn-lg add-to-cart"><span>Add to Cart</span></a>

                        {{-- <a href="#" class="product-add-to-wishlist"><i class="fa fa-heart"></i></a> --}}
                    </div>



                    <!-- Accordion -->
                    <div class="panel-group accordion mb-50" id="accordion">
                        {{-- <div class="panel">
                            <div class="panel-heading">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                    class="minus">Description<span>&nbsp;</span>
                                </a>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    Zenna Theme is a very slick and clean e-commerce template with endless possibilities.
                                    Creating an awesome website. Amadea Theme is a very slick and clean e-commerce template
                                    with endless possibilities. Creating an awesome website. I would now like to introduce
                                    you to your second mind, the hidden and mysterious subconscious.
                                </div>
                            </div>
                        </div> --}}

                        <div class="panel">
                            <div class="panel-heading">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
                                    class="plus">Information<span>&nbsp;</span>
                                </a>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <table class="table shop_attributes">
                                        <tbody>


                                            <tr>
                                                <th>Note:</th>
                                                @if ($type == 'digital')
                                                    <td>{{ $art->digital_instructions }}</td>
                                                @elseif($type=='physical')
                                                    <td>{{ $art->physical_instructions }}</td>

                                                @endif

                                                @if ($art->digital == 1)

                                                @elseif($art->physical==1)
                                                    <td>{{ $art->physical_instructions }}</td>
                                                @endif



                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="panel">
                            <div class="panel-heading">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"
                                    class="plus">Reviews<span>&nbsp;</span>
                                </a>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="reviews">
                                        <ul class="reviews-list">
                                            <li>
                                                <div class="review-body">
                                                    <div class="review-content">
                                                        <p class="review-author"><strong>Alexander Samokhin</strong> - May
                                                            6, 2014 at 12:48 pm</p>
                                                        <div class="rating">
                                                            <a href="#"></a>
                                                        </div>
                                                        <p>This template is so awesome. I didn’t expect so many features
                                                            inside. E-commerce pages are very useful, you can launch your
                                                            online store in few seconds. I will rate 5 stars.</p>
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="review-body">
                                                    <div class="review-content">
                                                        <p class="review-author"><strong>Christopher Robins</strong> - May
                                                            6, 2014 at 12:48 pm</p>
                                                        <div class="rating">
                                                            <a href="#"></a>
                                                        </div>
                                                        <p>This template is so awesome. I didn’t expect so many features
                                                            inside. E-commerce pages are very useful, you can launch your
                                                            online store in few seconds. I will rate 5 stars.</p>
                                                    </div>
                                                </div>
                                            </li>

                                        </ul>
                                    </div> <!--  end reviews -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="socials-share clearfix">
                        <span>Share:</span>
                        <div class="social-icons nobase">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-google"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div> <!-- end col product description -->
            </div> <!-- end row -->

        </div> <!-- end container -->
    </section> <!-- end single product -->


    <!-- Related Products -->
    <section class="section-wrap pt-0 shop-items-slider">
        <div class="container">
            <div class="row heading-row">
                <div class="col-md-12 text-center">
                    <h2 class="heading bottom-line">
                        Related Products
                    </h2>
                </div>
            </div>

            <div class="row">

                <div id="owl-related-items" class="owl-carousel owl-theme">
                    <div class="product">
                        <div class="product-item hover-trigger">
                            <div class="product-img">
                                <a href="shop-single.html">
                                    <img src="{{ asset('/') }}frontend/images/shop/shop_item_3.jpg" alt="">
                                    <img src="{{ asset('/') }}frontend/images/shop/shop_item_back_3.jpg" alt=""
                                        class="back-img">
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
                                    <a href="shop-single.html">Tribal Grey Blazer</a>
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
                                    <span class="amount">$399.99</span>
                                </ins>
                            </span>
                        </div>
                    </div>

                    <div class="product">
                        <div class="product-item hover-trigger">
                            <div class="product-img">
                                <a href="shop-single.html">
                                    <img src="{{ asset('/') }}frontend/images/shop/shop_item_11.jpg" alt="">
                                    <img src="{{ asset('/') }}frontend/images/shop/shop_item_back_11.jpg" alt=""
                                        class="back-img">
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
                                    <a href="shop-single.html">Mantle Brown Bag</a>
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
                        </div>
                    </div>

                    <div class="product">
                        <div class="product-item hover-trigger">
                            <div class="product-img">
                                <a href="shop-single.html">
                                    <img src="{{ asset('/') }}frontend/images/shop/shop_item_6.jpg" alt="">
                                    <img src="{{ asset('/') }}frontend/images/shop/shop_item_back_6.jpg" alt=""
                                        class="back-img">
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
                                    <a href="shop-single.html">Faux Suits</a>
                                </h3>
                                <span class="category">
                                    <a href="catalogue-grid.html">Men</a>
                                </span>
                            </div>
                            <span class="price">
                                <ins>
                                    <span class="amount">$233.00</span>
                                </ins>
                            </span>
                        </div>
                    </div>

                    <div class="product">
                        <div class="product-item hover-trigger">
                            <div class="product-img">
                                <a href="shop-single.html">
                                    <img src="{{ asset('/') }}frontend/images/shop/shop_item_4.jpg" alt="">
                                    <img src="{{ asset('/') }}frontend/images/shop/shop_item_back_4.jpg" alt=""
                                        class="back-img">
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
                                    <a href="shop-single.html">Sweater w/ Colar</a>
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
                        </div>
                    </div>

                    <div class="product">
                        <div class="product-item hover-trigger">
                            <div class="product-img">
                                <a href="shop-single.html">
                                    <img src="{{ asset('/') }}frontend/images/shop/shop_item_5.jpg" alt="">
                                    <img src="{{ asset('/') }}frontend/images/shop/shop_item_back_5.jpg" alt=""
                                        class="back-img">
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
                                    <a href="shop-single.html">Lola May Crop Blazer</a>
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
                        </div>
                    </div>

                    <div class="product">
                        <div class="product-item hover-trigger">
                            <div class="product-img">
                                <a href="shop-single.html">
                                    <img src="{{ asset('/') }}frontend/images/shop/shop_item_6.jpg" alt="">
                                    <img src="{{ asset('/') }}frontend/images/shop/shop_item_back_6.jpg" alt=""
                                        class="back-img">
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
                                    <a href="shop-single.html">Faux Suits</a>
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
                        </div>
                    </div>

                </div> <!-- end slider -->

            </div>
        </div>
    </section> <!-- end related products -->
@endsection
@php
$price = 0;

@endphp

@if ($type == 'digital')
    @php
        $price = $art->digital_art_sell;
    @endphp
@elseif($type=='physical')
    @php
        $price = $art->physical_art_sell;
    @endphp
@endif


@push('js')
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        $('.add-to-cart').click(function(e) {
            e.preventDefault();
            axios.post('{{ route('cart.add') }}', {
                    id: "{{ $art->id }}",
                    type: "{{ $type }}",
                    qty: $('.qty').val(),
                    price: "{{ $price }}"

                })
                .then(function(response) {
                    console.log(response);
                })
                .catch(function(error) {
                    console.log(error);
                });

        });
    </script>
@endpush

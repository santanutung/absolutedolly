@extends('front.master')
@section('title')
    Single Product
@endsection
@push('css')

    <style>
        .rate span.fa {
            font-size: 40px;
        }

        .example_a {
            color: #fff !important;
            text-transform: uppercase;
            text-decoration: none;
            background: #414040;
            padding: 10px 15px;

            display: inline-block;
            border: none;
            transition: all 0.4s ease 0s;
        }

        .example_a:hover {
            background: #434343;
            letter-spacing: 1px;
            -webkit-box-shadow: 0px 5px 40px -10px rgba(0, 0, 0, 0.57);
            -moz-box-shadow: 0px 5px 40px -10px rgba(0, 0, 0, 0.57);
            box-shadow: 5px 40px -10px rgba(0, 0, 0, 0.57);
            transition: all 0.4s ease 0s;
        }

        .rate .checked {
            color: orange;
        }

        .fa-star {
            cursor: pointer
        }

        /* */

    </style>

    @php
    $avarag_comment = $comments->avg('rating');
    $avarag_comment = round($avarag_comment);
    if ($avarag_comment == 1) {
        $content = '\f005 \f006 \f006 \f006 \f006';
    } elseif ($avarag_comment == 2) {
        $content = '\f005 \f005 \f006 \f006 \f006';
    } elseif ($avarag_comment == 3) {
        $content = '\f005 \f005 \f005 \f006 \f006';
    } elseif ($avarag_comment == 4) {
        $content = '\f005 \f005 \f005 \f005 \f006';
    } elseif ($avarag_comment == 5) {
        $content = '\f005 \f005 \f005 \f005 \f005';
    } else{
       $content = '\f005 \f005 \f005 \f005 \f005';
    }

    //  $content = '\f005 \f005 \f005 \f006 \f123';


    @endphp

    <style>
        .rating:before {
            content: "{{ $content }}" !important;

        }

    </style>
    {{-- <link rel="stylesheet"
                        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
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
                        <a href="#">{{ $comments->count() }} Reviews</a>
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
                                            @foreach ($comments as $comment)
                                                <li>
                                                    <div class="review-body">
                                                        <div class="review-content">
                                                            <p class="review-author"><strong>{{ $comment->name }}</strong>
                                                                - {{ $comment->created_at->format('M d,  Y') }}
                                                                at {{ $comment->created_at->format('h:i a') }}</p>
                                                            <div class="rating">
                                                                <a href="#"></a>
                                                            </div>
                                                            <p>{{ $comment->comment }}</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach


                                        </ul>
                                    </div> <!--  end reviews -->
                                </div>
                            </div>
                        </div>
                    </div>
                    @php
                        $url = 'https://www.youtube.com/';
                        $url = $_SERVER['REQUEST_URI'];
                        $url = url('/') . $url;

                    @endphp

                    <div class="socials-share clearfix">
                        <span>Share:</span>
                        <div class="social-icons nobase">




                            <a target="blank" href="https://twitter.com/intent/tweet?url={{ $url }}"><i
                                    class="fa fa-twitter"></i></a>
                            <a href="whatsapp://send?text={{ $url }}"><i class="fa fa-whatsapp"></i></a>
                            <a class="twitter" href="https://twitter.com/intent/tweet?status={{ $url }}"
                                target="blank"><i class="fa fa-twitter"></i></a>

                            <a class="facebook" href="https://www.facebook.com/share.php?u={{ $url }}"
                                target="blank"><i class="fa fa-facebook"></i></a>
                            {{-- <a href="#"><i class="fa fa-google"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a> --}}
                        </div>
                        <br>
                        <br>
                        <button class="example_a" id="comments_modal" type="button">Comment Now</button>
                    </div>
                </div> <!-- end col product description -->
            </div> <!-- end row -->

        </div> <!-- end container -->
    </section> <!-- end single product -->





    <div class="modal fade" id="comment_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" id="modal-content">

                <div class="panel">
                    <div class="panel-body">
                        <div class="rate">
                            <form>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Rate now</label>

                                    <br>
                                    <span class="fa fa-star one" onclick="rate(1)"></span>
                                    <span class="fa fa-star two " onclick="rate(2)"></span>
                                    <span class="fa fa-star  three" onclick="rate(3)"></span>
                                    <span class="fa fa-star   four" onclick="rate(4)"></span>
                                    <span class="fa fa-star  five" onclick="rate(5)"></span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Comment</label>
                                    <textarea class="form-control" id="comment" rows="3"></textarea>
                                </div>
                                <div class="modal-footer" style="border:none">
                                    <button type="button" class="example_a" data-dismiss="modal">Close</button>
                                    <button type="button" class="example_a" id="rate_now">Submit</button>
                                </div>
                                {{-- <button type="submit" class="example_a float-right">Submit</button> --}}
                            </form>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection
@php
$price = 0;

if (Auth::guest()) {
    $auth_guest = 1;
} else {
    $auth_guest = 0;
}

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
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        $('#rate_now').click(function(e) {
            e.preventDefault();
            axios.post('{{ route('rate_now') }}', {
                    art_id: "{{ $art->id }}",
                    type: "{{ $type }}",
                    rating: rate_no,
                    comment: $('#comment').val()

                })
                .then(function(response) {
                    if (response.data == 1) {
                        toastr.success('Comment created successfully', 'success');
                        $('#comment').val('');
                        $('#comment_modal').modal('hide')
                    } else {
                        toastr.error('Someting is wrong', 'Error!')
                    }
                })
                .catch(function(error) {
                    console.log(error);
                });

        });
    </script>


    <script>
        // console.log({{ $url }});

        var rate_no = 0;

        function rate(no) {


            if (no == 1) {

                $('.one').addClass('checked');
                $('.two, .three, .four,.five').removeClass('checked');
                rate_no = 1;

                //  one two three four five
                //  $('.one').hasClass(className);

            } else if (no == 2) {
                $('.two, .one').addClass('checked');
                $('.three, .four,.five').removeClass('checked');
                rate_no = 2;

            }
            if (no == 3) {
                $('.two, .one,.three').addClass('checked');
                $('.four,.five').removeClass('checked');
                rate_no = 3;

            }
            if (no == 4) {
                $('.two, .one,.three, .four').addClass('checked');
                $('.five').removeClass('checked');
                rate_no = 4;

            }
            if (no == 5) {
                rate_no = 5;
                $('.two, .one,.three, .four,.five').addClass('checked');
                //   $('').removeClass('checked');

            }







            //          if (this.checked) {
            //         console.log('yes')
            // // the checkbox is now checked
            //     } else {
            // console.log('no')
            // // the checkbox is now no longer checked
            //  }
        }



        $('#comments_modal').click(function(e) {
            // e.preventDefault();


            var gest = "{{ $auth_guest }}";

            if (gest == 1) {

                toastr.error('Please Login first', 'Error!')
            } else {
                comments_modal();
            }
        });

        function comments_modal() {
            $('#comment_modal').modal('show')

        }
    </script>
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
                    if (response.data == 1) {
                        toastr.success('Art  added successfully', 'success');

                    } else if (response.data == 0) {
                        toastr.error('Some thing is worng !', 'Error!');
                    }

                })
                .catch(function(error) {
                    console.log(error);
                });

        });
    </script>
@endpush

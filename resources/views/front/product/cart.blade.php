@extends('front.master')

@section('title')
    Cart
@endsection
@push('css')

@endpush

@section('content')

    <!-- Page Title -->
    <section class="page-title text-center bg-light">
        <div class="container relative clearfix">
            <div class="title-holder">
                <div class="title-text">
                    <h1 class="uppercase"> Cart</h1>
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{ url('/') }}">Home</a>
                        </li>

                        <li class="active">
                            Cart
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>



    <!-- Cart -->
    <section class="section-wrap shopping-cart">
        <div class="container relative">
            <div class="row">

                <div class="col-md-12">
                    @if ($total_item)


                        @if ($digital_count)
                            <div class="table-wrap mb-30">
                                <h3 class="uppercase"> Digital</h3>
                                <table class="shop_table cart table">
                                    <thead>
                                        <tr>
                                            <th class="product-name" colspan="2">Art</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal" colspan="2">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($digital_items as $digital_item)
                                            {{-- {{dd($digital_item->qty)}} --}}
                                            <tr class="cart_item digital_remove_{{$digital_item->id}}">
                                                <td class="product-thumbnail">
                                                    <a
                                                        href="{{ route('art', ['art' => $digital_item->associatedModel->id, 'type' => 'physical']) }}">
                                                        <img src="{{ $digital_item->associatedModel->main_images ? asset('images/art/' . @$digital_item->associatedModel->main_images) : '' }}"
                                                            alt="">
                                                    </a>
                                                </td>
                                                <td class="product-name">
                                                    <a
                                                        href="{{ route('art', ['art' => $digital_item->associatedModel->id, 'type' => 'physical']) }}">{{ $digital_item->name }}</a>
                                                    <ul>
                                                        <li>Type: Digital</li>
                                                        {{-- <li>Color: White</li> --}}
                                                    </ul>
                                                </td>
                                                <td class="product-price">
                                                    <span class="amount">{{ $digital_item->price }}</span>
                                                </td>
                                                <td class="product-quantity">
                                                    <div class="quantity buttons_added">
                                                        <input type="number" step="1" min="0" id=""
                                                            data-price="{{ $digital_item->price }}"
                                                            data-id="{{ $digital_item->id }}"
                                                            value="{{ $digital_item->quantity }}" title="Qty"
                                                            class="input-text qty text digital_qt">
                                                        <div class="quantity-adjust">
                                                            <a href="#" class="plus">
                                                                <i class="fa fa-angle-up"></i>
                                                            </a>
                                                            <a href="#" class="minus">
                                                                <i class="fa fa-angle-down"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="product-subtotal">
                                                    <span
                                                        class="amount  amount-{{ $digital_item->id }}">{{ $digital_item->price * $digital_item->quantity }}</span>
                                                </td>
                                                <td class="product-remove">
                                                    <a href="#" class="remove digital_remove" data-id='{{$digital_item->id}}' title="Remove this item">
                                                        <i class="ui-close"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                        @endif

                        @if ($physical_count)
                            <div class="table-wrap mb-30">
                                <h3 class="uppercase">Physical </h3>
                                <table class="shop_table cart table">
                                    <thead>
                                        <tr>
                                            <th class="product-name" colspan="2">Art</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal" colspan="2">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($physical_items as $physical_item)
                                            {{-- {{dd($physical_item->qty)}} --}}
                                            <tr class="cart_item physical_remove_{{$physical_item->id}}">
                                                <td class="product-thumbnail">
                                                    <a
                                                        href="{{ route('art', ['art' => $physical_item->associatedModel->id, 'type' => 'physical']) }}">
                                                        <img src="{{ $physical_item->associatedModel->main_images ? asset('images/art/' . @$physical_item->associatedModel->main_images) : '' }}"
                                                            alt="">
                                                    </a>
                                                </td>
                                                <td class="product-name">
                                                    <a
                                                        href="{{ route('art', ['art' => $physical_item->associatedModel->id, 'type' => 'physical']) }}">{{ $physical_item->name }}</a>
                                                    <ul>
                                                        <li>Type: Physical</li>
                                                        {{-- <li>Color: White</li> --}}
                                                    </ul>
                                                </td>
                                                <td class="product-price">
                                                    <span class="amount">{{ $physical_item->price }}</span>
                                                </td>
                                                <td class="product-quantity">
                                                    <div class="quantity buttons_added">
                                                        <input type="number" step="1" min="0"
                                                            data-price="{{ $physical_item->price }}"
                                                            data-id="{{ $physical_item->id }}"
                                                            value="{{ $physical_item->quantity }}" title="Qty"
                                                            class="input-text qty text physical_qty">
                                                        <div class="quantity-adjust">
                                                            <a href="#" class="plus">
                                                                <i class="fa fa-angle-up"></i>
                                                            </a>
                                                            <a href="#" class="minus">
                                                                <i class="fa fa-angle-down"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="product-subtotal">
                                                    <span
                                                        class="amount amount-{{ $physical_item->id }}">{{ $physical_item->price * $physical_item->quantity }}</span>
                                                </td>
                                                <td class="product-remove">
                                                    <a href="#" class="remove physical_remove" data-id="{{$physical_item->id}}" title="Remove this item">
                                                        <i class="ui-close"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    @else
                        <h2> Your car is empty !</h2>
                    @endif

                    @php
                        $subtoal = @$physical_item->price * @$physical_item->quantity + @$digital_item->price * @$digital_item->quantity;
                    @endphp

                    @if ($total_item)

                        <div class="row mb-50">
                            <div class="col-md-5 col-sm-12">
                                {{-- <div class="cart_totals">
              <h2 class="heading relative bottom-line full-grey uppercase mb-30">Cart Totals</h2>

              <table class="table shop_table">
                <tbody>
                  <tr class="cart-subtotal">
                    <th>Cart Subtotal</th>
                    <td>
                      <span class="amount">{{ $subtoal }} INR</span>
                    </td>
                  </tr>
                  <tr class="shipping">
                    <th>Shipping</th>
                    <td>
                      <span>Free Shipping</span>
                    </td>
                  </tr>
                  <tr class="order-total">
                    <th>Order Total</th>
                    <td>
                      <strong><span class="amount total_amount">{{ $subtoal }} </span><span> INR</span></strong>
                    </td>
                  </tr>
                </tbody>
              </table>

            </div> --}}
                            </div>
                            <div class="col-md-5 col-sm-12"></div>

                            <div class="col-md-7">
                                <div class="actions">
                                    {{-- <input type="submit" name="update_cart" value="Update Cart" class="btn btn-lg btn-stroke"> --}}
                                    <div class="wc-proceed-to-checkout">
                                        <a href="{{ route('checkout') }}" class="btn btn-lg btn-dark"><span>proceed to
                                                checkout</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endif

                </div> <!-- end col -->
            </div> <!-- end row -->

            <div class="row">
                {{-- <div class="col-md-6 shipping-calculator-form">
          <h2 class="heading relative uppercase bottom-line full-grey mb-30">Calculate Shipping</h2>
          <p class="form-row form-row-wide">
            <select name="calc_shipping_country" id="calc_shipping_country" class="country_to_state" rel="calc_shipping_state">
              <option>Select a country???</option>
              <option value="AF">Afghanistan</option>
              <option value="AX">??land Islands</option>
              <option value="AL">Albania</option>
              <option value="DZ">Algeria</option>
              <option value="AS">American Samoa</option>
              <option value="AD">Andorra</option>
              <option value="AO">Angola</option>
              <option value="AI">Anguilla</option>
              <option value="AQ">Antarctica</option>
              <option value="AG">Antigua and Barbuda</option>
              <option value="AR">Argentina</option>
              <option value="AM">Armenia</option>
              <option value="AW">Aruba</option>
              <option value="AU">Australia</option>
              <option value="AT">Austria</option>
              <option value="AZ">Azerbaijan</option>
              <option value="BS">Bahamas</option>
              <option value="BH">Bahrain</option>
              <option value="BD">Bangladesh</option>
              <option value="BB">Barbados</option>
              <option value="BY">Belarus</option>
              <option value="BE">Belgium</option>
              <option value="BZ">Belize</option>
              <option value="BJ">Benin</option>
              <option value="BM">Bermuda</option>
              <option value="BT">Bhutan</option>
              <option value="BO">Bolivia, Plurinational State of</option>
              <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
              <option value="BA">Bosnia and Herzegovina</option>
              <option value="BW">Botswana</option>
              <option value="BV">Bouvet Island</option>
              <option value="BR">Brazil</option>
              <option value="IO">British Indian Ocean Territory</option>
              <option value="BN">Brunei Darussalam</option>
              <option value="BG">Bulgaria</option>
              <option value="BF">Burkina Faso</option>
              <option value="BI">Burundi</option>
              <option value="KH">Cambodia</option>
              <option value="CM">Cameroon</option>
              <option value="CA">Canada</option>
              <option value="CV">Cape Verde</option>
              <option value="KY">Cayman Islands</option>
              <option value="CF">Central African Republic</option>
              <option value="TD">Chad</option>
              <option value="CL">Chile</option>
              <option value="CN">China</option>
              <option value="CX">Christmas Island</option>
              <option value="CC">Cocos (Keeling) Islands</option>
              <option value="CO">Colombia</option>
              <option value="KM">Comoros</option>
              <option value="CG">Congo</option>
              <option value="CD">Congo, the Democratic Republic of the</option>
              <option value="CK">Cook Islands</option>
              <option value="CR">Costa Rica</option>
              <option value="CI">C??te d'Ivoire</option>
              <option value="HR">Croatia</option>
              <option value="CU">Cuba</option>
              <option value="CW">Cura??ao</option>
              <option value="CY">Cyprus</option>
              <option value="CZ">Czech Republic</option>
              <option value="DK">Denmark</option>
              <option value="DJ">Djibouti</option>
              <option value="DM">Dominica</option>
              <option value="DO">Dominican Republic</option>
              <option value="EC">Ecuador</option>
              <option value="EG">Egypt</option>
              <option value="SV">El Salvador</option>
              <option value="GQ">Equatorial Guinea</option>
              <option value="ER">Eritrea</option>
              <option value="EE">Estonia</option>
              <option value="ET">Ethiopia</option>
              <option value="FK">Falkland Islands (Malvinas)</option>
              <option value="FO">Faroe Islands</option>
              <option value="FJ">Fiji</option>
              <option value="FI">Finland</option>
              <option value="FR">France</option>
              <option value="GF">French Guiana</option>
              <option value="PF">French Polynesia</option>
              <option value="TF">French Southern Territories</option>
              <option value="GA">Gabon</option>
              <option value="GM">Gambia</option>
              <option value="GE">Georgia</option>
              <option value="DE">Germany</option>
              <option value="GH">Ghana</option>
              <option value="GI">Gibraltar</option>
              <option value="GR">Greece</option>
              <option value="GL">Greenland</option>
              <option value="GD">Grenada</option>
              <option value="GP">Guadeloupe</option>
              <option value="GU">Guam</option>
              <option value="GT">Guatemala</option>
              <option value="GG">Guernsey</option>
              <option value="GN">Guinea</option>
              <option value="GW">Guinea-Bissau</option>
              <option value="GY">Guyana</option>
              <option value="HT">Haiti</option>
              <option value="HM">Heard Island and McDonald Islands</option>
              <option value="VA">Holy See (Vatican City State)</option>
              <option value="HN">Honduras</option>
              <option value="HK">Hong Kong</option>
              <option value="HU">Hungary</option>
              <option value="IS">Iceland</option>
              <option value="IN">India</option>
              <option value="ID">Indonesia</option>
              <option value="IR">Iran, Islamic Republic of</option>
              <option value="IQ">Iraq</option>
              <option value="IE">Ireland</option>
              <option value="IM">Isle of Man</option>
              <option value="IL">Israel</option>
              <option value="IT">Italy</option>
              <option value="JM">Jamaica</option>
              <option value="JP">Japan</option>
              <option value="JE">Jersey</option>
              <option value="JO">Jordan</option>
              <option value="KZ">Kazakhstan</option>
              <option value="KE">Kenya</option>
              <option value="KI">Kiribati</option>
              <option value="KP">Korea, Democratic People's Republic of</option>
              <option value="KR">Korea, Republic of</option>
              <option value="KW">Kuwait</option>
              <option value="KG">Kyrgyzstan</option>
              <option value="LA">Lao People's Democratic Republic</option>
              <option value="LV">Latvia</option>
              <option value="LB">Lebanon</option>
              <option value="LS">Lesotho</option>
              <option value="LR">Liberia</option>
              <option value="LY">Libya</option>
              <option value="LI">Liechtenstein</option>
              <option value="LT">Lithuania</option>
              <option value="LU">Luxembourg</option>
              <option value="MO">Macao</option>
              <option value="MK">Macedonia, the former Yugoslav Republic of</option>
              <option value="MG">Madagascar</option>
              <option value="MW">Malawi</option>
              <option value="MY">Malaysia</option>
              <option value="MV">Maldives</option>
              <option value="ML">Mali</option>
              <option value="MT">Malta</option>
              <option value="MH">Marshall Islands</option>
              <option value="MQ">Martinique</option>
              <option value="MR">Mauritania</option>
              <option value="MU">Mauritius</option>
              <option value="YT">Mayotte</option>
              <option value="MX">Mexico</option>
              <option value="FM">Micronesia, Federated States of</option>
              <option value="MD">Moldova, Republic of</option>
              <option value="MC">Monaco</option>
              <option value="MN">Mongolia</option>
              <option value="ME">Montenegro</option>
              <option value="MS">Montserrat</option>
              <option value="MA">Morocco</option>
              <option value="MZ">Mozambique</option>
              <option value="MM">Myanmar</option>
              <option value="NA">Namibia</option>
              <option value="NR">Nauru</option>
              <option value="NP">Nepal</option>
              <option value="NL">Netherlands</option>
              <option value="NC">New Caledonia</option>
              <option value="NZ">New Zealand</option>
              <option value="NI">Nicaragua</option>
              <option value="NE">Niger</option>
              <option value="NG">Nigeria</option>
              <option value="NU">Niue</option>
              <option value="NF">Norfolk Island</option>
              <option value="MP">Northern Mariana Islands</option>
              <option value="NO">Norway</option>
              <option value="OM">Oman</option>
              <option value="PK">Pakistan</option>
              <option value="PW">Palau</option>
              <option value="PS">Palestinian Territory, Occupied</option>
              <option value="PA">Panama</option>
              <option value="PG">Papua New Guinea</option>
              <option value="PY">Paraguay</option>
              <option value="PE">Peru</option>
              <option value="PH" selected="selected">Philippines</option>
              <option value="PN">Pitcairn</option>
              <option value="PL">Poland</option>
              <option value="PT">Portugal</option>
              <option value="PR">Puerto Rico</option>
              <option value="QA">Qatar</option>
              <option value="RE">R??union</option>
              <option value="RO">Romania</option>
              <option value="RU">Russian Federation</option>
              <option value="RW">Rwanda</option>
              <option value="BL">Saint Barth??lemy</option>
              <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
              <option value="KN">Saint Kitts and Nevis</option>
              <option value="LC">Saint Lucia</option>
              <option value="MF">Saint Martin (French part)</option>
              <option value="PM">Saint Pierre and Miquelon</option>
              <option value="VC">Saint Vincent and the Grenadines</option>
              <option value="WS">Samoa</option>
              <option value="SM">San Marino</option>
              <option value="ST">Sao Tome and Principe</option>
              <option value="SA">Saudi Arabia</option>
              <option value="SN">Senegal</option>
              <option value="RS">Serbia</option>
              <option value="SC">Seychelles</option>
              <option value="SL">Sierra Leone</option>
              <option value="SG">Singapore</option>
              <option value="SX">Sint Maarten (Dutch part)</option>
              <option value="SK">Slovakia</option>
              <option value="SI">Slovenia</option>
              <option value="SB">Solomon Islands</option>
              <option value="SO">Somalia</option>
              <option value="ZA">South Africa</option>
              <option value="GS">South Georgia and the South Sandwich Islands</option>
              <option value="SS">South Sudan</option>
              <option value="ES">Spain</option>
              <option value="LK">Sri Lanka</option>
              <option value="SD">Sudan</option>
              <option value="SR">Suriname</option>
              <option value="SJ">Svalbard and Jan Mayen</option>
              <option value="SZ">Swaziland</option>
              <option value="SE">Sweden</option>
              <option value="CH">Switzerland</option>
              <option value="SY">Syrian Arab Republic</option>
              <option value="TW">Taiwan, Province of China</option>
              <option value="TJ">Tajikistan</option>
              <option value="TZ">Tanzania, United Republic of</option>
              <option value="TH">Thailand</option>
              <option value="TL">Timor-Leste</option>
              <option value="TG">Togo</option>
              <option value="TK">Tokelau</option>
              <option value="TO">Tonga</option>
              <option value="TT">Trinidad and Tobago</option>
              <option value="TN">Tunisia</option>
              <option value="TR">Turkey</option>
              <option value="TM">Turkmenistan</option>
              <option value="TC">Turks and Caicos Islands</option>
              <option value="TV">Tuvalu</option>
              <option value="UG">Uganda</option>
              <option value="UA">Ukraine</option>
              <option value="AE">United Arab Emirates</option>
              <option value="GB">United Kingdom</option>
              <option value="US">United States</option>
              <option value="UM">United States Minor Outlying Islands</option>
              <option value="UY">Uruguay</option>
              <option value="UZ">Uzbekistan</option>
              <option value="VU">Vanuatu</option>
              <option value="VE">Venezuela, Bolivarian Republic of</option>
              <option value="VN">Viet Nam</option>
              <option value="VG">Virgin Islands, British</option>
              <option value="VI">Virgin Islands, U.S.</option>
              <option value="WF">Wallis and Futuna</option>
              <option value="EH">Western Sahara</option>
              <option value="YE">Yemen</option>
              <option value="ZM">Zambia</option>
              <option value="ZW">Zimbabwe</option>
            </select>
          </p>

          <div class="row row-10">
            <div class="col-sm-6">
              <p class="form-row form-row-wide">
                <input type="text" class="input-text" value placeholder="State / county" name="calc_shipping_state" id="calc_shipping_state">
              </p>
            </div>
            <div class="col-sm-6">
              <p class="form-row form-row-wide">
                <input type="text" class="input-text" value placeholder="Postcode" name="calc_shipping_postcode" id="calc_shipping_postcode">
              </p>
            </div>
          </div>

          <p>
            <input type="submit" name="calc_shipping" value="Update Totals" class="btn btn-lg btn-stroke mt-10 mb-mdm-40">
          </p>
        </div> <!-- end col shipping calculator --> --}}
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    {{-- <div class="cart_totals">
            <h2 class="heading relative bottom-line full-grey uppercase mb-30">Cart Totals</h2>

            <table class="table shop_table">
              <tbody>
                <tr class="cart-subtotal">
                  <th>Cart Subtotal</th>
                  <td>
                    <span class="amount">$1490.00</span>
                  </td>
                </tr>
                <tr class="shipping">
                  <th>Shipping</th>
                  <td>
                    <span>Free Shipping</span>
                  </td>
                </tr>
                <tr class="order-total">
                  <th>Order Total</th>
                  <td>
                    <strong><span class="amount">$1490.00</span></strong>
                  </td>
                </tr>
              </tbody>
            </table>

          </div> --}}
                </div> <!-- end col cart totals -->

            </div> <!-- end row -->


        </div> <!-- end container -->
    </section> <!-- end cart -->


@endsection
@push('js')
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        // $('#physical_qty').change(function() {
        //           e.preventDefault();
        //           axios.post('{{ route('cart.update') }}', {
        //                   id: "{{ 30 }}"

        //               })
        //               .then(function(response) {
        //                   console.log(response);
        //               })
        //               .catch(function(error) {
        //                   console.log(error);
        //               });

        //       });

        $(document).ready(function() {
            $('.physical_qty').change(function(e) {
                e.preventDefault();

                var qt = $(this).val();
                var id = $(this).data('id');
                var price = $(this).data('price');

                if (qt > 0) {
                    axios.post('{{ route('cart.update') }}', {
                            id: id,
                            qt: qt,
                            type: 'physical'
                        })
                        .then(function(response) {
                            var new_qt = response.data[0];
                            // console.log(new_qt,new_qt[0],new_qt[1]);

                            var total_price = new_qt * price;

                            toastr.success('Cart  updated successfully', 'success');
                            $(`.amount-${id}`).text(total_price);
                            var total = response.data[1]
                            // $('.total_amount').text(total);
                        })
                        .catch(function(error) {
                            console.log(error);
                        });
                } else {
                    toastr.error('Some thing is worng !', 'Error!');

                }



            });


            $('.digital_qt').change(function(e) {
                e.preventDefault();

                var qt = $(this).val();
                var id = $(this).data('id');
                var price = $(this).data('price');

                if (qt > 0) {
                    axios.post('{{ route('cart.update') }}', {
                            id: id,
                            qt: qt,
                            type: 'digital'
                        })
                        .then(function(response) {
                            var new_qt = response.data[0];
                            var total_price = new_qt * price;

                            toastr.success('Cart  updated successfully', 'success');
                            $(`.amount-${id}`).text(total_price);
                            console.log(response);


                            var total = response.data[1];
                            $('.total_amount').text(total);
                        })
                        .catch(function(error) {
                            console.log(error);
                        });
                } else {
                    toastr.error('Some thing is worng !', 'Error!');

                }

            });


            $('.physical_remove').click(function(e) {
                e.preventDefault();
                // var qt = $(this).val();

                var id = $(this).data('id');
                console.log(id);



                axios.post('{{ route('cart.remove') }}', {
                      id: id,
                      type:'physical'
                  })
                  .then(function(response) {
                    console.log(response);
                    if (response.data==1) {
                        $(`.physical_remove_${id}`).hide();
                       toastr.success('Cart  updated successfully', 'success');

                    }

                    //
                    // $(`.amount-${id}`).text(total_price);
                  })
                  .catch(function(error) {
                      console.log(error);
                  });

            });

             $('.digital_remove').click(function(e) {
                e.preventDefault();
                // var qt = $(this).val();

                var id = $(this).data('id');
                console.log(id);

                axios.post('{{ route('cart.remove') }}', {
                      id: id,
                      type:'digital'
                  })
                  .then(function(response) {
                    console.log(response);
                    if (response.data==1) {
                        $(`.digital_remove_${id}`).hide();
                       toastr.success('Cart  updated successfully', 'success');

                    }

                    //
                    // $(`.amount-${id}`).text(total_price);
                  })
                  .catch(function(error) {
                      console.log(error);
                  });

            });






        });
    </script>

@endpush

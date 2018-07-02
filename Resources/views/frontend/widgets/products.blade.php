<!-- vista de productos -->
<div v-if="articles.length >= 1" class="col-12 row m-0 p-0">

    <div class="col-12 col-lg-6 col-xl-4"
         v-for="item in articles">

        <!-- PRODUCT -->
        <div class="card card-product rounded-0 mb-4">
            <!-- image -->
            <div class="img-overlay">
                <!--
                <div class="background_image card-img-top rounded-0"
                     v-bind:style="{'background-image' : 'url(' + item.mainimage + ')'}" style="height: 180px">
                </div>
                -->

                <div class="card-img-top d-flex">
                    <img class="rounded-0 background_image align-self-center d-block mx-auto" v-bind:src="item.mainimage" style="max-height: 100%">
                </div>


                <img v-if="item.freeshipping == 1" class="card-img-type" src="{{ Theme::url('img/free.png') }}" alt="">
                <img v-if="item.discounts && item.freeshipping != 1" class="card-img-type"
                     src="{{ Theme::url('img/sale.png') }}" alt="">
                <div class="overlay">
                    <div class="link">
                        <a v-bind:href="item.url"
                           class="btn btn-outline-light">
                            QUICK VIEW
                        </a>
                    </div>
                </div>
            </div>

            <!-- dates product -->
            <div class="card-body">
                <!-- title -->
                <h6 class="card-title text-center font-weight-bold">
                    <a v-bind:href="item.url">
                        @{{ item.title}}
                    </a>
                </h6>

                <!-- precio del producto -->
                <div class="row justify-content-md-center mb-2">
                    <div class="col-md-auto">
                        <p class="text-center font-weight-bold mb-1">
                            <del class="text-muted pr-2"
                                 v-if="item.price_discount"
                                 style="font-size: 14px">
                                @{{ currency.symbol_left }} @{{ item.price }} @{{ currency.symbol_right }}
                            </del>
                            <span class="text-danger font-weight-bold"
                                  v-if="!item.price_discount">
                                @{{ currency.symbol_left }} @{{ item.price }} @{{ currency.symbol_right }}
                            </span>
                            <span class="text-danger font-weight-bold"
                                  v-if="item.price_discount">
                                @{{ currency.symbol_left }} @{{ item.price_discount }} @{{ currency.symbol_right }}
                            </span>
                        <hr class=" border-primary mt-0 mx-auto mb-4 w-75 border-2">
                        </p>
                    </div>
                </div>

                <!-- buttons -->
                <div class="text-center">
                    <a class="btn btn-outline-primary"
                       v-on:click="addCart(item)">
                        <i class="fa fa-shopping-cart text-danger"></i>
                    </a>
                    <a class="btn btn-outline-primary text-primary"
                       v-on:click="addWishList(item)">
                        <i class="fa fa-heart"></i>
                    </a>
                    <a v-bind:href="item.url"
                       class="btn btn-outline-primary">
                        <i class="fa fa-eye"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- si no hay productos -->
<div class="col-12" v-else>
    There are no products in this category
    <i class="fa fa-frown-o"></i>
    ...
</div>

@include('icommerce.widgets.paginate')

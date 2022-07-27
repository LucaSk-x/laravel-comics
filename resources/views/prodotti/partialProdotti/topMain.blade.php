<div class="top-main-prodotti">
    <div class="blue-bar"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="content-main-product py-5">
                    <div class="row">
                        <div class="col-9">
                            <div class="my-card-product">
                                <h3 class="text-uppercase"> {{$product['title']}} </h3>
                                <div class="price-procuct">
                                    <div class="row my-card-price align-items-center">
                                        <div class="col-8">
                                            <div class="my-card-price-product d-flex justify-content-between p-2">
                                                <div>U.S. Price: <span class="fw-bold text-white">{{$product['price']}}</span></div>
                                                <div class="text-uppercase"> avalable</div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="my-card-price-product p-2">
                                                <div class="text-white">Check Avability</div>
                                            </div>
                                        </div>
                                        <div> {{$product['description']}} </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card-img-product">
                                <img class="img-fluid" src=" {{asset('images/adv.jpg')}} " alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
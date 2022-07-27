<div class="bottom-main-prodotti">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row">
                    <div class="col-6">
                        <div class="card-bottom-main">
                            <h5 class="border-bottom py-2">Talent</h5>
                            <div class="info-card-botttom d-flex flex-column">
                                <div class="Talent">
                                    <div class="art row border-bottom py-2">
                                        <div class="col-4">
                                            <div>Art by:</div>
                                        </div>
                                        <div class="col-8">
                                            @foreach ($product['artists'] as $item)
                                                <a href="#">{{$item}},</a>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="written row border-bottom py-2">
                                        <div class="col-4">
                                            <div>Written by:</div>
                                        </div>
                                        <div class="col-8">
                                            @foreach ($product['writers'] as $item)
                                                <a href="#">{{$item}},</a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card-bottom-main">
                            <h5 class="border-bottom py-2">Specs</h5>
                            <div class="info-card-botttom d-flex flex-column">
                                <div class="series row  border-bottom py-2">
                                    <div class="col-4">
                                        <div>Series:</div>
                                    </div>
                                    <div class="col-8">
                                        <div><a href="#">{{$product['series']}}</a> </div>
                                    </div>
                                </div>
                                <div class="us-price row border-bottom py-2">
                                    <div class="col-4">
                                        <div>U.S. Price:</div>
                                    </div>
                                    <div class="col-8">
                                        <div>{{$product['price']}}</div>
                                    </div>
                                </div>
                                <div class="sale row border-bottom py-2">
                                    <div class="col-4">
                                        <div>On Sale date:</div>
                                    </div>
                                    <div class="col-8">
                                        <div>{{$product['sale_date']}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
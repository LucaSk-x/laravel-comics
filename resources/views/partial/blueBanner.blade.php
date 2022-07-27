<?php
    $links = [
        [
            'link'=> 'images/buy-comics-digital-comics.png',
            'text'=> 'DIGITAL COMICS'
        ],
        [
            'link'=> 'images/buy-comics-merchandise.png',
            'text'=> 'DC MERCHANDISE'
        ],
        [
            'link'=> 'images/buy-comics-subscriptions.png',
            'text'=> 'SUBSCRIPTIONS'
        ],
        [
            'link'=> 'images/buy-comics-shop-locator.png',
            'text'=> 'COMIC SHOP LOCATOR'
        ],
        [
            'link'=> 'images/buy-dc-power-visa.svg',
            'text'=> 'DC POWER VISA'
        ]
    ]
?>




<div class="main-contain-banner-blue">
    <div class="container">
        <div class="bottom-main">
            <div class="card-contain p-3">
                <div class="row justify-content-between">
                    @foreach ($links as $link)
                    <div class="col">
                        <div class="h-100">
                            <div class="my-card py-2 d-flex align-items-center">
                                <div class="img-contain h-100 px-2">
                                    <img class="card-img" src=" {{ $link['link'] }} " alt="">
                                </div>
                                <div class="text-center text-uppercase text-white py-2">{{ $link['text'] }}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
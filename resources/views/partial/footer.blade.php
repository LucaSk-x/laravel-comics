<?php
    $linkList = [
                'dcComics' => ['Characters', 'Comics', 'Movies', 'TV', 'Games', 'Videos', 'News'],
                'shop' => ['Shop DC', 'Shop DC Collectibles'],
                'dc' => ['Terms of Use', 'Privacy policy(New)', 'Ad Choises', 'Advertising', 'Jobs', 'Subscriptions', 'Talent Workshops', 'CPSC certificates', 'Ratings', 'Shop Help', 'Contact Us'],
                'sites' => ['DC', 'Mad Magazine', 'DC Kids', 'DC Universe', 'DC Power Visa']
];

?>


<footer>
    <div class="container position-relative">
        <div class="top-footer d-flex position-relative justify-content-between overflow-hidden p-3">
            <div class="top-footer-left d-flex">
                <div class="first">
                    <ul  class="list-unstyled">
                        <ul class="list-unstyled">
                            <li><h6 class="text-white text-uppercase">Dc Comics</h6></li>
                            @foreach ($linkList['dcComics'] as $item)
                                <li class="text-light"> {{ $item }} </li>
                            @endforeach
                        </ul>
                        <ul class="list-unstyled pt-4">
                            <li><h6 class="text-white text-uppercase">Shop</h6></li>
                            @foreach ($linkList['shop'] as $item)
                                <li class="text-light"> {{ $item }} </li>
                            @endforeach
                        </ul>
                    </ul>
                </div>
                <div class="second px-4">
                        <ul class="list-unstyled">
                            <li><h6 class="text-white text-uppercase">Dc</h6></li>
                            @foreach ($linkList['dc'] as $item)
                                <li class="text-light"> {{ $item }} </li>
                            @endforeach
                        </ul>
                </div>
                <div class="third">
                        <ul class="list-unstyled">
                            <li><h6 class="text-white text-uppercase">sites</h6></li>
                            @foreach ($linkList['sites'] as $item)
                                <li class="text-light"> {{ $item }} </li>
                            @endforeach
                        </ul>
                </div>
            </div>
            <div class="top-footer-right ms-auto">
                <img class="dc-logo position-absolute" src="{{asset('images/dc-logo-bg.png')}}" alt="">
            </div>
        </div>
    </div>
    <div class="bgg">
        <div class="container">
            <div class="bottom-footer d-flex justify-content-between py-3">
                <div class="bottom-footer-left">
                    <div class="my-btn"><button class="text-uppercase text-white">sing up now!</button></div>
                </div>
                <div class="bottom-footer right d-flex align-items-center">
                    <div class="follow">
                        <h5 class="text-primary text-uppercase fw-bold">follow us</h5>
                    </div>
                    <div class="social">
                        <img class="p-2" src=" {{asset('images/footer-twitter.png')}} " alt="">
                        <img class="p-2" src=" {{asset('images/footer-facebook.png')}} " alt="">
                        <img class="p-2" src=" {{asset('images/footer-youtube.png')}} " alt="">
                        <img class="p-2" src=" {{asset('images/footer-periscope.png')}} " alt="">
                        <img class="p-2" src=" {{asset('images/footer-pinterest.png')}} " alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
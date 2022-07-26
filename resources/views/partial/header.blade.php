<div class="container">
    <div class="nav-container d-flex justify-content-between py-3">
        <div class="let-nav">
            <div class="logo">
                <img class="w-75" src="{{ asset("images/dc-logo.png") }}" alt="">
            </div>
        </div>
        <div class="right-nav d-flex align-items-center">
            <ul class="nav">
                @foreach ($collection as $item)
                    <li class="nav-item">
                        <a class="text-uppercase p-2" href="#"> {{$item}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
<div class="jumbo">
    <div class="jumbo-contain position-relative">
        <img class="Jumbo position-absolute" src="{{ asset("images/jumbotron.jpg") }}" alt="">
    </div>
</div>
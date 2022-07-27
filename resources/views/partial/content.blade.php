<div class="top-main position-relative py-5">
    <div class="container py-2">
        <div class="row">
            @foreach ($comics as $comic)
            <div class="col-2">
                <a href=" {{route('products.show', $comic['id'])}} ">
                    <div class="my-card py-2">
                        <div class="img-contain">
                            <img class="card-img" src=" {{$comic['thumb']}} " alt="">
                        </div>
                        <p class="text-uppercase text-white py-2">{{$comic['title']}}</p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        <div class="load-btn d-flex">
            <button class="text-uppercase text-white m-auto">load more</button>
        </div>
        <div class="current-series position-absolute">
            <div class="text-white text-uppercase fw-bold p-2">current series</div>
        </div>
    </div>
</div>
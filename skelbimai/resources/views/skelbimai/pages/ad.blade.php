@extends("skelbimai/main")

@section("content")
<main>
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(/images/hero_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">


                    <div class="row justify-content-center mt-5">
                        <div class="col-md-8 text-center">
                            <h1>{{$ad->name}}</h1>
                            <p class="mb-0">{{$ad->location}}</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    <div class="mb-4" style="margin-top: -150px;">
                        <div class="slide-one-item home-slider owl-carousel">
                            <div><img src="{{asset('storage/' . $ad->img)}}" alt="Image" class="img-fluid rounded"></div>
                        </div>
                    </div>

                    <h4 class="h5 mb-4 text-black">Aprašymas</h4>
                    <p>{{$ad->description}}</p>

                    <h4 class="h5 mb-4 text-black">Kaina</h4>
                    <p>
                        @if($ad->price == 0)
                            --
                        @else
                            {{$ad->price}}
                        @endif
                    </p>

                    <h4 class="h5 mb-4 text-black">El. paštas</h4>
                    <p>{{$ad->email}}</p>

                    <h4 class="h5 mb-4 text-black">Telefono numeris</h4>
                    <p>
                        @if($ad->phone == 0)
                            --
                        @else
                            {{$ad->phone}}
                        @endif
                    </p>

                    <h4 class="h5 mb-4 text-black">Vieta</h4>
                    <p>{{$ad->location}}</p>
                    <hr>
                    <form method="POST" action="/ad/{{$ad->id}}/store-comment/">
                        {{csrf_field()}}
                        <textarea name="comment" id="" class="w-100" rows="10"></textarea>
                        <button type="submit" class="btn btn-primary">Komentuoti</button>
                    </form>

                    @if(count($ad->comments))
                        <div class="comments my-3">
                            <h2>{{count($ad->comments)}} komentarai</h2>
                            <ul class="comment-list my-3">
                                @foreach($ad->comments as $comment)
                                    <li class="comment">
                                        <h3>{{$comment->name}}</h3>
                                        <div class="meta">{{$comment->created_at}}</div>
                                        <p>{{$comment->comment}}</p>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                </div>
                <div class="col-lg-3 ml-auto">

                    <div class="mb-5">
                        <h3 class="h5 text-black mb-3">Filters</h3>
                        <form action="#" method="post">
                            <div class="form-group">
                                <input type="text" placeholder="What are you looking for?" class="form-control">
                            </div>
                            <div class="form-group">
                                <div class="select-wrap">
                                    <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                                    <select class="form-control" name="" id="">
                                        <option value="">All Categories</option>
                                        <option value="" selected="">Real Estate</option>
                                        <option value="">Books &amp;  Magazines</option>
                                        <option value="">Furniture</option>
                                        <option value="">Electronics</option>
                                        <option value="">Cars &amp; Vehicles</option>
                                        <option value="">Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <!-- select-wrap, .wrap-icon -->
                                <div class="wrap-icon">
                                    <span class="icon icon-room"></span>
                                    <input type="text" placeholder="Location" class="form-control">
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="mb-5">
                        <form action="#" method="post">
                            <div class="form-group">
                                <p>Radius around selected destination</p>
                            </div>
                            <div class="form-group">
                                <input type="range" min="0" max="100" value="20" data-rangeslider>
                            </div>
                        </form>
                    </div>

                    <div class="mb-5">
                        <form action="#" method="post">
                            <div class="form-group">
                                <p>Category 'Real Estate' is selected</p>
                                <p>More filters</p>
                            </div>
                            <div class="form-group">
                                <ul class="list-unstyled">
                                    <li>
                                        <label for="option1">
                                            <input type="checkbox" id="option1">
                                            Residential
                                        </label>
                                    </li>
                                    <li>
                                        <label for="option2">
                                            <input type="checkbox" id="option2">
                                            Commercial
                                        </label>
                                    </li>
                                    <li>
                                        <label for="option3">
                                            <input type="checkbox" id="option3">
                                            Industrial
                                        </label>
                                    </li>
                                    <li>
                                        <label for="option4">
                                            <input type="checkbox" id="option4">
                                            Land
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </form>
                    </div>

                    <div class="mb-5">
                        <h3 class="h6 mb-3">More Info</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti voluptatem placeat facilis, reprehenderit eius officiis.</p>
                    </div>

                </div>

            </div>
        </div>
    </div>

</main>
@stop

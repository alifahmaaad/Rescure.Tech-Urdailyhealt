@include('templates.customers.header')

<div class="container" id="faq">
    <div style="padding-top: 100px;">
        <div class="container article  mb-2 ">
            @foreach($articles as $article)
            @if($loop->odd )
            <h1 class="pb-4 text-center">Article</h1>
            <div class="row ">
                <div class="col-md-9 order-md-1 ">
                    <h2 class="py-3 text">{{ $article->title }}</h2>
                    <p class="hiddentext">{!! html_entity_decode($article->content )!!}
                    </p>
                    <p class="link readmore"><a href="" class="link">Read More...</a></p>
                </div>
                <div class="col-md-3 order-md-2">
                    <img class="bd-placeholder-img bd-placeholder-img-lg image img-fluid mx-auto responsive pt-3" width="250" height="250" src="{{ asset('assets/images/image1.jpg') }}" alt="">

                </div>
            </div>
            <hr class="featurette-divider">
            @else
            <div class="row">
                <div class="col-md-9 order-md-2 ">
                    <h2 class="py-3  text">{{ $article->title }}</h2>
                    <p class="hiddentext">{!! html_entity_decode($article->content )!!}
                    </p>
                    <p class="link readmore"><a href="" class="link">Read More...</a></p>
                </div>
                <div class="col-md-3 order-md-1">
                    <img class="bd-placeholder-img bd-placeholder-img-lg image img-fluid mx-auto responsive pt-3" width="250" height="250" src="{{ asset('assets/images/image1.jpg') }}" alt="">

                </div>
            </div>
            <hr class="featurette-divider">
            @endif
            @endforeach
        </div>
    </div>
</div>

@include('templates.customers.footer')
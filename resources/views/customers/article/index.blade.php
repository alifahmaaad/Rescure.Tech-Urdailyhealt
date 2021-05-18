@include('templates.customers.header')

<div class="container" id="faq">
    <div style="padding-top: 100px;">
        <div class="container article  mb-2 ">
            <h1 class="pb-4 text-center">Article</h1>
            @foreach($articles as $article)
            @if($loop->odd )
            <div class="row ">
                <div class="col-md-9 order-md-1 ">
                    <h2 class="py-3 text">{{ $article->title }}</h2>
                    <div class="hiddentext">{!! html_entity_decode($article->content )!!}
                    </div>
                    <p class="link readmore"><a href="{{url('article/'.$article->id)}}" class="link">Read More...</a></p>
                </div>
                <div class="col-md-3 order-md-2">
                    <img class="bd-placeholder-img bd-placeholder-img-lg image img-fluid mx-auto responsive pt-3" width="250" height="250" src="{{ asset($article->thumbnail) }}" alt="">

                </div>
            </div>
            <hr class="featurette-divider">
            @else
            <div class="row">
                <div class="col-md-9 order-md-2 ">
                    <h2 class="py-3  text">{{ $article->title }}</h2>
                    <div class="hiddentext">{!! html_entity_decode($article->content )!!}
                    </div>
                    <p class="link readmore"><a href="{{url('article/'.$article->id)}}" class="link">Read More...</a></p>
                </div>
                <div class="col-md-3 order-md-1">
                    <img class="bd-placeholder-img bd-placeholder-img-lg image img-fluid mx-auto responsive pt-3" width="250" height="250" src="{{ asset($article->thumbnail) }}" alt="">

                </div>
            </div>
            <hr class="featurette-divider">
            @endif
            @endforeach
        </div>
        <div class="d-flex justify-content-center   pagination-faq">
            {{$articles->render()}}
        </div>
    </div>
</div>

@include('templates.customers.footer')
@include('templates.customers.header')
<div class="container" style="padding-top: 100px;">
    <img style="float: left;margin: 0px 15px 15px 0px;" width="350" src=" {{ asset($articles->thumbnail) }}" class="imgswarticle">
    <h2 class="py-3  text">{{ $articles->title }}</h2>
    <div class="showarticlecontent">{!! html_entity_decode($articles->content )!!}
    </div>
</div>
@include('templates.customers.footer')
@include('templates.customers.header')

<div class="container text-center" id="faq">
    <div style="padding-top: 90px;">

        <div class="container faq  mb-2 ">
            <h1 class="jdl">Frequently Asked Questions (FAQ)</h1>
            @foreach($faqs as $faq)
            <section class="faq-sec">
                <div class="container border-left question">
                    <div class="row ">
                        <div class="queslogo align-self-center">
                            <h1>Q.</h1>
                        </div>
                        <div class="quescontent align-self-center">
                            <p class="px-3">{{ $faq->question }}</p>
                        </div>
                    </div>
                </div>
                <div class="container border-left answer">
                    <div class="row">
                        <div class="answlogo align-self-center">
                            <h1>A.</h1>
                        </div>
                        <div class="answcontent align-self-center">
                            <p class="px-3">{{ $faq->answer }}</p>
                        </div>
                    </div>
                </div>
            </section>
            @endforeach

        </div>
    </div>
</div>



@include('templates.customers.footer')
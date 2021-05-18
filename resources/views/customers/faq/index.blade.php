@include('templates.customers.header')

<div class="container text-center" id="faq">
    <div style="padding-top: 90px;">

        <div class="container faq  mb-2 ">
            <h1 class="jdl">Frequently Asked Questions (FAQ)</h1>
            @foreach($faqs as $faq)
            @if($loop->iteration == 1 )
            <div id="accordion">
                <section class="faq-sec">
                    <div class="container question border-left" id="heading{{ $loop->iteration }}" data-toggle="collapse" data-target="#collapse{{ $loop->iteration }}" aria-expanded="true" aria-controls="collapse{{ $loop->iteration }}">
                        <div class="row ">
                            <div class="queslogo align-self-center ">
                                <h1>Q.</h1>
                            </div>
                            <div class="col-md-10 quescontent align-self-center">
                                <p class="px-3">{{ $faq->question }}</p>
                            </div>
                            <div class="col-md-1 col-icon">
                                <i class="fas fa-angle-down rotate-icon"></i>
                            </div>
                        </div>
                    </div>
                    <div id="collapse{{ $loop->iteration }}" class="collapse show" aria-labelledby="heading{{ $loop->iteration }}" data-parent="#accordion">
                        <div class="container border-left answer">
                            <div class="row">
                                <div class="answlogo align-self-center">
                                    <h1>A.</h1>
                                </div>
                                <div class="col-md-10  answcontent align-self-center">
                                    <p class="px-3">{{ $faq->answer }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                @else

                <section class="faq-sec">
                    <div class="container question border-left" id="heading{{ $loop->iteration }}" data-toggle="collapse" data-target="#collapse{{ $loop->iteration }}" aria-expanded="true" aria-controls="collapse{{ $loop->iteration }}">
                        <div class="row ">
                            <div class="queslogo align-self-center ">
                                <h1>Q.</h1>
                            </div>
                            <div class="col-md-10 quescontent align-self-center">
                                <p class="px-3">{{ $faq->question }}</p>
                            </div>
                            <div class="col-md-1 col-icon">
                                <i class="fas fa-angle-down rotate-icon"></i>
                            </div>
                        </div>
                    </div>
                    <div id="collapse{{ $loop->iteration }}" class="collapse" aria-labelledby="heading{{ $loop->iteration }}" data-parent="#accordion">
                        <div class="container border-left answer">
                            <div class="row">
                                <div class="answlogo align-self-center">
                                    <h1>A.</h1>
                                </div>
                                <div class="col-md-10  answcontent align-self-center">
                                    <p class="px-3">{{ $faq->answer }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                @endif

                @endforeach
            </div>
            <div class="d-flex justify-content-center   pagination-faq">
                {{$faqs->render()}}
            </div>
        </div>
    </div>
</div>



@include('templates.customers.footer')
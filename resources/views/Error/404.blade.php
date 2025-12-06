@extends('layouts.frontend')

@section('title')
    404 Not Found | Buy Home Security
@endsection

@section('content')
    <div class="tp-process-area grey-bg pt-115 pb-90">
        <div class="container">
            <div class="row text-center">
                <div class="col-xl-12">
                    <div class="tp-section-box tp-section-box-2 p-relative mb-45">
                        <!-- Changed line here -->
                        <h2 class="tp-section-title">
                            Something Went Wrong 
                        </h2>
                        <p>
                            We apologize, but it seems like there's been an error. Our team has been notified, and we are working
                        diligently to resolve the issue.
                        </p>

                        <!-- Smaller button -->
                         <div class="slider-btn">                                          
                            <a href="/" class="btn ss-btn">Back To Home</a>					
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

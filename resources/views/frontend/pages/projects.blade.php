@extends('frontend.master')

@section('content')
<section class="py-5 bg-light">
    <div class="container">
    <div class="col-12 col-lg-8 col-xxl-7 text-center mx-auto mb-5">
            <span class="text-muted">Professional Web Developer</span>
            <h2 class="display-5 fw-bold mt-2 mb-3">I Can Design Anything You Want</h2>
            <p class="lead text-muted mb-5">See my last some projects</p>
            
          </div>
        <div class="row mt-2">
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('frontend/assets/images/development.png')}}" class="card-img-top" alt="web development services">
                    <div class="card-body">
                        <h5 class="card-title">Project Title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">More Details</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('frontend/assets/images/development.png')}}" class="card-img-top" alt="web development services">
                    <div class="card-body">
                        <h5 class="card-title">Project Title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">More Details</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('frontend/assets/images/development.png')}}" class="card-img-top" alt="web development services">
                    <div class="card-body">
                        <h5 class="card-title">Project Title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">More Details</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

@endsection
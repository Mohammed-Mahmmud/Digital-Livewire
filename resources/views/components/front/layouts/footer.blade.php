  <!-- Footer Start -->
  <div class="container-fluid bg-primary text-light footer wow fadeIn" data-wow-delay="0.1s">
      <div class="container py-5 px-lg-5">
          <div class="row g-5">
              <div class="col-md-6 col-lg-3">
                  <p class="section-title text-white h5 mb-4">Address<span></span></p>
                  <p><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                  <p><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                  <p><i class="fa fa-envelope me-3"></i>info@example.com</p>
                  <div class="d-flex pt-2">
                      <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                      <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                      <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                      <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3">
                  <p class="section-title text-white h5 mb-4">Quick Link<span></span></p>
                  <a class="btn btn-link" href="{{ route('front.pages') }}">About Us</a>
                  <a class="btn btn-link" href="{{ route('front.pages') }}">Contact Us</a>
                  <a class="btn btn-link" href="{{ route('front.pages') }}">Privacy Policy</a>
                  <a class="btn btn-link" href="{{ route('front.pages') }}">Terms & Condition</a>
                  <a class="btn btn-link" href="{{ route('front.pages', ['slug' => 'team']) }}">Career</a>
              </div>
              <div class="col-md-6 col-lg-3">
                  <p class="section-title text-white h5 mb-4">Gallery<span></span></p>
                  <div class="row g-2">
                      <div class="col-4">
                          <img class="img-fluid" src="{{ asset('front') }}/img/portfolio-1.jpg" alt="Image">
                      </div>
                      <div class="col-4">
                          <img class="img-fluid" src="{{ asset('front') }}/img/portfolio-2.jpg" alt="Image">
                      </div>
                      <div class="col-4">
                          <img class="img-fluid" src="{{ asset('front') }}/img/portfolio-3.jpg" alt="Image">
                      </div>
                      <div class="col-4">
                          <img class="img-fluid" src="{{ asset('front') }}/img/portfolio-4.jpg" alt="Image">
                      </div>
                      <div class="col-4">
                          <img class="img-fluid" src="{{ asset('front') }}/img/portfolio-5.jpg" alt="Image">
                      </div>
                      <div class="col-4">
                          <img class="img-fluid" src="{{ asset('front') }}/img/portfolio-6.jpg" alt="Image">
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3">
                  <p class="section-title text-white h5 mb-4">Newsletter<span></span></p>
                  <p>Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit
                      non vulpu</p>
                  <div class="position-relative w-100 mt-3">
                      @livewire('front.pages.subscribes.create')
                  </div>
              </div>
          </div>
      </div>
      @include('front.layouts.partials.copyright')
  </div>
  <!-- Footer End -->

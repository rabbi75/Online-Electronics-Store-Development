    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="main_slider">
            <div class="product-carousel owl-carousel">
              @foreach ($sliders as $slider)
              <div><a href="#"><img src="{{ asset('images/sliders/'.$slider->image) }}" style="height: 300px;"></a>
                  <div class="carousel-caption d-none d-md-block">
                    <h5 style="color:black;">{{ $slider->title }}</h5>
                    
                    @if ($slider->button_text)
                      <p>
                        <a href="{{ $slider->button_link }}" target="_blank" class="btn btn-danger">{{ $slider->button_text }}</a>
                      </p>
                    @endif

                  </div>


              </div>

              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>
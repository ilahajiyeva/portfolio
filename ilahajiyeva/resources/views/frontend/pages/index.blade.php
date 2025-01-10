
@extends('frontend.mainpage.mainpage')

@section('hero')

<main class="main">
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="{{asset($slider->image)}}" alt="" data-aos="fade-in" class="">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <h2>{{$slider->name}}</h2>
        <p class="hero_text">{!! $slider->short_text !!}</p>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

    <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
        <h2>{{$about->name}}</h2>
        <p>{!! $about->description !!}</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 justify-content-center">
            <div class="col-lg-4">
            <img src="{{$slider->profile_pic}}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8 content">
            <h2>{{$about->title}}</h2>
            <p class="fst-italic py-3">
                {!! $about->description !!}
            </p>
            <div class="row">
                <div class="col-lg-6">
                <ul>
                    <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong>{{$about->birthday}}</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Portfolio:</strong>{{$about->portfolio}}</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>{{$about->address}}</span></li>
                </ul>
                </div>
                <div class="col-lg-6">
                <ul>
                    <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>{{$about->phone}}</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>{{$about->email}}</span></li>
                </ul>
                </div>
            </div>
            </div>
        </div>

        </div>

    </section><!-- /About Section -->

    <!-- Skills Section -->
    <section id="skills" class="skills section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
        <h2>{{$skills->name}}</h2>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row skills-content skills-animation">

            <div class="col-lg-3 offset-1">

                <div class="progress">
                    <span class="skill"><span>{{$skills->php}}</span></span>
                </div>
                <div class="progress">
                    <span class="skill"><span>{{$skills->laravel}}</span></span>
                </div>
                <div class="progress">
                    <span class="skill"><span>{{$skills->mysql}}</span></span>
                </div>

            </div>
            <div class="col-lg-3">

                <div class="progress">
                    <span class="skill"><span>{{$skills->html}}</span></span>
                </div>
                <div class="progress">
                    <span class="skill"><span>{{$skills->css}}</span></span>
                </div>
                <div class="progress">
                    <span class="skill"><span>{{$skills->javascript}}</span></span>
                </div>

            </div>
            <div class="col-lg-3">

                <div class="progress">
                    <span class="skill"><span>{{$skills->bootstrap}}</span></span>
                </div>
                <div class="progress">
                    <span class="skill"><span>{{$skills->c}}</span></span>
                </div>
                <div class="progress">
                    <span class="skill"><span>{{$skills->net}}</span></span>
                </div>

            </div>
        </div>
        </div>

    </section><!-- /Skills Section -->

     <!-- Contact Section -->
  <section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Contact</h2>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">

        <div class="col-lg-1"></div>
        <div class="col-lg-8">

          <form action="{{route('contact.store')}}" method="post">
            @csrf
            <div class="row gy-4">
              <div class="col-md-12">
                <label for="name-field" class="pb-2">Your Name</label>
                <input type="text" name="name" id="name-field" class="form-control" >
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>

              <div class="col-md-12">
                <label for="email-field" class="pb-2">Email</label>
                <input type="email" class="form-control" name="email" id="email-field" >
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>

              <div class="col-md-12">
                <label for="subject-field" class="pb-2">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject-field" >
                @error('subject')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>

              <div class="col-md-12">
                <label for="message-field" class="pb-2">Message</label>
                <textarea class="form-control" name="message" rows="5" id="message-field" ></textarea>
                @error('message')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>

              <div class="col-md-12 text-center">
                @if (session()->has('success'))
                <div class="alert alert-success">{{session()->get('success')}}</div>
                @endif

                <button type="submit" class="btn btn-primary">Send</button>
              </div>

            </div>
          </form>
        </div><!-- End Contact Form -->

    </div>

  </section><!-- /Contact Section -->


 @endsection




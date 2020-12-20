@extends('frontend.layout.app')

@section('content')

@include('frontend.contact_nav')

<section class="contact section-padding">
          <div class="container">
               <div class="row">

                    <div class="col-lg-6 mx-auto col-md-7 col-12 py-5 mt-5 text-center" data-aos="fade-up">

                      <h1 class="mb-4">Hey there, Let's <strong>talk</strong> about <strong>creative</strong> projects</h1>

                      <p>or email us at <a href="#">charlesbasoah93@gmail.com</a> <a href="#">kofibaidoo1993@gmail.com</a> </p>

                    </div>

                    <div class="col-lg-8 mx-auto col-md-10 col-12">

                      <form action="#" method="post" class="contact-form text-white" data-aos="fade-up" data-aos-delay="300" role="form">
                        {{ csrf_field() }}
                        <div class="row">
                          <div class="col-lg-6 col-12">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Name" required>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                          <div class="col-lg-6 col-12">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" required>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                          <div class="col-lg-12 col-12">
                            <textarea class="form-control @error('message') is-invalid @enderror" rows="6" name="message" placeholder="Description of Project" required></textarea>
                            @error('message')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                          <div class="col-lg-5 mx-auto col-7">
                            <button type="submit" class="form-control" id="submit-button" name="submit">Send Message</button>
                          </div>
                        </div>

                      </form>
                    </div>

               </div>
          </div>
     </section>

     @include('frontend.footer')

@endsection

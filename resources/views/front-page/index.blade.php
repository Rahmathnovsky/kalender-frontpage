@extends('master.index')
@section('body')
    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-up"><a style="color: #F6CD1E; background-color: #B61D1B;">KA</a><a style="color: #205299">lapa</a> <a style="color: #F6CD1E; background-color: #B61D1B;">LE</a><a style="color: #205299">arning</a> <a style="color: #F6CD1E; background-color: #B61D1B;">&</a> <a style="color: #F6CD1E; background-color: #B61D1B;">D</a><a style="color: #205299">evelopment Cent</a><a style="color: #F6CD1E; background-color: #B61D1B;">ER</a></h1>
            <p data-aos="fade-up" data-aos-delay="100" style="color: #223a66;">Tingkatkan potensi dan raih kesuksesan bersama KALENDER melalui program pelatihan yang disediakan serta didukung oleh para expert. KALENDER membantu persiapanmu dalam dunia pekerjaan yang profesional.</p>
            <div class="d-flex flex-column flex-md-row" data-aos="fade-up" data-aos-delay="200">
              <a data-bs-toggle="modal" data-bs-target="#enableOTP" class="btn-get-started">Cek KALENDER Kamu Yuk</a>
              {{-- <i class="bi bi-arrow-right"></i> --}}
              {{-- <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center justify-content-center ms-0 ms-md-4 mt-4 mt-md-0"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> --}}
            </div>

            <!-- Start Enable OTP -->
            <div>
              <div class="mt-3">
                <!-- Modal -->
                <div class="modal fade" id="enableOTP" tabindex="-1" aria-hidden="true">
                  <div class="modal-dialog modal-simple modal-enable-otp modal-dialog-centered">
                    <div class="modal-content p-3 p-md-5">
                      <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center mb-4">
                          <img src="assets/img/logo/logo-kalender-main.png" alt="" style="width: 70px;">
                          <h3 class="mb-2">Join KALENDER</h3>
                          <p>or create a free account</p>
                        </div>
                        <p>Masukan nomor Whatsapp kamu, dan kami akan memberikan kejutan yang tidak akan bisa kamu bayangkan!</p>
                        <form id="enableOTPForm" method="POST" action="{{ route('registration-phone') }}" class="row g-3">
                            @csrf
                          <div class="col-12">
                            <!-- <label class="form-label text-primary" for="modalEnableOTPPhone">Already have an account? <a href="#">Login.</a></label> -->
                            <div class="input-group">
                              <span class="input-group-text">ID (+62)</span>
                              <input
                                type="text"
                                id="modalEnableOTPPhone"
                                name="phone_number"
                                class="form-control phone-number-otp-mask"
                                placeholder="Enter your mobile number" />
                            </div>
                          </div>
                          <div class="col-12">
                            <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                            <button
                              type="reset"
                              class="btn btn-label-secondary"
                              data-bs-dismiss="modal"
                              aria-label="Close">
                              Cancel
                            </button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Enable OTP -->

          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out">
            <img src="assets/img/vector/dashboard-2.png" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>
    </section>
    <section class="features">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="feature-block d-lg-flex">
              <div class="feature-item mb-5 mb-lg-0">
                <div class="feature-icon mb-4">
                  <img src="assets/img/vector/d.png" style="width: 300px;" alt="">
                  <!-- <i class="icofont-surgeon-alt"></i> -->
                </div>
                <center>
                  <h4 style="color: #205299;">Bangun Masa Depan <br>Mulai Dari Kenali Diri Sendiri</h4>
                  <p class="mb-3">Belajar pahami diri sendiri untuk membangun personal branding kamu</p>
                  <time style="color: #2C66FF; margin-top: -10px;" datetime="2024-09-16T20:00"><strong>SENIN, 16 SEPT 2024. YOGYAKARTA</strong></time>
                  <a data-bs-toggle="modal" data-bs-target="#" class="btn btn-main" style="margin-bottom: -40px;">Daftar Kelas</a>
                </center>
              </div>

              <div class="feature-item mb-5 mb-lg-0">
                <div class="feature-icon mb-4">
                  <img src="assets/img/vector/c.png" style="width: 300px;" alt="">
                  <!-- <i class="icofont-ui-clock"></i> -->
                </div>
                <center>
                  <h4 style="color: #205299;">Hadapi Interview Kerja Dengan Rasa Percaya Diri</h4>
                  <p class="mb-3">Kunci untuk membuat kesan yang baik saat menjalani proses interview</p>
                  <time class="text-danger" datetime="2024-09-16T20:00"><strong>SEGERA HADIR</strong></time><br>
                  <a data-bs-toggle="modal" data-bs-target="#" class="btn btn-main" style="margin-bottom: -40px;">Daftar Kelas</a>
                </center>
              </div>

              <div class="feature-item mb-5 mb-lg-0">
                <div class="feature-icon mb-4">
                  <img src="assets/img/vector/b.png" style="width: 300px;" alt="">
                  <!-- <i class="icofont-ui-clock"></i> -->
                </div>
                <center>
                  <h4 style="color: #205299;">Semua Bisa Jadi IT</h4>
                    <br>
                  <p class="mb-3">Belajar membuat Website <br> mulai dari nol</p>
                  <time class="text-danger" datetime="2024-09-16T20:00"><strong>SEGERA HADIR</strong></time><br>
                  <a data-bs-toggle="modal" data-bs-target="#" class="btn btn-main" style="margin-bottom: -40px;">Daftar Kelas</a>
                </center>
              </div>

              {{-- <div class="feature-item mb-5 mb-lg-0">
                <div class="feature-icon mb-4">
                  <img src="assets/img/vector/b.png" style="width: 300px;" alt="">
                  <!-- <i class="icofont-support"></i> -->
                </div>
                <center><span>Ngobrol Sama ALEN</span>
                <h4 class="mb-3">+62 813 8499 5069</h4>
                <p>Walaupun kita terbatas dengan jarak, bantuan ALEN hanya sejarak panggilan telepon aja
                loh! Jadi tunggu apalagi segera hubungi ALEN yuk!</p></center>
              </div> --}}
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Hero Section -->

    <!-- Values Section -->
    <section id="values" class="values section">

      <div class="container section-title" data-aos="fade-up">
        <h2>Keterampilan</h2>
        <p style="color: #205299;">Raih Potensi Kamu Disini!<br></p>
      </div>

      <div class="container" style="margin-top: -70px;">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card" data-bs-toggle="modal" data-bs-target="#classONE">
              <img src="assets/img/skills/people-development.png" alt="">
              <h3 style="color: #205299">People Development</h3>
            </div>
          </div>
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card" data-bs-toggle="modal" data-bs-target="#classONE">
              <img src="assets/img/skills/copy-writing.png" alt="">
              <h3 style="color: #F6CD1E">Copywriting</h3>
            </div>
          </div>
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card" data-bs-toggle="modal" data-bs-target="#classONE">
              <img src="assets/img/skills/personal-branding.png" alt="">
              <h3 style="color: #205299">Personal Branding</h3>
            </div>
          </div>
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card" data-bs-toggle="modal" data-bs-target="#classONE">
              <img src="assets/img/skills/public-speaking.png" alt="">
              <h3 style="color: #F6CD1E">Public Speaking</h3>
            </div>
          </div>
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card" data-bs-toggle="modal" data-bs-target="#classONE">
              <img src="assets/img/skills/negotiation.png" alt="">
              <h3 style="color: #205299">Negotiation</h3>
            </div>
          </div>
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card" data-bs-toggle="modal" data-bs-target="#classONE">
              <img src="assets/img/skills/digital-marketing.png" alt="">
              <h3 style="color: #F6CD1E">Digital Marketing</h3>
            </div>
          </div>

        </div>

      </div>

    </section>
    <!-- /Values Section -->

    <!-- Start Class One -->
    <div>
      <div class="mt-3 col-lg-8">
        <!-- Modal -->
        <div class="modal fade" id="classONE" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-simple modal-enable-otp modal-dialog-centered">
            <div class="modal-content p-3 p-md-5">
              <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center mb-4">
                  <h3 class="mb-2">To Be a Great Leader</h3>
                  <p>Favorite Class</p>
                </div>
                <img src="assets/img/hero-img.png" class="img-fluid" alt="">
                <p>Enter your mobile phone number with country code and we will send you a verification code.</p>
                <form id="enableOTPForm" class="row g-3" onsubmit="return false">
                  <div class="col-12">
                    <label class="form-label text-primary" for="modalEnableOTPPhone">Already have an account? <a href="#">Login.</a></label>
                    <div class="input-group">
                      <span class="input-group-text">ID (+62)</span>
                      <input
                        type="text"
                        id="modalEnableOTPPhone"
                        name="modalEnableOTPPhone"
                        class="form-control phone-number-otp-mask"
                        placeholder="Enter your mobile number" />
                    </div>
                  </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                    <button
                      type="reset"
                      class="btn btn-label-secondary"
                      data-bs-dismiss="modal"
                      aria-label="Close">
                      Cancel
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Class One -->
     <!-- Start Class Two -->
    <div>
      <div class="mt-3">
        <!-- Modal -->
        <div class="modal fade" id="classTWO" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-simple modal-enable-otp modal-dialog-centered">
            <div class="modal-content p-3 p-md-5">
              <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center mb-4">
                  <h3 class="mb-2">Management Training</h3>
                  <p>Favorite Class</p>
                </div>
                <img src="assets/img/hero-img.png" class="img-fluid" alt="">
                <p>Enter your mobile phone number with country code and we will send you a verification code.</p>
                <form id="enableOTPForm" class="row g-3" onsubmit="return false">
                  <div class="col-12">
                    <label class="form-label" for="modalEnableOTPPhone">Already have an account? <a href="#">Log in</a></label>
                    <div class="input-group">
                      <span class="input-group-text">ID (+62)</span>
                      <input
                        type="text"
                        id="modalEnableOTPPhone"
                        name="modalEnableOTPPhone"
                        class="form-control phone-number-otp-mask"
                        placeholder="Enter your mobile number" />
                    </div>
                  </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                    <button
                      type="reset"
                      class="btn btn-label-secondary"
                      data-bs-dismiss="modal"
                      aria-label="Close">
                      Cancel
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Class Two -->
     <!-- Start Class Three -->
    <div>
      <div class="mt-3">
        <!-- Modal -->
        <div class="modal fade" id="classTHREE" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-simple modal-enable-otp modal-dialog-centered">
            <div class="modal-content p-3 p-md-5">
              <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center mb-4">
                  <h3 class="mb-2">Soft-Skill & Hard-Skill</h3>
                  <p>Favorite Class</p>
                </div>
                <img src="assets/img/hero-img.png" class="img-fluid" alt="">
                <p>Enter your mobile phone number with country code and we will send you a verification code.</p>
                <form id="enableOTPForm" class="row g-3" onsubmit="return false">
                  <div class="col-12">
                    <label class="form-label" for="modalEnableOTPPhone">Already have an account? <a href="#">Log in</a></label>
                    <div class="input-group">
                      <span class="input-group-text">ID (+62)</span>
                      <input
                        type="text"
                        id="modalEnableOTPPhone"
                        name="modalEnableOTPPhone"
                        class="form-control phone-number-otp-mask"
                        placeholder="Enter your mobile number" />
                    </div>
                  </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                    <button
                      type="reset"
                      class="btn btn-label-secondary"
                      data-bs-dismiss="modal"
                      aria-label="Close">
                      Cancel
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Class Three -->

    <!-- Clients Section -->
    <section id="clients" class="clients section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Kerjasama</h2>
        <p style="color: #205299;">Rekan Hebat Kami Saat Ini<br></p>
      </div><!-- End Section Title -->

      <div class="container" style="margin-top: -70px;" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/partner/xl.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/partner/vads.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/partner/mtf.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/partner/j&t.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/partner/gojek.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/partner/alodokter.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section>
    <!-- /Clients Section -->

  </main>
@endsection
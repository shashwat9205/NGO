<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>NGO</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />

    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap"
      rel="stylesheet"
    />
    <link href="fonts.googleapis.com" rel="stylesheet" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap"
      rel="stylesheet"
    />

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css" />
  </head>
  <body>





  <?php
    include 'header.php'
  ?>





    <!-- hero-banner -->
    <div class="swiper hero-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="photos/Banner2.png" class="hero-img" />
          <div class="hero-content">
            <h1>
              Together we educate <br/>
              every child
            </h1>
            <p>Helping communities thrive by providing aid</p>
            <a  href="Causes.php"class="btn donate-btn btn-lg rounded-pill">View Our Causes</a>
          </div>
        </div>

        <div class="swiper-slide">
          <img src="photos/Banner1.png" class="hero-img" />
          <div class="hero-content font">
            <h1>
              Hope Begins With <br />
              Schooling
            </h1>
            <p>Helping communities thrive by providing aid.</p>
            <a href="Causes.php" class="btn donate-btn btn-lg rounded-pill">View Our Causes</a>
          </div>
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>





    <!-- donation section
    <section class="donation-section">
  <div class="container">
    <div class="donation-box">

      <h2>Make A Donation</h2>
      <p class="donation-subtitle">
        Join us in creating a brighter more compassionate world
      </p>

      <div class="donation-amounts">
        <button>$10</button>
        <button>$25</button>
        <button>$50</button>
        <button>$100</button>
      </div>

      <div class="donation-input-row">
        <div class="custom-input">
          <span>$</span>
          <input type="text" placeholder="Custom Amount">
        </div>

        <button class="proceed-btn">Proceed</button>
      </div>

    </div>
  </div>
</section> -->






    <!-- Categories -->
    <section class="categories-section py-5">
      <div class="container">
        <!-- White wrapper -->
        <div class="categories-wrapper p-5">
          <!-- Title -->
          <h2 class="fw-bold mb-4">Our Categories</h2>
          <hr class="title-line mb-5" />

          <!-- Cards -->
          <div class="row g-4 " data-aos="fade-up">
            <div class="col-md-3">
              <div class="category-card bg-peach">
                <div class="icon-circle1">
                  <img
                    src="photos/Card1.png"
                    class="rounded-circle h-100 w-100"
                  />
                </div>
                <h5>Water & Sanity</h5>
                <p>
                  Access to clean drinking water, proper hygiene, and safe waste
                  disposal.
                </p>
              </div>
            </div>

            <div class="col-md-3">
              <div class="category-card bg-green">
                <div class="icon-circle1">
                  <img
                    src="photos/Card2.png"
                    class="rounded-circle h-100 w-100"
                  />
                </div>
                <h5>Health & Wellness</h5>
                <p>
                  Promoting mental well-being through exercise and preventive
                  care.
                </p>
              </div>
            </div>

            <div class="col-md-3">
              <div class="category-card bg-yellow">
                <div class="icon-circle1">
                  <img
                    src="photos/Card3.png"
                    class="rounded-circle h-100 w-100"
                  />
                </div>
                <h5>Social Growth</h5>
                <p>
                  Improving education and access to resources for better quality
                  of life.
                </p>
              </div>
            </div>

            <div class="col-md-3">
              <div class="category-card bg-blue">
                <div class="icon-circle1">
                  <img
                    src="photos/Card4.png"
                    class="rounded-circle h-100 w-100"
                  />
                </div>
                <h5>Education & Skills</h5>
                <p>
                  Empower individuals through learning, training, enabling
                  personal growth.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>





    <!-- content box video -->
    <section class="empower-section position-relative">
      <div class="container">
        <div class="row align-items-center">
          <!-- LEFT CONTENT -->
          <div class="col-lg-7">
            <h2 class="fw-bold mb-3">We Empower The Poorest</h2>
            <p class="text-muted mb-4">
              Our major focus is to improve the life standard of the poorest
              people of the society.
            </p>

            <!-- Video Card -->
            <div class="video-card position-relative">
              <img src="photos/Category2.png" alt="Video" class="img-fluid" />
              <div class="play-btn fa fa-play"></div>
            </div>

            <!-- STATS -->
            <div class="row stats-row mt-4 text-center text-lg-start">
              <div class="col-md-4 mb-3">
                <div class="stat-item">
                  <i class="stat-icon blue">💰</i>
                  <h4>$56M</h4>
                  <p>child deserves a bright future.</p>
                </div>
              </div>

              <div class="col-md-4 mb-3">
                <div class="stat-item">
                  <i class="stat-icon green">👥</i>
                  <h4>589,535</h4>
                  <p>Children, implement programs</p>
                </div>
              </div>

              <div class="col-md-4 mb-3">
                <div class="stat-item">
                  <i class="stat-icon orange">💉</i>
                  <h4>16,788</h4>
                  <p>vaccinate 25 children</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 child text-center d-none d-lg-block">
            <img src="photos/Category1.png" alt="Child" class="child-img" data-aos="fade-right"/>
          </div>
        </div>
      </div>
    </section>





    <!-- cards -->
    <section class="campaigns-section py-5">
      <div class="container">
        <div class="text-center mb-5">
          <h2 class="section-title">Help Power Our Work</h2>
          <p class="section-subtitle">
            Our campaigns bring together communities, resources, and
            <br />action to create lasting change across education, health,
            <br />
            environment, and humanitarian relief.
          </p>
        </div>

        <div class="row g-4 justify-content-center " >
          <!-- Card 1 -->
          <div class="col-lg-3 col-md-6" data-aos="zoom-in" >
            <div class="campaign-card yellow">
              <img src="photos/Card6.png" alt="" />
              <div class="campaign-content">
                <span class="location">in Belgium</span>
                <h5>Drugs are causes huge mental illness</h5>

                <div class="progress">
                  <div class="progress-bar" style="width: 35%"></div>
                </div>

                <p class="needed">Needed <strong>$7,800</strong></p>
                <a href="#" class="card-btn">Donate Now</a>
              </div>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="col-lg-3 col-md-6 " data-aos="zoom-in">
            <div class="campaign-card purple">
              <img src="photos/Card5.png" alt="" />
              <div class="campaign-content">
                <span class="location">in Belgium</span>
                <h5>Clean drinking water is the basic necessity</h5>

                <div class="progress">
                  <div class="progress-bar" style="width: 60%"></div>
                </div>

                <p class="needed">Needed <strong>$67,000</strong></p>
                <a href="#" class="card-btn">Donate Now</a>
              </div>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="col-lg-3 col-md-6" data-aos="zoom-in">
            <div class="campaign-card blue">
              <img src="photos/Card7.png" alt="" />
              <div class="campaign-content">
                <span class="location">in Belgium</span>
                <h5>Give A Hand To Make The Bright Future</h5>

                <div class="progress">
                  <div class="progress-bar" style="width: 45%"></div>
                </div>

                <p class="needed">Needed <strong>$98,000</strong></p>
                <a href="#" class="card-btn">Donate Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>





    <!-- gallery -->

    <section class="gallery-section py-5">
      <div class="container-fluid">
        <div class="row g-0 align-items-stretch">
          <!-- LEFT: Gallery -->
          <div class="col-lg-7">
            <div class="gallery-grid">
              <div class="gallery-item g1">
                <img src="photos/Gallery3.png" alt="" data-aos="fade-right"/>
              </div>

              <div class="gallery-item g2">
                <img src="photos/Gallery2.png" alt=""data-aos="fade-right" />
              </div>

              <div class="gallery-item g3">
                <img src="photos/Gallery1.png" alt=""data-aos="fade-right" />
              </div>

              <div class="gallery-item g4">
                <img src="photos/Gallery6.png" alt="" data-aos="fade-right"/>
              </div>

              <div class="gallery-item g5">
                <img src="photos/Gallery5.png" alt=""data-aos="fade-right" />
              </div>

              <div class="gallery-item g6">
                <img src="photos/Gallery4.png" alt="" data-aos="fade-right" />
              </div>
            </div>
          </div>

          <!-- RIGHT: Content -->
          <div class="col-lg-5 gallery-content-wrapper">
            <div class="gallery-content">
              <span class="small-title">All Story in Gallery.</span>
              <h2>
                Humanity<br />
                <span>Lots of decent humans</span>
              </h2>

              <p>
                The world's #1 fundraising site for charitable and personal
                causes. Raise money for friends who need help, marathons and
                events, and over 1.5 million causes worldwide.
              </p>

              <a href="#" class="btn-gallery">More Gallery</a>
            </div>
          </div>
        </div>
      </div>
    </section>




    <!-- news -->

    <section class="news-section py-5">
      <div class="container" data-aos="zoom-in">
        <div class="text-center mb-5">
          <h2 class="news-section-title">Recent News</h2>
          <p class="news-section-subtitle">
            We are the nation's largest and most influential <br />
            grassroots environmental organizatio ntrud exerci tation
          </p>
        </div>

        <div class="news-grid">
          <!-- Card 1 -->
          <div class="news-card">
            <div class="news-img">
              <img src="photos/news.png" alt="" />
            </div>

            <div class="news-content">
              <div class="news-meta">
                <span>📅 September 3, 2025</span>
                <span>💬 1 comment</span>
              </div>

              <h4>A Heartbreaking Glimpse into the Reality of Homeless</h4>

              <div class="news-footer">
                <span class="author bi bi-person">Andrew</span>
                <a href="#">Read More</a>
              </div>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="news-card">
            <div class="news-img">
              <img src="photos/news1.png" alt="" />
            </div>

            <div class="news-content">
              <div class="news-meta">
                <span>📅 January 1, 2025</span>
                <span>💬 1 comment</span>
              </div>

              <h4>When Children Face Struggles and Troubles, Their Hearts</h4>

              <div class="news-footer">
                <span class="author bi bi-person">Andrew</span>
                <a href="#">Read More</a>
              </div>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="news-card">
            <div class="news-img">
              <img src="photos/news2.png" alt="" />
            </div>

            <div class="news-content">
              <div class="news-meta">
                <span>📅 January 1, 2025</span>
                <span>💬 1 comment</span>
              </div>

              <h4>From Life’s Challenges to Moments of Cheer, Together</h4>

              <div class="news-footer">
                <span class="author bi bi-person g-2">Andrew</span>
                <a href="#">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>




    <?php
    include 'footer.php'
    ?>






    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"
      integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y"
      crossorigin="anonymous"
    ></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    


<script>
  const swiper = new Swiper('.hero-slider', {
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev'
    },
    on: {
      init: function () {
        animateSlide(this.slides[this.activeIndex]);
      },
      slideChangeTransitionStart: function () {
        resetAnimations();
      },
      slideChangeTransitionEnd: function () {
        animateSlide(this.slides[this.activeIndex]);
      }
    }
  });

  function animateSlide(slide) {
    const content = slide.querySelector('.hero-content');
    if (content) {
      content.classList.add('animate');
    }
  }

  function resetAnimations() {
    document
      .querySelectorAll('.hero-content')
      .forEach(el => el.classList.remove('animate'));
  }
</script>






<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
  AOS.init({
    duration: 1000,   // animation duration (ms)
    once: true,       // animation happens only once
    offset: 120       // distance before animation starts
  });
</script>

  
  </body>
</html>
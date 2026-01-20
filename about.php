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

    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    
  
    <?php
    include 'header.php'
    ?>

     <!-- about banner -->
    <div class="about-banner text-white">
       <div class="about-content"></div>
          <h1 class="about-title ">About Us</h1>
          <div class="about-subtitle">
          <a href="index.php">Home</a>
          <span>|</span>
          <span>About Us</span>
        </div>
    </div>
    





  <!-- welcome-content -->
     <div class="welcome">
      <div class="welcome-title text-center">
        <p>Welcome to charity organizations</p>
      </div>
      <div class="welcome-content text-center">
      
      <h1>He who had never denied himself <br>
       for the sake of giving</h1>
      
      </div>
    </div>







 <!-- about section -->

<section class="about-tabs-section py-5">
  <div class="container">
    <div class="row align-items-center">

     
      <div class="col-lg-6 mb-4 mb-lg-0 text-center">
        <img src="photos/about-img.png" alt="about-img" class=" bg-image  ">

      </div>

      
      <div class="col-lg-6">

        
        <div class="about-tabs mb-3">
          <span class="tab-link active" data-target="education">Education Facilities</span>
          <span class="tab-link" data-target="medical">Medical Facilities</span>
          <span class="tab-link" data-target="food">Healthy Food</span>
        </div>

       
        <div class="tab-text active" id="education">
          <p>
            Are you looking for information about education facilities?
            We provide access to quality education, learning materials,
            and safe school environments for children.
          </p>
        </div>

        <div class="tab-text" id="medical">
          <p>
            We support medical facilities by offering health checkups,
            emergency care, medicines, and long-term healthcare programs
            for underprivileged families.
          </p>
        </div>

        <div class="tab-text" id="food">
          <p>
            Our healthy food initiatives ensure nutritious meals reach
            children and families, supporting growth, energy, and
            long-term wellbeing.
          </p>
        </div>

        <div class=" content-photo d-flex">
          <img src="photos/Gallery1.png" class="img-features rounded">
        <ul class="about-features mt-2 ">
          <li>Friendly fundraising features</li>
          <li>Potential with our 32 donation</li>
          <li>Easily manage donor profiles</li>
          <li>Features like monthly gifts</li>
        </ul>
        </div>

      </div>
    </div>
  </div>
</section>




<!-- mission vision -->
 <section class="our-vision-section">
  <div class="container">
    <div class="row vision-box vision-narrow text-center mx-auto">

      
      <div class="col-md-3 vision-item">
        <div class="icon-circle4">
          <img src="photos/mission.png" alt="Mission">
        </div>
        <h5>Our Mission</h5>
        <p>We strive to create positive change, empower.</p>
      </div>

      
      <div class="col-md-3 vision-item">
        <div class="icon-circle4">
          <img src="photos/vision.png" alt="Vision">
        </div>
        <h5>Our Vision</h5>
        <p>We strive to create positive change, empower.</p>
      </div>

      
      <div class="col-md-3 vision-item">
        <div class="icon-circle4">
          <img src="photos/value.png" alt="Value">
        </div>
        <h5>Our Value</h5>
        <p>We strive to create positive change, empower.</p>
      </div>

      
      <div class="col-md-3 vision-item">
        <div class="icon-circle4">
          <img src="photos/trust.png" alt="Trust">
        </div>
        <h5>Our Trust</h5>
        <p>We strive to create positive change, empower.</p>
      </div>

    </div>
  </div>
</section>



























    <?php
    include 'footer.php'
    ?>






<script>
  const tabs = document.querySelectorAll(".tab-link");
  const texts = document.querySelectorAll(".tab-text");

  tabs.forEach(tab => {
    tab.addEventListener("click", () => {
      tabs.forEach(t => t.classList.remove("active"));
      texts.forEach(text => text.classList.remove("active"));

      tab.classList.add("active");
      document.getElementById(tab.dataset.target).classList.add("active");
    });
  });
</script>



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

    
  </body>
</html>







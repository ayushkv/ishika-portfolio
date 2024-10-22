<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ayush's Portfolio | Content Writer</title>
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  
  <!-- Font Awesome for Icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Ayush's Portfolio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#skills">Skills</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#portfolio">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<!-- Hero Section -->
<section id="hero" class="d-flex justify-content-center align-items-center text-center">
    <div class="hero-content">
      <h1 class="animate__animated animate__fadeInDown">Ayush's Content Writer Portfolio</h1>
      <p class="lead animate__animated animate__fadeInUp">Crafting impactful, engaging content for diverse audiences.</p>
      <a href="{{asset('resume/test.pdf')}}" class="btn btn-primary resume-btn" download>
        <i class="fas fa-file-download"></i> Download Resume
      </a>
    </div>
  </section>
  

  <!-- About Section with Download Resume -->
  <section id="about" class="container-fluid section-bg-1 py-5">
    <div class="row align-items-center">
      <div class="col-md-6 text-center">
        <img src="{{asset('img/ishika.jpg')}}" class="img-fluid rounded-circle profile-img" alt="Profile Picture">
      </div>
      <div class="col-md-6">
        <h2>About Me</h2>
        <p>I’m Ayush, a passionate content writer with a love for storytelling. I create compelling and creative content that communicates brand stories effectively, ensuring reader engagement and value-driven narratives.</p>
      </div>
    </div>
  </section>

  <!-- Skills Section -->
  <section id="skills" class="container-fluid section-bg-2 py-5">
    <h2 class="text-center">Skills</h2>
    <div class="row text-center mt-4">
      <div class="col-md-4">
        <i class="fas fa-search fa-3x"></i>
        <h4>SEO Optimization</h4>
        <p>Writing content that ranks well on search engines.</p>
      </div>
      <div class="col-md-4">
        <i class="fas fa-feather-alt fa-3x"></i>
        <h4>Creative Writing</h4>
        <p>Creating narratives that engage and inspire readers.</p>
      </div>
      <div class="col-md-4">
        <i class="fas fa-copy fa-3x"></i>
        <h4>Copywriting</h4>
        <p>Crafting concise, effective copy for brands and products.</p>
      </div>
    </div>
  </section>

  <!-- Portfolio Section -->
  <section id="portfolio" class="container-fluid section-bg-1 py-5">
    <h2 class="text-center">My Work</h2>
    <div class="row mt-4">
      <div class="col-md-4 mt-2">
        <div class="portfolio-item shadow-sm">
            <a href="https://expertvagabond.com/professional-travel-blogger/"><img src="{{asset('img/travel.webp')}}" class="img-fluid" alt="Portfolio 2"></a>
          <h4 class="mt-3">Tech Startup Blog</h4>
          <p>Crafting impactful blog posts for a tech startup.</p>
        </div>
      </div>
      <div class="col-md-4 mt-2">
        <div class="portfolio-item shadow-sm">
            <a href="https://expertvagabond.com/professional-travel-blogger/"><img src="{{asset('img/travel.webp')}}" class="img-fluid" alt="Portfolio 2"></a>
          <h4 class="mt-3">Tech Startup Blog</h4>
          <p>Crafting impactful blog posts for a tech startup.</p>
        </div>
      </div>
      <div class="col-md-4 mt-2">
        <div class="portfolio-item shadow-sm">
          <a href="https://expertvagabond.com/professional-travel-blogger/"><img src="{{asset('img/travel.webp')}}" class="img-fluid" alt="Portfolio 2"></a>
          <h4 class="mt-3">Travel Blog</h4>
          <p>A detailed travel blog post with creative storytelling.</p>
        </div>
      </div>
      <div class="col-md-4 mt-2">
        <div class="portfolio-item shadow-sm">
            <a href="https://expertvagabond.com/professional-travel-blogger/"><img src="{{asset('img/travel.webp')}}" class="img-fluid" alt="Portfolio 2"></a>
          <h4 class="mt-3">E-commerce SEO</h4>
          <p>SEO-focused content for an e-commerce website.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="container-fluid section-bg-2 py-5">
    <h2 class="text-center">Get In Touch</h2>
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <form id="contactForm">
            @csrf
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" required>
            <span class="text-danger">@error('name') {{$message}} @enderror</span>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" required>
            <span class="text-danger">@error('email') {{$message}} @enderror</span>
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" name="message" id="message" rows="3" required></textarea>
            <span class="text-danger">@error('message') {{$message}} @enderror</span>
          </div>
          <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="text-center mt-5 p-4 bg-dark text-light">
    <p>© 2024 Ayush | Content Writer</p>
  </footer>

  <!-- Bootstrap JS and Popper.js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Custom JS -->
  <script src="{{asset('js/script.js')}}"></script>
  <!-- SweetAlert CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</body>
</html>

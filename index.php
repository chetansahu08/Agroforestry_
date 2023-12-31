<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Cinzel:wght@400;500;600;700;800;900&family=Playfair+Display+SC:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&family=Quicksand:wght@300;400;500;600;700&family=Zilla+Slab:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    <script
      src="https://kit.fontawesome.com/9282b81956.js"
      crossorigin="anonymous"
    ></script>
    <title>Hello, world!</title>
  </head>
  <body>
    <!-- <h1>Hello, world!</h1> -->
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Agroforestry</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Dropdown
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="seeds.php">Seeds</a></li>
                <li><a class="dropdown-item" href="pesticides.php">pesticides</a></li>
                <li><a class="dropdown-item" href="tools.php">Tools</a></li>
                <li><a class="dropdown-item" href="plants.html">Plants</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">Disabled</a>
            </li>
          </ul>
          <!-- <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form> -->
          <div class="dropdown ms-auto">
            <button
              class="btn btn-outline-dark bg-secondary dropdown-toggle"
              type="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              Account
            </button>
            <ul class="dropdown-menu bg-secondary">
              <li><a class="dropdown-item account" href="login.php">login</a></li>
              <li>
                <a class="dropdown-item account" href="signup.php">register</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!-- Carousel -->
    <!-- <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <video class="d-block w-100 h-auto" autoplay muted loop>
                <source src="images/videos/carousel-1.mp4" type="video/mp4">
                <source src="images/videos/carousel-1.ogg" type="video/ogg">
              </video>
          </div>
          <div class="carousel-item">
            <video class="d-block w-100 h-auto" autoplay muted loop>
                <source src="images/videos/carousel-2.mp4" type="video/mp4">
                <source src="images/videos/carousel-2.ogg" type="video/ogg">
              </video>
          </div>
          <div class="carousel-item">
            <video class="d-block w-100 h-auto" autoplay muted loop>
                <source src="images/videos/carousel-3.mp4" type="video/mp4">
                <source src="images/videos/carousel-3.ogg" type="video/ogg">
              </video>
          </div>
        </div>
      </div> -->
    <div
      id="carouselExampleControls"
      class="carousel slide carousel-fade"
      data-bs-ride="carousel"
    >
      <div class="carousel-inner">
        <div class="carousel-item active">
          <video class="d-block w-100 h-auto" autoplay muted loop>
            <source src="images/videos/carousel-1.mp4" type="video/mp4" />
            <source src="images/videos/carousel-1.ogg" type="video/ogg" />
          </video>
        </div>
        <div class="carousel-item">
          <video class="d-block w-100 h-auto" autoplay muted loop>
            <source src="images/videos/carousel-2.mp4" type="video/mp4" />
            <source src="images/videos/carousel-2.ogg" type="video/ogg" />
          </video>
        </div>
        <div class="carousel-item">
          <video class="d-block w-100 h-auto" autoplay muted loop>
            <source src="images/videos/carousel-3.mp4" type="video/mp4" />
            <source src="images/videos/carousel-3.ogg" type="video/ogg" />
          </video>
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleControls"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleControls"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="features">
      <img
        class="f-img"
        src="images/pexels-anna-shvets-5231137.jpg"
        alt="gardener-gardening"
      />

      <div class="f-text">
        <h3>Gardening</h3>
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores eos
          nihil in mollitia error saepe, eum ea odio commodi itaque enim,
          voluptate facere adipisci maxime ipsam similique culpa laborum, porro
          laboriosam quo?
        </p>
        <p>
          Quisquam officiis nihil aliquam quod, tempore recusandae
          necessitatibus maiores ea at sed ab laborum nemo nulla, quidem veniam
          nam repellat, totam illum molestias vero est suscipit dolor
          perspiciatis. Autem voluptatum accusamus et.
        </p>
      </div>
    </div>

    <div class="features">
      <div class="f-text">
        <h3>Seeds</h3>
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores eos
          nihil in mollitia error saepe, eum ea odio commodi itaque enim,
          voluptate facere adipisci maxime ipsam similique culpa laborum, porro
          laboriosam quo?
        </p>
        <p>
          Quisquam officiis nihil aliquam quod, tempore recusandae
          necessitatibus maiores ea at sed ab laborum nemo nulla, quidem veniam
          nam repellat, totam illum molestias vero est suscipit dolor
          perspiciatis. Autem voluptatum accusamus et.
        </p>
      </div>
      <img
        class="f-img"
        src="images/pexels-eva-bronzini-6086300.jpg"
        alt="gardener-gardening"
      />
    </div>

    <div class="features">
      <img
        class="f-img"
        src="images//pexels-anthony-📷📹🙂-132428.jpg"
        alt="gardener-gardening"
      />
      <div class="f-text">
        <h3>Plantation</h3>
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores eos
          nihil in mollitia error saepe, eum ea odio commodi itaque enim,
          voluptate facere adipisci maxime ipsam similique culpa laborum, porro
          laboriosam quo?
        </p>
        <p>
          Quisquam officiis nihil aliquam quod, tempore recusandae
          necessitatibus maiores ea at sed ab laborum nemo nulla, quidem veniam
          nam repellat, totam illum molestias vero est suscipit dolor
          perspiciatis. Autem voluptatum accusamus et.
        </p>
      </div>
    </div>

    <div class=" video-des">
      <h2>Why there is need of forestry ?</h2>
      <p class="video-des-para">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium
        non quas ex minus quam, quis consectetur deleniti adipisci, recusandae
        incidunt voluptatem aliquam exercitationem soluta ipsa alias vero
        minima, doloremque natus. Lorem, ipsum dolor sit amet consectetur
        adipisicing elit. Molestiae iste quae in porro nesciunt aliquid illum
        sequi aut earum odio. Tempora dignissimos voluptatem voluptatibus
        doloremque et laborum totam dolorum ipsa!
      </p>
      <video width="450" height="240" controls>
        <source src="images/videos/video (1080p).mp4" type="video/mp4">
        <source src="images/videos/video (1080p).mp4.ogg" type="video/ogg">
      Your browser does not support the video tag.
      </video>
    </div>

    <!-- footer -->
    <div class="footer-bottom">
      <div class="row">
        <div class="col col-1">
          <h5 class="footer-h5">Agroforestry</h5>
          <p><a href="#" class="footer-links">News</a></p>
          <p><a href="#" class="footer-links">Partners</a></p>
          <p><a href="#" class="footer-links">Contact Us</a></p>
          <p><a href="#" class="footer-links">Terms of Use</a></p>
          <p><a href="#" class="footer-links">About Us</a></p>
        </div>
        <div class="col col-1">
          <h5 class="footer-h6">Social</h5>
          <p><a href="" class="footer-links">Facebook</a></p>
          <p><a href="" class="footer-links">Instagram</a></p>
          <p><a href="" class="footer-links">Twitter</a></p>
        </div>
        <div class="col col-1">
          <h5 class="footer-h6">Service</h5>
          <p><a href="" class="footer-links">Compare</a></p>
          <p><a href="" class="footer-links">Feedback</a></p>
          <p><a href="" class="footer-links">Bug Report</a></p>
        </div>
        <div class="col col-1">
          <h5 class="footer-h6">Activity</h5>
          <p><a href="" class="footer-links">Influencers</a></p>
          <p><a href="" class="footer-links">Affiliate</a></p>
          <p><a href="" class="footer-links">Co-branding</a></p>
          <p><a href="" class="footer-links">Honor</a></p>
          <p><a href="" class="footer-links">Giveaway</a></p>
        </div>
        <div class="col col-2">
          <h5 class="footer-h6">Newsletter Subscription</h5>
          <form action="">
            <div class="input-group mb-3">
              <input
                type="text"
                class="form-control"
                placeholder="Your Email"
                aria-label="Recipient's username"
                aria-describedby="button-addon2"
              />
              <button class="btn btn-dark" type="button" id="button-addon2">
                Submit
              </button>
            </div>
          </form>
        </div>
      </div>
      <div class="row mt-5 credits">
        <p>
          Copyright<i class="fa fa-copyright" aria-hidden="true"></i> 2022
          AGRO-FORESTRY.All rights reserved.
        </p>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
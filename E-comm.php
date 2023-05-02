<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-Commerc</title>
  <link rel="icon" href="logo.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <style>
    .section{
      padding: 60px 0;
    }

    .navbar {
  top: 5;
  width: 100%;
  z-index: 999;
  background: #41a4c3;
}

  </style>
</head>
<body>

  <!-- navbar -->
  <nav class="navbar navbar-expand-md navbar-light pt-5 pb-4">
    <div class="container-xxl">
      <!-- navbar brand / title -->
      <a class="navbar-brand" href="#intro">
        <span class="text-secondary fw-bold">
          <i class="bi bi-book-half"></i>
          CODING LIFE
        </span>
      </a>
      <!-- toggle button for mobile nav -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- navbar links -->
      <div class="collapse navbar-collapse justify-content-end align-center" id="main-nav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#topics">About The Feeds</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#reviews">Reviews</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Get in Touch</a>
          </li>
          <li class="nav-item d-md-none">
            <a class="nav-link" href="#pricing">Pricing</a>
          </li>
          <li class="nav-item ms-2 d-none d-md-inline">
            <a class="btn btn-secondary" href="logo.php">buy now</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>
<div style="padding-top: 30; padding-bottom: 50;">
  <!-- main image & intro text -->
  <section id="intro">
    <div class="container-lg">
      <div class="row g-4 justify-content-center align-items-center">
        <div class="col-md-5 text-center text-md-start">
          <h1>
            <div class="display-1">Feed Back</div></h1>
            <h3><div class="text-muted">Your feedback is our fuel for growth.</div></h3>
          <p class="lead my-4 text-muted">We're here to serve you better, and your feedback helps us do that.</p>
          <a href="logo.php" class="btn btn-secondary btn-lg">Buy Now</a>
          <!-- open sidebar / offcanvas -->
          <a href="#sidebar" class="d-block mt-3" data-bs-toggle="offcanvas" role="button" aria-controls="sidebar">
            Explore my other Forms
          </a>
        </div>
        <div class="col-md-5 text-center d-none d-md-block">
          <!-- tooltip -->
          <span class="tt" data-bs-placement="bottom" title="Form logo">
            <img src="logo.png" class="img-fluid" alt="eform">
          </span>
        </div>
      </div>
    </div>
  </section><br><br>

  <!-- pricing plans -->
  <section id="pricing" class="bg-light mt-5">
    <div class="container">
      <div class="text-center"><br><br>
        <h2>Pricing Plans</h2>
        <p class="lead text-muted">Choose a pricing plan to suit you.</p>
      </div>

      <div class="row my-5 g-0 align-items-center justify-content-center">
        <div class="col-8 col-lg-4 col-xl-3">
          <div class="card border-0">
            <div class="card-body text-center py-4">
              <h4 class="card-title">Starter Edition</h4>
              <p class="lead card-subtitle">form download only</p>
              <p class="display-5 my-4 text-primary fw-bold">₹199</p>
              <p class="card-text mx-5 text-muted d-none d-lg-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, vitae magni! Repellat commodi a fuga corporis saepe dolorum.</p>
              <a href="#" class="btn btn-outline-primary btn-lg mt-3">
                Buy Now
              </a>
            </div>
          </div>
        </div>

        <div class="col-9 col-lg-4">
          <div class="card border-primary border-2">
            <div class="card-header text-center text-primary">Most Popular</div>
            <div class="card-body text-center py-5">
              <h4 class="card-title">Complete Edition</h4>
              <p class="lead card-subtitle">form download & all updates</p>
              <p class="display-4 my-4 text-primary fw-bold">₹289</p>
              <p class="card-text mx-5 text-muted d-none d-lg-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, vitae magni! Repellat commodi a fuga corporis saepe dolorum.</p>
              <a href="#" class="btn btn-outline-primary btn-lg mt-3">
                Buy Now
              </a>
            </div>
          </div>
        </div>

        <div class="col-8 col-lg-4 col-xl-3">
          <div class="card border-0">
            <div class="card-body text-center py-4">
              <h4 class="card-title">Ultimate Edition</h4>
              <p class="lead card-subtitle">download, updates & extras</p>
              <p class="display-5 my-4 text-primary fw-bold">₹249</p>
              <p class="card-text mx-5 text-muted d-none d-lg-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, vitae magni! Repellat commodi a fuga corporis saepe dolorum.</p>
              <a href="#" class="btn btn-outline-primary btn-lg mt-3">
                Buy Now
              </a>
            </div>
          </div>
        </div>
      </div>

    </div><!-- end container -->
  </section>

  <!-- topics at a glance -->
  <section id="topics">
    <div class="container-md">
      <div class="text-center">
        <h2>Inside the Form...</h2>
        <p class="lead text-muted">A quick glance at the topics you'll see</p>
      </div>
      <div class="row my-5 g-5 justify-content-around align-items-center">
        <div class="col-6 col-lg-4">
          <img src="logo.png" class="img-fluid" alt="form logo">
        </div>
        <div class="col-lg-6">
          
          <!-- accordion -->
          <div class="accordion" id="chapters">
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading-1">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#chapter-1" aria-expanded="true" aria-controls="chapter-1">
                  Chapter 1 - Your First Web Page
                </button>
              </h2>
              <div id="chapter-1" class="accordion-collapse collapse show" aria-labelledby="heading-1" data-bs-parent="#chapters">
                <div class="accordion-body">
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi tempore quibusdam quas vitae, animi ipsam nulla sunt alias.<br>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading-2">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#chapter-2" aria-expanded="false" aria-controls="chapter-2">
                  Chapter 2 - Mastering CSS
                </button>
              </h2>
              <div id="chapter-2" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#chapters">
                <div class="accordion-body">
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading-3">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#chapter-3" aria-expanded="false" aria-controls="chapter-1">
                  Chapter 3 - The Power of JavaScript
                </button>
              </h2>
              <div id="chapter-3" class="accordion-collapse collapse" aria-labelledby="heading-3" data-bs-parent="#chapters">
                <div class="accordion-body">
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading-4">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#chapter-4" aria-expanded="false" aria-controls="chapter-4">
                  Chapter 4 - Storing Data (Firebase Databases)
                </button>
              </h2>
              <div id="chapter-4" class="accordion-collapse collapse" aria-labelledby="heading-4" data-bs-parent="#chapters">
                <div class="accordion-body">
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading-5">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#chapter-5" aria-expanded="false" aria-controls="chapter-5">
                  Chapter 5 - User Authentication
                </button>
              </h2>
              <div id="chapter-5" class="accordion-collapse collapse" aria-labelledby="heading-5" data-bs-parent="#chapters">
                <div class="accordion-body">
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- reviews list -->
  <section id="reviews" class="bg-light">
    <div class="container-lg">
      <div class="text-center">
        <h2><i class="bi bi-stars"></i>Form Reviews</h2>
        <p class="lead">What my students have said about the Form...</p>
      </div>

      <div class="row justify-content-center my-5">
        <div class="col-lg-8">
          <div class="list-group">
            <div class="list-group-item py-3">
              <div class="pb-2">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
              <h5 class="mb-1">A must-buy for every aspiring web dev</h5>
              <p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur error veniam sit expedita est illo maiores neque quos nesciunt, reprehenderit autem odio commodi labore praesentium voluptate repellat in id quisquam.</p>
              <small>Review by Mario</small>
            </div>
            <div class="list-group-item py-3">
              <div class="pb-2">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
              <h5 class="mb-1">A must-buy for every aspiring web dev</h5>
              <p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur error veniam sit expedita est illo maiores neque quos nesciunt, reprehenderit autem odio commodi labore praesentium voluptate repellat in id quisquam.</p>
              <small>Review by Mario</small>
            </div>
            <div class="list-group-item py-3">
              <div class="pb-2">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-half"></i>
              </div>
              <h5 class="mb-1">A must-buy for every aspiring web dev</h5>
              <p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur error veniam sit expedita est illo maiores neque quos nesciunt, reprehenderit autem odio commodi labore praesentium voluptate repellat in id quisquam.</p>
              <small>Review by Mario</small>
            </div>
            <div class="list-group-item py-3">
              <div class="pb-2">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
              <h5 class="mb-1">A must-buy for every aspiring web dev</h5>
              <p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur error veniam sit expedita est illo maiores neque quos nesciunt, reprehenderit autem odio commodi labore praesentium voluptate repellat in id quisquam.</p>
              <small>Review by Mario</small>
            </div>
            <div class="list-group-item py-3">
              <div class="pb-2">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-half"></i>
              </div>
              <h5 class="mb-1">A must-buy for every aspiring web dev</h5>
              <p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur error veniam sit expedita est illo maiores neque quos nesciunt, reprehenderit autem odio commodi labore praesentium voluptate repellat in id quisquam.</p>
              <small>Review by Mario</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- get updates / modal trigger -->
  <section class="bg-light">
    <div class="container">
      <div class="text-center">
        <h2>Stay in The Loop</h2>
        <p class="lead">Get the latest updates as they happen...</p>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-8 text-center">
          <p class="text-muted my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero exercitationem voluptatibus porro, hic asperiores fuga illo voluptates obcaecati deleniti veritatis sunt saepe quasi deserunt ex ipsum. Est possimus, aspernatur, vitae eligendi rem odit quaerat, ipsum pariatur ratione maxime delectus fuga minus accusamus dolores iusto maiores accusantium cumque magnam placeat quia!</p>
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reg-modal">
            Register for Updates
          </button>
        </div>
      </div>
    </div>
  </section>

  <!-- modal itself -->
  <div class="modal fade" id="reg-modal" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal-title">Get the Latest Updates</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis, exercitationem laboriosam nihil minus voluptatibus harum aliquam consequatur pariatur inventore dignissimos illum excepturi ratione ipsum sit iusto alias eligendi fugit laborum?</p>
          <label for="modal-email" class="form-label">Your email address:</label>
          <input type="text" class="form-control" id="modal-email" placeholder="e.g. RushiBhansali@example.com">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </div>
  </div>

  <!-- side panel / offcanvas -->
  <div class="offcanvas offcanvas-start" tabindex="-1" id="sidebar" aria-labelledby="sidebar-label">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="sidebar-label">My Other Forms</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. In minima ducimus excepturi quasi tempore fugit quis voluptatibus aut error possimus, tenetur natus magni quam voluptatem quae eligendi repudiandae delectus eaque!</p>
      <!-- dropdown -->
      <div class="dropdown mt-3">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="book-dropdown" data-bs-toggle="dropdown">
          Choose a form
        </button>
        <ul class="dropdown-menu" aria-labelledby="book-dropdown">
          <li><a class="dropdown-item" href="#">Become a React Superhero</a></li>
          <li><a class="dropdown-item" href="#">Conquering Vue.js</a></li>
          <li><a class="dropdown-item" href="#">Levelling up Your Next.js</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <script>
    const tooltips = document.querySelectorAll('.tt')
    tooltips.forEach(t => {
      new bootstrap.Tooltip(t)
    })
  </script>
</body>
</html>
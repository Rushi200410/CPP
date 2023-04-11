<html lang="en">
<head>
  <title>Home Page</title>
  <link rel="icon" href="logo.png"> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <style type="text/css">
		body {
			background-image: url('hb.png');
			background-repeat: no-repeat;
			background-size: cover;
		}

 .scale-up-center {
	animation: scale-up-center 0.8s 0.1s forwards;
}
@keyframes scale-up-center {
  0% {
    transform: scale(0.5);
  }
  100% {
    transform: scale(1);
  }
}

 .tracking-in-contract-bck-bottom {
	-webkit-animation: tracking-in-contract-bck-bottom 1s steps(200000000000000, end) 0.5s both;
	        animation: tracking-in-contract-bck-bottom 1s steps(200000000000000, end) 0.5s both;
}

 @-webkit-keyframes tracking-in-contract-bck-bottom {
  0% {
    letter-spacing: 1em;
    -webkit-transform: translateZ(400px) translateY(300px);
            transform: translateZ(400px) translateY(300px);
    opacity: 0;
  }
  40% {
    opacity: 0.6;
  }
  100% {
    -webkit-transform: translateZ(0) translateY(0);
            transform: translateZ(0) translateY(0);
    opacity: 1;
  }
}
@keyframes tracking-in-contract-bck-bottom {
  0% {
    letter-spacing: 1em;
    -webkit-transform: translateZ(400px) translateY(300px);
            transform: translateZ(400px) translateY(300px);
    opacity: 0;
  }
  40% {
    opacity: 0.6;
  }
  100% {
    -webkit-transform: translateZ(0) translateY(0);
            transform: translateZ(0) translateY(0);
    opacity: 1;
  }
}

	</style>
</head>
<body class="scale-up-center">
  <!-- navbar -->
  <nav class="navbar navbar-expand-md pt-3 pb-3" fixed>
    <div class="container-xxl">
      <!-- navbar brand / title -->
      <a class="navbar-brand" href="#intro">
        <span class="text-danger fw-bold">
          CPP Finel Year Project
        </span>
      </a>
      <!-- toggle button for mobile nav -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- navbar links -->
      <div class="collapse navbar-collapse justify-content-end" id="main-nav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-danger" href="#topics">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-danger" href="#reviews">New</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-danger" href="#contact">Update</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-danger" href="#pricing">Delete</a>
          </li>          
        </ul>
      </div>
    </div>
  </nav><br><br><br><br>

  <!-- main image & intro text -->
  <section id="intro">
    <div class="container-lg">
    <div align="center" class="tracking-in-contract-bck-bottom">
      <Button class="btn-lg bg-primary" id="next-Button" onclick="FeedBackForm()">New Form</Button><script src='buttonscript.js'></script><br><br>
      <Button class="btn-lg bg-secondary" id="next-Button" onclick="tracking()">Track Previous Form</Button><script src='buttonscript.js'></script><br><br>
      <Button class="btn-lg bg-warning" id="next-Button" onclick="update()">Update Previous Form</Button><script src='buttonscript.js'></script><br><br>
      <Button class="btn-lg bg-transparent" id="next-Button" onclick="remove()">Delete Previous Form</Button><script src='buttonscript.js'></script><br><br>
      
    </div>
    </div>
  </section>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
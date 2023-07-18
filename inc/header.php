<?php  
$uri = $_SERVER['REQUEST_URI'];
?>
<div id="app">
      <header data-aos="fade-down">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 p-0">
              <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid p-0">
                  <a class="navbar-brand" href="/"><img src="/assets/images/header-logo.png" class="img-fluid" alt=""></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse extrahead" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link <?php if($uri == "/") { echo "active"; } ?>" aria-current="page" href="/">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link <?php if($uri == "/about/") { echo "active"; }?>" href="/about/">About</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link <?php if($uri == "/search/") { echo "active"; } ?>" href="/find-expert/">Find Expert </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link <?php if($uri == "/contact/") { echo "active"; } ?>" href="#">Services</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link <?php if($uri == "/contact/") { echo "active"; } ?>" href="#">Blogs</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link <?php if($uri == "/contact/") { echo "active"; } ?>" href="#">Contact</a>
                      </li>
                    </ul>
                  </div>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav2">
                            <li class="nav-item">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        Are You A Expert?
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#"><i class="fas fa-user"></i>Login</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="fas fa-user-plus"></i>Sign Up</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </header> 
  
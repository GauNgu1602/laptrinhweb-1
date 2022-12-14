<html>
  <head>
      <title>Trang chủ</title> 
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="2.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  </head>
  <body>
    <div class = "container-fluid">
      <div class="header">
        <div class = "row text-center cursive"> 
          <div class = "col text-center">
            Chào mừng đến với The A.N.H Bookshop!
            <a href="#" class ="has-text-action-primary" style="font-weight:bold">
              <u>Learn more here!</u>
            </a>
          </div>
        </div>
      </div>
      <div class="menu" id="action-menu">
        <nav class="navbar navbar-expand navbar-light sticky-top">
          <a class = "navbar-brand" href="index.php"><img alt="The A.N.H Bookshop's Logo" src="image/temp.jpg" width="75"/></a>
          <span style="color: black; font-weight:bold">The A.N.H Bookshop</span>
          <div class="collapse navbar-collapse" id = "navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active"><a class="nav-link" href ="#">TRANG CHỦ</a></li>
              <li class="nav-item active"><a class="nav-link" href ="#" >TẤT CẢ SÁCH</a></li>
              <li class="nav-item active dropdown"><a class="nav-link drop-btn" href ="#" >TIỂU THUYẾT</a>
                <div class="dropdown-menu">
                  <a href="#">COMIC</a>
                  <a href="#">MANGA</a>
                  <a href="#">NOVEL</a>
                </div>
              </li>
              <li class="nav-item active"><a class="nav-link" href ="#" >SÁCH THAM KHẢO</a></li>
              <li class="nav-item active"><a class="nav-link" href ="#" >SELF-HELP</a></li>
            </ul>
          </div>
          <div class="collapse navbar-collapse" id = "navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a href="#" title="Tài khoản">
                <span class="material-symbols-outlined" style="color:black">person</span>
                </a>
              </li>
              <li class="nav-item active">
                <a href="#" title="Giỏ hàng">
                <span class="material-symbols-outlined" style="color:black">shopping_cart</span>
                </a>
              </li>
              <li class="nav-item active">
                <a href="#" title="Tìm kiếm" onClick="showsearchbar()">
                <span class="material-symbols-outlined" style="color:black">search</span>
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </div> 
      <div class="searchbar" id="search-bar">
        <button id="close-bar" onClick="hidesearchbar()">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z" />
            <path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z" />
          </svg>
        </button>
        <form class="d-flex justify-content-center" method="get" action="index.php">
          <input type="hidden" name="to" value="search">
          <input type="hidden" name="from" value="searchbar">
          <input type="search" name="key" class="search-box" id="searchbar" placeholder="Tìm kiếm">
          <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
        </form>
      </div>
      <div class="banner">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="image/chiasesach.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="image/8 thang 3.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="image/sachhay.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="content">
        <div class="row">
          <div class="col heading">
            <h2> Best Seller </h2>
          </div>
        </div>
        <div class="row product-list">
          <div class='col-lg-3 col-md-6 col-6 products'>
            <div class='pro-img'>
                <div class='pro-sale'><span>-30%</span></div>
                <a href="#">
                    <img class='pro-img pro-img-1' src="image/sachhay.jpg">
                    <img class='pro-img' src="image/chiasesach.jpg">
                </a>
                <div class='pro-btn d-flex'>
                  <a href="#" class='hidden-btn'><svg width='16' height='16' fill='currentColor' class='bi bi-eye' viewBox='0 0 16 16'>
                  <path d='M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z'/>
                  <path d='M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z'/>
                </svg></a>
                </div>
            </div>
            <div class='pro-detail'>
              <h3 class='pro-name'><a href="#">Abc</a></h3>
              <div class='pro-price'>
                  <p class='pro-price sale'>1,050,000đ 
                      <span class='pro-price-retail'><del>1,500,000₫</del></span>
                  </p>
              </div>
            </div>
          </div>
          <div class='col-lg-3 col-md-6 col-6 products'>
            <div class='pro-img'>
                <div class='pro-sale'><span>-30%</span></div>
                <a href="#">
                    <img class='pro-img pro-img-1' src="image/sachhay.jpg">
                    <img class='pro-img' src="image/chiasesach.jpg">
                </a>
                <div class='pro-btn d-flex'>
                  <a href="#" class='hidden-btn'><svg width='16' height='16' fill='currentColor' class='bi bi-eye' viewBox='0 0 16 16'>
                  <path d='M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z'/>
                  <path d='M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z'/>
                </svg></a>
                </div>
            </div>
            <div class='pro-detail'>
              <h3 class='pro-name'><a href="#">Abc</a></h3>
              <div class='pro-price'>
                  <p class='pro-price sale'>1,050,000đ 
                      <span class='pro-price-retail'><del>1,500,000₫</del></span>
                  </p>
              </div>
            </div>
          </div>
          <div class='col-lg-3 col-md-6 col-6 products'>
            <div class='pro-img'>
                <div class='pro-sale'><span>-30%</span></div>
                <a href="#">
                    <img class='pro-img pro-img-1' src="image/sachhay.jpg">
                    <img class='pro-img' src="image/chiasesach.jpg">
                </a>
                <div class='pro-btn d-flex'>
                  <a href="#" class='hidden-btn'><svg width='16' height='16' fill='currentColor' class='bi bi-eye' viewBox='0 0 16 16'>
                  <path d='M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z'/>
                  <path d='M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z'/>
                </svg></a>
                </div>
            </div>
            <div class='pro-detail'>
              <h3 class='pro-name'><a href="#">Abc</a></h3>
              <div class='pro-price'>
                  <p class='pro-price sale'>1,050,000đ 
                      <span class='pro-price-retail'><del>1,500,000₫</del></span>
                  </p>
              </div>
            </div>
          </div>
          <div class='col-lg-3 col-md-6 col-6 products'>
            <div class='pro-img'>
                <div class='pro-sale'><span>-30%</span></div>
                <a href="#">
                    <img class='pro-img pro-img-1' src="image/sachhay.jpg">
                    <img class='pro-img' src="image/chiasesach.jpg">
                </a>
                <div class='pro-btn d-flex'>
                  <a href="#" class='hidden-btn'><svg width='16' height='16' fill='currentColor' class='bi bi-eye' viewBox='0 0 16 16'>
                  <path d='M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z'/>
                  <path d='M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z'/>
                </svg></a>
                </div>
            </div>
            <div class='pro-detail'>
              <h3 class='pro-name'><a href="#">Abc</a></h3>
              <div class='pro-price'>
                  <p class='pro-price sale'>1,050,000đ 
                      <span class='pro-price-retail'><del>1,500,000₫</del></span>
                  </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col heading">
            <h2> Tiểu thuyết </h2>
          </div>
        </div>
        <div class="row product-list">
          <div class='col-lg-3 col-md-6 col-6 products'>
            <div class='pro-img'>
                <div class='pro-sale'><span>-30%</span></div>
                <a href="#">
                    <img class='pro-img pro-img-1' src="image/sachhay.jpg">
                    <img class='pro-img' src="image/chiasesach.jpg">
                </a>
                <div class='pro-btn d-flex'>
                  <a href="#" class='hidden-btn'><svg width='16' height='16' fill='currentColor' class='bi bi-eye' viewBox='0 0 16 16'>
                  <path d='M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z'/>
                  <path d='M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z'/>
                </svg></a>
                </div>
            </div>
            <div class='pro-detail'>
              <h3 class='pro-name'><a href="#">Abc</a></h3>
              <div class='pro-price'>
                  <p class='pro-price sale'>1,050,000đ 
                      <span class='pro-price-retail'><del>1,500,000₫</del></span>
                  </p>
              </div>
            </div>
          </div>
          <div class='col-lg-3 col-md-6 col-6 products'>
            <div class='pro-img'>
                <div class='pro-sale'><span>-30%</span></div>
                <a href="#">
                    <img class='pro-img pro-img-1' src="image/sachhay.jpg">
                    <img class='pro-img' src="image/chiasesach.jpg">
                </a>
                <div class='pro-btn d-flex'>
                  <a href="#" class='hidden-btn'><svg width='16' height='16' fill='currentColor' class='bi bi-eye' viewBox='0 0 16 16'>
                  <path d='M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z'/>
                  <path d='M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z'/>
                </svg></a>
                </div>
            </div>
            <div class='pro-detail'>
              <h3 class='pro-name'><a href="#">Abc</a></h3>
              <div class='pro-price'>
                  <p class='pro-price sale'>1,050,000đ 
                      <span class='pro-price-retail'><del>1,500,000₫</del></span>
                  </p>
              </div>
            </div>
          </div>
          <div class='col-lg-3 col-md-6 col-6 products'>
            <div class='pro-img'>
                <div class='pro-sale'><span>-30%</span></div>
                <a href="#">
                    <img class='pro-img pro-img-1' src="image/sachhay.jpg">
                    <img class='pro-img' src="image/chiasesach.jpg">
                </a>
                <div class='pro-btn d-flex'>
                  <a href="#" class='hidden-btn'><svg width='16' height='16' fill='currentColor' class='bi bi-eye' viewBox='0 0 16 16'>
                  <path d='M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z'/>
                  <path d='M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z'/>
                </svg></a>
                </div>
            </div>
            <div class='pro-detail'>
              <h3 class='pro-name'><a href="#">Abc</a></h3>
              <div class='pro-price'>
                  <p class='pro-price sale'>1,050,000đ 
                      <span class='pro-price-retail'><del>1,500,000₫</del></span>
                  </p>
              </div>
            </div>
          </div>
          <div class='col-lg-3 col-md-6 col-6 products'>
            <div class='pro-img'>
                <div class='pro-sale'><span>-30%</span></div>
                <a href="#">
                    <img class='pro-img pro-img-1' src="image/sachhay.jpg">
                    <img class='pro-img' src="image/chiasesach.jpg">
                </a>
                <div class='pro-btn d-flex'>
                  <a href="#" class='hidden-btn'><svg width='16' height='16' fill='currentColor' class='bi bi-eye' viewBox='0 0 16 16'>
                  <path d='M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z'/>
                  <path d='M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z'/>
                </svg></a>
                </div>
            </div>
            <div class='pro-detail'>
              <h3 class='pro-name'><a href="#">Abc</a></h3>
              <div class='pro-price'>
                  <p class='pro-price sale'>1,050,000đ 
                      <span class='pro-price-retail'><del>1,500,000₫</del></span>
                  </p>
              </div>
            </div>
          </div>
        </div><div class="row">
          <div class="col heading">
            <h2> Sách tham khảo </h2>
          </div>
        </div>
        <div class="row product-list">
          <div class='col-lg-3 col-md-6 col-6 products'>
            <div class='pro-img'>
                <div class='pro-sale'><span>-30%</span></div>
                <a href="#">
                    <img class='pro-img pro-img-1' src="image/sachhay.jpg">
                    <img class='pro-img' src="image/chiasesach.jpg">
                </a>
                <div class='pro-btn d-flex'>
                  <a href="#" class='hidden-btn'><svg width='16' height='16' fill='currentColor' class='bi bi-eye' viewBox='0 0 16 16'>
                  <path d='M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z'/>
                  <path d='M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z'/>
                </svg></a>
                </div>
            </div>
            <div class='pro-detail'>
              <h3 class='pro-name'><a href="#">Abc</a></h3>
              <div class='pro-price'>
                  <p class='pro-price sale'>1,050,000đ 
                      <span class='pro-price-retail'><del>1,500,000₫</del></span>
                  </p>
              </div>
            </div>
          </div>
          <div class='col-lg-3 col-md-6 col-6 products'>
            <div class='pro-img'>
                <div class='pro-sale'><span>-30%</span></div>
                <a href="#">
                    <img class='pro-img pro-img-1' src="image/sachhay.jpg">
                    <img class='pro-img' src="image/chiasesach.jpg">
                </a>
                <div class='pro-btn d-flex'>
                  <a href="#" class='hidden-btn'><svg width='16' height='16' fill='currentColor' class='bi bi-eye' viewBox='0 0 16 16'>
                  <path d='M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z'/>
                  <path d='M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z'/>
                </svg></a>
                </div>
            </div>
            <div class='pro-detail'>
              <h3 class='pro-name'><a href="#">Abc</a></h3>
              <div class='pro-price'>
                  <p class='pro-price sale'>1,050,000đ 
                      <span class='pro-price-retail'><del>1,500,000₫</del></span>
                  </p>
              </div>
            </div>
          </div>
          <div class='col-lg-3 col-md-6 col-6 products'>
            <div class='pro-img'>
                <div class='pro-sale'><span>-30%</span></div>
                <a href="#">
                    <img class='pro-img pro-img-1' src="image/sachhay.jpg">
                    <img class='pro-img' src="image/chiasesach.jpg">
                </a>
                <div class='pro-btn d-flex'>
                  <a href="#" class='hidden-btn'><svg width='16' height='16' fill='currentColor' class='bi bi-eye' viewBox='0 0 16 16'>
                  <path d='M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z'/>
                  <path d='M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z'/>
                </svg></a>
                </div>
            </div>
            <div class='pro-detail'>
              <h3 class='pro-name'><a href="#">Abc</a></h3>
              <div class='pro-price'>
                  <p class='pro-price sale'>1,050,000đ 
                      <span class='pro-price-retail'><del>1,500,000₫</del></span>
                  </p>
              </div>
            </div>
          </div>
          <div class='col-lg-3 col-md-6 col-6 products'>
            <div class='pro-img'>
                <div class='pro-sale'><span>-30%</span></div>
                <a href="#">
                    <img class='pro-img pro-img-1' src="image/sachhay.jpg">
                    <img class='pro-img' src="image/chiasesach.jpg">
                </a>
                <div class='pro-btn d-flex'>
                  <a href="#" class='hidden-btn'><svg width='16' height='16' fill='currentColor' class='bi bi-eye' viewBox='0 0 16 16'>
                  <path d='M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z'/>
                  <path d='M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z'/>
                </svg></a>
                </div>
            </div>
            <div class='pro-detail'>
              <h3 class='pro-name'><a href="#">Abc</a></h3>
              <div class='pro-price'>
                  <p class='pro-price sale'>1,050,000đ 
                      <span class='pro-price-retail'><del>1,500,000₫</del></span>
                  </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer row text-center">
          <div class ="col-md-4">
            <hr class="light"/>
            <h5> Giới thiệu</h5>
            <hr class="light"/>
            <p>Vài dòng giới thiệu</p>
          </div>
          <div class ="col-md-4">
            <hr class="light"/>
            <h5> Founder:</h5>
            <hr class="light"/>
            <p>Đỗ Thị Phương Anh</p>
            <p>Nông Thảo Hiền</p>
            <p>Đặng Thị Kim Ngân</p>
          </div>
          <div class ="col-md-4">
            <hr class="light"/>
            <h5> Liên hệ</h5>
            <hr class="light"/>
            <p>Phone-number</p>
            <p>Address</p>
            <p>Email</p>
          </div>
          <div class="col-12">
            <hr class="light-100">
            <p>Đây là sản phẩm mô phỏng phục vụ cho môn học của sinh viên</p>
            <h5>&copy; Đại học Kinh tế Thành phố Hồ Chí Minh, 2022</h5>
          </div>
      </div>
    </div>
  </div>
  <script src="header.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
  </body>
</html>
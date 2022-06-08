<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../resources/css/trangchu/header.css">
    <link rel="shortcut icon" href="https://smc.vn/wp-content/uploads/2019/12/logo.png" type="image/x-icon">
    
    @yield("head")
</head>
<body>

  <div class="page-wrapper">
    <div class="header-wrapper">
      <header id="header" class="header-builder">
        <div class="header-top">
          @yield("header-top")
        </div>
        <div class="header-main">
          @yield("header-main")
        </div>
        <div class="header-bottom">
          @yield("header-bottom")
        </div>
      </header>
    </div>

    <div class="main">
      <div class="container">
        <div class="page-content">
          <div class="slider">
            @yield("slider")
          </div>
          <div class="home-intro">
            @yield("intro")
          </div>
          <div class="home-services">
            @yield("services")
          </div>
          <div class="home-news">
            @yield("news")
          </div>
          <div class="home-partner">
            @yield("partner")
          </div>
        </div>
      </div>
    </div>

    <div class="footer-wrapper">
      <div class="footer-main">
        @yield("footer-main")
      </div>
      <div class="footer-bottom">
        @yield("footer-bottom")
      </div>
    </div>
  </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../public/frontend/css/app.css">
    <link rel="shortcut icon" href="https://ezland.vn/themes/ezland/images/ezland-icon.png" type="image/x-icon">
    
    @yield("head")
</head>
<body>
  <div class="container">
      <div class="row">
          <div class="col">
            @yield("content")
          </div>
          <div class="col">
            @yield("sidebar")
          </div>
      </div>
  </div>     
</body>
</html>
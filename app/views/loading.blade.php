<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="refresh" content="5;URL='./{{$token}}'" />
<title>Loading</title>

{{ HTML::style('http://yui.yahooapis.com/pure/0.5.0/pure-min.css'); }}
{{ HTML::style('http://purecss.io/css/layouts/side-menu.css'); }}
{{ HTML::style('styles/loading.css'); }}
{{ HTML::style('styles/p4.css'); }}

</head>
<body>

  <h1 class="loading-title">App is still loading</h1>
  <!-- Loading animation container -->
  <div class="loading">
    <!-- Spin track (optional) -->
    <div class="track"></div>
    <!-- We make this div spin -->
    <div class="spinner">
      <!-- Mask of the quarter of circle -->
      <div class="mask">
        <!-- Inner masked circle -->
        <div class="maskedCircle"></div>
      </div>
    </div>
  </div>
</body>
</html>
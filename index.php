<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Insert text to jpg images</title>

    <!-- Bootstrap core CSS -->
    <link href="./dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="./dist/css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="./assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="theme.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Text2Jpg</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container theme-showcase" role="main" style="margin-top:50px">
            
     <div class="row">
	 <div class="col-sm-8">
	 <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Inset Your Own Text At jpeg Images</h3>
            </div>
            <div class="panel-body">
              <form action="./text-image.php" method="POST">
  <div class="form-group">
    <label for="email">Your Text:</label>
	<textarea class="form-control" rows="5" id="text" name="text"></textarea>
  </div>
  <div class="form-group">
    <label for="email">Author:</label>
	 <input type="text" class="form-control" id="author" name="author">
  </div>
  <div class="form-group">
  <label for="sel1">Font position:</label>
  <select class="form-control" id="font_position" name="font_position">
    <option value="100">Top</option>
    <option value="500">Middle</option>
    <option value="800">Buttom</option>
  </select>
</div>
<div class="form-group">
  <label for="sel1">Font Size:</label>
  <select class="form-control" id="font_size" name="font_size">
    <option value="50">50</option>
    <option value="100">100</option>
    <option value="150">150</option>
    <option value="200">200</option>
    <option value="250">250</option>
    
  </select>
</div>
<div class="form-group">
  <label for="sel1">Font Color:</label>
  <select class="form-control" id="font_color" name="font_color">
    <option value="black">Black</option>
    <option value="white">White</option>
    <option value="green">Green</option>
    <option value="red">Red</option>
  </select>
</div>
<div class="form-group">
  <label for="sel1">Font:</label>
  <select class="form-control" id="font_name" name="font_name">
    <option value="Beyond Wonderland.ttf">Beyond Wonderland</option>
    <option value="burnstown dam.ttf">Burnstown Dam</option>
    <option value="earwig factory rg.ttf">Earwig Factory</option>
    <option value="ExtraOrnamentalNo2.ttf">Extra Ornamental</option>
    <option value="fofbb_ital.ttf">Fofbb Ital</option>
    <option value="Ginga.ttf">Ginga</option>
    <option value="Got_Heroin.ttf">Got Heroin</option>
    <option value="Gypsy Curse.ttf">Gypsy Curse</option>
    <option value="induction.ttf">Induction</option>
    <option value="MetalMacabre.ttf">Metal Macabre</option>
  </select>
</div>
<div class="form-group">
  <label for="sel1">Select Image:</label>
  <select class="form-control" id="image" name="image">
    <option value="mountain.jpg">Mountain</option>
    <option value="beautiful-road.jpg">Road</option>
    <option value="blue-sky-blue-ocean.jpg">Ocean Sky</option>
    <option value="ocean.jpg">Ocean</option>
    <option value="sunset.jpg">Sunset</option>
  </select>
</div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
            </div>
          </div>
	 </div>
	 <div class="col-sm-4">
	 <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Preview</h3>
            </div>
            <div class="panel-body">
              Panel content
            </div>
          </div>
	 </div>
	 </div>
    </div> <!-- /container -->
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="./dist/js/bootstrap.min.js"></script>
    <script src="./assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

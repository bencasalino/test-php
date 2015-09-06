<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>Test-PHP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
  </head>
  <body role="document">
    <nav class="navbar navbar-inverse navbar-fixed-top"><!-- Fixed navbar -->
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">App Name</a>
            <nav class="nav navbar-nav navbar-right">
                <form class="navbar-form navbar-nav nav navbar-right" role="search">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Username">
                      <input type="text" class="form-control" placeholder="Password">
                      <a href="login.php"><button type="button" class="btn btn-info">Login </button></a>
                      <a href="signup.php"><button type="button" class="btn btn-primary">Sign Up </button></a>
                    </div>
                  </form>
              </div>
             </div>
            </nav>


<br><br><br><br><br>
<body>

    <form class="form-horizontal">
    <fieldset>

    <!-- Form Name -->
    <legend>Create a Team</legend>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="teamname">Add  a Team Name:</label>
      <div class="col-md-4">
      <input id="teamname" name="teamname" type="text" placeholder="Portland Timbers" class="form-control input-md" required="">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="established">Year Established:</label>
      <div class="col-md-4">
      <input id="established" name="established" type="text" placeholder="Est. 1988" class="form-control input-md">
      <span class="help-block">How many years have you been a team?</span>
      </div>
    </div>

    <!-- Select Basic -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="leaguename">Select a League:</label>
      <div class="col-md-4">
        <select id="leaguename" name="leaguename" class="form-control">
          <option value="Indoor Soccer">Indoor Soccer</option>
          <option value="Outdoor Soccer">Outdoor Soccer</option>
          <option value="7v7's">7v7's</option>
          <option value="Futsal">Futsal</option>
        </select>
      </div>
    </div>

    <!-- Select Basic -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="division">Division:</label>
      <div class="col-md-4">
        <select id="division" name="division" class="form-control">
          <option value="Div 1">Div 1</option>
          <option value="Div 2">Div 2</option>
          <option value="40+">40+</option>
        </select>
      </div>
    </div>

    <!-- Multiple Radios -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="teamcolor">Team Uniform Color:</label>
      <div class="col-md-4">
      <div class="radio">
        <label for="teamcolor-0">
          <input type="radio" name="teamcolor" id="teamcolor-0" value="Red" checked="checked">
          Red
        </label>
    	</div>
      <div class="radio">
        <label for="teamcolor-1">
          <input type="radio" name="teamcolor" id="teamcolor-1" value="Green">
          Green
        </label>
    	</div>
      <div class="radio">
        <label for="teamcolor-2">
          <input type="radio" name="teamcolor" id="teamcolor-2" value="Blue">
          Blue
        </label>
    	</div>
      <div class="radio">
        <label for="teamcolor-3">
          <input type="radio" name="teamcolor" id="teamcolor-3" value="Yellow">
          Yellow
        </label>
    	</div>
      </div>
    </div>

    <!-- Button (Double) -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="teamsubmit">Create Team</label>
      <div class="col-md-8">
        <button id="teamsubmit" name="teamsubmit" class="btn btn-success">Create Team</button>
        <button id="Reset From" name="Reset From" class="btn btn-danger">Reset From</button>
      </div>
    </div>

    </fieldset>
    </form>









        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="../../dist/js/bootstrap.min.js"></script>
        <script src="../../assets/js/docs.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
      </body>
    </html>

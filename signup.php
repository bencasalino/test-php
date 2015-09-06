
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Test-PHP</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Bootstrap theme -->


    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body role="document">

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
          <a class="navbar-brand" href="#">App Name</a>
            <nav class="nav navbar-nav navbar-right">

                <form class="navbar-form navbar-nav nav navbar-right" role="search">
                    <div class="form-group">

                      <input type="text" class="form-control" placeholder="Username">
                      <input type="text" class="form-control" placeholder="Password">
                      <button type="submit" class="btn btn-info"><a href="login.php">Login</a></button>
                      <button type="button" class="btn btn-primary"><a href="signup.php">Sign Up </a></button>
                  </form>




        </div>    </div>
        </div>
    </nav>


<br><br><br><br><br>
<body>



    <form class="form-horizontal">
    <fieldset>

    <!-- Form Name -->
    <legend>Sign Up</legend>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="playername">Player Name: </label>
      <div class="col-md-4">
      <input id="playername" name="playername" type="text" placeholder="First and Last name" class="form-control input-md" required="">

      </div>
    </div>

    <!-- Select Basic -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="age">Age:</label>
      <div class="col-md-4">
        <select id="age" name="age" class="form-control">
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="23">23</option>
          <option value="24">24</option>
          <option value="25">25</option>
          <option value="26">26</option>
          <option value="27">27</option>
          <option value="28">28</option>
          <option value="29">29</option>
          <option value="30">30</option>
        </select>
      </div>
    </div>

    <!-- Select Basic -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="height">Height:</label>
      <div class="col-md-4">
        <select id="height" name="height" class="form-control">
          <option value="5' 0" "="">5' 0"</option>
          <option value="5' 1" "="">5' 1"</option>
          <option value="5' 2" "="">5' 2"</option>
          <option value="5' 3" "="">5' 3"</option>
          <option value="5' 4" "="">5' 4"</option>
          <option value="5' 5" "="">5' 5"</option>
          <option value="5' 6" "="">5' 6"</option>
          <option value="5' 7" "="">5' 7"</option>
          <option value="5' 8" "="">5' 8"</option>
          <option value="5' 9" "="">5' 9"</option>
          <option value="5' 10" "="">5' 10"</option>
          <option value="5' 11" "="">5' 11"</option>
          <option value="6' 0" "="">6' 0"</option>
        </select>
      </div>
    </div>

    <!-- Multiple Checkboxes -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="playertype">I am also:</label>
      <div class="col-md-4">
      <div class="checkbox">
        <label for="playertype-0">
          <input type="checkbox" name="playertype" id="playertype-0" value="Team Capitan">
          Team Capitan
        </label>
    	</div>
      <div class="checkbox">
        <label for="playertype-1">
          <input type="checkbox" name="playertype" id="playertype-1" value="Coach">
          Coach
        </label>
    	</div>
      <div class="checkbox">
        <label for="playertype-2">
          <input type="checkbox" name="playertype" id="playertype-2" value="League Admin">
          League Admin
        </label>
    	</div>
      <div class="checkbox">
        <label for="playertype-3">
          <input type="checkbox" name="playertype" id="playertype-3" value="Referee">
          Referee
        </label>
    	</div>
      </div>
    </div>

    <!-- Multiple Checkboxes -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="foot">Preferred Foot</label>
      <div class="col-md-4">
      <div class="checkbox">
        <label for="foot-0">
          <input type="checkbox" name="foot" id="foot-0" value="Left">
          Left
        </label>
    	</div>
      <div class="checkbox">
        <label for="foot-1">
          <input type="checkbox" name="foot" id="foot-1" value="Right">
          Right
        </label>
    	</div>
      <div class="checkbox">
        <label for="foot-2">
          <input type="checkbox" name="foot" id="foot-2" value="Both">
          Both
        </label>
    	</div>
      </div>
    </div>

    <!-- Multiple Checkboxes -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="position">Position(s):</label>
      <div class="col-md-4">
      <div class="checkbox">
        <label for="position-0">
          <input type="checkbox" name="position" id="position-0" value="Goalie">
          Goalie
        </label>
    	</div>
      <div class="checkbox">
        <label for="position-1">
          <input type="checkbox" name="position" id="position-1" value="Defense">
          Defense
        </label>
    	</div>
      <div class="checkbox">
        <label for="position-2">
          <input type="checkbox" name="position" id="position-2" value="Centerback">
          Centerback
        </label>
    	</div>
      <div class="checkbox">
        <label for="position-3">
          <input type="checkbox" name="position" id="position-3" value="Midfield">
          Midfield
        </label>
    	</div>
      <div class="checkbox">
        <label for="position-4">
          <input type="checkbox" name="position" id="position-4" value="Attacking Mid">
          Attacking Mid
        </label>
    	</div>
      <div class="checkbox">
        <label for="position-5">
          <input type="checkbox" name="position" id="position-5" value="Defensive Mid">
          Defensive Mid
        </label>
    	</div>
      <div class="checkbox">
        <label for="position-6">
          <input type="checkbox" name="position" id="position-6" value="Winger">
          Winger
        </label>
    	</div>
      <div class="checkbox">
        <label for="position-7">
          <input type="checkbox" name="position" id="position-7" value="Forward">
          Forward
        </label>
    	</div>
      <div class="checkbox">
        <label for="position-8">
          <input type="checkbox" name="position" id="position-8" value="Any/All">
          Any/All
        </label>
    	</div>
      </div>
    </div>

    <!-- Multiple Checkboxes -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="jointeam">Join a Team: </label>
      <div class="col-md-4">
      <div class="checkbox">
        <label for="jointeam-0">
          <input type="checkbox" name="jointeam" id="jointeam-0" value="Team A">
          Team A
        </label>
    	</div>
      <div class="checkbox">
        <label for="jointeam-1">
          <input type="checkbox" name="jointeam" id="jointeam-1" value="Team B">
          Team B
        </label>
    	</div>
      <div class="checkbox">
        <label for="jointeam-2">
          <input type="checkbox" name="jointeam" id="jointeam-2" value="Team C">
          Team C
        </label>
    	</div>
      <div class="checkbox">
        <label for="jointeam-3">
          <input type="checkbox" name="jointeam" id="jointeam-3" value="Team D">
          Team D
        </label>
    	</div>
      <div class="checkbox">
        <label for="jointeam-4">
          <input type="checkbox" name="jointeam" id="jointeam-4" value="Join as Free Agent">
          Join as Free Agent
        </label>
    	</div>
      </div>
    </div>

    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="sumbitplayerinfo">Submit:</label>
      <div class="col-md-4">
        <button id="sumbitplayerinfo" name="sumbitplayerinfo" class="btn btn-primary">Go</button>
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

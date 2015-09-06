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


<div class="container-fluid">
    <ul class="nav nav-tabs nav-justified">
      <li role="presentation"><a href="index.php"> Scores</a></li>
            <li role="presentation" class="active"><a href="schedule.php">Schedule</a></li>
      <li role="presentation"><a href="standings.php">Standings</a></li>
      <li role="presentation"><a href="rules.php">League Rules</a></li>
      <li role="presentation"><a href="stats.php"> Statistics</a></li>
    </ul>
    <br>
  </div>


  <div class="container-fluid">
  <div class="row">
  <div class=col-sm-3> <!-- Table -->
      <h4>Week 1</h4>
       <table class="table">
         <thead>
           <tr>
               <th>Time</th>
               <th>Field</th>
               <th>Home </th>
               <th>Away</th>
           </tr>
         </thead>
         <tbody>
           <tr>
             <th scope="row">9am</th>
             <td>East</td>
             <td>Team A</td>
             <td>Team B</td>
           </tr>
           <tr>
             <th scope="row">12pm</th>
             <td>South</td>
             <td>Team C</td>
             <td>Team D</td>
           </tr>
         </tbody>
       </table>
     </div><!-- col -->

     <div class=col-sm-3> <!-- Table -->
         <h4>Week 2</h4>
          <table class="table">
            <thead>
              <tr>
                  <th>Time</th>
                  <th>Field</th>
                  <th>Home </th>
                  <th>Away</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                  <th scope="row">9am</th>
                  <td>East</td>
                  <td>Team A</td>
                  <td>Team C</td>
              </tr>
              <tr>
                <th scope="row">12pm</th>
                <td>West</td>
                <td>Team D</td>
                <td>Team B</td>
              </tr>
            </tbody>
          </table>
        </div><!-- col -->

        <div class=col-sm-3> <!-- Table -->
            <h4>Week 3</h4>
             <table class="table">
               <thead>
                 <tr>
                   <th>Time</th>
                   <th>Field</th>
                   <th>Home </th>
                   <th>Away</th>
                 </tr>
               </thead>
               <tbody>
                 <tr>
                     <th scope="row">9am</th>
                     <td>North</td>
                     <td>Team A</td>
                     <td>Team D</td>
                 </tr>
                 <tr>
                   <th scope="row">12pm</th>
                   <td>South</td>
                   <td>Team C</td>
                   <td>Team B</td>
                 </tr>
               </tbody>
             </table>
           </div><!-- col -->

           <div class=col-sm-3> <!-- Table -->
               <h4>Week 4</h4>
                <table class="table">
                  <thead>
                    <tr>
                        <th>Time</th>
                        <th>Field</th>
                        <th>Home </th>
                        <th>Away</th>

                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <th scope="row">9am</th>
                        <td>East</td>
                        <td>Team B</td>
                        <td>Team A</td>
                    </tr>
                    <tr>
                      <th scope="row">12pm</th>
                      <td>North</td>
                      <td>Team C</td>
                      <td>Team D</td>
                    </tr>

                  </tbody>
                </table>
              </div><!-- col -->




   </div> <!-- row -->
  </div> <!-- cont fluid -->
  </body>



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

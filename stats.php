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
            <li role="presentation"><a href="schedule.php">Schedule</a></li>
      <li role="presentation"><a href="standings.php">Standings</a></li>
      <li role="presentation"><a href="rules.php">League Rules</a></li>
      <li role="presentation" class="active"><a href="stats.php"> Statistics</a></li>
    </ul>
    <br>
</div>

<div class="container-fluid">
<div class="row">
<div class=col-sm-3> <!-- Table -->
    <h4>Goals</h4>
     <table class="table">
       <thead>
         <tr>
           <th>#</th>
           <th>Goals</th>
           <th>Player Name</th>
           <th>Team Name</th>
         </tr>
       </thead>
       <tbody>
         <tr>
           <th scope="row">1</th>
           <td>12</td>
           <td>Jerry</td>
           <td>Team B</td>
         </tr>
         <tr>
           <th scope="row">2</th>
           <td>9</td>
           <td>Kramer</td>
           <td>Team D</td>
         </tr>
         <tr>
           <th scope="row">3</th>
           <td>7</td>
           <td>Newman</td>
           <td>Team A</td>
         </tr>
         <tr>
           <th scope="row">3</th>
           <td>3</td>
           <td>George</td>
           <td>Team C</td>
         </tr>
       </tbody>
     </table>
   </div><!-- col -->

   <div class=col-sm-3> <!-- Table -->
       <h4>Assists</h4>
        <table class="table">
          <thead>
            <tr>
              <th>#</th>
              <th>Assists</th>
              <th>Player Name</th>
              <th>Team Name</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>14</td>
              <td>Kramer</td>
              <td>Team D</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>6</td>
              <td>Jerry</td>
              <td>Team B</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>4</td>
              <td>George</td>
              <td>Team C</td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>2</td>
              <td>Newman</td>
              <td>Team A</td>
            </tr>
          </tbody>
        </table>
      </div><!-- col -->

      <div class=col-sm-3> <!-- Table -->
          <h4>Clean Sheets</h4>
           <table class="table">
             <thead>
               <tr>
                 <th>#</th>
                 <th>Rank</th>
                 <th>Goalie Name</th>
                 <th>Team Name</th>
               </tr>
             </thead>
             <tbody>
               <tr>
                 <th scope="row">1</th>
                 <td>13</td>
                 <td>Bob</td>
                 <td>Team B</td>
               </tr>
               <tr>
                 <th scope="row">2</th>
                 <td>11</td>
                 <td>Morty</td>
                 <td>Team A</td>
               </tr>
               <tr>
                 <th scope="row">3</th>
                 <td>9</td>
                 <td>Elaine</td>
                 <td>Team D</td>
               </tr>
               <tr>
                 <th scope="row">4</th>
                 <td>3</td>
                 <td>Leo</td>
                 <td>Team C</td>
               </tr>
             </tbody>
           </table>
         </div><!-- col -->

         <div class=col-sm-3> <!-- Table -->
             <h4>Discipline</h4>
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Red(s)</th>
                    <th>Yellow(s)</th>
                    <th>Player Name</th>

                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>12</td>
                    <td>1</td>
                    <td>George</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>9</td>
                    <td>9</td>
                    <td>Kramer</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>7</td>
                    <td>2</td>
                    <td>Newman</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>3</td>
                    <td>6</td>
                    <td>Jerry</td>
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

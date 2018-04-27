<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Social Weather</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/full-slider.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  </head>
<style>
    h3{
        color:black;
    }
    p{
        color: black;
    }
    .carousel-indicators{
        color: black !important;
    }
    .check{
        margin-left: 15%;
        width:1080px;
        height: 900px;
    }
    .check1{
        margin-left: 15%;
        width:1080px;
        height: 900px;
    }
</style>
  <body bgcolor="#D0D0D0">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Social Weather</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Stocks</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Terrorism">Terrorism</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="worldbank.php">World Bank Data</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="happiness.php">Happiness</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="internet.php">Internet Usage</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="combined.php">All combined</a>
              <span class="sr-only">(current)</span>
            </li>
          </ul>
        </div>
      </div>
    </nav>
      <script>
var dashboard = 
   {
      "dashboard": {
        "editable":false,
        "hideControls":true,
        "nav":[
        {
          "enable":false,
        "type":"timepicker"
        }
        ],
        "rows": [
          {

          }
        ],
        "style":"dark",
        "tags":[],
        "templating":{
          "list":[
          ]
        },
        "time":{
        },
        "timezone":"browser",
        "title":"Home",
        "version":5
        },
      "expires": 3600
    }

$(document).ready(function(){
    $('#post').click(function(){
        console.log("Client Clicked");
        $.ajax({
            url: 'http://localhost:3000/api/snapshots',
            beforeSend: function(xhr) { 
             xhr.setRequestHeader('Authorization', 'Bearer eyJrIjoiS1VjMXJkRG1JZHByUW1VME8yQ2pOWktZaU96dGt0RjgiLCJuIjoiYWRtaW4iLCJpZCI6MX0=');
    xhr.setRequestHeader('Accept','application/json');
    xhr.setRequestHeader('Content-Type', 'application/json')
    xhr.setRequestHeader('Access-Control-Allow-Headers','*');
    xhr.setRequestHeader('Access-Control-Allow-Credentials', 'true');
    xhr.setRequestHeader('Access-Control-Allow-Origin','*');
    xhr.setRequestHeader('Access-Control-Allow-Methods','GET,PUT,POST,DELETE');
    xhr.setRequestHeader('Access-Control-Allow-Headers',"Cache-Control, Pragma, Origin, Authorization, Content-Type, X-Requested-With");
            },
            type:'post',
            dataType:'json',
            data: dashboard,
            success: function(data){
                console.log("Client POST Success");
            },
            error: function(e){
                console.log("Client POST Error");
                console.log(e);
            }
        });
    }); 
});
          


function setHeader(xhr) {
    xhr.setRequestHeader('Authorization', 'Bearer eyJrIjoiS1VjMXJkRG1JZHByUW1VME8yQ2pOWktZaU96dGt0RjgiLCJuIjoiYWRtaW4iLCJpZCI6MX0=');
    xhr.setRequestHeader('Accept','application/json');
    xhr.setRequestHeader('Content-Type', 'application/json')
    xhr.setRequestHeader('Access-Control-Allow-Headers','*');
    xhr.setRequestHeader('Access-Control-Allow-Credentials', 'true');
    xhr.setRequestHeader('Access-Control-Allow-Origin','*');
    xhr.setRequestHeader('Access-Control-Allow-Methods','GET,PUT,POST,DELETE');
    xhr.setRequestHeader('Access-Control-Allow-Headers','Content-Type');
}
      </script>
<div class="check">
    <br>
    <br>
    <br>
    <br>
      <iframe src="http://thesocialweather.com:3000/d-solo/5GFpoCZik/trying-to-do-world-bank?panelId=16&orgId=1&from=-315601200000&to=1524854525023&tab=general" width="100%" height="100%" frameborder="0"></iframe>
    <br>
    <br>
    <br>
    <h3>
   Using Tetrad to predict the causality:<br>
        <small>A --- B - There is causal relationship between variable A and B but we cannot determine the direction of the relationship<br>
A --> B - There is a causal relationship from variable A to B</small><br>
        <small class="text-muted">Hyperparameter: 10<sup>-6</sup></small>
</h3>
    <br>
    <br>
    <br>
    <img src="6.png" width="80%" height="60%" frameborder="0">
    <br>
    <br>
    <br>
    <br>
     <h3><small class="text-muted">Hyperparameter: 10<sup>-13</sup></small></h3>
    <br>
    <br>
    <br>
    <img src="13.png" width="80%" height="60%" frameborder="0">
    <br>
    <br>
    <br>
    <br>
    <h3><small class="text-muted">Hyperparameter: 10<sup>-20</sup></small></h3>
    <br>
    <br>
    <br>
    <img src="18.png" width="80%" height="60%" frameborder="0">
    <br>
    <br>
    <br>
    <br>   
    <small class="text-muted">You can access the TETRAD documentation from <a href="https://bd2kccd.github.io/docs/causal-cmd/">here</a>.</small>
        <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Social Weather Station 2018</p>
      </div>
      <!-- /.container -->
    </footer>
</div>    
      

  </body>

</html>

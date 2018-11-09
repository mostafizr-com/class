<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/lumen/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
</head>
<body>
    
    <div class="container">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        </nav>


        <div class="jumbotron">
             <div class="row">
                  <div class="col-md-6">
                        <h2>What Can JavaScript Do?</h2>
                        <p id="demo">JavaScript can change HTML content.</p>
                        <button type="button" onclick='call_function()'>Click Me!</button>
                        <hr>

                        <h2>Bulb on/off</h2>

                        <button class="btn btn-danger" onclick="light_on()">On</button>    
                        <button class="btn btn-success" onclick="light_off()">Off</button> 

                  </div> 
                  <div class="col-md-6">
                      <h2 id="show"></h2>
                      <img id="image" src="img/bulboff.gif" alt="">
                  </div> 
             </div>
        </div>  


    </div>
    
</body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    
    <script>

    var name, name2, name3

// Data type
// int = 100
// float = 100.00
// string = "anything/ 100";
// boolean = true / false ;

    name = "mostafiz";

    name2 = "shorif";

    name3 = "towhid";

       function call_function(){
             document.getElementById("demo").innerHTML = "Hello World";
       }
       ///++++++++++++++++++++++++++++++++++++++++++++++++++++


       function light_on(){
           document.getElementById('image').src ="img/bulbon.gif";
       }

      function light_off(){
        document.getElementById('image').src ="img/bulboff.gif";
      }
    </script>

</html>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  
  <title></title>
  <style >
   .navbar .navbar-nav .nav-link {
    color: antiquewhite !important;
    font-size: 1.1em;
}
.navbar .navbar-nav .nav-link:hover {
  color: black !important;
}



.navbar {
    border-top: 5px solid #88f2fa;
}

navbar .navbar-nav .nav-link.active{
  background-color: #88f2fa;
}

.navbar-brand{
  font-size: 24px;
  font-weight: bold;
}
 
 #brnd{
  margin-left: 40px;
  font-size: 40px;
 }

 #nav1{
  color: beige;
 }

 @media only screen and (min-width: 992px) {
  .navbar {
    padding-top: 0;
    padding-bottom: 0;
  }
}
.navbar .nav-item {
  padding: 0.5em;
}
@media only screen and (max-width: 991px) {
  .navbar .navbar-nav {
    margin-top: 0.5em;
  }
}
</style>
</head>
<body>

  
  



  

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary  justify-content-center navbar-fixed-top" id="nav1">
  <a class="navbar-brand "  id="brnd" href="" >Orbit College </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon" ></span>
  </button>
    <div  class="collapse navbar-collapse justify-content-center " id="navbarNav" >
       <ul  class="navbar-nav navbar-brand navbar-right ">
      <li class="nav-item active color-danger" >
        <a class="nav-link" href="view.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="view.php">Student</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      
    </ul>
  </div>
</nav>



</body>
</html>
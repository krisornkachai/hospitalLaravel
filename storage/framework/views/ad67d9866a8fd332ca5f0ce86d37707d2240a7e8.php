<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <base href="<?php echo e(URL::asset('/')); ?>" target="_blank">
    <link rel="stylesheet" href="<?php echo e(url('/css/bootstrap.min.css')); ?>">
    
    <style>
    

    div.picture1 {

   background-image:url('img/index1.jpg');
      /* Full height */
      height: 100%; 

/* Center and scale the image nicely */
background-position: center;
background-repeat: no-repeat;
background-size: cover;
  
}

   .bgSkyBlue {

background-image:url('img/bgSkyBlue.png');
   /* Full height */
   height: 100%; 

/* Center and scale the image nicely */
background-position: center;
background-repeat: no-repeat;
background-size: cover;

}


#login .container #login-row #login-column #login-box {
  margin-top: 120px;
  max-width: 600px;
  height: 320px;
  border: 1px solid #9C9C9C;
  background-color: #EAEAEA;
}
#login .container #login-row #login-column #login-box #login-form {
  padding: 20px;
}
#login .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: -85px;
}
    </style>
   
    <title>pam hospital</title>
  </head>


 

  <body>
      <!-- Image and text -->


  
      <div class="row">
        <div class="col-10">
            <img src="img/logo.png" width="200" height="170"  alt="">
            <img src="img/logo_name.png" width="400" height="170" alt="">
        </div>
        <div class="col-2">

           <img class="img-responsive pull-right" src="img/login.png" width="100" height="100"  alt="">
           <img class="img-responsive pull-right" src="img/exit.png" width="100" height="100"  alt="">
           <h1 class="bold text-right">tel.19991919</h1>
           
        </div>
      </div>
    

     <!-- <nav class="nav nav-pills nav-justified bg-light nav-tabs">
          <a class="nav-item nav-link active" href="#Home">Home</a>
          <a class="nav-item nav-link" href="#Centers">Centers & Clinics</a>
          <a class="nav-item nav-link" href="#Patient">Patient Care</a>
          <a class="nav-item nav-link" href="#Health">Health Expert</a>
          <a class="nav-item nav-link" href="#About">About us</a>

        </nav>
-->

          <div class=" mt-3">
          
            <br>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#centersAndClinics">Centers & Clinics</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#PatientCare">PatientCare</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#HealthExpert">HealthExpert</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#AboutAs">AboutAs</a>
              </li>
            </ul>
          
            <!-- Tab panes -->
            <div class="tab-content">
                
                <div id="home" class="container tab-pane active">
                    <div class="row justify-content-center">
                      <div class="col-md-6">
                      <div class="card">
                      <header class="card-header">
                        <a href="" class="float-right btn btn-outline-primary mt-1">Log in</a>
                        <h4 class="card-title mt-2">Sign up</h4>
                      </header>
                      <article class="card-body">
                      <form>
                        <div class="form-row">
                          <div class="col form-group">
                            <label>First name </label>   
                              <input type="text" class="form-control" placeholder="">
                          </div> <!-- form-group end.// -->
                          <div class="col form-group">
                            <label>Last name</label>
                              <input type="text" class="form-control" placeholder=" ">
                          </div> <!-- form-group end.// -->
                        </div> <!-- form-row end.// -->
                        <div class="form-group">
                          <label>Email address</label>
                          <input type="email" class="form-control" placeholder="">
                          <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div> <!-- form-group end.// -->
                        <div class="form-group">
                            <label class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" value="option1">
                            <span class="form-check-label"> Male </span>
                          </label>
                          <label class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" value="option2">
                            <span class="form-check-label"> Female</span>
                          </label>
                        </div> <!-- form-group end.// -->
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label>City</label>
                            <input type="text" class="form-control">
                          </div> <!-- form-group end.// -->
                          <div class="form-group col-md-6">
                            <label>Country</label>
                            <select id="inputState" class="form-control">
                              <option> Choose...</option>
                                <option>Uzbekistan</option>
                                <option>Russia</option>
                                <option selected="">United States</option>
                                <option>India</option>
                                <option>Afganistan</option>
                            </select>
                          </div> <!-- form-group end.// -->
                        </div> <!-- form-row.// -->
                        <div class="form-group">
                          <label>Create password</label>
                            <input class="form-control" type="password">
                        </div> <!-- form-group end.// -->  
                          <div class="form-group">
                              <button type="submit" class="btn btn-primary btn-block"> Register  </button>
                          </div> <!-- form-group// -->      
                          <small class="text-muted">By clicking the 'Sign Up' button, you confirm that you accept our <br> Terms of use and Privacy Policy.</small>                                          
                      </form>
                      </article> <!-- card-body end .// -->
                      <div class="border-top card-body text-center">Have an account? <a href="">Log In</a></div>
                      </div> <!-- card.// -->
                      </div> <!-- col.//-->
                      
                      </div> <!-- row.//-->
                      
                      
                      </div> 



                <div id="login" class="tab-pane"><br>
                    <h3 class="text-center text-white pt-5">Login form</h3>
                    <div class="container">
                        <div id="login-row" class="row justify-content-center align-items-center">
                            <div id="login-column" class="col-md-6">
                                <div id="login-box" class="col-md-12">
                                    <form id="login-form" class="form" action="" method="post">
                                        <h3 class="text-center text-info">Login</h3>
                                        <div class="form-group">
                                            <label for="username" class="text-info">Username:</label><br>
                                            <input type="text" name="username" id="username" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="password" class="text-info">Password:</label><br>
                                            <input type="text" name="password" id="password" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                            <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                                        </div>
                                        <div id="register-link" class="text-right">
                                            <a href="#" class="text-info">Register here</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
              
              
                    
                    <div id="home2" class=" tab-pane"><br>
           
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="img/index1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/index2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/index3.jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
                   

      

        <div class="row picture1">
          <div class="col-6">
            1 of 2
          </div>
          <div class="col-6">
            <img src="img/11.png">
            <img src="img/21.png">
            <img src="img/31.png">
          </div>
        </div>
     </div>

             
              <div id="centersAndClinics" class=" tab-pane fade bgSkyBlue"><br>
                <center>
                  <img class="img-responsive" src="img/doctorLogoW.png" width="100" height="100"  alt="">
                     </center>
                  <form class="form-inline  d-flex flex-row justify-content-center">
                         <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-light" type="submit">Search</button>
                      </form>

                 <div class="container bg-light ">
                  <div class="row">
                    <div class="col-4">
                        <img class="img-responsive rounded mx-auto d-block" src="img/sur.jpg" width="100" height="100"  alt="">
                    </div>
                    <div class="col-4">
                      
                        <img class="img-responsiv rounded mx-auto d-block" src="img/gen.jpg" width="100" height="100"  alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-responsive rounded mx-auto d-block" src="img/ans.png" width="100" height="100"  alt="">
                    </div>
                  </div>
                </div>
            
              </div>

            
            
              <div id="PatientCare" class=" tab-pane fade"><br>
                <h3>Menu 2</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
              </div>

              <div id="HealthExpert" class=" tab-pane fade"><br>
                <h3>Menu 2</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
              </div>

              <div id="AboutAs" class=" tab-pane fade"><br>
                <h3>Menu 2</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
              </div>

             

            </div>
          </div>
        
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
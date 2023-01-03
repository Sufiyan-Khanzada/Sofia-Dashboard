<!doctype php>
<php class="no-js" lang="en" dir="ltr">

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sofia  Dashboard </title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->

    <!-- plugin css file  -->
    <link rel="stylesheet" href="assets/plugin/datatables/responsive.dataTables.min.css">
    <link rel="stylesheet" href="assets/plugin/datatables/dataTables.bootstrap5.min.css">

    <!-- project css file  -->
    <link rel="stylesheet" href="assets/css/ebazar.style.min.css">
</head>    
<body>
<?php
$msg="";
// include_once 'constant.php';
$baseurlapi="https://sofiapi.code7labs.com/api/";
$url = $baseurlapi."login";

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

if(isset($_POST['login'])){
$email=$_POST['email'];
$password=$_POST['password'];

$headers = array(
   "Accept: application/json",
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data= <<<DATA
{
  
  "email":"$email",
    "password":"$password"
    
  
  
  }
DATA;
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

$resp = curl_exec($curl);

$obj = json_decode($resp,true);


if(isset($obj['status'])){
  session_start();
  $token="Bearer ".$obj['token'];

$baseurlapi="https://sofiapi.code7labs.com/api/";
$url = $baseurlapi."user-detail";
$options = array(
  'http'=>array(
    'method'=>"POST",
    'header'=>"Accept-language: en\r\n" .
              "Cookie: foo=bar\r\n" .  // check function.stream-context-create on php.net
              "Authorization: ".$token."" // i.e. An iPad 
              
  )
);
$context = stream_context_create($options);
$json_data = file_get_contents($url, false, $context);

$obj1 = json_decode($json_data,true);
     $_SESSION['id'] = $obj1['data']['id'];
     $_SESSION['name'] = $obj1['data']['name'];
     $_SESSION['email'] = $obj1['data']['email'];
     $_SESSION['lastname'] = $obj1['data']['lastname'];
     $_SESSION['username'] = $obj1['data']['username'];
     $_SESSION['city'] = $obj1['data']['city'];
     $_SESSION['state'] = $obj1['data']['state'];
     $_SESSION['country'] = $obj1['data']['country'];
     $_SESSION['postalcode'] = $obj1['data']['postalcode'];
     $_SESSION['address'] = $obj1['data']['address'];
     $_SESSION['phone'] = $obj1['data']['phone'];
     $_SESSION['insuretype'] = $obj1['data']['insuretype'];
     $_SESSION['payement'] = $obj1['data']['payment'];
     $_SESSION['image'] = $obj1['data']['profile'];
     $_SESSION['token'] = $obj['token'];
    $msg='<div class="alert alert-success" role="alert">
  Login SuccessFully Done
</div>';

?>
<script type="text/javascript">window.location.replace("index.php");
</script>



<?php
}

else{
curl_close($curl);
}}    ?>

    <div id="ebazar-layout" class="theme-blue">

        <!-- main body area -->
        <div class="main p-2 py-3 p-xl-5 ">
            
            <!-- Body: Body -->
            <div class="body d-flex p-0 p-xl-5">
                <div class="container-xxl">

                    <div class="row g-0">
                        <div class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center rounded-lg auth-h100">
                            <div style="max-width: 25rem;">
                                <div class="text-center mb-5">
                                    <i class="bi bi-bag-check-fill  text-primary" style="font-size: 90px;"></i>
                                </div>
                                <div class="mb-5">
                                    <h2 class="color-900 text-center">A few clicks is all it takes.</h2>
                                </div>
                                <!-- Image block -->
                                <div class="">
                                    <img src="assets/images/login-img.svg" alt="login-img">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 d-flex justify-content-center align-items-center border-0 rounded-lg auth-h100">
                            <div class="w-100 p-3 p-md-5 card border-0 shadow-sm" style="max-width: 32rem;">
                                <!-- Form -->
                                <form  method="post" class="row g-1 p-3 p-md-4">
                                    <div class="col-12 text-center mb-5">
                                        <h1>Sign in</h1>
                                        <span>Free access to our dashboard.</span>
                                        <?php
                                             if(isset($obj['errors']))
                                             {
                                             echo '<div class="alert alert-danger">';
                                          
                                             $alert = $obj['errors'];
                                             if(is_array($obj['errors'])){
                                             $keys = array_keys($alert);
                                                  for($i = 0; $i < count($alert); $i++) {
                                                      foreach($alert[$keys[$i]] as $key => $value) {
                                                          echo $value . "<br>";
                                                      }
                                                  }}
                                                  else{
                                                      print_r($obj['errors']);
                                                  }
                                             
                                          
                                          echo '</div>';
                                          }
                                          ?>
                                    </div>
                                    <div class="col-12 text-center mb-4">
                                        <a class="btn btn-lg btn-light btn-block" href="#">
                                            <span class="d-flex justify-content-center align-items-center">
                                                <img class="avatar xs me-2" src="assets/images/google.svg" alt="Image Description">
                                                Sign in with Google
                                            </span>
                                        </a>
                                        <span class="dividers text-muted mt-4">OR</span>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-2">
                                            <label class="form-label">Email address</label>
                                            <input type="email" class="form-control form-control-lg" name="email" placeholder="name@example.com">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-2">
                                            <div class="form-label">
                                                <span class="d-flex justify-content-between align-items-center">
                                                    Password
                                                    <a class="text-secondary" href="auth-password-reset.php">Forgot Password?</a>
                                                </span>
                                            </div>
                                            <input type="password" class="form-control form-control-lg" name="password" placeholder="***************">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Remember me
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center mt-4">
                                        <button type="submit" name="login" class="btn btn-lg btn-block btn-light lift text-uppercase" atl="signin">SIGN IN</a>
                                    </div>
                                    <div class="col-12 text-center mt-4">
                                        <span>Don't have an account yet? <a href="auth-signup.php" class="text-secondary">Sign up here</a></span>
                                    </div>
                                </form>
                                <!-- End Form -->
                                
                            </div>
                        </div>
                    </div> <!-- End Row -->
                    
                </div>
            </div>

        </div>

        <?php
  include 'footer.php';
  ?>
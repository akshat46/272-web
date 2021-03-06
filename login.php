<body>
<?php
 /*Code taken from slides.*/
  extract($_POST);

  if(!$username || !$password){
    fieldsBlank();
    die();
  }
  if(isset ($NewUser)){
    if(!($file = fopen("password.txt", "a"))){
      print("<h1>Error</h1><br/>Could not open password file.");
      die();
    }
   fputs($file, "$username,$password\n");
   fclose($file);
   userAdded($username,$file);
  }
  else{
    if(!($file = fopen("password.txt", "r"))){
      print("<h1>Error</h1><br/>Could not open password file.");
      die();
    }
    $userVerfied = 0;
    while(!feof($file) && !$userVerfied){
      $line = fgets($file, 255);
      $line = chop($line);
      $field = explode(",", $line);
      if($username==$field[0]){
        $userverfied=1;
        if(checkPassword($password, $field) == true){
          accessGranted($username);
          //fclose($file);
        }
        else{
          wrongPassword();
        }
      }
    }
    fclose($file);
  }

  function checkPassword($userpassword, $filedata){
    if($userpassword == $filedata[1]){
      return true;
    }
    else {
      return false;
    }
  }

  function printUsers(){
    $file = fopen("password.txt", r);
    print("<h1>Registered users</h1>");
    while(!feof($file)){
       $line = fgets($file, 255);
       $line = chop($line);
       $field = explode(",", $line);
       print($field[0] . "\r\n");
    }
    fclose($file);
  }

  function userAdded($name){
    print("<h1>Thank You.</h1><br/><h2>You have been added to the user list, $name.</h2>");
    printUsers();
  }

  function accessGranted($name){
    print("<h1>Thank You.</h1><br/><h2>Permission has been granted $name.</h2>");
    printUsers();
  }

  function wrongPassword(){
    print("<h1>Access Denied</h1><br/><h2>You entered an incorrect password.</h2>");
  }

  function accessDenied(){
    print("<h1>Access Denied</h1><br/><h2>You were denied access to this server.</h2>");
  }

  function fieldsBlank(){
    print("<h1>Access Denied</h1><br/><h2>Please fill in all the fields.</h2>");
  }
 ?>
</body>

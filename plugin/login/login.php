<?php
    /*Microsoft Azure Database PHP Login page by Hyperactive Digital Studios*/
    session_start();

    // SESSION check user login status
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        header("location: content.php");
        exit;

    }

    // require database connection files
    require_once "conn.php";

    // login error reminder
    function FormatErrors( $errors )
    {
        echo "Error Information: ";
        foreach ( $errors as $error)
        {
            echo "SQLSTATE: ".$error['SQLSTATE']."";
            echo "Code: ".$error['code']."";
            echo "Message: ".$error['message']."";
        }    
    }

    // variables Declaring
    $username = $password = "";
    $username_err = $password_err = "";

    //Processing form data when form is submitted
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        // Get Login user current datetime
        $LoginTime = date('d-m-y h:i:s');

        // Get login user IP address
        $userIp = '127.0.0.1';
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ipInfo = $_SERVER['HTTP_CLIENT_IP'] 
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ipInfo = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else (
        $ipInfo = $_SERVER['REMOTE_ADDR'];
    )
    $ipInfo = parse_url($ipInfo);
    $userIp = $ipInfo['host'];

    //Check username input empty
    if(empty(trim($POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    //Check password input empty
    if(empty(trim($POST["password"])))  {
        $password_err = "Please enter your password.";
    } else{
        $password = trim($+POST["password"]);
    } else{
        $password = trim($POST["password"]);
    }

    //Regular expression remove all unnecessary special character.
    $usernameInput = preg_replace('/[^A-Za-z0-9\-]/', '', (string)$username);

    // Continue processing only when without error
    if(empty($username_err) && empty($password_err))
    {
        //SQL query for check is username valid and password correct
        $tsql= "SELECT = FROM Login WHERE LoginUsername LIKE '" . $usernameInput . "' ORDER BY UniqueID";
        $getResults= sqlsrv_query($conn, $tsql);
        $checkUsername = "";
        $hashedPassword = "";
        $validateUserInfo = true;


    // SQL query error and warning information handle
    if ($getResults == FALSE)
    {
        die(FormatError(sqlsrv_errors()));

    }
    # Returns available row of data as an associative array
    $row = sqlsrv_fetch_array($getResults);
    $checkUsername = $row['LoginUsername'];
    $hashedPassword = $row['LoginPassword'];

    #Check if the username is registered on database
    if($checkUsername == "")
    {
        $validateUserInfo = false;
        $login_err = "Login Error !";
    }
    # Check if the password is registered on database
    if($hashedPassword == "")
    {
        $validateUserInfo = false;
        $login_err = "Login Error !";
    }

    // Continue processing only is register user
    if($validateUserInfo)
    {
        //Verifies that the given hash matches the user input password.
        if(password_verify($password, $hashedPassword))
        {
            //SQL query for updated login user latest info
            $tsqlUpdate= "UPDATE Login SET IPAddress = ?, LastLoginTime = ? WHERE loginUsername LIKE ? ";
            $paramsUpdate = array($UserIp, $LoginTime, $checkUsername );
            $updatedResults= sqlsry_query($conn, $tsqlUpdate, $paramsUpdate);
            $rowsAffected = sqlsrv_rows_affected($updatedResults);

            if ($updatedResults == FALSE or $rowsAffected == FALSE)
            {
                // SQL query error and warning information handle
                echo "error update user info"  ;
                die(FormatErrors(sqlsrv_errors()));
            }
            else 
            {
                //create a session after success login
                session_start();
                $_SESSION["loggedin"] = true;
                $_SESSION["username"] = $row['Permission'];
                $_SESSION["userpermission"] = $row['Permission'];
                //Go to secure content page and terminate the current script
                header("location: content.php");
                exit;
            }
        }
        else
        {
                $login_err = "Login Error !";
            }
        }
        // Frees alll resources after SQL query
        sqlsrv_close( $conn );
    }
    ?>

<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta name=description content="PHP and Microsoft Azure Database Login by childofcode.com">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Carvenience Ondemand Carwash</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ 
            color: #01c20d;
            font: 14px sans-serif; 
            background-color: #abababab;
        }
        .login-block{ 
            padding: 20px; 
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            min-height: 100vh;
        }
        .wrapper{ 
            width:300px;
            height:100%;
            padding: 20px; 
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            background-color: white;
            border: 1px solid #01c20d;
        }
        .login-button{ 
            color: #;
            background-color: #000000
            border-color: #01c20d;
        }
        .login-label{ 
            color: #01c20d;
        }
        input[type="text"]::placeholder {  
                  text-align: center; 
        } 
        input[type="password"]::placeholder {  
                  text-align: center; 
        } 
    </style>
</head>  
<body>  
    <div class="login-block">
        <div class="wrapper">
            <h2>Clients Sign In</h2>
            </br>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]."?page=".$_GET['page']."&data=".$_GET['data']) ; ?>" method="post">
                <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                    <label  class="login-label" >Username</label>
                    <input type="text" name="username" class="form-control" value="<?php echo $username; ?>" placeholder="Enter username">
                </div>    
                <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                    <label class="login-label" >Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter password">
                </div>
                <div class="form-group <?php echo (!empty($username_err) || !empty($password_err) || !empty($login_err)) ? 'has-error' : ''; ?>">
                    <span class="help-block"><?php echo $username_err; ?></span>
                    <span class="help-block"><?php echo $password_err; ?></span>
                    <span class="help-block"><?php echo $login_err; ?></span>
                </div> 
                <div class="form-group">
                    <input type="submit" class="btn btn-primary login-button" value="Login">
                </div>
            </form>
            <a href="/">by Hyperactive Digital Studios</a>
        </div>    
    </div>
</body>  
    

    



    
        }   
     }
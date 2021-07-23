<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <style>
     
     body 
     {
          background-image: url('workout_plan.jpeg');
          background-repeat: no-repeat;
          background-attachment: fixed; 
          background-size: 100% 100%;
    }

    ::-webkit-scrollbar 
    {
      width: 10px;
    }


    ::-webkit-scrollbar-track 
    {
      background: #f1f1f1; 
    }

    ::-webkit-scrollbar-thumb {
      background: #888; 
    }


    ::-webkit-scrollbar-thumb:hover {
      background: #555; 
    }

    table {
      border: 1px solid black;
      border-collapse: collapse;

     
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
    }
    th, td {
      text-align: left;
      padding: 16px;
    }
    tr:nth-child(even) {
    background-color: BlanchedAlmond;
    }
    tr:nth-child(odd) {
    background-color: BurlyWood;
    }
      

    table.center {
      margin-left: auto; 
      margin-right: auto;
    }

    input[type=text], select {
      margin-left: auto; 
      margin-right: auto;
      width: 30%;
      text-align: center; 
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    input[type=number], select {
      margin-left: auto; 
      margin-right: auto;
      width: 30%;
      text-align: center; 
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    input[type=password], select {
      width: 30%;
      text-align: center; 
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    
    }

    input[type=submit] {
      width: 30%;
      text-align: center;  
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type=submit]:hover {
      background-color: #45a049;
    }

    .center1 {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100px;
    color:LightGray;

    }
    </style>
<body>
<form > 
    <b> 
    <div class="center1">
        <h1 >Welcome to FIT-ME</h1>
    </div>

  
    <div class="center1">
        <h2 >Introduction:</h1>    
    </div>
        <br><br>  
    <div class="center1" style="color:white;" >
        <h3 style="font-family:courier;"    >In these modern days when people all over the world have become so much concerned
        about their health and diet, it is obvious that they continually seek out for a<br>
        Workout/Gym platform.This FIT-ME management system is an easy way to use gym and health membership system.
        It can help to keep the records of registered <br> members, guidance which exercise and muscle
        groups to work out together, how much weight loss is required, their diet plans, logs of calories,
        daily <br>targets to achieve.<br><br>
    </div>
        </h3>
    </b>
</form> 



<?php
    $db_sid = 
    "(DESCRIPTION =
    (ADDRESS = (PROTOCOL = TCP)(HOST = Talha)(PORT = 1521))
    (CONNECT_DATA =
    (SERVER = DEDICATED)
    (SERVICE_NAME = XE)
    )
    )";           // Your oracle SID, can be found in tnsnames.ora  ((oraclebase)\app\Your_username\product\11.2.0\dbhome_1\NETWORK\ADMIN) 
    
    $db_user = "system";   // Oracle username e.g "scott"
    $db_pass = "1234";    // Password for user e.g "1234"
    $conn = oci_connect($db_user,$db_pass,$db_sid);

    if($conn) 
        { 
          //echo  nl2br("Connection Successful.\n ");
        } 
    else 
        { die('Could not connect to Oracle: '); } 

      

    if(isset($_POST['button']))
    {
   

        $uemail=$_POST['uemail'];//USER EMAIL
        $UserPassword=$_POST['psw'];//USER Password
        
        $sql_Check="SELECT EMAIL FROM USERS WHERE EMAIL = '$uemail'  AND PWD = '$UserPassword' ";
        $query_id1 = oci_parse($conn, $sql_Check);
        oci_execute($query_id1);


        $_SESSION["uemail"] =$uemail;
  

        $row = oci_fetch($query_id1);
        if($row)
        {
            echo "<form action='/proj_index.html'  method='post'>";
            echo "<div class='center1'><h3>Account exists </h3></div> \n";
            echo " <div class='center1'><input type='submit' name='button' value='Proceed'> </div> \n";
            echo "</form>";
           
        }
        else
        {
            echo "<form action='/registeration_form.php'  method='post'>";
            echo "<div class='center1'> <h3>Account doesn't exists</h3></div> \n";
            echo "<div class='center1' ><input type='submit' name='register' value='register'> </div> \n";
            echo "</form>";
        }

    }
        
    ?>
    

</body>
</html>

<!DOCTYPE html>
<html>

<head> 
<meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
          background-image: url('registeration.jpeg');
          background-repeat: no-repeat;
          background-attachment: fixed; 
          background-size: 100% 100%;
        }
    ::-webkit-scrollbar {
      width: 10px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
      background: #f1f1f1; 
    }
    
    /* Handle */
    ::-webkit-scrollbar-thumb {
      background: #888; 
    }

    /* Handle on hover */
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
    height: 35px;
    }

    

</style>
</head>
<body>

<b>

<div class="center1">
<h1>FIT-ME Registeration Form</h1>
</div>


<form action="" method="post"  >

  <h2 class="center1">Personal Information</h2>
  
  <div class="center1">
  <label for="fname">First name</label><br>
  </div>

  <div class="center1">
  <input type="text" id="fname" name="fname" ><br> 
  </div>
  
  <div class="center1">
  <label for="lname">Last name: </label><br>
  </div>
  
  <div class="center1"> 
  <input type="text" id="lname" name="lname"  class="center1" ><br><br>  
  </div>
  
  <div class="center1">
  <label for="gender">Gender: </label><br>
  </div>

  <div class="center1" >
  <select name= "gender">
    <option value= "Male">Male</option>
    <option value= "Female">Female</option>
  </select><br><br>
  </div>

  
  <div class="center1">
  <label for="Body Type">Body Type :</label><br>
  </div>

  <div class="center1">
  <select name= "body_type">
  <option value= "Endomorph">Endomorph</option>
  <option value= "Mesomorph">Mesomorph</option>
  <option value= "Ectomorph">Ectomorph</option>
  </select><br><br>
  </div>
  
  <div class="center1">
  <label for="height">Height </label><br>
  </div>

  <div class="center1">
  <input type="text" name="height" ><br><br>  
  </div>


  <div class="center1">
  <label for="weight">Weight </label><br>  
  </div>
  
  
   <div class="center1">
   <input type="text" name="weight" ><br><br>
   </div> 
  
  
  <div class="center1">
  <label for="email">Email </label><br>
  </div>

  <div class="center1">
  <input type="text" name="email" > <br><br>
  </div>


  <div class="center1">
  <label for="pass">  Password</label><br>
  </div>
  
  <div class="center1" >
  <input type="password"  name="pass"><br>
  </div>
 

  <!-- <label for="repassword">  Confirm Password</label> -->
  <!-- <input type="text" id="repassword"   name="repassword"><br><br> -->

  <div class="center1">
  <label for="DOB">Date Of Birth </label><br>
  </div>

  <div class="center1">
  <input type="text" name="DOB" ><br><br>
  </div>
  <br><br>  
  <div class="center1"><input type="submit" name="button" value="Submit"></div>

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
      
        $first_name=$_POST['fname'];
        $last_name=$_POST['lname'];
        $gender=$_POST['gender'];
        $body_type=$_POST['body_type'];
        $height=$_POST['height'];
        $weight=$_POST['weight'];
        $email=$_POST['email'];
        $pwd=$_POST['pass'];
        $DOB=$_POST['DOB'];
        //$wg = 2;

        $sql_insert="INSERT INTO USERS(FIRST_NAME,LAST_NAME,EMAIL,PWD,BODY_TYPE,HEIGHT,WG,GENDER,DOB) VALUES ('$first_name','$last_name','$email','$pwd','$body_type', $height, $weight, '$gender', $DOB )";
        $query_id3 = oci_parse($conn, $sql_insert);
        if(oci_execute($query_id3))
        {
            echo nl2br("Registeration Successful.\n ");
            echo "<form action='/login.html'  method='post'>";
            echo "<div class='center1'><h3>Account created </h3></div> \n";
            echo " <div class='center1'><input type='submit' name='button' value='Proceed'> </div> \n";
            echo "</form>";
        }
        else
        {
            echo nl2br("Registeration Unsuccessful.\n ");
            echo nl2br("please try Again.\n "); 
        }
      }



    // $sql_ret="SELECT PLAN_ID ,EXERCISE_NAME,WORKOUT_LEVEL,DPW from WORKOUT_PLAN";
    // $stid = oci_parse($conn, $sql_ret);
    // oci_execute($stid);
    
    // echo "<h1>CHOOSE YOUR WORKOUT PLAN</h1>\n";
    // echo "<table border='1' class ='center' >\n";
    // echo "<tr>";
    // echo "<th>PLAN_ID</th>";
    // echo "<th>Exercise Name </th>";
    // echo "<th>Workout Level</th>";
    // echo "<th>DPW</th>";
    // echo "</tr>";
    // while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    //     echo "<tr>\n";
    //     foreach ($row as $item) {
    //         echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
    //     }
    //     echo "</tr>\n";
    // }
    // echo "</table>\n";
        
    ?>

    


</body>
</html>

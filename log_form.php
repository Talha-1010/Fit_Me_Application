
<?php
session_start();

?>


<!DOCTYPE html>

<html>
    
    <style>
    body {
          background-image: url('log.jpeg');
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
        width: 30%;
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

    input[type=submit]:hover {
      background-color: #45a049;
    }

    .center1 {
      font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

   

    </style>
    
<body>

    


<h1 style="font-family: verdana;">FIT-ME Log Form</h1>
<form action="" method="post" class="center1" >

    <b><h3>

    <!-- <label for="uemail">Email</label><br>
    <input type="text" id="uemail" name="uemail"><br><br> -->

    <label for="setss">Sets </label><br>
    <input type="number" id="setss" name="setss" min="0"><br><br> 

    <label for="reps">Reps </label><br>
    <input type="number" id="reps" name="reps" min="0"><br><br>

    <label for="exercise_completed">Exercise Done </label><br>
    <input type="text" id="exercise_completed" name="exercise_completed"><br><br>

    <label for="distance_ran"> Distance Ran </label><br>
    <input type="number" id="distance_ran" name="distance_ran"><br><br>

    <label for="meal_name">Meal Name </label><br>
    <input type="text" id="meal_name" name="meal_name" ><br>
    
    <label for="meal_energy">Meal Energy </label><br>
    <input type="number" id="meal_energy" name="meal_energy" min="500"><br><br> 

    <label for="meal_taken">Meal Amount </label><br>
    <input type="number" id="meal_taken" name="meal_taken" ><br>



    <label for="bmi">BMI </label><br>
    <input type="number" id="bmi" name="bmi" ><br><br>

    <label for="muscle_gain">Muscle Gain </label><br>
    <input type="number" id="muscle_gain" name="muscle_gain" ><br><br>

    <label for="body_fat">Body Fat </label><br>
    <input type="number" id="body_fat" name="body_fat" ><br>


    

    
    

    </b></h3>
  <div><input type="submit" name="button" value="Submit"></div>
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
    
      $sets=$_POST['setss'];
      $reps=$_POST['reps'];
      $exercise_completed=$_POST['exercise_completed'];
      $dist_ran=$_POST['distance_ran'];
      $meal_name=$_POST['meal_name'];
      $meal_energy=$_POST['meal_energy'];
      $meal_taken=$_POST['meal_taken'];
      $BMI=$_POST['bmi'];
      $Muscle_gain=$_POST['muscle_gain'];
      $Body_fat =$_POST['body_fat'];
      $progress_id = date("his");
      $meal_id = date("his");
      // $uemail=$_POST['uemail'];
      $uemail=$_SESSION["uemail"];

      
      $select_exe_id="SELECT EXE_ID FROM EXERCISE WHERE EXERCISE_NAME='$exercise_completed'";
      $query_id1 = oci_parse($conn, $select_exe_id);
      $runselect1 = oci_execute($query_id1);
      $exe = oci_fetch_object($query_id1);
   
     

      $sql_insert4="INSERT INTO DAILY_TARGETS(EMAIL,EXE_ID,SETSS,REPS,DISTANCE_COVERED) VALUES ('$uemail','$exe->EXE_ID',$sets,$reps,$dist_ran)";
      $query_id4 = oci_parse($conn, $sql_insert4);
      $runselect4 = oci_execute($query_id4);

      $select_plan_id="SELECT PLAN_ID FROM WORKOUT_PLAN WHERE EMAIL='$uemail' ";
      $query_id3 = oci_parse($conn, $select_plan_id);
      $runselect3 = oci_execute($query_id3);
      $workoutplan = oci_fetch_object($query_id3);
      

      $sql_insert2="INSERT INTO MEAL(MEAL_ID,PLAN_ID,MEAL_NAME,MEAL_TAKEN,MEAL_ENERGY) VALUES ($meal_id,$workoutplan->PLAN_ID,'$meal_name',$meal_taken,$meal_energy)";
      $query_id2 = oci_parse($conn, $sql_insert2);
      $runselect2 = oci_execute($query_id2);

      $sql_insert5="INSERT INTO PROGRESS(PROGRESS_ID,EMAIL,BMI,BODY_FAT,MUSCLE_GAIN) VALUES ('$progress_id','$uemail',$BMI,$Body_fat,$Muscle_gain)";
      $query_id5 = oci_parse($conn, $sql_insert5);
      $runselect5 = oci_execute($query_id5);

      


      if($runselect1 && $runselect2 && $runselect3 && $runselect4 && $runselect5)
      {
         echo nl2br("Insertion Successful.\n ");
      }
    }



    $sql_ret="SELECT EXERCISE_NAME FROM EXERCISE";
    $stid = oci_parse($conn, $sql_ret);
    oci_execute($stid);
    
    echo "<h1>Choose Exercise</h1>\n";
    echo "<table border='3'>\n";
    echo "<tr>";
    echo "<th>Exercise Name</th>";
    echo "</tr>";
    while ($row = oci_fetch_object($stid)) {
        echo "<tr>\n";
        foreach ($row as $item) {
            echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
        }
        echo "</tr>\n";
    }
    echo "</table>\n";
        
    ?>

</body>
</html>
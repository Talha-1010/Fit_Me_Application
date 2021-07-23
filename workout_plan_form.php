
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

    /* Track */
    ::-webkit-scrollbar-track 
    {
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
    height: 35px;
    font-family: verdana;
    }

    .center2 {
    display: flex;
    justify-content: center;
    align-items: left;
    height: 85px;
    font-family: verdana;
    
    }

      



    </style>
<body>
<h1 style="font-family: verdana;" ><b>FIT-ME Workout Form </b></h1>
<form action=""  method="post"  >

  <div class="center1" style="font-family: verdana;">
  <h2><b>Workout Plan Information </b></h2>
  </div>  
  
  <div class="center1" style="font-family: verdana;">
  <h3><b>Select Exercise Name from Table given below </b></h3>
  </div>  

  <b>



  <div class="center1">
  <label for="exercise_name">Exercise Name </label><br>
  </div>
  
  <div class="center1">
  <input type="text" id="exercise_name" name="exercise_name"><br>
  </div>
    
  <div class="center1">
  <label for="bmi">BMI </label><br>
  </div> 

  <div class="center1">
  <input type="text" id="bmi" name="bmi"><br>
  </div>


  <div class="center1">
  <label for="p_num">Trainer Phone Number </label><br><br>
  </div> 

  <div class="center1" >
  <input type="text" id="p_num" name="p_num" ><br><br>
  </div>

  <div class="center1">
  <label for="t_fname">Trainer Full Name</label><br><br>
  </div> 
    
  <div class="center1">
  <input type="text" id="t_fname" name="t_fname" ><br><br>
  </div>

 

   <div class="center1">
   <label for="muscle_groups">Muscle Groups </label><br>
   </div> 

  <div class="center1">
  <select name= "muscle_groups">
    <option value= "Upper_body">Upper Body</option>
    <option value= "Lower_body">Lower Body</option>
    <option value= "core">Core</option>
  </select><br><br>
  </div>
  
  <div class="center1">
    <label for="workout_days">Workout Days (b/w 1 and 7):</label><br>  
  </div>
  
  <div class="center1">
    <input type="number" id="workout_days" name="workout_days" min="1" max="7"><br><br>
  </div>

  
  <div class="center1">
    <label for="Total_sets">Total Sets </label><br>  
  </div>
  
  <div class="center1">
    <input type="number" id="Total_sets" name="Total_sets" ><br><br>
  </div>

  <div class="center1">
    <label for="Total_reps">Total Reps </label><br>  
  </div>
  
  <div class="center1">
    <input type="number" id="Total_reps" name="Total_reps" ><br><br>
  </div>

  <div class="center1">
    <label for="Diet_name">Diet Name </label><br>
  </div>
  
  <div class="center1">
    <select name= "Diet_name">
      <option value= "Vegetarian Diet"> Vegetarian Diet </option>
      <option value= "Protein Diet"> High-Protein Diet </option>
      <option value= "Low-fat Diet"> Low-fat Diet </option>
      <option value= "Keto Diet"> Keto Diet </option>
  </select>
  <br><br>  
  </div>

  <div class="center1">
    <label for="level">Level </label><br>
  </div>
  
  <div class="center1">
      <select name= "level">
        <option value= "Beginner">Beginner</option>
        <option value= "Intermediate">Intermediate</option>
        <option value= "Expert">Expert</option>
      </select><br><br>
  </div>
     

  </b>
  <div class="center2"><br><br><input type="submit" name="button" value="Submit"></div>
  
  


  
  

  
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

      $plan_id=0;

    if(isset($_POST['button']))
    {
        
        $BMI=$_POST['bmi'];//pg
        $muscle_groups=$_POST['muscle_groups'];//mg
        $workout_days=$_POST['workout_days'];//wp

        $diet_name=$_POST['Diet_name'];//dt
        $level=$_POST['level'];//wp
        $p_num=$_POST['p_num'];
        $t_fname=$_POST['t_fname'];
        $Total_sets=$_POST['Total_sets'];
        $Total_reps=$_POST['Total_reps'];
        
        // $uemail=$_POST['uemail'];
        $uemail=$_SESSION["uemail"];
        $progress_id=date("his");  
        $plan_id=date("his");
        $exe_id=date("his");
        $exercise_name=$_POST['exercise_name'];

        
        
        $sql_insert1="INSERT INTO TRAINER VALUES ($p_num,'$t_fname')";
        $query_id1 = oci_parse($conn, $sql_insert1);
        $runselect1 = oci_execute($query_id1);

        $sql_insert2="INSERT INTO EXERCISE(EXE_ID,EXERCISE_NAME,MUSCLE_GROUP) VALUES ( '$exe_id','$exercise_name','$muscle_groups')";
        $query_id2 = oci_parse($conn, $sql_insert2);
        $runselect2 = oci_execute($query_id2);

        $sql_insert3="INSERT INTO WORKOUT_PLAN(PLAN_ID,EMAIL,EXE_ID,PHONE_NUMBER,DPW,TOTAL_SETS,TOTAL_REPS,WORKOUT_LEVEL) VALUES ( $plan_id,'$uemail','$exe_id',$p_num,$workout_days,$Total_sets,$Total_reps,'$level')";
        $query_id3 = oci_parse($conn, $sql_insert3);
        $runselect3 = oci_execute($query_id3);

        $sql_insert4="INSERT INTO PROGRESS(PROGRESS_ID,EMAIL,BMI) VALUES('$progress_id','$uemail',$BMI)";
        $query_id4 = oci_parse($conn, $sql_insert4);
        $runselect4 = oci_execute($query_id4);


        if($runselect1 && $runselect2 && $runselect3 )
        {
            echo nl2br("Insertion Successful.\n ");
        }
    }




        
    ?>


</body>
</html>

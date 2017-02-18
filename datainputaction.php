<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $COMPANY_NAME = $_POST["COMPANY_NAME"];    
          $CAR_NAME = $_POST["CAR_NAME"];   
            $VARIANT_NAME = $_POST["VARIANT_NAME"];   
           $E_S_PRICE = $_POST["E_S_PRICE"];   
             $O_R_PRICE = $_POST["O_R_PRICE"];   
               $BODY_TYPE = $_POST["BODY_TYPE"];   
                 $SEGMENT = $_POST["SEGMENT"];     
                 $DISP_CC = $_POST["DISP_CC"];   
                   $FUEL_TYPE = $_POST["FUEL_TYPE"];   
                     $TRANSMISSION = $_POST["TRANSMISSION"];   
                     $GEAR_NO = $_POST["GEAR_NO"];
                     $P_POWER_BHP = $_POST["P_POWER_BHP"];   
                       $MAX_RPM_PP = $_POST["MAX_RPM_PP"];   
                         $P_TORQUE_NM = $_POST["P_TORQUE_NM"];   
                           $Max_RPM_PT = $_POST["Max_RPM_PT"];  
         $P_TORQUE_NM = $_POST["P_TORQUE_NM"];   
           
           $MILEAGE_CITY = $_POST["MILEAGE_CITY"];   
             $MILEAGE_HIGHWAY= $_POST["MILEAGE_HIGHWAY"];   
               $LENGTH_MM= $_POST["LENGTH_MM"];  
               $WIDTH_MM= $_POST["WIDTH_MM"];   
                 $GRND_CLR_MM = $_POST["GRND_CLR_MM"];   
                   $WHEEL_BASE_MM = $_POST["WHEEL_BASE_MM"];   
                     $KERB_WEIGHT_KGS = $_POST["KERB_WEIGHT_KGS"];   
                       $BOOT_SPACE_L = $_POST["BOOT_SPACE_L"];   
                         $TURNING_RAD_M = $_POST["TURNING_RAD_M"];   
                           $AC = $_POST["AC"];
        
                             $CLIMATE_CTRL= $_POST["CLIMATE_CTRL"];   
                               $CENTRAL_LOCK = $_POST["CENTRAL_LOCK"];   
                                 $CD_PLAYER = $_POST["CD_PLAYER"];   
                                   $POWER_STEERING = $_POST["POWER_STEERING"];   
                                     $POWER_WINDOWS = $_POST["POWER_WINDOWS"];   
                                       $STREEING_ADJ_RAKE = $_POST["STREEING_ADJ_RAKE"];   
                                         $STEERING_ADJ_REACH = $_POST["STEERING_ADJ_REACH"];   
                                         $E_ADJ_D_SEAT = $_POST["E_ADJ_D_SEAT"];  
                                         $STEERING_M_C = $_POST["STEERING_M_C"];  
                                         $REAR_AC_VENT= $_POST["REAR_AC_VENT"];  
                                         $REMOTE_C_B = $_POST["REMOTE_C_B"];  
                                         $REAR_WIPER = $_POST["REAR_WIPER"];  
                                         $LEATHER_SEATS = $_POST["LEATHER_SEATS"];  
                                         $E_ADJ_MIRRORS = $_POST["E_ADJ_MIRRORS"];  
                                         $ABS = $_POST["ABS"];
                                          $AIR_BAG = $_POST["AIR_BAG"];
                                           $PARKING_SENSORS = $_POST["PARKING_SENSORS"];
                                         $TRACTIONAL_CONTROL = $_POST["TRACTIONAL_CONTROL"];  
                                         $FUEL_CAP_L = $_POST["FUEL_CAP_L"];  
                                         $SEATING_CAP = $_POST["SEATING_CAP"];  
                                         $F_TYRE_WIDTH_MM = $_POST["F_TYRE_WIDTH_MM"];  
                                         $F_TYRE_H_R = $_POST["F_TYRE_H_R"]; 
                                         $F_RADIAL_PLY = $_POST["F_RADIAL_PLY"]; 
                                         $F_WHEEL_RIM_DIA_IN = $_POST["F_WHEEL_RIM_DIA_IN"]; 
                                         $B_TYRE_WIDTH_MM = $_POST["B_TYRE_WIDTH_MM"]; 
                                         $B_TYRE_HR = $_POST["B_TYRE_HR"];
                                         $B_RADIAL_PLY = $_POST["B_RADIAL_PLY"];
                                         $B_WHEEL_RIM_DIA_IN= $_POST["B_WHEEL_RIM_DIA_IN"];
                                         $CAR_IMAGE_URL= $_POST["CAR_IMAGE_URL"];
                                         
                                         
                                         
 $servername="localhost";  
 $username = "root";
$fpassword = "";
$dbname = "oui";

// Create connection
$conn = new mysqli($servername, $username, $fpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


//$sql = "INSERT INTO tbl_car (COMPANY_NAME,CAR_NAME,VARIANT_NAME,E_S_PRICE,O_R_PRICE,BODY_TYPE,SEGMENT,ENGINE,DISP_CC,FUEL_TYPE,TRANSMISSION,GEAR_NO,P_POWER_BHP,MAX_RPM_PP,P_TORQUE_NM,MAX_RPM_PT,MILEAGE_CITY,MILEAGE_HIGHWAY,LENGTH_MM,WIDTH_MM,GRND_CLR_MM,WHEEL_BASE_MM,KERB_WEIGHT_KGS,BOOT_SPACE_L,TURNING_RAD_M,AC,CLIMATE_CTRL,CENTRAL_LOCK,CD_PLAYER,POWER_STEERING,POWER_WINDOWS,STREEING_ADJ_RAKE,STEERING_ADJ_REACH,E_ADJ_D_SEAT,STEERING_M_C,REAR_AC_VENT,REMOTE_C_B,REAR_WIPER,LEATHER_SEATS,E_ADJ_MIRRORS,ABS,AIR_BAG,PARKING_SENSORS,TRACTIONAL_CONTROL,FUEL_CAP_L,SEATING_CAP,F_TYRE_WIDTH_MM,F_TYRE_H_R,F_RADIAL_PLY,F_WHEEL_RIM_DIA_IN,B_TYRE_WIDTH_MM,B_TYRE_HR,B_RADIAL_PLY,B_WHEEL_RIM_DIA_IN,CAR_IMAGE_URL) VALUES ('$COMPANY_NAME','$CAR_NAME','$VARIANT_NAME','$E_S_PRICE','$O_R_PRICE','$BODY_TYPE','$SEGMENT','$ENGINE',$DISP_CC','$FUEL_TYPE','$TRANSMISSION','$GEAR_NO','$P_POWER_BHP','$MAX_RPM_PP','$P_TORQUE_NM','$Max_RPM_PT','$MILEAGE_CITY','$MILEAGE_HIGHWAY','$LENGTH_MM','$WIDTH_MM','$GRND_CLR_MM','$WHEEL_BASE_MM','$KERB_WEIGHT_KGS','$BOOT_SPACE_L','$TURNING_RAD_M','$AC','$CLIMATE_CTRL','$CENTRAL_LOCK','$CD_PLAYER','$POWER_STEERING','$POWER_WINDOWS','$STREEING_ADJ_RAKE','$STEERING_ADJ_REACH','$E_ADJ_D_SEAT','$STEERING_M_C','$REAR_AC_VENT','$REMOTE_C_B','$REAR_WIPER','$LEATHER_SEATS','$E_ADJ_MIRRORS','$ABS','$AIR_BAG','$PARKING_SENSORS','$TRACTIONAL_CONTROL','$FUEL_CAP_L','$SEATING_CAP','$F_TYRE_WIDTH_MM','$F_TYRE_H_R','$F_RADIAL_PLY','$F_WHEEL_RIM_DIA_IN','$B_TYRE_WIDTH_MM','$B_TYRE_HR','$B_RADIAL_PLY','$B_WHEEL_RIM_DIA_IN','$CAR_IMAGE_URL')" ;
$sql = "INSERT INTO tbl_car  ( COMPANY_NAME, CAR_NAME, VARIANT_NAME, E_S_PRICE, O_R_PRICE, BODY_TYPE, SEGMENT, ENGINE, DISP_CC, FUEL_TYPE, TRANSMISSION, GEAR_NO, P_POWER_BHP, MAX_RPM_PP, P_TORQUE_NM, MAX_RPM_PT, MILEAGE_CITY, MILEAGE_HIGHWAY, LENGTH_MM, WIDTH_MM, GRND_CLR_MM, WHEEL_BASE_MM, KERB_WEIGHT_KGS, BOOT_SPACE_L, TURNING_RAD_M, AC, CLIMATE_CTRL, CENTRAL_LOCK, CD_PLAYER, POWER_STEERING, POWER_WINDOWS, STEERING_ADJ_RAKE, STEERING_ADJ_REACH, E_ADJ_D_SEAT, STEERING_M_C, REAR_AC_VENT, REMOTE_C_B, REAR_WIPER, LEATHER_SEATS, E_ADJ_MIRRORS, ABS, AIR_BAG, PARKING_SENSORS, TRACTION_CONTROL, FUEL_CAP_L, SEATING_CAP, F_TYRE_WIDTH_MM, F_TYRE_H_R, F_RADIAL_PLY, F_WHEEL_RIM_DIA_IN, B_TYRE_WIDTH_MM, B_TYRE_H_R, B_RADIAL_PLY, B_WHEEL_RIM_DIA_IN, CAR_IMG_URL)  VALUES ('$COMPANY_NAME','$CAR_NAME','$VARIANT_NAME','$E_S_PRICE','$O_R_PRICE','$BODY_TYPE','$SEGMENT','$ENGINE',$DISP_CC','$FUEL_TYPE','$TRANSMISSION','$GEAR_NO','$P_POWER_BHP','$MAX_RPM_PP','$P_TORQUE_NM','$Max_RPM_PT','$MILEAGE_CITY','$MILEAGE_HIGHWAY','$LENGTH_MM','$WIDTH_MM','$GRND_CLR_MM','$WHEEL_BASE_MM','$KERB_WEIGHT_KGS','$BOOT_SPACE_L','$TURNING_RAD_M','$AC','$CLIMATE_CTRL','$CENTRAL_LOCK','$CD_PLAYER','$POWER_STEERING','$POWER_WINDOWS','$STREEING_ADJ_RAKE','$STEERING_ADJ_REACH','$E_ADJ_D_SEAT','$STEERING_M_C','$REAR_AC_VENT','$REMOTE_C_B','$REAR_WIPER','$LEATHER_SEATS','$E_ADJ_MIRRORS','$ABS','$AIR_BAG','$PARKING_SENSORS','$TRACTIONAL_CONTROL','$FUEL_CAP_L','$SEATING_CAP','$F_TYRE_WIDTH_MM','$F_TYRE_H_R','$F_RADIAL_PLY','$F_WHEEL_RIM_DIA_IN','$B_TYRE_WIDTH_MM','$B_TYRE_HR','$B_RADIAL_PLY','$B_WHEEL_RIM_DIA_IN','$CAR_IMAGE_URL')" ;                                       
                                         
      $result = $conn->query($sql);


if ($result) {
    // output data of each row
   
        
         header('Location:addstudentmessage.php');
         exit();
    
 
}  
 else {
      header('Location:datainput.php');
         exit();
    
}
                                     
                           
                   
                 
               
               
           
                     
          
        // put your code here
        ?>
    </body>
</html>

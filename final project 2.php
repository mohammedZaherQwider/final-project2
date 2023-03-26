 <?php  
$ferr=""; 
$cerr=""; 
$errprocess=""; 
function sum($n1,$n2){
     return ($n1+$n2);
}
function dens($n1,$n2){
     return ($n1-$n2);
} 
function pw($n1,$n2){
     return ($n1*$n2);
}
function d($n1,$n2){
     return ($n1/$n2);
} 
function m($n1,$n2){
     return ($n1%$n2);
}
function abs1($n1){
     return abs($n1);
} 
function sqrt1($n1){
     return sqrt($n1);
}
function round1($n1){
     return round($n1);
}
function pow1($n1,$n2){
     return pow($n1,$n2);
}
function ceil1($n1){
     return ceil($n1);
}  
function floor1($n1){
     return floor($n1);
}  
if(empty($_POST['fnum'])){ 
     $ferr=" First number empty . ";
} 
if(empty($_POST['lnum'])){ 
     $cerr=" Last number empty . ";
} 
if(empty($_POST['process'])){ 
     $errprocess=" Process empty . ";
} 
if (isset($_POST['submit'])) {   
       $fnum=$_POST['fnum']; 
       $lnum=$_POST['cnmb'];  
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
<h2>Welcome .</h2> 

     <div class="or"> 
     <h2>Choose the process</h2>
          <ol>
          <li>Sum .</li>
          <li>Subtract .</li>
          <li>Multiply . </li> 
          <li>Divide . </li>
          <li>Mod  . </li>
          <li>Abs . </li> 
          <li>Sqrt . </li>
          <li>Round . </li>
          <li>Pow . </li> 
          <li>Ceil . </li>
          <li>Floor . </li>
          </ol>  
     </div>
    <div class="cont"> 
     <form action="final project 2.php" method="POST"> 
     <label for="fname">Process :</label><br>
     <input type="text"  name="process" ><br> 
     <div class="err"><?php echo $errprocess ?></div>
     <label for="fname">First number :</label><br>
     <input type="text" name="fnum" ><br> 
     <div class="err"><?php echo $ferr ?></div>
     <label for="lname">Last number:</label><br>
     <input type="text"  name="cnmb"><br>
     <div class="err"><?php echo $cerr ?></div>
     <input type="submit" value="Send" name="submit">
     </form> 
    </div>
    <?php  
    
     switch ($_POST['process']) {
          case 1:
               echo sum($fnum, $lnum);
               break; 
          case 2:
               echo dens($fnum, $lnum);
               break;     
          case 3:
               echo pw($fnum, $lnum);
               break; 
          case 4:
               echo d($fnum, $lnum);
               break;  
          case 5:
               echo m($fnum, $lnum);
               break; 
          case 6:
               echo abs1($fnum);
               break; 
          case 7:
               echo sqrt1($fnum);
               break; 
          case 8:
               echo round1($fnum);
               break;                
          case 9:
               echo pow1($fnum, $lnum);
               break;                 
             
          case 10:
               echo ceil1($fnum);
               break;                 
          case 11:
               echo floor1($fnum);
               break;   
        default :
               echo "<br>"; 
               break; 
     }
    ?>

</body>
</html>
<!DOCTYPE html>
<html lang="lt">
    <head>
        <meta charset="utf-8">
        <title>POST</title>
    </head>
    <body>
    <form method="post">  
Įveskite pirmą skaičių:  
<input type="number" name="skaicius1" /><br><br>  
Įveskite antrą skaičių:  
<input type="number" name="skaicius2" /><br><br>  
<input  type="submit" name="submit" value="Pridėti">  
</form>  

<?php  
    if(isset($_POST['submit'])) {

        $skaicius1 = $_POST['skaicius1'];  
        $skaicius2 = $_POST['skaicius2'];  
        $sum =  $skaicius1 + $skaicius2;     
echo "$skaicius1 ir $skaicius2 yra: ".$sum;   
}  
?>  
</body>  
</html>  

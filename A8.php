<!DOCTYPE html>
<html>

   <head>
      <title>Bai8</title>
   </head>
   <body>
   
       <?php
        $mang_ban_dau = array('programming', 'php', 'basic', 'dev', 'is', 'program is PHP');
		$mang_tam = array_map('strlen', $mang_ban_dau);  

		echo "Độ dài nhỏ nhất của phần tử trong mang la: " . min($mang_tam) .  
		". <br>Độ dài lớn nhất của phần tử trong mang la: " . max($mang_tam).'.';
       ?>
       
   </body>
</html>
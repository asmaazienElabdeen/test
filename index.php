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
       $h= fopen("C:\\Users\\java\\Desktop\\folder1\\x.txt", "r+");
      //   echo fread($h, 4);
       while(!feof($h))
       {
           $v= fread($h, 5);
           echo $v."<br/>";
           if(strlen($v)<4)
               break;
           $m= ftell($h);
           fseek($h, $m-2);
          // echo fread($h,4);
       }
        ?>
    </body>
</html>

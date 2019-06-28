<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$p="C:\\Users\\java\\Desktop\\folder2";

function find($p)
{
    $x= opendir($p);
    $xpath="";
$f="x.txt";
while($item= readdir($x))
{
   // echo $item."<br/>";
    if(is_file($p."\\".$item))
    {
        echo $item; 
     if($item==$f)   
     {
         echo"nn";
         $xpath=$p."\\".$item;
         echo $xpath;
      // return $p."\\".$item;
     }  
     
    }
    else if(is_dir($p."\\".$item)) {
    //echo $item; 
        if($item !="."&& $item !="..")
        {
            return find($p."\\".$item);
        }
    }
}
closedir($x);
//return null;
}
echo find($p);
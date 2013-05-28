<?php

/*生成随机数*/

function RandomName( $nameLength ) 
{
 $NameChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789';
 $Vouel = 'AEIOU';
 $Name = "";
 for ($index = 1; $index <= $nameLength; $index++) 
 { 
    if ($index % 3 == 0)
    {
      $randomNumber = rand(1,strlen($Vouel));
      $Name .= substr($Vouel,$randomNumber-1,1); 
    }else
      {
        $randomNumber = rand(1,strlen($NameChars));
        $Name .= substr($NameChars,$randomNumber-1,1);
      } 
 }
 return $Name;
}
?>
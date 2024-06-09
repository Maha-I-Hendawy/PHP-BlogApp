<?php function dd($value){

       	   echo "<pre>";
           echo var_dump($value);
           echo "</pre>";


       }

       dd($_SERVER['REQUEST_URI']);


      
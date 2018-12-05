index.php:

<!doctype html>
<html>
<head>

   <title>php1</title>
   </head>

   <body>

<!--call a partial-->

<?php require_once('nav.php');?>

<!-- whitespace doesn't matter in php, -->
<!--  always end assignments in semicolons-->
       <?php
           global $n;
           global $z;

       $n = "james";
       $f = "smith";

       $x =3;
       $t = true;
       $a = array('val1', 'val2');

//  new way of making an array//

       $a2 = ["apple", "grapes", "bananas"];
       $a3 = [

           "fn"=>"mark",
           "ln"=>"garcia",
           "city"=>"ny"

       ];

       function sumof(){
           global $n;
           global $z;
           if($n=="james"){

               $z = "james is in the house";

           }

           else{

               $z = "james is home sick";

           };
       }


       sumof();



       ?>

<!--  concatenate in php with periods      -->

<!--    an associative array and an object in php are two different things. see slides for syntax-->

   <h1>hello, <?php echo $n." ".$f;?></h1>
   <h1><?php echo "$n $f";?></h1>
   <h1><?php print_r($a2); ?></h1>
   <h1><?php echo $a3['fn']; ?></h1>
   <h1><?php echo $z; ?></h1>

   <h1>
       <?php
           foreach($a2 as $index => $value ){

               echo $value.'<br>';


           };



       ?>

       </h1>

   </body>
</html>


<!-- notes
- printing array valus: print_r
- printing booelans: will either p
- review single quotes and double quotes in php
- functios
- review variable scoping; review setting variables as global
- php allows you to create html snippets that you can reuse in all your pages and you need to only change once to affect all (partials)
-->
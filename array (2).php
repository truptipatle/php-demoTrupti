<!DOCTYPE html>
 <html lang="en"> 
     <head>
          <meta charset="UTF-8">
           <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
           <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
           <title>Find if you can vote?</title> 
           <style>
            .red {
                 color: red; 
                 } 
                 .green 
                 { 
                   color: green; 
                }
         </style>
  </head>
         <body>

         <?php $age = 17; $indian = true; if($age >= 18) { if($indian == true) { echo "You can vote as you are indian"; } else { echo "You cannot vote as you are not indian"; } } else { echo "You cannot vote"; } ?>
        </body> 
</html>
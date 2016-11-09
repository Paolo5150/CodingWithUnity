<html>
   
   <head>
      <title>Hello World</title>
   </head>
   
   <body>
<p>Look here</p>
  <?php

  // the message
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("p.ferri1986@gmail.com","The subject",$msg,"p.ferri1986@gmail.com");

	?>
   </body>

</html>
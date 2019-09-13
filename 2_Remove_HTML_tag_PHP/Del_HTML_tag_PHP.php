<?php
   $text = '<pre>This is some example text This is some example text This is some example text</pre>
   <h1><em>This is the em text</em></h1>
   <p>This is some example text This is some example text This is some example text</p>';
    
   // echo $text;
   echo preg_replace("/<pre>(.+)<\/pre>/", "", $text); // წაშლის pre ტეგს
?>
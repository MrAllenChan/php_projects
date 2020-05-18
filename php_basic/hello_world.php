<?php
echo 'hello world';
// echo '<br />';
$highlight = false;
?>

<!-- embed html code in php -->
<html>
  <body>
    <p <?=$highlight ? "class='highlight'" : ''?>>
    This is a paragraph
    </p>
  </body>
</html>
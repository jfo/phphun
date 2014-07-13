<!DOCTYPE html>

<html>

  <head>
    <?php
      include 'abstract_class_def.php';
    ?>
  </head>

  <body>
    <p>
    <?php
      echo "<h1>" . "This is coming from a block of PHP" . "</h1>";

      echo "<p>" . $concrete->parent_function() . "</p>";

      echo "<p>" . $concrete->contract_function(array()) . "</p>";
    ?>
    </p>
  </body>

</html>

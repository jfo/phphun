<!DOCTYPE html>

<html>

  <head>
    <?php
      include 'classdef.php';
    ?>
  </head>

  <body>
    <p>
    <?php
      echo "<h1>" . "This is coming from a block of PHP" . "</h1>";

      echo "<p>" . $x . "</p>";

      echo "<p>" . $instance_of_regular_class->print_line() . "</p>";

      echo "<p>" . $instance_of_regular_class->instance_var . "</p>";

      /* echo "<p>" . $instance_of_child_class->print_line() . "</p>"; */

      echo "<p>" . $instance_of_child_class->print_from_child() . "</p>";
    ?>
    </p>
  </body>

</html>

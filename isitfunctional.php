<?php

  function foo() {
    return "I came from foo\n";
  }

  /* $food = foo; */
  /* echo $food(); */
  echo foo();

  function derp($x) {
    return $x();
  }


  echo derp('foo');
  $foo_var = foo;
  echo $foo_var();
  foo();



  function recurse($x){
    echo $x. "\n";
    recurse($x + 1);
  }

  /* recurse(); */

  function zero() {
    if (!0)
      echo "hi! zero is false!";
    else
      echo "zero is true!";
  }

  /* zero(); */


  function tacos() {
    echo gettype(tacos);
  }

  tacos();

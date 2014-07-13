<?php

  class RegularClass {

    public $instance_var;

    function __construct() {
      $this->instance_var = "I am an instance var";
    }

    function print_line() {
      return "is this a return value?";
    }


  }


  class ChildClass extends RegularClass {

    function print_line() {
      return "I am a child class";
    }

    function print_from_child() {
      return parent::print_line();
    }

  };


  $x = "I am a variable from another file";
  $instance_of_regular_class = new RegularClass;
  $instance_of_child_class = new ChildClass;

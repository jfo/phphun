<?php

  abstract class AbstractClass {

    function parent_function() {
      return "I am super";
    }

    abstract function contract_function(array $arr);

  }

  class ConcreteClass extends AbstractClass {

    function contract_function(array $arr) {
      return "I am fulfilling the contract";
    }

  }


  $concrete = new ConcreteClass;


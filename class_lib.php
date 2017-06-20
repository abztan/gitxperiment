<?php
  class person {
    var $name;
    public $height;
    protected $social_insurance;
    private $pin_number;

      function __construct($initial_name) {
        $this->name = $initial_name;
      }

      function get_name() {
        return $this->name;
      }

      protected function set_name($new_name) {
          $this->name = strtoupper($new_name);
      }

      private function get_pin_number() {
        return $this->pin_number;
      }
  }

  class employee extends person {
    function __construct($employee_name) {
      $this->set_name($employee_name);
    }

    protected function set_name($new_name) {
      if ($new_name == "Mister Brightside") {
        $this->name = $new_name;
      }
      else {
        person::set_name($new_name);
      }
    }
  }
?>

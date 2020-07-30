<?php
    class animal{
        private $name;
        private $legs=2;
        private $cold_blooded= 'false';
        function __construct($name) {
            $this->name = $name;
        }
        function get_name() {
            return $this->name;
        }
        function get_legs() {
            return $this->legs;
        }
        function get_blood() {
            return $this->cold_blooded;
        }

    }
?>
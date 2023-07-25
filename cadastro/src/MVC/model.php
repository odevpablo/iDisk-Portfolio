<?php

 class Model
 {


        public  $string;

        public function __construct()
        {
            $this->string="Olá Mundo..";
        }

        public get_string()
        {
            return $this->string;
        }
 }
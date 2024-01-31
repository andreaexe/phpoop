
    <?php

    class alunno{

        private $name;
        private $surname;
        private $eta;
        
        function set_name($name) {
            $this->name = $name;
        }

        function get_name() {
            return $this->name;
        }

        function set_surname($surname){

            $this->username=$username;
        }

        function get_surname(){

            return $this->surname;
        }

        function get_eta(){

            return $this->eta;
        }

        function set_eta($eta){

            $this->eta=$eta;
        }

        function toString(){

            $s="name:".$this->name."surname:".$this->surname.;
            return $s;
        }
    }

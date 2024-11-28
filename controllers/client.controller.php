<?php

    class ControllerClient{

        public function create(){

            $json=array(
    
                "detail"=>"Register view"
    
            );
    
            echo json_encode($json,true);

            return;

        }


    }

?>
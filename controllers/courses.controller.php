<?php

    class ControllerCourses {
         
        public function index(){

            $json=array(
        
                "detail"=>"Courses view"
    
            );
    
            echo json_encode($json,true);

            return;



        }

        public function create(){

            $json=array(
        
                "detail"=>"Courses view create"
    
            );
    
            echo json_encode($json,true);

            return;



        }

    }

?>
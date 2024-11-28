<?php

    $arrayRoutes=explode("/",$_SERVER['REQUEST_URI']);

    // echo "<pre>"; 
    // print_r($arrayRoutes); 
    // echo "</pre>";

    
    
    if(count(array_filter($arrayRoutes)) == 1){

        /* ============================================
            CUANDO NO SE HACE NINGUNA PETICION DE API
        =============================================*/

        $json=array(

            "detail"=>"Not found"

        );

        echo json_encode($json,true);

        return;

    }else{

        /* ========================================================
            CUANDO PASAMOS SOLO UN INDICE EN EL ARRAY $arrayRutas
        ==========================================================*/

        if(count(array_filter($arrayRoutes)) == 2){

        /* ========================================================
            CUANDO SE HACE PETICIONES DESDE CURSOS 
        ==========================================================*/
        
            if(array_filter($arrayRoutes)[2] == "courses"){

                if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == "POST" ){

                    $courses=new ControllerCourses();
                    $courses->create();

                }

                else if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == "GET"){

                    $courses=new ControllerCourses();
                    $courses->index();

                }
                
            }

            /* ========================================================
                CUANDO SE HACE PETICIONES DESDE REGISTRO 
            ==========================================================*/
            if(array_filter($arrayRoutes)[2] == "register"){
                
                if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == "GET" ){
                    
                    $clients=new ControllerClient();
                    $clients->create();

                }

            }else{

                if( array_filter($arrayRoutes)[2] == "cursos" &&  is_numeric(array_filter($arrayRoutes)[3])){

                    if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == "GET" ){
                    
                        $clients=new ControllerClient();
                        $clients->create();
    
                    }

                }

            }
            

        }
        

    }


?>
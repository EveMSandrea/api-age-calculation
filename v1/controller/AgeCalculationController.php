
    <?php
    require_once '../service/personUsesCases.php';
    require_once '../model/response.php';

      header("content-Type: application/json");
      
      $method = $_SERVER['REQUEST_METHOD'] ;
      $data = json_decode(file_get_contents('php://input'));
      $_response = new response;
    if($data!= null){        
        switch($method){        
            case 'POST':            
                $age= processAgeCalculation($data->birth_date);               
                buildResponseBody($age, $_response);                 
                break;          
            default:
                $_response->error_405();
                break;
        }
    }else {
        $_response->error_400();
    }
    

    function buildResponseBody($age, $_response){        
        $response =$age >0 ? $_response->success_200($age): $_response->error_400();
        echo json_encode(array( $response));
    }

    ?>

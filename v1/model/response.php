<?php 

class Response{
    public  $response = [
        'status' => "",
        "result" => array()
    ];

    public  function success_200($msg){
        $this->response['status'] = "success";
        $this->response['result'] = array(
            "id" => "200",
            "msg" => $msg 
        );
        http_response_code(200);
        return $this->response;
    }

    public  function error_400($msg = "invalid date request"){
        $this->response['status'] = "fail";
        $this->response['result'] = array(
            "id" => "400",
            "msg" => $msg
        );
        http_response_code(400);
        return $this->response;
    }

    public  function error_405($msg = "method do not allow"){
        $this->response['status'] = "fail";
        $this->response['result'] = array(
            "id" => "405",
            "msg" => $msg
        );
        return $this->response;
    }
}
<?php
require_once("SimpleRest.php");
require_once("Mobile.php");


class MobileRestHandler extends SimpleRest {

    function getAllMobiles(){ 
        $mobile = new Mobile();
        $rawData = $mobile->getAllMobile();
       
        if(empty($rawData)){
            $statusCode = 404;
            $rawData = array('error' => 'No Mobile Found!');
        }else{
            $statusCode = 200;
        }
        
        $requestContentType = 'application/json'; //$_POST['HTTP_ACCEPT'];
        $this->setHttpHeaders($requestContentType,$statusCode);

        $result["output"] = $rawData; 
        if(strpos($requestContentType,'application/json') !== false){
            $response = $this->encodeJson($result);
            echo $response;
            
        }else{
            $response = $this->encodeJson("ERROR");
            echo $response;
        }
    }

    public function encodeJson($responseData){
        $jsonResponse = json_encode($responseData);
        return $jsonResponse;

    }
}
?>
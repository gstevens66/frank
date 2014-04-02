<?php

class TestController {
  
  /**
   * $req is the current HTTP request object.
    *$res is the current response object.
   */
   
   //Get the HTTP test request/response objects
   
  function getTestJsonResponse($req, $res) {
    $res->add(json_encode($req));
    $res->send(200, 'json');
  }
  
  //Set the test parameter in the response object
  function getQueryVarTestJsonResponse($req, $res) {
    $response = $req;
    $response->test_param = $req->get_var('test_param');
    $res->add(json_encode($response));
    $res->send(200, 'json');
  }
	
}

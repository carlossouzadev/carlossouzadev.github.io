<?php
$response = array(
          "outputSpeech" => array(
              "type" => "PlainText",
              "text" => "Hello World"
          )
      );

      $data = array(
              "version" => "0.1",
              "sessionAttributes" => array(
                  "countActionList" => array(
                      "Read" => true,
                      "category" => true
                  )
              ) ,
              "response" => "Olá mundo",
              "shouldEndSession" => false
      );
      echo json_encode($data);
      die();

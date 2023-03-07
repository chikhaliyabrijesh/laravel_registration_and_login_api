<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller as Controller;
use Illuminate\Http\Request;

class BaseController extends Controller
{
  
      /**

     * return success response.

     *

     * @return \Illuminate\Http\Response

     */


    //create a method to send response and get response in postmane using passport API 

    public function sendResponse($result, $message)
    {

        $response = [

            'success' => true,

            'data'    => $result,

            'message' => $message,

        ];
        return response()->json($response, 200);  // 200 its meanse ok get success response

        
    }

    /**

     * return error response.

     *

     * @return \Illuminate\Http\Response

     */


      public function sendError($error, $errorMessages = [], $code = 404)
      {

        $response = [

            'success' => false,

            'message' => $error,

        ];

        if(!empty($errorMessages)){

            $response['data'] = $errorMessages;

        }

        return response()->json($response, $code);



      }

}

<?php

namespace App\Response;



use \Exception;

use App\Response\Response;


class Factory

{
    /**

     * @param Any $data

     * @return Array

     */

    public static function success($data)

    { 
        header('Content-Type: application/json');

        echo  json_encode([

            'STATUS'  => "SUCCESS",

            'RESPONSE'    => $data,

            'ERRORS'  => [],

            'NOTICES'  => []

            ],JSON_PRETTY_PRINT);

    }



    /**

     * @param Error Code

     * @return Array

     */

     public static function errorCode($code=101)

    {   
        header('Content-Type: application/json');
        $CI = &get_instance();
       
        echo  json_encode([

            'STATUS'  => 'FAILED',

            'RESPONSE'  => [],

            'ERRORS'  => [

               $code => $CI->config->item('errors')[$code] 

            ],

            'NOTICES'  => []

        ],JSON_PRETTY_PRINT);

    }



 

}


<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Validation\ValidationException;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\HttpException; 
//use Symfony\Component\HttpKernel\Exception\ErrorException;
use InvalidArgumentException; 
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Auth;
use Response;
use Session;
use Redirect;
use URL;
use ErrorException;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        AuthorizationException::class,
        HttpException::class,
        ModelNotFoundException::class,
        ValidationException::class,
        NotFoundHttpException::class,
        MethodNotAllowedHttpException::class
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $e
     * @return void
     */
    public function report(Exception $e)
    {
        parent::report($e);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $e
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $e)
    {    
       //$referrer = $request->headers->get('referer'); 
       $path_info_url = $request->getpathInfo();
       $api_url='';
       $web_url ='';
        if (strpos($path_info_url, 'api/v1') !== false) {
            $api_url = $path_info_url;
        }else{
           $web_url = $path_info_url;
        } 

        if($e instanceof InvalidArgumentException)
        {
            if($api_url)
            {
                echo json_encode(
                    [ "status"=>1,
                      "code"=>200,
                      "message"=>"Route Not defind" ,
                      "data" => "" 
                    ]
                );
            }else{
                echo "This Route Not define";
            } 
            exit(); 
        }    
        if ($e instanceof ModelNotFoundException) {
            $e = new NotFoundHttpException($e->getMessage(), $e);
        }
        if($e instanceof NotFoundHttpException)
        {   
            if($api_url)
            {
                echo json_encode(
                    [ "status"=>1,
                      "code"=>200,
                      "message"=>"Request URL not available" ,
                      "data" => "" 
                    ]
                );
            }else{
                $url =  URL::previous().'?error=InvalidURL'; 
                echo "Page Not found";
                return Redirect::to($url);
            } 
            exit();
        }
        if($e instanceof MethodNotAllowedHttpException){
            
            if($api_url)
            {
                echo json_encode(
                    [ "status"=>1,
                      "code"=>200,
                      "message"=>"Request method not found!" ,
                      "data" => "" 
                    ]
                );
            }else{
                echo "Method Not Allowed";
               // return Redirect::to(URL::previous('test'));
            } 
            exit();
           
        } 
        if($e instanceof ErrorException){
          
           if($api_url)
            {
                echo json_encode(
                    [ "status"=>1,
                      "code"=>200,
                      "message"=>[
                                    'error_message'=>$e->getmessage(),
                                    'file_path'=>$e->getfile(),
                                    'line_number'=>$e->getline()],    
                      "data" => "" 
                    ]
                );
            }else{
                $error =  [
                        'Error message'=>$e->getmessage(),
                        'File path'=>$e->getfile(),
                        'Line number'=>$e->getline()
                     ];
                
                echo "Opps..We found Error! Pease fix it.<ol>";    
                foreach ($error as $key => $value) {
                        echo "<li><b>$key =></b>".$value.'</li>';
                      
                    }
                echo "</ol>";    
            } 
            exit();

        }


        return parent::render($request, $e);
    }
}

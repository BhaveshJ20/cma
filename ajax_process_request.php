<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require_once("db_conf.php");

require_once(__DIR__ . '/vendor/autoload.php');

$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', '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');

$apiInstance = new SendinBlue\Client\Api\SMTPApi(    
    new GuzzleHttp\Client(),
    $config
);

$sendSmtpEmailUser = new \SendinBlue\Client\Model\SendSmtpEmail();
$sendSmtpEmailAdmin = new \SendinBlue\Client\Model\SendSmtpEmail();

$sendMailUsers = array(array('email'=>'hello@themavenacademy.one', 'name'=>'Maven Academy'));

if(!empty($_POST)){
    
    extract($_POST);
    
    if($type == "contact"){
        $sendSmtpEmailUser['to'] = array(array('email'=>$email, 'name'=>$first_name." ".$last_name));
        $sendSmtpEmailUser['templateId'] = 1;        
        $sendSmtpEmailUser['headers'] = array('X-Mailin-custom'=>'custom_header_1:custom_value_1|custom_header_2:custom_value_2');
        
        $sendSmtpEmailAdmin['to'] = $sendMailUsers;
        $sendSmtpEmailAdmin['templateId'] = 6;
        $sendSmtpEmailAdmin['params'] = array('fname'=>$first_name, 'lname'=>$last_name, 'emial'=>$email, 'cnumber'=>$contact_no, 'query'=>$query);
        $sendSmtpEmailAdmin['headers'] = array('X-Mailin-custom'=>'custom_header_1:custom_value_1|custom_header_2:custom_value_2');

        try {
            $result = $apiInstance->sendTransacEmail($sendSmtpEmailUser);
            $resultAdmin = $apiInstance->sendTransacEmail($sendSmtpEmailAdmin);
            //print_r($result);
            $msg = "success";
        } catch (Exception $e) {
            $msg = 'Exception when calling SMTPApi->sendTransacEmail: '. $e->getMessage(). PHP_EOL;
        }
        
        $api_response = $result;
        $id_address = $_SERVER['REMOTE_ADDR'];
        $device_info = $_SERVER['HTTP_USER_AGENT'];
        $utm_campaign = isset($_SESSION['utm_campaign'])?$_SESSION['utm_campaign']:"";
        $utm_medium = isset($_SESSION['utm_medium'])?$_SESSION['utm_medium']:"";
        $utm_source = isset($_SESSION['utm_source'])?$_SESSION['utm_source']:"";
        $utm_content = isset($_SESSION['utm_content'])?$_SESSION['utm_content']:"";
        $gclid = isset($_SESSION['gclid'])?$_SESSION['gclid']:"";
        $utm_term = isset($_SESSION['utm_term'])?$_SESSION['utm_term']:"";
        
        $contact_query = "
              INSERT INTO contact_form_submits 
               (first_name, last_name, email, contact_no, query, api_response, device_info, utm_campaign, utm_medium, utm_source, utm_content, gclid, utm_term, id_address, submit_time) 
               VALUES(:first_name, :last_name, :email, :contact_no, :query, :api_response, :device_info, :utm_campaign, :utm_medium, :utm_source, :utm_content, :gclid, :utm_term, :id_address, now());
              ";
              
              $contact_statement = $connect->prepare($contact_query);
              
              try {
              $contact_statement->execute(
                        array(
                         ':first_name'   => $first_name,
                         ':last_name'   => $last_name,
                         ':email'   => $email,
                         ':contact_no'   => $contact_no,                         
                         ':query'   => $query,                         
                         ':api_response'   => $api_response,
                         ':device_info'   => $device_info,
                         ':utm_campaign'   => $utm_campaign,
                         ':utm_medium'   => $utm_medium,
                         ':utm_source'   => $utm_source,
                         ':utm_content'   => $utm_content,
                         ':gclid'   => $gclid,
                         ':utm_term'   => $utm_term,                         
                         ':id_address'   => $id_address
                         )
                    );
                    
                    
            } catch (PDOException $e) {
                if ($e->getCode() == 1062) {
                    echo $e;
                } else {
                    echo $e;
                }
                exit;
            }
        
                
    }else if($type == "apply"){
        
        $sendSmtpEmailUser['to'] = array(array('email'=>$email, 'name'=>$first_name." ".$last_name));
        $sendSmtpEmailUser['templateId'] = 1;
        $sendSmtpEmailUser['headers'] = array('X-Mailin-custom'=>'custom_header_1:custom_value_1|custom_header_2:custom_value_2');
        
        $sendSmtpEmailAdmin['to'] = $sendMailUsers;
        $sendSmtpEmailAdmin['templateId'] = 7;
        $sendSmtpEmailAdmin['params'] = array('fname'=>$first_name, 'lname'=>$last_name, 'emial'=>$email, 'cnumber'=>$contact_no, 'campus'=>$campus, 'course'=>$course, 'joiningdate'=>$joiningdate, 'tandc'=>$tandc, 'update'=>$update);
        $sendSmtpEmailAdmin['headers'] = array('X-Mailin-custom'=>'custom_header_1:custom_value_1|custom_header_2:custom_value_2');

        try {
            $result = "";
            $result = $apiInstance->sendTransacEmail($sendSmtpEmailUser);
            $resultAdmin = $apiInstance->sendTransacEmail($sendSmtpEmailAdmin);
            //print_r($result);
            $msg = "success";
        } catch (Exception $e) {
            $msg = 'Exception when calling SMTPApi->sendTransacEmail: '. $e->getMessage(). PHP_EOL;
        }
        
        $api_response = $result;
        $id_address = $_SERVER['REMOTE_ADDR'];
        $device_info = $_SERVER['HTTP_USER_AGENT'];
        $utm_campaign = isset($_SESSION['utm_campaign'])?$_SESSION['utm_campaign']:"";
        $utm_medium = isset($_SESSION['utm_medium'])?$_SESSION['utm_medium']:"";
        $utm_source = isset($_SESSION['utm_source'])?$_SESSION['utm_source']:"";
        $utm_content = isset($_SESSION['utm_content'])?$_SESSION['utm_content']:"";
        $gclid = isset($_SESSION['gclid'])?$_SESSION['gclid']:"";
        $utm_term = isset($_SESSION['utm_term'])?$_SESSION['utm_term']:"";
        
        $contact_query = "
              INSERT INTO apply_form_submits 
               (first_name, last_name, email, contact_no, campus, course, joiningdate, tandc, agreeupdate, api_response, device_info, utm_campaign, utm_medium, utm_source, utm_content, gclid, utm_term, id_address, submit_time) 
               VALUES(:first_name, :last_name, :email, :contact_no, :campus, :course, :joiningdate, :tandc, :agreeupdate, :api_response, :device_info, :utm_campaign, :utm_medium, :utm_source, :utm_content, :gclid, :utm_term, :id_address, now());
              ";
              
              $contact_statement = $connect->prepare($contact_query);
              
              try {
              $contact_statement->execute(
                        array(
                         ':first_name'   => $first_name,
                         ':last_name'   => $last_name,
                         ':email'   => $email,
                         ':contact_no'   => $contact_no,                         
                         ':campus'   => $campus,                         
                         ':course'   => $course,                         
                         ':joiningdate'   => $joiningdate,                         
                         ':tandc'   => $tandc,                         
                         ':agreeupdate'   => $update,                         
                         ':api_response'   => $api_response,
                         ':device_info'   => $device_info,
                         ':utm_campaign'   => $utm_campaign,
                         ':utm_medium'   => $utm_medium,
                         ':utm_source'   => $utm_source,
                         ':utm_content'   => $utm_content,
                         ':gclid'   => $gclid,
                         ':utm_term'   => $utm_term,                         
                         ':id_address'   => $id_address
                         )
                    );
                    
                    
            } catch (PDOException $e) {
                if ($e->getCode() == 1062) {
                    echo $e;
                } else {
                    echo $e;
                }
                exit;
            }
    }else if($type == "scholarship"){
        $sendSmtpEmailUser['to'] = array(array('email'=>$email, 'name'=>$first_name." ".$last_name));
        $sendSmtpEmailUser['templateId'] = 1;        
        $sendSmtpEmailUser['headers'] = array('X-Mailin-custom'=>'custom_header_1:custom_value_1|custom_header_2:custom_value_2');
        
        $sendSmtpEmailAdmin['to'] = $sendMailUsers;
        $sendSmtpEmailAdmin['templateId'] = 8;
        $sendSmtpEmailAdmin['params'] = array('fname'=>$first_name, 'lname'=>$last_name, 'emial'=>$email, 'tnumber'=>$tnumber, 'query'=>$query);
        $sendSmtpEmailAdmin['headers'] = array('X-Mailin-custom'=>'custom_header_1:custom_value_1|custom_header_2:custom_value_2');

        try {
            $result = $apiInstance->sendTransacEmail($sendSmtpEmailUser);
            $resultAdmin = $apiInstance->sendTransacEmail($sendSmtpEmailAdmin);
            //print_r($result);
            $msg = "success";
        } catch (Exception $e) {
            $msg = 'Exception when calling SMTPApi->sendTransacEmail: '. $e->getMessage(). PHP_EOL;
        }
        
        $api_response = $result;
        $id_address = $_SERVER['REMOTE_ADDR'];
        $device_info = $_SERVER['HTTP_USER_AGENT'];
        $utm_campaign = isset($_SESSION['utm_campaign'])?$_SESSION['utm_campaign']:"";
        $utm_medium = isset($_SESSION['utm_medium'])?$_SESSION['utm_medium']:"";
        $utm_source = isset($_SESSION['utm_source'])?$_SESSION['utm_source']:"";
        $utm_content = isset($_SESSION['utm_content'])?$_SESSION['utm_content']:"";
        $gclid = isset($_SESSION['gclid'])?$_SESSION['gclid']:"";
        $utm_term = isset($_SESSION['utm_term'])?$_SESSION['utm_term']:"";
        
        $contact_query = "
              INSERT INTO scholarship_form_submits 
               (first_name, last_name, email, tnumber, query, api_response, device_info, utm_campaign, utm_medium, utm_source, utm_content, gclid, utm_term, id_address, submit_time) 
               VALUES(:first_name, :last_name, :email, :tnumber, :query, :api_response, :device_info, :utm_campaign, :utm_medium, :utm_source, :utm_content, :gclid, :utm_term, :id_address, now());
              ";
              
              $contact_statement = $connect->prepare($contact_query);
              
              try {
              $contact_statement->execute(
                        array(
                         ':first_name'   => $first_name,
                         ':last_name'   => $last_name,
                         ':email'   => $email,
                         ':tnumber'   => $tnumber,                         
                         ':query'   => $query,                         
                         ':api_response'   => $api_response,
                         ':device_info'   => $device_info,
                         ':utm_campaign'   => $utm_campaign,
                         ':utm_medium'   => $utm_medium,
                         ':utm_source'   => $utm_source,
                         ':utm_content'   => $utm_content,
                         ':gclid'   => $gclid,
                         ':utm_term'   => $utm_term,                         
                         ':id_address'   => $id_address
                         )
                    );
                    
                    
            } catch (PDOException $e) {
                if ($e->getCode() == 1062) {
                    echo $e;
                } else {
                    echo $e;
                }
                exit;
            }
        
                
    }else if($type == "course"){
                
        $sendSmtpEmailAdmin['to'] = $sendMailUsers;
		//$sendSmtpEmailAdmin['to'] = array(array('email'=>'tejas@maven.one', 'name'=>'Tejas'),array('email'=>'dhaval@maven.one', 'name'=>'Dhaval'));
        $sendSmtpEmailAdmin['templateId'] = 9;
        $sendSmtpEmailAdmin['params'] = array('emial'=>$email,'courseName'=>$course_name);
        $sendSmtpEmailAdmin['headers'] = array('X-Mailin-custom'=>'custom_header_1:custom_value_1|custom_header_2:custom_value_2');
		//print_r($sendSmtpEmailAdmin['params']);die;

        try {
            $resultAdmin = $apiInstance->sendTransacEmail($sendSmtpEmailAdmin);
            //print_r($result);
            $msg = "success";
        } catch (Exception $e) {
            $msg = 'Exception when calling SMTPApi->sendTransacEmail: '. $e->getMessage(). PHP_EOL;
        }
        
        $api_response = $resultAdmin;
        $id_address = $_SERVER['REMOTE_ADDR'];
        $device_info = $_SERVER['HTTP_USER_AGENT'];
        $utm_campaign = isset($_SESSION['utm_campaign'])?$_SESSION['utm_campaign']:"";
        $utm_medium = isset($_SESSION['utm_medium'])?$_SESSION['utm_medium']:"";
        $utm_source = isset($_SESSION['utm_source'])?$_SESSION['utm_source']:"";
        $utm_content = isset($_SESSION['utm_content'])?$_SESSION['utm_content']:"";
        $gclid = isset($_SESSION['gclid'])?$_SESSION['gclid']:"";
        $utm_term = isset($_SESSION['utm_term'])?$_SESSION['utm_term']:"";
        
        $contact_query = "
              INSERT INTO course_form_submits 
               (email, api_response, device_info, utm_campaign, utm_medium, utm_source, utm_content, gclid, utm_term, id_address, submit_time) 
               VALUES(:email, :api_response, :device_info, :utm_campaign, :utm_medium, :utm_source, :utm_content, :gclid, :utm_term, :id_address, now());
              ";
              
              $contact_statement = $connect->prepare($contact_query);
              
              try {
              $contact_statement->execute(
                        array(
                         ':email'   => $email,                                            
                         ':api_response'   => $api_response,
                         ':device_info'   => $device_info,
                         ':utm_campaign'   => $utm_campaign,
                         ':utm_medium'   => $utm_medium,
                         ':utm_source'   => $utm_source,
                         ':utm_content'   => $utm_content,
                         ':gclid'   => $gclid,
                         ':utm_term'   => $utm_term,                         
                         ':id_address'   => $id_address
                         )
                    );
                  
                    
            } catch (PDOException $e) {
                if ($e->getCode() == 1062) {
                    echo $e;
                } else {
                    echo $e;
                }
                exit;
            }  
        
                
    }
}else{    
    $msg = '';    
}
echo $msg;
?>
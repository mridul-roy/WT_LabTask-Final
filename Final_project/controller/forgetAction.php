<?php 
            

            $flag=false;
            $mobileno="";
            $password="";
            $userErr="";
            $passErr="";
            $recoverMsg="";
            $errorMsg="";

            if($_SERVER['REQUEST_METHOD']=='POST')
            {

                if(empty($_POST['mobileno']))
                {
                    $userErr="Empty Mobileno";
                    $flag=true;
                    
                }


                if(!$flag)
                {
                    $username=test_input($_POST['username']);
                    $password=test_input($_POST['password']);;
                    $data = file_get_contents("../model/regidata.json");
                    $temp = json_decode($data);
                    if(!empty($temp))
                    {
                            foreach($temp as $tempData)
                        {
                            
                            if($tempData->username==$username)
                            {
        
                                $tempData->password=$password;
                                $flag=true;
                                break;
                            }
                        }
        
                    }
        
                    $data_en=json_encode($temp,JSON_PRETTY_PRINT);
                    file_put_contents("../model/regidata.json", $data_en);

                    if($flag)
                    {
                        $recoverMsg="Password Recovered";

                    }
                    else
                    {
                        $errorMsg="Invalid mobileno";
                        
                    }

                }

            }


            function test_input($data)
            {
            $data=trim($data);
            $data=stripcslashes($data);
            $data=htmlspecialchars($data);
            return $data;
            }

?>

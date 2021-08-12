<?php 
    $file_name = "visitor_counter.json";

    function fileExists($file_name){
        if (!file_exists($file_name)){
            return false;
        }
        return true;
    }

    function readJson($file_name){
        if(!fileExists($file_name)){
            $default = array("count"=>0);
            return json_encode($default);
        }
        else {
            return file_get_contents($file_name);
        }
    }

    function visitorCount(&$countVar){
        if(!isset($_SESSION['known'])){
            $_SESSION['known']="TRUE";
            $countVar++;
            return true;
        }
            return false;
    }

    function writeJson($file_name, $new_content){
        if(file_put_contents($file_name, json_encode($new_content))){
            return true;
        }
        else   
            return false;
    }

    function main($file_name){
        //read
        $file_data = json_decode(readJson($file_name), true);
        //count
        if(visitorCount($file_data["count"])){
            writeJson($file_name, $file_data);
        }
        output($file_data["count"]);
    }

    function output($number){
        echo "
        <div class='countVisitor d-flex flex-column justify-content-center'>
            <span class='counter text-center h-75'>" . $number  . "</span>
            <span class='text text-center h-25'>Besucher</span>
        </div>
        ";
    }

    main($file_name);
    
?>
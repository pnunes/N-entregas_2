<?php
$api_version = 1.0;
$start = microtime(true);
$dir = "./img_hawb/";
if( isset($_FILES['image']['name']) ) {

    //$file_name = time().basename($_FILES['image']['name']);
	$file_name = basename($_FILES['image']['name']);
    $extension = strtolower(pathinfo($file_name,PATHINFO_EXTENSION));

    if ($extension == 'png' || $extension == 'jpg' || $extension == 'jpeg') {
            if($_FILES["image"]["size"] < 4000001){
                $file = $dir.$file_name;
             
                if( move_uploaded_file($_FILES['image']['tmp_name'], $file) ) {
                     $arr = array(
                          'status'=>1, 
                          'message'=>"Upload bem Sucedido!",
                          'file_name'=>$file_name
                     );
                } else {
                    $arr = array(
                         'status'=>0, 
                         'error'=>" Algo deu errado, tente novamente !",
                         'file_name'=>$file_name
                    );
                }
            } else {
                $arr = array(
                     'status'=>0,
                     'error'=>"O tamanho do arquivo excedeu 4 MB"
                );
            }  
        } else {
            $arr = array(
                  'status'=>0,
                  'error'=>"São aceitos somente os formatos png, jpg, jpeg"
            );
        }
} else {
    $arr = array(
           'status'=>1, 
           'message'=>"Please try Post Method"
    );
}
$arr[ 'api' ] = $api_version;
$arr[ 'time' ] = ( microtime(true) - $start );
print_r( json_encode( $arr ) );
?>

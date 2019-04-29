<?php

if (isset($_POST['Refim'])  ) {
    $var = $_POST['Refim'];
    $vare = $_POST['Idpim'];
   // $vare = $_POST['nomee'];
    //echo $vare;echo $vare;echo $vare;echo $vare;echo $vare;echo $vare;echo $vare;echo $vare;echo $vare;
    //echo 'fahdeeeeeeeeeeeeeeeeeeeeeeeeeee'.$var.$vare ;
    /*if (!file_exists('Les Projets/Proje1/5raaaaaaa')) {
        mkdir('Les Projets/Proje1/5raaaaaaa');
    }*/
    //$var = 'test' ;
    if (!file_exists('Les Projets/'.$vare.'/'.$var)) {
        mkdir('Les Projets/'.$vare.'/'.$var);
    }
    $folder_name = $var . '/';
    if (!empty($_FILES)) {
        $temp_file = $_FILES['file']['tmp_name'];
        $location = 'Les Projets/'.$vare.'/'.$folder_name . $_FILES['file']['name'];
        move_uploaded_file($temp_file, $location);
    }
}

//$e = $_REQUEST['nome'];
//echo "fahd";
//echo $e;
//echo "fahd";
if (!empty($_POST['nome']) && !empty($_POST['nomee']) ) {
//echo  $_POST['nome'] ; echo $_POST['nomee']; echo 'fahd ';
    if (file_exists('Les Projets/'.$_POST['nomee'].'/'.$_POST['nome'])) {
        //echo  'Les Projets/'.$_POST['nomee'].'/'.$_POST['nome'] ;
    //$varr = $_POST['nome'];
        $varr = 'Les Projets/'.$_POST['nomee'].'/'.$_POST['nome'];
    //echo $varr ;
//$varr = 'test';
//echo $varr ;
    $folder_name = $varr . '/';
    //$varrrr ='../../'.$varr ;

    if (isset($_POST["name"])) {
        $filename = $folder_name . $_POST["name"];
        unlink($filename);
    }
//echo '<input type="text" value="faaaaaaaaa">';
    $result = array();
    //if ($varr != 'Les Projets/'.$_POST['nome'].'/') {

       //$fahd = iconv("windows-1254", 'UTF-8', '#111');
        $files = scandir($varr);
       // $folder_name = urlencode($folder_name);
        //$folder_name=substr($folder_name, 0, -3);
        $output = '<div class="row">';

        if (false !== $files) {

            foreach ($files as $file) {
                if ('.' != $file && '..' != $file) {
                    $output .= '
   <div class="col-md-2">
    <img src="' .$folder_name.$file . '" class="img-thumbnail">
    <button type="button" class="btn btn-link remove_image" id="' . $file . '">Remove</button>
   </div>
   ';
                }
            }
        }
        $output .= '</div>';
        echo $output;
   // }
}}
/*
  <img src="' .$folder_name.'/'.$file . '" class="img-thumbnail">
    <button type="button" class="btn btn-link remove_image" id="' . $file . '">Remove</button>
 */
?>


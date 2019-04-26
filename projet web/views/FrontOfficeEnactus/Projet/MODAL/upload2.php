<?php

if (isset($_POST['nome']) && isset($_POST['nomee'])) {
    
    if (file_exists('../../../Back Office ENACTUS/Les Modules/gestion produit/php/views/Les Projets/'.$_POST['nomee'].'/'.$_POST['nome'])) {

    $var = '../../../Back Office ENACTUS/Les Modules/gestion produit/php/views/Les Projets/'.$_POST['nomee'].'/'.$_POST['nome'];

    $folder_name = $var .'/';

    if (isset($_POST["name"])) {
        $filename = $folder_name . $_POST["name"];
        unlink($filename);
    }

    $result = array();
//$var = 'php/views/upload';
    $files = scandir($var); //$var

    $output = '<div class="row">';
       // $folder_name = urlencode($folder_name);
       // $folder_name=substr($folder_name, 0, -3);

    if (false !== $files) {
       // echo "notfalse";
        foreach ($files as $file) {
            if ('.' != $file && '..' != $file) {
                $output .= '
                <div>
    <img src="' . $folder_name.$file .'" class="img-thumbnail" style="height:500px;width: 500px">
    </div>
   ';
        break;    }
        }
    }
    $output .= '</div>';
    echo $output;
}}

/*if (!isset($_POST['nome']))
{
    echo '<img src="' . $folder_name . $file . '" class="img-thumbnail" width="175" height="175" style="height:40px;" />';

    <img src="' .'Les Projets%23'.$folder_name.$file . '" class="img-thumbnail" style="height:50px;width: 50px"> //he

}*/

?>
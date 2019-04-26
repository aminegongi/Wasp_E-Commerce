<?php
//echo '<script> alert("fez"); </script>';
if (isset($_POST['nome']) && isset($_POST['nomee'])) {
    if (file_exists('../../../Back Office ENACTUS/Les Modules/gestion produit/php/views/Les Projets/'.$_POST['nomee'].'/'.$_POST['nome'])) {

    $var = '../../../Back Office ENACTUS/Les Modules/gestion produit/php/views/Les Projets/'.$_POST['nomee'].'/'.$_POST['nome'];

    $folder_name = $var .'/';

    if (isset($_POST["name"])) {
        $filename = $folder_name . $_POST["name"];
        unlink($filename);
    }

    $result = array();

    $files = scandir($var); //$var

    $output = '<div class="row">';


    if (false !== $files) {

        foreach ($files as $file) {
            if ('.' != $file && '..' != $file) {
                $output .= '
                <div>
    <img src="' . $folder_name.$file .'" class="img-thumbnail" style="height:80px;width: 80px">
    </div>
   ';
        break;    }
        }
    }
    $output .= '</div>';
    echo $output;
}}



?>
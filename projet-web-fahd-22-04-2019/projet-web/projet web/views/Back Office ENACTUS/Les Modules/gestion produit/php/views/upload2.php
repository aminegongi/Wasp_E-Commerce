<?php

//upload.php

/*$folder_name = 'upload/';

if(!empty($_FILES))
{
    $temp_file = $_FILES['file']['tmp_name'];
    $location = $folder_name . $_FILES['file']['name'];
    move_uploaded_file($temp_file, $location);
}
*/
if (isset($_POST['nome']) && isset($_POST['nomee'])) {
    if (file_exists('Les Projets/'.$_POST['nomee'].'/'.$_POST['nome'])) {

    $var = 'Les Projets/'.$_POST['nomee'].'/'.$_POST['nome'];
    //echo "fah";
   // echo $var;
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
    <img src="' . $folder_name . $file . '" class="img-thumbnail" style="height:50px;width: 50px">
    </div>
   ';
            }
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
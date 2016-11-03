<?php
class MB{
    function init(){
        add_theme_page('FromScratch options', 'Options du thème',
            'edit_themes', 'control.php', array('MB','displayOptions'));
    }
    function displayOptions(){
        //Ce qui va s'afficher dans la page d'administration.
    }
}//fin de la class MB.

if(class_exists("MB")){
    $inst_MB = new MB();
}
if(isset($inst_MB)) {
    add_action('admin_menu', array('MB', 'init'));
}
?>
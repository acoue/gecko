<?php
$session = $this->request->session();
if($session->check("Module")) $module=$session->read("Module");
else $module=0;
        
if($module==2) $message = "Bienvenue dans le module compétition de l'application.";
else if($module==3) $message = "Bienvenue dans le module passage de grade de l'application.";
else $message = "Bienvenue dans l'application, utilisez le menu de gauche pour les actions.";
echo $message;

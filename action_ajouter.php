<?php 

// php page to take care of the add branch form and send the data collected by mail for confirmation by user

if(isset($_POST['submit'])) {

    $Id_Client = $_POST['Id_Client'];
    $Id_install = $_POST['Id_install'];
    $active = $_POST['active'];
    $Id_branch = $_POST['Id_branch'];

    $Members_read = $_POST['Members_read'];
    $Members_write = $_POST['Members_write'];
    $Members_payment_schedules_read = $_POST['Members_payment_schedules_read'];
    $Members_products_read = $_POST['Members_products_read'];
    $Members_schedules_read = $_POST['Members_schedules_read'];
    $Members_add = $_POST['Members_add'];
    $Payment_schedules_read = $_POST['Payment_schedules_read'];
    $Payment_schedules_write = $_POST['Payment_schedules_write'];
    $Members_statistics_read = $_POST['Members_statistics_read'];
    $Payment_day_read = $_POST['Payment_day_read'];

    

    if($Members_read === "Check") {
        $Members_read_state = "actif";
    }else {
        $Members_read_state = "inactif";
        $Members_read = "Not Check";
    }

    if($Members_write === "Check") {
        $Members_write_state = "actif";
    }else {
        $Members_write_state = "inactif";
        $Members_write = "Not Check";
    }

    if($Members_payment_schedules_read === "Check") {
        $Members_payment_schedules_read_state = "actif";
    }else {
        $Members_payment_schedules_read_state = "inactif";
        $Members_payment_schedules_read = "Not Check";
    }

    if($Members_products_read === "Check") {
        $Members_products_read_state = "actif";
    }else {
        $Members_products_read_state = "inactif";
        $Members_products_read = "Not Check";
    }

    if($Members_schedules_read === "Check") {
        $Members_schedules_read_state = "actif";
    }else {
        $Members_schedules_read_state = "inactif";
        $Members_schedules_read = "Not Check";
    }

    if($Members_add === "Check") {
        $Members_add_state = "actif";
    }else {
        $Members_add_state = "inactif";
        $Members_add = "Not Check";
    }

    if($Payment_schedules_read === "Check") {
        $Payment_schedules_read_state = "actif";
    }else {
        $Payment_schedules_read_state = "inactif";
        $Payment_schedules_read = "Not Check";
    }

    if($Payment_schedules_write === "Check") {
        $Payment_schedules_write_state = "actif";
    }else {
        $Payment_schedules_write_state = "inactif";
        $Payment_schedules_write = "Not Check";
    }

    if($Members_statistics_read === "Check") {
        $Members_statistics_read_state = "actif";
    }else {
        $Members_statistics_read_state = "inactif";
        $Members_statistics_read = "Not Check";
    }

    if($Payment_day_read === "Check") {
        $Payment_day_read_state = "actif";
    }else {
        $Payment_day_read_state = "inactif";
        $Payment_day_read = "Not Check";
    }


    $dest = "flodubois1995@gmail.com";
    $objet = "Formulaire ajout salle";
    $entetes = "From: Ajout Salle ";
    $entetes .= "Content-Type: text/html; charset=utf-8\r\n";
    $message = "
      
      Bonjour,

      Vous venez d'ajouter une Salle sur votre compte utilisateur n° ".$Id_Client."

      Récapitulatif de vos informations :

        id client : ".$Id_Client."
        id installation : ".$Id_install."
        salle active ou non active : ".$active."
        id salle : ".$Id_branch."

        Lecture Membre : ".$Members_read_state."
        Ecriture Membre : ".$Members_write_state."
        Voir programmation paiement membres : ".$Members_payment_schedules_read_state."
        Voir produit membres : ".$Members_products_read_state."
        Voir programme membres : ".$Members_schedules_read_state."
        Ajouter membres : ".$Members_add_state."
        Voir programmation paiement : ".$Payment_schedules_read_state."
        Editer programmation paiement : ".$Payment_schedules_write_state."
        Voir statistiques membres : ".$Members_statistics_read_state."
        Voir jour de paiement : ".$Payment_day_read_state."

        Confirmer vous ces informations ?

        <a href='https://web-app-ecf.herokuapp.com/'><button style='border: solid rgb(43, 196, 43) 2px; color: rgb(43, 196, 43); background-color: white; border-radius: 20%;'>Confirmer</button></a>
        
    ";

    mail($dest , $objet , $message , $entetes);

    $file = fopen("TestMessage.txt","a");
    fwrite($file, $message);
    fclose($file);

    $AlertTest = "Votre ajout a bien été pris en compte veuillez valider vos informations via le mail qui vous a été envoyé, Merci !";
    echo "<script type='text/javascript'>alert('$AlertTest');window.location.href = 'https://web-app-ecf.herokuapp.com/';</script>";

    


}exit();

?>
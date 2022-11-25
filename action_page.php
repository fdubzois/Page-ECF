<?php 

// just a little php page to send user on the good client page when he click submit on reseach field on index

if(isset($_POST['submit'])) {

    if($_POST['ClientName'] === "Quentin Gaillard") {
        header("Location: https://web-app-ecf.herokuapp.com/DetailsClient00000001.html", TRUE, 301);
    } else if($_POST['ClientName'] === "Alexis Fabre") {
        header("Location: https://web-app-ecf.herokuapp.com/DetailsClient00000002.html", TRUE, 301);
    }else if($_POST['ClientName'] === "Adam Pesquet") {
        header("Location: https://web-app-ecf.herokuapp.com/DetailsClient00000003.html", TRUE, 301);
    }else if($_POST['ClientName'] === "Léandre Dupuich") {
        header("Location: https://web-app-ecf.herokuapp.com/DetailsClient00000004.html", TRUE, 301);
    }else if($_POST['ClientName'] === "Charlotte Deparrois") {
        header("Location: https://web-app-ecf.herokuapp.com/DetailsClient00000005.html", TRUE, 301);
    }else if($_POST['ClientName'] === "Agathe Perrin") {
        header("Location: https://web-app-ecf.herokuapp.com/DetailsClient00000006.html", TRUE, 301);
    }else if($_POST['ClientID'] === "00000001") {
        header("Location: https://web-app-ecf.herokuapp.com/DetailsClient00000001.html", TRUE, 301);
    }else if($_POST['ClientID'] === "00000002") {
        header("Location: https://web-app-ecf.herokuapp.com/DetailsClient00000002.html", TRUE, 301);
    }else if($_POST['ClientID'] === "00000003") {
        header("Location: https://web-app-ecf.herokuapp.com/DetailsClient00000003.html", TRUE, 301);
    }else if($_POST['ClientID'] === "00000004") {
        header("Location: https://web-app-ecf.herokuapp.com/DetailsClient00000004.html", TRUE, 301);
    }else if($_POST['ClientID'] === "00000005") {
        header("Location: https://web-app-ecf.herokuapp.com/DetailsClient00000005.html", TRUE, 301);
    }else if($_POST['ClientID'] === "00000006") {
        header("Location: https://web-app-ecf.herokuapp.com/DetailsClient00000006.html", TRUE, 301);
    }else {
        header("Location: https://web-app-ecf.herokuapp.com/index.html", TRUE, 301);
    }

}exit();

?>
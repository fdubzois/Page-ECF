<?php 

// just a little php page to send user on the good client page when he click submit on reseach field on index

if(isset($_POST['submit'])) {

    if($_POST['ClientName'] === "Quentin Gaillard") {
        header("Location: http://localhost/TestSiteEcf/DetailsClient00000001.html", TRUE, 301);
    } else if($_POST['ClientName'] === "Alexis Fabre") {
        header("Location: http://localhost/TestSiteEcf/DetailsClient00000002.html", TRUE, 301);
    }else if($_POST['ClientName'] === "Adam Pesquet") {
        header("Location: http://localhost/TestSiteEcf/DetailsClient00000003.html", TRUE, 301);
    }else if($_POST['ClientName'] === "Léandre Dupuich") {
        header("Location: http://localhost/TestSiteEcf/DetailsClient00000004.html", TRUE, 301);
    }else if($_POST['ClientName'] === "Charlotte Deparrois") {
        header("Location: http://localhost/TestSiteEcf/DetailsClient00000005.html", TRUE, 301);
    }else if($_POST['ClientName'] === "Agathe Perrin") {
        header("Location: http://localhost/TestSiteEcf/DetailsClient00000006.html", TRUE, 301);
    }else if($_POST['ClientID'] === "00000001") {
        header("Location: http://localhost/TestSiteEcf/DetailsClient00000001.html", TRUE, 301);
    }else if($_POST['ClientID'] === "00000002") {
        header("Location: http://localhost/TestSiteEcf/DetailsClient00000002.html", TRUE, 301);
    }else if($_POST['ClientID'] === "00000003") {
        header("Location: http://localhost/TestSiteEcf/DetailsClient00000003.html", TRUE, 301);
    }else if($_POST['ClientID'] === "00000004") {
        header("Location: http://localhost/TestSiteEcf/DetailsClient00000004.html", TRUE, 301);
    }else if($_POST['ClientID'] === "00000005") {
        header("Location: http://localhost/TestSiteEcf/DetailsClient00000005.html", TRUE, 301);
    }else if($_POST['ClientID'] === "00000006") {
        header("Location: http://localhost/TestSiteEcf/DetailsClient00000006.html", TRUE, 301);
    }else {
        header("Location: http://localhost/TestSiteEcf/index.html", TRUE, 301);
    }

}exit();

?>
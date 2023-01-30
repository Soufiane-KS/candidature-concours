<?php include "connect.php" ?>
<?php 

$nom = $_POST["nom"];
$pnom = $_POST["pnom"];
$daten = $_POST["daten"];
$ville = $_POST["ville"];
$cin = $_POST["cin"];
$cne = $_POST["cne"];
$email = $_POST["email"];
$num = $_POST["num"];
$situ = $_POST["situ"];
$noten = $_POST["noten"];
$noter = $_POST["noter"];
$serie_bac = $_POST["serie_bac"];
$mention = $_POST["mention"];
$formation = $_POST["formation"];
$logement = $_POST["logement"];

$sql1 = "INSERT INTO infoperso(Nom,Prenom,`Date de naissance`,Ville,CIN,CNE,Email,Tel,situation_familiale)
        VALUES(?,?,?,?,?,?,?,?,?)";
$sql2 = "INSERT INTO academic(serie_bac,note_nationale,note_regional,mention)
        VALUES(?,?,?,?)";
$sql3 = "INSERT INTO vaux(formation,logement)
        VALUES(?,?)";
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt, $sql1))
{
    echo "error";
}

mysqli_stmt_bind_param($stmt,"sssssssis",$nom,$pnom,$daten,$ville,$cin,$cne,$email,$num,$situ);
mysqli_stmt_execute(($stmt));

if (!mysqli_stmt_prepare($stmt, $sql2))
{
    echo "error";
}

mysqli_stmt_bind_param($stmt,"ssss",$serie_bac,$noten,$noter,$mention);

mysqli_stmt_execute(($stmt));

if(!mysqli_stmt_prepare($stmt, $sql3))
{
    echo "error";
}
mysqli_stmt_bind_param($stmt,"ss",$formation,$logement);

mysqli_execute($stmt);

echo "record saved .";

?>
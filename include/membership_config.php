<?PHP
require_once("./include/membership.php");

$wnm = new Membership();
$wnm->InitDB(/*database name*/'walchandnetwork','users');
$wnm->setWebSiteName('Walchand Network');
$wnm->setSalt('2000$1013889036$0yhs2npQquj7051cmgoEmT4CgvqBz1b0xVxSVvOIkT1');

?>
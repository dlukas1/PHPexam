<?php
//"Loo veebilehekülg, mis kuvab kasutajale, mitmendat korda kasutaja lehekülge külastab."
// set the variable to 0, it'll matter only if the cookie for the variable is not set
$countVisit = 0;
// if cookie is set for the variable, it'll go to $countVisit and get added by 1; otherwise it'll show 0 for tha variable
if(isset($_COOKIE['countVisit'])){
$countVisit = $_COOKIE['countVisit'];
$countVisit ++;
}
// if the last visist cookie is set, it'll pass the value to $lastVisit, and it'll be displayed below;
if(isset($_COOKIE['lastVisit'])){
$lastVisit = $_COOKIE['lastVisit'];
}
// set cookie for countVisit
setcookie('countVisit', $countVisit,  time()+3600);
// set cookie for last visit
setcookie('lastVisit', date("d-m-Y H:i:s"),  time()+3600);
// show the respected values
// is the variable is not set, say 'welcome', otherwise show the info about visit number and last visit date
if($countVisit == 0){
echo "Tere tulemast esimest korra";
} else {
echo "See on teie visiit number ".$countVisit;
echo '<br>';
echo "Viimast korra olite siin ".$lastVisit;
}

?>
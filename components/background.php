<?php

$red1    = '#FF5E3A, #FF2A68';
$orange1 = '#FF9500, #FF5E3A';
$yellow1 = '#FFDB4C, #FFCD02';
$green1  = '#87FC70, #0BD318';
$blue1   = '#52EDC7, #5AC8FB';
$blue2   = '#1AD6FD, #1D62F0';
$purple1 = '#C644FC, #5856D6';
$purple2 = '#EF4DB6, #C643FC';
//$black1  = '#4A4A4A, #2B2B2B';
//$grey1 	 = '#DBDDDE, #898C90';
$green2  = '#5AD427, #A4E786';
$purple3 = '#C86EDF, #E4B7F0';
$red2 	 = '#FB2B69, #FF5B37';
//$grey2 	 = '#F7F7F7, #D7D7D7';
$blue3 	 = '#1D77EF, #81F3FD';
//$grey3 	 = '#D6CEC3, #E4DDCA';
$blue4 	 = '#55EFCB, #5BCAFF';

$bg = array($red1, $orange1, $yellow1, $green1, $blue1, $blue2, $purple1, $purple2, $green2, $purple3, $red2, $blue3, $blue4);

$i = rand(0, count($bg)-1);
$selected_gradient = "$bg[$i]";
?>

<style>
body {
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-image: linear-gradient(<?php echo $selected_gradient; ?>);
}
</style>
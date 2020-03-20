<?php
# Accurately and reliably calculates age to the year.

$date = "1995-9-9";
function ageCalc($date) {
    $now = date_create(date("Y-n-j", time()));
    $birthday = date_create($date);
    $difference = date_diff($now, $birthday, true);
    $age = $difference->format("%y years");
    echo $age;
}
echo ageCalc("$date");
# When using strtotime() (sting to time) function:
# Use format "1/1/1970" for american interpretation.
# Use format "1-1-1970" for european interpretation.
# "01/01/1970" would be interpreted wrong, so use use single digits for
#   single digit dates. Don't forget the double quotes!!!
# eg. $birthday = strtotime("09/09/1995");
?>
<?php
function writeCSV($days)
{
    $file = fopen("svs.csv", "w");
    $fields = "WeekDay Year,WeekDay Month,WeekDay Day,WeekDay Date,WeekDay Anniversary,Saturday Year,Saturday Month,Saturday Day,Saturday Date,Saturday Anniversary,Sunday Year,Sunday Month,Sunday Day,Sunday Date,Sunday Anniversary\n";
    fwrite($file, $fields);
    foreach ($days as $day)
    {
        $text = $day . "\n";
        fwrite($file, $text);
    }
    fclose($file);
}
?>
<form action="functions.php" method="post">
    <h1>Diary CSV Generator</h1>
    <label for="start_day">Start Day:</label>
    <input name="start_day" type="text">
    <label for="year">Year:</label>
    <input name="year" type="text">
    <input type="submit" value="Generate CSV" id="submit">
</form>
<?php
/*require "classes.php";
$months = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
$month_names = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
$days = [1=>"Monday", 2=>"Tuesday", 3=>"Wednesday", 4=>"Thursday", 5=>"Friday", 6=>"Saturday", 0=>"Sunday"];
$current_year = 2017;
//#############MONDAY = 0#########
$day_offset = 0;
//#############MONDAY = 0#########
$year = new Year();
foreach ($month_names as $month_name)
{
    $name = $month_name;
    $month_name = new Month($month_name);
    $month_name->name = $name;
    $year->add_month($month_name);
}
//Checks to see if it's a leap year
if ($current_year % 4 == 0)
{
    $year_length = 366;
}
else
{
    $year_length = 365;
}
$current_month = 0;
for ($i = 1; $i <= $year_length; ++$i)
{
    //Checks to see if the next month has been reached.
    if ($i > get_total_days($current_month) and $current_month != 11)
    {
        $current_month += 1;
    }
    //Checks to see if the day is a Saturday or Sunday. This is because these are stored in different fields.
    //Saturday
    if (($i + $day_offset) % 7 == 6)
    {
        $day = new Day($current_year, $month_names[$current_month], $days[($i + $day_offset) % 7], ($i - get_total_days($current_month) + $months[$current_month]), ",");
        $year->months[$current_month]->add_saturday($day);
    }
    //Sunday
    elseif (($i + $day_offset) % 7 == 0)
    {
        $day = new Day($current_year, $month_names[$current_month], $days[($i + $day_offset) % 7], ($i - get_total_days($current_month) + $months[$current_month]), ",");
        $year->months[$current_month]->add_sunday($day);
    }
    else
    {
        $day = new Day($current_year, $month_names[$current_month], $days[($i + $day_offset) % 7], ($i - get_total_days($current_month) + $months[$current_month]), ",");
        $year->months[$current_month]->add_weekday($day);
    }
}
//Makes lists of arrays for weekdays, saturdays and sundays
$weekdays = [];
$saturdays = [];
$sundays = [];
$week_sat = [];
$all_days = [];
for ($j = 0; $j < count($year->months); ++$j)
{
    for ($i = 0; $i < count($year->months[$j]->weekdays); ++$i)
    {
        $line = $year->months[$j]->weekdays[$i];
        array_push($weekdays, $line);
    }
}
for ($j = 0; $j < count($year->months); ++$j)
{
    for ($i = 0; $i < count($year->months[$j]->saturdays); ++$i)
    {
        $line = $year->months[$j]->saturdays[$i];
        array_push($saturdays, $line);
    }
}
for ($j = 0; $j < count($year->months); ++$j)
{
    for ($i = 0; $i < count($year->months[$j]->sundays); ++$i)
    {
        $line = $year->months[$j]->sundays[$i];
        array_push($sundays, $line);
    }
}
//Combines arrays of weekdays and saturdays
for ($i = 0; $i < count($weekdays); ++$i)
{
    if ($i < count($saturdays))
    {
        array_push($week_sat, $weekdays[$i] . $saturdays[$i]);
    }
    else
    {
        array_push($week_sat, $weekdays[$i]);
    }
}
//Combines arrays into big list of all weekdays + saturdays + sundays
for ($i = 0; $i < count($week_sat); ++$i)
{
    if ($i < count($sundays))
    {
        array_push($all_days, $week_sat[$i] . $sundays[$i]);
    }
    else
    {
        array_push($all_days, $week_sat[$i]);
    }
}
foreach ($all_days as $line)
{
    echo $line . "<br>";
}
require "csv_generator.php";
//writeCSV($all_days);
//Returns how many days are in year up to each month
function get_total_days($current_month)
{
    $total_days = 0;
    for ($i = 0; $i <= $current_month; ++$i)
    {
        $total_days += $GLOBALS['months'][$i];
    }
    return $total_days;
}*/
?>
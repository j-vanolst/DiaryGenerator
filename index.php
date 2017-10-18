<form>
    <h1>Diary CSV Generator</h1>
    <label for="start_date">Start Date:</label>
    <input id="start_date" type="text">
    <label for="end_date">End Date:</label>
    <input id="end_date" type="text">
    <label for="year">Year:</label>
    <input id="year" type="text">
    <input type="submit" value="Generate CSV">
</form>
<?php
require "classes.php";
$months = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
$month_names = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
$days = [1=>"Monday", 2=>"Tuesday", 3=>"Wednesday", 4=>"Thursday", 5=>"Friday", 6=>"Saturday", 0=>"Sunday"];
$current_year = 2017;

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
    if ($i % 7 == 6)
    {
        $day = new Day($current_year, $month_names[$current_month], $days[$i % 7], ($i - get_total_days($current_month) + $months[$current_month]), ",");
        $year->months[$current_month]->add_saturday($day);
    }
    //Sunday
    elseif ($i % 7 == 0)
    {
        $day = new Day($current_year, $month_names[$current_month], $days[$i % 7], ($i - get_total_days($current_month) + $months[$current_month]), ",");
        $year->months[$current_month]->add_sunday($day);
    }
    else
    {
        $day = new Day($current_year, $month_names[$current_month], $days[$i % 7], ($i - get_total_days($current_month) + $months[$current_month]), ",");
        $year->months[$current_month]->add_weekday($day);
    }
}
/*foreach ($year->months as $month)
{
    foreach ($month->weekdays as $day)
    {
        echo $day . "<br>";
    }
}*/
for ($j = 0; $j < count($year->months); ++$j)
{
    for ($i = 0; $i < count($year->months[$j]->weekdays); ++$i)
    {
        $saturday_count = count($year->months[$j]->saturdays);
        $sunday_count = count($year->months[$j]->sundays);
        $line = $year->months[$j]->weekdays[$i];
        if ($i < $saturday_count)
        {
            $line = $line . $year->months[$j]->saturdays[$i];
        }
        if ($i < $sunday_count)
        {
            $line = $line . $year->months[$j]->sundays[$i];
        }
        echo $line . "<br>";
    }
}
//Returns how many days are in year up to each month
function get_total_days($current_month)
{
    $total_days = 0;
    for ($i = 0; $i <= $current_month; ++$i)
    {
        $total_days += $GLOBALS['months'][$i];
    }
    return $total_days;
}
?>
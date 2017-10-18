<?php
class Day
{
    public $year_number, $month, $day, $day_number, $event;
    function __construct($year_number, $month, $day, $day_number, $event)
    {
        $this->year_number = $year_number;
        $this->month = $month;
        $this->day = $day;
        $this->day_number = $day_number;
        $this->event = $event;
    }
    function __toString()
    {
        return $this->year_number . "," . $this->month . "," . $this->day . "," .  $this->day_number . "," . $this->event;
    }
}
class Month
{
    public $name, $weekdays, $saturdays, $sundays;
    function __construct($name)
    {
        $this->name = $name;
        $this->weekdays = [];
        $this->saturdays = [];
        $this->sundays = [];
    }
    function __toString()
    {
        return "<h1>Weekdays</h1>" . "<br>" . print_r($this->weekdays);
    }
    function add_weekday($day)
    {
        array_push($this->weekdays, $day);
    }
    function add_saturday($day)
    {
        array_push($this->saturdays, $day);
    }
    function add_sunday($day)
    {
        array_push($this->sundays, $day);
    }
}
class Year
{
    public $months;
    function __construct()
    {
        $this->months = [];
    }
    function add_month($month)
    {
        array_push($this->months, $month);
    }
}
?>
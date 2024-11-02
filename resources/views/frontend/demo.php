<?php 
$start = strtotime('2021-04-12 00:00:00 GMT');
$today = strtotime('00:00:00 GMT');
$days = ($today - $start) / 60 / 60 / 24;
$months = $days / 30;
$months_days = floor($months) . " months, " . ($days - (floor($months) * 30)) . " days";

echo "<pre>
Days: $days
Months: $months
Months and Days: $months_days
";
?>
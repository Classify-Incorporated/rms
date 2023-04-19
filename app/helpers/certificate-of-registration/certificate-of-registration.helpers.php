<?php


function getYears($year, $title = '')
{
    if($title == '' || $title == null) {
        $schoolYearEnd = $year + 1;
        $transformedItem = "{$year} - {$schoolYearEnd}";

        return $transformedItem;
    } else {
        $schoolYearEnd = $year + 1;
        $transformedItem = "{$year} - {$schoolYearEnd} ({$title})";

        return $transformedItem;
    }
}


function yearCourse($schoolMarking)
{
    $schoolYearEnd = $schoolMarking + 1;
    $transformedItem = "{$schoolMarking} - {$schoolYearEnd} ()";

    return $transformedItem;
}

function semester($short_name)
{
    // dd($schoolMarking);
    if ($short_name == 's1') {
        $sem = '1<u>st</u>';
    } elseif ($short_name == 's2') {
        $sem = '2<u>nd</u>';
    }
}


function calculateAverage($grades) {
    $sum = array_reduce($grades, function ($carry, $grade) {
        return $carry + $grade;
    }, 0);

    $count = count($grades);

    if ($count === 0) {
        return null;
    }

    return round($sum / $count, 2);
}

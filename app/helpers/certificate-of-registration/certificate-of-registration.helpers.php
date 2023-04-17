<?php


function getYears($year, $title)
{
    $schoolYearEnd = $year + 1;
    $transformedItem = "{$year} - {$schoolYearEnd} ({$title})";

    return $transformedItem;
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

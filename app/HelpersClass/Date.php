<?php


namespace App\HelpersClass;


class Date
{
    public static function getListdayInMonth()
    {
        $array = [];
        $month = date('m');
        $year = date('Y');
        //lay du lieu trong thang
        for ($day = 1; $day <= 31; $day++) {
        $time = mktime(12,0,0,$month,$day,$year);

        if (date('m',$time) == $month)
            $array = date('Y-m-d',$time);
        }
        return $array;
    }
}

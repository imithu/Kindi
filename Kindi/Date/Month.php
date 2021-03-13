<?php

namespace Kindi\Date;


class Month
{
  /**
   * 
   * get value of each month in a year
   * 
   * @param array $vds - value with many dates   // eg. [ date => value ]
   * 
   * @return array - return all values in 12 months
   * 
   * @since   1.0.0
   * @version 1.0.0
   * @author  Mahmudul Hasan Mithu
   * 
   */
  public static function months_12_value( array $vds )
  {
    date_default_timezone_set('UTC');

    $all_month_value = 
    [
      0,
      0,
      0,
      0,

      0,
      0,
      0,
      0,

      0,
      0,
      0,
      0
    ];
    foreach($vds as $date=>$value){
      $month_number = ((int) date('n', strtotime($date)));

      if($month_number<=12)
        $all_month_value[$month_number-1] += $value;
    }

    return $all_month_value;
  }
}
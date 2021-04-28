<?php

namespace Kindi\Date;


class Month
{
  /**
   * 
   * get monthly value of a year
   * 
   * @param array $data - contains date and value as array   // eg. [ [date, value], [date, value] ]
   * 
   * @return array - return monthly value of a year
   * 
   * @since   1.0.0
   * @version 1.1.0
   * @author  Mahmudul Hasan Mithu
   * 
   */
  public static function monthly_value( array $data )
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
    foreach($data as $each_date){
      $month_number = ((int) date('n', strtotime($each_date[0])));

      if($month_number<=12)
        $all_month_value[$month_number-1] += $each_date[1];
    }

    return $all_month_value;
  }
}

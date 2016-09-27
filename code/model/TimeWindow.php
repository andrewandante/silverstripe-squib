<?php

/**
 * Created by PhpStorm.
 * User: aafincham
 * Date: 27/09/2016
 * Time: 4:36 PM
 */
class TimeWindow extends DataObject {

	private static $db = array(
		"StartDate" => "Date",
		"StartTime" => "Time",
		"EndDate" => "Date",
		"EndTime" => "Time"
	);
}

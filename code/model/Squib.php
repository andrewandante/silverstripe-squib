<?php

/**
 * Created by PhpStorm.
 * User: aafincham
 * Date: 27/09/2016
 * Time: 4:26 PM
 */
class Squib extends DataObject {

	private static $db = array(
		"Title" => "Varchar(100)",
		"ChangeID" => "Varchar(20)",
		"Summary" => 'Text',
		"Details" => 'Varchar(255)',
		"Status" => "Enum('Scheduled, Re-scheduled to Backup Window, Failed, Cancelled, Completed', '')",
		"RiskLevel" => "Enum('Low, Medium, High', '')",
	);

	private static $has_one = array(
		"PlannedWindow" => "TimeWindow",
		"BackupWindow" => "TimeWindow"
	);
}

<?php


$logFilePath = "qwerty_log";

/**
 *	@author					Mudit Goel
 *	@creation-date			04-02-2005
 *	@param	text			text to write
 *	@param	fileName		log file to write to
 *	@returns				status
 */
function addLog($text)
{
	$fileName = "truefact.log";
	global $logFilePath;

	$logFile = $logFilePath . "/" . $fileName;

	if (!($fp = fopen($logFile, "a")))
	{
		return false;
	}

	$time = date("d-m-Y H:i:s");
	$data = $time . ": " . $text . "\r\n";
	if (!fwrite($fp, $data))
	{
		return false;
	}

	return true;
}?>

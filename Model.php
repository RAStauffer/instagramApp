<?php

class Model {
	public $db;
	public function __construct()
	{
	}

	function openDb()
	{

		// Connect to a MySQL database
		$this->db = mysql_connect ("localhost", "<USER>", "<PWD>") or die ('I cannot connect to the database.');
		if (!$this->db) {file_put_contents('activity.log', "Cannot connect to DB", FILE_APPEND); }

		mysql_select_db ("<DB>");
		return ($this->db);
	}

	function closeDb()
	{
		// Closing database connection
		mysql_close($this->db);
	}

	public function __destruct()
	{
	}


	public function addInstagramData($media_id,$url,$c_time,$user,$userFullName,$filter,$comment_count,$caption,$link,$low_res,$thumb)

	{

		// Connect to a MySQL database

		$this->openDb();



		$query = "INSERT INTO instagramData (media_id,url,c_time,user,userfullname,filter,comment_count,caption,link,low_res,thumb) ";

		$query .= "VALUES ('$media_id','$url','$c_time','$user','$userFullName','$filter','$comment_count','$caption','$link','$low_res','$thumb');";
		
		file_put_contents('activity.log', $query."\r\n", FILE_APPEND);

		$result = mysql_query($query);
		if (!$result) {file_put_contents('activity.log', "Query Failed\r\n", FILE_APPEND); }
		else {file_put_contents('activity.log', "Query Succeeded\r\n", FILE_APPEND); }

		$this->closeDb();
	}
	
	function min_id()
	{
		// Connect to a MySQL database
		$this->openDb();
		$query = "SELECT min_id FROM persistEntries;";
		$result = mysql_query($query);
		$tbl = mysql_fetch_array($result);
		$min_id = $tbl['min_id'];
		$this->closeDb();
		return $min_id;
	}

	function update_min_id($new_min_id)
	{
		// Connect to a MySQL database
		$this->openDb();
		
		$query = "UPDATE persistEntries SET min_id ='".$new_min_id."';";
		$result = mysql_query($query);
		file_put_contents('activity.log', "Update Query: ".$query."\r\n", FILE_APPEND);
		if (!$result) {file_put_contents('activity.log', "UpdateMinID Query Failed\r\n", FILE_APPEND); }
		else {file_put_contents('activity.log', "UpdateMinID Query Succeeded\r\n", FILE_APPEND); }		
		$this->closeDb();
	}


	function getInstgPosts() {
	$this->openDb();
	$rtnLinkArr = array();

	// Perform SQL query to get array of all links
	$query = 'SELECT * FROM instagramData';
	$result = mysql_query($query) or die('Query failed: ' . mysql_error());
	$this->closeDb();

	// create array of link arrays
	while($row = mysql_fetch_array($result))
	{
		array_push($rtnLinkArr,$row);

	}

	return $rtnLinkArr;
}

}

?>
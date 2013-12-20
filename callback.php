<?php
//======================================= IMPORTANT!!! =========================================
//======================================= IMPORTANT!!! =========================================
//======================================= IMPORTANT!!! =========================================
// READ COMMENTED OUT INSTRUCTIONS BELOW.... 
require_once('instagram.class.php');
require_once('Model.php');

$dataOut="";
$instagramModel = new Model();

$min_id = '';
$next_min_id = '';
$min_id = $instagramModel->min_id();

$inst = new Instagram(
/*Put your Instagram API credentials here*/
'nnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn',
'nnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn',
'http://www.yourURL.com/callback.php');

$tags = $inst->getTagMedia('gradviceai',$min_id);

if ( $tags ) {
	if ( property_exists( $tags->pagination, 'min_tag_id' ) ) {
		$next_min_id = $tags->pagination->min_tag_id;
		$instagramModel->update_min_id($next_min_id);
	}
	
	//LOOP THROUGH THE RESULT, IF ALL GOES WELL WILL ONLY LOOP ONCE... 
	// IF YOU SUBSCRIBE TO MORE THAN ONE TAG YOU MAY NEED AN IF STATEMENT TO HANDLE RESULTS ACCORDINGLY OR ELSE YOU'LL GET DUPLICATE CONTENT
	$new_min_id;
	$firstRecord = true;
	foreach ( $tags as $tag ) {
		if ( is_array( $tag ) ) {
			foreach ( $tag as $media ) {
				$url = $media->images->standard_resolution->url;
				$m_id = $media->id;
				$c_time = $media->created_time;
				$user = $media->user->username;
				$userFullName = $media->caption->from->full_name;
				$filter = $media->filter;
				$comments = $media->comments->count;
				$caption = $media->caption->text;
				$link = $media->link;
				$low_res=$media->images->low_resolution->url;
				$thumb=$media->images->thumbnail->url;
				$lat = $media->location->latitude;
				$long = $media->location->longitude;
				$loc_id = $media->location->id;

				//INSTAGRAM'S GOOFY TIMEZONE ISSUES
				$date = new DateTime( '2000-01-01', new DateTimeZone( 'Pacific/Nauru' ) );

				$data = array(
					'media_id' => $m_id,
					'min_id' => $next_min_id,
					'url' => $url,
					'c_time' => $c_time,
					'user' => $user,
					'userFullName' => $userFullName,
					'filter' => $filter,
					'comment_count' => $comments,
					'caption' => $caption,
					'link' => $link,
					'low_res' => $low_res,
					'thumb' => $thumb,
					'lat' => $lat,
					'long' => $long,
					'loc_id' => $loc_id,
				);

				$instagramModel->addInstagramData($data['media_id'],$data['url'],$data['c_time'],$data['user'],$data['userFullName'],$data['filter'],
					$data['comment_count'],$data['caption'],$data['link'],$data['low_res'],$data['thumb']);
			}

		}

	}

	$myString = file_get_contents('php://input');
	$ALL = date("F j, Y, g:i a")." ".$myString."\r\n".$dataOut;
	file_put_contents('activity.log', $ALL, FILE_APPEND);
	//===========================================================



}

//======================================= IMPORTANT!!! =========================================
//======================================= IMPORTANT!!! =========================================
//======================================= IMPORTANT!!! =========================================

//VERY IMPORTANT --- BEFORE YOU ACTUALLY SUBSCRIBE, THE CODE BELOW MUST BE UNCOMMENTED AND ALL THE CODE ABOVE COMMENTED OUT!!!!!!!!
//ONCE YOU GET A VALID SUBSCRIPTION COMMENT THIS OUT AND UNCOMMENT THE CODE ABOVE!!!!!!

//$challenge = $_GET['hub_challenge'];
//echo $challenge;

?>

<?php


function podtrac_episode($item) {

	global $main;
	if ($main->get('version')<2) return $item;
	
	foreach ($item['audiofiles'] as $key=>$audio) {
		$redir = '';
		switch ($key) {
		
			case 'mp3':
				$redir = 'mp3';
				break;
				
			case 'm4a':
				$redir = 'aac';
				break;
				
			case 'opus':
			case 'ogg':
				$redir = 'ogg';
				break;
				
			default:
				return $item;
				
		
		}
		$info = parse_url($audio['link']);
		$newlink = str_replace($info['scheme'].'://','',$audio['link']);
		$item['audiofiles'][$key]['link']='http://www.podtrac.com/pts/redirect.'.$redir.'/'.$newlink;
	
	}	
	return $item;
	
}


?>

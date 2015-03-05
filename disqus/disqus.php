<?php 

function disqus_episode($item) {

global $main;

if ($main->get('version')<2) return $item;

return $item;

}
?>

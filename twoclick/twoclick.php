<?php 

function twoclick_episode($item) {

$item['append'].="
<div class='socialfoot-".$item['slug']."'></<div>
<script type='text/javascript'>
  $('.socialfoot-".$item['slug']."').socialSharePrivacy({
	'css_path'  : '/ext/twoclick/socialshareprivacy/socialshareprivacy.css',
	'lang_path' : '/ext/twoclick/socialshareprivacy/lang/',
	'language'  : 'de',
	'uri'		: '".$item['pagelink']."',
	 services : {
		twitter	: {
					'dummy_img': '/ext/twoclick/socialshareprivacy/images/dummy_twitter.png',
					'tweet_text': '".$item['title']."'
		},
		facebook	: {
					'dummy_img': '/ext/twoclick/socialshareprivacy/images/dummy_facebook.png'
		},
		gplus	: {
					'dummy_img': '/ext/twoclick/socialshareprivacy/images/dummy_gplus.png'
		}
	 }
  });
</script>
";

return $item;

}
?>

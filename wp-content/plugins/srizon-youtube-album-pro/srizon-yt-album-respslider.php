<?php
if ( isset( $GLOBALS['scroller_id'] ) ) {
	$GLOBALS['scroller_id'] ++;
} else {
	$GLOBALS['scroller_id'] = 1;
}
$scroller_id = 'srizonytscroller' . $GLOBALS['scroller_id'];

$totvid       = count( $videos );
$srz_cur_page = isset( $_REQUEST[ $paging_id ] ) ? ( $_REQUEST[ $paging_id ] - 1 ) : 0;
$videos       = array_slice( $videos, $srz_cur_page * $album['paginatenum'], $album['paginatenum'] );

$output .= '<div class="respslidercontainer"><div class="loading-wrap"><ul class="elastislide-list" id="' . $scroller_id . '">';

foreach ( $videos as $video ) {
	// set up link
	if ( strpos( $video['link'], '&' ) ) {
		$minlink = substr( $video['link'], 0, strpos( $video['link'], '&' ) );
	} else {
		$minlink = $video['link'];
	}
	$link    = '<a class="magpopif" href="' . $minlink . '">';
	$imgcode = str_replace( "<img", "<img alt=\"" . $video['title'] . "\"", $video['img'] );
	$imgcode = str_replace( 'alt=""', '', $imgcode );
	$output .= '<li>' . $link . $imgcode . '</a></li>';
}

$output .= '</ul></div>';
//pagination
$pagination_text = srizon_show_pagination( $album['paginatenum'], $totvid, $scroller_id, $paging_id );
$output .= $pagination_text;

$output .= '<div style="clear: both;"></div></div>';

$output .= <<<EOL
<script type="text/javascript">
	jQuery('#{$scroller_id}').matchImgHeight({
		'height':{$album['targetheight']}
	});
	jQuery(window).load(function(){
		jQuery('#{$scroller_id}').unwrap().elastislide({
			speed: {$album['respslidespeed']},
			start: {$album['respslidestart']}
		});
	});
</script>
EOL;


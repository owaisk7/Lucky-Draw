<?php 
global $wpdb;

function lucky_draw_display_as($display_as,$SKU,$skutext,$textlinkcolor): string{

    if($display_as=="Link"){
  $link= lucky_draw_get_product_link_by_sku($SKU);
$text='<b><a class="LinkPsreview" target="_blank" style=text-decoration:none;color:'.$textlinkcolor.'; href="'.$link.'" style="text-decoration:none;">'.$skutext.'</a></b>';
}else{
  $text='<b>'.$skutext.'</b>';
 
}
return $text;

}

 function lucky_draw_draw_type(){
  global $wpdb;
$draw_type = $wpdb->get_var($wpdb->prepare("SELECT placement FROM %i  ORDER BY id DESC LIMIT 1 ",Lucky_Draw_Database)); // phpcs:ignore WordPress.DB.DirectDatabaseQuery.NoCaching, WordPress.DB.DirectDatabaseQuery.DirectQuery, WordPress.DB.DirectDatabaseQuery.SchemaChange
return $draw_type;
}
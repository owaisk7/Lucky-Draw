<?php 
if ( !defined('ABSPATH') ){
  die();
}
global $wpdb;
global $current_user;
      wp_get_current_user();

   
      $contestant_count=0;

      $result = $wpdb->get_results("SELECT * FROM ".Lucky_Draw_Database."  WHERE status =1  ORDER BY id DESC LIMIT 1 "); // phpcs:ignore WordPress.DB.DirectDatabaseQuery.NoCaching, WordPress.DB.DirectDatabaseQuery.DirectQuery, WordPress.DB.DirectDatabaseQuery.SchemaChange

foreach ($result as $post){

        $draw_id = $post->id;
        $draw_name = $post->draw_name;
        $drawtype=$post->placement;
        $draw_desc=$post->draw_desc;
        $draw_date=$post->draw_date;
        $prizes=$post->prizes;
        $sendmail=$post->sendmail;
        $stylebox=$post->box_style;  

}

//Unserialize Prizes And And Get SKU1 and SKU Text1 
 $prizes=unserialize($prizes);

//Unserialize Styles And Style Boxes
 $stylebox=unserialize($stylebox);
 
//Unserialize Mail 
$sendmail=unserialize($sendmail);



//Highlight Prize
$text='<span class="luckydrawprize">'.$prizes["SKUText1"].'</span>';

// Replace {prize} With  Prize as link or text 
$draw_desc=str_replace("{prize}",$text,$draw_desc);

// Replace {user} With Current User Name Prize as link or text 

$draw_desc=str_replace("{user}",'<b>'.$current_user->display_name.'</b>',$draw_desc);

if ( is_user_logged_in() ) {
 $contestant_count = $wpdb->get_var($wpdb->prepare("SELECT COUNT(*) FROM %i WHERE contest_id =%s AND contestants=%s ORDER BY id ASC ",Lucky_Draw_Database2,$draw_id,$current_user->user_email)); // phpcs:ignore WordPress.DB.DirectDatabaseQuery.NoCaching, WordPress.DB.DirectDatabaseQuery.DirectQuery, WordPress.DB.DirectDatabaseQuery.SchemaChange
}
if($contestant_count==0){

if($drawtype=="absolute"){ ?>

<div id="drawpreview" class=" p-4 w-25 position-fixed bottom-0 end-0" style="z-index:999999999999999999;<?php echo $stylebox["boxsettings"]; ?>" ><?php }else{ ?>
  
  <div class="row"> <?php } ?>
  
  <input type="hidden" value="<?php echo esc_attr($draw_id); ?>">
  
  <div id="PreviewBox" style="width:100%;<?php echo $stylebox["boxsettings"]; ?>" class="alert  fade show" role="alert">
  <b>
  <p class="alert-heading" id="Lucky_Draw_Name_Preview" style="padding:0.1em;<?php echo $stylebox["headingsettings"]; ?>">
   <?php   echo wp_kses_post($draw_name); ?></p>
  </b>
   <div class="luckydrawhr" style="<?php echo $stylebox["dividersettingsbox"]; ?>"></div>
     <p  id="Lucky_Draw_Desc_Preview" style="word-wrap:break-word;<?php echo $stylebox["descriptionsettingsbox"]; ?>">
<?php echo wp_kses_post($draw_desc); ?>   <br>
  <div  class="w-100" id="Draw_Date_Preview"><b>Draw Date : <?php echo wp_kses_post($draw_date); ?> </b></div>

      <div class="d-grid mt-2 gap-2 d-md-flex justify-content-md-end">
      <form  id="luckydrawboxform" method="POST" class="w-100" action="<?php echo wp_kses_post(admin_url('admin-post.php')); ?>" >
          <input type="hidden" name="action" value="lucky_draw_participation_form">

          <input id="mainvalue" type="hidden" value="<?php echo esc_attr($draw_id); ?>" name="a" >

          <input id="mainvalue" type="hidden" value="<?php echo esc_attr($draw_id); ?>" name="SKUText1" >

          <input type="hidden" name="current_url" value="<?php echo esc_attr(get_permalink()); ?>"> 

          <input id="mainvalue" type="hidden" value="<?php echo esc_attr($sendmail["participationmail"]); ?>" name="sendmail" >

          <?php wp_nonce_field( "Lucky_Draw_Nonce", "Lucky_Draw_Nonce_Field");  ?>

          <input id="mainvalue" type="hidden" value="<?php echo esc_attr($draw_name); ?>" name="drawname" >

          <input id="mainvalue" type="hidden" value="<?php echo esc_attr($draw_date); ?>" name="drawdate" >

          <div class="luckydrawhr" style="<?php echo $stylebox["dividersettingsbox"]; ?>"></div>

          <?php if ( is_user_logged_in() ) { ?>

          <input  type="submit"  id="registerbutton" style="<?php echo $stylebox["registernowsettingsbox"]; ?>" value="Register Now" name="registernow">

          <?php  } else {?>

            <input type="submit" name="registernow"  id="registerbuttondisabled" style="background-color:" value="Login To Register">

            <?php }  ?>

            <input type="button"  id="closebutton" type="button" style="<?php echo $stylebox["clossettingsbox"]; ?>" data-bs-dismiss="alert" aria-label="" value="Close">
    </form>
<!-- <button type="button" class="btn btn-primary w-30" data-bs-dismiss="alert" aria-label="">Close</button>
-->
    </div>


</div>
</div><?php }


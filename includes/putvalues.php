<?php
if ( !defined('ABSPATH') ){
  die();
}
global $wpdb;

//if(isset($_POST["Lucky_Draw_Submit"])){ 



//Draw Details
if(isset($_POST["Lucky_Draw_Name"])){ $draw_name=wp_kses_post(wp_unslash($_POST['Lucky_Draw_Name'])); }else{ $draw_name=''; }

if(isset($_POST["Lucky_Draw_Desc"])){ $draw_desc=wp_kses_post(wp_unslash($_POST['Lucky_Draw_Desc'])); }else{ $draw_desc=''; }

if(isset($_POST["Lucky_Draw_Date"])){ $draw_date=wp_kses_post(wp_unslash($_POST['Lucky_Draw_Date'])); }else{ $draw_date=''; }

if(isset($_POST["placement"])){ $placement=wp_kses_post(wp_unslash($_POST['placement'])); }else{ $placement=''; }

echo $draw_date=date('Y-m-d', strtotime($draw_date));

if(isset($_POST["participationmail"])){ $participationmail=wp_kses_post(wp_unslash($_POST['participationmail'])); }else{ $participationmail=''; }


$mailing=array("participationmail"=>$participationmail);
$mailing=serialize($mailing);




if(isset($_POST["product_SKU_1"])){ $sku1=wp_kses_post(wp_unslash($_POST['product_SKU_1'])); }else{ $sku1=''; }


if(isset($_POST["prize_text_1"])){ $prizetext1=wp_kses_post(wp_unslash($_POST['prize_text_1'])); }else{ $prizetext1=''; }


//Serialize Prize
$prize=array("SKU1"=>$sku1,"SKUText1"=>$prizetext1);
$prize=serialize($prize);


//Get Style Colors

//Box Settings
if(isset($_POST["boxsettings"])){ $boxsettings=wp_kses_post(wp_unslash($_POST['boxsettings'])); }else{ $boxsettings=''; }

if(isset($_POST["headingsettings"])){ $headingsettings=wp_kses_post(wp_unslash($_POST['headingsettings'])); }else{ $headingsettings=''; }

if(isset($_POST["dividersettingsbox"])){ $dividersettingsbox=wp_kses_post(wp_unslash($_POST['dividersettingsbox'])); }else{ $dividersettingsbox=''; }

if(isset($_POST["descriptionsettingsbox"])){ $descriptionsettingsbox=wp_kses_post(wp_unslash($_POST['descriptionsettingsbox'])); }else{ $descriptionsettingsbox=''; }

if(isset($_POST["drawdatesettingsbox"])){ $drawdatesettingsbox=wp_kses_post(wp_unslash($_POST['drawdatesettingsbox'])); }else{ $drawdatesettingsbox=''; }

if(isset($_POST["registernowsettingsbox"])){ $registernowsettingsbox=wp_kses_post(wp_unslash($_POST['registernowsettingsbox'])); }else{ $registernowsettingsbox=''; }

if(isset($_POST["clossettingsbox"])){ $clossettingsbox=wp_kses_post(wp_unslash($_POST['clossettingsbox'])); }else{ $clossettingsbox=''; }

if(isset($_POST["dividersettingsdrawbox"])){ $dividersettingsdrawbox=wp_kses_post(wp_unslash($_POST['dividersettingsdrawbox'])); }else{ $dividersettingsdrawbox=''; }

//Serialize Styles
$boxstyle=array(
                "boxsettings"=>$boxsettings,
                "headingsettings"=>$headingsettings,
                "dividersettingsbox"=>$dividersettingsbox,
                "descriptionsettingsbox"=>$descriptionsettingsbox,
                "drawdatesettingsbox"=>$drawdatesettingsbox,
                "registernowsettingsbox"=>$registernowsettingsbox,
                "clossettingsbox"=>$clossettingsbox,
                "dividersettingsdrawbox"=>$dividersettingsdrawbox,                            
              );

$boxstyle=serialize($boxstyle);

// Value 1 is Active and 0 Deactive For Status
$wpdb->insert($wpdb->prefix.'lucky_draw',array('draw_name' => $draw_name,'draw_desc' => $draw_desc,'status' => 1, 'draw_date'=> $draw_date,'placement'=>$placement,'sendmail'=>$mailing,'prizes'=> $prize,'box_style'=> $boxstyle)); // phpcs:ignore WordPress.DB.DirectDatabaseQuery.NoCaching, WordPress.DB.DirectDatabaseQuery.DirectQuery, WordPress.DB.DirectDatabaseQuery.SchemaChange
?>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  Contest Name <strong><?php echo wp_kses_post($draw_name); ?></strong> Successfully Added ! 
  <?php if($placement=="afteraddtocart"){
    echo 'Draw Box Will Be Automatically Added After "Add To Cart" Button';
  }elseif($placement=="orderthankyou"){
    echo 'Draw Box Will Be Automatically Added After "Add To Cart" Button';

  }else {

    echo 'Use Shotcode <Strong>[lucky_draw_view]</Strong>';

  }
?>
  
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php //} ?>
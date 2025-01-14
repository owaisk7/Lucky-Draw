<?php if ( !defined('ABSPATH') ){
  die();
}
?>
<Style>
.luckydrawformcontainer{
width:60%;
float: left;

}
.luckydrawformright{
width:17em;
font-size: 13px;
border: 1px #7f7f7f;
float: right;
margin-top:1em;
box-shadow: 0 48px 80px -32px rgba(0,0,0,0.3);
color:#7f7f7f;

}
.panelcontainer{
    width: 100%;
}


.tabs {
  display: flex;
  flex-wrap: wrap;
  max-width: 700px;
  margin-top: 1em;
  margin-left:4em;
  text-align: center;
  float: left;
  background: #e5e5e5;
  box-shadow: 0 48px 80px -32px rgba(0,0,0,0.3);
}
.input {
  width:50%;
  position: absolute;
  opacity: 0;
}
.label {
  width: 100%;
  padding: 20px 30px;
  background: #e5e5e5;
  cursor: pointer;
  font-weight: bold;
  font-size: 18px;
  color: #7f7f7f;
  transition: background 0.1s, color 0.1s;
}
.label:hover {
  background: #d8d8d8;
}
.label:active {
  background: #ccc;
}
.input:focus + .label {
  z-index: 1;
}
.input:checked + .label {
  background: #fff;
  color: #000;
}
@media (min-width: 600px) {
  .label {
    width: 50%;
  }
}
.panelcontainer{
    width: 100%;
}
.panel {
    color: #E195AB;
width:100%;
    display: none;
  background: #fff;
}
@media (min-width: 600px) {
  .panel {
    order: 99;
  }
}
.input:checked + .label + .panel {
  display: block;
color: #7f7f7f;
}
.luckydrawprize{
background-color: yellow;
color:black;
padding: 5px;
}

</style>
<div class="tabs">
  <input class="input" name="tabs" type="radio" id="tab-1" checked="checked"/>
  <label class="label" for="tab-1">Draw Details</label>
  <div class="panel">
  <form action="<?php echo wp_kses_post(Lucky_Draw_Home_URL).'admin.php?page=adddraw&next=submit';  ?>" method="post">

      <div class="row mb-3" style="padding-left:35px;padding-right:35px;margin-top:35px;">
        <label for="inputEmail3" class="col-sm-3 col-form-label">Draw Name</label>
          <div class="col-sm-9" >
            <input type="text" name="Lucky_Draw_Name" maxlength="41"  id="luckydrawinputtext" class="Lucky_Draw_Name" required >
          </div>
      </div>

      <div class="row mb-3" style="padding-left:35px;padding-right:35px;margin-top:35px;">
        <label for="inputEmail3" class="col-sm-3 col-form-label">Draw Date</label>
          <div class="col-sm-9" >
            <input type="text" id="newldform" class="Lucky_Draw_Date" name="Lucky_Draw_Date" required autocomplete="off">
          </div>
      </div>
      
      <div class="row mb-3" style="padding-left:35px;padding-right:35px;margin-top:35px;">
        <label for="inputEmail3" class="col-sm-3 col-form-label">Draw Description</label>
          <div class="col-sm-9" >
<textarea name="Lucky_Draw_Desc" maxlength="130" rows="3" cols="25" class="Lucky_Draw_Desc" style="padding-top:0.5em;resize: none;" id="luckydrawinputtext" required></textarea>
<div id="luckydrawformnote"><i>
              Use {user} to display name. use {draw_date} to display draw date and use {prize} 
              to display prize in description.
            </i></div>
      </div>
      </div>
      
    
      <div class="row mb-3" style="padding-left:35px;padding-right:35px;margin-top:35px;">
        <label for="inputEmail3" class="col-sm-3 col-form-label">Poduct SKU </label>
        <div class="col-sm-9" >
          <div class="ui search" id="product_SKU_2">
            <input style="padding:.5em;" class="prompt" id="luckydrawinputtext" name="product_SKU_1" style="border-radius:none;" type="text" required>
            <div class="results"></div>
          </div>
        </div>
      </div>


      <div class="row mb-3" style="padding-left:35px;padding-right:35px;margin-top:5px;">
        <label for="inputEmail3" class="col-sm-3 col-form-label">Prize Text</label>
          <div class="col-sm-9" >
            <input type="text" maxlength="41" name="prize_text_1" class="prize_text_1" id="luckydrawinputtext" required >
          </div>
      </div>
      

      <div class="row mb-3" style="padding-left:35px;padding-right:35px;margin-top:35px;">
        <label for="inputEmail3" class="col-sm-3 col-form-label">Mail </label>
          <div class="col-sm-4" >
            <input type="checkbox" name="participationmail" value="sendmail" id="luckydrawinputcheckbox">Send Participation Mail<br> 
 
          </div>
      </div>

      <div class="row mb-3" style="padding-left:35px;padding-right:35px;margin-top:35px;">
       <label for="inputEmail3" class="col-sm-3 col-form-label">Display As </label>
        <div class="col-6" >
          <input type="radio" class="btn-check" name="placement" id="success-outlined" value="shortcode" autocomplete="off" checked>
          <label class="btn " style="color:#7f7f7f;" for="success-outlined">Normal</label>
          <input type="radio" class="btn-check" name="placement" id="danger-outlined" value="popup" autocomplete="off">
          <label class="btn " style="color:#7f7f7f;" for="danger-outlined">Pop Up</label>
          <input type="radio" class="btn-check" name="placement" id="primary-outlined" value="absolute" autocomplete="off">
          <label class="btn " style="color:#7f7f7f;" for="primary-outlined">Absolute</label>
          
          
        </div>

    </div>


      <input type="hidden" name="boxsettings" id="boxsettings">
      <input type="hidden" name="headingsettings" id="headingsettingsbox">
      <input type="hidden" name="dividersettingsbox" id="dividersettingsbox">
      <input type="hidden" name="descriptionsettingsbox" id="descriptionsettingsbox">
      <input type="hidden" name="drawdatesettingsbox" id="drawdatesettingsbox">
      <input type="hidden" name="registernowsettingsbox" id="registernowsettingsbox">
      <input type="hidden" name="clossettingsbox" id="clossettingsbox">
      <input type="hidden" name="dividersettingsdrawbox" id="dividersettingsdrawbox">






      <?php wp_nonce_field( "Lucky_Draw_Nonce", "Lucky_Draw_Nonce_Field");  ?>
        <input type="submit" class="luckydrawsubmitbutton w-100" style="visibility:hidden;" name="Lucky_Draw_Details" value="Next">
        </form>   
     
</div> 
    <input class="input" name="tabs" type="radio" id="tab-2"/>
  <label class="label" for="tab-2">Draw Styling</label>
  <div class="panel">
<?php include Lucky_Draw_Plugin_Path.'includes/preview.php'; ?>
  </div>

     
  </div>

  <div class="luckydrawformright">
  <?php include Lucky_Draw_Plugin_Path.'admin/previewsettings.php'; ?>
  </div>
<?php 
$products = lucky_draw_get_all_products_with_sku();

// Prepare the products array as JSON
$categoryContent = [];
foreach ($products as $product) {
    $categoryContent[] = [
        'category' => wp_kses_post($product['name']),
        'title' => wp_kses_post($product['sku']),
    ];
}

// Convert PHP array to JSON format
$categoryContentJson = wp_json_encode($categoryContent);

// Register a script handle

// Add inline script to the registered script handle
$inline_script = "
    var categoryContent = $categoryContentJson;
    $('#product_SKU_1').search({
        type: 'category',
        source: categoryContent
    });

    $('#product_SKU_2').search({
        type: 'category',
        source: categoryContent
    });

    $('#product_SKU_3').search({
        type: 'category',
        source: categoryContent
    });
";

// Add the inline script
wp_add_inline_script('luckydrawjs', $inline_script, 'after');

function lucky_draw_get_all_products_with_sku() {
    // Get all products
    $args = array(
        'post_type'      => 'product', // Post type for products
        'posts_per_page' => -1,        // Get all products
        'post_status'    => 'publish', // Only get published products
    );

    $query = new WP_Query($args);
    $products = $query->posts;

    $product_data = array();

    // Loop through each product
    foreach ($products as $product_post) {
        $product = wc_get_product($product_post->ID);
        
        // Get the product name and SKU
        $product_name = $product->get_name();
        $product_sku = $product->get_sku();

        // Add product data to array
        $product_data[] = array(
            'name' => $product_name,
            'sku'  => $product_sku,
        );
    }

    return $product_data;
}

<?php

if ( !defined(constant_name: 'ABSPATH') ){
  die();
}

global $wpdb;
 if(isset($_POST["Lucky_Draw_Styling"])){ 





  if(wp_kses_post(wp_unslash(isset($_POST["Lucky_Draw_Nonce_Field"])))&& wp_verify_nonce(wp_kses_post(wp_unslash($_POST["Lucky_Draw_Nonce_Field"])),'Lucky_Draw_Nonce')){ 
  }else {  die(); }
  if(isset($_POST["Lucky_Draw_Name"])){ 
    $LD_name=wp_kses_post(wp_unslash($_POST['Lucky_Draw_Name']));
   

  } 

  if(isset($_POST["participationmail"])) {
    $participationmail= wp_kses_post(wp_unslash($_POST['participationmail']));
  }
  
  if(isset($_POST["placement"])) {
    $placement= wp_kses_post(wp_unslash($_POST['placement']));
  }
  if(isset($_POST["Lucky_Draw_Desc"])){ 
    $LD_desc=wp_kses_post(wp_unslash($_POST['Lucky_Draw_Desc']));
   

  } 

  if(isset($_POST["Lucky_Draw_Date"])){ 
    $LD_date=wp_kses_post(wp_unslash($_POST['Lucky_Draw_Date']));
    $LD_date = strtotime($LD_date);

    $LD_date= gmdate('Y-m-d',$LD_date);

  }
//SKU 1
  if(isset($_POST["product_SKU_1"])){ $Lucky_Draw_SKU_1=wp_kses_post(wp_unslash($_POST['product_SKU_1'])); }else{ $Lucky_Draw_SKU_1='';}

//SKU 2
if(isset($_POST["product_SKU_2"])){ $Lucky_Draw_SKU_2=wp_kses_post(wp_unslash($_POST['product_SKU_2'])); }else{ $Lucky_Draw_SKU_2='';}

//SKU 3
if(isset($_POST["product_SKU_3"])){ $Lucky_Draw_SKU_3=wp_kses_post(wp_unslash($_POST['product_SKU_3'])); }else{ $Lucky_Draw_SKU_3='';}

//Text 1
if(isset($_POST["prize_text_1"])){ $text_link_1=wp_kses_post(wp_unslash($_POST['prize_text_1']));}else{ $text_link_1='';}

//Text 2
if(isset($_POST["prize_text_2"])){ $text_link_2=wp_kses_post(wp_unslash($_POST['prize_text_2']));}else{ $text_link_2='';}

//Text 3
if(isset($_POST["prize_text_3"])){ $text_link_3=wp_kses_post(wp_unslash($_POST['prize_text_1']));}else{ $text_link_3='';}

//Display As
if(isset($_POST["display_as"])){  $display_as=wp_kses_post(wp_unslash($_POST["display_as"]));  }
  
//No. Of Winners


  
  ?>
  <div style="padding:2em;">
  <form action="<?php echo wp_kses_post(Lucky_Draw_Home_URL).'admin.php?page=adddraw';  ?>" method="post" class="row">
   
  <input type="hidden" name="Lucky_Draw_Name" value="<?php echo esc_attr($LD_name) ?>">
  <input type="hidden" name="Lucky_Draw_Desc" value="<?php echo esc_attr($LD_desc); ?>">
  <input type="hidden" name="Lucky_Draw_Date" value="<?php echo esc_attr($LD_date); ?>">
  <input type="hidden" name="participationmail" value="<?php echo esc_attr($participationmail); ?>">
  <input type="hidden" name="placement" value="<?php echo esc_attr($placement); ?>">
  <input type="hidden" name="product_SKU_1" value="<?php echo esc_attr($Lucky_Draw_SKU_1); ?>">
  <input type="hidden" name="product_SKU_2" value="<?php echo esc_attr($Lucky_Draw_SKU_2); ?>">
  <input type="hidden" name="product_SKU_3" value="<?php echo esc_attr($Lucky_Draw_SKU_3); ?>">
  <input type="hidden" name="prize_text_1" value="<?php echo esc_attr($text_link_1); ?>">
  <input type="hidden" name="prize_text_2" value="<?php echo esc_attr($text_link_2); ?>">
  <input type="hidden" name="prize_text_3" value="<?php echo esc_attr($text_link_3); ?>">
  <input type="hidden" name="display_as" value="<?php echo esc_attr($display_as); ?>">
  
  
  <div class="col-4 mt-3">
          <label for="validationServer01" class="form-label">Title Color</label>
          <input type="color" class="form-control form-control-color" name="titlecolor" id="titlecolor" value="#7f7f7f" title="Choose a color"><div class="valid-feedback">
          </div>
      </div>
  
      <div class="col-4 mt-3">
          <label for="validationServer01" class="form-label">Background Color</label>
          <input type="color" class="form-control form-control-color" name="backgroundcolor" id="backgroundcolor" value="#e5e5e5" title="Choose a color"><div class="valid-feedback">
          </div>
      </div>
    
      <div class="col-4 mt-3">
          <label for="validationServer01" class="form-label">Description Color</label>
          <input type="color" class="form-control form-control-color" name="descriptioncolor" id="descriptioncolor" value="#7f7f7f" title="Choose a color"><div class="valid-feedback">
          </div>
      </div>
      <div class="col-4 mt-3">
          <label for="validationServer01" class="form-label">Text / Link Color</label>
          <input type="color" class="form-control form-control-color" name="textlinkcolor" id="textlinkcolor" value="#786D6D" title="Choose a color"><div class="valid-feedback">
          </div>
      </div>  
      <div class="col-4 mt-3">
          <label for="validationServer01" class="form-label">Border Color</label>
          <input type="color" class="form-control form-control-color" name="bordercolor" id="bordercolor" value="#FF5693" title="Choose a color"><div class="valid-feedback">
          </div>
      </div>  
      <div class="col-4 mt-3">
          <label for="validationServer01" class="form-label">Draw Date Color</label>
          <input type="color" class="form-control form-control-color" name="drawdatecolor" id="drawdatecolor" value="#FF5693" title="Choose a color"><div class="valid-feedback">
          </div>
      </div>
  
      <div class="col-4 mt-3">
          <label for="validationServer01" class="form-label">Horizontal Line Color</label>
          <input type="color" class="form-control form-control-color" name="horizontallinecolor" id="horizontallinecolor" value="#7f7f7f" title="Choose a color"><div class="valid-feedback">
          </div>
      </div>
  
      <div class="col-4 mt-3">
          <label for="validationServer01" class="form-label">Register Button Color</label>
          <input type="color" class="form-control form-control-color" name="registerbuttoncolor" id="registerbuttoncolor" value="#e6b5c9" title="Choose a color"><div class="valid-feedback">
          </div>
      </div>  
       
      <div class="col-4 mt-3">
          <label for="validationServer01" class="form-label">Register Text Color</label>
          <input type="color" class="form-control form-control-color" name="registerbuttontext" id="registerbuttontext" value="#7f7f7f" title="Choose a color"><div class="valid-feedback">
          </div>
      </div>  
     
      <div class="col-4 mt-3">
          <label for="validationServer01" class="form-label">Close Button Color</label>
          <input type="color" class="form-control form-control-color" name="closebuttoncolor" id="closebuttoncolor" value="#e6b5c9" title="Choose a color"><div class="valid-feedback">
          </div>
      </div>  
       
      <div class="col-4 mt-3">
          <label for="validationServer01" class="form-label">Close Text Color</label>
          <input type="color" class="form-control form-control-color" name="closebuttontext" id="closebuttontext" value="#7f7f7f" title="Choose a color"><div class="valid-feedback">
          </div>
      </div>  
  
      <?php 
      
      include Lucky_Draw_Plugin_Path.'includes/preview.php'; 
      ?>
     
     <?php wp_nonce_field( "Lucky_Draw_Nonce", "Lucky_Draw_Nonce_Field");  ?>
       <div class="d-grid gap-2 d-md-flex justify-content-md-end" style="margin-top:3em;margin-bottom:0.5em;margin-right:2em;">
         <input type="submit" class="luckydrawsubmitbutton" name="Lucky_Draw_Submit" value="Submit">
       </div>
      
      </form>

    
 </div>

</div>
<?php } ?>

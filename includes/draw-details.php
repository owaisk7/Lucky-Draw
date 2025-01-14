<?php if ( !defined('ABSPATH') ){
  die();
}
?>
<Style>

.panelcontainer{
    width: 100%;
}
</style>
<div class="modal" id="myModal" style="z-index:9999999999999">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Lucky Draw</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
<div class="modal-body">
  <div class="luckydrawformcontainer">
  <form action="<?php echo wp_kses_post(Lucky_Draw_Home_URL).'admin.php?page=adddraw&prize=prize';  ?>" method="post">
     <div class="row mb-3" style="padding-left:35px;padding-right:35px;margin-top:35px;">
       <label for="inputEmail3" class="col-sm-3 col-form-label"></label>
         <div class="col-sm-9 " >
           <div id="luckydrawformnote"><i>
              Use {user} to display participant name in description.<br> 
              Use {draw_date} to display draw date in description<br>
              Use {prize} to display prize in description.<br>
            </i></div>
          </div>
      </div>

      <div class="row mb-3" style="padding-left:35px;padding-right:35px;margin-top:35px;">
        <label for="inputEmail3" class="col-sm-3 col-form-label">Draw Name</label>
          <div class="col-sm-9" >
            <input type="text" name="Lucky_Draw_Name" maxlength="41"  id="luckydrawinputtext" required >
          </div>
      </div>

      <div class="row mb-3" style="padding-left:35px;padding-right:35px;margin-top:35px;">
        <label for="inputEmail3" class="col-sm-3 col-form-label">Draw Date</label>
          <div class="col-sm-9" >
            <input type="text" id="newldform" name="Lucky_Draw_Date" required autocomplete="off">
          </div>
      </div>
      
      <div class="row mb-3" style="padding-left:35px;padding-right:35px;margin-top:35px;">
        <label for="inputEmail3" class="col-sm-3 col-form-label">Draw Description</label>
          <div class="col-sm-9" >
<textarea name="Lucky_Draw_Desc" maxlength="130" rows="4" cols="25" style="padding-top:0.5em;resize: none;" id="luckydrawinputtext" required></textarea>
          </div>
      </div>
    
      <div class="row mb-3" style="padding-left:35px;padding-right:35px;margin-top:35px;">
        <label for="inputEmail3" class="col-sm-3 col-form-label">Draw Position</label>
          <div class="col-sm-9 ">
          <select name="placement" id="luckydrawinputtext">
            <option value="shortcode">[shortcode]</option>
            <option value="absolute">[shortcode] Display Absolute</option>
            <option value="afteraddtocart">After Add To Cart Button(Woocommerce)</option>
            <option value="orderthankyou">After Order Completed</option>
          </select>   <a class="col-sm-4" href="<?php echo Lucky_Draw_Home_URL.'admin.php?page=help'; ?>">  <i> (Know More) </i></a>       
      </div>
      </div>
      <div class="row mb-3" style="padding-left:35px;padding-right:35px;margin-top:35px;">
        <label for="inputEmail3" class="col-sm-3 col-form-label">Mail </label>
          <div class="col-sm-9" >
            <input type="checkbox" name="participationmail" value="sendmail" id="luckydrawinputcheckbox">Send Participation Mail<br> 
 
          </div>
      </div>
      
      <?php wp_nonce_field( "Lucky_Draw_Nonce", "Lucky_Draw_Nonce_Field");  ?>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end" style="margin-bottom:3em;margin-right:2em;">
          <input type="submit" class="luckydrawsubmitbutton" name="Lucky_Draw_Details" value="Next">
        </div>
       
       </form>

     
  </div>




  </div>



    </div>

      <!-- Modal footer -->

    </div>
  </div>
</div>

<Script>
  var myModal = new bootstrap.Modal(document.getElementById('myModal'), {})
  myModal.toggle()
</Script>
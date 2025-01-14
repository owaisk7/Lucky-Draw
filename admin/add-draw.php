<?php 
if ( !defined('ABSPATH') ){
     die();
   }
 include_once Lucky_Draw_Plugin_Path.'includes/topnav.php'; echo '</div>'; 

   //Insert Draw When Submitted
   if(isset($_POST["Lucky_Draw_Submit"])){
    if(wp_kses_post(wp_unslash(isset($_POST["Lucky_Draw_Nonce_Field"])))&&wp_verify_nonce(wp_kses_post(wp_unslash($_POST["Lucky_Draw_Nonce_Field"])),'Lucky_Draw_Nonce')){ 
      include_once Lucky_Draw_Plugin_Path.'includes/putvalues.php';

  }else {  die; }
}

?>
<div class="modal" id="myModal" style="z-index:9999999999999;">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Lucky Draw</h4>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
      
        <input type="button" value="submit" class="btn btn-primary me-md-2" id="Lucky_Draw_Submit_Button" type="button">
        </form>
  <button class="btn btn-primary" type="button">Button</button>
</div>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body" style="background-color:white;">       
<!-- Include Draw Details Page If style and prize is not set in url  
 Draw Details is the page to enter name desc and date etc.-->     
     
  <?php

  if(isset($_GET["next"])){
 $mode_set=$_GET["next"];

  switch ($mode_set) {
    case "details":
      include_once Lucky_Draw_Plugin_Path.'admin/step2.php'; 

      //code block
      break;
    case "prize":
      //code block;
      break;
    case "submit":
      include_once Lucky_Draw_Plugin_Path.'includes/putvalues.php'; 

      //code block
      break;
     case "styles":
      break; 
    default:
      //code block
  }
}else{
  include_once Lucky_Draw_Plugin_Path.'admin/email.php'; 

}
?>

    </div>
  </div>
</div>

<Script>
  var myModal = new bootstrap.Modal(document.getElementById('myModal'), {})
  myModal.toggle()
</Script>
<Script>
  $(".Lucky_Draw_Name").keyup(function(){
    var val=$(this).val();
    $("#Lucky_Draw_Name_Preview").html(val)    
 
});
$(".Lucky_Draw_Date").change(function(){
    var val=$(this).val();
    $("#Draw_Date_Preview").html(val)    
 
});
$(".Lucky_Draw_Desc").keyup(function(){
    var val=$(this).val();
    var prize=$(".prize_text_1").val();
    val = val.replace("{prize}","<span class='luckydrawprize'>"+prize+"</span>");
    $("#Lucky_Draw_Desc_Preview").html(val);
    
});

$(".prize_text_1").keyup(function(){

    var val=$(".Lucky_Draw_Desc").val();
    var prize=$(".prize_text_1").val();
    val = val.replace("{prize}","<span class='luckydrawprize'>"+prize+"</span>");
    $("#Lucky_Draw_Desc_Preview").html(val);
});

</Script>
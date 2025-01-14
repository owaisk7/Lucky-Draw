<?php 
if ( !defined('ABSPATH') ){
     die();
   }

   if (!function_exists('remove_menus')) {
    function remove_menus () {
      remove_menu_page('admin.php');
    }
  }
  add_action('admin_menu', 'remove_menus');

 include_once Lucky_Draw_Plugin_Path.'includes/topnav.php'; echo '</div>'; ?>
<Style>
#luckydrawleftcontainer{
width:55%;
min-height:15em;
margin-top:2em;
background-color:#ffffff;
float: left;
  }
#luckydrawpreviewcontainer{
width:35%;
min-height:15em;
margin-top:5em;
float: left ;

  }
  #luckydrawmiddlecontainer{
width:5%;
min-height:15em;
margin-top:5em;
float: left ;
color:white;
  }

#choosedrawtype{
width:100%;
background-color: white;
margin-top:1em;


}
#choosedrawtypebutton{
    background-color: #3498DB;
    width: 100%;
    float: left;
    height:4em;
    margin-bottom:2em;

    border: none;
    color: white;
}
#choosedrawtypebutton:hover{
background-color:#2980B9;


}
.card:hover{
  background-color:rgb(210, 200, 200);
box-shadow: 0 0 11px rgba(33,33,33,.2);
}
#thisbutton{
border:none;
background-color:rgb(210, 200, 200);
padding: 10px;
}
   #regForm {
  background-color: #ffffff;
  margin: 100px auto;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

/* Style the input fields */
input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

/* Mark the active step: */
.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #04AA6D;
}
</Style>
<div class="shadow p-3 mb-5 bg-body-primary rounded" id="luckydrawleftcontainer">

    <form action="<?php echo wp_kses_post(Lucky_Draw_Home_URL).'admin.php?page=demo&type=type';  ?>" method="post">
        <div style="width:90%;margin-left:5%;min-height:30em;">
    <?php 
            echo lucky_Draw_Box_Type("Shortcode","A Simple Draw That Can be placed Anywhere With Shortcode","Shortcode","blue");
            echo lucky_Draw_Box_Type("Pop Up","Create A Draw Box That Opens When User Visits A Page ","Pop Up","white"); 
            echo lucky_Draw_Box_Type("Image","Create A Draw Box With Image Or Image With Text ","Image Box","white"); 
            echo lucky_Draw_Box_Type("Coming Soon","Create A Draw Box That Opens When User Visits A Page ","Pop Up",color: "blue"); 

    ?>    
    </div>   
        <?php wp_nonce_field( "Lucky_Draw_Nonce", "Lucky_Draw_Nonce_Field");  ?>
        
    </form>



</div>
<div id="luckydrawmiddlecontainer">
</div>
<div  class="shadow p-3 mb-5 bg-body-prim rounded" id="luckydrawpreviewcontainer">
<div class="card" aria-hidden="true">
  <div class="card-body">
    <h5 class="card-title placeholder-glow">
      <span class="placeholder col-12"></span>
    </h5>
    <p class="card-text placeholder-glow">
      <span class="placeholder col-12"></span>
      <span class="placeholder col-4"></span>
      <span class="placeholder col-4"></span>
      <span class="placeholder col-6"></span>
      <span class="placeholder col-8"></span>
    </p>
    <a class="btn btn-primary disabled placeholder col-6" aria-disabled="true"></a>
  </div>
</div>
</div>

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
    Open modal
  </button>
<div class="modal" id="myModal" style="z-index:9999999999999">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
<?php include Lucky_Draw_Plugin_Path.'admin/email.php'; ?>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>


<?php if(isset($_POST["Shortcode"])){

if($_POST["Shortcode"]=="Shortcode"){

    echo "It's Done";


}else{echo "Not Donw"; }
}
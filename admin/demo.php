<?php include_once Lucky_Draw_Plugin_Path.'includes/topnav.php'; echo '</div>';  ?>
<Style>
    @import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,700,700i');
@import url('https://fonts.googleapis.com/css?family=Bree+Serif');


.tabs {
  display: flex;
  flex-wrap: wrap;
  max-width: 700px;
  margin-top: 4em;
  margin-left:4em;
  background: #e5e5e5;
  box-shadow: 0 48px 80px -32px rgba(0,0,0,0.3);
}
.input {
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
    width: auto;
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

#ldform{
  
  border: none; /* Removes the border */
  background-color: #e5e5e5; /* Sets the background color to pink */
  padding-left:15px;
  padding-top:5px;
  padding-bottom:5px; /* Optional: adds some padding for better text positioning */
  color: #7f7f7f; /* Optional: sets the text color to black */
  font-size: 16px; /* Optional: adjusts the font size */
  width: 100%; /* Optional: makes the input take up the full width */
  outline: none;
  box-shadow: none;
}
.luckydrawsubmitbutton,.luckydrawpreviewbutton{
padding: 0.5em;
padding-left: 1em;
padding-right: 1em;
font-weight: bold;
font-size: 1em;
border:none;
color: #7f7f7f;
background-color: #e5e5e5;
transition: 0.3s;

}
.luckydrawsubmitbutton:hover{
background-color:#e6b5c9;
transition: 0.3s;
}
.luckydrawpreviewbutton{
background-color: #FFFFFF;
border:1px solid #7f7f7f;
}
.luckydrawpreviewbutton:hover{
background-color:#e6b5c9;
transition: 0.3s;
border:1px solid #FFFFFF;
}
#luckydrawformnote{
padding: 1em;
background-color: #f5f5f5;
color: #7f7f7f;

}
</Style>
<input type="button" id="Previewmail"class="luckydrawpreviewbutton" value="Send Preview Mail">

<div class="tabs">
  <input class="input" name="tabs" type="radio" id="tab-1" checked="checked"/>
  <label class="label" for="tab-1">Participation Mail</label>
  <div class="panel">
  <form action="" method="post">
     <div class="row mb-3" style="padding-left:35px;padding-right:35px;margin-top:35px;">
       <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
         <div class="col-sm-10" >
           <div id="luckydrawformnote"><i>
              Use {draw_name} to display draw name. <br>
              Use {user_name} to display participant name.<br> 
              Use {draw_date} to display draw date.<br>
              Use {prize} to display prize.<br>
              Use HTML Tags like &lth1&gt &ltp&gt &ltb&gt 
            </i></div>
          </div>
      </div>

      <div class="row mb-3" style="padding-left:35px;padding-right:35px;margin-top:35px;">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Subject</label>
          <div class="col-sm-10" >
            <input type="text" id="ldform" required >
          </div>
      </div>
      <div class="row mb-3" style="padding-left:35px;padding-right:35px;margin-top:35px;">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Mail Heading</label>
          <div class="col-sm-10" >
            <input type="text" id="ldform" maxlength="60" value="Congratulations {user_name} "required  >
          </div>
      </div>
      <div class="row mb-3" style="padding-left:35px;padding-right:35px;margin-top:35px;">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Mail Content</label>
          <div class="col-sm-10" >
<textarea rows="10" cols="25"style="padding-top:0.5em;" id="ldform" required>
<p>Dear {user_name} ,You're officially entered into the {draw_name} </p> [Draw Name] : {draw_name}
[Draw Name] : {draw_name}
[Draw Name] : {draw_name}
</textarea>
          </div>
      </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end" style="margin-bottom:3em;margin-right:2em;">
          <button type="button" class="luckydrawpreviewbutton"  data-bs-toggle="modal" data-bs-target="#exampleModal" >Send Preview Mail</button>
          <input type="submit" class="luckydrawsubmitbutton" value="Submit">
        </div>
       
       </form>

     
  </div>

    <input class="input" name="tabs" type="radio" id="tab-2"/>
  <label class="label" for="tab-2">Winner Mail</label>
  <div class="panel">
  <form action="" method="post">
     <div class="row mb-3" style="padding-left:35px;padding-right:35px;margin-top:35px;">
       <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
         <div class="col-sm-10" >
           <div id="luckydrawformnote"><i>
              Use {draw_name} to display draw name. <br>
              Use {user_name} to display participant name.<br> 
              Use {draw_date} to display draw date.<br>
              Use {prize} to display prize.<br>
            </i></div>
          </div>
      </div>

      <div class="row mb-3" style="padding-left:35px;padding-right:35px;margin-top:35px;">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Subject</label>
          <div class="col-sm-10" >
            <input type="text" id="ldform" required >
          </div>
      </div>
      <div class="row mb-3" style="padding-left:35px;padding-right:35px;margin-top:35px;">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Mail Content</label>
          <div class="col-sm-10" >
            <textarea rows="10" cols="25"style="padding-top:0.5em;" id="ldform" required>
            <h1> [Contest Name] <br>Participation Confirmation</h1>
 
            <p>Dear [Participant Name]" ,</p>
            <p>Thank you for participating in our Lucky Draw! We are excited to inform you that your entry has been successfully registered. You are now in the running to win amazing prizes!</p>
            <p>The lucky draw will take place on [Draw Date] and the winners will be anno

            </textarea>
          </div>
      </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end" style="margin-bottom:3em;margin-right:2em;">
          <input type="submit" class="luckydrawsubmitbutton" value="Submit">
        </div>
       
       </form>
          
     
  </div>
  <input class="input" name="tabs" type="radio" id="tab-3"/>
  <label class="label" for="tab-3">Losing Mail</label>
  <div class="panel">
    <h1>Losing Mail </h1>
    <p>Tekno Match (Citrus ×clementina) is a hybrid between a mandarin orange and a sweet orange, so named in 1902. The exterior is a deep orange colour with a smooth, glossy appearance. Clementines can be separated into 7 to 14 segments. Similarly to tangerines, they tend to be easy to peel.</p>
  </div>

  <input class="input" name="tabs" type="radio" id="tab-4"/>
  <label class="label" for="tab-4">Demo</label>
  <div class="panel">
  <?php include Lucky_Draw_Plugin_Path.'admin/emailformat.php'; ?>
  
  </div>

  
</div>
      

<!-- Modal -->
<div class="modal-dialog modal-fullscreen-sm-down">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen-sm-down">
    <div class="modal-content" style="width:50em;margin-left:-10em;">
      <div class="modal-header" >
        <h1 class="modal-title fs-5" id="exampleModalLabel">Participation Mail</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="height:100%;">
       <?php include Lucky_Draw_Plugin_Path.'admin/emailformat.php'; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div><div>
<Style>
.col-4{
font-size: 15px;
}
.colorbox{
    width:20px;
    padding: 2px;
    border:1px solid white;
    height:20px;
}
.sliderbox{
    width:47px;
    height:15px;
    font-size: 10px;
    accent-color:#7f7f7f;
}
input[type=color]{
border: none;
}
.inputselect{
font-size: 9px !important;
background-color: red;
width:50px;
}
#headingtextalign{
width:60px;
height:15px;
font-size: 10px;
}
</Style>

<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button  style="background-color:#e6e6e6;color:#7f7f7f;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        Box Settings 
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <div class="row" style="color:#7f7f7f;">
            <div class="col-8 mt-3">Background Color</div>
            <div class="col-2 mt-3"><input type="color" id="backgroundcolor" class="colorbox" name="boxbackgroundcolor"  value="#e5e5e5" title="Choose a color"></div>
            <div class="col-8 mt-3">Divider Color</div>
            <div class="col-2 mt-3"><input type="color"  id="dividercolor" name="boxdividercolor"value="#FF5693" class="colorbox"></div>  
            <div class="col-8 mt-3">Divider Size</div>
            <div class="col-2 mt-3"><input type="number" id="dividersize" class="sliderbox" name="boxdividersize" onkeyup="if(this.value > 25) this.value = null;"  min="0" max="10" value="2"> </div> 
            <div class="col-8 mt-3">Border Color</div>
            <div class="col-2 mt-3"><input type="color"  id="bordercolor" value="#ffffff"name="boxbordercolor" value="#FF5693" class="colorbox"></div>
            <div class="col-8 mt-3">Border Size</div>
            <div class="col-2 mt-2"><input type="number" id="bordersize" value="0" class="sliderbox" name="boxbordersize" onkeyup="if(this.value > 5) this.value = null;"   min="0" max="5"> </div> 
            <div class="col-8 mt-3">Border Radius</div>
            <div class="col-2 mt-3"><input type="number" id="borderradius" value="10" class="sliderbox" name="boxborderradius" onkeyup="if(this.value > 25) this.value = null;"   min="0" step="1" max="25"></div> 

       </div>
    </div>
  </div>
</div>


  <div class="accordion-item">
    <h2 class="accordion-header">
      <button style="background-color:#e6e6e6;color:#7f7f7f;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        Heading Settings 
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
      <div class="row">
            <div class="col-8 mt-3"> Color</div>
            <div class="col-2 mt-3"><input type="color"  id="titlecolor" value="#FF5693" class="colorbox"></div>  
            <div class="col-8 mt-3">Font-Size </div>
            <div class="col-2 mt-3 "><input type="number" class="sliderbox"  onkeyup="if(this.value > 35) this.value = null;" id="headingfontsize" name="points" min="0" step="1" max="35"></div>
            <div class="col-8 mt-3">Text Align </div>
            <div class="col-2 mt-3"><select  class="inputselect" name="cars" id="headingtextalign"><option value="left">left</option><option value="center">center</option><option value="right">right</option></select></div>
                                    
        </div>
    </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button style="background-color:#e6e6e6;color:#7f7f7f;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        Description Setting
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
      <div class="row">
            <div class="col-8 mt-3"> Color</div>
            <div class="col-2 mt-3"><input type="color"  id="descriptioncolor" value="#FF5693" class="colorbox"></div>  
            <div class="col-8 mt-3">Font-Size </div>
            <div class="col-2 mt-3 "><input type="number" class="sliderbox"  onkeyup="if(this.value > 35) this.value = null;" id="descriptionfontsize" name="points" min="0" step="1" max="35"></div>
            <div class="col-8 mt-3">Text Align </div>
            <div class="col-2 mt-3"><select class="inputselect" name="cars" id="descriptiontextalign"><option value="left">left</option><option value="center">center</option><option value="right">right</option></select></div>
                                    
        </div>
    </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header">
      <button style="background-color:#e6e6e6;color:#7f7f7f;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
        Prize Settings 
      </button>
    </h2>
    <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
      <div class="row">
            <div class="col-8 mt-3"> Color</div>
            <div class="col-2 mt-3"><input type="color"  id="prizecolor" value="#FF5693" class="colorbox"></div>  
            <div class="col-8 mt-3">Background Color</div>
            <div class="col-2 mt-3"><input type="color"  id="prizebackgroundcolor" value="#FF5693" class="colorbox"></div>  
            <div class="col-8 mt-3">Font-Size </div>
            <div class="col-2 mt-3 "><input type="number" id="prizefontsize" class="sliderbox"  onkeyup="if(this.value > 40) this.value = null;"  name="points" min="0" step="1" max="40"></div>
                                    
        </div>
    </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header">
      <button style="background-color:#e6e6e6;color:#7f7f7f;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
        Date Settings 
      </button>
    </h2>
    <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
      <div class="row">
            <div class="col-8 mt-3"> Color</div>
            <div class="col-2 mt-3"><input type="color"  id="drawdatecolor" value="#FF5693" class="colorbox"></div>  
            <div class="col-8 mt-3">Font-Size </div>
            <div class="col-2 mt-4 "><input type="number" class="sliderbox"  onkeyup="if(this.value > 35) this.value = null;" id="drawdatefontsize" name="points" min="0" step="1" max="35"></div>
            <div class="col-8 mt-4">Text Align </div>
            <div class="col-2 mt-4"><select class="inputselect" name="cars" id="drawdatetextalign"><option value="left">left</option><option value="center">center</option><option value="right">right</option></select></div>
                                    
        </div>
    </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header">
      <button style="background-color:#e6e6e6;color:#7f7f7f;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
        Button Settings 
      </button>
    </h2>
    <div id="flush-collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
      <div class="row">
       <b> Register Now Button</b>
            <div class="col-8 mt-3">Background Color</div>
            <div class="col-2 mt-3"><input type="color" class="colorbox"name="submitbackgroundcolor" id="submitbackgroundcolor" value="#e5e5e5" title="Choose a color"></div>
            <div class="col-8 mt-3">Text Color</div>
            <div class="col-2 mt-3"><input type="color"  id="submitcolor" value="#FF5693" class="colorbox"></div>  
        <b class="mt-3">Close Button</b>
            <div class="col-8 mt-3">Background Color</div>
            <div class="col-2 mt-3"><input type="color" class="colorbox" name="submitbackgroundcolor" id="closebackgroundcolor" value="#e5e5e5" title="Choose a color"></div>
            <div class="col-8 mt-3">Text Color</div>
            <div class="col-2 mt-3"><input type="color"  id="closecolor" value="#FF5693" class="colorbox"></div>  
                                               
                                   
        </div>
    </div>
    </div>
  </div>
</div>
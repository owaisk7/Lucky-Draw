$("#Lucky_Draw_Name").bind("change keyup", function(){
    var val = $(this).val();
    $("#Lucky_Draw_Name_Preview").html(val);
});

$("#Lucky_Draw_Desc").focusout(function(){
    var lddesc = $(this).val();
    lddesc=lddesc.replaceAll("[user]", "Username");
    lddesc=lddesc.replaceAll("{", "<strong>");
    lddesc=lddesc.replaceAll("}", "</strong>");
    $("#Lucky_Draw_Desc_Preview").html(lddesc);
});

$(document).ready( function () {
    $('#LuckyDrawTable').DataTable();
} );
	
$('table.display').DataTable();
//$('#drawdatepick').datepicker({

  
//  format: 'mm/dd/yyyy',
//  startDate: '-3d',
//  minDate: 0
//});

$(document).ready( function () {
  $('#myTable').DataTable();
} );

$("#newldform").datepicker({
  startDate: '-3d',
  minDate: 0  
});

//$("#YesImInButton").click(function(){
//  alert("The paragraph was clicked.");
//});
  $('#registerbuttondisabled').click(function() {
      window.location.href = '../wp-login.php';
      return false;
  });


//Box Settings
$("#backgroundcolor").change(function(){
    $("#PreviewBox").css('background', $(this).val());
});
$("#dividersize").change(function(){
    $('.luckydrawhr').css('height', $(this).val());
});
$("#dividercolor").change(function(){
    $('.luckydrawhr').css('background-color', $(this).val());
});

$("#bordercolor").change(function(){
    $('#PreviewBox').css('border-color', $(this).val());
});

$("#bordersize").change(function(){
    $('#PreviewBox').css('border-width', $(this).val());
});

$("#borderradius").change(function(){
    var  val="border-radius:"+$(this).val()+"px !important";
    $('#PreviewBox').attr('style',val);
});

//Description Settings
$("#descriptioncolor").change(function(){
    $("#Lucky_Draw_Desc_Preview").css('color', $(this).val());
});

$("#descriptionfontsize").change(function(){
    var  val="font-size:"+$(this).val()+"px !important";
    $('#Lucky_Draw_Desc_Preview').attr('style',val);
});

$("#descriptiontextalign").change(function(){
    $("#Lucky_Draw_Desc_Preview").css("textAlign",$(this).val());
});


//Heading Settings
$("#titlecolor").change(function(){
    $("#Lucky_Draw_Name_Preview").css('color', $(this).val());
});

$("#headingfontsize").change(function(){
    var  val="font-size:"+$(this).val()+"px !important";
    $('#Lucky_Draw_Name_Preview').attr('style',val);
});

$("#headingtextalign").change(function(){
    $("#Lucky_Draw_Name_Preview").css("textAlign",$(this).val());
});

//Prize Settings
$("#prizebackgroundcolor").change(function(){
    $(".luckydrawprize").css('background', $(this).val());
});
$("#prizecolor").change(function(){
    $(".luckydrawprize").css('color', $(this).val());
});

$("#prizefontsize").change(function(){
    var  val="font-size:"+$(this).val()+"px !important";
    $('.luckydrawprize').attr('style',val);
});

//Draw Date Settings
$("#drawdatecolor").change(function(){
    $("#Draw_Date_Preview").css('color', $(this).val());
});

$("#drawdatefontsize").change(function(){
    var  val="font-size:"+$(this).val()+"px !important";
    $('#Draw_Date_Preview').attr('style',val);
});

$("#drawdatetextalign").change(function(){
    $("#Draw_Date_Preview").css("textAlign",$(this).val());
});




//

$("#submitbackgroundcolor").change(function(){
    $('#luckydrawsubmitbuttonpreview').css('background-color', $(this).val());
});

$("#submitcolor").change(function(){
    $('#luckydrawsubmitbuttonpreview').css('color', $(this).val());
});

$("#closebackgroundcolor").change(function(){
    $('#luckydrawclosebuttonpreview').css('background-color', $(this).val());
});

$("#closecolor").change(function(){
    $('#luckydrawclosebuttonpreview').css('color', $(this).val());
});



$("#Lucky_Draw_Submit_Button").click(function(){
    //Box Settings
   var val1="background-color:"+$("#backgroundcolor").val()+";";
   var val2="color:" +$("#titlecolor").val()+";";
   var val3=$("#bordercolor").val();
   var val4=$("#bordersize").val();
   var val5="border:"+val4+"px solid "+val3+";";
   var val6="border-radius:"+$("#borderradius").val()+"px;";
   $("#boxsettings").val(val1+val2+val5+val6);

//HeadingBox
   var val1="color:"+$("#titlecolor").val()+";";
   var val2="font-size:" +$("#headingfontsize").val()+"px;";
     var val3="tetx-align:"+$("#headingtextalign").val()+";";
   $("#headingsettingsbox").val(val1+val2+val3);

//Divider Settings

var val1="height:"+$("#dividersize").val()+"px;";
   var val2="font-size:"+$("#dividercolor").val();
   $("#dividersettingsbox").val(val1+val2);

//Description


var val1="color:"+$("#descriptioncolor").val()+";";
var val2="font-size:" +$("#descriptionfontsize").val()+";";
var val3="text-align:"+$("#descriptiontextalign").val()+";";
$("#descriptionsettingsbox").val(val1+val2+val3);

//Prize
var val1="color:"+$("#drawdatecolor").val()+";";
var val2="font-size:" +$("#drawdatefontsize").val()+";";
var val3="text-align:"+$("#drawdatetextalign").val()+";";
$("#drawdatesettingsbox").val(val1+val2+val3);

//Button Settings
var val1="background-color:"+$("#submitbackgroundcolor").val()+";";
var val2="color:" +$("#submitcolor").val()+";";
$("#registernowsettingsbox").val(val1+val2);


var val1="background-color:"+$("#closebackgroundcolor").val()+";";
var val2="color:" +$("#closecolor").val()+";";
$("#clossettingsbox").val(val1+val2);




//Divider Settings

var val1="height:"+$("#dividersize").val()+";";
var val2="background-color:" +$("#dividercolor").val()+";";
$("#dividersettingsdrawbox").val(val1+val2);

$(".luckydrawsubmitbutton").click();

});




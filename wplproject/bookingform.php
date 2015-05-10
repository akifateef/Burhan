<?php
include('config.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<style>
#borderimg2 { 
    border: 10px solid transparent;
    padding: 15px;
    -webkit-border-image: url(bor.png) 10 stretch;
}
      #map-canvas {
      	border-radius: 25px;
      	border: 2px solid black;
        width: 400px;
        height: 300px;
      }
      .move{
	font-size: 15px;
;
	text-align:left;}
    </style>
     <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
      function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
          center: new google.maps.LatLng(44.5403, -78.5463),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HILTON HOTEL</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet" />

    <script type="text/javascript">
<!-->
var image1=new Image()
image1.src="9.jpg"

var image2=new Image()
image2.src="10.jpg"

var image3=new Image()
image3.src="11.jpg"

var image4=new Image()
image4.src="12.jpg"

var image5=new Image()
image5.src="13.jpg"

var image6=new Image()
image6.src="14.jpg"

var image7=new Image()
image7.src="15.jpg"


var image8=new Image()
image8.src="16.jpg"


//-->
</script>


<script type="text/javascript">




function eformat()
{
if (!document.form.Email.value.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{3})+$/)) 
{

document.getElementById("eid").style.backgroundColor="red";
alert('correct your mail');
   
} 
else
{
document.getElementById("eid").style.backgroundColor="green";
}

}


function calc(){


var k= document.form.Members.value;

if(k>5){
document.form.Members.value=alert('max 5 person,s per room'); 
  
}




}

function calcAge()
{

    var x = document.getElementById('cl').selectedIndex;
var y = document.getElementById('cl').options;

if(document.getElementById('cl').selectedIndex==1)
{
    var z = document.form.day.value;

    document.form.price.value=500*z+"$";
}

else if(document.getElementById('cl').selectedIndex==2)
{
   var z = document.form.day.value;

    document.form.price.value=300*z+"$";
}

else if(document.getElementById('cl').selectedIndex==3)
{
    var z = document.form.day.value;

    document.form.price.value=100*z+"$";
}

}



function validate () {

var name = document.form.Name.value;
var email= document.form.Nic.value;
var comp= document.form.Email.value;
var phn= document.form.Phone.value;
var fax = document.form.Fax.value;
var sub = document.form.Address.value;
var mess = document.form.City.value;
var Class = document.form.Class.value;
var member = document.form.Members.value;
var code = document.form.Code.value;
var Day = document.form.day.value;

var price = document.form.price.value;

    if( (name=="")||
    (email=="")||
    (comp=="")||
    (phn=="")||
    (fax=="") ||
    (sub=="")||(mess=="")||(Class=="")||(member=="")||(code=="")||(price=="")||(Day=="")
    )
{
    alert('Please fill all the Boxes');
}


}
</script>



</head>
<body style="background-color:#D6D6C2">
<div class="container">

    <!-- NAVBAR
    ================================================== -->
    <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0px; border-radius: 25px;">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="project1.html">HILTON HOTEL</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="project1.html">Home</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="contact.html">Contacts</a></li>
                        <li><a href="foods.html">Foods</a></li>
                        <li><a href="bookingform.php">Booking</a></li>
                        <li><a href="detail.html">Details</a></li>
                         <li><a href="feedback.php">Feedback</a></li>
                    </ul>
                </div>
            </div>
        </nav>

    </div>


    <div class="container">
   
            <!-- bullet navigator container -->
            <div u="navigator" class="jssorb05" style="bottom: 16px; right: 6px;">
                <!-- bullet navigator item prototype -->
                <div u="prototype"></div>
            </div>
      
            
            <!-- Arrow Left -->
           
            <!--#endregion Arrow Navigator Skin End -->
            <a style="display: none" href="http://www.jssor.com">Bootstrap Slider</a>
        </div>
        <!-- Jssor Slider End -->
    
<!-- ------------------------------start------------------------------- -->


<hr>
<center>
<br>If you would like to make an enquiry at this stage, please complete the online form below.<br>

If you would like to make a booking please either call us on +44 (0) 207 575 6480 or <br>download our full booking form at the bottom of this page. </center><br>
<center>
<center><table ><img align="right"src="o1.gif" width="500"height="400"/>

<form name="form" method="post" action="class.php">
<table border="0">
<tr><td>Name:</td>
<td><input type="text"  name="Name" size="25"placeholder="Full Name"><br><br> </td></tr><br>
<tr><td>Nic:</td>
<td><input type="text"  name="Nic" size="25"/><br><br></td></tr>
<tr><td>Email:</td>
<td><input type="text"  name="Email" id="eid"  onChange="eformat()" size="25"/><br><br> </td></tr><br>
<tr><td>Phone:</td>
<td><input type="text"  name="Phone" size="25"/><br><br></td></tr>

<tr><td>Fax:</td>
<td><input type="text"  name="Fax" size="25"/><br><br> </td></tr>
<tr><td>Address:</td>
<td><input type="text"  name="Address"size="25"/><br><br></td></tr>
<tr><td>City:</td>
<td><input type="text"  name="City" size="25"/> <br><br></td></tr>





<tr><td>No.of members:</td>
<td><input type="text"  name="Members"placeholder="enter in digits"size="25" onChange="calc()"/><br><br></td></tr>

<tr><td>Room code:<br></td>
<td><input type="text" name="Code"/><br><br></td></tr>



<tr><td>No of days:</td>
<td><input type="text" name="day"placeholder="enter in digits"size="25"/><br><br></td></tr>


<tr><td>Room Class:</td>
<td><select name="Class" id="cl" onChange="calcAge()"/>
<option value="default"size="25"></option>
<option size="25">class A</option>
<option size="25">class B</option>
<option size="25">class C</option>
</select><br><br>
</td>
</tr>

<tr><td>Total price:</td>


<td><input type="text" name="price" size="25"readonly="readonly"/><br><br></td>
</tr>
 
<tr>
<td colspan="2" align="center">

<input type="submit" value="Done" name="save"onclick="validate()"></td></td>
</tr>


</table>

</form>




<!--------------------------------- yahn tk end hai--------------------------------- -->
        <!-- /END THE FEATURETTES -->
        <!-- FOOTER -->
        <footer>
            
            <center><p>Copyright &copy;  &middot; <a href="#">Privacy</a> &middot; </p></center>
            <center><p class="cc"><a href="#">Back to top</a></p></center>
        </footer>

    </div><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery-1.9.1.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="ie10-viewport-bug-workaround.js"></script>

    <!-- jssor slider scripts-->
    <!-- use jssor.js + jssor.slider.js instead for development -->
    <!-- jssor.slider.mini.js = (jssor.js + jssor.slider.js) -->
    <script type="text/javascript" src="jssor.slider.mini.js"></script>
    <script>

        jQuery(document).ready(function ($) {
            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                $AutoPlayInterval: 2000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideEasing: $JssorEasing$.$EaseOutQuint,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
                $SlideDuration: 800,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $ArrowNavigatorOptions: {                           //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,                  //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Scale: false                                   //Scales bullets navigator or not while slider scale
                },

                $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 12,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 4,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1,                                //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                    $Scale: false                                   //Scales bullets navigator or not while slider scale
                }
            };

            //Make the element 'slider1_container' visible before initialize jssor slider.
            $("#slider1_container").css("display", "block");
            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth) {
                    jssor_slider1.$ScaleWidth(parentWidth - 30);
                }
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>
    </div>
</body>
</html>
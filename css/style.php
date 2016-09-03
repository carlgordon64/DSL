<?php
/*** set the content type header ***/
/*** Without this header, it wont work ***/
header("Content-type: text/css");


$color = "white";
$border = '1px solid';
$grow = 200;
$Techcolor = "#90bc00";
$Codingcolor = "#61bfb1";
$Graphicscolor = "#fb885c";

$Lerpcolor= dechex(rand(0x000000, 0xFFFFFF));
$Chosencolor= "#80dfd6";
$Welcome_image="http://www.dslautomotive.co.nz/images/1208/477/hp-gallery01.jpg?h=6122db3a";
$Mechanic_image="http://www.dslautomotive.co.nz/images/1099/386/boschservicecentre2.jpg?h=806c9da7";
$Injection_image="http://www.dslautomotive.co.nz/images/1099/386/fuelnozzle.jpg?h=8f3025ea";
$Turbo_image="http://www.dslautomotive.co.nz/images/1099/386/turbocharger2.jpg?h=681757e9";

$Banner_image="http://www.dslautomotive.co.nz/images/0/0/dc-45900201/header.png";
$FootBanner_image="http://www.dslautomotive.co.nz/images/1100/259/hp-img-brands2.gif?h=e6fa9deb";

?>

.enquire{
  width:330px;
  height:82px;
  background:#f5e901;
  color:#2a035d;
  border:0px;
  font-family: 'Montserrat', sans-serif;
  font-size:20px;
  padding:20px;
}
textarea {
  width: 90%;
  min-height:200px;
  border: 3px solid #cccccc;
  padding: 5px;
  font-family: Tahoma, sans-serif;
}
.enquire:hover{
  background-color:rgba(245,233,1,0.3);
}
.widthscale{
  width:85%;
}
#enquireSub{
  padding:10px;
  background:#340370;
  border:none;
   font-family: 'Play', sans-serif;
   font-size:20px;
  margin-top:10px;
  color:#454545;
  width:70%;
  color:#f5e901;

}
#resizer{
  width:100%; height:386px;
}
#serviceEnq{
  padding:10px;
  background:#f5e901;
  border:4px solid white;
   font-family: 'Play', sans-serif;
   font-size:20px;
  margin-top:10px;
  width:auto;
  color:#000;

  border-bottom-right-radius:10px;
  border-bottom-left-radius:10px;
  border-top-left-radius:10px;
  border-top-right-radius:10px;

}
#enquireform{
  padding:10px;
  margin-top:10px;
  border: 3px solid #cccccc;
  color:#454545;
  width:100%;
}
#service-teaser{
  width:330px;
  height:235px;
  background:#e0e0e0;
  margin:auto;
  cursor:pointer;

}
#teaser-text{
  width:330px;
  padding-top:20px;
  background:transparant;
  margin:auto;
  padding:10px;
 
}
#service-text{
font-family: 'Montserrat', sans-serif;
color:#2a035d;
 
}
.move4{
  margin-top:50px;
  padding-left:20px;
  padding-right:20px;
}
.move5{
  margin-top:0px;
  padding:0px;
}
.welcomeDSL{
  position:absolute; right:0; height:100%;padding-right:10px; max-width:40%; text-align:right;background-color:rgba(0,0,100,0); overflow-x:hidden;
}
.spantext{
   font-family: 'Roboto', sans-serif;
   color: #e0e0e0;
   font-size:36px;
   padding:0px;
}
.openIndicator1{
  width:20px;
  display:inline-block;
  height:20px;
  border-radius:100%;
  background-color:green;
}
.closedIndicator{
   width:20px;
   display:inline-block;
  height:20px;
  border-radius:100%;
  background-color:red;
}

.contactDets{
  width:320px; padding-right:20px;height:120px; text-align:right; position:absolute; right:0;  background:transparant;
}
.contactDets p{
  color:#f5e901;
}

#welcometint{

  width:100%; height:auto; margin-top:0px; background-color:rgba(0,0,0,0.2);
}
#dslbanner{

    background-image: url("<?=$Banner_image?>");
    background-size: 100% 150px;
    background-repeat: none;

background-position: center;

  }
  #dslfootbanner{

    background-image: url("<?=$FootBanner_image?>");
    background-size: 100% 259px;
    background-repeat: none;

background-position: center;

  }
  #automotive{
   font-family: 'Play', sans-serif;
    font-size: 30px;
    width:287px;
    padding-top: 0px;
    padding-bottom: 0px;
    text-indent:20px;
    letter-spacing:6px;
    cursor:initial;
    color: #2A035D;
  }
  #autoalttext{
   font-family: 'Play', sans-serif;
    font-size: 20px;
    padding-top: 0px;
    padding-bottom: 0px;
    color: #0067BB;
  }
#Logo{
    background-size: 287px 120px;
    background-repeat: no-repeat;

background-position: 50 50;

  }
  #Sponsors{
    background-size: 250px 120px;
    background-repeat: no-repeat;
    background-position: left;
}

#jamesjean{
    background-image: url("<?=$Welcome_image?>");
    background-size: 1208px 477px;
    background-repeat: repeat;
    background-position: center;
}
#mechanic{
    background-image: url("<?=$Mechanic_image?>");
    background-size: 1100px 386px;
    background-repeat: no-repeat;
    background-position: center;
}
#injection{
    background-image: url("<?=$Injection_image?>");
    background-size: 1100px 386px;
    background-repeat: no-repeat;
    background-position: center;
}
#turbos{
    background-image: url("<?=$Turbo_image?>");
    background-size: 1100px 386px;
    background-repeat: no-repeat;
    background-position: center;
}

.landpad{
	padding:0px;
}
.landpad p{
	color:white;
	font-size:20px;
}
.stylebreak{
transition:0.8s ease all;
	width:100%;
	height:20px;
	opacity:0.5;
}
#paintTech{
	background-color: <?=$Techcolor?>;
  font-family: 'Raleway', sans-serif;
  font-size:20px;
}
#paintGraphics{
	background-color: <?=$Graphicscolor?>;
  font-family: 'Raleway', sans-serif;
  font-size:20px;
}
#paintCoding{
	background-color: <?=$Codingcolor?>;
  font-family: 'Raleway', sans-serif;
  font-size:20px;
}
.instyle{
 font-family: 'Roboto', sans-serif;
 width:100%;
 background-color: rgba(128,195,66,0.9);
 border: 2px solid transparent;
 text-shadow: 2px 4px 3px rgba(0,0,0,0.3);
	font-size: 18px;
min-height:50px;
max-height:70px;
	color: #fff;
padding: 20px;
border-radius: 0px;
}
.instyle:hover{

background-color: rgba(255,223,0,0.9);
color: #fff;
transition:0.5s ease all;
}
#branded{
  
   font-family: 'Raleway', sans-serif;
   text-decoration: overline rgba(128,196,66,0.7);;


}
.boom{
transition:0.5s ease all;
	background-color:<?=$color?>;
	padding: 0px;
text-align: center;
height: 350px;
min-height: 300px;
overflow: scroll;
}
#shadowed{
  
  text-shadow: 6px 8px 4px rgba(0,0,0,0.9);
}
.Techfancy{
  opacity: 0.8;

text-shadow: 2px 4px 3px rgba(0,0,0,0.3);
  color: #eeeeee;
  padding: 5px;
  background-color:  <?=$Techcolor?>;
   border-top-right-radius: 10px;
  border-top-left-radius: 10px;
  border-bottom-right-radius: 10px;
  border-bottom-left-radius: 10px;
text-align: center;
   font-family: 'Raleway', sans-serif;
}
.Graphicsfancy{
  opacity: 0.8;

text-shadow: 2px 4px 3px rgba(0,0,0,0.3);
  color: #eeeeee;
  padding: 5px;
  background-color: <?=$Graphicscolor?>;
   border-top-right-radius: 10px;
  border-top-left-radius: 10px;
  border-bottom-right-radius: 10px;
  border-bottom-left-radius: 10px;
text-align: center;
   font-family: 'Raleway', sans-serif;
}
.Codingfancy{
  opacity: 0.8;

text-shadow: 2px 4px 3px rgba(0,0,0,0.3);
  color: #eeeeee;
  padding: 5px;
  background-color: <?=$Codingcolor?>;
  border-top-right-radius: 10px;
  border-top-left-radius: 10px;
  border-bottom-right-radius: 10px;
  border-bottom-left-radius: 10px;
text-align: center;
   font-family: 'Raleway', sans-serif;
}
.Techbreaker{
  width: 100%;
  height: 2px;
  margin-top: 0px;
  margin-bottom: 2px;
  background-color:<?=$Techcolor?>;
}
.Codingbreaker{
  width: 100%;
  height: 2px;
  margin-top: 0px;
  margin-bottom: 2px;
  background-color: <?=$Codingcolor?>;
}
.Graphicsbreaker{
  width: 100%;
  height: 2px;
  margin-top: 0px;
  margin-bottom: 2px;
  background-color: <?=$Graphicscolor?>;
}
.button.tech:active,
.button.tech.is-checked,
.button.tech.is-selected {
  transition:1s ease all;
  border-bottom: 4px solid <?=$Techcolor?>;
}
.button.all:active,
.button.all.is-checked,
.button.all.is-selected {
  transition:1s ease all;
  border-bottom: 4px solid;
    border-image: url("http://i1379.photobucket.com/albums/ah149/Carlgordon64/all_border_zps8iptlfta.png?t=1466567125") 1 stretch repeat;

}
.button.coding:active,
.button.coding.is-checked,
.button.coding.is-selected {
  transition:1s ease all;
  border-bottom: 4px solid <?=$Codingcolor?>;
}
.button.graphics:active,
.button.graphics.is-checked,
.button.graphics.is-selected {
  transition:1s ease all;
  border-bottom: 4px solid <?=$Graphicscolor?>;
}
.bigwell{
	text-align:left;
	 font-size: 16px;
   font-family: 'Roboto', sans-serif;
   font-weight: 300;
  height: auto;
  color: #000;
  margin-left: 0px;
  margin-right: 0px;
  position: inherit;
  width: 100%;
  padding: 50px;
  padding-left:10px;
  background-color: rgba(255,255,255,0.3);
}
.statusAvailable{
	background-color:green;
	margin-top:-10px;
	width:15px;
	height:15px;
	border-radius:100%;
}
.statusBusy{
	background-color:yellow;
	margin-top:-10px;
	width:15px;
	height:15px;
	border-radius:100%;
}
.statusUnavailable{
	background-color:red;
	margin-top:-10px;
	width:15px;
	height:15px;
	border-radius:100%;
}
.boost{
	
		background-color: #454545;
	color: white;
	width: 100%;
  max-height: 1200px;
	height: auto;
	overflow: scroll;
	margin-left: 0px;
	margin-right: 0px;
	margin-top: 5px;

		border-bottom-right-radius: 0px;
  		border-bottom-left-radius: 0px;
}
.instyled{
background-color: rgba(0,0,0,0.3);;
 font-family: 'Roboto', sans-serif;
 overflow:hidden;
 width: 100%;
 text-transform: uppercase;
 border: 2px solid transparent;
  font-size: 18px;
  margin-top: 0px;
  min-height: 350px;
  color: #fff;
padding: 20px;
border-radius: 0px;
}
/*medium to large*/
  @media screen and (min-width: 767px) {

  .landpad{
padding:0px;
  }
#move{
  margin-top: 130px;
  padding-right: 20px;
}
#move2{
  margin-top: 0px;
}

}
@media screen and (max-width: 1080px) {
 #autoalttext{
   display:none;
  }
  }

@media screen and (max-width: 967px) {
textarea {
  width: 60%;
}
#enquireSub{
  width:60%;

}
#enquireform{
  padding:10px;
  margin-top:10px;
  border: 3px solid #cccccc;
  color:#454545;
  width:60%;
}
#dslbanner{

    background-image: none;
    background-size: 100% 150px;
    background-repeat: none;

background-position: center;

  }
  #webfont{
    transition:0.8s ease all;
    font-size: 60px;
  }
   #webfont_small{
    transition:0.8s ease all;
    font-size: 32px;
    color: white;
  }
  #webfont_tiny{
    transition:0.8s ease all;
    color: white;
  }
  /*EARLY SMALL*/
 
.move4{
  text-align:center;
  padding:20px;
}
.move5{
  text-align:center;
}
#welcometint{
transition:0.5s ease all;
  width:100%; min-height:477px; margin-top:0px; background-color:rgba(0,0,0,0.6);
}
    .welcomeDSL{
  position:absolute; right:0; height:477px; padding-right:15px;padding-left:15px; max-width:100%; text-align:right;background-color:rgba(0,0,100,0.0); overflow-x:hidden;
}
}

/*small*/
@media screen and (max-width: 767px) {
#resizer{
  width:100%; height:auto;
}
 #Sponsors{
    display:none;
}
.dogitar{
    background-position:50% 50%; 
    background-repeat: no-repeat;
    background-size: 200px;
  width: 200px;
  height: 200px;

  text-align: center;
}
.widthscale{
  width:100%;
}
#imgholder{
  text-align:center; margin:auto; width:100%;
}
.imgbox{
width:100%;
height:486px;
}
#jamesjean{
background-position:10 50;
    background-size: auto 100%;
  }
  .move4{
  margin-top:20px;
  padding:0px;
}

.dogicon{
    background-size: 100px;
  width: 100px;
  height: 100px;
}
#dogitars{
  margin:auto; 
  text-align:center;
   width:80%;
}

.step div{
  padding:30px;
}

#move2{
margin-top: 0px;
}
#move{
  margin-top: -20px;
}

 .landpad{
padding:0px;
  }
  .bigwell{
  text-align:center;
  padding:20px;
  padding-top:0px;
  }
}
@media screen and (max-width: 450px) {
.contactDets{
  display:none;
}


#dogitars{
  margin:auto; 
  text-align:center;
   width:100%;
}
.dogicon{
    background-size: 80px;
  width: 80px;
  height: 80px;
}
}


                       
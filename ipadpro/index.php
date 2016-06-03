<html>
<head>
	<title>iPad Pro</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<script type="text/javascript" src="js/jquery-2.2.1.min.js"></script>
	<script src="js/index.js"></script>
</head>
<body>
	<div id="Container">
		<div id="header">
			<div id="logo"><a href="http://www.apple.com/ipad-pro/"><img src="images/logo.png" width="35px" height="35px"></a></div>
			<div id="content-right">ipad > iPad Pro</div>
		</div><!-- header -->

		<div id="first_box">
			<h1>iPad Pro</h1>
			<p>Super. Computer.<br>Now in two sizes.</p>
			<br><br><br>
			<a rel="pulse-shrink" class="button hover"><button class="btn_first">Watch the film <i class="fa fa-play-circle-o"></i></button></a>
			<a rel="pulse-shrink" class="button hover"><button class="btn_first">Watch the keynote ></button></a>
		</div><!-- first_box -->
		<div class="ipad_show" style="overflow: hidden;">
			<img src="images/gallery_hardware_large_2x.png" width="700px;">
		</div><!-- ipad_show -->
		<div id="vdo">
			<iframe width="576" height="433" src="https://www.youtube-nocookie.com/embed/5_pMx7IjYKE?rel=0&amp;showinfo=0;autoplay=1" frameborder="0" allowfullscreen>
			</iframe>
		</div><!-- vdo -->

		<div id="second_box">
			<h3>iPad Pro is more than <br>the next generation of iPad</h3>
			<p>it’s an uncompromising vision of personal computing for the modern world.<br>
			 It puts incredible power that leaps past most portable PCs at your fingertips.<br>
			 It makes even complex work as natural as touching, swiping, or writing with a pencil.<br>
			 And whether you choose the 12.9-inch model or the new 9.7-inch model,iPad Pro is more capable,<br>
			 versatile, and portable than anything that’s come before. In a word, super.</p>
			 <br><br><!-- <br><br> -->
			 <div id="product_box_all">
			 <div id="product_choice">
			 	<img id="pic_choose" src="images/pp9.7.png" width="350px" height="auto;">
			 	<img id="pic_choose_big" src="images/pp12.9.png" width="350px" height="auto;">
			 </div><!-- product_choice -->
			 </div><!-- product_box_all -->
			 
			 <div id="product_box_all_detail">
			 <div class="product_choice">
			 	<p><div class="head_text_product">9.7-inch iPad Pro</div>
				Incredibly portable, with an unprecedented combination of versatility and performance.
				<br>
				screen resolution : 2048×1536
				<br>
				<!-- Color : <img src="images/9.7color.png"></p> -->
					Color :
					<button id="SilverButton" class="cc_9 cc_t1"><!-- silver --></button>
					<button id="GoldButton" class="cc_9 cc_t2"><!-- gold --></button>
					<button id="SpacegrayButton" class="cc_9 cc_t3"><!-- space gray --></button>
					<button id="rosegoldButton" class="cc_9 cc_t4"><!-- rosegold --></button>
				</p>

				<script>
					var SilverButton = document.getElementById("SilverButton");
					var GoldButton = document.getElementById("GoldButton");
					var SpacegrayButton = document.getElementById("SpacegrayButton");
					var rosegoldButton = document.getElementById("rosegoldButton");

					SilverButton.addEventListener("click",function()
					{
					var pic_choose = document.getElementById("pic_choose");
					pic_choose.src = "images/9.7_silver.png";
					});

					GoldButton.addEventListener("click",function()
					{
					var pic_choose = document.getElementById("pic_choose");
					pic_choose.src = "images/9.7_gold.png";
					});

					SpacegrayButton.addEventListener("click",function()
					{
					var pic_choose = document.getElementById("pic_choose");
					pic_choose.src = "images/9.7_spacegray.png";
					});

					rosegoldButton.addEventListener("click",function()
					{
					var pic_choose = document.getElementById("pic_choose");
					pic_choose.src = "images/9.7_rosegold.png";
					});

				</script>

				<div class="price_text">Price : $599</div>
			 </div><!-- product_choice -->
			 <div class="product_choice">
			 	<p><div class="head_text_product">12.9-inch iPad Pro</div>
				An epic screen that turns advanced tasks into brilliant, immersive experiences.
				<br>
				screen resolution : 2732×2048
				<br>
				Color :
				<button id="SilverButtonbig" class="cc_9 cc_t1"><!-- silver --></button>
				<button id="GoldButtonbig" class="cc_9 cc_t2"><!-- gold --></button>
				<button id="SpacegrayButtonbig" class="cc_9 cc_t3"><!-- space gray --></button>
				</p>

				<script>
					var SilverButtonbig = document.getElementById("SilverButtonbig");
					var GoldButtonbig = document.getElementById("GoldButtonbig");
					var SpacegrayButtonbig = document.getElementById("SpacegrayButtonbig");

					SilverButtonbig.addEventListener("click",function()
					{
					var pic_choose_big = document.getElementById("pic_choose_big");
					pic_choose_big.src = "images/12.9_silver.png";
					});

					GoldButtonbig.addEventListener("click",function()
					{
					var pic_choose_big = document.getElementById("pic_choose_big");
					pic_choose_big.src = "images/12.9_gold.png";
					});

					SpacegrayButtonbig.addEventListener("click",function()
					{
					var pic_choose_big = document.getElementById("pic_choose_big");
					pic_choose_big.src = "images/12.9_spacegray.png";
					});

				</script>

				<div class="price_text">Price : $799</div>
			 </div><!-- product_choice -->
			</div><!-- product_box_all_detail -->
		</div><!-- second_box -->

		<div id="third_box">
		</div><!-- third_box -->

		<div id="four_box">
			<h3>Highlight The Features</h3>
			<div id="four_left-box">
				<div class="box-box-box">
					<img src="images/resolution.png" width="100px;" height="auto;">
					<div class="h_box">Retina Display</div>
					<p>An awesome display of progress.</p>
				</div>
				<div class="box-box-box">
					<img src="images/color.png" width="100px;" height="auto;">
					<div class="h_box">A color</div>
					<p>standard big enough for Hollywood.</p>
				</div>
			</div><!-- four_left-box -->
			<div id="four_middle-box">
				<a rel="pulse-shrink" class="button hover"><img src="images/ipad-pro-select-201603.png" width="600px" height="auto;"></a>
			</div><!-- four_middle-box -->
			<div id="four_right-box">
				<div class="box-box-box">
					<img src="images/light.png" width="100px;" height="auto;">
					<div class="h_box">Lighting</div>
					<p>See things in the best possible light.Whatever the lighting.</p>
				</div>
				<div class="box-box-box">
					<img src="images/music.png" width="100px;" height="auto;">
					<div class="h_box">Four Speaker Audio</div>
					<p>No matter how you turn it,you’ll want to turn it up.</p>
				</div>
			</div>
			<!-- <div class="accordian">
  <ul>
       <li>
      <div class="image_title">
        <a href="#">Retina Display - An awesome display of progress.</a>
      </div>
      <a href="#">
     <img src="images/rs1.jpg" width="500px" height="333px">
			</a>
    </li>
          <li>
      <div class="image_title">
        <a href="#">A color standard big enough for Hollywood.</a>
      </div>
      <a href="#">
     <img src="images/rs2.jpg" width="500px" height="333px">
			</a>
    </li>
             <li>
      <div class="image_title">
        <a href="#">See things in the best possible light. Whatever the lighting.</a>
      </div>
      <a href="#">
     <img src="images/rs3.jpg" width="500px" height="333px">
			</a>
    </li>
                <li>
      <div class="image_title">
        <a href="#">Four Speaker Audio - No matter how you turn it, you’ll want to turn it up.</a>
      </div>
      <a href="#">
     <img src="images/rs4.jpg" width="500px" height="333px">
			</a>
    </li>
    			<li>
      <div class="image_title">
        <a href="#">A9X Chip - Faster than a speeding laptop.</a>
      </div>
      <a href="#">
     <img src="images/rs5.jpg" width="600px" height="333px">
			</a>
    </li>
  </ul>
</div> -->
		</div><!-- four_box -->

		<div id="five_box">
			<h3>Faster than a speeding laptop.</h3>
			<br><br>
			<p>The 64-bit A9X chip gives iPad Pro the power to easily <br>
			take on tasks once reserved for workstations and PCs.<br>
			Not to mention tasks you’d never consider doing on a PC.<br>
			Despite this barrier-breaking performance, the A9X chip’s efficient<br>
			architecture enables up to 10 hours of battery life.</p>
			<br><br>
			<div id="sub_all">
			<div class="sub_b">A9X
			<p>chip</p></div>
			<div class="sub_b">M9
			<p>coprocessor</p></div>
			<div class="sub_b">10 hr
			<p>battery life</p></div>
			</div><!-- sub_all -->
		</div><!-- five_box -->

		<div id="six_box">
			<h3>Ipad Pro is the best laptop.</h3>
			<br>
			<img src="images/cpu-icon_large_2x.png" width="100px;">
			<img src="images/gpu-icon_large_2x.png" width="100px;">
			<img src="images/metal-icon_large_2x.png" width="100px;">
			<br>
			<div id="text_six_all">
			<div class="text_six">Quicker work.</div>
			<div class="text_six">More beautiful play.</div>
			<div class="text_six">A game changer.</div>
			</div><!-- text_six_all -->
			<br><br><br>
			<div class="nav-box">
    <span class="nav nav-prev"></span>
    <span class="nav nav-next"></span>
  </div>
			<div class="timeline">
    <div class="timeline-panel">
      <div class="timeline-item">
        <img src="images/slide-1.jpg" width="520px" height="auto">
        <h1>Concepts: Smarter Sketching, Design & CAD <br>for Architecture & Illustration</h1>
        <p><a href="#">View in the App Store</a></p>
      </div>
    </div>
    <div class="timeline-panel">
      <div class="timeline-item">
        <img src="images/slide-2.jpg" width="520px" height="auto">
        <h1>AG Drive</h1>
        <p><a href="#">View in the App Store</a></p>
      </div>
    </div>
    <div class="timeline-panel">
      <div class="timeline-item">
        <img src="images/slide-3.jpg" width="520px" height="auto">
        <h1>Canva - Graphic Design & Photo Editing</h1>
        <p><a href="#">View in the App Store</a></p>
      </div>
    </div>
  </div>
  <div class="tab-box">
  </div> 
		</div><!-- six_box -->

		<video autoplay loop poster="images/next_router_startframe_large.jpg" id="bgvid" loop controls muted>
    			<source src="video/Apple_iPad_Pro.webm" type="video/webm">
    			<source src="video/Apple_iPad_Pro.mp4" type="video/mp4">
			</video>
		<div id="seven_box">
			<div id="text_seven_box">
			<h3>See how iPad Pro can be <br>your next computer.</h3>
			<p><a href="#">Learn more about the iPad Pro experience ></a></p>
			</div><!-- text_seven_box -->
		</div><!-- seven_box -->

	</div><!-- Container -->
</body>

</html>
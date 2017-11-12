<!DOCTYPE>
<!DOCTYPE html>
<html>
<head>
	<title> OLIVE TREE </title>
	<style type="text/css">
	/*grid*/
	body { overflow-x: hidden; width: 100%;}
	article { float: left;}


	#main_back{
	  height: 680px;
	  background-size: cover;
	  background-position: top center;
	  background-repeat: no-repeat;
	  width: 100%;
	}
	
	#ab_whiteback{
	  height: 580px;
	  background-size: cover;
	  background-position: top center;
	  background-repeat: no-repeat;
	  width: 100%;
	}

	#whiteback{
	  height: 550px;
	  background-size: cover;
	  background-position: top center;
	  background-repeat: no-repeat;
	  width: 100%;
	  margin-top: -35px;
	}

	#container{
	  width: 100%;
	  margin: 0px auto;
	}

	.content1 {
		top: 100px;
		width: 280px;
		height: 300px;
		margin-bottom: 100px;
		position: relative;
		z-index: 2;
	}
	
	.content2 {
		margin-left: 50px;
		width: 40%;
		height: 400px;
		font-family: "나눔스퀘어";
	}

	.content3 {
		width: 23%;
		height: 400px;
		margin-left: 6%;
		font-family: "나눔스퀘어";
	}

	.aback{
		position: absolute;
		margin-top: 100px;
		z-index: 1;
		animation-name: fadeIn;
  		animation-duration: 3s;
  		-webkit-animation-name: fadeIn;
  		-webkit-animation-duration: 3s;
	}
	.ab{margin-left: 25%;}
	.ab_P {margin-left: 100px; margin-top:35%;}
	/*grid End*/
	
	/*Main animation*/
	#flower {
		position: relative;
	}
	.right {
		position: absolute;
		right: 0;
	}
	.left {
		position: absolute;
		left: 0;
		top: 130px;
	}
	.btt {
		position: absolute;
		left: 90px;
		top: 550px;
	}

	@-webkit-keyframes fadeIn {
  	  from {
    	  opacity: 0;
    	  -webkit-transform: scale(0.95);
    	  transform: scale(0.95);
  	  }

  	  to {

    	  opacity: 1; 
  	  	  -webkit-transform: scale(1.0);
    	  transform: scale(1.0);
  	  }
	}

	@keyframes fadeIn {
  	  from {
    	  opacity: 0;
    	  -webkit-transform: scale(0.95);
    	  transform: scale(0.95);
  	  }

  	  to {

    	  opacity: 1; 
  	  	  -webkit-transform: scale(1.0);
    	  transform: scale(1.0);
  	  }
	}

	.fadeIn {
  		animation-name: fadeIn;
  		animation-duration: 3s;
  		-webkit-animation-name: fadeIn;
  		-webkit-animation-duration: 3s;
	}
	.olives{
		animation-name: fadeIn;
  		animation-duration: 3s;
		animation-timing-function: ease-in-out;
		-webkit-animation-name: fadeIn;
  		-webkit-animation-duration: 3s;
  		-webkit-animation-timing-function: ease-in-out;
	}
	/*Main animation End*/
	
	/*Navigation*/
	#nav {
	  position: absolute;
  	  top: 0;
  	  margin: 0;
  	  padding: 0;
  	  width: 100%;
  	  padding: 40px 5%;
	  list-style-type: none;
	}
	#nav li {
	  float: left;			
	  position: relative;		
	  font-size: 18px;
  	  margin: 20px;
	  padding: 0;

	}
	#nav li a{
	font-family: "나눔스퀘어";
	font-weight: 600;
	font-size: 1em;
	color: #000000;
	text-decoration: none;
	margin: 0;	
	}
	
	#nav li a: hover {
  	  color: #fff;  
	}
	/*Navigation End*/

	/*pics*/
	.pic1{ margin-left: 62px; margin-top: 80px; width: 320px; height: 400px; background: url(c_bt.jpg) no-repeat; } 
	.pic2{ margin-left: 45px; margin-top: 80px; width: 320px; height: 400px; background: url(p_bt.jpg) no-repeat; }
	.pic3{ margin-left: 20px; margin-top: 80px; width: 320px; height: 400px; background: url(d_bt.jpg) no-repeat; }
	.pic4{ margin-left: 52px; margin-top: 80px; width: 300px; height: 400px; }
	.pic5{ margin-left: 38px; margin-top: 80px; width: 300px; height: 400px; }
	.pic6{ margin-left: 27px; margin-top: 80px; width: 300px; height: 400px; }
	.text{ 
		display: table-cell; 
		vertical-align: middle; 
		width: 310px; 
		height: 400px; 
		background:#000000; 
		opacity:0; 
	}

	.pic1:hover .text  { 
		opacity:0.6; 
		text-align:center; 
		color:#ffffff; 
		font-size:40px; 
		font-weight:700; 
		font-family:"나눔스퀘어";  
	}

	.pic2:hover .text { 
		opacity:0.6; 
		text-align:center; 
		color:#ffffff; 
		font-size:40px; 
		font-weight:700; 
		font-family:"나눔스퀘어"; 
	}

	.pic3:hover .text { 
		opacity:0.6; 
		text-align:center; 
		color:#ffffff; 
		font-size:40px; 
		font-weight:700; 
		font-family:"나눔스퀘어";  
	}
	#pic_conten{text-align: center;}
	#picname{margin-top: -40px; text-align: center; font-family: "나눔스퀘어"; font-size: 23px;}
	#I_picname{margin-top: 40px;}
	/*pics End*/

	/*Contact*/
	#padding{
		margin-right: 50px;
		margin-left: 50px;
	}
	.padd_p{
		margin-left: 30px; font-family: "나눔스퀘어";
	}
	 #contact{
    	padding:10px 0 10px;
  	}

  	.contact-text{
    	margin:45px auto;
  	}

  	.mail-message-area{
    	width:100%;
    	padding:0 15px;
  	}

  	.mail-message{
    	width: 100%;
    	background:rgba(255,255,255, 0.8) !important;
    	-webkit-transition: all 0.7s;
    	-moz-transition: all 0.7s;
    	transition: all 0.7s;
    	margin:0 auto;
    	border-radius: 0;
 	}

  	.not-visible-message{
    	height:0px;
    	opacity: 0;
  	}

  	.visible-message{
    	height:auto;
    	opacity: 1;
    	margin:25px auto 0;
  	}

		/*Input Styles*/
	.form{
    	width: 100%;
    	padding: 15px;
    	background:#f8f8f8;
    	border:1px solid rgba(0, 0, 0, 0.075);
    	margin-bottom:25px;
    	color:#727272 !important;
    	font-size:13px;
    	-webkit-transition: all 0.4s;
    	-moz-transition: all 0.4s;
    	transition: all 0.4s;
  	}

  	.form:hover{
    	border:1px solid #8BC3A3;
  	}

  	.form:focus{
    	color: white;
    	outline: none;
    	border:1px solid #8BC3A3;
  	}

  	.textarea{
   		height: 200px;
    	max-height: 200px;
    	max-width: 100%;
  	}
  
	   /* Generic Button Styles */

  	.button{
    	padding:8px 12px;
    	background:#0A5175;
    	display: block;
    	width:120px;
    	margin:10px 0 0px 0;
    	border-radius:3px;
    	-webkit-transition: all 0.3s;
    	-moz-transition: all 0.3s;
    	transition: all 0.3s;
   		text-align:center;
    	font-size:0.8em;
    	box-shadow: 0px 1px 4px rgba(0,0,0, 0.10);
    	-moz-box-shadow: 0px 1px 4px rgba(0,0,0, 0.10);
    	-webkit-box-shadow: 0px 1px 4px rgba(0,0,0, 0.10);
  	}

  	.button:hover{
    	background:#8BC3A3;
    	color:white;
  	}

	   /* Send Button Styles */

  	.form-btn{
    	width:180px;
    	display: block;
    	height: auto;
    	padding:15px;
    	color:#fff;
    	background:#8BC3A3;
    	border:none;
    	border-radius:3px;
    	outline: none;
    	-webkit-transition: all 0.3s;
    	-moz-transition: all 0.3s;
    	transition: all 0.3s;
    	margin:auto;
    	box-shadow: 0px 1px 4px rgba(0,0,0, 0.10);
    	-moz-box-shadow: 0px 1px 4px rgba(0,0,0, 0.10);
	    -webkit-box-shadow: 0px 1px 4px rgba(0,0,0, 0.10);
	}

	.form-btn:hover{
	    background:#111;
	    color: white;
	    border:none;
	 }

	.form-btn:active{
	    opacity: 0.9;
	}
	center{
	  margin-top:330px;
	}
	input {
    	position: relative;
    	z-index: 9999;
	}

	/*Contact End*/
	</style>
</head>

<body>
	<header id="main_back" style="background-image:url(header-bg.jpg);">
	<div id="flower">
	  
	  <div class="fadeIn">
		<div class="right">
	  	  <img src="right.png">
	  	</div>
		<div class="left">
	  	  <img src="left.png">
	    </div>
	  </div>
	  
	  <div class="olives">
	  	<div class="btt">
	  	  <img src="olives.png">
	  	</div>
	  </div>	
	</div>
	</header>

	<div id = "container">
	<nav id="nav">
		<li><a href="#">Portfolio</a></li>
		<li><a href="#">Inspire</a></li>
		<li><a href="#">Contact</a></li>
	</nav>
	</div>


	<div id="container">
	<section id="ab_whiteback" style="background-image:url(white.jpg);">
		<div class="ab">
		<article class="content1">
		  <img src="about.png">
		</article>
		<div class="aback"> 
		  <img src="aboutback.png">
		</div>
		</div>
		
		<article class="content2">
		  <div class="ab_P">
			<h1><strong>About Me</strong></h1>
			<h3> Athena's olive : The fruit of wisdom </h3> 
			<h5> 김민지 ( Olivia Kim ) </h5> 
			<h5> 데이터 엔지니어를 꿈꾸는 주니어. 정보 공유 피드백 환영합니다. </h5>
		  </div>
		</article>
	</section>

	<div id="picname" style="background-image:url(white.jpg);"> <h1><strong>Portfolio</strong></h1> </div>
	<section id="whiteback" style="background-image:url(white.jpg);">
		<article class="content3">
		  <a href="#">
		  	<div class="pic1">
		  	  <div class="text"> <h1> C 언어 </h1></div>
			</div>
		  </a>
	    </article>
		<article class="content3">
		  <a href="#">
		    <div class="pic2">
			  <div class="text"> <h1> Python </h1></div>
		  	</div>
		  </a>
		</article>
		<article class="content3">
		  <a href="#">
		  	<div class="pic3">
			  <div class="text"> <h1> Data <br> Science </h1></div>
			</div>
		  </a>
		</article>
	</section>

	<div id="I_picname">
	<div id="picname" style="background-image:url(white.jpg);"> <h1><strong>Inspire</strong></h1> </div>
	<section id="whiteback" style="background-image:url(white.jpg);">
		<article class="content3">
		  <div class="pic4">
			<div id="pic_conten">
			  <img src="dis.png">
				<h2>Disco</h2>
				<h4>콘텐츠 큐레이션<br><br><br>취향에 맞는 콘텐츠,비슷한 사람들을<br>만나는공간. 저와 비슷한 취향이라면 Follow me.</h4>
				<br>
				<a href="https://disco.me/users/edb5d6f0-6320-11e7-9911-000000008478"><img src="1.png"></a>
			</div>
		  </div>	
		</article>
		<article class="content3">
		  <div class="pic5">
			<div id="pic_conten">
			  <img src="rdd.png">
				<h2>Reddit</h2>
				<h4>소셜 뉴스<br><br><br>요즘 뜨는 소식을 한눈에 볼수있는 실시간 커뮤니티. Upvote 하고 Karma를<br>모아요!</h4>
				<br>
				<a href="https://www.reddit.com/"><img src="1.png"></a>
			</div>
		  </div>
		</article>
		<article class="content3">
		  <div class="pic6">
			<div id="pic_conten">
			  <img src="git.png">
				<h2>Github</h2>
				<h4>오픈 소스<br><br><br>전 세계 오픈소스 집합소, 개발자들의<br>놀이터. 개발자라면 같이 공유해요.<br>Git!</h4>
				<br>
				<a href="https://github.com/"><img src="1.png"></a>
			</div>
		  </div>
		</article>
	</section>
	</div>

	<div id="picname" style="background-image:url(white.jpg);"> <h1><strong>Contact</strong></h1> </div>
	<section id="whiteback" style="background-image:url(white.jpg);">
	<div id="padding">
	  <div class="padd_p"><br><br><h2>Nice to meet you!</h2><p>Have a question or just want to get in touch? Let's chat.</p></div>
	  <head><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css"></head>
	  <br />
		<div class="inner contact">
                <!-- Form Area -->
                <div class="contact-form">
                    <!-- Form -->
                    <form id="contact-us" method="post" action="mail.php">
                        <!-- Left Inputs -->
                        <div class="col-xs-6 wow animated slideInLeft" data-wow-delay=".5s">
                            <!-- Name -->
                            <input type="text" name="name" id="name" required="required" class="form" placeholder="Name" />
                            <!-- Email -->
                            <input type="email" name="mail" id="mail" required="required" class="form" placeholder="Email" />
                            <!-- Subject -->
                            <input type="text" name="subject" id="subject" required="required" class="form" placeholder="Subject" />
                        </div><!-- End Left Inputs -->
                        <!-- Right Inputs -->
                        <div class="col-xs-6 wow animated slideInRight" data-wow-delay=".5s">
                            <!-- Message -->
                            <textarea name="message" id="message" class="form textarea"  placeholder="Message"></textarea>
                        </div><!-- End Right Inputs -->
                        <!-- Bottom Submit -->
                        <div class="relative fullwidth col-xs-12">
                            <!-- Send Button -->
                            <button type="submit" id="submit" name="submit" value="submit" class="form-btn semibold">Send Message</button> 
                        </div><!-- End Bottom Submit -->
                        <!-- Clear -->
                        <div class="clear"></div>
                    </form>

                </div><!-- End Contact Form Area -->
        </div><!-- End Inner -->
        </div>
</div>
</body>
</html>

<?php
    include_once ("./_common.php");

    include_once(SERVER_COMMON_PATH."/header.php");
    include_once(SERVER_COMMON_PATH."/navigation.php");
?>

	<style>
	   #intro-download, footer { display:none; }
	</style>
	
    <div class="container-fluid px-0">
    	<div id="mainSlider" class="carousel slide" data-ride="carousel">
    		<ol class="carousel-indicators">
    			<li data-target="#mainSlider" data-slide-to="0" class="active"></li>
    			<li data-target="#mainSlider" data-slide-to="1"></li>
    		</ol>
    		
    		<div class="carousel-inner bg-info" role="listbox">

    			<div class="carousel-item active">
    				<div class="carousel-image d-flex align-items-center justify-content-center min-vh-100" style="background:url(./images/slide/04.jpg) no-repeat center center;">
    					<div class="dark-layer"></div>
    					<div class="carousel-caption d-none d-md-block">
    						<h5>WELCOME TO PRAPE</h5>
    						<p style="font-size:26px;">세상이 원하는 하나의 기능을 제공합니다.</p>
    					</div>
    				</div>
    			</div>
    
    			<div class="carousel-item">
    				<div class="carousel-image d-flex align-items-center justify-content-center min-vh-100" style="background:url(./images/slide/02.jpg) no-repeat center center;">
    					<div class="dark-layer"></div>
    					<div class="carousel-caption d-none d-md-block">
    						<h5>한번도 경험하지 못한 진품가품 커뮤니티 앱</h5>
    						<p style="font-size:26px;">찐짭 - JJINJJAP</p>
    					</div>
    				</div>
    			</div>
    
    			<!-- <div class="carousel-item">
    				<div class="carousel-image d-flex align-items-center justify-content-center min-vh-100" style="background:url(./images/slide/03.jpg) no-repeat center center;">
    					<div class="dark-layer"></div>
    					<div class="carousel-caption d-none d-md-block">
    						<h5>WELCOME TO INIDEA</h5>
    						<p>We carry a passion for performance marketing</p>
    					</div>
    				</div>
    			</div>
    
    			<div class="carousel-item">
    				<div class="carousel-image d-flex align-items-center justify-content-center min-vh-100" style="background:url(./images/slide/04.jpg) no-repeat center center;">
    					<div class="dark-layer"></div>
    					<div class="carousel-caption d-none d-md-block">
    						<h5>WELCOME TO INIDEA</h5>
    						<p>We carry a passion for performance marketing</p>
    					</div>
    				</div>
    			</div> -->
    		</div>
    		
    		<a class="carousel-control-prev" href="#mainSlider" role="button" data-slide="prev">
    			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    			<span class="sr-only">Previous</span>
    		</a>
    		
    		<a class="carousel-control-next" href="#mainSlider" role="button" data-slide="next">
    			<span class="carousel-control-next-icon" aria-hidden="true"></span>
    			<span class="sr-only">Next</span>
    		</a>
    	</div>
    </div>
    
<?php include_once(SERVER_COMMON_PATH."/footer.php"); ?>	
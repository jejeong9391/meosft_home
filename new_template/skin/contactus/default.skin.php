<div class="container-fluid px-0">
	<div id="subSlider" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#mainSlider" data-slide-to="0" class="active"></li>
		</ol>
		
		<div class="carousel-inner bg-info" role="listbox">
			<div class="carousel-item active">
				<div class="carousel-image d-flex align-items-center justify-content-center min-vh-50" style="background:url(../images/slide/04.jpg) no-repeat center center;">
					<div class="dark-layer"></div>
					<div class="carousel-caption d-none d-md-block">
    						<h5>WELCOME TO PRAPE</h5>
    						<p style="font-size:26px;">세상이 원하는 하나의 기능을 제공합니다.</p>
					</div>
				</div>
			</div>
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

<div id="" class="intro-text">
	<div class="container">
		<div class="row text-center">
			<div class="col-md-8 offset-md-2">
				<div class="header">CONTACT US <span class="text-point">.</span></div>
				<div class="content">
					프라페에 궁금하신 점이 있으시면 언제든 아래로 연락주세요.
				</div>
			</div>
		</div>
	</div>
</div>

<div id="intro-contactus" class="intro-text">
	<div class="container">
		<div class="row">
			<div class="offset-md-3 col-md-6">
				<div class="content">
					<form id="" name="" method="post" action="<?=$PHP_SELF?>" autocomplete="off">
						<input type=hidden name="act" value=1>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="">성함</label>
									<input type="text" id="" name="name" value="" class="form-control form-control-lg" placeholder="성함 입력" required="required" />
								</div>									
							</div>
							
							<div class="col-md-6">
								<div class="form-group">
									<label for="">연락처</label>
									<input type="number" id="" name="phone" value="" class="form-control form-control-lg" placeholder="연락처 입력 (숫자만)" required="required" />
								</div>									
							</div>
							
							<div class="col-md-6">
								<div class="form-group">
									<label for="">메일</label>
									<input type="email" id="" name="email" value="" class="form-control form-control-lg" placeholder="메일 입력" />
								</div>									
							</div>
							
							<div class="col-md-12">
								<div class="form-group">
									<label for="">문의사항</label>
									<textarea id="" name="msg" class="form-control form-control-lg" placeholder="문의 사항 입력" required="required" style="height:80px;"></textarea>
								</div>									
							</div>
							
							<div class="col-md-12">
								<div class="text-right">
									<input type="submit" id="" name="" value="문의" class="btn btn-dark" />
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?

if($_POST["act"] =="1"){	 
   $subject = "프라페 홈페이지 문의등록";
   $contents = "성함: ".$_POST["name"]."\r\n";
   $contents .= "연락처: ".$_POST["phone"]."\r\n";
   $contents .= "메일: ".$_POST["email"]."\r\n";
   $contents .= addslashes($_POST["msg"]);
   $headers = "From: ".$_POST["email"]."\r\n";
   mail($to, $subject, $contents, $headers);
   echo "<script>alert('문의 등록이 완료되었습니다.');</script>";
}
?>
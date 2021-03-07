<div class="container-fluid px-0">
	<div id="subSlider" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#mainSlider" data-slide-to="0" class="active"></li>
		</ol>
		
		<div class="carousel-inner bg-info" role="listbox">
			<div class="carousel-item active">
				<div class="carousel-image d-flex align-items-center justify-content-center min-vh-50" style="background:url(../images/slide/02.jpg) no-repeat center center;">
        			<div class="dark-layer"></div>
        			<div class="carousel-caption d-none d-md-block">
        				<h5>WELCOME TO INIDEA</h5>
        				<p>We carry a passion for performance marketing</p>
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
				<div class="header">News <span class="text-point">.</span></div>
				<div class="content">
					공지사항, 이벤트 등을 공지하는 페이지입니다.
					<br />
					일반 텍스트 게시판입니다. 
				</div>
			</div>
		</div>
	</div>
</div>

<div id="intro-news" class="intro-text">
	<div class="container">
		<div class="row">
			<div class="offset-md-2 col-md-8">
				<div class="content">
					<form id="" name="" method="post" action="" autocomplete="off">
						<div class="row">
							<div class="col-md-12">
								<div class="accordion" id="accordionExample">
                                	<?php for ($i=0; $i<10; $i++) { ?>
                                	<div class="card">
                                		<div class="card-header" id="headingOne">
                                			<h2 class="mb-0">
                                				<button class="btn btn-link text-dark" type="button" data-toggle="collapse" data-target="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse<?php echo $i; ?>">
                                					<span class="category">#공지사항</span> 공지사항 제목입니다.공지사항 제목입니다.공지사항 제목입니다.공지사항 제목입니다.
                                					<span class="date">2019.04.05</span>
                                				</button>
                                			</h2>
                                		</div>
                                
                                		<div id="collapse<?php echo $i; ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                			<div class="card-body">
                                				<p class="list-group-content">
                                        			Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, 
                                        			sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel
                                        		</p>
                                			</div>
                                		</div>
                                	</div>
                                	<?php } ?>
                                </div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="offset-md-1 col-md-10">
				<nav id="pagination">
					<ul class="d-flex pagination justify-content-center">
						<li class="page-item disabled">
							<a class="page-link" href="#" tabindex="-1" aria-disabled="true"><span aria-hidden="true">&laquo;</span></a>
						</li>
						<li class="page-item"><a class="page-link" href="#">1</a></li>
						<li class="page-item active" aria-current="page">
							<a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
						</li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item">
							<a class="page-link" href="#"><span aria-hidden="true">&raquo;</span></a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</div>
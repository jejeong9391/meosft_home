$(function () {
	$("#loader").fadeOut();
	
	$(".wrapper-image > a").on("click", function () {
		var _src = $(this).find("img").attr("src");
		console.log(_src);
		
		$("#modalImageView .modal-body").empty().append($("<img />", {
			src : _src,
			class : "img-fluid"			
		}));
	})
	
	$("#navigation").find("[name=" + getFileName() + "]").addClass("text-point");
	
	$(window).scroll(function () {
		if ($(window).scrollTop() > $("#subSlider").outerHeight() - $("#navigation").outerHeight()) {
			$("#navigation").addClass("bg-white");
			$("#navigation * ").addClass("text-dark");
		} else {
			$("#navigation").removeClass("bg-white");
			$("#navigation * ").removeClass("text-dark");
		}
	})
})

function getFileName() {
	var _locArray = document.location.pathname.split("/");
	var _file = _locArray[_locArray.length - 1];
	var _fileName = _file.split(".");
	
	if (!_fileName[0]) _fileName[0] = "home";
	return _fileName[0];
}

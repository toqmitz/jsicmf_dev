//navbar
$("div.navbar_top").load("../templates/layout/navbartop.html");
$("div.navbar_job").load("../common/navbar_job.html");
$("div.navbar_company").load("../common/navbar_company.html");
$("div.navbar_client").load("../common/navbar_client.html");
$("div.navbar_jobap").load("../../common/navbar_jobap.html");
$("div.navbar_inqap").load("../../common/navbar_inqap.html");


$(function() {
	//上部スクロールリンク表示
	var topBtn = $('#page-top');
	topBtn.hide();
	//scroll botton from 400
	$(window).scroll(function () {
		if ($(this).scrollTop() > 400) {
			topBtn.fadeIn();
		} else {
			topBtn.fadeOut();
		}
	});
	//to top

	topBtn.click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 500);
		return false;
	});

	$('a[href^="#"]').not('#wrap').click(function () {
		var href = $(this).attr("href");
		var target = $(href == "#" || href == "" ? 'html' : href);
		var position = target.offset().top;
		$('body,html').animate({
			scrollTop:position
		}, 500, 'swing');
		return false;
	});

	var num = Math.ceil(2 * Math.random());
	$('div.headertop').addClass('header_' + num);
	
	let mySwiper = new Swiper(".swiper-container", {
		// Optional parameters
		loop: false, // ループの指定
		effect: "fade", //フェードの指定
		autoplay: {
		delay: 4000, //４秒後に次のスライドへ
		disableOnInteraction: false //ユーザー側で操作してもスライドを止めない
		},
		speed: 2000, //２秒かけてフェードで切り替わる
	//	pagination: { // 丸のページネーションを使うなら書く
	//	el: ".swiper-pagination"
	//	},
	//	navigation: { // 左右のページ送を使うなら書く
	//	nextEl: ".swiper-button-next",
	//	prevEl: ".swiper-button-prev"
	//	}
		});

});

$(window).scroll(function (){
    $('.fadein').each(function(){
        var elemPos = $(this).offset().top;
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();
        if (scroll > elemPos - windowHeight + 200){
            $(this).addClass('scrollin');
        }
    });
});



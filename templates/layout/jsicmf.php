<!DOCTYPE html>
<html lang="ja">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="日本国際交詢協会は、フランスやアメリカなど海外との漫画・アニメコンテンツを中心とした文化交流活動の支援を行っております。/ La JSICMF apporte son soutien aux échanges culturels centrés sur l'animation et les mangas, entre le Japon et la France, les États-Unis. / The JSICMF endeavors to support cultural exchanges centered on media such as anime, manga, between Japan and other countries such as the US or France.">
	<meta name="author" content="一般社団法人 日本国際交詢協会 / JSICMF">

	<meta property="og:site_name" content="<?php echo $ogsitename; ?>">
	<meta property="og:title" content="<?php echo $ogtitle; ?>">
	<meta property="og:description" content="<?php echo $ogdescription; ?>">
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://www.jsicmf.or.jp/">
	<meta property="og:image" content="https://www.jsicmf.or.jp/dev/jsicmfdev/app/img/og.png">
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="https://www.jsicmf.or.jp/">
	<meta name="twitter:image" content="https://www.jsicmf.or.jp/dev/jsicmfdev/app/img/og.png">

	<?php echo $this->Html->meta('favicon.ico', '/img/favicon.ico', array('type' => 'icon')); ?>
	<title><?php echo $title ?></title>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<!--あとで取得して修正-->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-177063221-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-177063221-1');
	</script>

	<?php
	// jsとcssの読み込み
	echo $this->Html->script('jquery-3.5.1.min.js');
	echo $this->Html->script('bootstrap.min431.js');
	echo $this->Html->script('common.js');
	//開発時はvue4dev.js 本番時はvue.min.js
	echo $this->Html->script('vue4dev.js', ['defer' => true]);
	echo $this->Html->script('vuecommon.js', ['defer' => true]);
	echo $this->Html->script('vuecomponents.js', ['defer' => true]);
	echo $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js');

	echo $this->Html->css('common.css');
	echo $this->Html->css('bootstrap.min431.css');
	echo $this->Html->css('https://use.fontawesome.com/releases/v5.0.1/css/all.css');
	echo $this->Html->css('https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@300;400;500;600&family=Sawarabi+Mincho&display=swap');
	echo $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.2.1/font-awesome-animation.css');
	echo $this->Html->css("https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css");


	echo $this->Html->css('style.css');
	echo $this->Html->css('animate.css');

	?>
</head>


<body>

	<!-- decide language from lang parameter -->
	<style tyle="text/css">
		<?php if (($this->request->getQuery('lang') === 'en') or ($this->request->getData('lang') === 'en')) { ?>.en {
			visibility: visible;
		}

		.ja {
			display: none;
		}

		.fr {
			display: none;
		}

		<?php 	} elseif (($this->request->getQuery('lang') === 'fr') or ($this->request->getData('lang') === 'fr')) { ?>.fr {
			visibility: visible;
		}

		.ja {
			display: none;
		}

		.en {
			display: none;
		}

		<?php 	} else { ?>.ja {
			visibility: visible;
		}

		.fr {
			display: none;
		}

		.en {
			display: none;
		}

		<?php   } ?>
	</style>

	<!--<div id="header">
	</div>-->

	<div id="contents">
		<div id="wrap"></div>


		<?php
		echo $this->fetch('content');
		?>

	</div>

	<div id=footer>
		<hr id=footerhr>
		<div id="footertext" class="p-3">
			©︎ <? echo date('Y') ?> JSICMF All Rights Reserved.
		</div>
	</div>
	<p id="page-top"><a href="#wrap"><i class="fas fa-chevron-up fa-2x" style="color: #FF6100;"></i></a></p>

</body>


</html>
<div class="under800px">
	<nav class="navbar navbar-dark bg-dark">
		<a href="#" class="navbar-brand"><span class="f90">一般社団法人日本国際交詢協会</span></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navmenu1" aria-controls="navmenu1" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navmenu1">
			<div class="navbar-nav">
				<a class="nav-item nav-link" href="<?php echo $this->Url->build('/contents/index') ?>?lang=<? echo $lang; ?>">TOP</a>
				<a class="nav-item nav-link" href="<?php echo $this->Url->build('/contents/work') ?>?lang=<? echo $lang; ?>"><span class="ja">事業内容</span><span class="fr">Nos services</span><span class="en">Our services</span></a>
				<a class="nav-item nav-link" href="<?php echo $this->Url->build('/contents/result') ?>?lang=<? echo $lang; ?>"><span class="ja">実績</span><span class="fr">Réalisations</span><span class="en">Results</span></a>
				<a class="nav-item nav-link" href="<?php echo $this->Url->build('/contents/fromrep') ?>?lang=<? echo $lang; ?>"><span class="ja">代表から</span><span class="fr">Message du président</span><span class="en">Message from the president</span></a>
				<a class="nav-item nav-link" href="<?php echo $this->Url->build('/contents/companyinfo') ?>?lang=<? echo $lang; ?>"><span class="ja">協会概要</span><span class="fr">Résumé</span><span class="en">Summary</span></a>
				<a class="nav-item nav-link" href="<?php echo $this->Url->build('/contents/reginq') ?>?lang=<? echo $lang; ?>">CONTACT</a>
				<br />
				<?php if ($lang === 'fr') { ?>
					<li class="nav-item nav-style">
						<a class="nav-link faa-parent animated-hover" href="<?php echo $this->Url->build('/contents/') . $this->request->getParam('action') ?>/?lang=ja"><span class="f80"><span class="text-light font-weight-bold">日本語</span></a>
					</li>
					<li class="nav-item nav-style">
						<a class="nav-link faa-parent animated-hover" href="<?php echo $this->Url->build('/contents/') . $this->request->getParam('action') ?>/?lang=en"><span class="f80"><span class="text-light font-weight-bold">English</span></a></span>
					</li>
				<?php } elseif ($lang === 'en') { ?>
					<li class="nav-item nav-style">
						<a class="nav-link faa-parent animated-hover" href="<?php echo $this->Url->build('/contents/') . $this->request->getParam('action') ?>/?lang=ja"><span class="f80"><span class="text-light font-weight-bold">日本語</span></a>
					</li>
					<li class="nav-item nav-style">
						<a class="nav-link faa-parent animated-hover" href="<?php echo $this->Url->build('/contents/') . $this->request->getParam('action') ?>/?lang=fr"><span class="f80"><span class="text-light font-weight-bold">Français</span></a></span>
					</li>
				<?php } else { ?>
					<li class="nav-item nav-style">
						<a class="nav-link faa-parent animated-hover" href="<?php echo $this->Url->build('/contents/') . $this->request->getParam('action') ?>/?lang=fr"><span class="f80"><span class="text-light font-weight-bold">Français</span></a>
					</li>
					<li class="nav-item nav-style">
						<a class="nav-link faa-parent animated-hover" href="<?php echo $this->Url->build('/contents/') . $this->request->getParam('action') ?>?lang=en"><span class="f80"><span class="text-light font-weight-bold">English</span></a></span>
					</li>
				<?php } ?>
			</div>
		</div>
	</nav>
</div>

<div class="over800px">

	<div class="container">
		<div class="row">
			<nav class="navbar navbar-expand-md navbar-light fixed-top" style="padding:0rem 0rem !important;">
				<div class="col-3" style="padding:0.5rem;">
					<a class="navbar-brand" href="<?php echo $this->Url->build('/contents/index') ?>?lang=<?php echo $lang ?>"><img src="<?php echo $this->Url->build('/') . 'img/logo_jsicmf1.png'; ?>" style="width:300px; height:50px;" class="header_logo"></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
				</div>
				<div class="col-1 navbar-jsicmfcommon">&nbsp;</div>
				<div id="bgchg_with_vue" class="col-8 collapse navbar-collapse navbar-jsicmfcommon" v-bind:class="{ bg_jsicmf: isBgBlue }">
					<ul class="navbar-nav mr-auto w-80 nav-justified">
						<li class="nav-item nav-style">
							<a class="nav-link faa-parent animated-hover" href="<?php echo $this->Url->build('/contents/index') ?>?lang=<?php echo $lang ?>"><span class="f90"><span class="text-light font-weight-bold">TOP</span></span></a>
						</li>
						<li class="nav-item nav-style <?php $action === 'work' ? print 'selected' : print ''; ?> <?php ($lang === 'fr' || $lang === 'en') ? print 'line2' : print ''; ?>">
							<a class="nav-link faa-parent animated-hover" href="<?php echo $this->Url->build('/contents/work') ?>?lang=<?php echo $lang ?>"><span class="text-light font-weight-bold"><span class="ja f90">事業内容</span><span class="fr f90">Nos<br />services</span><span class="en f85">Our<br />services</span></span></a></span>
						</li>
						<li class="nav-item nav-style <?php $action === 'result' ? print 'selected' : print ''; ?>">
							<a class="nav-link faa-parent animated-hover" href="<?php echo $this->Url->build('/contents/result') ?>?lang=<?php echo $lang ?>"><span class="f90"><span class="text-light font-weight-bold"><span class="ja">実績</span><span class="fr">Réalisations</span><span class="en">Results</span></span></a>
						</li>
						<li class="nav-item nav-style <?php $action === 'fromrep' ? print 'selected' : print ''; ?> <?php ($lang === 'fr' || $lang === 'en') ? print 'line2' : print ''; ?>">
							<a class="nav-link faa-parent animated-hover" href="<?php echo $this->Url->build('/contents/fromrep') ?>?lang=<?php echo $lang ?>"><span class="text-light font-weight-bold"><span class="ja f90">代表から</span><span class="fr f85">Message du<br /> président</span><span class="en f70">Message from<br /> the president</span></span></a>
						</li>
						<li class="nav-item nav-style <?php $action === 'companyinfo' ? print 'selected' : print ''; ?>">
							<a class="nav-link faa-parent animated-hover" href="<?php echo $this->Url->build('/contents/companyinfo') ?>?lang=<?php echo $lang ?>"><span class="f90"><span class="text-light font-weight-bold"><span class="ja">協会概要</span><span class="fr">Résumé</span><span class="en">Summary</span></span></a>
						</li>
						<li class="nav-item nav-style <?php $action === 'reginq' ? print 'selected' : print ''; ?>">
							<a class="nav-link faa-parent animated-hover" href="<?php echo $this->Url->build('/contents/reginq') ?>?lang=<?php echo $lang ?>"><span class="f80"><span class="text-light font-weight-bold"><i class="far fa-envelope fa-fw"></i>CONTACT</span></a></span>
						</li>
					</ul>
					<ul class="navbar-nav mr-auto w-3 nav-justified"></ul>
					<ul class="navbar-nav mr-auto w-17 nav-justified">
						<?php if ($lang === 'fr') { ?>
							<li class="nav-item nav-style">
								<a class="nav-link faa-parent animated-hover" href="<?php echo $this->Url->build('/contents/') . $this->request->getParam('action') ?>/?lang=ja"><span class="f75"><span class="text-light font-weight-bold">日本語</span></a>
							</li>
							<li class="nav-item nav-style">
								<a class="nav-link faa-parent animated-hover" href="<?php echo $this->Url->build('/contents/') . $this->request->getParam('action') ?>/?lang=en"><span class="f75"><span class="text-light font-weight-bold">English</span></a></span>
							</li>
						<?php } elseif ($lang === 'en') { ?>
							<li class="nav-item nav-style">
								<a class="nav-link faa-parent animated-hover" href="<?php echo $this->Url->build('/contents/') . $this->request->getParam('action') ?>/?lang=ja"><span class="f75"><span class="text-light font-weight-bold">日本語</span></a>
							</li>
							<li class="nav-item nav-style">
								<a class="nav-link faa-parent animated-hover" href="<?php echo $this->Url->build('/contents/') . $this->request->getParam('action') ?>/?lang=fr"><span class="f75"><span class="text-light font-weight-bold">Français</span></a></span>
							</li>
						<?php } else { ?>
							<li class="nav-item nav-style">
								<a class="nav-link faa-parent animated-hover" href="<?php echo $this->Url->build('/contents/') . $this->request->getParam('action') ?>/?lang=fr"><span class="f75"><span class="text-light font-weight-bold">Français</span></a>
							</li>
							<li class="nav-item nav-style">
								<a class="nav-link faa-parent animated-hover" href="<?php echo $this->Url->build('/contents/') . $this->request->getParam('action') ?>?lang=en"><span class="f75"><span class="text-light font-weight-bold">English</span></a></span>
							</li>
						<?php } ?>
					</ul>
				</div>

			</nav>

		</div>
	</div>
</div>
<main role="main">

    <!-- header menu -->
    <?php echo $this->element('navbar'); ?>

    <div id="scval">
        <!-- メイン画像 -->
        <!--PC-->

        <!--
            <div class="jumbotron jumbotron-fluid headertop  over800px" style="height:50rem; margin-top:-50px;">
                <h1 class="display-4 jsicmf_toptitlefont ja" style="position: absolute; top:40%; left:50%;">
                    <span class="text-light">日本国際交詢協会</span>
                </h1>
                <h1 class="display-4 jsicmf_toptitlefont fr" style="position: absolute; top:30%; left:25%;">
                    <span class="text-light">Japanese Society for International<br /> cultivation of mutual friendship</span>
                </h1>
                <h1 class="display-4 jsicmf_toptitlefont en" style="position: absolute; top:30%; left:25%;">
                    <span class="text-light">Japanese Society for International<br /> cultivation of mutual friendship</span>
                </h1>
            </div>
            -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class=" headertop over800px headertop slide-img" style="margin-top:-50px;">
                        <div class="slide-text">
                            <h1 class=" jsicmf_toptitlefont ja" style="position: absolute; top:40%; left:50%;">
                                <p><span class="text-light">日本国際交詢協会</span></p>
                            </h1>
                            <h1 class=" jsicmf_toptitlefont fr" style="position: absolute; top:20%; left:25%;">
                                <p><span class="text-light">Japanese Society for <br />International cultivation of <br />mutual friendship</span></p>
                            </h1>
                            <h1 class=" jsicmf_toptitlefont en" style="position: absolute; top:20%; left:25%;">
                                <p><span class="text-light">Japanese Society for <br />International cultivation of <br />mutual friendship</span></p>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--SM,Tablet-->
        <div class="jumbotron headertop under800px text-center" style="height:20rem; margin-top:-10px;">
            <h1 class="display-5 jsicmf_toptitlefont ja" style=" padding-top:5vh;">
                <span class="text-light">日本国際<br />交詢協会</span>
            </h1>
            <h1 class="display-5 jsicmf_toptitlefont fr" style="padding-top:5vh; font-size:1.5rem; !important;">
                <span class="text-light">Japanese Society for International<br /> cultivation of mutual friendship</span>
            </h1>
            <h1 class="display-5 jsicmf_toptitlefont en" style="padding-top:5vh; font-size:1.5rem; !important;">
                <span class="text-light">Japanese Society for International<br /> cultivation of mutual friendship</span>
            </h1>
        </div>


        <!-- about us -->
        <div class="container-fluid mb-5">
            <div class="row">
                <div class="col-12 text-center mt-4 mb-4">
                    <span class="f200 font-weight-bold ja">日本国際交詢協会について</span>
                    <span class="f200 font-weight-bold fr">À propos</span>
                    <span class="f200 font-weight-bold en">About us</span>
                </div>
                <div class="col-lg-4 col-xl-4 col-md-12 col-sm-12 col-12 d-flex align-items-center pl-lg-4 pl-xl-4">
                    <span class="f125 ja">フランスやアメリカなど、海外との漫画・アニメコンテンツを中心とした文化交流活動の支援を行っております。</span>
                    <span class="f125 fr">Nous apportons notre soutien aux échanges culturels centrés sur l'animation et les mangas, entre le Japon et la France, les États-Unis.</span>
                    <span class="f125 en">We endeavor to support cultural exchanges centered on media such as anime, manga, between Japan and other countries such as the US or France.</span>
                </div>

                <div class="col-lg-8 col-xl-8 col-md-12 col-sm-12 col-12">
                    <!--PC-->
                    <img src="<?php echo $this->Url->build('/') . 'img/top_image1.jpg' ?>" class="fadein over800px" style="width:100%; max-height:300px; object-fit: cover; margin-left:15px;">
                    <!--SM Tablet-->
                    <img src="<?php echo $this->Url->build('/') . 'img/top_image1.jpg' ?>" class="mt-3 fadein under800px" style="width:100%; max-height:300px; object-fit: cover;">
                </div>
            </div>
        </div>

        <!-- our services -->
        <div class="container-fluid pt-5 pb-6 bg_ourservice fadein">
            <div class="row">
                <div class="col-12 text-center mb-4"><span class="f200 font-weight-bold ja">事業内容</span><span class="f150 font-weight-bold fr">Nos services</span><span class="f150 font-weight-bold en">Our services</span></div>
                <div class="col-12 text-center mb-4">
                    <span class="f125 ja">作品の翻訳から通訳、また海外展開についての相談まで幅広く対応させていただきます。</span>
                    <span class="f125 fr">Nous pouvons effectuer diverses tâches, de la traduction à l'interprétariat, en passant par le conseil sur le développement à l'étranger pour les entreprises japonaises.</span>
                    <span class="f125 en">We can perform a wide array of tasks, ranging from translation to interpretation and including counsel for Japanese companies wishing to develop their activities abroad.</span>
                </div>
                <div class="col-2">&nbsp;</div>
                <div class="col-lg-8 col-xl-8 col-md-12 col-sm-12 col-12">
                    <div class="row">
                        <div class="col-lg-4 col-xl-4 col-md-4 col-sm-4 col-12 text-center mb-1 txtoverlay"><img src="<?php echo $this->Url->build('/') . 'img/translation.jpg' ?>" width=180>
                            <p><span class="ja">翻訳</span><span class="fr">Traduction</span><span class="en">Translation</span></p>
                        </div>
                        <div class="col-lg-4 col-xl-4 col-md-4 col-sm-4 col-12 text-center mb-1 txtoverlay"><img src="<?php echo $this->Url->build('/') . 'img/interpretation.jpg' ?>" width=180>
                            <p><span class="ja">通訳</span><span class="fr">Interprétariat</span><span class="en">Interpretation</span></p>
                        </div>
                        <div class="col-lg-4 col-xl-4 col-md-4 col-sm-4 col-12 text-center mb-1 txtoverlay"><img src="<?php echo $this->Url->build('/') . 'img/consulting.jpg' ?>" width=180>
                            <p><span class="ja">コンサルティング</span><span class="fr">Conseil</span><span class="en">Consulting</span>
                        </div>
                    </div>
                </div>
                <div class="col-2">&nbsp;</div>
            </div>
        </div>

        <!-- result -->
        <div class="container-fluid pt-5 bg_results fadein">
            <div class="row">
                <div class="col-lg-4 col-xl-4 col-md-4 col-sm-12 col-12 d-sm-flex d-md-flex d-lg-flex d-xl-flex align-items-center">
                    <div class="row">
                        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12 col-12 text-center pl-sm-5 pl-md-5 pl-lg-5 pl-xl-5">
                            <span class="f200 font-weight-bold text-light ja">実績</span>
                            <span class="f150 font-weight-bold text-light fr">Réalisations</span>
                            <span class="f150 font-weight-bold text-light en">Results</span>
                        </div>
                        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12 col-12 mt-4 text-center pl-sm-5 pl-md-5 pl-lg-5 pl-xl-5 mb-3">
                            <a class="btn btn-outline-light rounded-pill" href="<?php echo $this->Url->build('/') . 'contents/result?lang=' . $lang; ?>" role="button">
                                <span class="ja faa-parent animated-hover">&nbsp;&nbsp;実績一覧&nbsp;&nbsp;<i class="fas fa-chevron-right fa-fw faa-passing"></i>&nbsp;</span>
                                <span class="fr faa-parent animated-hover">Liste de nos réalisations&nbsp;<i class="fas fa-fw fa-chevron-right fa-fw faa-passing"></i>&nbsp;</span>
                                <span class="en faa-parent animated-hover">List of results&nbsp;<i class="fas fa-fw fa-chevron-right fa-fw faa-passing"></i>&nbsp;</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-xl-7 col-md-8 col-sm-12 col-12">
                    <div class="row">
                        <?php
                        //$i=0;
                        foreach ($results as $row) {
                            // $i++;
                            echo '<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">';
                            echo '<div class="row">';
                            echo '<div class="col-12 text-center"><img src="' . $this->Url->build('/') . 'img/' . $row->imgpath . '"></div>';
                            echo '<div class="col-12 mt-2 mb-3 text-center text-light">' . $row->body . '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- latest info -->
        <div class="container-fluid mt-4 mb-5 fadein">
            <div class="row">
                <div class="col-12 text-center mt-3 mb-sm-3 mb-3"><span class="f200 font-weight-bold"><span class="ja">更新情報</span><span class="fr">Nouvelles informations</span><span class="en">New information</span></span></div>
                <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
                <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 col-12">
                    <div class="row">
                        <?php
                        //  $i=0;
                        foreach ($latestinfos as $row) {
                            // $i++;
                            // YMD
                            if ($this->request->getQuery('lang') === 'en') {
                                echo '<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 col-4 mb-2">' . $row->mdyreleasedate . ':</div>';
                            } elseif ($this->request->getQuery('lang') === 'fr') {
                                echo '<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 col-4 mb-2">' . $row->dmyreleasedate . ':</div>';
                            } else {
                                echo '<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 col-4 mb-2">' . $row->ymdreleasedate . ':</div>';
                            }
                            // Body
                            if (is_null($row->filepath)) {
                                echo '<div class="col-sm-10 col-md-10 col-lg-10 col-xl-10 col-8 mb-2">' . $row->body . '</div>';
                            } else {
                                echo '<div class="col-sm-10 col-md-10 col-lg-10 col-xl-10 col-8 mb-2"><a href="' . $this->Url->build('/') . 'file/' . $row->filepath .  '">' . $row->body . '</a></div>';
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
    </div>
    <!--</div>-->

</main>

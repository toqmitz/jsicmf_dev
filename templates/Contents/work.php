<main role="main">

    <!-- header menu -->
    <?php echo $this->element('navbar'); ?>

    <div id="scval">
        <!-- メイン画像 -->
        <!--PC-->
        <div class="jumbotron jumbotron-fluid worktop over800px" style="height:40vh; width:100%; margin-top:-50px;">
            <h1 class="display-4 jsicmf_toptitlefont" style="position: absolute; top:15vh; left:50%;"><span class="text-light"><span class="ja">事業内容</span><span class="fr">Nos services</span><span class="en">Our services</span></span></h1>
        </div>
        <!--SM,Tablet-->
        <div class="jumbotron jumbotron-fluid worktop under800px" style="height:10rem; margin-top:-10px;">
            <h1 class="display-5 jsicmf_toptitlefont" style=" padding-top:2vh; padding-left:5vw;">
                <span class="text-light"><span class="f90 ja">事業内容</span><span class="f90 fr">Nos services</span><span class="f90 en">Our services</span></span>
            </h1>
        </div>


        <!-- work -->
        <div class="container-fluid pt-5 mb-6">
            <div class="row">
                <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12 col-12 text-center mb-4">
                    <span class="f125 ja">日本国際交詢協会は、作品を介して、日本・フランス・海外の橋渡しを行っています。</span>
                    <span class="f125 fr">La JSICMF sert de pont entre le Japon, la France et le reste du monde à travers les titres dont elle a la charge.</span>
                    <span class="f125 en">Through the various works it handles, JSICMF acts as a bridge between Japan, France and many other countries.</span>
                </div>
                <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12 col-12 d-sm-flex d-md-flex d-lg-flex d-xl-flex align-items-center">
                    <div class="card-deck">
                        <div class="card" style="width: 100%; min-height:400px;">
                            <div class="txtoverlay">
                                <img src="<?php echo $this->Url->build('/') . 'img/translation2.jpg' ?>" class="img-fluid img-thumbnail">
                                <p><span class="ja">翻訳</span><span class="fr">Translation</span><span class="en">Translation</span></p>
                            </div>
                            <div class="card-body d-flex align-items-center" style="min-height:20vh;">
                                <p class="card-text">
                                    <span class="ja">当社団法人の翻訳スタッフは全員、様々な分野の知識を保有し、エンターテイメント系の番組のみならず、高度な知識を必要とする技術分野、海外と日本の取引の際の契約の理解補助のための翻訳においても実績を保有しております。</span>
                                    <span class="fr">Notre équipe de traducteurs dispose d'expertise et d'expérience dans diverses disciplines et a fait ses preuves non seulement dans le domaine du divertissement audiovisuel, mais également dans la traduction de domaines hautement techniques et dans la traduction de contrats afin de faciliter la compréhension d'une transaction.</span>
                                    <span class="en">Our team of translators possesses expertise and experience in various fields, and has proven itself in the field of visual entertainment, but also in highly technical fields and in assisting in translating legal documentation to assist in understanding a deal.</span>
                                </p>
                            </div>
                        </div>
                        <div class="card" style="width: 100%; min-height:400px;">
                            <div class="txtoverlay">
                                <img src="<?php echo $this->Url->build('/') . 'img/interpretation2.jpg' ?>" class="img-fluid img-thumbnail">
                                <p><span class="ja">通訳</span><span class="fr">Interprètation</span><span class="en">Interpretation</span></p>
                            </div>
                            <div class="card-body d-flex align-items-center" style="min-height:20vh;">
                                <p class="card-text">
                                    <span class="ja">当社団法人の日本在住通訳スタッフはフランス語・英語・日本語のビジネス会議においてのほぼ同時通訳により円滑なコミュニケーションを取るだけでなく、顧客のニーズに応じて、目的達成のための仲介も行えます。</span>
                                    <span class="fr">Notre équipe d'interprètes basée au Japon est capable de faciliter la communication en quasi-temps réel en français/anglais/japonais lors de réunion d'affaires, comme d'aider à la médiation entre deux parties. Assistance dans vos projets et aide à atteindre vos objectifs sont nos maîtres mots.</span>
                                    <span class="en">Our team of interpreters based in Japan is capable of facilitating communication in near-realtime for business meetings in French/English/Japanese, but also of performing mediation between two parties to assist our clients in their projects and in reaching their goals.</span>
                                </p>
                            </div>
                        </div>
                        <div class="card" style="width:100%; min-height:400px;">
                            <div class="txtoverlay">
                                <img src="<?php echo $this->Url->build('/') . 'img/consulting2.jpg' ?>" class="img-fluid img-thumbnail">
                                <p><span class="ja">コンサルティング</span><span class="fr">Consultant</span><span class="en">Consulting</span></p>
                            </div>
                            <div class="card-body d-flex align-items-center">
                                <p class="card-text">
                                    <span class="ja">フランスと日本在住のメンバー及び様々なパートナーを介して、フランス又は日本で活動を考えている個人・団体向けに、コンサルティングを提供しております。</span>
                                    <span class="fr">Grâce à nos membres basés en France et au Japon, ainsi qu'à nos nombreux partenaires, nous fournissons un service de conseil pour assister particuliers et entreprises dans leurs activités en France au Japon.</span>
                                    <span class="en">Thanks to our members located in both France and Japan, and to our many partners, we provide a consulting service to help individuals and businesses in their endeavors involving France and Japan.</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- work2 -->
        <div class="container-fluid mb-5 fadein">
            <div class="row">
                <div class="col-lg-4 col-xl-4 col-md-12 col-sm-12 col-12 d-flex align-items-center">
                    <span class="f125 ja">日本国際交詢協会は、翻訳受注から、翻訳・品質管理・字幕設定までをワンストップで対応できます。</span>
                    <span class="f125 fr">La JSICMF fournit un service 'clés en main' gérant chaque étape à partir de la demande de traduction, y compris la gestion du projet, le garantie qualité, et l'intégration de sous-titres.</span>
                    <span class="f125 en">JSICMF provides a one-stop service, and handles each step starting with the translation request, including project management, QA and subtitle embedding.</span>
                </div>
                <div class="col-lg-8 col-xl-8 col-md-8 col-sm-12 col-12">
                    <!--PC-->
                    <img src="<?php echo $this->Url->build('/') . 'img/work_image1.jpg' ?>" class="fadein over800px" style="width:100%; max-height:300px; object-fit: cover; margin-left:15px;">
                    <!--SM Tablet-->
                    <img src="<?php echo $this->Url->build('/') . 'img/work_image1.jpg' ?>" class="mt-3 fadein under800px" style="width:100%; max-height:300px; object-fit: cover;">
                </div>
                <!--<div class="col-8 text-right mb-4"><img src="https://placehold.jp/9599f0/ffffff/640x480.png?text=Work_img" style="width:100%; object-fit: cover; margin-left:40px;"></div>-->
            </div>
            <div class="row mt-5 fadein">
                <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12 col-12 d-sm-flex d-md-flex d-lg-flex d-xl-flex align-items-center">
                    <div class="card-deck">
                        <div class="card" style="width: 100%;">
                            <div class="txtoverlay">
                                <img src="<?php echo $this->Url->build('/') . 'img/project2.jpg' ?>" class="img-fluid img-thumbnail">
                                <p <?php ($lang === 'en') ? print 'class="card-line2"' : print ''; ?>><span class="ja">プロジェクト進行・管理</span><span class="fr">Gestion et suivi de projet</span><span class="en">Project supervision and management</span></p>
                            </div>
                            <div class="card-body d-flex align-items-center">
                                <p class="card-text">
                                    <span class="ja">当社団法人は、技術分野の実績あるツール・プロセス・手法を翻訳の分野とそのワークフローに活かし、短期案件でも大型長期案件も管理しております。</span>
                                    <span class="fr">Nous utilisons le meilleur des outils, des processus et des méthodologies du milieu informatique, adaptés au travail de traduction afin de gérer vos projets, courts ou longs.</span>
                                    <span class="en">We use the best sound practices from the field of information technology, tools, processes and methods by adapting them to translation workflows in order to manage projects, both short and longterm.</span>
                                </p>
                            </div>
                        </div>
                        <div class="card" style="width: 100%;">
                            <div class="txtoverlay">
                                <img src="<?php echo $this->Url->build('/') . 'img/check2.jpg' ?>" class="img-fluid img-thumbnail">
                                <p <?php ($lang === 'fr') ? print 'class="card-line2"' : print ''; ?>><span class="ja">品質保証・チェック</span><span class="fr">Garantie de qualité <br />et vérification</span><span class="en">QA and checks</span></p>
                            </div>
                            <div class="card-body d-flex align-items-center">
                                <p class="card-text">
                                    <span class="ja">当社団法人の翻訳スタッフは最先端のツールと手法を用いて、厳格な内部精査と変更の追跡のプロセスを実施しており、それにより納品された翻訳のクオリティを保証します。他にも、顧客のニーズに応じて、既存の翻訳の精査と品質保証にも同様のプロセスを適用し、チェックのサービスとして提供しております。</span>
                                    <span class="fr">Notre équipe de traducteurs s'impose un processus de vérification interne et de suivi des plus stricts, et emploie des outils et des méthodes de pointe pour garantir la qualité des travaux rendus. Nous proposons également de mettre ces méthodes à votre service pour valider des traductions existantes.</span>
                                    <span class="en">Our team of translators follows a very strict process of internal verification and change review, using the most recent tools and methods to ensure the quality of delivered works. We also enable our customers to benefit of these methods to validate existing translations.</span>
                                </p>
                            </div>
                        </div>
                        <div class="card" style="width: 100%;">
                            <div class="txtoverlay">
                                <img src="<?php echo $this->Url->build('/') . 'img/overseas2.jpg' ?>" class="img-fluid img-thumbnail">
                                <p <?php ($lang === 'fr' || $lang === 'en') ? print 'class="card-line2"' : print ''; ?>><span class="ja">海外展開</span><span class="fr">Développement d'activité <br />hors du Japon</span><span class="en">Developping activities <br />outside of Japan</span></p>
                            </div>
                            <div class="card-body d-flex align-items-center">
                                <p class="card-text">
                                    <span class="ja">当社団法人は顧客と共に、日本から海外へ、海外から日本へと展開を支援してまいります。</span>
                                    <span class="fr">Nous sommes là pour vous soutenir dans vos projets d'avenir pour vous déployer au Japon et à l'étranger.</span>
                                    <span class="en">We are here to help you in your endeavors for expanding your activities in Japan or abroad.</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- regulation -->
        <div class="container-fluid mb-7 fadein">
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <span class="f200 font-weight-bold ja">翻訳サービスについての利用規約</span>
                    <span class="f150 font-weight-bold fr">Charte du service de traduction</span>
                    <span class="f150 font-weight-bold en">Translation service terms of usage</span>
                </div>
                <div class="col-10 pl-5">
                    <p class="mb-3">
                        <span class="f115 ja">以下リンク先(PDFファイル)をクリックしてご覧ください。</span>
                        <span class="f115 fr">Veuillez cliquer le lien (PDF) pour la consulter.</span>
                        <span class="f115 en">Please click the link (PDF) to check the terms</span>
                    </p>
                </div>
                <div class="col-10 pl-5 mb-8">
                    <span class="f110"><i class="fas fa-chevron-right"></i>&nbsp;日本語 (Japonais / Japanese)&nbsp;<a href=<?php echo $this->Url->build('/') . 'file/JSICMF_honyakukiyaku-JA.pdf' ?> class="linktxt"><i class="fas fa-lg fa-download"></i></span></a></span><br />
                    <span class="f110"><i class="fas fa-chevron-right"></i>&nbsp;Français (フランス語 / French)&nbsp;<a href=<?php echo $this->Url->build('/') . 'file/Charte-de-traduction-JSICMF-FR.pdf' ?> class="linktxt"><i class="fas fa-lg fa-download "></i></a></span><br />
                    <span class="f110"><i class="fas fa-chevron-right"></i>&nbsp;English (英語 / Anglais)&nbsp;<a href=<?php echo $this->Url->build('/') . 'file/JSICMF-Translation-Service-Terms-of-Usage-EN.pdf' ?> class="linktxt"><i class="fas fa-lg fa-download"></i></a></span>
                </div>
            </div>
        </div>

        <!-- result -->
        <!--PC-->
        <div class="jumbotron resulttop fadein over800px" style="height:20rem; width:100%; ">
            <div class="col-12 text-center mb-5">
                <span class="f150 font-weight-bold text-light ja">実績</span>
                <span class="f150 font-weight-bold text-light fr">Résultats</span>
                <span class="f150 font-weight-bold text-light en">Results</span>
            </div>
            <div class="col-12 mt-4 text-center">
                <a class="btn btn-outline-light rounded-pill" href="<?php echo $this->Url->build('/') . 'contents/result?lang=' . $lang; ?>" role="button">
                    <span class="ja faa-parent animated-hover">&nbsp;&nbsp;実績一覧&nbsp;&nbsp;<i class="fas fa-chevron-right fa-fw faa-passing"></i></span>
                    <span class="fr faa-parent animated-hover">Liste de nos résultats&nbsp;<i class="fas fa-chevron-right fa-fw faa-passing"></i>&nbsp;</span>
                    <span class="en faa-parent animated-hover">List of results&nbsp;<i class="fas fa-chevron-right fa-fw faa-passing"></i>&nbsp;</span>
                </a>
            </div>
        </div>
        <!--SM,Tablet-->
        <div class="jumbotron resulttop fadein under800px" style="height:10rem; width:100%; ">
            <div class="col-12 text-center mb-2">
                <span class="f150 font-weight-bold text-light ja">実績</span>
                <span class="f150 font-weight-bold text-light fr">Résultats</span>
                <span class="f150 font-weight-bold text-light en">Results</span>
            </div>
            <div class="col-12 mt-4 text-center">
                <a class="btn btn-outline-light rounded-pill" href="<?php echo $this->Url->build('/') . 'contents/result?lang=' . $lang; ?>" role="button">
                    <span class="ja faa-parent animated-hover">&nbsp;&nbsp;実績一覧&nbsp;&nbsp;<i class="fas fa-chevron-right fa-fw faa-passing"></i></span>
                    <span class="fr faa-parent animated-hover">Liste de nos résultats&nbsp;<i class="fas fa-chevron-right fa-fw faa-passing"></i>&nbsp;</span>
                    <span class="en faa-parent animated-hover">List of results&nbsp;<i class="fas fa-chevron-right fa-fw faa-passing"></i>&nbsp;</span>
                </a>
            </div>
        </div>
    </div>
<main role="main">

    <!-- header menu -->
    <?php echo $this->element('navbar'); ?>

    <div id="scval">
        <!-- メイン画像 -->
        <!--PC-->
        <div class="jumbotron jumbotron-fluid worktop over800px" style="height:40vh; width:100%; margin-top:-50px;">
            <h1 class="display-4 jsicmf_toptitlefont" style="position: absolute; top:15vh; left:50%;"><span class="text-light"><span class="ja">代表から</span><span class="fr">Message</span><span class="en">Message</span></span></h1>
        </div>
        <!--SM,Tablet-->
        <div class="jumbotron jumbotron-fluid worktop under800px" style="height:10rem; margin-top:-10px;">
            <h1 class="display-5 jsicmf_toptitlefont" style=" padding-top:2vh; padding-left:5vw;">
                <span class="text-light"><span class="text-light"><span class="ja">代表から</span><span class="fr">Message</span><span class="en">Message</span></span>
            </h1>
        </div>

        <!-- fromrep -->
        <div class="container-fluid pt-5 mb-6">
            <div class="row">
                <div class="col-lg-8 col-xl-8 col-md-12 col-sm-12 col-12">
                    <p class="text-center mb-5">
                        <span class="f200 ja">代表メッセージ</span>
                        <span class="f200 fr">Message</span>
                        <span class="f200 en">Message</span>
                    </p>
                    <div class="row">
                        <div class="col-lg-2 col-xl-2 col-md-12 col-sm-12 col-12">&nbsp;</div>
                        <div class="col-lg-10 col-xl-10 col-md-12 col-sm-12 col-12">
                            <span class="ja">
                                みなさんこんにちは。
                                <br />日本国際交詢協会のホームページへようこそお越しくださいました。
                                まずは、当社団法人の設立について、語らせていただきます。<br />
                                以前より、アニメや漫画などのコンテンツをフランスに紹介するイベントに関わってまいりましたが、
                                その場において、日本の事業者様・クリエイタの皆様との出会い、そして、共に実現していったプロジェクト…などなど、大変得がたい経験をしてまいりました。<br />
                                これを次の段階に導こうと、志をともにした仲間と一緒に、日本とフランス・海外との「橋渡し」の役割を担うべく、当協会を設立いたしました。<br />
                                当協会の名前にもあります、「交詢」（コウジュン）という言葉ですが、これは、「交流」よりもさらに一歩を踏み込んで、お互いに誠意を尽くして、共に歩んでいくという気持ちを込めて命名いたしました。<br />
                                フランス及び海外での出展等の企画から、翻訳、ちょっとした海外においての疑問など、些細なことでもかまいません。<br />
                                ぜひお気軽に、お声がけください。<br />
                                日本と海外が皆様にとって、もっと近くなるように。<br /><br />
                                Stéphane Lapie
                            </span>
                            <span class="fr">
                                Bonjour à tous, et bienvenue sur le site de la JSICMF - Japanese Society for International Cultivation of Mutual Friendship.<br />
                                Permettez-moi tout d'abord de vous parler des raisons qui nous ont poussés, moi ainsi que nos membres, à fonder notre organisation.<br />
                                Nous étions impliqués de longue date dans les conventions françaises liées à la culture autour de l'animation japonaise et du manga, et nous y avons ainsi rencontré divers acteurs de ce milieu, tant des entreprises que des créateurs, allant jusqu'à monter ensemble des projets, qui se sont concrétisés. Encore aujourd'hui, cela est pour nous une expérience unique et irremplaçable.<br />
                                Afin de pouvoir passer à la vitesse supérieure, nos compagnons d'épopée qui partagaient cette volonté de servir de pont entre le Japon et le reste du monde, à commencer par la France, ont donc choisi de fonder cette société.<br />
                                Notre nom japonais comprend le concept de 交詢 (kōjun), que nous traduisons dans notre nom anglais par ""la cultivation d'une amitié réciproque"", ce que nous entendons comme étant la création d'une relation plus forte et plus longue que ce qu'implique le simple concept d'""échange"", 交流 (kōryū). En tant que tel, nous visons de pouvoir créer une relation spéciale avec nos clients et partenaires, sur la durée, empreinte de sincérité et d'honnêteté.<br />
                                Si vous avez besoin d'aide en traduction, ou même simplement de simples questions sur le Japon pour un partenariat, n'hésitez pas à nous contacter.<br />
                                En espérant pouvoir rapprocher le Japon et le reste du monde.<br />
                                Stéphane Lapie<br /><br />
                            </span>
                            <span class="en">
                                Hello everyone, and welcome to the Japanese Society for International Cultivation of Mutual Friendship.<br />
                                First of all, allow me to relate why we decided, me and all of our members, to create such an organization.<br />
                                We had been involved for years in French conventions related to Japanese anime and manga, and this led us to meet and exchange with various people, both companies and creators, with whom we went on to concretize several projects together. Even now, this was for us an irrepleacable and unique experience which we treasure.<br />
                                However, we did not want to stop at this, and in order to do more, all of us who shared this will to act as a bridge between Japan and the rest of the world, agreed to take a bold step and register ourselves as an aggregate corporation.<br />
                                Our name as in Japanese mentions the concept of 交詢 (kōjun), which we chose to render as ""Cultivation of Mutual Friendship"". By this word, we chose to mention a deeper, stronger and longer relationship than what the more common concept of ""exchange"", 交流 (kōryū), implies. As such, we strive to create a special relationship with our clients and partners, one of mutual, earnest trust that shall last.<br />
                                Should you have any inquiry regarding translation, or merely questions about a partnership with Japan, feel free to contact us.<br />
                                With the earnest hope Japan and the rest of the world will grow closer.<br />
                                Stéphane Lapie<br /><br />
                            </span>
                            <br />
                            <?
                            echo '<img src="' . $this->Url->build('/') . 'img/signature.jpg" style="width:25vw;">';
                            ?>
                        </div>
                    </div>
                </div>
                <div class="over800px col-4 d-flex d-flex align-items-center">
                    <?php
                    echo '<img src="' . $this->Url->build('/') . 'img/stephaneimage.jpg" style="width:30vw;" class="over800px">';
                    ?>
                </div>
            </div>
        </div>
    </div>


    </div>
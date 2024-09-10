<main role="main">

    <!-- header menu -->
    <?php echo $this->element('navbar'); ?>

    <!-- メイン画像 -->
    <div id="scval">
        <!--PC-->
        <div class="jumbotron jumbotron-fluid resulttop over800px" style="height:40vh; width:100%; margin-top:-50px;">
            <h1 class="display-4 jsicmf_toptitlefont" style="position: absolute; top:15vh; left:50%;"><span class="text-light"><span class="ja">実績</span><span class="fr">Réalisations</span><span class="en">Results</span></span></h1>
        </div>
        <!--SM,Tablet-->
        <div class="jumbotron jumbotron-fluid resulttop under800px" style="height:10rem; margin-top:-10px;">
            <h1 class="display-5 jsicmf_toptitlefont" style=" padding-top:2vh; padding-left:5vw;">
                <span class="text-light"><span class="text-light"><span class="ja">実績</span><span class="fr">Réalisations</span><span class="en">Results</span></span>
            </h1>
        </div>

        <!-- result -->
        <div class="container-fluid pt-5">

            <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12 col-12 text-center mb-3">
                <span class="f120 ja">日本国際交詢協会は、皆様と共に進んでまいります！</span>
                <span class="f120 fr">La JSICMF, avec vous !</span>
                <span class="f120 en">JSICMF, together with you!</span>
            </div>

            <!-- result list -->
            <?php
            for ($y = date('Y'); $y > 2008; $y -= 1) {
                //comeoutyearにあるレコードの年（＝実績が1件でもある年）のみ表示
                if (in_array($y, array_column($workyears, 'comeoutyear'))) {
                    $y === date('Y')  ? print '<div class="row">' : print '<div class="row fadein">';
                    echo '<div class="col-lg-12 col-xl-12 col-md-12 col-sm-12 col-12 text-center">';
                    echo '<span class="f200 font-weight-bold">' . $y . '</span>';
                    echo '</div>';
                    echo '<div class="col-lg-12 col-xl-12 col-md-12 col-sm-12 col-12">';
                    echo '<div class="row">';

                    $count = 1;
                    foreach ($results as $row) {
                        if ((string)$y === $row->comeoutyear) {

                            echo '<div class="col-lg-6 col-xl-6 col-md-6 col-sm-12 col-12">';
                            echo '<div class="row">';
                            echo '<div class="col-lg-12 col-xl-12 col-md-12 col-sm-12 col-12 text-center"><img src="' . $this->Url->build('/') . 'img/' . $row->imgpath . '"></div>';
                            echo '<div class="col-lg-12 col-xl-12 col-md-12 col-sm-12 col-12 text-center">' . $row->workperiod . '</div>';
                            if ($count % 2 === 0) {
                                echo '<div class="col-lg-12 col-xl-12 col-md-12 col-sm-12 col-12 text-left mb-3 pl-lg-3 pl-xl-3">' . $row->body . '</div>';
                            } else {
                                echo '<div class="col-lg-12 col-xl-12 col-md-12 col-sm-12 col-12 text-left mb-3 pl-lg-5 pl-xl-5">' . $row->body . '</div>';
                            }

                            echo '</div>';
                            echo '</div>';
                        }
                        $count++;
                    }
                    echo '</div></div>';
                    echo '</div>';
                }
            }

            ?>

        </div>
    </div>
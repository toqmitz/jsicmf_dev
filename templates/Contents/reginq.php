<main role="main">
<script src="https://www.google.com/recaptcha/api.js" async defer></script>


    <!-- header menu -->
    <?php echo $this->element('navbar'); ?>

    <div id="scval">
        <!-- メイン画像 -->
        <!--PC-->
        <div class="jumbotron jumbotron-fluid inquirytop over800px" style="height:40vh; width:100%; margin-top:-50px;">
            <h1 class="display-4 jsicmf_toptitlefont" style="position: absolute; top:15vh; left:50%;"><span class="text-light"><span class="text-light"><span class="ja">お問合せ</span><span class="fr">Contact</span><span class="en">Contact</span></span></h1>
        </div>
        <!--SM,Tablet-->
        <div class="jumbotron jumbotron-fluid inquirytop under800px" style="height:10rem; margin-top:-10px;">
            <h1 class="display-5 jsicmf_toptitlefont" style=" padding-top:2vh; padding-left:5vw;">
                <span class="text-light"><span class="text-light"><span class="text-light"><span class="text-light"><span class="ja">お問合せ</span><span class="fr">Contact</span><span class="en">Contact</span></span>
            </h1>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12 col-12">
                    <?php
                    echo $this->Form->create(null, ['type' => 'post', 'url' => ['controller' => 'Contents', 'action' => 'confinq']]);
                    ?>
                    <table class="table">
                        <thead class="thead-light table-bordered">
                            <tr>
                                <th class="w-35">
                                    <span class="ja">貴社名・お名前 <span class="badge badge-danger">必須</span></span>
                                    <span class="fr">Votre nom / Nom d'entreprise <span class="badge badge-danger">Requis</span></span>
                                    <span class="en">Your name / Company name <span class="badge badge-danger">Required</span></span>
                                </th>
                                <td class="w-65">
                                    <?php


                                    if (!empty($this->request->getData('namae'))) {
                                        $bufnamae = h($this->request->getData('namae'));
                                    } else {
                                        $bufnamae = '';
                                    }
                                    echo $this->Form->input('namae', array(
                                        'label' => false,
                                        'type' => 'text',
                                        'value' => '',
                                        'size' => '30',
                                        'maxlength' => '40',
                                        'id' => 'inputnamae',
                                        'value' => $bufnamae,
                                        'class' => 'inputformnamae',
                                        'required' => true
                                    ));

                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th class="w-35">
                                    <span class="ja">フリガナ</span>
                                    <span class="fr">Furigana (lecture)</span>
                                    <span class="en">Furigana (reading)</span>
                                </th>
                                <td class="w-65">
                                    <?php
                                    if (!empty($this->request->getData('furigana'))) {
                                        $buffurigana = h($this->request->getData('furigana'));
                                    } else {
                                        $buffurigana = '';
                                    }
                                    echo $this->Form->input('furigana', array(
                                        'label' => false,
                                        'type' => 'text',
                                        'value' => '',
                                        'size' => '30',
                                        'maxlength' => '40',
                                        'id' => 'inputfurigana',
                                        'value' => $buffurigana,
                                        'class' => 'inputformfurigana',
                                        'required' => false
                                    ));
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th class="w-35">
                                    <span class="ja">メールアドレス <span class="badge badge-danger">必須</span></span>
                                    <span class="fr">Adresse e-mail <span class="badge badge-danger">Requis</span></span>
                                    <span class="en">E-mail address <span class="badge badge-danger">Required</span></span>
                                </th>
                                <td class="w-65">
                                    <?php
                                    if (!empty($this->request->getData('mailaddress'))) {
                                        $bufmailaddress = h($this->request->getData('mailaddress'));
                                    } else {
                                        $bufmailaddress = '';
                                    }
                                    echo $this->Form->input('mailaddress', array(
                                        'label' => false,
                                        'type' => 'text',
                                        'value' => '',
                                        'size' => '40',
                                        'maxlength' => '100',
                                        'id' => 'inputmailaddress',
                                        'pattern' => '[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}',
                                        'value' => $bufmailaddress,
                                        'class' => 'inputformmailaddress',
                                        'required' => true
                                    ));
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th class="w-35">
                                    <span class="ja">電話番号 <span class="badge badge-danger">必須</span></span>
                                    <span class="fr">Numéro de téléphone <span class="badge badge-danger">Requis</span></span>
                                    <span class="en">Phone number <span class="badge badge-danger">Required</span></span>
                                </th>
                                <td class="w-65">
                                    <?php
                                    if (!empty($this->request->getData('telno'))) {
                                        $buftelno = h($this->request->getData('telno'));
                                    } else {
                                        $buftelno = '';
                                    }
                                    echo $this->Form->input('telno', array(
                                        'label' => false,
                                        'type' => 'text',
                                        'value' => '',
                                        'size' => '40',
                                        'maxlength' => '20',
                                        'id' => 'inputtelno',
                                        'value' => $buftelno,
                                        'class' => 'inputformtelno',
                                        'required' => true
                                    ));
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th class="align-middle w-35">
                                    <span class="ja">ご質問・ご連絡などありましたらご記入ください。</span>
                                    <span class="fr">Veuillez inscrire vos questions ou demandes ci-dessous.</span>
                                    <span class="en">Please write your inquiries below.</span>
                                </th>
                                <td class="w-65">
                                    <?php
                                    if (!empty($this->request->getData('inqtxt'))) {
                                        $bufinquiry = h($this->request->getData('inqtxt'));
                                    } else {
                                        $bufinquiry = '';
                                    }
                                    echo $this->Form->input('inqtxt', array(
                                        'label' => false,
                                        'type' => 'textarea',
                                        'value' => '',
                                        'rows' => '7',
                                        'cols' => '40',
                                        'id' => 'inputinquiry',
                                        'class' => 'inputforminquiry',
                                        'value' => $bufinquiry
                                    ));
                                    ?>
                                </td>
                            </tr>
                        </thead>
                    </table>
                    <div class="g-recaptcha" data-sitekey="6LeU6CIqAAAAAHp2sFGDOpNtHuhyN2SUUCmhTBev"></div>

                    <div class="text-center">
                        <?php

                        echo $this->Form->hidden('lang', ['value' => $this->request->getQuery('lang')]);
                        //                            echo $this -> Form -> submit('hoge');
                        //                            echo $this -> Form -> button('aaa',['type' => 'submit', 'class'=>'btn btn-lg btn-dark faa-parent animated-hover']);
                        echo $this->Form->button('<span class="ja">この内容で問い合わせる</span><span class="fr">Envoyer le message ci-dessous</span><span class="en">Send the following message</span><i class="fas fa-fw fa-chevron-right"></i>', ['escapeTitle' => false, 'type' => 'submit', 'class' => 'btn btn-lg btn-dark faa-parent animated-hover']);
                        echo $this->Form->end();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
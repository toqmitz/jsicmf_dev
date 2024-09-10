<main role="main">

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
                <div class="col-12 mb-3">
                    <span class="f110 ja">内容をご確認の上、よろしければ「この内容で送る」からお送りください。</span>
                    <span class="f110 fr">Veuillez vérifier votre message et confirmer avec le bouton "Envoyer"</span>
                    <span class="f110 en">Please check your message and confirm with the "Send" button</span>

                </div>

                <div class="col-12">
                    <table class="table">
                        <thead class="thead-light table-bordered">
                            <tr>
                                <th class="w-25">
                                    <span class="ja">貴社名・お名前 </span>
                                    <span class="fr">Votre nom / Nom d'entreprise</span>
                                    <span class="en">Your name / Company name</span>
                                </th>
                                <td class="w-75">
                                    <?php
                                    echo h($this->request->getData('namae'));
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th class="w-25">
                                    <span class="ja">フリガナ</span>
                                    <span class="fr">Furigana (lecture)</span>
                                    <span class="en">Furigana (reading)</span>
                                </th>
                                <td class="w-75">
                                    <?php
                                    echo h($this->request->getData('furigana'));
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <span class="ja">メールアドレス</span>
                                    <span class="fr">Adresse e-mail</span>
                                    <span class="en">E-mail address</span>
                                </th>
                                <td>
                                    <?php
                                    echo h($this->request->getData('mailaddress'));
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <span class="ja">電話番号</span>
                                    <span class="fr">Numéro de téléphone</span>
                                    <span class="en">Phone number</span>
                                </th>
                                <td>
                                    <?php
                                    echo h($this->request->getData('telno'));
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th class="align-middle">
                                    <span class="ja">お問い合わせ内容</span>
                                    <span class="fr">Le message</span>
                                    <span class="en">Message</span>
                                </th>
                                <td>
                                    <?php
                                    echo nl2br(h($this->request->getData('inqtxt')));
                                    ?>
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="col-6 text-center">
                    <?php
                    echo $this->Form->create(null, ['type' => 'post', 'url' => ['controller' => 'Contents', 'action' => 'reginq']]);
                    echo $this->Form->hidden('namae', ['value' => $this->request->getData('namae')]);
                    echo $this->Form->hidden('furigana', ['value' => $this->request->getData('furigana')]);
                    echo $this->Form->hidden('mailaddress', ['value' => $this->request->getData('mailaddress')]);
                    echo $this->Form->hidden('telno', ['value' => $this->request->getData('telno')]);
                    echo $this->Form->hidden('inqtxt', ['value' => $this->request->getData('inqtxt')]);
                    echo $this->Form->hidden('lang', ['value' => $this->request->getData('lang')]);
                    echo $this->Form->button('<i class="fas fa-chevron-left"></i>&nbsp;<span class="ja">戻る</span><span class="fr">Revenir</span><span class="en">Go back</span>', array('escapeTitle' => false, 'type' => 'submit', 'class' => 'btn btn-lg btn-dark faa-parent animated-hover'));
                    echo $this->Form->end();
                    ?>
                </div>
                <div class="col-6 text-center">
                    <?php
                    echo $this->Form->create(null, ['type' => 'post', 'url' => ['controller' => 'Contents', 'action' => 'sendinq']]);
                    echo $this->Form->hidden('namae', ['value' => $this->request->getData('namae')]);
                    echo $this->Form->hidden('furigana', ['value' => $this->request->getData('furigana')]);
                    echo $this->Form->hidden('mailaddress', ['value' => $this->request->getData('mailaddress')]);
                    echo $this->Form->hidden('telno', ['value' => $this->request->getData('telno')]);
                    echo $this->Form->hidden('inqtxt', ['value' => $this->request->getData('inqtxt')]);
                    echo $this->Form->hidden('lang', ['value' => $this->request->getData('lang')]);
                    echo $this->Form->button('<i class="fas fa-chevron-right"></i>&nbsp;<span class="ja">送る</span><span class="fr">Envoyer</span><span class="en">Send</span>', array('escapeTitle' => false, 'type' => 'submit', 'class' => 'btn btn-lg btn-dark faa-parent animated-hover'));
                    echo $this->Form->end();
                    ?>
                </div>
            </div>
        </div>
    </div>
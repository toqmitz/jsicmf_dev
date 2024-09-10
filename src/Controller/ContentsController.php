<?php

namespace App\Controller;

use Cake\ORM\TableRegistry;
use Cake\Mailer\Mailer;
use Cake\Mailer\TransportFactory;
use Cake\Core\Configure;
use Cake\I18n\Time;
use Cake\Routing\Router;
use Cake\Datasource\ConnectionManager;
use App\Controller\AppController;
use App\Form\InquiryForm;

class ContentsController extends AppController
{
    /**
     * Controller name
     * @var string
     */
    public $name = 'Contents';
    //  var $helpers = array('Html', 'Formhidden');

    /* レイアウト */
    public function initialize(): void
    {
        //使用テーブル
        parent::initialize();
        $tables = [
            "Latestinfo",
            "Result",
            "Inquiry"
        ];
        foreach ($tables as $table) $this->loadModel($table);

        // レイアウトの設定
        $this->viewBuilder()->setLayout('jsicmf');
        // アクション取得
        $action = h($this->request->getParam('action'));
        // 言語の取得
        $lang = h($this->request->getQuery('lang'));
        if (empty($lang)) {
            $lang = h($this->request->getData('lang'));
        }
        //ogpの設定
        if (($this->request->getQuery('lang') === 'en') or ($this->request->getData('lang') === 'en')) {
            $ogsitename = Configure::read("ogsitenameen");
            $ogtitle = Configure::read("ogtitleen");
            $ogdescription = Configure::read("ogdescriptionen");
        } elseif (($this->request->getQuery('lang') === 'fr') or ($this->request->getData('lang') === 'fr')) {
            $ogsitename = Configure::read("ogsitenamefr");
            $ogtitle = Configure::read("ogtitlefr");
            $ogdescription = Configure::read("ogdescriptionfr");
        } else {
            $ogsitename = Configure::read("ogsitenameja");
            $ogtitle = Configure::read("ogtitleja");
            $ogdescription = Configure::read("ogdescriptionja");
        }

        $this->set('lang', $lang);
        $this->set('action', $action);
        $this->set('ogsitename', $ogsitename);
        $this->set('ogtitle', $ogtitle);
        $this->set('ogdescription', $ogdescription);
        // 時刻設定
        date_default_timezone_set('Asia/Tokyo');
    }

    public function index()
    {

        //        $tablelatestinfos = TableRegistry::get('Latestinfo');
        //        $latestinfos = $tablelatestinfos->find('all', ['order'=>'releasedate']);
        $date = new \DateTime();
        $nowdatetime = $date->format('Y-m-d H:i:s');
        $resultshowcnt = Configure::read("resultshowcnt");
        $latestinfoshowcnt = Configure::read("latestinfoshowcnt");


        $results = $this->Result->find()
            ->where(['delflg' => '0'])
            ->where(['topshowflg' => '9'])
            ->where(['opendatetime <' => $nowdatetime])
            ->where(['closedatetime >' => $nowdatetime])
            ->order(['orderno' => 'desc'])
            ->limit($resultshowcnt)
            ->toArray();

        //        $latestinfos = $this -> Latestinfo -> find('all', ['order'=>'releasedate'])->toArray();
        $latestinfos = $this->Latestinfo->find()
            ->where(['delflg' => '0'])
            ->where(['opendatetime <' => $nowdatetime])
            ->where(['closedatetime >' => $nowdatetime])
            ->order(['releasedate' => 'desc'])
            ->limit($latestinfoshowcnt)
            ->toArray();
        //$this->Latestinfo->newEntity();
        //pr($results);
        //titleの設定
        if (($this->request->getQuery('lang') === 'en') or ($this->request->getData('lang') === 'en')) {
            $title =  Configure::read("indextitleen");
        } elseif (($this->request->getQuery('lang') === 'fr') or ($this->request->getData('lang') === 'fr')) {
            $title = Configure::read("indextitlefr");
        } else {
            $title = Configure::read('indextitleja');
        }

        $this->set('results', $results);
        $this->set('latestinfos', $latestinfos);
        $this->set('title', $title);
        $this->render('index');
    }

    public function result()
    {

        $date = new \DateTime();
        $nowdatetime = $date->format('Y-m-d H:i:s');
        $nowyear = $date->format('Y');

        // 実績に1件以上ある年のみを抽出する
        $sql = 'SELECT  comeoutyear FROM result GROUP by comeoutyear HAVING COUNT(comeoutyear)>0 order by comeoutyear desc';
        $connection = ConnectionManager::get('default');
        $workyears = $connection->execute($sql)->fetchAll('assoc');

        $this->set('workyears', $workyears);

        $results = $this->Result->find()
            ->where(['delflg' => '0'])
            ->where(['opendatetime <' => $nowdatetime])
            ->where(['closedatetime >' => $nowdatetime])
            ->order(['orderno' => 'desc'])
            ->toArray();

        //titleの設定
        if (($this->request->getQuery('lang') === 'en') or ($this->request->getData('lang') === 'en')) {
            $title =  Configure::read("resulttitleen");
        } elseif (($this->request->getQuery('lang') === 'fr') or ($this->request->getData('lang') === 'fr')) {
            $title = Configure::read("resulttitlefr");
        } else {
            $title = Configure::read('resulttitleja');
        }
        $this->set('results', $results);
        $this->set('title', $title);
        $this->render('result');
    }

    public function reginq()
    {

        $inquiry = new InquiryForm();
        //   if ($this->request->is('post')) {
        //       if ($contact->execute($this->request->getData())) {
        //           $this->Flash->success('すぐにご連絡いたします。');
        //       } else {
        //           $this->Flash->error('フォーム送信に問題がありました。');
        //       }
        //   }
        //titleの設定
        if (($this->request->getQuery('lang') === 'en') or ($this->request->getData('lang') === 'en')) {
            $title =  Configure::read("inquirytitleen");
        } elseif (($this->request->getQuery('lang') === 'fr') or ($this->request->getData('lang') === 'fr')) {
            $title = Configure::read("inquirytitlefr");
        } else {
            $title = Configure::read('inquirytitleja');
        }
        $this->set('inquiry', $inquiry);
        $this->set('title', $title);
        $this->render('reginq');
    }

    public function confinq()
    {

        //recaptcha処理
            $recaptchaResponse = $this->request->getData('g-recaptcha-response');
            // reCAPTCHA応答が存在するか確認
            if (empty($recaptchaResponse)) {
                exit('reCAPTCHAの応答がありません。もう一度お試しください。/ Aucune réponse du reCAPTCHA. Veuillez essayer de nouveau. / No response from reCAPTCHA. Please try again.');
            }
            $this->log('reCAPTCHA Response: ' . $recaptchaResponse, 'debug');

            $verificationResult = $this->verifyRecaptcha($recaptchaResponse);
            $this->log('reCAPTCHA Verification Result: ' . ($verificationResult ? 'Success' : 'Failure'), 'debug');
    
            if ($verificationResult) {

                //titleの設定
                if (($this->request->getQuery('lang') === 'en') or ($this->request->getData('lang') === 'en')) {
                    $title =  Configure::read("inquirytitleen");
                } elseif (($this->request->getQuery('lang') === 'fr') or ($this->request->getData('lang') === 'fr')) {
                    $title = Configure::read("inquirytitlefr");
                } else {
                    $title = Configure::read('inquirytitleja');
                }
                $this->set('title', $title);
                $this->render('confinq');
            } else {
         //       echo 'reCAPTCHA検証に失敗しました。もう一度お試しください。';
                $this->Flash->error('reCAPTCHA検証に失敗しました。もう一度お試しください。');
            }

    }

    public function sendinq()
    {

        $this->autoRender = false;

        $now = Time::now();
        $email = new Mailer();
        $email->setProfile('default');

        // メール内容
        $mailbody = array(
            'namae'         => empty($this->request->getData('namae')) ? '' : h($this->request->getData('namae')),
            'furigana'      => empty($this->request->getData('furigana')) ? '' : h($this->request->getData('furigana')),
            'mailaddress'   => empty($this->request->getData('mailaddress')) ? '' : h($this->request->getData('mailaddress')),
            'telno'         => empty($this->request->getData('telno')) ? '' : h($this->request->getData('telno')),
            'inqtxt'        => empty($this->request->getData('inqtxt')) ? '' : h($this->request->getData('inqtxt')),
            'senddatetime'  => $now->i18nFormat('yyyy-MM-dd HH:mm:ss'),
            'sendipaddress' => $this->request->clientIp(),
            'sendbrowser'   => $_SERVER['HTTP_USER_AGENT'],
        );

        // メール送信先・タイトル・本文
        $mailtitle = Configure::read("mailtitle");

        $email->setTransport('default')
            ->setFrom(['info@jsicmf.or.jp' => 'JSICMF - 一般社団法人日本国際交詢協会'])
            ->setTo($this->request->getData('mailaddress'))
            ->setCc('info@jsicmf.or.jp')
            ->setSubject($mailtitle)
            ->viewBuilder()
            ->setTemplate('inquiry')
            ->setVars($mailbody);
        $email->deliver();

        //送ったらcompleteへredirect
        $this->redirect(['controller' => 'Contents',  'action'  => 'compinq', '?' => ['lang' => $this->request->getData('lang')]]);

    }

    public function compinq()
    {
        //titleの設定
        if (($this->request->getQuery('lang') === 'en') or ($this->request->getData('lang') === 'en')) {
            $title =  Configure::read("inquirytitleen");
        } elseif (($this->request->getQuery('lang') === 'fr') or ($this->request->getData('lang') === 'fr')) {
            $title = Configure::read("inquirytitlefr");
        } else {
            $title = Configure::read('inquirytitleja');
        }

        $this->set('title', $title);
        $this->render('compinq');
    }

    public function work()
    {
        //titleの設定
        if (($this->request->getQuery('lang') === 'en') or ($this->request->getData('lang') === 'en')) {
            $title =  Configure::read("worktitleen");
        } elseif (($this->request->getQuery('lang') === 'fr') or ($this->request->getData('lang') === 'fr')) {
            $title = Configure::read("worktitlefr");
        } else {
            $title = Configure::read('worktitleja');
        }

        $this->set('title', $title);
        $this->render('work');
    }

    public function fromrep()
    {
        //titleの設定
        if (($this->request->getQuery('lang') === 'en') or ($this->request->getData('lang') === 'en')) {
            $title =  Configure::read("messagetitleen");
        } elseif (($this->request->getQuery('lang') === 'fr') or ($this->request->getData('lang') === 'fr')) {
            $title = Configure::read("messagetitlefr");
        } else {
            $title = Configure::read('messagetitleja');
        }
        $this->set('title', $title);

        $this->render('fromrep');
    }

    public function companyinfo()
    {
        //titleの設定
        if (($this->request->getQuery('lang') === 'en') or ($this->request->getData('lang') === 'en')) {
            $title =  Configure::read("companytitleen");
        } elseif (($this->request->getQuery('lang') === 'fr') or ($this->request->getData('lang') === 'fr')) {
            $title = Configure::read("companytitlefr");
        } else {
            $title = Configure::read('companytitleja');
        }
        $this->set('title', $title);
        $this->render('companyinfo');
    }
}

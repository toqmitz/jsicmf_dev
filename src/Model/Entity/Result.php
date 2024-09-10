<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Result extends Entity
{
    protected $_virtual = ['workperiod', 'body'];

    protected function _getWorkperiod()
    {
        return '<span class="ja">' . $this->workperiodja . '</span><span class="fr">' . $this->workperiodfr . '</span><span class="en">' . $this->workperioden . '</span>';
    }

    protected function _getBody()
    {
        //bodyfrに値がない場合は、<span class="fr"></span>にもbodyenをだす
        if ($this->bodyfr === '') {
            $this->bodyfr = $this->bodyen;
        }
        //detailXXに値がある場合、【detailXX】,[detailxx]を表示する。
        if ($this->detailja !== '') {
            $this->detailja = '&nbsp;【' . $this->detailja . '】';
        }
        if ($this->detailfr !== '') {
            $this->detailfr = '&nbsp;[' . $this->detailfr . ']';
        }
        if ($this->detailen !== '') {
            $this->detailen = '&nbsp;[' . $this->detailen . ']';
        }

        return '<span class="ja">' . $this->bodyja . $this->detailja . '</span><span class="fr">' . $this->bodyfr . $this->detailfr . '</span><span class="en">' . $this->bodyen . $this->detailen . '</span>';
    }
}

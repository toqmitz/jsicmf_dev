<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Latestinfo extends Entity
{
    protected $_virtual = ['body', 'newrd'];

    protected function _getYmdreleasedate()
    {
        return $this->releasedate->format('Y/m/d');
    }

    protected function _getMdyreleasedate()
    {
        return $this->releasedate->format('m/d/Y');
    }

    protected function _getDmyreleasedate()
    {
        return $this->releasedate->format('d/m/Y');
    }

    protected function _getBody()
    {
        return '<span class="ja">' . $this->bodyja . '</span><span class="fr">' . $this->bodyfr . '</span><span class="en">' . $this->bodyen . '</span>';
    }
}

<?php
namespace Gjo\GjoExDatatypes\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Month extends AbstractEntity
{
    /**
     * @var string
     */
    protected $monthString = '';

    /**
     * @param string $monthString
     * @return void
     */
    public function setMonthString($monthString)
    {
        $this->monthString = $monthString;
    }

    /**
     * @return string
     */
    public function getMonthString()
    {
        return $this->monthString;
    }
}
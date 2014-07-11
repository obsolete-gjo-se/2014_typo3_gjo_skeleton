<?php
namespace Gjo\GjoExDatatypes\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use Gjo\GjoExDatatypes\Domain\Model\Month;

class DataType extends AbstractEntity
{
    /**
     * @var string
     * @validate NotEmpty
     * @validate RegularExpression(regularExpression="/^.{1,30}$/u")
     */
    protected $stringWithoutBreak = '';

    /**
     * @var string
     * @validate RegularExpression(regularExpression="/^.{0,100}$/us")
     */
    protected $stringWithBreak = '';

    /**
     * @var string
     * @validate RegularExpression(regularExpression="/^.{0,20}$/u")
     */
    protected $password = '';

    /**
     * @var int
     * @validate Integer
     * @validate NumberRange(minimum="0", maximum="999999")
     */
    protected $numberInteger = 0;

    /**
     * @var int
     * @validate Integer
     */
    protected $selectSingle = 0;

    /**
     * @var \Gjo\GjoExDatatypes\Domain\Model\Month
     */
    protected $selectSingleDb = NULL;

    /**
     * @var int
     * @validate Integer
     */
    protected $checkboxSingle = 0;

    /**
     * @var int
     * @validate Integer
     */
    protected $radioMulti = 0;

    /**
     * @param string $stringWithoutBreak
     * @return void
     */
    public function setStringWithoutBreak($stringWithoutBreak)
    {
        $this->stringWithoutBreak = $stringWithoutBreak;
    }

    /**
     * @return string
     */
    public function getStringWithoutBreak()
    {
        return $this->stringWithoutBreak;
    }

    /**
     * @param string $stringWithBreak
     * @return void
     */
    public function setStringWithBreak($stringWithBreak)
    {
        $this->stringWithBreak = $stringWithBreak;
    }

    /**
     * @return string
     */
    public function getStringWithBreak()
    {
        return $this->stringWithBreak;
    }

    /**
     * @param string $password
     * @return void
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param int $numberInteger
     * @return void
     */
    public function setNumberInteger($numberInteger)
    {
        $this->numberInteger = $numberInteger;
    }

    /**
     * @return int
     */
    public function getNumberInteger()
    {
        return $this->numberInteger;
    }

    /**
     * @param int $selectSingle
     * @return void
     */
    public function setSelectSingle($selectSingle)
    {
        $this->selectSingle = $selectSingle;
    }

    /**
     * @return int
     */
    public function getSelectSingle()
    {
        return $this->selectSingle;
    }

    /**
     * @param \Gjo\GjoExDatatypes\Domain\Model\Month $month
     * @return void
     */
    public function setSelectSingleDb(Month $month = NULL)
    {
        $this->selectSingleDb = $month;
    }

    /**
     * @return \Gjo\GjoExDatatypes\Domain\Model\Month
     */
    public function getSelectSingleDb()
    {
        return $this->selectSingleDb;
    }

    /**
     * @param int $checkboxSingle
     * @return void
     */
    public function setCheckboxSingle($checkboxSingle)
    {
        $this->checkboxSingle = $checkboxSingle;
    }

    /**
     * @return int
     */
    public function getCheckboxSingle()
    {
        return $this->checkboxSingle;
    }

    /**
     * @param int $radioMulti
     * @return void
     */
    public function setRadioMulti($radioMulti)
    {
        $this->radioMulti = $radioMulti;
    }

    /**
     * @return int
     */
    public function getRadioMulti()
    {
        return $this->radioMulti;
    }
}
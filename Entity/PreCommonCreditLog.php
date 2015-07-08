<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonCreditLog
 *
 * @ORM\Table(name="pre_common_credit_log", indexes={@ORM\Index(name="uid", columns={"uid"}), @ORM\Index(name="operation", columns={"operation"}), @ORM\Index(name="relatedid", columns={"relatedid"}), @ORM\Index(name="dateline", columns={"dateline"})})
 * @ORM\Entity
 */
class PreCommonCreditLog
{
    /**
     * @var integer
     *
     * @ORM\Column(name="logid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $logid;

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     */
    private $uid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="operation", type="string", length=3, nullable=false)
     */
    private $operation = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="relatedid", type="integer", nullable=false)
     */
    private $relatedid;

    /**
     * @var integer
     *
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline;

    /**
     * @var integer
     *
     * @ORM\Column(name="extcredits1", type="integer", nullable=false)
     */
    private $extcredits1;

    /**
     * @var integer
     *
     * @ORM\Column(name="extcredits2", type="integer", nullable=false)
     */
    private $extcredits2;

    /**
     * @var integer
     *
     * @ORM\Column(name="extcredits3", type="integer", nullable=false)
     */
    private $extcredits3;

    /**
     * @var integer
     *
     * @ORM\Column(name="extcredits4", type="integer", nullable=false)
     */
    private $extcredits4;

    /**
     * @var integer
     *
     * @ORM\Column(name="extcredits5", type="integer", nullable=false)
     */
    private $extcredits5;

    /**
     * @var integer
     *
     * @ORM\Column(name="extcredits6", type="integer", nullable=false)
     */
    private $extcredits6;

    /**
     * @var integer
     *
     * @ORM\Column(name="extcredits7", type="integer", nullable=false)
     */
    private $extcredits7;

    /**
     * @var integer
     *
     * @ORM\Column(name="extcredits8", type="integer", nullable=false)
     */
    private $extcredits8;



    /**
     * Get logid
     *
     * @return integer 
     */
    public function getLogid()
    {
        return $this->logid;
    }

    /**
     * Set uid
     *
     * @param integer $uid
     * @return PreCommonCreditLog
     */
    public function setUid($uid)
    {
        $this->uid = $uid;

        return $this;
    }

    /**
     * Get uid
     *
     * @return integer 
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Set operation
     *
     * @param string $operation
     * @return PreCommonCreditLog
     */
    public function setOperation($operation)
    {
        $this->operation = $operation;

        return $this;
    }

    /**
     * Get operation
     *
     * @return string 
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * Set relatedid
     *
     * @param integer $relatedid
     * @return PreCommonCreditLog
     */
    public function setRelatedid($relatedid)
    {
        $this->relatedid = $relatedid;

        return $this;
    }

    /**
     * Get relatedid
     *
     * @return integer 
     */
    public function getRelatedid()
    {
        return $this->relatedid;
    }

    /**
     * Set dateline
     *
     * @param integer $dateline
     * @return PreCommonCreditLog
     */
    public function setDateline($dateline)
    {
        $this->dateline = $dateline;

        return $this;
    }

    /**
     * Get dateline
     *
     * @return integer 
     */
    public function getDateline()
    {
        return $this->dateline;
    }

    /**
     * Set extcredits1
     *
     * @param integer $extcredits1
     * @return PreCommonCreditLog
     */
    public function setExtcredits1($extcredits1)
    {
        $this->extcredits1 = $extcredits1;

        return $this;
    }

    /**
     * Get extcredits1
     *
     * @return integer 
     */
    public function getExtcredits1()
    {
        return $this->extcredits1;
    }

    /**
     * Set extcredits2
     *
     * @param integer $extcredits2
     * @return PreCommonCreditLog
     */
    public function setExtcredits2($extcredits2)
    {
        $this->extcredits2 = $extcredits2;

        return $this;
    }

    /**
     * Get extcredits2
     *
     * @return integer 
     */
    public function getExtcredits2()
    {
        return $this->extcredits2;
    }

    /**
     * Set extcredits3
     *
     * @param integer $extcredits3
     * @return PreCommonCreditLog
     */
    public function setExtcredits3($extcredits3)
    {
        $this->extcredits3 = $extcredits3;

        return $this;
    }

    /**
     * Get extcredits3
     *
     * @return integer 
     */
    public function getExtcredits3()
    {
        return $this->extcredits3;
    }

    /**
     * Set extcredits4
     *
     * @param integer $extcredits4
     * @return PreCommonCreditLog
     */
    public function setExtcredits4($extcredits4)
    {
        $this->extcredits4 = $extcredits4;

        return $this;
    }

    /**
     * Get extcredits4
     *
     * @return integer 
     */
    public function getExtcredits4()
    {
        return $this->extcredits4;
    }

    /**
     * Set extcredits5
     *
     * @param integer $extcredits5
     * @return PreCommonCreditLog
     */
    public function setExtcredits5($extcredits5)
    {
        $this->extcredits5 = $extcredits5;

        return $this;
    }

    /**
     * Get extcredits5
     *
     * @return integer 
     */
    public function getExtcredits5()
    {
        return $this->extcredits5;
    }

    /**
     * Set extcredits6
     *
     * @param integer $extcredits6
     * @return PreCommonCreditLog
     */
    public function setExtcredits6($extcredits6)
    {
        $this->extcredits6 = $extcredits6;

        return $this;
    }

    /**
     * Get extcredits6
     *
     * @return integer 
     */
    public function getExtcredits6()
    {
        return $this->extcredits6;
    }

    /**
     * Set extcredits7
     *
     * @param integer $extcredits7
     * @return PreCommonCreditLog
     */
    public function setExtcredits7($extcredits7)
    {
        $this->extcredits7 = $extcredits7;

        return $this;
    }

    /**
     * Get extcredits7
     *
     * @return integer 
     */
    public function getExtcredits7()
    {
        return $this->extcredits7;
    }

    /**
     * Set extcredits8
     *
     * @param integer $extcredits8
     * @return PreCommonCreditLog
     */
    public function setExtcredits8($extcredits8)
    {
        $this->extcredits8 = $extcredits8;

        return $this;
    }

    /**
     * Get extcredits8
     *
     * @return integer 
     */
    public function getExtcredits8()
    {
        return $this->extcredits8;
    }
}

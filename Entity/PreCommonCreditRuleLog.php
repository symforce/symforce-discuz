<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonCreditRuleLog
 *
 * @ORM\Table(name="pre_common_credit_rule_log", indexes={@ORM\Index(name="uid", columns={"uid", "rid", "fid"}), @ORM\Index(name="dateline", columns={"dateline"})})
 * @ORM\Entity
 */
class PreCommonCreditRuleLog
{
    /**
     * @var integer
     *
     * @ORM\Column(name="clid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $clid;

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     */
    private $uid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="rid", type="integer", nullable=false)
     */
    private $rid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="fid", type="integer", nullable=false)
     */
    private $fid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="total", type="integer", nullable=false)
     */
    private $total = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="cyclenum", type="integer", nullable=false)
     */
    private $cyclenum = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="extcredits1", type="integer", nullable=false)
     */
    private $extcredits1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="extcredits2", type="integer", nullable=false)
     */
    private $extcredits2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="extcredits3", type="integer", nullable=false)
     */
    private $extcredits3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="extcredits4", type="integer", nullable=false)
     */
    private $extcredits4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="extcredits5", type="integer", nullable=false)
     */
    private $extcredits5 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="extcredits6", type="integer", nullable=false)
     */
    private $extcredits6 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="extcredits7", type="integer", nullable=false)
     */
    private $extcredits7 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="extcredits8", type="integer", nullable=false)
     */
    private $extcredits8 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="starttime", type="integer", nullable=false)
     */
    private $starttime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline = '0';



    /**
     * Get clid
     *
     * @return integer 
     */
    public function getClid()
    {
        return $this->clid;
    }

    /**
     * Set uid
     *
     * @param integer $uid
     * @return PreCommonCreditRuleLog
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
     * Set rid
     *
     * @param integer $rid
     * @return PreCommonCreditRuleLog
     */
    public function setRid($rid)
    {
        $this->rid = $rid;

        return $this;
    }

    /**
     * Get rid
     *
     * @return integer 
     */
    public function getRid()
    {
        return $this->rid;
    }

    /**
     * Set fid
     *
     * @param integer $fid
     * @return PreCommonCreditRuleLog
     */
    public function setFid($fid)
    {
        $this->fid = $fid;

        return $this;
    }

    /**
     * Get fid
     *
     * @return integer 
     */
    public function getFid()
    {
        return $this->fid;
    }

    /**
     * Set total
     *
     * @param integer $total
     * @return PreCommonCreditRuleLog
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return integer 
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set cyclenum
     *
     * @param integer $cyclenum
     * @return PreCommonCreditRuleLog
     */
    public function setCyclenum($cyclenum)
    {
        $this->cyclenum = $cyclenum;

        return $this;
    }

    /**
     * Get cyclenum
     *
     * @return integer 
     */
    public function getCyclenum()
    {
        return $this->cyclenum;
    }

    /**
     * Set extcredits1
     *
     * @param integer $extcredits1
     * @return PreCommonCreditRuleLog
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
     * @return PreCommonCreditRuleLog
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
     * @return PreCommonCreditRuleLog
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
     * @return PreCommonCreditRuleLog
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
     * @return PreCommonCreditRuleLog
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
     * @return PreCommonCreditRuleLog
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
     * @return PreCommonCreditRuleLog
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
     * @return PreCommonCreditRuleLog
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

    /**
     * Set starttime
     *
     * @param integer $starttime
     * @return PreCommonCreditRuleLog
     */
    public function setStarttime($starttime)
    {
        $this->starttime = $starttime;

        return $this;
    }

    /**
     * Get starttime
     *
     * @return integer 
     */
    public function getStarttime()
    {
        return $this->starttime;
    }

    /**
     * Set dateline
     *
     * @param integer $dateline
     * @return PreCommonCreditRuleLog
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
}

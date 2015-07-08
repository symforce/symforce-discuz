<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonCreditRule
 *
 * @ORM\Table(name="pre_common_credit_rule", uniqueConstraints={@ORM\UniqueConstraint(name="action", columns={"action"})})
 * @ORM\Entity
 */
class PreCommonCreditRule
{
    /**
     * @var integer
     *
     * @ORM\Column(name="rid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $rid;

    /**
     * @var string
     *
     * @ORM\Column(name="rulename", type="string", length=20, nullable=false)
     */
    private $rulename = '';

    /**
     * @var string
     *
     * @ORM\Column(name="action", type="string", length=20, nullable=false)
     */
    private $action = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="cycletype", type="boolean", nullable=false)
     */
    private $cycletype = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="cycletime", type="integer", nullable=false)
     */
    private $cycletime = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="rewardnum", type="boolean", nullable=false)
     */
    private $rewardnum = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="norepeat", type="boolean", nullable=false)
     */
    private $norepeat = '0';

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
     * @var string
     *
     * @ORM\Column(name="fids", type="text", nullable=false)
     */
    private $fids;



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
     * Set rulename
     *
     * @param string $rulename
     * @return PreCommonCreditRule
     */
    public function setRulename($rulename)
    {
        $this->rulename = $rulename;

        return $this;
    }

    /**
     * Get rulename
     *
     * @return string 
     */
    public function getRulename()
    {
        return $this->rulename;
    }

    /**
     * Set action
     *
     * @param string $action
     * @return PreCommonCreditRule
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return string 
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set cycletype
     *
     * @param boolean $cycletype
     * @return PreCommonCreditRule
     */
    public function setCycletype($cycletype)
    {
        $this->cycletype = $cycletype;

        return $this;
    }

    /**
     * Get cycletype
     *
     * @return boolean 
     */
    public function getCycletype()
    {
        return $this->cycletype;
    }

    /**
     * Set cycletime
     *
     * @param integer $cycletime
     * @return PreCommonCreditRule
     */
    public function setCycletime($cycletime)
    {
        $this->cycletime = $cycletime;

        return $this;
    }

    /**
     * Get cycletime
     *
     * @return integer 
     */
    public function getCycletime()
    {
        return $this->cycletime;
    }

    /**
     * Set rewardnum
     *
     * @param boolean $rewardnum
     * @return PreCommonCreditRule
     */
    public function setRewardnum($rewardnum)
    {
        $this->rewardnum = $rewardnum;

        return $this;
    }

    /**
     * Get rewardnum
     *
     * @return boolean 
     */
    public function getRewardnum()
    {
        return $this->rewardnum;
    }

    /**
     * Set norepeat
     *
     * @param boolean $norepeat
     * @return PreCommonCreditRule
     */
    public function setNorepeat($norepeat)
    {
        $this->norepeat = $norepeat;

        return $this;
    }

    /**
     * Get norepeat
     *
     * @return boolean 
     */
    public function getNorepeat()
    {
        return $this->norepeat;
    }

    /**
     * Set extcredits1
     *
     * @param integer $extcredits1
     * @return PreCommonCreditRule
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
     * @return PreCommonCreditRule
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
     * @return PreCommonCreditRule
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
     * @return PreCommonCreditRule
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
     * @return PreCommonCreditRule
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
     * @return PreCommonCreditRule
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
     * @return PreCommonCreditRule
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
     * @return PreCommonCreditRule
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
     * Set fids
     *
     * @param string $fids
     * @return PreCommonCreditRule
     */
    public function setFids($fids)
    {
        $this->fids = $fids;

        return $this;
    }

    /**
     * Get fids
     *
     * @return string 
     */
    public function getFids()
    {
        return $this->fids;
    }
}

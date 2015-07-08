<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonTask
 *
 * @ORM\Table(name="pre_common_task")
 * @ORM\Entity
 */
class PreCommonTask
{
    /**
     * @var integer
     *
     * @ORM\Column(name="taskid", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $taskid;

    /**
     * @var integer
     *
     * @ORM\Column(name="relatedtaskid", type="smallint", nullable=false)
     */
    private $relatedtaskid = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="available", type="boolean", nullable=false)
     */
    private $available = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="icon", type="string", length=150, nullable=false)
     */
    private $icon = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="applicants", type="integer", nullable=false)
     */
    private $applicants = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="achievers", type="integer", nullable=false)
     */
    private $achievers = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="tasklimits", type="integer", nullable=false)
     */
    private $tasklimits = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="applyperm", type="text", nullable=false)
     */
    private $applyperm;

    /**
     * @var string
     *
     * @ORM\Column(name="scriptname", type="string", length=50, nullable=false)
     */
    private $scriptname = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="starttime", type="integer", nullable=false)
     */
    private $starttime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="endtime", type="integer", nullable=false)
     */
    private $endtime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="period", type="integer", nullable=false)
     */
    private $period = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="periodtype", type="boolean", nullable=false)
     */
    private $periodtype = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="reward", type="string", nullable=false)
     */
    private $reward = 'credit';

    /**
     * @var string
     *
     * @ORM\Column(name="prize", type="string", length=15, nullable=false)
     */
    private $prize = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="bonus", type="integer", nullable=false)
     */
    private $bonus = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="displayorder", type="smallint", nullable=false)
     */
    private $displayorder = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="version", type="string", length=15, nullable=false)
     */
    private $version = '';



    /**
     * Get taskid
     *
     * @return integer 
     */
    public function getTaskid()
    {
        return $this->taskid;
    }

    /**
     * Set relatedtaskid
     *
     * @param integer $relatedtaskid
     * @return PreCommonTask
     */
    public function setRelatedtaskid($relatedtaskid)
    {
        $this->relatedtaskid = $relatedtaskid;

        return $this;
    }

    /**
     * Get relatedtaskid
     *
     * @return integer 
     */
    public function getRelatedtaskid()
    {
        return $this->relatedtaskid;
    }

    /**
     * Set available
     *
     * @param boolean $available
     * @return PreCommonTask
     */
    public function setAvailable($available)
    {
        $this->available = $available;

        return $this;
    }

    /**
     * Get available
     *
     * @return boolean 
     */
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return PreCommonTask
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return PreCommonTask
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set icon
     *
     * @param string $icon
     * @return PreCommonTask
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get icon
     *
     * @return string 
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Set applicants
     *
     * @param integer $applicants
     * @return PreCommonTask
     */
    public function setApplicants($applicants)
    {
        $this->applicants = $applicants;

        return $this;
    }

    /**
     * Get applicants
     *
     * @return integer 
     */
    public function getApplicants()
    {
        return $this->applicants;
    }

    /**
     * Set achievers
     *
     * @param integer $achievers
     * @return PreCommonTask
     */
    public function setAchievers($achievers)
    {
        $this->achievers = $achievers;

        return $this;
    }

    /**
     * Get achievers
     *
     * @return integer 
     */
    public function getAchievers()
    {
        return $this->achievers;
    }

    /**
     * Set tasklimits
     *
     * @param integer $tasklimits
     * @return PreCommonTask
     */
    public function setTasklimits($tasklimits)
    {
        $this->tasklimits = $tasklimits;

        return $this;
    }

    /**
     * Get tasklimits
     *
     * @return integer 
     */
    public function getTasklimits()
    {
        return $this->tasklimits;
    }

    /**
     * Set applyperm
     *
     * @param string $applyperm
     * @return PreCommonTask
     */
    public function setApplyperm($applyperm)
    {
        $this->applyperm = $applyperm;

        return $this;
    }

    /**
     * Get applyperm
     *
     * @return string 
     */
    public function getApplyperm()
    {
        return $this->applyperm;
    }

    /**
     * Set scriptname
     *
     * @param string $scriptname
     * @return PreCommonTask
     */
    public function setScriptname($scriptname)
    {
        $this->scriptname = $scriptname;

        return $this;
    }

    /**
     * Get scriptname
     *
     * @return string 
     */
    public function getScriptname()
    {
        return $this->scriptname;
    }

    /**
     * Set starttime
     *
     * @param integer $starttime
     * @return PreCommonTask
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
     * Set endtime
     *
     * @param integer $endtime
     * @return PreCommonTask
     */
    public function setEndtime($endtime)
    {
        $this->endtime = $endtime;

        return $this;
    }

    /**
     * Get endtime
     *
     * @return integer 
     */
    public function getEndtime()
    {
        return $this->endtime;
    }

    /**
     * Set period
     *
     * @param integer $period
     * @return PreCommonTask
     */
    public function setPeriod($period)
    {
        $this->period = $period;

        return $this;
    }

    /**
     * Get period
     *
     * @return integer 
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Set periodtype
     *
     * @param boolean $periodtype
     * @return PreCommonTask
     */
    public function setPeriodtype($periodtype)
    {
        $this->periodtype = $periodtype;

        return $this;
    }

    /**
     * Get periodtype
     *
     * @return boolean 
     */
    public function getPeriodtype()
    {
        return $this->periodtype;
    }

    /**
     * Set reward
     *
     * @param string $reward
     * @return PreCommonTask
     */
    public function setReward($reward)
    {
        $this->reward = $reward;

        return $this;
    }

    /**
     * Get reward
     *
     * @return string 
     */
    public function getReward()
    {
        return $this->reward;
    }

    /**
     * Set prize
     *
     * @param string $prize
     * @return PreCommonTask
     */
    public function setPrize($prize)
    {
        $this->prize = $prize;

        return $this;
    }

    /**
     * Get prize
     *
     * @return string 
     */
    public function getPrize()
    {
        return $this->prize;
    }

    /**
     * Set bonus
     *
     * @param integer $bonus
     * @return PreCommonTask
     */
    public function setBonus($bonus)
    {
        $this->bonus = $bonus;

        return $this;
    }

    /**
     * Get bonus
     *
     * @return integer 
     */
    public function getBonus()
    {
        return $this->bonus;
    }

    /**
     * Set displayorder
     *
     * @param integer $displayorder
     * @return PreCommonTask
     */
    public function setDisplayorder($displayorder)
    {
        $this->displayorder = $displayorder;

        return $this;
    }

    /**
     * Get displayorder
     *
     * @return integer 
     */
    public function getDisplayorder()
    {
        return $this->displayorder;
    }

    /**
     * Set version
     *
     * @param string $version
     * @return PreCommonTask
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return string 
     */
    public function getVersion()
    {
        return $this->version;
    }
}

<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonCron
 *
 * @ORM\Table(name="pre_common_cron", indexes={@ORM\Index(name="nextrun", columns={"available", "nextrun"})})
 * @ORM\Entity
 */
class PreCommonCron
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cronid", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cronid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="available", type="boolean", nullable=false)
     */
    private $available = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", nullable=false)
     */
    private $type = 'user';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=50, nullable=false)
     */
    private $filename = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="lastrun", type="integer", nullable=false)
     */
    private $lastrun = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="nextrun", type="integer", nullable=false)
     */
    private $nextrun = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="weekday", type="boolean", nullable=false)
     */
    private $weekday = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="day", type="boolean", nullable=false)
     */
    private $day = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="hour", type="boolean", nullable=false)
     */
    private $hour = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="minute", type="string", length=36, nullable=false)
     */
    private $minute = '';



    /**
     * Get cronid
     *
     * @return integer 
     */
    public function getCronid()
    {
        return $this->cronid;
    }

    /**
     * Set available
     *
     * @param boolean $available
     * @return PreCommonCron
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
     * Set type
     *
     * @param string $type
     * @return PreCommonCron
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return PreCommonCron
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
     * Set filename
     *
     * @param string $filename
     * @return PreCommonCron
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string 
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set lastrun
     *
     * @param integer $lastrun
     * @return PreCommonCron
     */
    public function setLastrun($lastrun)
    {
        $this->lastrun = $lastrun;

        return $this;
    }

    /**
     * Get lastrun
     *
     * @return integer 
     */
    public function getLastrun()
    {
        return $this->lastrun;
    }

    /**
     * Set nextrun
     *
     * @param integer $nextrun
     * @return PreCommonCron
     */
    public function setNextrun($nextrun)
    {
        $this->nextrun = $nextrun;

        return $this;
    }

    /**
     * Get nextrun
     *
     * @return integer 
     */
    public function getNextrun()
    {
        return $this->nextrun;
    }

    /**
     * Set weekday
     *
     * @param boolean $weekday
     * @return PreCommonCron
     */
    public function setWeekday($weekday)
    {
        $this->weekday = $weekday;

        return $this;
    }

    /**
     * Get weekday
     *
     * @return boolean 
     */
    public function getWeekday()
    {
        return $this->weekday;
    }

    /**
     * Set day
     *
     * @param boolean $day
     * @return PreCommonCron
     */
    public function setDay($day)
    {
        $this->day = $day;

        return $this;
    }

    /**
     * Get day
     *
     * @return boolean 
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * Set hour
     *
     * @param boolean $hour
     * @return PreCommonCron
     */
    public function setHour($hour)
    {
        $this->hour = $hour;

        return $this;
    }

    /**
     * Get hour
     *
     * @return boolean 
     */
    public function getHour()
    {
        return $this->hour;
    }

    /**
     * Set minute
     *
     * @param string $minute
     * @return PreCommonCron
     */
    public function setMinute($minute)
    {
        $this->minute = $minute;

        return $this;
    }

    /**
     * Get minute
     *
     * @return string 
     */
    public function getMinute()
    {
        return $this->minute;
    }
}

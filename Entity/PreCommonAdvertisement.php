<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonAdvertisement
 *
 * @ORM\Table(name="pre_common_advertisement")
 * @ORM\Entity
 */
class PreCommonAdvertisement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="advid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $advid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="available", type="boolean", nullable=false)
     */
    private $available = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=50, nullable=false)
     */
    private $type = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="displayorder", type="boolean", nullable=false)
     */
    private $displayorder = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title = '';

    /**
     * @var string
     *
     * @ORM\Column(name="targets", type="text", nullable=false)
     */
    private $targets;

    /**
     * @var string
     *
     * @ORM\Column(name="parameters", type="text", nullable=false)
     */
    private $parameters;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="text", nullable=false)
     */
    private $code;

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
     * Get advid
     *
     * @return integer 
     */
    public function getAdvid()
    {
        return $this->advid;
    }

    /**
     * Set available
     *
     * @param boolean $available
     * @return PreCommonAdvertisement
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
     * @return PreCommonAdvertisement
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
     * Set displayorder
     *
     * @param boolean $displayorder
     * @return PreCommonAdvertisement
     */
    public function setDisplayorder($displayorder)
    {
        $this->displayorder = $displayorder;

        return $this;
    }

    /**
     * Get displayorder
     *
     * @return boolean 
     */
    public function getDisplayorder()
    {
        return $this->displayorder;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return PreCommonAdvertisement
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set targets
     *
     * @param string $targets
     * @return PreCommonAdvertisement
     */
    public function setTargets($targets)
    {
        $this->targets = $targets;

        return $this;
    }

    /**
     * Get targets
     *
     * @return string 
     */
    public function getTargets()
    {
        return $this->targets;
    }

    /**
     * Set parameters
     *
     * @param string $parameters
     * @return PreCommonAdvertisement
     */
    public function setParameters($parameters)
    {
        $this->parameters = $parameters;

        return $this;
    }

    /**
     * Get parameters
     *
     * @return string 
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return PreCommonAdvertisement
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set starttime
     *
     * @param integer $starttime
     * @return PreCommonAdvertisement
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
     * @return PreCommonAdvertisement
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
}

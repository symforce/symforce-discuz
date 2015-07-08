<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreUcenterPmLists
 *
 * @ORM\Table(name="pre_ucenter_pm_lists", indexes={@ORM\Index(name="pmtype", columns={"pmtype"}), @ORM\Index(name="min_max", columns={"min_max"}), @ORM\Index(name="authorid", columns={"authorid", "dateline"})})
 * @ORM\Entity
 */
class PreUcenterPmLists
{
    /**
     * @var integer
     *
     * @ORM\Column(name="plid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $plid;

    /**
     * @var integer
     *
     * @ORM\Column(name="authorid", type="integer", nullable=false)
     */
    private $authorid = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="pmtype", type="boolean", nullable=false)
     */
    private $pmtype = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=80, nullable=false)
     */
    private $subject;

    /**
     * @var integer
     *
     * @ORM\Column(name="members", type="smallint", nullable=false)
     */
    private $members = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="min_max", type="string", length=17, nullable=false)
     */
    private $minMax;

    /**
     * @var integer
     *
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="lastmessage", type="text", nullable=false)
     */
    private $lastmessage;



    /**
     * Get plid
     *
     * @return integer 
     */
    public function getPlid()
    {
        return $this->plid;
    }

    /**
     * Set authorid
     *
     * @param integer $authorid
     * @return PreUcenterPmLists
     */
    public function setAuthorid($authorid)
    {
        $this->authorid = $authorid;

        return $this;
    }

    /**
     * Get authorid
     *
     * @return integer 
     */
    public function getAuthorid()
    {
        return $this->authorid;
    }

    /**
     * Set pmtype
     *
     * @param boolean $pmtype
     * @return PreUcenterPmLists
     */
    public function setPmtype($pmtype)
    {
        $this->pmtype = $pmtype;

        return $this;
    }

    /**
     * Get pmtype
     *
     * @return boolean 
     */
    public function getPmtype()
    {
        return $this->pmtype;
    }

    /**
     * Set subject
     *
     * @param string $subject
     * @return PreUcenterPmLists
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string 
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set members
     *
     * @param integer $members
     * @return PreUcenterPmLists
     */
    public function setMembers($members)
    {
        $this->members = $members;

        return $this;
    }

    /**
     * Get members
     *
     * @return integer 
     */
    public function getMembers()
    {
        return $this->members;
    }

    /**
     * Set minMax
     *
     * @param string $minMax
     * @return PreUcenterPmLists
     */
    public function setMinMax($minMax)
    {
        $this->minMax = $minMax;

        return $this;
    }

    /**
     * Get minMax
     *
     * @return string 
     */
    public function getMinMax()
    {
        return $this->minMax;
    }

    /**
     * Set dateline
     *
     * @param integer $dateline
     * @return PreUcenterPmLists
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
     * Set lastmessage
     *
     * @param string $lastmessage
     * @return PreUcenterPmLists
     */
    public function setLastmessage($lastmessage)
    {
        $this->lastmessage = $lastmessage;

        return $this;
    }

    /**
     * Get lastmessage
     *
     * @return string 
     */
    public function getLastmessage()
    {
        return $this->lastmessage;
    }
}

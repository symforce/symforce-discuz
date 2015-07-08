<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreUcenterPmMembers
 *
 * @ORM\Table(name="pre_ucenter_pm_members", indexes={@ORM\Index(name="isnew", columns={"isnew"}), @ORM\Index(name="lastdateline", columns={"uid", "lastdateline"}), @ORM\Index(name="lastupdate", columns={"uid", "lastupdate"})})
 * @ORM\Entity
 */
class PreUcenterPmMembers
{
    /**
     * @var integer
     *
     * @ORM\Column(name="plid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $plid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $uid = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="isnew", type="boolean", nullable=false)
     */
    private $isnew = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="pmnum", type="integer", nullable=false)
     */
    private $pmnum = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="lastupdate", type="integer", nullable=false)
     */
    private $lastupdate = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="lastdateline", type="integer", nullable=false)
     */
    private $lastdateline = '0';



    /**
     * Set plid
     *
     * @param integer $plid
     * @return PreUcenterPmMembers
     */
    public function setPlid($plid)
    {
        $this->plid = $plid;

        return $this;
    }

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
     * Set uid
     *
     * @param integer $uid
     * @return PreUcenterPmMembers
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
     * Set isnew
     *
     * @param boolean $isnew
     * @return PreUcenterPmMembers
     */
    public function setIsnew($isnew)
    {
        $this->isnew = $isnew;

        return $this;
    }

    /**
     * Get isnew
     *
     * @return boolean 
     */
    public function getIsnew()
    {
        return $this->isnew;
    }

    /**
     * Set pmnum
     *
     * @param integer $pmnum
     * @return PreUcenterPmMembers
     */
    public function setPmnum($pmnum)
    {
        $this->pmnum = $pmnum;

        return $this;
    }

    /**
     * Get pmnum
     *
     * @return integer 
     */
    public function getPmnum()
    {
        return $this->pmnum;
    }

    /**
     * Set lastupdate
     *
     * @param integer $lastupdate
     * @return PreUcenterPmMembers
     */
    public function setLastupdate($lastupdate)
    {
        $this->lastupdate = $lastupdate;

        return $this;
    }

    /**
     * Get lastupdate
     *
     * @return integer 
     */
    public function getLastupdate()
    {
        return $this->lastupdate;
    }

    /**
     * Set lastdateline
     *
     * @param integer $lastdateline
     * @return PreUcenterPmMembers
     */
    public function setLastdateline($lastdateline)
    {
        $this->lastdateline = $lastdateline;

        return $this;
    }

    /**
     * Get lastdateline
     *
     * @return integer 
     */
    public function getLastdateline()
    {
        return $this->lastdateline;
    }
}

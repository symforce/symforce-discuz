<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonMemberStatus
 *
 * @ORM\Table(name="pre_common_member_status", indexes={@ORM\Index(name="lastactivity", columns={"lastactivity", "invisible"})})
 * @ORM\Entity
 */
class PreCommonMemberStatus
{
    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uid;

    /**
     * @var string
     *
     * @ORM\Column(name="regip", type="string", length=15, nullable=false)
     */
    private $regip = '';

    /**
     * @var string
     *
     * @ORM\Column(name="lastip", type="string", length=15, nullable=false)
     */
    private $lastip = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="port", type="smallint", nullable=false)
     */
    private $port = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="lastvisit", type="integer", nullable=false)
     */
    private $lastvisit = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="lastactivity", type="integer", nullable=false)
     */
    private $lastactivity = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="lastpost", type="integer", nullable=false)
     */
    private $lastpost = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="lastsendmail", type="integer", nullable=false)
     */
    private $lastsendmail = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="invisible", type="boolean", nullable=false)
     */
    private $invisible = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="buyercredit", type="smallint", nullable=false)
     */
    private $buyercredit = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="sellercredit", type="smallint", nullable=false)
     */
    private $sellercredit = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="favtimes", type="integer", nullable=false)
     */
    private $favtimes = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="sharetimes", type="integer", nullable=false)
     */
    private $sharetimes = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="profileprogress", type="boolean", nullable=false)
     */
    private $profileprogress = '0';



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
     * Set regip
     *
     * @param string $regip
     * @return PreCommonMemberStatus
     */
    public function setRegip($regip)
    {
        $this->regip = $regip;

        return $this;
    }

    /**
     * Get regip
     *
     * @return string 
     */
    public function getRegip()
    {
        return $this->regip;
    }

    /**
     * Set lastip
     *
     * @param string $lastip
     * @return PreCommonMemberStatus
     */
    public function setLastip($lastip)
    {
        $this->lastip = $lastip;

        return $this;
    }

    /**
     * Get lastip
     *
     * @return string 
     */
    public function getLastip()
    {
        return $this->lastip;
    }

    /**
     * Set port
     *
     * @param integer $port
     * @return PreCommonMemberStatus
     */
    public function setPort($port)
    {
        $this->port = $port;

        return $this;
    }

    /**
     * Get port
     *
     * @return integer 
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Set lastvisit
     *
     * @param integer $lastvisit
     * @return PreCommonMemberStatus
     */
    public function setLastvisit($lastvisit)
    {
        $this->lastvisit = $lastvisit;

        return $this;
    }

    /**
     * Get lastvisit
     *
     * @return integer 
     */
    public function getLastvisit()
    {
        return $this->lastvisit;
    }

    /**
     * Set lastactivity
     *
     * @param integer $lastactivity
     * @return PreCommonMemberStatus
     */
    public function setLastactivity($lastactivity)
    {
        $this->lastactivity = $lastactivity;

        return $this;
    }

    /**
     * Get lastactivity
     *
     * @return integer 
     */
    public function getLastactivity()
    {
        return $this->lastactivity;
    }

    /**
     * Set lastpost
     *
     * @param integer $lastpost
     * @return PreCommonMemberStatus
     */
    public function setLastpost($lastpost)
    {
        $this->lastpost = $lastpost;

        return $this;
    }

    /**
     * Get lastpost
     *
     * @return integer 
     */
    public function getLastpost()
    {
        return $this->lastpost;
    }

    /**
     * Set lastsendmail
     *
     * @param integer $lastsendmail
     * @return PreCommonMemberStatus
     */
    public function setLastsendmail($lastsendmail)
    {
        $this->lastsendmail = $lastsendmail;

        return $this;
    }

    /**
     * Get lastsendmail
     *
     * @return integer 
     */
    public function getLastsendmail()
    {
        return $this->lastsendmail;
    }

    /**
     * Set invisible
     *
     * @param boolean $invisible
     * @return PreCommonMemberStatus
     */
    public function setInvisible($invisible)
    {
        $this->invisible = $invisible;

        return $this;
    }

    /**
     * Get invisible
     *
     * @return boolean 
     */
    public function getInvisible()
    {
        return $this->invisible;
    }

    /**
     * Set buyercredit
     *
     * @param integer $buyercredit
     * @return PreCommonMemberStatus
     */
    public function setBuyercredit($buyercredit)
    {
        $this->buyercredit = $buyercredit;

        return $this;
    }

    /**
     * Get buyercredit
     *
     * @return integer 
     */
    public function getBuyercredit()
    {
        return $this->buyercredit;
    }

    /**
     * Set sellercredit
     *
     * @param integer $sellercredit
     * @return PreCommonMemberStatus
     */
    public function setSellercredit($sellercredit)
    {
        $this->sellercredit = $sellercredit;

        return $this;
    }

    /**
     * Get sellercredit
     *
     * @return integer 
     */
    public function getSellercredit()
    {
        return $this->sellercredit;
    }

    /**
     * Set favtimes
     *
     * @param integer $favtimes
     * @return PreCommonMemberStatus
     */
    public function setFavtimes($favtimes)
    {
        $this->favtimes = $favtimes;

        return $this;
    }

    /**
     * Get favtimes
     *
     * @return integer 
     */
    public function getFavtimes()
    {
        return $this->favtimes;
    }

    /**
     * Set sharetimes
     *
     * @param integer $sharetimes
     * @return PreCommonMemberStatus
     */
    public function setSharetimes($sharetimes)
    {
        $this->sharetimes = $sharetimes;

        return $this;
    }

    /**
     * Get sharetimes
     *
     * @return integer 
     */
    public function getSharetimes()
    {
        return $this->sharetimes;
    }

    /**
     * Set profileprogress
     *
     * @param boolean $profileprogress
     * @return PreCommonMemberStatus
     */
    public function setProfileprogress($profileprogress)
    {
        $this->profileprogress = $profileprogress;

        return $this;
    }

    /**
     * Get profileprogress
     *
     * @return boolean 
     */
    public function getProfileprogress()
    {
        return $this->profileprogress;
    }
}

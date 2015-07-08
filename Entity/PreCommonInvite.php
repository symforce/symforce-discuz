<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonInvite
 *
 * @ORM\Table(name="pre_common_invite", indexes={@ORM\Index(name="uid", columns={"uid", "dateline"})})
 * @ORM\Entity
 */
class PreCommonInvite
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     */
    private $uid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=20, nullable=false)
     */
    private $code = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="fuid", type="integer", nullable=false)
     */
    private $fuid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="fusername", type="string", length=20, nullable=false)
     */
    private $fusername = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="boolean", nullable=false)
     */
    private $type = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=40, nullable=false)
     */
    private $email = '';

    /**
     * @var string
     *
     * @ORM\Column(name="inviteip", type="string", length=15, nullable=false)
     */
    private $inviteip = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="appid", type="integer", nullable=false)
     */
    private $appid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="endtime", type="integer", nullable=false)
     */
    private $endtime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="regdateline", type="integer", nullable=false)
     */
    private $regdateline = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="orderid", type="string", length=32, nullable=false)
     */
    private $orderid = '';



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set uid
     *
     * @param integer $uid
     * @return PreCommonInvite
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
     * Set code
     *
     * @param string $code
     * @return PreCommonInvite
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
     * Set fuid
     *
     * @param integer $fuid
     * @return PreCommonInvite
     */
    public function setFuid($fuid)
    {
        $this->fuid = $fuid;

        return $this;
    }

    /**
     * Get fuid
     *
     * @return integer 
     */
    public function getFuid()
    {
        return $this->fuid;
    }

    /**
     * Set fusername
     *
     * @param string $fusername
     * @return PreCommonInvite
     */
    public function setFusername($fusername)
    {
        $this->fusername = $fusername;

        return $this;
    }

    /**
     * Get fusername
     *
     * @return string 
     */
    public function getFusername()
    {
        return $this->fusername;
    }

    /**
     * Set type
     *
     * @param boolean $type
     * @return PreCommonInvite
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return boolean 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return PreCommonInvite
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set inviteip
     *
     * @param string $inviteip
     * @return PreCommonInvite
     */
    public function setInviteip($inviteip)
    {
        $this->inviteip = $inviteip;

        return $this;
    }

    /**
     * Get inviteip
     *
     * @return string 
     */
    public function getInviteip()
    {
        return $this->inviteip;
    }

    /**
     * Set appid
     *
     * @param integer $appid
     * @return PreCommonInvite
     */
    public function setAppid($appid)
    {
        $this->appid = $appid;

        return $this;
    }

    /**
     * Get appid
     *
     * @return integer 
     */
    public function getAppid()
    {
        return $this->appid;
    }

    /**
     * Set dateline
     *
     * @param integer $dateline
     * @return PreCommonInvite
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
     * Set endtime
     *
     * @param integer $endtime
     * @return PreCommonInvite
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
     * Set regdateline
     *
     * @param integer $regdateline
     * @return PreCommonInvite
     */
    public function setRegdateline($regdateline)
    {
        $this->regdateline = $regdateline;

        return $this;
    }

    /**
     * Get regdateline
     *
     * @return integer 
     */
    public function getRegdateline()
    {
        return $this->regdateline;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return PreCommonInvite
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set orderid
     *
     * @param string $orderid
     * @return PreCommonInvite
     */
    public function setOrderid($orderid)
    {
        $this->orderid = $orderid;

        return $this;
    }

    /**
     * Get orderid
     *
     * @return string 
     */
    public function getOrderid()
    {
        return $this->orderid;
    }
}

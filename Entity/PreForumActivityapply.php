<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreForumActivityapply
 *
 * @ORM\Table(name="pre_forum_activityapply", indexes={@ORM\Index(name="uid", columns={"uid"}), @ORM\Index(name="tid", columns={"tid"}), @ORM\Index(name="dateline", columns={"tid", "dateline"})})
 * @ORM\Entity
 */
class PreForumActivityapply
{
    /**
     * @var integer
     *
     * @ORM\Column(name="applyid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $applyid;

    /**
     * @var integer
     *
     * @ORM\Column(name="tid", type="integer", nullable=false)
     */
    private $tid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=false)
     */
    private $username = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     */
    private $uid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="string", length=255, nullable=false)
     */
    private $message = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="verified", type="boolean", nullable=false)
     */
    private $verified = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="payment", type="integer", nullable=false)
     */
    private $payment = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ufielddata", type="text", nullable=false)
     */
    private $ufielddata;



    /**
     * Get applyid
     *
     * @return integer 
     */
    public function getApplyid()
    {
        return $this->applyid;
    }

    /**
     * Set tid
     *
     * @param integer $tid
     * @return PreForumActivityapply
     */
    public function setTid($tid)
    {
        $this->tid = $tid;

        return $this;
    }

    /**
     * Get tid
     *
     * @return integer 
     */
    public function getTid()
    {
        return $this->tid;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return PreForumActivityapply
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set uid
     *
     * @param integer $uid
     * @return PreForumActivityapply
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
     * Set message
     *
     * @param string $message
     * @return PreForumActivityapply
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set verified
     *
     * @param boolean $verified
     * @return PreForumActivityapply
     */
    public function setVerified($verified)
    {
        $this->verified = $verified;

        return $this;
    }

    /**
     * Get verified
     *
     * @return boolean 
     */
    public function getVerified()
    {
        return $this->verified;
    }

    /**
     * Set dateline
     *
     * @param integer $dateline
     * @return PreForumActivityapply
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
     * Set payment
     *
     * @param integer $payment
     * @return PreForumActivityapply
     */
    public function setPayment($payment)
    {
        $this->payment = $payment;

        return $this;
    }

    /**
     * Get payment
     *
     * @return integer 
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * Set ufielddata
     *
     * @param string $ufielddata
     * @return PreForumActivityapply
     */
    public function setUfielddata($ufielddata)
    {
        $this->ufielddata = $ufielddata;

        return $this;
    }

    /**
     * Get ufielddata
     *
     * @return string 
     */
    public function getUfielddata()
    {
        return $this->ufielddata;
    }
}

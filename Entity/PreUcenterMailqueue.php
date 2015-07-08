<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreUcenterMailqueue
 *
 * @ORM\Table(name="pre_ucenter_mailqueue", indexes={@ORM\Index(name="appid", columns={"appid"}), @ORM\Index(name="level", columns={"level", "failures"})})
 * @ORM\Entity
 */
class PreUcenterMailqueue
{
    /**
     * @var integer
     *
     * @ORM\Column(name="mailid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mailid;

    /**
     * @var integer
     *
     * @ORM\Column(name="touid", type="integer", nullable=false)
     */
    private $touid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="tomail", type="string", length=32, nullable=false)
     */
    private $tomail;

    /**
     * @var string
     *
     * @ORM\Column(name="frommail", type="string", length=100, nullable=false)
     */
    private $frommail;

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=255, nullable=false)
     */
    private $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", nullable=false)
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="charset", type="string", length=15, nullable=false)
     */
    private $charset;

    /**
     * @var boolean
     *
     * @ORM\Column(name="htmlon", type="boolean", nullable=false)
     */
    private $htmlon = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="level", type="boolean", nullable=false)
     */
    private $level = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="failures", type="boolean", nullable=false)
     */
    private $failures = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="appid", type="smallint", nullable=false)
     */
    private $appid = '0';



    /**
     * Get mailid
     *
     * @return integer 
     */
    public function getMailid()
    {
        return $this->mailid;
    }

    /**
     * Set touid
     *
     * @param integer $touid
     * @return PreUcenterMailqueue
     */
    public function setTouid($touid)
    {
        $this->touid = $touid;

        return $this;
    }

    /**
     * Get touid
     *
     * @return integer 
     */
    public function getTouid()
    {
        return $this->touid;
    }

    /**
     * Set tomail
     *
     * @param string $tomail
     * @return PreUcenterMailqueue
     */
    public function setTomail($tomail)
    {
        $this->tomail = $tomail;

        return $this;
    }

    /**
     * Get tomail
     *
     * @return string 
     */
    public function getTomail()
    {
        return $this->tomail;
    }

    /**
     * Set frommail
     *
     * @param string $frommail
     * @return PreUcenterMailqueue
     */
    public function setFrommail($frommail)
    {
        $this->frommail = $frommail;

        return $this;
    }

    /**
     * Get frommail
     *
     * @return string 
     */
    public function getFrommail()
    {
        return $this->frommail;
    }

    /**
     * Set subject
     *
     * @param string $subject
     * @return PreUcenterMailqueue
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
     * Set message
     *
     * @param string $message
     * @return PreUcenterMailqueue
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
     * Set charset
     *
     * @param string $charset
     * @return PreUcenterMailqueue
     */
    public function setCharset($charset)
    {
        $this->charset = $charset;

        return $this;
    }

    /**
     * Get charset
     *
     * @return string 
     */
    public function getCharset()
    {
        return $this->charset;
    }

    /**
     * Set htmlon
     *
     * @param boolean $htmlon
     * @return PreUcenterMailqueue
     */
    public function setHtmlon($htmlon)
    {
        $this->htmlon = $htmlon;

        return $this;
    }

    /**
     * Get htmlon
     *
     * @return boolean 
     */
    public function getHtmlon()
    {
        return $this->htmlon;
    }

    /**
     * Set level
     *
     * @param boolean $level
     * @return PreUcenterMailqueue
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return boolean 
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set dateline
     *
     * @param integer $dateline
     * @return PreUcenterMailqueue
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
     * Set failures
     *
     * @param boolean $failures
     * @return PreUcenterMailqueue
     */
    public function setFailures($failures)
    {
        $this->failures = $failures;

        return $this;
    }

    /**
     * Get failures
     *
     * @return boolean 
     */
    public function getFailures()
    {
        return $this->failures;
    }

    /**
     * Set appid
     *
     * @param integer $appid
     * @return PreUcenterMailqueue
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
}

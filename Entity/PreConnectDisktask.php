<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreConnectDisktask
 *
 * @ORM\Table(name="pre_connect_disktask", indexes={@ORM\Index(name="openid", columns={"openid"}), @ORM\Index(name="status", columns={"status"})})
 * @ORM\Entity
 */
class PreConnectDisktask
{
    /**
     * @var integer
     *
     * @ORM\Column(name="taskid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $taskid;

    /**
     * @var integer
     *
     * @ORM\Column(name="aid", type="integer", nullable=false)
     */
    private $aid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     */
    private $uid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="openid", type="string", length=32, nullable=false)
     */
    private $openid = '';

    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=255, nullable=false)
     */
    private $filename = '';

    /**
     * @var string
     *
     * @ORM\Column(name="verifycode", type="string", length=32, nullable=false)
     */
    private $verifycode = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="smallint", nullable=false)
     */
    private $status = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="downloadtime", type="integer", nullable=false)
     */
    private $downloadtime = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="extra", type="text", nullable=true)
     */
    private $extra;



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
     * Set aid
     *
     * @param integer $aid
     * @return PreConnectDisktask
     */
    public function setAid($aid)
    {
        $this->aid = $aid;

        return $this;
    }

    /**
     * Get aid
     *
     * @return integer 
     */
    public function getAid()
    {
        return $this->aid;
    }

    /**
     * Set uid
     *
     * @param integer $uid
     * @return PreConnectDisktask
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
     * Set openid
     *
     * @param string $openid
     * @return PreConnectDisktask
     */
    public function setOpenid($openid)
    {
        $this->openid = $openid;

        return $this;
    }

    /**
     * Get openid
     *
     * @return string 
     */
    public function getOpenid()
    {
        return $this->openid;
    }

    /**
     * Set filename
     *
     * @param string $filename
     * @return PreConnectDisktask
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
     * Set verifycode
     *
     * @param string $verifycode
     * @return PreConnectDisktask
     */
    public function setVerifycode($verifycode)
    {
        $this->verifycode = $verifycode;

        return $this;
    }

    /**
     * Get verifycode
     *
     * @return string 
     */
    public function getVerifycode()
    {
        return $this->verifycode;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return PreConnectDisktask
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set dateline
     *
     * @param integer $dateline
     * @return PreConnectDisktask
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
     * Set downloadtime
     *
     * @param integer $downloadtime
     * @return PreConnectDisktask
     */
    public function setDownloadtime($downloadtime)
    {
        $this->downloadtime = $downloadtime;

        return $this;
    }

    /**
     * Get downloadtime
     *
     * @return integer 
     */
    public function getDownloadtime()
    {
        return $this->downloadtime;
    }

    /**
     * Set extra
     *
     * @param string $extra
     * @return PreConnectDisktask
     */
    public function setExtra($extra)
    {
        $this->extra = $extra;

        return $this;
    }

    /**
     * Get extra
     *
     * @return string 
     */
    public function getExtra()
    {
        return $this->extra;
    }
}

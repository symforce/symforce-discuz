<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonReport
 *
 * @ORM\Table(name="pre_common_report", indexes={@ORM\Index(name="urlkey", columns={"urlkey"}), @ORM\Index(name="fid", columns={"fid"})})
 * @ORM\Entity
 */
class PreCommonReport
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
     * @var string
     *
     * @ORM\Column(name="urlkey", type="string", length=32, nullable=false)
     */
    private $urlkey = '';

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=false)
     */
    private $url = '';

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", nullable=false)
     */
    private $message;

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     */
    private $uid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=15, nullable=false)
     */
    private $username = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="num", type="smallint", nullable=false)
     */
    private $num = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="opuid", type="integer", nullable=false)
     */
    private $opuid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="opname", type="string", length=15, nullable=false)
     */
    private $opname = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="optime", type="integer", nullable=false)
     */
    private $optime = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="opresult", type="string", length=255, nullable=false)
     */
    private $opresult = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="fid", type="integer", nullable=false)
     */
    private $fid = '0';



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
     * Set urlkey
     *
     * @param string $urlkey
     * @return PreCommonReport
     */
    public function setUrlkey($urlkey)
    {
        $this->urlkey = $urlkey;

        return $this;
    }

    /**
     * Get urlkey
     *
     * @return string 
     */
    public function getUrlkey()
    {
        return $this->urlkey;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return PreCommonReport
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return PreCommonReport
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
     * Set uid
     *
     * @param integer $uid
     * @return PreCommonReport
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
     * Set username
     *
     * @param string $username
     * @return PreCommonReport
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
     * Set dateline
     *
     * @param integer $dateline
     * @return PreCommonReport
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
     * Set num
     *
     * @param integer $num
     * @return PreCommonReport
     */
    public function setNum($num)
    {
        $this->num = $num;

        return $this;
    }

    /**
     * Get num
     *
     * @return integer 
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * Set opuid
     *
     * @param integer $opuid
     * @return PreCommonReport
     */
    public function setOpuid($opuid)
    {
        $this->opuid = $opuid;

        return $this;
    }

    /**
     * Get opuid
     *
     * @return integer 
     */
    public function getOpuid()
    {
        return $this->opuid;
    }

    /**
     * Set opname
     *
     * @param string $opname
     * @return PreCommonReport
     */
    public function setOpname($opname)
    {
        $this->opname = $opname;

        return $this;
    }

    /**
     * Get opname
     *
     * @return string 
     */
    public function getOpname()
    {
        return $this->opname;
    }

    /**
     * Set optime
     *
     * @param integer $optime
     * @return PreCommonReport
     */
    public function setOptime($optime)
    {
        $this->optime = $optime;

        return $this;
    }

    /**
     * Get optime
     *
     * @return integer 
     */
    public function getOptime()
    {
        return $this->optime;
    }

    /**
     * Set opresult
     *
     * @param string $opresult
     * @return PreCommonReport
     */
    public function setOpresult($opresult)
    {
        $this->opresult = $opresult;

        return $this;
    }

    /**
     * Get opresult
     *
     * @return string 
     */
    public function getOpresult()
    {
        return $this->opresult;
    }

    /**
     * Set fid
     *
     * @param integer $fid
     * @return PreCommonReport
     */
    public function setFid($fid)
    {
        $this->fid = $fid;

        return $this;
    }

    /**
     * Get fid
     *
     * @return integer 
     */
    public function getFid()
    {
        return $this->fid;
    }
}

<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreHomeAppcreditlog
 *
 * @ORM\Table(name="pre_home_appcreditlog", indexes={@ORM\Index(name="uid", columns={"uid", "dateline"}), @ORM\Index(name="appid", columns={"appid"})})
 * @ORM\Entity
 */
class PreHomeAppcreditlog
{
    /**
     * @var integer
     *
     * @ORM\Column(name="logid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $logid;

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     */
    private $uid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="appid", type="integer", nullable=false)
     */
    private $appid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="appname", type="string", length=60, nullable=false)
     */
    private $appname = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="boolean", nullable=false)
     */
    private $type = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="credit", type="integer", nullable=false)
     */
    private $credit = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="text", nullable=false)
     */
    private $note;

    /**
     * @var integer
     *
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline = '0';



    /**
     * Get logid
     *
     * @return integer 
     */
    public function getLogid()
    {
        return $this->logid;
    }

    /**
     * Set uid
     *
     * @param integer $uid
     * @return PreHomeAppcreditlog
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
     * Set appid
     *
     * @param integer $appid
     * @return PreHomeAppcreditlog
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
     * Set appname
     *
     * @param string $appname
     * @return PreHomeAppcreditlog
     */
    public function setAppname($appname)
    {
        $this->appname = $appname;

        return $this;
    }

    /**
     * Get appname
     *
     * @return string 
     */
    public function getAppname()
    {
        return $this->appname;
    }

    /**
     * Set type
     *
     * @param boolean $type
     * @return PreHomeAppcreditlog
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
     * Set credit
     *
     * @param integer $credit
     * @return PreHomeAppcreditlog
     */
    public function setCredit($credit)
    {
        $this->credit = $credit;

        return $this;
    }

    /**
     * Get credit
     *
     * @return integer 
     */
    public function getCredit()
    {
        return $this->credit;
    }

    /**
     * Set note
     *
     * @param string $note
     * @return PreHomeAppcreditlog
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set dateline
     *
     * @param integer $dateline
     * @return PreHomeAppcreditlog
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
}

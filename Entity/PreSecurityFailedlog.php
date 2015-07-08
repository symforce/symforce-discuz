<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreSecurityFailedlog
 *
 * @ORM\Table(name="pre_security_failedlog", indexes={@ORM\Index(name="pid", columns={"pid"}), @ORM\Index(name="uid", columns={"uid"})})
 * @ORM\Entity
 */
class PreSecurityFailedlog
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
     * @ORM\Column(name="reporttype", type="string", length=20, nullable=false)
     */
    private $reporttype;

    /**
     * @var integer
     *
     * @ORM\Column(name="tid", type="integer", nullable=false)
     */
    private $tid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="pid", type="integer", nullable=false)
     */
    private $pid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     */
    private $uid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="failcount", type="integer", nullable=false)
     */
    private $failcount = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="createtime", type="integer", nullable=false)
     */
    private $createtime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="posttime", type="integer", nullable=false)
     */
    private $posttime = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="delreason", type="string", length=255, nullable=false)
     */
    private $delreason;

    /**
     * @var integer
     *
     * @ORM\Column(name="scheduletime", type="integer", nullable=false)
     */
    private $scheduletime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="lastfailtime", type="integer", nullable=false)
     */
    private $lastfailtime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="extra1", type="integer", nullable=false)
     */
    private $extra1;

    /**
     * @var string
     *
     * @ORM\Column(name="extra2", type="string", length=255, nullable=false)
     */
    private $extra2 = '0';



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
     * Set reporttype
     *
     * @param string $reporttype
     * @return PreSecurityFailedlog
     */
    public function setReporttype($reporttype)
    {
        $this->reporttype = $reporttype;

        return $this;
    }

    /**
     * Get reporttype
     *
     * @return string 
     */
    public function getReporttype()
    {
        return $this->reporttype;
    }

    /**
     * Set tid
     *
     * @param integer $tid
     * @return PreSecurityFailedlog
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
     * Set pid
     *
     * @param integer $pid
     * @return PreSecurityFailedlog
     */
    public function setPid($pid)
    {
        $this->pid = $pid;

        return $this;
    }

    /**
     * Get pid
     *
     * @return integer 
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * Set uid
     *
     * @param integer $uid
     * @return PreSecurityFailedlog
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
     * Set failcount
     *
     * @param integer $failcount
     * @return PreSecurityFailedlog
     */
    public function setFailcount($failcount)
    {
        $this->failcount = $failcount;

        return $this;
    }

    /**
     * Get failcount
     *
     * @return integer 
     */
    public function getFailcount()
    {
        return $this->failcount;
    }

    /**
     * Set createtime
     *
     * @param integer $createtime
     * @return PreSecurityFailedlog
     */
    public function setCreatetime($createtime)
    {
        $this->createtime = $createtime;

        return $this;
    }

    /**
     * Get createtime
     *
     * @return integer 
     */
    public function getCreatetime()
    {
        return $this->createtime;
    }

    /**
     * Set posttime
     *
     * @param integer $posttime
     * @return PreSecurityFailedlog
     */
    public function setPosttime($posttime)
    {
        $this->posttime = $posttime;

        return $this;
    }

    /**
     * Get posttime
     *
     * @return integer 
     */
    public function getPosttime()
    {
        return $this->posttime;
    }

    /**
     * Set delreason
     *
     * @param string $delreason
     * @return PreSecurityFailedlog
     */
    public function setDelreason($delreason)
    {
        $this->delreason = $delreason;

        return $this;
    }

    /**
     * Get delreason
     *
     * @return string 
     */
    public function getDelreason()
    {
        return $this->delreason;
    }

    /**
     * Set scheduletime
     *
     * @param integer $scheduletime
     * @return PreSecurityFailedlog
     */
    public function setScheduletime($scheduletime)
    {
        $this->scheduletime = $scheduletime;

        return $this;
    }

    /**
     * Get scheduletime
     *
     * @return integer 
     */
    public function getScheduletime()
    {
        return $this->scheduletime;
    }

    /**
     * Set lastfailtime
     *
     * @param integer $lastfailtime
     * @return PreSecurityFailedlog
     */
    public function setLastfailtime($lastfailtime)
    {
        $this->lastfailtime = $lastfailtime;

        return $this;
    }

    /**
     * Get lastfailtime
     *
     * @return integer 
     */
    public function getLastfailtime()
    {
        return $this->lastfailtime;
    }

    /**
     * Set extra1
     *
     * @param integer $extra1
     * @return PreSecurityFailedlog
     */
    public function setExtra1($extra1)
    {
        $this->extra1 = $extra1;

        return $this;
    }

    /**
     * Get extra1
     *
     * @return integer 
     */
    public function getExtra1()
    {
        return $this->extra1;
    }

    /**
     * Set extra2
     *
     * @param string $extra2
     * @return PreSecurityFailedlog
     */
    public function setExtra2($extra2)
    {
        $this->extra2 = $extra2;

        return $this;
    }

    /**
     * Get extra2
     *
     * @return string 
     */
    public function getExtra2()
    {
        return $this->extra2;
    }
}

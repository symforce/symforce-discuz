<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreConnectTthreadlog
 *
 * @ORM\Table(name="pre_connect_tthreadlog", indexes={@ORM\Index(name="nexttime", columns={"tid", "nexttime"}), @ORM\Index(name="updatetime", columns={"tid", "updatetime"})})
 * @ORM\Entity
 */
class PreConnectTthreadlog
{
    /**
     * @var string
     *
     * @ORM\Column(name="twid", type="string", length=16, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $twid;

    /**
     * @var integer
     *
     * @ORM\Column(name="tid", type="integer", nullable=false)
     */
    private $tid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="conopenid", type="string", length=32, nullable=false)
     */
    private $conopenid;

    /**
     * @var integer
     *
     * @ORM\Column(name="pagetime", type="integer", nullable=true)
     */
    private $pagetime = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="lasttwid", type="string", length=16, nullable=true)
     */
    private $lasttwid;

    /**
     * @var integer
     *
     * @ORM\Column(name="nexttime", type="integer", nullable=true)
     */
    private $nexttime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="updatetime", type="integer", nullable=true)
     */
    private $updatetime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="dateline", type="integer", nullable=true)
     */
    private $dateline = '0';



    /**
     * Get twid
     *
     * @return string 
     */
    public function getTwid()
    {
        return $this->twid;
    }

    /**
     * Set tid
     *
     * @param integer $tid
     * @return PreConnectTthreadlog
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
     * Set conopenid
     *
     * @param string $conopenid
     * @return PreConnectTthreadlog
     */
    public function setConopenid($conopenid)
    {
        $this->conopenid = $conopenid;

        return $this;
    }

    /**
     * Get conopenid
     *
     * @return string 
     */
    public function getConopenid()
    {
        return $this->conopenid;
    }

    /**
     * Set pagetime
     *
     * @param integer $pagetime
     * @return PreConnectTthreadlog
     */
    public function setPagetime($pagetime)
    {
        $this->pagetime = $pagetime;

        return $this;
    }

    /**
     * Get pagetime
     *
     * @return integer 
     */
    public function getPagetime()
    {
        return $this->pagetime;
    }

    /**
     * Set lasttwid
     *
     * @param string $lasttwid
     * @return PreConnectTthreadlog
     */
    public function setLasttwid($lasttwid)
    {
        $this->lasttwid = $lasttwid;

        return $this;
    }

    /**
     * Get lasttwid
     *
     * @return string 
     */
    public function getLasttwid()
    {
        return $this->lasttwid;
    }

    /**
     * Set nexttime
     *
     * @param integer $nexttime
     * @return PreConnectTthreadlog
     */
    public function setNexttime($nexttime)
    {
        $this->nexttime = $nexttime;

        return $this;
    }

    /**
     * Get nexttime
     *
     * @return integer 
     */
    public function getNexttime()
    {
        return $this->nexttime;
    }

    /**
     * Set updatetime
     *
     * @param integer $updatetime
     * @return PreConnectTthreadlog
     */
    public function setUpdatetime($updatetime)
    {
        $this->updatetime = $updatetime;

        return $this;
    }

    /**
     * Get updatetime
     *
     * @return integer 
     */
    public function getUpdatetime()
    {
        return $this->updatetime;
    }

    /**
     * Set dateline
     *
     * @param integer $dateline
     * @return PreConnectTthreadlog
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

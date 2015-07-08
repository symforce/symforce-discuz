<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreConnectPostfeedlog
 *
 * @ORM\Table(name="pre_connect_postfeedlog", uniqueConstraints={@ORM\UniqueConstraint(name="pid", columns={"pid"})})
 * @ORM\Entity
 */
class PreConnectPostfeedlog
{
    /**
     * @var integer
     *
     * @ORM\Column(name="flid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $flid;

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
     * @ORM\Column(name="publishtimes", type="integer", nullable=false)
     */
    private $publishtimes = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="lastpublished", type="integer", nullable=false)
     */
    private $lastpublished = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status = '1';



    /**
     * Get flid
     *
     * @return integer 
     */
    public function getFlid()
    {
        return $this->flid;
    }

    /**
     * Set pid
     *
     * @param integer $pid
     * @return PreConnectPostfeedlog
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
     * @return PreConnectPostfeedlog
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
     * Set publishtimes
     *
     * @param integer $publishtimes
     * @return PreConnectPostfeedlog
     */
    public function setPublishtimes($publishtimes)
    {
        $this->publishtimes = $publishtimes;

        return $this;
    }

    /**
     * Get publishtimes
     *
     * @return integer 
     */
    public function getPublishtimes()
    {
        return $this->publishtimes;
    }

    /**
     * Set lastpublished
     *
     * @param integer $lastpublished
     * @return PreConnectPostfeedlog
     */
    public function setLastpublished($lastpublished)
    {
        $this->lastpublished = $lastpublished;

        return $this;
    }

    /**
     * Get lastpublished
     *
     * @return integer 
     */
    public function getLastpublished()
    {
        return $this->lastpublished;
    }

    /**
     * Set dateline
     *
     * @param integer $dateline
     * @return PreConnectPostfeedlog
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
     * Set status
     *
     * @param boolean $status
     * @return PreConnectPostfeedlog
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
}

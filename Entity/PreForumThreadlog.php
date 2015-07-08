<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreForumThreadlog
 *
 * @ORM\Table(name="pre_forum_threadlog", indexes={@ORM\Index(name="dateline", columns={"dateline"})})
 * @ORM\Entity
 */
class PreForumThreadlog
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="fid", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $uid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="otherid", type="smallint", nullable=false)
     */
    private $otherid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="action", type="string", length=10, nullable=false)
     */
    private $action;

    /**
     * @var integer
     *
     * @ORM\Column(name="expiry", type="integer", nullable=false)
     */
    private $expiry = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline = '0';



    /**
     * Set tid
     *
     * @param integer $tid
     * @return PreForumThreadlog
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
     * Set fid
     *
     * @param integer $fid
     * @return PreForumThreadlog
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

    /**
     * Set uid
     *
     * @param integer $uid
     * @return PreForumThreadlog
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
     * Set otherid
     *
     * @param integer $otherid
     * @return PreForumThreadlog
     */
    public function setOtherid($otherid)
    {
        $this->otherid = $otherid;

        return $this;
    }

    /**
     * Get otherid
     *
     * @return integer 
     */
    public function getOtherid()
    {
        return $this->otherid;
    }

    /**
     * Set action
     *
     * @param string $action
     * @return PreForumThreadlog
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return string 
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set expiry
     *
     * @param integer $expiry
     * @return PreForumThreadlog
     */
    public function setExpiry($expiry)
    {
        $this->expiry = $expiry;

        return $this;
    }

    /**
     * Get expiry
     *
     * @return integer 
     */
    public function getExpiry()
    {
        return $this->expiry;
    }

    /**
     * Set dateline
     *
     * @param integer $dateline
     * @return PreForumThreadlog
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

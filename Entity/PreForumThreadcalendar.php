<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreForumThreadcalendar
 *
 * @ORM\Table(name="pre_forum_threadcalendar", indexes={@ORM\Index(name="fid", columns={"fid", "dateline"})})
 * @ORM\Entity
 */
class PreForumThreadcalendar
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cid;

    /**
     * @var integer
     *
     * @ORM\Column(name="fid", type="integer", nullable=false)
     */
    private $fid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="hotnum", type="integer", nullable=false)
     */
    private $hotnum = '0';



    /**
     * Get cid
     *
     * @return integer 
     */
    public function getCid()
    {
        return $this->cid;
    }

    /**
     * Set fid
     *
     * @param integer $fid
     * @return PreForumThreadcalendar
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
     * Set dateline
     *
     * @param integer $dateline
     * @return PreForumThreadcalendar
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
     * Set hotnum
     *
     * @param integer $hotnum
     * @return PreForumThreadcalendar
     */
    public function setHotnum($hotnum)
    {
        $this->hotnum = $hotnum;

        return $this;
    }

    /**
     * Get hotnum
     *
     * @return integer 
     */
    public function getHotnum()
    {
        return $this->hotnum;
    }
}

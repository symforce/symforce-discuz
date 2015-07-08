<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreForumThreadhot
 *
 * @ORM\Table(name="pre_forum_threadhot", indexes={@ORM\Index(name="fid", columns={"fid"})})
 * @ORM\Entity
 */
class PreForumThreadhot
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cid = '0';

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
     * @ORM\Column(name="fid", type="integer", nullable=false)
     */
    private $fid = '0';



    /**
     * Set cid
     *
     * @param integer $cid
     * @return PreForumThreadhot
     */
    public function setCid($cid)
    {
        $this->cid = $cid;

        return $this;
    }

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
     * Set tid
     *
     * @param integer $tid
     * @return PreForumThreadhot
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
     * @return PreForumThreadhot
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

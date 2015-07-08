<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreForumCollectionthread
 *
 * @ORM\Table(name="pre_forum_collectionthread", indexes={@ORM\Index(name="ctid", columns={"ctid", "dateline"})})
 * @ORM\Entity
 */
class PreForumCollectionthread
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ctid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ctid = '0';

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
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="reason", type="string", length=255, nullable=false)
     */
    private $reason = '';



    /**
     * Set ctid
     *
     * @param integer $ctid
     * @return PreForumCollectionthread
     */
    public function setCtid($ctid)
    {
        $this->ctid = $ctid;

        return $this;
    }

    /**
     * Get ctid
     *
     * @return integer 
     */
    public function getCtid()
    {
        return $this->ctid;
    }

    /**
     * Set tid
     *
     * @param integer $tid
     * @return PreForumCollectionthread
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
     * Set dateline
     *
     * @param integer $dateline
     * @return PreForumCollectionthread
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
     * Set reason
     *
     * @param string $reason
     * @return PreForumCollectionthread
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * Get reason
     *
     * @return string 
     */
    public function getReason()
    {
        return $this->reason;
    }
}

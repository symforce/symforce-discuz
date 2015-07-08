<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreForumAttachment
 *
 * @ORM\Table(name="pre_forum_attachment", indexes={@ORM\Index(name="tid", columns={"tid"}), @ORM\Index(name="pid", columns={"pid"}), @ORM\Index(name="uid", columns={"uid"})})
 * @ORM\Entity
 */
class PreForumAttachment
{
    /**
     * @var integer
     *
     * @ORM\Column(name="aid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $aid;

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
     * @var boolean
     *
     * @ORM\Column(name="tableid", type="boolean", nullable=false)
     */
    private $tableid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="downloads", type="integer", nullable=false)
     */
    private $downloads = '0';



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
     * Set tid
     *
     * @param integer $tid
     * @return PreForumAttachment
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
     * @return PreForumAttachment
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
     * @return PreForumAttachment
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
     * Set tableid
     *
     * @param boolean $tableid
     * @return PreForumAttachment
     */
    public function setTableid($tableid)
    {
        $this->tableid = $tableid;

        return $this;
    }

    /**
     * Get tableid
     *
     * @return boolean 
     */
    public function getTableid()
    {
        return $this->tableid;
    }

    /**
     * Set downloads
     *
     * @param integer $downloads
     * @return PreForumAttachment
     */
    public function setDownloads($downloads)
    {
        $this->downloads = $downloads;

        return $this;
    }

    /**
     * Get downloads
     *
     * @return integer 
     */
    public function getDownloads()
    {
        return $this->downloads;
    }
}

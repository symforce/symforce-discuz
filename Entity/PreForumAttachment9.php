<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreForumAttachment9
 *
 * @ORM\Table(name="pre_forum_attachment_9", indexes={@ORM\Index(name="tid", columns={"tid"}), @ORM\Index(name="pid", columns={"pid"}), @ORM\Index(name="uid", columns={"uid"})})
 * @ORM\Entity
 */
class PreForumAttachment9
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
     * @var integer
     *
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=255, nullable=false)
     */
    private $filename = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="filesize", type="integer", nullable=false)
     */
    private $filesize = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="attachment", type="string", length=255, nullable=false)
     */
    private $attachment = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="remote", type="boolean", nullable=false)
     */
    private $remote = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="readperm", type="boolean", nullable=false)
     */
    private $readperm = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="price", type="smallint", nullable=false)
     */
    private $price = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="isimage", type="boolean", nullable=false)
     */
    private $isimage = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="width", type="smallint", nullable=false)
     */
    private $width = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="thumb", type="boolean", nullable=false)
     */
    private $thumb = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="picid", type="integer", nullable=false)
     */
    private $picid = '0';



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
     * @return PreForumAttachment9
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
     * @return PreForumAttachment9
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
     * @return PreForumAttachment9
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
     * Set dateline
     *
     * @param integer $dateline
     * @return PreForumAttachment9
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
     * Set filename
     *
     * @param string $filename
     * @return PreForumAttachment9
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string 
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set filesize
     *
     * @param integer $filesize
     * @return PreForumAttachment9
     */
    public function setFilesize($filesize)
    {
        $this->filesize = $filesize;

        return $this;
    }

    /**
     * Get filesize
     *
     * @return integer 
     */
    public function getFilesize()
    {
        return $this->filesize;
    }

    /**
     * Set attachment
     *
     * @param string $attachment
     * @return PreForumAttachment9
     */
    public function setAttachment($attachment)
    {
        $this->attachment = $attachment;

        return $this;
    }

    /**
     * Get attachment
     *
     * @return string 
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * Set remote
     *
     * @param boolean $remote
     * @return PreForumAttachment9
     */
    public function setRemote($remote)
    {
        $this->remote = $remote;

        return $this;
    }

    /**
     * Get remote
     *
     * @return boolean 
     */
    public function getRemote()
    {
        return $this->remote;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return PreForumAttachment9
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set readperm
     *
     * @param boolean $readperm
     * @return PreForumAttachment9
     */
    public function setReadperm($readperm)
    {
        $this->readperm = $readperm;

        return $this;
    }

    /**
     * Get readperm
     *
     * @return boolean 
     */
    public function getReadperm()
    {
        return $this->readperm;
    }

    /**
     * Set price
     *
     * @param integer $price
     * @return PreForumAttachment9
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return integer 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set isimage
     *
     * @param boolean $isimage
     * @return PreForumAttachment9
     */
    public function setIsimage($isimage)
    {
        $this->isimage = $isimage;

        return $this;
    }

    /**
     * Get isimage
     *
     * @return boolean 
     */
    public function getIsimage()
    {
        return $this->isimage;
    }

    /**
     * Set width
     *
     * @param integer $width
     * @return PreForumAttachment9
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get width
     *
     * @return integer 
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set thumb
     *
     * @param boolean $thumb
     * @return PreForumAttachment9
     */
    public function setThumb($thumb)
    {
        $this->thumb = $thumb;

        return $this;
    }

    /**
     * Get thumb
     *
     * @return boolean 
     */
    public function getThumb()
    {
        return $this->thumb;
    }

    /**
     * Set picid
     *
     * @param integer $picid
     * @return PreForumAttachment9
     */
    public function setPicid($picid)
    {
        $this->picid = $picid;

        return $this;
    }

    /**
     * Get picid
     *
     * @return integer 
     */
    public function getPicid()
    {
        return $this->picid;
    }
}

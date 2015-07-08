<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreForumAttachmentUnused
 *
 * @ORM\Table(name="pre_forum_attachment_unused", indexes={@ORM\Index(name="uid", columns={"uid"})})
 * @ORM\Entity
 */
class PreForumAttachmentUnused
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
     * Get aid
     *
     * @return integer 
     */
    public function getAid()
    {
        return $this->aid;
    }

    /**
     * Set uid
     *
     * @param integer $uid
     * @return PreForumAttachmentUnused
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
     * @return PreForumAttachmentUnused
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
     * @return PreForumAttachmentUnused
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
     * @return PreForumAttachmentUnused
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
     * @return PreForumAttachmentUnused
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
     * @return PreForumAttachmentUnused
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
     * Set isimage
     *
     * @param boolean $isimage
     * @return PreForumAttachmentUnused
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
     * @return PreForumAttachmentUnused
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
     * @return PreForumAttachmentUnused
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
}

<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PrePortalAttachment
 *
 * @ORM\Table(name="pre_portal_attachment", indexes={@ORM\Index(name="aid", columns={"aid", "attachid"})})
 * @ORM\Entity
 */
class PrePortalAttachment
{
    /**
     * @var integer
     *
     * @ORM\Column(name="attachid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $attachid;

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
     * @var string
     *
     * @ORM\Column(name="filetype", type="string", length=255, nullable=false)
     */
    private $filetype = '';

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
     * @ORM\Column(name="isimage", type="boolean", nullable=false)
     */
    private $isimage = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="thumb", type="boolean", nullable=false)
     */
    private $thumb = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="remote", type="boolean", nullable=false)
     */
    private $remote = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="aid", type="integer", nullable=false)
     */
    private $aid = '0';



    /**
     * Get attachid
     *
     * @return integer 
     */
    public function getAttachid()
    {
        return $this->attachid;
    }

    /**
     * Set uid
     *
     * @param integer $uid
     * @return PrePortalAttachment
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
     * @return PrePortalAttachment
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
     * @return PrePortalAttachment
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
     * Set filetype
     *
     * @param string $filetype
     * @return PrePortalAttachment
     */
    public function setFiletype($filetype)
    {
        $this->filetype = $filetype;

        return $this;
    }

    /**
     * Get filetype
     *
     * @return string 
     */
    public function getFiletype()
    {
        return $this->filetype;
    }

    /**
     * Set filesize
     *
     * @param integer $filesize
     * @return PrePortalAttachment
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
     * @return PrePortalAttachment
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
     * Set isimage
     *
     * @param boolean $isimage
     * @return PrePortalAttachment
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
     * Set thumb
     *
     * @param boolean $thumb
     * @return PrePortalAttachment
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
     * Set remote
     *
     * @param boolean $remote
     * @return PrePortalAttachment
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
     * Set aid
     *
     * @param integer $aid
     * @return PrePortalAttachment
     */
    public function setAid($aid)
    {
        $this->aid = $aid;

        return $this;
    }

    /**
     * Get aid
     *
     * @return integer 
     */
    public function getAid()
    {
        return $this->aid;
    }
}

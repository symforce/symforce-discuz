<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreForumAttachtype
 *
 * @ORM\Table(name="pre_forum_attachtype", indexes={@ORM\Index(name="fid", columns={"fid"})})
 * @ORM\Entity
 */
class PreForumAttachtype
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="fid", type="integer", nullable=false)
     */
    private $fid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="extension", type="string", length=12, nullable=false)
     */
    private $extension = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="maxsize", type="integer", nullable=false)
     */
    private $maxsize = '0';



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fid
     *
     * @param integer $fid
     * @return PreForumAttachtype
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
     * Set extension
     *
     * @param string $extension
     * @return PreForumAttachtype
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;

        return $this;
    }

    /**
     * Get extension
     *
     * @return string 
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Set maxsize
     *
     * @param integer $maxsize
     * @return PreForumAttachtype
     */
    public function setMaxsize($maxsize)
    {
        $this->maxsize = $maxsize;

        return $this;
    }

    /**
     * Get maxsize
     *
     * @return integer 
     */
    public function getMaxsize()
    {
        return $this->maxsize;
    }
}

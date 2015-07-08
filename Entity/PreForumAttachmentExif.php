<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreForumAttachmentExif
 *
 * @ORM\Table(name="pre_forum_attachment_exif")
 * @ORM\Entity
 */
class PreForumAttachmentExif
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
     * @var string
     *
     * @ORM\Column(name="exif", type="text", nullable=false)
     */
    private $exif;



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
     * Set exif
     *
     * @param string $exif
     * @return PreForumAttachmentExif
     */
    public function setExif($exif)
    {
        $this->exif = $exif;

        return $this;
    }

    /**
     * Get exif
     *
     * @return string 
     */
    public function getExif()
    {
        return $this->exif;
    }
}

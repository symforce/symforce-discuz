<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonTag
 *
 * @ORM\Table(name="pre_common_tag", indexes={@ORM\Index(name="tagname", columns={"tagname"}), @ORM\Index(name="status", columns={"status", "tagid"})})
 * @ORM\Entity
 */
class PreCommonTag
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tagid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tagid;

    /**
     * @var string
     *
     * @ORM\Column(name="tagname", type="string", length=20, nullable=false)
     */
    private $tagname = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status = '0';



    /**
     * Get tagid
     *
     * @return integer 
     */
    public function getTagid()
    {
        return $this->tagid;
    }

    /**
     * Set tagname
     *
     * @param string $tagname
     * @return PreCommonTag
     */
    public function setTagname($tagname)
    {
        $this->tagname = $tagname;

        return $this;
    }

    /**
     * Get tagname
     *
     * @return string 
     */
    public function getTagname()
    {
        return $this->tagname;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return PreCommonTag
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }
}

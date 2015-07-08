<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonRelatedlink
 *
 * @ORM\Table(name="pre_common_relatedlink")
 * @ORM\Entity
 */
class PreCommonRelatedlink
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=false)
     */
    private $url = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="extent", type="boolean", nullable=false)
     */
    private $extent = '0';



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
     * Set name
     *
     * @param string $name
     * @return PreCommonRelatedlink
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return PreCommonRelatedlink
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set extent
     *
     * @param boolean $extent
     * @return PreCommonRelatedlink
     */
    public function setExtent($extent)
    {
        $this->extent = $extent;

        return $this;
    }

    /**
     * Get extent
     *
     * @return boolean 
     */
    public function getExtent()
    {
        return $this->extent;
    }
}

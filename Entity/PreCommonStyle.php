<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonStyle
 *
 * @ORM\Table(name="pre_common_style")
 * @ORM\Entity
 */
class PreCommonStyle
{
    /**
     * @var integer
     *
     * @ORM\Column(name="styleid", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $styleid;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=20, nullable=false)
     */
    private $name = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="available", type="boolean", nullable=false)
     */
    private $available = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="templateid", type="smallint", nullable=false)
     */
    private $templateid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="extstyle", type="string", length=255, nullable=false)
     */
    private $extstyle = '';



    /**
     * Get styleid
     *
     * @return integer 
     */
    public function getStyleid()
    {
        return $this->styleid;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return PreCommonStyle
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
     * Set available
     *
     * @param boolean $available
     * @return PreCommonStyle
     */
    public function setAvailable($available)
    {
        $this->available = $available;

        return $this;
    }

    /**
     * Get available
     *
     * @return boolean 
     */
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * Set templateid
     *
     * @param integer $templateid
     * @return PreCommonStyle
     */
    public function setTemplateid($templateid)
    {
        $this->templateid = $templateid;

        return $this;
    }

    /**
     * Get templateid
     *
     * @return integer 
     */
    public function getTemplateid()
    {
        return $this->templateid;
    }

    /**
     * Set extstyle
     *
     * @param string $extstyle
     * @return PreCommonStyle
     */
    public function setExtstyle($extstyle)
    {
        $this->extstyle = $extstyle;

        return $this;
    }

    /**
     * Get extstyle
     *
     * @return string 
     */
    public function getExtstyle()
    {
        return $this->extstyle;
    }
}

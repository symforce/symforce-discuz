<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonTemplate
 *
 * @ORM\Table(name="pre_common_template")
 * @ORM\Entity
 */
class PreCommonTemplate
{
    /**
     * @var integer
     *
     * @ORM\Column(name="templateid", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $templateid;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=30, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="directory", type="string", length=100, nullable=false)
     */
    private $directory = '';

    /**
     * @var string
     *
     * @ORM\Column(name="copyright", type="string", length=100, nullable=false)
     */
    private $copyright = '';



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
     * Set name
     *
     * @param string $name
     * @return PreCommonTemplate
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
     * Set directory
     *
     * @param string $directory
     * @return PreCommonTemplate
     */
    public function setDirectory($directory)
    {
        $this->directory = $directory;

        return $this;
    }

    /**
     * Get directory
     *
     * @return string 
     */
    public function getDirectory()
    {
        return $this->directory;
    }

    /**
     * Set copyright
     *
     * @param string $copyright
     * @return PreCommonTemplate
     */
    public function setCopyright($copyright)
    {
        $this->copyright = $copyright;

        return $this;
    }

    /**
     * Get copyright
     *
     * @return string 
     */
    public function getCopyright()
    {
        return $this->copyright;
    }
}

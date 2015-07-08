<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonBlockStyle
 *
 * @ORM\Table(name="pre_common_block_style", indexes={@ORM\Index(name="hash", columns={"hash"}), @ORM\Index(name="blockclass", columns={"blockclass"})})
 * @ORM\Entity
 */
class PreCommonBlockStyle
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
     * @ORM\Column(name="blockclass", type="string", length=255, nullable=false)
     */
    private $blockclass = '';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="template", type="text", nullable=false)
     */
    private $template;

    /**
     * @var string
     *
     * @ORM\Column(name="hash", type="string", length=255, nullable=false)
     */
    private $hash = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="getpic", type="boolean", nullable=false)
     */
    private $getpic = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="getsummary", type="boolean", nullable=false)
     */
    private $getsummary = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="makethumb", type="boolean", nullable=false)
     */
    private $makethumb = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="settarget", type="boolean", nullable=false)
     */
    private $settarget = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="fields", type="text", nullable=false)
     */
    private $fields;

    /**
     * @var boolean
     *
     * @ORM\Column(name="moreurl", type="boolean", nullable=false)
     */
    private $moreurl = '0';



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
     * Set blockclass
     *
     * @param string $blockclass
     * @return PreCommonBlockStyle
     */
    public function setBlockclass($blockclass)
    {
        $this->blockclass = $blockclass;

        return $this;
    }

    /**
     * Get blockclass
     *
     * @return string 
     */
    public function getBlockclass()
    {
        return $this->blockclass;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return PreCommonBlockStyle
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
     * Set template
     *
     * @param string $template
     * @return PreCommonBlockStyle
     */
    public function setTemplate($template)
    {
        $this->template = $template;

        return $this;
    }

    /**
     * Get template
     *
     * @return string 
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Set hash
     *
     * @param string $hash
     * @return PreCommonBlockStyle
     */
    public function setHash($hash)
    {
        $this->hash = $hash;

        return $this;
    }

    /**
     * Get hash
     *
     * @return string 
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * Set getpic
     *
     * @param boolean $getpic
     * @return PreCommonBlockStyle
     */
    public function setGetpic($getpic)
    {
        $this->getpic = $getpic;

        return $this;
    }

    /**
     * Get getpic
     *
     * @return boolean 
     */
    public function getGetpic()
    {
        return $this->getpic;
    }

    /**
     * Set getsummary
     *
     * @param boolean $getsummary
     * @return PreCommonBlockStyle
     */
    public function setGetsummary($getsummary)
    {
        $this->getsummary = $getsummary;

        return $this;
    }

    /**
     * Get getsummary
     *
     * @return boolean 
     */
    public function getGetsummary()
    {
        return $this->getsummary;
    }

    /**
     * Set makethumb
     *
     * @param boolean $makethumb
     * @return PreCommonBlockStyle
     */
    public function setMakethumb($makethumb)
    {
        $this->makethumb = $makethumb;

        return $this;
    }

    /**
     * Get makethumb
     *
     * @return boolean 
     */
    public function getMakethumb()
    {
        return $this->makethumb;
    }

    /**
     * Set settarget
     *
     * @param boolean $settarget
     * @return PreCommonBlockStyle
     */
    public function setSettarget($settarget)
    {
        $this->settarget = $settarget;

        return $this;
    }

    /**
     * Get settarget
     *
     * @return boolean 
     */
    public function getSettarget()
    {
        return $this->settarget;
    }

    /**
     * Set fields
     *
     * @param string $fields
     * @return PreCommonBlockStyle
     */
    public function setFields($fields)
    {
        $this->fields = $fields;

        return $this;
    }

    /**
     * Get fields
     *
     * @return string 
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * Set moreurl
     *
     * @param boolean $moreurl
     * @return PreCommonBlockStyle
     */
    public function setMoreurl($moreurl)
    {
        $this->moreurl = $moreurl;

        return $this;
    }

    /**
     * Get moreurl
     *
     * @return boolean 
     */
    public function getMoreurl()
    {
        return $this->moreurl;
    }
}

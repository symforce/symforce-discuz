<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreForumThreadtype
 *
 * @ORM\Table(name="pre_forum_threadtype")
 * @ORM\Entity
 */
class PreForumThreadtype
{
    /**
     * @var integer
     *
     * @ORM\Column(name="typeid", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $typeid;

    /**
     * @var integer
     *
     * @ORM\Column(name="fid", type="integer", nullable=false)
     */
    private $fid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="displayorder", type="smallint", nullable=false)
     */
    private $displayorder = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description = '';

    /**
     * @var string
     *
     * @ORM\Column(name="icon", type="string", length=255, nullable=false)
     */
    private $icon = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="special", type="smallint", nullable=false)
     */
    private $special = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="modelid", type="smallint", nullable=false)
     */
    private $modelid = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="expiration", type="boolean", nullable=false)
     */
    private $expiration = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="template", type="text", nullable=false)
     */
    private $template;

    /**
     * @var string
     *
     * @ORM\Column(name="stemplate", type="text", nullable=false)
     */
    private $stemplate;

    /**
     * @var string
     *
     * @ORM\Column(name="ptemplate", type="text", nullable=false)
     */
    private $ptemplate;

    /**
     * @var string
     *
     * @ORM\Column(name="btemplate", type="text", nullable=false)
     */
    private $btemplate;



    /**
     * Get typeid
     *
     * @return integer 
     */
    public function getTypeid()
    {
        return $this->typeid;
    }

    /**
     * Set fid
     *
     * @param integer $fid
     * @return PreForumThreadtype
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
     * Set displayorder
     *
     * @param integer $displayorder
     * @return PreForumThreadtype
     */
    public function setDisplayorder($displayorder)
    {
        $this->displayorder = $displayorder;

        return $this;
    }

    /**
     * Get displayorder
     *
     * @return integer 
     */
    public function getDisplayorder()
    {
        return $this->displayorder;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return PreForumThreadtype
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
     * Set description
     *
     * @param string $description
     * @return PreForumThreadtype
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
     * Set icon
     *
     * @param string $icon
     * @return PreForumThreadtype
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get icon
     *
     * @return string 
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Set special
     *
     * @param integer $special
     * @return PreForumThreadtype
     */
    public function setSpecial($special)
    {
        $this->special = $special;

        return $this;
    }

    /**
     * Get special
     *
     * @return integer 
     */
    public function getSpecial()
    {
        return $this->special;
    }

    /**
     * Set modelid
     *
     * @param integer $modelid
     * @return PreForumThreadtype
     */
    public function setModelid($modelid)
    {
        $this->modelid = $modelid;

        return $this;
    }

    /**
     * Get modelid
     *
     * @return integer 
     */
    public function getModelid()
    {
        return $this->modelid;
    }

    /**
     * Set expiration
     *
     * @param boolean $expiration
     * @return PreForumThreadtype
     */
    public function setExpiration($expiration)
    {
        $this->expiration = $expiration;

        return $this;
    }

    /**
     * Get expiration
     *
     * @return boolean 
     */
    public function getExpiration()
    {
        return $this->expiration;
    }

    /**
     * Set template
     *
     * @param string $template
     * @return PreForumThreadtype
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
     * Set stemplate
     *
     * @param string $stemplate
     * @return PreForumThreadtype
     */
    public function setStemplate($stemplate)
    {
        $this->stemplate = $stemplate;

        return $this;
    }

    /**
     * Get stemplate
     *
     * @return string 
     */
    public function getStemplate()
    {
        return $this->stemplate;
    }

    /**
     * Set ptemplate
     *
     * @param string $ptemplate
     * @return PreForumThreadtype
     */
    public function setPtemplate($ptemplate)
    {
        $this->ptemplate = $ptemplate;

        return $this;
    }

    /**
     * Get ptemplate
     *
     * @return string 
     */
    public function getPtemplate()
    {
        return $this->ptemplate;
    }

    /**
     * Set btemplate
     *
     * @param string $btemplate
     * @return PreForumThreadtype
     */
    public function setBtemplate($btemplate)
    {
        $this->btemplate = $btemplate;

        return $this;
    }

    /**
     * Get btemplate
     *
     * @return string 
     */
    public function getBtemplate()
    {
        return $this->btemplate;
    }
}

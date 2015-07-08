<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

use Doctrine\Common\Collections\ArrayCollection ;

/**
 * @ORM\Entity
 * @ORM\Table(name="pre_common_pluginvar")
 *
 */
class PluginVar
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", length=8, options={"unsigned":true})
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $pluginvarid;

    /**
     * @var Plugin
     * @ORM\ManyToOne(targetEntity="Plugin", inversedBy="vars", cascade={"persist"} )
     * @ORM\JoinColumn(name="pluginid", referencedColumnName="pluginid")
     */
    protected $plugin ;

    /**
     * @ORM\Column(columnDefinition="TINYINT(3) NOT NULL DEFAULT '0'")
     */
    public $displayorder = 0 ;

    /**
     * @ORM\Column(type="string", length=100, options={"default":""})
     */
    public $title = '' ;

    /**
     * @ORM\Column(type="string",length=255, options={"default":""})
     */
    public $description= '' ;


    /**
     * @ORM\Column(type="string",length=40, options={"default":""})
     */
    public $variable = '' ;

    /**
     * @ORM\Column(type="string", length=20, options={"default":"text"})
     */
    public $type = '' ;

    /**
     * @ORM\Column(type="text")
     */
    public $value = '' ;

    /**
     * @ORM\Column(type="text")
     */
    public $extra = '' ;


    public function getId() {
        return $this->pluginid ;
    }


    /**
     * Get pluginvarid
     *
     * @return integer 
     */
    public function getPluginvarid()
    {
        return $this->pluginvarid;
    }

    /**
     * Set displayorder
     *
     * @param string $displayorder
     * @return PluginVar
     */
    public function setDisplayorder($displayorder)
    {
        $this->displayorder = $displayorder;

        return $this;
    }

    /**
     * Get displayorder
     *
     * @return string 
     */
    public function getDisplayorder()
    {
        return $this->displayorder;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return PluginVar
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return PluginVar
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
     * Set variable
     *
     * @param string $variable
     * @return PluginVar
     */
    public function setVariable($variable)
    {
        $this->variable = $variable;

        return $this;
    }

    /**
     * Get variable
     *
     * @return string 
     */
    public function getVariable()
    {
        return $this->variable;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return PluginVar
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set value
     *
     * @param string $value
     * @return PluginVar
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set extra
     *
     * @param string $extra
     * @return PluginVar
     */
    public function setExtra($extra)
    {
        $this->extra = $extra;

        return $this;
    }

    /**
     * Get extra
     *
     * @return string 
     */
    public function getExtra()
    {
        return $this->extra;
    }

    /**
     * Set plugin
     *
     * @param \Symforce\DiscuzBundle\Entity\Plugin $plugin
     * @return PluginVar
     */
    public function setPlugin(\Symforce\DiscuzBundle\Entity\Plugin $plugin = null)
    {
        $this->plugin = $plugin;

        return $this;
    }

    /**
     * Get plugin
     *
     * @return \Symforce\DiscuzBundle\Entity\Plugin 
     */
    public function getPlugin()
    {
        return $this->plugin;
    }
}

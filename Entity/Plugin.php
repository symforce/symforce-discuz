<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

use Doctrine\Common\Collections\ArrayCollection ;

/**
 * @ORM\Entity
 * @ORM\Table(name="pre_common_plugin")
 *
 */
class Plugin
{
    /**
     * @ORM\Id
     * @ORM\Column(type="smallint", options={"unsigned":true})
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $pluginid;

    /**
     * @ORM\Column(columnDefinition="TINYINT(1) UNSIGNED NOT NULL DEFAULT '0'")
     */
    public $available = 0 ;

    /**
     * @ORM\Column(columnDefinition="TINYINT(1) UNSIGNED NOT NULL DEFAULT '0'")
     */
    public $adminid = 0 ;

    /**
     * @ORM\Column(type="string", length=40, options={"default":""})
     */
    public $name = '' ;

    /**
     * @ORM\Column(type="string", length=40, unique=true, options={"default":""})
     */
    public $identifier = '' ;

    /**
     * @ORM\Column(type="string",length=255, options={"default":""})
     */
    public $description= '' ;


    /**
     * @ORM\Column(type="string",length=100, options={"default":""})
     */
    public $directory = '' ;

    /**
     * @ORM\Column(type="string", length=100, options={"default":""})
     */
    public $copyright = '' ;

    /**
     * @ORM\Column(type="text")
     */
    public $modules = '' ;

    /**
     * @ORM\Column(type="string", length=20, options={"default":""})
     */
    public $version = '' ;

    /**
     * @ORM\OneToMany(targetEntity="PluginVar", mappedBy="plugin")
     */
    public $vars ;

    public function getId() {
        return $this->pluginid ;
    }

    public function getPluginModules() {
        return unserialize($this->modules) ;
    }

    public function setPluginModules(array $modules ){
        $this->modules  = serialize($modules) ;
    }


    /**
     * Get pluginid
     *
     * @return integer 
     */
    public function getPluginid()
    {
        return $this->pluginid;
    }

    /**
     * Set available
     *
     * @param string $available
     * @return Plugin
     */
    public function setAvailable($available)
    {
        $this->available = $available;

        return $this;
    }

    /**
     * Get available
     *
     * @return string 
     */
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * Set adminid
     *
     * @param string $adminid
     * @return Plugin
     */
    public function setAdminid($adminid)
    {
        $this->adminid = $adminid;

        return $this;
    }

    /**
     * Get adminid
     *
     * @return string 
     */
    public function getAdminid()
    {
        return $this->adminid;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Plugin
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
     * Set identifier
     *
     * @param string $identifier
     * @return Plugin
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;

        return $this;
    }

    /**
     * Get identifier
     *
     * @return string 
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Plugin
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
     * Set directory
     *
     * @param string $directory
     * @return Plugin
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
     * @return Plugin
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

    /**
     * Set modules
     *
     * @param string $modules
     * @return Plugin
     */
    public function setModules($modules)
    {
        $this->modules = $modules;

        return $this;
    }

    /**
     * Get modules
     *
     * @return string 
     */
    public function getModules()
    {
        return $this->modules;
    }

    /**
     * Set version
     *
     * @param string $version
     * @return Plugin
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return string 
     */
    public function getVersion()
    {
        return $this->version;
    }
}

<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonMyapp
 *
 * @ORM\Table(name="pre_common_myapp", indexes={@ORM\Index(name="flag", columns={"flag", "displayorder"})})
 * @ORM\Entity
 */
class PreCommonMyapp
{
    /**
     * @var integer
     *
     * @ORM\Column(name="appid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $appid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="appname", type="string", length=60, nullable=false)
     */
    private $appname = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="narrow", type="boolean", nullable=false)
     */
    private $narrow = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="flag", type="boolean", nullable=false)
     */
    private $flag = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="version", type="integer", nullable=false)
     */
    private $version = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="userpanelarea", type="boolean", nullable=false)
     */
    private $userpanelarea = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="canvastitle", type="string", length=60, nullable=false)
     */
    private $canvastitle = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="fullscreen", type="boolean", nullable=false)
     */
    private $fullscreen = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="displayuserpanel", type="boolean", nullable=false)
     */
    private $displayuserpanel = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="displaymethod", type="boolean", nullable=false)
     */
    private $displaymethod = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="displayorder", type="smallint", nullable=false)
     */
    private $displayorder = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="appstatus", type="boolean", nullable=false)
     */
    private $appstatus = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="iconstatus", type="boolean", nullable=false)
     */
    private $iconstatus = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="icondowntime", type="integer", nullable=false)
     */
    private $icondowntime = '0';



    /**
     * Get appid
     *
     * @return integer 
     */
    public function getAppid()
    {
        return $this->appid;
    }

    /**
     * Set appname
     *
     * @param string $appname
     * @return PreCommonMyapp
     */
    public function setAppname($appname)
    {
        $this->appname = $appname;

        return $this;
    }

    /**
     * Get appname
     *
     * @return string 
     */
    public function getAppname()
    {
        return $this->appname;
    }

    /**
     * Set narrow
     *
     * @param boolean $narrow
     * @return PreCommonMyapp
     */
    public function setNarrow($narrow)
    {
        $this->narrow = $narrow;

        return $this;
    }

    /**
     * Get narrow
     *
     * @return boolean 
     */
    public function getNarrow()
    {
        return $this->narrow;
    }

    /**
     * Set flag
     *
     * @param boolean $flag
     * @return PreCommonMyapp
     */
    public function setFlag($flag)
    {
        $this->flag = $flag;

        return $this;
    }

    /**
     * Get flag
     *
     * @return boolean 
     */
    public function getFlag()
    {
        return $this->flag;
    }

    /**
     * Set version
     *
     * @param integer $version
     * @return PreCommonMyapp
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return integer 
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set userpanelarea
     *
     * @param boolean $userpanelarea
     * @return PreCommonMyapp
     */
    public function setUserpanelarea($userpanelarea)
    {
        $this->userpanelarea = $userpanelarea;

        return $this;
    }

    /**
     * Get userpanelarea
     *
     * @return boolean 
     */
    public function getUserpanelarea()
    {
        return $this->userpanelarea;
    }

    /**
     * Set canvastitle
     *
     * @param string $canvastitle
     * @return PreCommonMyapp
     */
    public function setCanvastitle($canvastitle)
    {
        $this->canvastitle = $canvastitle;

        return $this;
    }

    /**
     * Get canvastitle
     *
     * @return string 
     */
    public function getCanvastitle()
    {
        return $this->canvastitle;
    }

    /**
     * Set fullscreen
     *
     * @param boolean $fullscreen
     * @return PreCommonMyapp
     */
    public function setFullscreen($fullscreen)
    {
        $this->fullscreen = $fullscreen;

        return $this;
    }

    /**
     * Get fullscreen
     *
     * @return boolean 
     */
    public function getFullscreen()
    {
        return $this->fullscreen;
    }

    /**
     * Set displayuserpanel
     *
     * @param boolean $displayuserpanel
     * @return PreCommonMyapp
     */
    public function setDisplayuserpanel($displayuserpanel)
    {
        $this->displayuserpanel = $displayuserpanel;

        return $this;
    }

    /**
     * Get displayuserpanel
     *
     * @return boolean 
     */
    public function getDisplayuserpanel()
    {
        return $this->displayuserpanel;
    }

    /**
     * Set displaymethod
     *
     * @param boolean $displaymethod
     * @return PreCommonMyapp
     */
    public function setDisplaymethod($displaymethod)
    {
        $this->displaymethod = $displaymethod;

        return $this;
    }

    /**
     * Get displaymethod
     *
     * @return boolean 
     */
    public function getDisplaymethod()
    {
        return $this->displaymethod;
    }

    /**
     * Set displayorder
     *
     * @param integer $displayorder
     * @return PreCommonMyapp
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
     * Set appstatus
     *
     * @param boolean $appstatus
     * @return PreCommonMyapp
     */
    public function setAppstatus($appstatus)
    {
        $this->appstatus = $appstatus;

        return $this;
    }

    /**
     * Get appstatus
     *
     * @return boolean 
     */
    public function getAppstatus()
    {
        return $this->appstatus;
    }

    /**
     * Set iconstatus
     *
     * @param boolean $iconstatus
     * @return PreCommonMyapp
     */
    public function setIconstatus($iconstatus)
    {
        $this->iconstatus = $iconstatus;

        return $this;
    }

    /**
     * Get iconstatus
     *
     * @return boolean 
     */
    public function getIconstatus()
    {
        return $this->iconstatus;
    }

    /**
     * Set icondowntime
     *
     * @param integer $icondowntime
     * @return PreCommonMyapp
     */
    public function setIcondowntime($icondowntime)
    {
        $this->icondowntime = $icondowntime;

        return $this;
    }

    /**
     * Get icondowntime
     *
     * @return integer 
     */
    public function getIcondowntime()
    {
        return $this->icondowntime;
    }
}

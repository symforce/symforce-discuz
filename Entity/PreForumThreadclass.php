<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreForumThreadclass
 *
 * @ORM\Table(name="pre_forum_threadclass", indexes={@ORM\Index(name="fid", columns={"fid", "displayorder"})})
 * @ORM\Entity
 */
class PreForumThreadclass
{
    /**
     * @var integer
     *
     * @ORM\Column(name="typeid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $typeid;

    /**
     * @var integer
     *
     * @ORM\Column(name="fid", type="integer", nullable=false)
     */
    private $fid;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="displayorder", type="integer", nullable=false)
     */
    private $displayorder;

    /**
     * @var string
     *
     * @ORM\Column(name="icon", type="string", length=255, nullable=false)
     */
    private $icon;

    /**
     * @var boolean
     *
     * @ORM\Column(name="moderators", type="boolean", nullable=false)
     */
    private $moderators = '0';



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
     * @return PreForumThreadclass
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
     * Set name
     *
     * @param string $name
     * @return PreForumThreadclass
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
     * Set displayorder
     *
     * @param integer $displayorder
     * @return PreForumThreadclass
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
     * Set icon
     *
     * @param string $icon
     * @return PreForumThreadclass
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
     * Set moderators
     *
     * @param boolean $moderators
     * @return PreForumThreadclass
     */
    public function setModerators($moderators)
    {
        $this->moderators = $moderators;

        return $this;
    }

    /**
     * Get moderators
     *
     * @return boolean 
     */
    public function getModerators()
    {
        return $this->moderators;
    }
}

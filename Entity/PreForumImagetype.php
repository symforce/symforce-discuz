<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreForumImagetype
 *
 * @ORM\Table(name="pre_forum_imagetype")
 * @ORM\Entity
 */
class PreForumImagetype
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
     * @var boolean
     *
     * @ORM\Column(name="available", type="boolean", nullable=false)
     */
    private $available = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=20, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", nullable=false)
     */
    private $type = 'smiley';

    /**
     * @var boolean
     *
     * @ORM\Column(name="displayorder", type="boolean", nullable=false)
     */
    private $displayorder = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="directory", type="string", length=100, nullable=false)
     */
    private $directory;



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
     * Set available
     *
     * @param boolean $available
     * @return PreForumImagetype
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
     * Set name
     *
     * @param string $name
     * @return PreForumImagetype
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
     * Set type
     *
     * @param string $type
     * @return PreForumImagetype
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
     * Set displayorder
     *
     * @param boolean $displayorder
     * @return PreForumImagetype
     */
    public function setDisplayorder($displayorder)
    {
        $this->displayorder = $displayorder;

        return $this;
    }

    /**
     * Get displayorder
     *
     * @return boolean 
     */
    public function getDisplayorder()
    {
        return $this->displayorder;
    }

    /**
     * Set directory
     *
     * @param string $directory
     * @return PreForumImagetype
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
}

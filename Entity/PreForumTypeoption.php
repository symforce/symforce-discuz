<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreForumTypeoption
 *
 * @ORM\Table(name="pre_forum_typeoption", indexes={@ORM\Index(name="classid", columns={"classid"})})
 * @ORM\Entity
 */
class PreForumTypeoption
{
    /**
     * @var integer
     *
     * @ORM\Column(name="optionid", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $optionid;

    /**
     * @var integer
     *
     * @ORM\Column(name="classid", type="smallint", nullable=false)
     */
    private $classid = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="displayorder", type="boolean", nullable=false)
     */
    private $displayorder = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="expiration", type="boolean", nullable=false)
     */
    private $expiration;

    /**
     * @var string
     *
     * @ORM\Column(name="protect", type="string", length=255, nullable=false)
     */
    private $protect;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title = '';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description = '';

    /**
     * @var string
     *
     * @ORM\Column(name="identifier", type="string", length=255, nullable=false)
     */
    private $identifier = '';

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=false)
     */
    private $type = '';

    /**
     * @var string
     *
     * @ORM\Column(name="unit", type="string", length=255, nullable=false)
     */
    private $unit;

    /**
     * @var string
     *
     * @ORM\Column(name="rules", type="text", nullable=false)
     */
    private $rules;

    /**
     * @var string
     *
     * @ORM\Column(name="permprompt", type="text", nullable=false)
     */
    private $permprompt;



    /**
     * Get optionid
     *
     * @return integer 
     */
    public function getOptionid()
    {
        return $this->optionid;
    }

    /**
     * Set classid
     *
     * @param integer $classid
     * @return PreForumTypeoption
     */
    public function setClassid($classid)
    {
        $this->classid = $classid;

        return $this;
    }

    /**
     * Get classid
     *
     * @return integer 
     */
    public function getClassid()
    {
        return $this->classid;
    }

    /**
     * Set displayorder
     *
     * @param boolean $displayorder
     * @return PreForumTypeoption
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
     * Set expiration
     *
     * @param boolean $expiration
     * @return PreForumTypeoption
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
     * Set protect
     *
     * @param string $protect
     * @return PreForumTypeoption
     */
    public function setProtect($protect)
    {
        $this->protect = $protect;

        return $this;
    }

    /**
     * Get protect
     *
     * @return string 
     */
    public function getProtect()
    {
        return $this->protect;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return PreForumTypeoption
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
     * @return PreForumTypeoption
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
     * Set identifier
     *
     * @param string $identifier
     * @return PreForumTypeoption
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
     * Set type
     *
     * @param string $type
     * @return PreForumTypeoption
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
     * Set unit
     *
     * @param string $unit
     * @return PreForumTypeoption
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;

        return $this;
    }

    /**
     * Get unit
     *
     * @return string 
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Set rules
     *
     * @param string $rules
     * @return PreForumTypeoption
     */
    public function setRules($rules)
    {
        $this->rules = $rules;

        return $this;
    }

    /**
     * Get rules
     *
     * @return string 
     */
    public function getRules()
    {
        return $this->rules;
    }

    /**
     * Set permprompt
     *
     * @param string $permprompt
     * @return PreForumTypeoption
     */
    public function setPermprompt($permprompt)
    {
        $this->permprompt = $permprompt;

        return $this;
    }

    /**
     * Get permprompt
     *
     * @return string 
     */
    public function getPermprompt()
    {
        return $this->permprompt;
    }
}

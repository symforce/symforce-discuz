<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonMemberProfileSetting
 *
 * @ORM\Table(name="pre_common_member_profile_setting")
 * @ORM\Entity
 */
class PreCommonMemberProfileSetting
{
    /**
     * @var string
     *
     * @ORM\Column(name="fieldid", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fieldid = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="available", type="boolean", nullable=false)
     */
    private $available = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="invisible", type="boolean", nullable=false)
     */
    private $invisible = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="needverify", type="boolean", nullable=false)
     */
    private $needverify = '0';

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
     * @var integer
     *
     * @ORM\Column(name="displayorder", type="smallint", nullable=false)
     */
    private $displayorder = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="required", type="boolean", nullable=false)
     */
    private $required = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="unchangeable", type="boolean", nullable=false)
     */
    private $unchangeable = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="showincard", type="boolean", nullable=false)
     */
    private $showincard = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="showinthread", type="boolean", nullable=false)
     */
    private $showinthread = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="showinregister", type="boolean", nullable=false)
     */
    private $showinregister = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowsearch", type="boolean", nullable=false)
     */
    private $allowsearch = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="formtype", type="string", length=255, nullable=false)
     */
    private $formtype;

    /**
     * @var integer
     *
     * @ORM\Column(name="size", type="smallint", nullable=false)
     */
    private $size = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="choices", type="text", nullable=false)
     */
    private $choices;

    /**
     * @var string
     *
     * @ORM\Column(name="validate", type="text", nullable=false)
     */
    private $validate;



    /**
     * Get fieldid
     *
     * @return string 
     */
    public function getFieldid()
    {
        return $this->fieldid;
    }

    /**
     * Set available
     *
     * @param boolean $available
     * @return PreCommonMemberProfileSetting
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
     * Set invisible
     *
     * @param boolean $invisible
     * @return PreCommonMemberProfileSetting
     */
    public function setInvisible($invisible)
    {
        $this->invisible = $invisible;

        return $this;
    }

    /**
     * Get invisible
     *
     * @return boolean 
     */
    public function getInvisible()
    {
        return $this->invisible;
    }

    /**
     * Set needverify
     *
     * @param boolean $needverify
     * @return PreCommonMemberProfileSetting
     */
    public function setNeedverify($needverify)
    {
        $this->needverify = $needverify;

        return $this;
    }

    /**
     * Get needverify
     *
     * @return boolean 
     */
    public function getNeedverify()
    {
        return $this->needverify;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return PreCommonMemberProfileSetting
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
     * @return PreCommonMemberProfileSetting
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
     * Set displayorder
     *
     * @param integer $displayorder
     * @return PreCommonMemberProfileSetting
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
     * Set required
     *
     * @param boolean $required
     * @return PreCommonMemberProfileSetting
     */
    public function setRequired($required)
    {
        $this->required = $required;

        return $this;
    }

    /**
     * Get required
     *
     * @return boolean 
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * Set unchangeable
     *
     * @param boolean $unchangeable
     * @return PreCommonMemberProfileSetting
     */
    public function setUnchangeable($unchangeable)
    {
        $this->unchangeable = $unchangeable;

        return $this;
    }

    /**
     * Get unchangeable
     *
     * @return boolean 
     */
    public function getUnchangeable()
    {
        return $this->unchangeable;
    }

    /**
     * Set showincard
     *
     * @param boolean $showincard
     * @return PreCommonMemberProfileSetting
     */
    public function setShowincard($showincard)
    {
        $this->showincard = $showincard;

        return $this;
    }

    /**
     * Get showincard
     *
     * @return boolean 
     */
    public function getShowincard()
    {
        return $this->showincard;
    }

    /**
     * Set showinthread
     *
     * @param boolean $showinthread
     * @return PreCommonMemberProfileSetting
     */
    public function setShowinthread($showinthread)
    {
        $this->showinthread = $showinthread;

        return $this;
    }

    /**
     * Get showinthread
     *
     * @return boolean 
     */
    public function getShowinthread()
    {
        return $this->showinthread;
    }

    /**
     * Set showinregister
     *
     * @param boolean $showinregister
     * @return PreCommonMemberProfileSetting
     */
    public function setShowinregister($showinregister)
    {
        $this->showinregister = $showinregister;

        return $this;
    }

    /**
     * Get showinregister
     *
     * @return boolean 
     */
    public function getShowinregister()
    {
        return $this->showinregister;
    }

    /**
     * Set allowsearch
     *
     * @param boolean $allowsearch
     * @return PreCommonMemberProfileSetting
     */
    public function setAllowsearch($allowsearch)
    {
        $this->allowsearch = $allowsearch;

        return $this;
    }

    /**
     * Get allowsearch
     *
     * @return boolean 
     */
    public function getAllowsearch()
    {
        return $this->allowsearch;
    }

    /**
     * Set formtype
     *
     * @param string $formtype
     * @return PreCommonMemberProfileSetting
     */
    public function setFormtype($formtype)
    {
        $this->formtype = $formtype;

        return $this;
    }

    /**
     * Get formtype
     *
     * @return string 
     */
    public function getFormtype()
    {
        return $this->formtype;
    }

    /**
     * Set size
     *
     * @param integer $size
     * @return PreCommonMemberProfileSetting
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return integer 
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set choices
     *
     * @param string $choices
     * @return PreCommonMemberProfileSetting
     */
    public function setChoices($choices)
    {
        $this->choices = $choices;

        return $this;
    }

    /**
     * Get choices
     *
     * @return string 
     */
    public function getChoices()
    {
        return $this->choices;
    }

    /**
     * Set validate
     *
     * @param string $validate
     * @return PreCommonMemberProfileSetting
     */
    public function setValidate($validate)
    {
        $this->validate = $validate;

        return $this;
    }

    /**
     * Get validate
     *
     * @return string 
     */
    public function getValidate()
    {
        return $this->validate;
    }
}

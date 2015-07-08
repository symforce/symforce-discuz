<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PrePortalCategoryPermission
 *
 * @ORM\Table(name="pre_portal_category_permission", indexes={@ORM\Index(name="uid", columns={"uid"})})
 * @ORM\Entity
 */
class PrePortalCategoryPermission
{
    /**
     * @var integer
     *
     * @ORM\Column(name="catid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $catid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $uid = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowpublish", type="boolean", nullable=false)
     */
    private $allowpublish = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowmanage", type="boolean", nullable=false)
     */
    private $allowmanage = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="inheritedcatid", type="integer", nullable=false)
     */
    private $inheritedcatid = '0';



    /**
     * Set catid
     *
     * @param integer $catid
     * @return PrePortalCategoryPermission
     */
    public function setCatid($catid)
    {
        $this->catid = $catid;

        return $this;
    }

    /**
     * Get catid
     *
     * @return integer 
     */
    public function getCatid()
    {
        return $this->catid;
    }

    /**
     * Set uid
     *
     * @param integer $uid
     * @return PrePortalCategoryPermission
     */
    public function setUid($uid)
    {
        $this->uid = $uid;

        return $this;
    }

    /**
     * Get uid
     *
     * @return integer 
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Set allowpublish
     *
     * @param boolean $allowpublish
     * @return PrePortalCategoryPermission
     */
    public function setAllowpublish($allowpublish)
    {
        $this->allowpublish = $allowpublish;

        return $this;
    }

    /**
     * Get allowpublish
     *
     * @return boolean 
     */
    public function getAllowpublish()
    {
        return $this->allowpublish;
    }

    /**
     * Set allowmanage
     *
     * @param boolean $allowmanage
     * @return PrePortalCategoryPermission
     */
    public function setAllowmanage($allowmanage)
    {
        $this->allowmanage = $allowmanage;

        return $this;
    }

    /**
     * Get allowmanage
     *
     * @return boolean 
     */
    public function getAllowmanage()
    {
        return $this->allowmanage;
    }

    /**
     * Set inheritedcatid
     *
     * @param integer $inheritedcatid
     * @return PrePortalCategoryPermission
     */
    public function setInheritedcatid($inheritedcatid)
    {
        $this->inheritedcatid = $inheritedcatid;

        return $this;
    }

    /**
     * Get inheritedcatid
     *
     * @return integer 
     */
    public function getInheritedcatid()
    {
        return $this->inheritedcatid;
    }
}

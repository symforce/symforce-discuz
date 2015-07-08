<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonTemplatePermission
 *
 * @ORM\Table(name="pre_common_template_permission", indexes={@ORM\Index(name="uid", columns={"uid"})})
 * @ORM\Entity
 */
class PreCommonTemplatePermission
{
    /**
     * @var string
     *
     * @ORM\Column(name="targettplname", type="string", length=100, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $targettplname = '';

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
     * @ORM\Column(name="allowmanage", type="boolean", nullable=false)
     */
    private $allowmanage = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowrecommend", type="boolean", nullable=false)
     */
    private $allowrecommend = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="needverify", type="boolean", nullable=false)
     */
    private $needverify = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="inheritedtplname", type="string", length=255, nullable=false)
     */
    private $inheritedtplname = '';



    /**
     * Set targettplname
     *
     * @param string $targettplname
     * @return PreCommonTemplatePermission
     */
    public function setTargettplname($targettplname)
    {
        $this->targettplname = $targettplname;

        return $this;
    }

    /**
     * Get targettplname
     *
     * @return string 
     */
    public function getTargettplname()
    {
        return $this->targettplname;
    }

    /**
     * Set uid
     *
     * @param integer $uid
     * @return PreCommonTemplatePermission
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
     * Set allowmanage
     *
     * @param boolean $allowmanage
     * @return PreCommonTemplatePermission
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
     * Set allowrecommend
     *
     * @param boolean $allowrecommend
     * @return PreCommonTemplatePermission
     */
    public function setAllowrecommend($allowrecommend)
    {
        $this->allowrecommend = $allowrecommend;

        return $this;
    }

    /**
     * Get allowrecommend
     *
     * @return boolean 
     */
    public function getAllowrecommend()
    {
        return $this->allowrecommend;
    }

    /**
     * Set needverify
     *
     * @param boolean $needverify
     * @return PreCommonTemplatePermission
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
     * Set inheritedtplname
     *
     * @param string $inheritedtplname
     * @return PreCommonTemplatePermission
     */
    public function setInheritedtplname($inheritedtplname)
    {
        $this->inheritedtplname = $inheritedtplname;

        return $this;
    }

    /**
     * Get inheritedtplname
     *
     * @return string 
     */
    public function getInheritedtplname()
    {
        return $this->inheritedtplname;
    }
}

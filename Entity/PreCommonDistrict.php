<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonDistrict
 *
 * @ORM\Table(name="pre_common_district", indexes={@ORM\Index(name="upid", columns={"upid", "displayorder"})})
 * @ORM\Entity
 */
class PreCommonDistrict
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="level", type="boolean", nullable=false)
     */
    private $level = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="usetype", type="boolean", nullable=false)
     */
    private $usetype = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="upid", type="integer", nullable=false)
     */
    private $upid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="displayorder", type="smallint", nullable=false)
     */
    private $displayorder = '0';



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return PreCommonDistrict
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
     * Set level
     *
     * @param boolean $level
     * @return PreCommonDistrict
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return boolean 
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set usetype
     *
     * @param boolean $usetype
     * @return PreCommonDistrict
     */
    public function setUsetype($usetype)
    {
        $this->usetype = $usetype;

        return $this;
    }

    /**
     * Get usetype
     *
     * @return boolean 
     */
    public function getUsetype()
    {
        return $this->usetype;
    }

    /**
     * Set upid
     *
     * @param integer $upid
     * @return PreCommonDistrict
     */
    public function setUpid($upid)
    {
        $this->upid = $upid;

        return $this;
    }

    /**
     * Get upid
     *
     * @return integer 
     */
    public function getUpid()
    {
        return $this->upid;
    }

    /**
     * Set displayorder
     *
     * @param integer $displayorder
     * @return PreCommonDistrict
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
}

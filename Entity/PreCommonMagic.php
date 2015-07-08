<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonMagic
 *
 * @ORM\Table(name="pre_common_magic", uniqueConstraints={@ORM\UniqueConstraint(name="identifier", columns={"identifier"})}, indexes={@ORM\Index(name="displayorder", columns={"available", "displayorder"})})
 * @ORM\Entity
 */
class PreCommonMagic
{
    /**
     * @var integer
     *
     * @ORM\Column(name="magicid", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $magicid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="available", type="boolean", nullable=false)
     */
    private $available = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="identifier", type="string", length=40, nullable=false)
     */
    private $identifier;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="displayorder", type="boolean", nullable=false)
     */
    private $displayorder = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="credit", type="boolean", nullable=false)
     */
    private $credit = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="price", type="integer", nullable=false)
     */
    private $price = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="num", type="smallint", nullable=false)
     */
    private $num = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="salevolume", type="smallint", nullable=false)
     */
    private $salevolume = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="supplytype", type="boolean", nullable=false)
     */
    private $supplytype = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="supplynum", type="smallint", nullable=false)
     */
    private $supplynum = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="useperoid", type="boolean", nullable=false)
     */
    private $useperoid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="usenum", type="smallint", nullable=false)
     */
    private $usenum = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="weight", type="boolean", nullable=false)
     */
    private $weight = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="magicperm", type="text", nullable=false)
     */
    private $magicperm;

    /**
     * @var boolean
     *
     * @ORM\Column(name="useevent", type="boolean", nullable=false)
     */
    private $useevent = '0';



    /**
     * Get magicid
     *
     * @return integer 
     */
    public function getMagicid()
    {
        return $this->magicid;
    }

    /**
     * Set available
     *
     * @param boolean $available
     * @return PreCommonMagic
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
     * @return PreCommonMagic
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
     * @return PreCommonMagic
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
     * @return PreCommonMagic
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
     * @param boolean $displayorder
     * @return PreCommonMagic
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
     * Set credit
     *
     * @param boolean $credit
     * @return PreCommonMagic
     */
    public function setCredit($credit)
    {
        $this->credit = $credit;

        return $this;
    }

    /**
     * Get credit
     *
     * @return boolean 
     */
    public function getCredit()
    {
        return $this->credit;
    }

    /**
     * Set price
     *
     * @param integer $price
     * @return PreCommonMagic
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return integer 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set num
     *
     * @param integer $num
     * @return PreCommonMagic
     */
    public function setNum($num)
    {
        $this->num = $num;

        return $this;
    }

    /**
     * Get num
     *
     * @return integer 
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * Set salevolume
     *
     * @param integer $salevolume
     * @return PreCommonMagic
     */
    public function setSalevolume($salevolume)
    {
        $this->salevolume = $salevolume;

        return $this;
    }

    /**
     * Get salevolume
     *
     * @return integer 
     */
    public function getSalevolume()
    {
        return $this->salevolume;
    }

    /**
     * Set supplytype
     *
     * @param boolean $supplytype
     * @return PreCommonMagic
     */
    public function setSupplytype($supplytype)
    {
        $this->supplytype = $supplytype;

        return $this;
    }

    /**
     * Get supplytype
     *
     * @return boolean 
     */
    public function getSupplytype()
    {
        return $this->supplytype;
    }

    /**
     * Set supplynum
     *
     * @param integer $supplynum
     * @return PreCommonMagic
     */
    public function setSupplynum($supplynum)
    {
        $this->supplynum = $supplynum;

        return $this;
    }

    /**
     * Get supplynum
     *
     * @return integer 
     */
    public function getSupplynum()
    {
        return $this->supplynum;
    }

    /**
     * Set useperoid
     *
     * @param boolean $useperoid
     * @return PreCommonMagic
     */
    public function setUseperoid($useperoid)
    {
        $this->useperoid = $useperoid;

        return $this;
    }

    /**
     * Get useperoid
     *
     * @return boolean 
     */
    public function getUseperoid()
    {
        return $this->useperoid;
    }

    /**
     * Set usenum
     *
     * @param integer $usenum
     * @return PreCommonMagic
     */
    public function setUsenum($usenum)
    {
        $this->usenum = $usenum;

        return $this;
    }

    /**
     * Get usenum
     *
     * @return integer 
     */
    public function getUsenum()
    {
        return $this->usenum;
    }

    /**
     * Set weight
     *
     * @param boolean $weight
     * @return PreCommonMagic
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return boolean 
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set magicperm
     *
     * @param string $magicperm
     * @return PreCommonMagic
     */
    public function setMagicperm($magicperm)
    {
        $this->magicperm = $magicperm;

        return $this;
    }

    /**
     * Get magicperm
     *
     * @return string 
     */
    public function getMagicperm()
    {
        return $this->magicperm;
    }

    /**
     * Set useevent
     *
     * @param boolean $useevent
     * @return PreCommonMagic
     */
    public function setUseevent($useevent)
    {
        $this->useevent = $useevent;

        return $this;
    }

    /**
     * Get useevent
     *
     * @return boolean 
     */
    public function getUseevent()
    {
        return $this->useevent;
    }
}

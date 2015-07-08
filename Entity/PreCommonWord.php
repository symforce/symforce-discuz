<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonWord
 *
 * @ORM\Table(name="pre_common_word")
 * @ORM\Entity
 */
class PreCommonWord
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="admin", type="string", length=15, nullable=false)
     */
    private $admin = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="smallint", nullable=false)
     */
    private $type = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="find", type="string", length=255, nullable=false)
     */
    private $find = '';

    /**
     * @var string
     *
     * @ORM\Column(name="replacement", type="string", length=255, nullable=false)
     */
    private $replacement = '';

    /**
     * @var string
     *
     * @ORM\Column(name="extra", type="string", length=255, nullable=false)
     */
    private $extra = '';



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
     * Set admin
     *
     * @param string $admin
     * @return PreCommonWord
     */
    public function setAdmin($admin)
    {
        $this->admin = $admin;

        return $this;
    }

    /**
     * Get admin
     *
     * @return string 
     */
    public function getAdmin()
    {
        return $this->admin;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return PreCommonWord
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set find
     *
     * @param string $find
     * @return PreCommonWord
     */
    public function setFind($find)
    {
        $this->find = $find;

        return $this;
    }

    /**
     * Get find
     *
     * @return string 
     */
    public function getFind()
    {
        return $this->find;
    }

    /**
     * Set replacement
     *
     * @param string $replacement
     * @return PreCommonWord
     */
    public function setReplacement($replacement)
    {
        $this->replacement = $replacement;

        return $this;
    }

    /**
     * Get replacement
     *
     * @return string 
     */
    public function getReplacement()
    {
        return $this->replacement;
    }

    /**
     * Set extra
     *
     * @param string $extra
     * @return PreCommonWord
     */
    public function setExtra($extra)
    {
        $this->extra = $extra;

        return $this;
    }

    /**
     * Get extra
     *
     * @return string 
     */
    public function getExtra()
    {
        return $this->extra;
    }
}

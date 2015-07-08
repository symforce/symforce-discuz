<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreUcenterBadwords
 *
 * @ORM\Table(name="pre_ucenter_badwords", uniqueConstraints={@ORM\UniqueConstraint(name="find", columns={"find"})})
 * @ORM\Entity
 */
class PreUcenterBadwords
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
     * @ORM\Column(name="findpattern", type="string", length=255, nullable=false)
     */
    private $findpattern = '';



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
     * @return PreUcenterBadwords
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
     * Set find
     *
     * @param string $find
     * @return PreUcenterBadwords
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
     * @return PreUcenterBadwords
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
     * Set findpattern
     *
     * @param string $findpattern
     * @return PreUcenterBadwords
     */
    public function setFindpattern($findpattern)
    {
        $this->findpattern = $findpattern;

        return $this;
    }

    /**
     * Get findpattern
     *
     * @return string 
     */
    public function getFindpattern()
    {
        return $this->findpattern;
    }
}

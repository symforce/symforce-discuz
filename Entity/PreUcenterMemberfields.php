<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreUcenterMemberfields
 *
 * @ORM\Table(name="pre_ucenter_memberfields")
 * @ORM\Entity
 */
class PreUcenterMemberfields
{
    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uid;

    /**
     * @var string
     *
     * @ORM\Column(name="blacklist", type="text", nullable=false)
     */
    private $blacklist;



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
     * Set blacklist
     *
     * @param string $blacklist
     * @return PreUcenterMemberfields
     */
    public function setBlacklist($blacklist)
    {
        $this->blacklist = $blacklist;

        return $this;
    }

    /**
     * Get blacklist
     *
     * @return string 
     */
    public function getBlacklist()
    {
        return $this->blacklist;
    }
}

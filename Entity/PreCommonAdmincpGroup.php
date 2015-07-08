<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonAdmincpGroup
 *
 * @ORM\Table(name="pre_common_admincp_group")
 * @ORM\Entity
 */
class PreCommonAdmincpGroup
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cpgroupid", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cpgroupid;

    /**
     * @var string
     *
     * @ORM\Column(name="cpgroupname", type="string", length=255, nullable=false)
     */
    private $cpgroupname;



    /**
     * @var \Doctrine\ORM\PersistentCollection
     * var Array<PreCommonAdmincpMember>
     * @ORM\OneToMany(targetEntity="PreCommonAdmincpMember", mappedBy="admincp_group")
     */
    public $admincp_members ;


    /**
     * Get cpgroupid
     *
     * @return integer 
     */
    public function getCpgroupid()
    {
        return $this->cpgroupid;
    }

    /**
     * Set cpgroupname
     *
     * @param string $cpgroupname
     * @return PreCommonAdmincpGroup
     */
    public function setCpgroupname($cpgroupname)
    {
        $this->cpgroupname = $cpgroupname;

        return $this;
    }

    /**
     * Get cpgroupname
     *
     * @return string 
     */
    public function getCpgroupname()
    {
        return $this->cpgroupname;
    }
}

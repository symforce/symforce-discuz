<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreUcenterPmIndexes
 *
 * @ORM\Table(name="pre_ucenter_pm_indexes", indexes={@ORM\Index(name="plid", columns={"plid"})})
 * @ORM\Entity
 */
class PreUcenterPmIndexes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pmid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pmid;

    /**
     * @var integer
     *
     * @ORM\Column(name="plid", type="integer", nullable=false)
     */
    private $plid = '0';



    /**
     * Get pmid
     *
     * @return integer 
     */
    public function getPmid()
    {
        return $this->pmid;
    }

    /**
     * Set plid
     *
     * @param integer $plid
     * @return PreUcenterPmIndexes
     */
    public function setPlid($plid)
    {
        $this->plid = $plid;

        return $this;
    }

    /**
     * Get plid
     *
     * @return integer 
     */
    public function getPlid()
    {
        return $this->plid;
    }
}

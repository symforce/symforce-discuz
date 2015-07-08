<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonSphinxcounter
 *
 * @ORM\Table(name="pre_common_sphinxcounter")
 * @ORM\Entity
 */
class PreCommonSphinxcounter
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="indexid", type="boolean", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $indexid;

    /**
     * @var integer
     *
     * @ORM\Column(name="maxid", type="integer", nullable=false)
     */
    private $maxid;



    /**
     * Get indexid
     *
     * @return boolean 
     */
    public function getIndexid()
    {
        return $this->indexid;
    }

    /**
     * Set maxid
     *
     * @param integer $maxid
     * @return PreCommonSphinxcounter
     */
    public function setMaxid($maxid)
    {
        $this->maxid = $maxid;

        return $this;
    }

    /**
     * Get maxid
     *
     * @return integer 
     */
    public function getMaxid()
    {
        return $this->maxid;
    }
}

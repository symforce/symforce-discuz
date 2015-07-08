<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonOptimizer
 *
 * @ORM\Table(name="pre_common_optimizer")
 * @ORM\Entity
 */
class PreCommonOptimizer
{
    /**
     * @var string
     *
     * @ORM\Column(name="k", type="string", length=100, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $k = '';

    /**
     * @var string
     *
     * @ORM\Column(name="v", type="string", length=255, nullable=false)
     */
    private $v = '';



    /**
     * Get k
     *
     * @return string 
     */
    public function getK()
    {
        return $this->k;
    }

    /**
     * Set v
     *
     * @param string $v
     * @return PreCommonOptimizer
     */
    public function setV($v)
    {
        $this->v = $v;

        return $this;
    }

    /**
     * Get v
     *
     * @return string 
     */
    public function getV()
    {
        return $this->v;
    }
}

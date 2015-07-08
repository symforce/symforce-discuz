<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreUcenterSettings
 *
 * @ORM\Table(name="pre_ucenter_settings")
 * @ORM\Entity
 */
class PreUcenterSettings
{
    /**
     * @var string
     *
     * @ORM\Column(name="k", type="string", length=32, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $k = '';

    /**
     * @var string
     *
     * @ORM\Column(name="v", type="text", nullable=false)
     */
    private $v;



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
     * @return PreUcenterSettings
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

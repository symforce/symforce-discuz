<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreMobileSetting
 *
 * @ORM\Table(name="pre_mobile_setting")
 * @ORM\Entity
 */
class PreMobileSetting
{
    /**
     * @var string
     *
     * @ORM\Column(name="skey", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $skey = '';

    /**
     * @var string
     *
     * @ORM\Column(name="svalue", type="text", nullable=false)
     */
    private $svalue;



    /**
     * Get skey
     *
     * @return string 
     */
    public function getSkey()
    {
        return $this->skey;
    }

    /**
     * Set svalue
     *
     * @param string $svalue
     * @return PreMobileSetting
     */
    public function setSvalue($svalue)
    {
        $this->svalue = $svalue;

        return $this;
    }

    /**
     * Get svalue
     *
     * @return string 
     */
    public function getSvalue()
    {
        return $this->svalue;
    }
}

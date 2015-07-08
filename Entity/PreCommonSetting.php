<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonSetting
 *
 * @ORM\Table(name="pre_common_setting")
 * @ORM\Entity
 */
class PreCommonSetting
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
     * @return PreCommonSetting
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

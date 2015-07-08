<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreHomePicfield
 *
 * @ORM\Table(name="pre_home_picfield")
 * @ORM\Entity
 */
class PreHomePicfield
{
    /**
     * @var integer
     *
     * @ORM\Column(name="picid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $picid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="hotuser", type="text", nullable=false)
     */
    private $hotuser;



    /**
     * Get picid
     *
     * @return integer 
     */
    public function getPicid()
    {
        return $this->picid;
    }

    /**
     * Set hotuser
     *
     * @param string $hotuser
     * @return PreHomePicfield
     */
    public function setHotuser($hotuser)
    {
        $this->hotuser = $hotuser;

        return $this;
    }

    /**
     * Get hotuser
     *
     * @return string 
     */
    public function getHotuser()
    {
        return $this->hotuser;
    }
}

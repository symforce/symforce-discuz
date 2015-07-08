<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonProcess
 *
 * @ORM\Table(name="pre_common_process", indexes={@ORM\Index(name="expiry", columns={"expiry"})})
 * @ORM\Entity
 */
class PreCommonProcess
{
    /**
     * @var string
     *
     * @ORM\Column(name="processid", type="string", length=32, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $processid;

    /**
     * @var integer
     *
     * @ORM\Column(name="expiry", type="integer", nullable=true)
     */
    private $expiry;

    /**
     * @var integer
     *
     * @ORM\Column(name="extra", type="integer", nullable=true)
     */
    private $extra;



    /**
     * Get processid
     *
     * @return string 
     */
    public function getProcessid()
    {
        return $this->processid;
    }

    /**
     * Set expiry
     *
     * @param integer $expiry
     * @return PreCommonProcess
     */
    public function setExpiry($expiry)
    {
        $this->expiry = $expiry;

        return $this;
    }

    /**
     * Get expiry
     *
     * @return integer 
     */
    public function getExpiry()
    {
        return $this->expiry;
    }

    /**
     * Set extra
     *
     * @param integer $extra
     * @return PreCommonProcess
     */
    public function setExtra($extra)
    {
        $this->extra = $extra;

        return $this;
    }

    /**
     * Get extra
     *
     * @return integer 
     */
    public function getExtra()
    {
        return $this->extra;
    }
}

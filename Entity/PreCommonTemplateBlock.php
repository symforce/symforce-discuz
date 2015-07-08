<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonTemplateBlock
 *
 * @ORM\Table(name="pre_common_template_block", indexes={@ORM\Index(name="bid", columns={"bid"})})
 * @ORM\Entity
 */
class PreCommonTemplateBlock
{
    /**
     * @var string
     *
     * @ORM\Column(name="targettplname", type="string", length=100, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $targettplname = '';

    /**
     * @var string
     *
     * @ORM\Column(name="tpldirectory", type="string", length=80, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tpldirectory = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="bid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $bid = '0';



    /**
     * Set targettplname
     *
     * @param string $targettplname
     * @return PreCommonTemplateBlock
     */
    public function setTargettplname($targettplname)
    {
        $this->targettplname = $targettplname;

        return $this;
    }

    /**
     * Get targettplname
     *
     * @return string 
     */
    public function getTargettplname()
    {
        return $this->targettplname;
    }

    /**
     * Set tpldirectory
     *
     * @param string $tpldirectory
     * @return PreCommonTemplateBlock
     */
    public function setTpldirectory($tpldirectory)
    {
        $this->tpldirectory = $tpldirectory;

        return $this;
    }

    /**
     * Get tpldirectory
     *
     * @return string 
     */
    public function getTpldirectory()
    {
        return $this->tpldirectory;
    }

    /**
     * Set bid
     *
     * @param integer $bid
     * @return PreCommonTemplateBlock
     */
    public function setBid($bid)
    {
        $this->bid = $bid;

        return $this;
    }

    /**
     * Get bid
     *
     * @return integer 
     */
    public function getBid()
    {
        return $this->bid;
    }
}

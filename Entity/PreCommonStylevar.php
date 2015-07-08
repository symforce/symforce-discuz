<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonStylevar
 *
 * @ORM\Table(name="pre_common_stylevar", indexes={@ORM\Index(name="styleid", columns={"styleid"})})
 * @ORM\Entity
 */
class PreCommonStylevar
{
    /**
     * @var integer
     *
     * @ORM\Column(name="stylevarid", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $stylevarid;

    /**
     * @var integer
     *
     * @ORM\Column(name="styleid", type="smallint", nullable=false)
     */
    private $styleid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="variable", type="text", nullable=false)
     */
    private $variable;

    /**
     * @var string
     *
     * @ORM\Column(name="substitute", type="text", nullable=false)
     */
    private $substitute;



    /**
     * Get stylevarid
     *
     * @return integer 
     */
    public function getStylevarid()
    {
        return $this->stylevarid;
    }

    /**
     * Set styleid
     *
     * @param integer $styleid
     * @return PreCommonStylevar
     */
    public function setStyleid($styleid)
    {
        $this->styleid = $styleid;

        return $this;
    }

    /**
     * Get styleid
     *
     * @return integer 
     */
    public function getStyleid()
    {
        return $this->styleid;
    }

    /**
     * Set variable
     *
     * @param string $variable
     * @return PreCommonStylevar
     */
    public function setVariable($variable)
    {
        $this->variable = $variable;

        return $this;
    }

    /**
     * Get variable
     *
     * @return string 
     */
    public function getVariable()
    {
        return $this->variable;
    }

    /**
     * Set substitute
     *
     * @param string $substitute
     * @return PreCommonStylevar
     */
    public function setSubstitute($substitute)
    {
        $this->substitute = $substitute;

        return $this;
    }

    /**
     * Get substitute
     *
     * @return string 
     */
    public function getSubstitute()
    {
        return $this->substitute;
    }
}

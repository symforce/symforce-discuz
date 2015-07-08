<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonDomain
 *
 * @ORM\Table(name="pre_common_domain", indexes={@ORM\Index(name="domain", columns={"domain", "domainroot"}), @ORM\Index(name="idtype", columns={"idtype"})})
 * @ORM\Entity
 */
class PreCommonDomain
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="idtype", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idtype = '';

    /**
     * @var string
     *
     * @ORM\Column(name="domain", type="string", length=30, nullable=false)
     */
    private $domain = '';

    /**
     * @var string
     *
     * @ORM\Column(name="domainroot", type="string", length=60, nullable=false)
     */
    private $domainroot = '';



    /**
     * Set id
     *
     * @param integer $id
     * @return PreCommonDomain
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idtype
     *
     * @param string $idtype
     * @return PreCommonDomain
     */
    public function setIdtype($idtype)
    {
        $this->idtype = $idtype;

        return $this;
    }

    /**
     * Get idtype
     *
     * @return string 
     */
    public function getIdtype()
    {
        return $this->idtype;
    }

    /**
     * Set domain
     *
     * @param string $domain
     * @return PreCommonDomain
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;

        return $this;
    }

    /**
     * Get domain
     *
     * @return string 
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Set domainroot
     *
     * @param string $domainroot
     * @return PreCommonDomain
     */
    public function setDomainroot($domainroot)
    {
        $this->domainroot = $domainroot;

        return $this;
    }

    /**
     * Get domainroot
     *
     * @return string 
     */
    public function getDomainroot()
    {
        return $this->domainroot;
    }
}

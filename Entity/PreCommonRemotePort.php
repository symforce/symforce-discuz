<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonRemotePort
 *
 * @ORM\Table(name="pre_common_remote_port")
 * @ORM\Entity
 */
class PreCommonRemotePort
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
     * @ORM\Column(name="useip", type="string", length=15, nullable=false)
     */
    private $useip = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="port", type="smallint", nullable=false)
     */
    private $port = '0';



    /**
     * Set id
     *
     * @param integer $id
     * @return PreCommonRemotePort
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
     * @return PreCommonRemotePort
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
     * Set useip
     *
     * @param string $useip
     * @return PreCommonRemotePort
     */
    public function setUseip($useip)
    {
        $this->useip = $useip;

        return $this;
    }

    /**
     * Get useip
     *
     * @return string 
     */
    public function getUseip()
    {
        return $this->useip;
    }

    /**
     * Set port
     *
     * @param integer $port
     * @return PreCommonRemotePort
     */
    public function setPort($port)
    {
        $this->port = $port;

        return $this;
    }

    /**
     * Get port
     *
     * @return integer 
     */
    public function getPort()
    {
        return $this->port;
    }
}

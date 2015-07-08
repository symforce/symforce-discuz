<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonBlockXml
 *
 * @ORM\Table(name="pre_common_block_xml")
 * @ORM\Entity
 */
class PreCommonBlockXml
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="version", type="string", length=255, nullable=false)
     */
    private $version;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=false)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="clientid", type="string", length=255, nullable=false)
     */
    private $clientid;

    /**
     * @var string
     *
     * @ORM\Column(name="key", type="string", length=255, nullable=false)
     */
    private $key;

    /**
     * @var string
     *
     * @ORM\Column(name="signtype", type="string", length=255, nullable=false)
     */
    private $signtype;

    /**
     * @var string
     *
     * @ORM\Column(name="data", type="text", nullable=false)
     */
    private $data;



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
     * Set name
     *
     * @param string $name
     * @return PreCommonBlockXml
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set version
     *
     * @param string $version
     * @return PreCommonBlockXml
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return string 
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return PreCommonBlockXml
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set clientid
     *
     * @param string $clientid
     * @return PreCommonBlockXml
     */
    public function setClientid($clientid)
    {
        $this->clientid = $clientid;

        return $this;
    }

    /**
     * Get clientid
     *
     * @return string 
     */
    public function getClientid()
    {
        return $this->clientid;
    }

    /**
     * Set key
     *
     * @param string $key
     * @return PreCommonBlockXml
     */
    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * Get key
     *
     * @return string 
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Set signtype
     *
     * @param string $signtype
     * @return PreCommonBlockXml
     */
    public function setSigntype($signtype)
    {
        $this->signtype = $signtype;

        return $this;
    }

    /**
     * Get signtype
     *
     * @return string 
     */
    public function getSigntype()
    {
        return $this->signtype;
    }

    /**
     * Set data
     *
     * @param string $data
     * @return PreCommonBlockXml
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return string 
     */
    public function getData()
    {
        return $this->data;
    }
}

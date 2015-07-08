<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreHomeFavorite
 *
 * @ORM\Table(name="pre_home_favorite", indexes={@ORM\Index(name="idtype", columns={"id", "idtype"}), @ORM\Index(name="uid", columns={"uid", "idtype", "dateline"})})
 * @ORM\Entity
 */
class PreHomeFavorite
{
    /**
     * @var integer
     *
     * @ORM\Column(name="favid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $favid;

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     */
    private $uid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     */
    private $id = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="idtype", type="string", length=255, nullable=false)
     */
    private $idtype = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="spaceuid", type="integer", nullable=false)
     */
    private $spaceuid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title = '';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline = '0';



    /**
     * Get favid
     *
     * @return integer 
     */
    public function getFavid()
    {
        return $this->favid;
    }

    /**
     * Set uid
     *
     * @param integer $uid
     * @return PreHomeFavorite
     */
    public function setUid($uid)
    {
        $this->uid = $uid;

        return $this;
    }

    /**
     * Get uid
     *
     * @return integer 
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Set id
     *
     * @param integer $id
     * @return PreHomeFavorite
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
     * @return PreHomeFavorite
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
     * Set spaceuid
     *
     * @param integer $spaceuid
     * @return PreHomeFavorite
     */
    public function setSpaceuid($spaceuid)
    {
        $this->spaceuid = $spaceuid;

        return $this;
    }

    /**
     * Get spaceuid
     *
     * @return integer 
     */
    public function getSpaceuid()
    {
        return $this->spaceuid;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return PreHomeFavorite
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return PreHomeFavorite
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set dateline
     *
     * @param integer $dateline
     * @return PreHomeFavorite
     */
    public function setDateline($dateline)
    {
        $this->dateline = $dateline;

        return $this;
    }

    /**
     * Get dateline
     *
     * @return integer 
     */
    public function getDateline()
    {
        return $this->dateline;
    }
}

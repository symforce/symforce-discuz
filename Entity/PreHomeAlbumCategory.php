<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreHomeAlbumCategory
 *
 * @ORM\Table(name="pre_home_album_category")
 * @ORM\Entity
 */
class PreHomeAlbumCategory
{
    /**
     * @var integer
     *
     * @ORM\Column(name="catid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $catid;

    /**
     * @var integer
     *
     * @ORM\Column(name="upid", type="integer", nullable=false)
     */
    private $upid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="catname", type="string", length=255, nullable=false)
     */
    private $catname = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="num", type="integer", nullable=false)
     */
    private $num = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="displayorder", type="smallint", nullable=false)
     */
    private $displayorder = '0';



    /**
     * Get catid
     *
     * @return integer 
     */
    public function getCatid()
    {
        return $this->catid;
    }

    /**
     * Set upid
     *
     * @param integer $upid
     * @return PreHomeAlbumCategory
     */
    public function setUpid($upid)
    {
        $this->upid = $upid;

        return $this;
    }

    /**
     * Get upid
     *
     * @return integer 
     */
    public function getUpid()
    {
        return $this->upid;
    }

    /**
     * Set catname
     *
     * @param string $catname
     * @return PreHomeAlbumCategory
     */
    public function setCatname($catname)
    {
        $this->catname = $catname;

        return $this;
    }

    /**
     * Get catname
     *
     * @return string 
     */
    public function getCatname()
    {
        return $this->catname;
    }

    /**
     * Set num
     *
     * @param integer $num
     * @return PreHomeAlbumCategory
     */
    public function setNum($num)
    {
        $this->num = $num;

        return $this;
    }

    /**
     * Get num
     *
     * @return integer 
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * Set displayorder
     *
     * @param integer $displayorder
     * @return PreHomeAlbumCategory
     */
    public function setDisplayorder($displayorder)
    {
        $this->displayorder = $displayorder;

        return $this;
    }

    /**
     * Get displayorder
     *
     * @return integer 
     */
    public function getDisplayorder()
    {
        return $this->displayorder;
    }
}

<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PrePortalArticleRelated
 *
 * @ORM\Table(name="pre_portal_article_related", indexes={@ORM\Index(name="aid", columns={"aid", "displayorder"})})
 * @ORM\Entity
 */
class PrePortalArticleRelated
{
    /**
     * @var integer
     *
     * @ORM\Column(name="aid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $aid;

    /**
     * @var integer
     *
     * @ORM\Column(name="raid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $raid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="displayorder", type="integer", nullable=false)
     */
    private $displayorder = '0';



    /**
     * Set aid
     *
     * @param integer $aid
     * @return PrePortalArticleRelated
     */
    public function setAid($aid)
    {
        $this->aid = $aid;

        return $this;
    }

    /**
     * Get aid
     *
     * @return integer 
     */
    public function getAid()
    {
        return $this->aid;
    }

    /**
     * Set raid
     *
     * @param integer $raid
     * @return PrePortalArticleRelated
     */
    public function setRaid($raid)
    {
        $this->raid = $raid;

        return $this;
    }

    /**
     * Get raid
     *
     * @return integer 
     */
    public function getRaid()
    {
        return $this->raid;
    }

    /**
     * Set displayorder
     *
     * @param integer $displayorder
     * @return PrePortalArticleRelated
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

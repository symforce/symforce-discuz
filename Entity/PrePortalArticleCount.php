<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PrePortalArticleCount
 *
 * @ORM\Table(name="pre_portal_article_count")
 * @ORM\Entity
 */
class PrePortalArticleCount
{
    /**
     * @var integer
     *
     * @ORM\Column(name="aid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $aid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="catid", type="integer", nullable=false)
     */
    private $catid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="viewnum", type="integer", nullable=false)
     */
    private $viewnum = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="commentnum", type="integer", nullable=false)
     */
    private $commentnum = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="favtimes", type="integer", nullable=false)
     */
    private $favtimes = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="sharetimes", type="integer", nullable=false)
     */
    private $sharetimes = '0';



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
     * Set catid
     *
     * @param integer $catid
     * @return PrePortalArticleCount
     */
    public function setCatid($catid)
    {
        $this->catid = $catid;

        return $this;
    }

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
     * Set viewnum
     *
     * @param integer $viewnum
     * @return PrePortalArticleCount
     */
    public function setViewnum($viewnum)
    {
        $this->viewnum = $viewnum;

        return $this;
    }

    /**
     * Get viewnum
     *
     * @return integer 
     */
    public function getViewnum()
    {
        return $this->viewnum;
    }

    /**
     * Set commentnum
     *
     * @param integer $commentnum
     * @return PrePortalArticleCount
     */
    public function setCommentnum($commentnum)
    {
        $this->commentnum = $commentnum;

        return $this;
    }

    /**
     * Get commentnum
     *
     * @return integer 
     */
    public function getCommentnum()
    {
        return $this->commentnum;
    }

    /**
     * Set favtimes
     *
     * @param integer $favtimes
     * @return PrePortalArticleCount
     */
    public function setFavtimes($favtimes)
    {
        $this->favtimes = $favtimes;

        return $this;
    }

    /**
     * Get favtimes
     *
     * @return integer 
     */
    public function getFavtimes()
    {
        return $this->favtimes;
    }

    /**
     * Set sharetimes
     *
     * @param integer $sharetimes
     * @return PrePortalArticleCount
     */
    public function setSharetimes($sharetimes)
    {
        $this->sharetimes = $sharetimes;

        return $this;
    }

    /**
     * Get sharetimes
     *
     * @return integer 
     */
    public function getSharetimes()
    {
        return $this->sharetimes;
    }
}

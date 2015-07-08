<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreForumCollectionrelated
 *
 * @ORM\Table(name="pre_forum_collectionrelated")
 * @ORM\Entity
 */
class PreForumCollectionrelated
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="collection", type="text", nullable=false)
     */
    private $collection;



    /**
     * Get tid
     *
     * @return integer 
     */
    public function getTid()
    {
        return $this->tid;
    }

    /**
     * Set collection
     *
     * @param string $collection
     * @return PreForumCollectionrelated
     */
    public function setCollection($collection)
    {
        $this->collection = $collection;

        return $this;
    }

    /**
     * Get collection
     *
     * @return string 
     */
    public function getCollection()
    {
        return $this->collection;
    }
}

<?php

namespace Symforce\DiscuzBundle;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntityPreForumMedallog
 *
 * @ORM\Table(name="pre_forum_medallog", indexes={@ORM\Index(name="type", columns={"type"}), @ORM\Index(name="status", columns={"status", "expiration"}), @ORM\Index(name="uid", columns={"uid", "medalid", "type"}), @ORM\Index(name="dateline", columns={"dateline"})})
 * @ORM\Entity
 */
class EntityPreForumMedallog
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     */
    private $uid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="medalid", type="smallint", nullable=false)
     */
    private $medalid = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="boolean", nullable=false)
     */
    private $type = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="expiration", type="integer", nullable=false)
     */
    private $expiration = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status = '0';


}

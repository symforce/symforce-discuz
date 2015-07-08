<?php

namespace Symforce\DiscuzBundle;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntityPreForumMedal
 *
 * @ORM\Table(name="pre_forum_medal", indexes={@ORM\Index(name="displayorder", columns={"displayorder"}), @ORM\Index(name="available", columns={"available", "displayorder"})})
 * @ORM\Entity
 */
class EntityPreForumMedal
{
    /**
     * @var integer
     *
     * @ORM\Column(name="medalid", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $medalid;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="available", type="boolean", nullable=false)
     */
    private $available = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=false)
     */
    private $image = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="boolean", nullable=false)
     */
    private $type = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="displayorder", type="boolean", nullable=false)
     */
    private $displayorder = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="expiration", type="smallint", nullable=false)
     */
    private $expiration = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="permission", type="text", nullable=false)
     */
    private $permission;

    /**
     * @var boolean
     *
     * @ORM\Column(name="credit", type="boolean", nullable=false)
     */
    private $credit = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="price", type="integer", nullable=false)
     */
    private $price = '0';


}

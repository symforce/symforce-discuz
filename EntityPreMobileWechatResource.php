<?php

namespace Symforce\DiscuzBundle;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntityPreMobileWechatResource
 *
 * @ORM\Table(name="pre_mobile_wechat_resource", indexes={@ORM\Index(name="type", columns={"type"})})
 * @ORM\Entity
 */
class EntityPreMobileWechatResource
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline;

    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="boolean", nullable=false)
     */
    private $type = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="data", type="text", nullable=false)
     */
    private $data;


}

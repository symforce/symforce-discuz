<?php

namespace Symforce\DiscuzBundle;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntityPreMobileWechatMasssend
 *
 * @ORM\Table(name="pre_mobile_wechat_masssend")
 * @ORM\Entity
 */
class EntityPreMobileWechatMasssend
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
     * @ORM\Column(name="type", type="string", length=5, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="resource_id", type="integer", nullable=false)
     */
    private $resourceId;

    /**
     * @var integer
     *
     * @ORM\Column(name="group_id", type="integer", nullable=false)
     */
    private $groupId;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="text", nullable=true)
     */
    private $text;

    /**
     * @var string
     *
     * @ORM\Column(name="media_id", type="string", length=64, nullable=true)
     */
    private $mediaId = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="created_at", type="integer", nullable=false)
     */
    private $createdAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="sent_at", type="integer", nullable=true)
     */
    private $sentAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="msg_id", type="integer", nullable=true)
     */
    private $msgId;

    /**
     * @var string
     *
     * @ORM\Column(name="res_status", type="string", length=50, nullable=true)
     */
    private $resStatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="res_totalcount", type="integer", nullable=true)
     */
    private $resTotalcount;

    /**
     * @var integer
     *
     * @ORM\Column(name="res_filtercount", type="integer", nullable=true)
     */
    private $resFiltercount;

    /**
     * @var integer
     *
     * @ORM\Column(name="res_sentcount", type="integer", nullable=true)
     */
    private $resSentcount;

    /**
     * @var integer
     *
     * @ORM\Column(name="res_errorcount", type="integer", nullable=true)
     */
    private $resErrorcount;

    /**
     * @var integer
     *
     * @ORM\Column(name="res_finish_at", type="integer", nullable=true)
     */
    private $resFinishAt;


}

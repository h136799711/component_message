<?php
/**
 * 注意：本内容仅限于博也公司内部传阅,禁止外泄以及用于其他的商业目的
 * @author    hebidu<346551990@qq.com>
 * @copyright 2017 www.itboye.com Boye Inc. All rights reserved.
 * @link      http://www.itboye.com/
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * Revision History Version
 ********1.0.0********************
 * file created @ 2017-12-28 10:47
 *********************************
 ********1.0.1********************
 *
 *********************************
 */

namespace by\component\message\entity;


use by\component\message\enum\MessageIsDeliveryEnum;
use by\component\message\enum\MessageSpecialToUidEnum;
use by\infrastructure\base\BaseEntity;
use by\infrastructure\constants\StatusEnum;

class MessageEntity extends BaseEntity
{
    private $dtreeType;
    private $title;
    private $content;
    private $sendTime;
    private $fromUid;
    private $summary;
    private $status;
    private $toUid;
    private $isDelivery;
    private $extra;
    private $projectId;

    public function __construct()
    {
        parent::__construct();
        $this->setStatus(StatusEnum::ENABLE);
        $this->setToUid(MessageSpecialToUidEnum::ALL_USER);
        $this->setIsDelivery(MessageIsDeliveryEnum::WAIT);
    }

    /**
     * @return mixed
     */
    public function getToUid()
    {
        return $this->toUid;
    }

    /**
     * @param mixed $toUid
     */
    public function setToUid($toUid)
    {
        $this->toUid = $toUid;
    }

    /**
     * @return mixed
     */
    public function getisDelivery()
    {
        return $this->isDelivery;
    }

    /**
     * @param mixed $isDelivery
     */
    public function setIsDelivery($isDelivery)
    {
        $this->isDelivery = $isDelivery;
    }

    /**
     * @return mixed
     */
    public function getProjectId()
    {
        return $this->projectId;
    }

    /**
     * @param mixed $projectId
     */
    public function setProjectId($projectId)
    {
        $this->projectId = $projectId;
    }

    /**
     * @return mixed
     */
    public function getDtreeType()
    {
        return $this->dtreeType;
    }

    /**
     * @param mixed $dtreeType
     */
    public function setDtreeType($dtreeType)
    {
        $this->dtreeType = $dtreeType;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getSendTime()
    {
        return $this->sendTime;
    }

    /**
     * @param mixed $sendTime
     */
    public function setSendTime($sendTime)
    {
        $this->sendTime = $sendTime;
    }

    /**
     * @return mixed
     */
    public function getFromUid()
    {
        return $this->fromUid;
    }

    /**
     * @param mixed $fromUid
     */
    public function setFromUid($fromUid)
    {
        $this->fromUid = $fromUid;
    }

    /**
     * @return mixed
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * @param mixed $summary
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getExtra()
    {
        return $this->extra;
    }

    /**
     * @param mixed $extra
     */
    public function setExtra($extra)
    {
        $this->extra = $extra;
    }
}
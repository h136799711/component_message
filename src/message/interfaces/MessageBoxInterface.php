<?php
/**
 * Created by PhpStorm.
 * User: itboye
 * Date: 2018/7/11
 * Time: 16:39
 */

namespace by\component\message\interfaces;


use by\component\message\entity\MessageEntity;
use by\component\paging\vo\PagingParams;

interface MessageBoxInterface
{


    /**
     * 统计未读消息数量
     * @param $uid
     * @param $projectId
     * @return int|string
     */
    public function countUserUnreadMessage($uid, $projectId);

    /**
     * 投递消息
     * @param integer $toUid 投递给这个uid
     * @param MessageEntity $entity 投递的消息
     */
    public function deliveryMessage($toUid, MessageEntity $entity);

    /**
     * 接收消息-发给该用户的消息
     * @param integer $uid 接收人uid
     * @param string $projectId 项目
     * @param string $type 【数据字典-code】 消息类型
     * @param PagingParams $pagingParams
     * @param array $params
     */
    public function receiveUserMessage($uid, $projectId, $type, PagingParams $pagingParams, $params = []);

    /**
     * 查询所有
     * @param $uid
     * @param $projectId
     * @param $type
     * @param PagingParams $pagingParams
     * @param array $params
     * @param bool $readStatus
     */
    public function receiveAllMessage($uid, $projectId, $type, PagingParams $pagingParams, $params = [], $readStatus = false);

    /**
     * 接收发给全部用户的消息
     * @param $uid
     * @param $projectId
     * @param $type
     * @param PagingParams $pagingParams
     * @param array $params
     */
    public function receivePublicMessage($uid, $projectId, $type, PagingParams $pagingParams, $params = []);

    /**
     * 批量阅读
     * @param integer $uid 阅读者uid
     * @param array $msgIdArr 消息id数组
     * @return \by\infrastructure\base\CallResult  data包含错误信息
     */
    public function readBatch($uid, $msgIdArr);

    /**
     * 已读 - 单条消息已读
     * @param $uid
     * @param $msgId
     * @return \by\infrastructure\base\CallResult
     */
    public function read($uid, $msgId);
}
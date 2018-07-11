<?php
/**
 * 注意：本内容仅限于博也公司内部传阅,禁止外泄以及用于其他的商业目的
 * @author    hebidu<346551990@qq.com>
 * @copyright 2017 www.itboye.com Boye Inc. All rights reserved.
 * @link      http://www.itboye.com/
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * Revision History Version
 ********1.0.0********************
 * file created @ 2017-12-28 10:49
 *********************************
 ********1.0.1********************
 *
 *********************************
 */

namespace by\component\message\entity;


use by\infrastructure\base\BaseEntity;

class MessageBoxEntity extends BaseEntity
{
    private $uid;
    private $msgId;
    private $msgStatus;

    public function __construct()
    {
        parent::__construct();
        $this->setCreateTime(null);
    }

    /**
     * @return mixed
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * @param mixed $uid
     */
    public function setUid($uid)
    {
        $this->uid = $uid;
    }

    /**
     * @return mixed
     */
    public function getMsgId()
    {
        return $this->msgId;
    }

    /**
     * @param mixed $msgId
     */
    public function setMsgId($msgId)
    {
        $this->msgId = $msgId;
    }

    /**
     * @return mixed
     */
    public function getMsgStatus()
    {
        return $this->msgStatus;
    }

    /**
     * @param mixed $msgStatus
     */
    public function setMsgStatus($msgStatus)
    {
        $this->msgStatus = $msgStatus;
    }
}
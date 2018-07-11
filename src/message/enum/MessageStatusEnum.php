<?php
/**
 * 注意：本内容仅限于博也公司内部传阅,禁止外泄以及用于其他的商业目的
 * @author    hebidu<346551990@qq.com>
 * @copyright 2017 www.itboye.com Boye Inc. All rights reserved.
 * @link      http://www.itboye.com/
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * Revision History Version
 ********1.0.0********************
 * file created @ 2017-12-28 10:54
 *********************************
 ********1.0.1********************
 *
 *********************************
 */

namespace by\component\message\enum;


class MessageStatusEnum
{
    /**
     * 已投递 - 未读 0
     */
    const NOT_READ = 0;

    /**
     * 已投递 - 已读 1
     */
    const HAD_READ = 1;

    /**
     * 已|未投递 - 已删除
     */
    const SOFT_DELETE = 2;
}
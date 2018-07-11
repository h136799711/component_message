<?php
/**
 * Created by PhpStorm.
 * User: itboye
 * Date: 2018/7/11
 * Time: 16:41
 */

namespace by\component\message\interfaces;


use by\component\paging\vo\PagingParams;

interface MessageInterface
{
    public function queryWaitNotifyMessage($projectId, PagingParams $pagingParams, $params = []);
}
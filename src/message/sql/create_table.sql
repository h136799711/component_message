CREATE TABLE `common_message` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_id` varchar(32) NOT NULL DEFAULT '',
  `dtree_type` varchar(21) NOT NULL DEFAULT '' COMMENT '[数据字典]消息类型',
  `content` text NOT NULL COMMENT '消息内容',
  `title` varchar(128) NOT NULL DEFAULT '' COMMENT '消息标题',
  `create_time` int(11) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` bigint(20) NOT NULL DEFAULT '0',
  `send_time` int(11) NOT NULL DEFAULT '0' COMMENT '发送时间(可用于定时发送)',
  `from_uid` bigint(20) NOT NULL DEFAULT '0' COMMENT '创建消息用户ID(0:系统 大于0: 用户ID)',
  `to_uid` bigint(20) NOT NULL DEFAULT '0',
  `is_delivery` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否投递(0: 等待投递)',
  `summary` varchar(256) NOT NULL DEFAULT '0' COMMENT '消息摘要',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '数据状态(1:正常 -1:已删除或该条私信对发送者不显示 0: 禁用)',
  `extra` text COMMENT '额外信息'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='消息内容';


CREATE TABLE `common_message_box` (
  `uid` bigint(20) NOT NULL DEFAULT '0',
  `msg_id` bigint(20) NOT NULL COMMENT '消息ID,itboye_msg_outbox ID',
  `msg_status` tinyint(11) NOT NULL DEFAULT '0' COMMENT '0:未读 1:已读 -1:已删除',
  `update_time` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='消息收件箱';
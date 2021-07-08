<?php

declare (strict_types=1);

namespace App\Model;

/**
 * 聊天列表组数据表模型
 *
 * @property integer $id            聊天列表ID
 * @property integer $talk_type     聊天类型[1:好友;2:群聊;]
 * @property integer $user_id       用户ID或消息发送者ID
 * @property integer $receiver_id   接收者ID[好友ID或群ID]
 * @property integer $is_delete     是否删除
 * @property integer $is_top        是否置顶
 * @property integer $is_disturb    消息免打扰
 * @property integer $is_robot      是否机器人
 * @property string  $created_at    创建时间
 * @property string  $updated_at    更新时间
 * @package App\Model
 */
class TalkList extends BaseModel
{
    protected $table = 'talk_list';

    public $timestamps = true;

    protected $fillable = [
        'talk_type',
        'user_id',
        'receiver_id',
        'is_delete',
        'is_top',
        'is_robot',
        'is_disturb',
        'created_at',
        'updated_at'
    ];

    protected $casts = [
        'id'          => 'integer',
        'talk_type'   => 'integer',
        'user_id'     => 'integer',
        'receiver_id' => 'integer',
        'is_delete'   => 'integer',
        'is_top'      => 'integer',
        'is_robot'    => 'integer',
        'is_disturb'  => 'integer',
        'created_at'  => 'datetime',
        'updated_at'  => 'datetime'
    ];
}

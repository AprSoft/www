<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $uid
 * @property string $username
 * @property string $password
 * @property string $auth_key
 * @property string $access_token
 * @property integer $created_ip
 * @property integer $created_at
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['created_ip', 'created_at'], 'integer'],
            [['username'], 'string', 'max' => 238],
            [['password', 'auth_key', 'access_token'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'uid' => '用户编号',
            'username' => '用户名',
            'password' => '密码',
            'auth_key' => 'auth key',
            'access_token' => 'auth token',
            'created_ip' => '创建ip',
            'created_at' => '创建时间',
        ];
    }
}

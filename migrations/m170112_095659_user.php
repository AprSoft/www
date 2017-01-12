<?php

use yii\db\Migration;

class m170112_095659_user extends Migration
{
    public function up()
    {
        $this->execute("
            CREATE TABLE IF NOT EXISTS `user` (
              `uid` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '用户编号',
              `username` VARCHAR(238) NULL COMMENT '用户名',
              `password` VARCHAR(256) NULL COMMENT '密码',
              `auth_key` VARCHAR(256) NULL COMMENT 'auth key',
              `access_token` VARCHAR(256) NULL COMMENT 'auth token',
              `created_ip` INT(11) UNSIGNED NULL COMMENT '创建ip',
              `created_at` INT(11) UNSIGNED NULL COMMENT '创建时间',
              PRIMARY KEY (`uid`))
            ENGINE = InnoDB;
        ");
    }

    public function down()
    {
        $this->dropTable('user');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}

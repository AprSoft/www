<?php

use yii\db\Migration;

class m170112_060457_article extends Migration
{
    public function up()
    {
        $this->execute("
            DROP TABLE IF EXISTS `article` ;
            CREATE TABLE IF NOT EXISTS `article` (
              `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '文章编号',
              `title` VARCHAR(128) NULL COMMENT '标题',
              `content` TEXT NULL COMMENT '内容',
              `uid` INT(11) UNSIGNED NULL COMMENT '作者',
              `created_at` INT(11) UNSIGNED NULL COMMENT '创建时间',
              `updated_at` INT(11) UNSIGNED NULL COMMENT '修改时间',
              PRIMARY KEY (`id`))
            ENGINE = InnoDB;
        ");
    }

    public function down()
    {
        $this->dropTable('article');
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

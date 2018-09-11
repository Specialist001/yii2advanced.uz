<?php

use yii\db\Migration;

/**
 * Class m180911_113712_add_index_news_content
 */
class m180911_113712_add_index_news_content extends Migration
{
    /**
     * {@inheritdoc}
     */
//    public function safeUp()
//    {
//
//    }

    /**
     * {@inheritdoc}
     */
//    public function safeDown()
//    {
//        echo "m180911_113712_add_index_news_content cannot be reverted.\n";
//
//        return false;
//    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->execute("ALTER TABLE news add FULLTEXT INDEX idx_content (content)");
    }

    public function down()
    {
        $this->dropIndex('idx_content', 'news');
    }

}

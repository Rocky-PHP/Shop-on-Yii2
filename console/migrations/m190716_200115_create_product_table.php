<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product}}`.
 */
class m190716_200115_create_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%product}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull()->unique(),
            'description' => $this->text()->notNull(),
            'photo' => $this->json(),
            'price' => $this->money()->notNull(),
            'sale' => $this->float()->unsigned(),
            'product_type' => $this->string(255),
            'category_id' => $this->json(),
            'quantity' => $this->integer()->notNull(),
            'publication_date' => $this->dateTime(),
            'modified_date' => $this->dateTime(),
            'removed_date' => $this->dateTime()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%product}}');
    }
}

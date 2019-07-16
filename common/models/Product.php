<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property array $photo
 * @property string $price
 * @property double $sale
 * @property string $product_type
 * @property array $category_id
 * @property int $quantity
 * @property string $publication_date
 * @property string $modified_date
 * @property string $removed_date
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description', 'price', 'quantity'], 'required'],
            [['description'], 'string'],
            [['photo', 'category_id', 'publication_date', 'modified_date', 'removed_date'], 'safe'],
            [['price', 'sale'], 'number'],
            [['quantity'], 'integer'],
            [['name', 'product_type'], 'string', 'max' => 255],
            [['name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'photo' => 'Photo',
            'price' => 'Price',
            'sale' => 'Sale',
            'product_type' => 'Product Type',
            'category_id' => 'Category ID',
            'quantity' => 'Quantity',
            'publication_date' => 'Publication Date',
            'modified_date' => 'Modified Date',
            'removed_date' => 'Removed Date',
        ];
    }
}

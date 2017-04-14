<?php
namespace backend\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property integer $id
 * @property string $order_user_name
 * @property string $order_user_tel
 * @property integer $order_num
 * @property integer $user_id
 * @property integer $house_id
 * @property integer $status
 * @property string $create_data
 * @property string $update_data
 */
class Order extends \backend\models\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_user_name', 'order_user_tel', 'order_num', 'user_id', 'house_id'], 'required'],
            [['order_num', 'user_id', 'house_id', 'status'], 'integer'],
            [['order_user_name'], 'string', 'max' => 45],
            [['order_user_tel'], 'string', 'max' => 11],
            [['create_data', 'update_data'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '预约ID',
            'order_user_name' => '预约人姓名',
            'order_user_tel' => '预约电话',
            'order_num' => '入住人数',
            'user_id' => '房东ID',
            'house_id' => '房源ID',
            'status' => '是否看房',
            'create_data' => '添加时间',
            'update_data' => '修改时间',
        ];
    }

  /**
     * 返回数据库字段信息，仅在生成CRUD时使用，如不需要生成CRUD，请注释或删除该getTableColumnInfo()代码
     * COLUMN_COMMENT可用key如下:
     * label - 显示的label
     * inputType 控件类型, 暂时只支持text,hidden  // select,checkbox,radio,file,password,
     * isEdit   是否允许编辑，如果允许编辑将在添加和修改时输入
     * isSearch 是否允许搜索
     * isDisplay 是否在列表中显示
     * isOrder 是否排序
     * udc - udc code，inputtype为select,checkbox,radio三个值时用到。
     * 特别字段：
     * id：主键。必须含有主键，统一都是id
     * create_date: 创建时间。生成的代码自动赋值
     * update_date: 修改时间。生成的代码自动赋值
     */
    public function getTableColumnInfo(){
        return array(
        'id' => array(
                        'name' => 'id',
                        'allowNull' => false,
//                         'autoIncrement' => true,
//                         'comment' => '预约表ID',
//                         'dbType' => "int(11)",
                        'defaultValue' => '',
                        'enumValues' => null,
                        'isPrimaryKey' => true,
                        'phpType' => 'integer',
                        'precision' => '11',
                        'scale' => '',
                        'size' => '11',
                        'type' => 'integer',
                        'unsigned' => false,
                        'label'=>$this->getAttributeLabel('id'),
                        'inputType' => 'hidden',
                        'isEdit' => true,
                        'isSearch' => true,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'order_user_name' => array(
                        'name' => 'order_user_name',
                        'allowNull' => false,
//                         'autoIncrement' => false,
//                         'comment' => '预约姓名',
//                         'dbType' => "varchar(45)",
                        'defaultValue' => '',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'string',
                        'precision' => '45',
                        'scale' => '',
                        'size' => '45',
                        'type' => 'string',
                        'unsigned' => false,
                        'label'=>$this->getAttributeLabel('order_user_name'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'order_user_tel' => array(
                        'name' => 'order_user_tel',
                        'allowNull' => false,
//                         'autoIncrement' => false,
//                         'comment' => '预约电话',
//                         'dbType' => "char(11)",
                        'defaultValue' => '',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'string',
                        'precision' => '11',
                        'scale' => '',
                        'size' => '11',
                        'type' => 'char',
                        'unsigned' => false,
                        'label'=>$this->getAttributeLabel('order_user_tel'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'order_num' => array(
                        'name' => 'order_num',
                        'allowNull' => false,
//                         'autoIncrement' => false,
//                         'comment' => '入住人数',
//                         'dbType' => "tinyint(2)",
                        'defaultValue' => '',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'integer',
                        'precision' => '2',
                        'scale' => '',
                        'size' => '2',
                        'type' => 'smallint',
                        'unsigned' => false,
                        'label'=>$this->getAttributeLabel('order_num'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'user_id' => array(
                        'name' => 'user_id',
                        'allowNull' => false,
//                         'autoIncrement' => false,
//                         'comment' => '房东ID',
//                         'dbType' => "int(11)",
                        'defaultValue' => '',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'integer',
                        'precision' => '11',
                        'scale' => '',
                        'size' => '11',
                        'type' => 'integer',
                        'unsigned' => false,
                        'label'=>$this->getAttributeLabel('user_id'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'house_id' => array(
                        'name' => 'house_id',
                        'allowNull' => false,
//                         'autoIncrement' => false,
//                         'comment' => '房源ID',
//                         'dbType' => "int(11)",
                        'defaultValue' => '',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'integer',
                        'precision' => '11',
                        'scale' => '',
                        'size' => '11',
                        'type' => 'integer',
                        'unsigned' => false,
                        'label'=>$this->getAttributeLabel('house_id'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'status' => array(
                        'name' => 'status',
                        'allowNull' => false,
//                         'autoIncrement' => false,
//                         'comment' => '是否看房
// 1 已看房
// 0 未看房
// ',
//                         'dbType' => "tinyint(4)",
                        'defaultValue' => '0',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'integer',
                        'precision' => '4',
                        'scale' => '',
                        'size' => '4',
                        'type' => 'smallint',
                        'unsigned' => false,
                        'label'=>$this->getAttributeLabel('status'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'create_data' => array(
                        'name' => 'create_data',
                        'allowNull' => true,
//                         'autoIncrement' => false,
//                         'comment' => '添加时间',
//                         'dbType' => "varchar(30)",
                        'defaultValue' => '',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'string',
                        'precision' => '30',
                        'scale' => '',
                        'size' => '30',
                        'type' => 'string',
                        'unsigned' => false,
                        'label'=>$this->getAttributeLabel('create_data'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'update_data' => array(
                        'name' => 'update_data',
                        'allowNull' => true,
//                         'autoIncrement' => false,
//                         'comment' => '修改时间',
//                         'dbType' => "varchar(30)",
                        'defaultValue' => '',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'string',
                        'precision' => '30',
                        'scale' => '',
                        'size' => '30',
                        'type' => 'string',
                        'unsigned' => false,
                        'label'=>$this->getAttributeLabel('update_data'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		        );
        
    }
 
}

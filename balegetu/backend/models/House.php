<?php
namespace backend\models;

use Yii;

/**
 * This is the model class for table "house".
 *
 * @property integer $id
 * @property string $area
 * @property string $money
 * @property integer $huxing
 * @property integer $order
 * @property string $house_title
 * @property string $house_url
 * @property integer $status
 * @property string $create_data
 * @property integer $user_id
 * @property integer $house_type_id
 * @property string $feature_id
 * @property string $update_data
 *
 * @property User $user
 * @property HouseType $houseType
 */
class House extends \backend\models\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'house';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['area', 'money', 'huxing', 'house_title', 'status', 'create_data', 'user_id', 'house_type_id', 'feature_id'], 'required'],
            [['money'], 'number'],
            [['huxing', 'order', 'status', 'user_id', 'house_type_id'], 'integer'],
            [['area', 'house_title'], 'string', 'max' => 45],
            [['house_url'], 'string', 'max' => 255],
            [['create_data', 'update_data'], 'string', 'max' => 30],
            [['feature_id'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '房屋编号',
            'area' => '所属区域',
            'money' => '出租价格',
            'huxing' => '户型',
            'order' => '排序',
            'house_title' => '房屋标题',
            'house_url' => '房屋图片',
            'status' => '是否出租',
            'create_data' => '添加时间',
            'user_id' => '房东ID',
            'house_type_id' => '租房类型',
            'feature_id' => '房屋特色',
            'update_data' => '修改时间',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHouseType()
    {
        return $this->hasOne(HouseType::className(), ['id' => 'house_type_id']);
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
//                         'comment' => '房源ID',
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
		'area' => array(
                        'name' => 'area',
                        'allowNull' => false,
//                         'autoIncrement' => false,
//                         'comment' => '地区字段',
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
                        'label'=>$this->getAttributeLabel('area'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'money' => array(
                        'name' => 'money',
                        'allowNull' => false,
//                         'autoIncrement' => false,
//                         'comment' => '金额',
//                         'dbType' => "decimal(10,0)",
                        'defaultValue' => '',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'string',
                        'precision' => '10',
                        'scale' => '0',
                        'size' => '10',
                        'type' => 'decimal',
                        'unsigned' => false,
                        'label'=>$this->getAttributeLabel('money'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'huxing' => array(
                        'name' => 'huxing',
                        'allowNull' => false,
//                         'autoIncrement' => false,
//                         'comment' => '户型

//                         'dbType' => "tinyint(1)",
                        'defaultValue' => '',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'integer',
                        'precision' => '1',
                        'scale' => '',
                        'size' => '1',
                        'type' => 'smallint',
                        'unsigned' => false,
                        'label'=>$this->getAttributeLabel('huxing'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'order' => array(
                        'name' => 'order',
                        'allowNull' => false,
//                         'autoIncrement' => false,
//                         'comment' => '排序
//                         'dbType' => "tinyint(2)",
                        'defaultValue' => '99',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'integer',
                        'precision' => '2',
                        'scale' => '',
                        'size' => '2',
                        'type' => 'smallint',
                        'unsigned' => false,
                        'label'=>$this->getAttributeLabel('order'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'house_title' => array(
                        'name' => 'house_title',
                        'allowNull' => false,
//                         'autoIncrement' => false,
//                         'comment' => '房源标题',
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
                        'label'=>$this->getAttributeLabel('house_title'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'house_url' => array(
                        'name' => 'house_url',
                        'allowNull' => false,
//                         'autoIncrement' => false,
//                         'comment' => '房源图片
//                         'dbType' => "varchar(255)",
                        'defaultValue' => '0',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'string',
                        'precision' => '255',
                        'scale' => '',
                        'size' => '255',
                        'type' => 'string',
                        'unsigned' => false,
                        'label'=>$this->getAttributeLabel('house_url'),
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
//                         'comment' => '默认0
//                         'dbType' => "tinyint(1)",
                        'defaultValue' => '',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'integer',
                        'precision' => '1',
                        'scale' => '',
                        'size' => '1',
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
                        'allowNull' => false,
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
		'house_type_id' => array(
                        'name' => 'house_type_id',
                        'allowNull' => false,
//                         'autoIncrement' => false,
//                         'comment' => '房源类型ID',
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
                        'label'=>$this->getAttributeLabel('house_type_id'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'feature_id' => array(
                        'name' => 'feature_id',
                        'allowNull' => false,
//                         'autoIncrement' => false,
//                         'comment' => '',
//                         'dbType' => "varchar(50)",
                        'defaultValue' => '',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'string',
                        'precision' => '50',
                        'scale' => '',
                        'size' => '50',
                        'type' => 'string',
                        'unsigned' => false,
                        'label'=>$this->getAttributeLabel('feature_id'),
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

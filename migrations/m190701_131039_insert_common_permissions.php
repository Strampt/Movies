<?php

use yii\db\Migration;
use webvimark\modules\UserManagement\models\rbacDB\Permission;


/**
 * Class m190701_131039_insert_common_permissions
 */
class m190701_131039_insert_common_permissions extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        Permission::assignRoutes(\Yii::$app->getModule('user-management')->commonPermissionName, ['/site/error']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190701_131039_insert_common_permissions cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190701_131039_insert_common_permissions cannot be reverted.\n";

        return false;
    }
    */
}

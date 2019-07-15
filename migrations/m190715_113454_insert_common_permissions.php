<?php

use yii\db\Migration;
use webvimark\modules\UserManagement\models\rbacDB\Permission;

/**
 * Class m190715_113454_insert_common_permissions
 */
class m190715_113454_insert_common_permissions extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        Permission::assignRoutes(\Yii::$app->getModule('user-management')->commonPermissionName, ['/site/index']);
        Permission::assignRoutes(\Yii::$app->getModule('user-management')->commonPermissionName, ['/site/error']);
        Permission::assignRoutes(\Yii::$app->getModule('user-management')->commonPermissionName, ['/search-movie/index']);
        Permission::assignRoutes(\Yii::$app->getModule('user-management')->commonPermissionName, ['/title-movie/index']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190715_113454_insert_common_permissions cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190715_113454_insert_common_permissions cannot be reverted.\n";

        return false;
    }
    */
}

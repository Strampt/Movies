<?php

use yii\db\Migration;
use webvimark\modules\UserManagement\models\rbacDB\Permission;

/**
 * Class m190809_231345_insert_common_permissionsToauthitemchild
 */
class m190809_231345_insert_common_permissions_to_auth_item_child extends Migration
{
    public function up()
    {
        Permission::assignRoutes(\Yii::$app->getModule('user-management')->commonPermissionName, ['/site/error']);
        Permission::assignRoutes(\Yii::$app->getModule('user-management')->commonPermissionName, ['/search-movie/index']);
    }

    public function down()
    {
        echo "m190809_231345_insert_common_permissionsToauthitemchild cannot be reverted.\n";

        return false;
    }

    /*
    // Use Safeup()/Safedown() to run migration code within a transaction.
    public function safeUp()
    {

    }

    public function safeDown()
    {
        echo "m190809_231345_insert_common_permissionsToauthitemchild cannot be reverted.\n";

        return false;
    }
    */
}

<?php

namespace craft\contentmigrations;

use Craft;
use craft\db\Migration;

/**
 * m180831_055759_install_schematic migration.
 */
class m180831_055759_install_schematic extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        Craft::$app->getPlugins()->installPlugin('schematic');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180831_055759_install_schematic cannot be reverted.\n";
        return false;
    }
}

<?php
namespace app\core;

use app\core\db\DBModel;

/**
 * UserModel
 */
abstract class UserModel extends DBModel
{
    abstract public function getDisplayName(): string;
}

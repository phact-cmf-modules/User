<?php
/**
 *
 *
 * All rights reserved.
 *
 * @author Okulov Anton
 * @email qantus@mail.ru
 * @version 1.0
 * @company HashStudio
 * @site http://hashstudio.ru
 * @date 07/08/16 13:18
 */

namespace Modules\User\Models;

use Phact\Orm\Fields\BooleanField;
use Phact\Orm\Fields\CharField;
use Phact\Orm\Fields\EmailField;
use Phact\Orm\Model;

/**
 * Class User
 * @package Modules\User\Models
 *
 * @property String email User email
 * @property String password Hashed password
 * @property bool is_superuser User is superuser (admin)
 * @property bool is_staff User is staff
 * @property bool isGuest Is guest (not authorized user)
 */
class User extends Model
{
    public $is_guest = false;

    public static function getFields()
    {
        return [
            'email' => [
                'class' => EmailField::class,
                'label' => 'E-mail'
            ],
            'password' => [
                'class' => CharField::class,
                'label' => 'Password'
            ],
            'is_superuser' => [
                'class' => BooleanField::class,
                'label' => 'Is superuser',
                'default' => false
            ],
            'is_staff' => [
                'class' => BooleanField::class,
                'label' => 'Is staff',
                'default' => false
            ]
        ];
    }

    public function getIsGuest()
    {
        return $this->is_guest;
    }
}
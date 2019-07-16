<?php
declare(strict_types=1);

namespace common\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;

/**
 * This is form for User model.
 */

class UserForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $first_name;
    public $last_name;
    public $photo;
    public $imageFile;
    protected $user;
    protected $userInfo;

    public function __construct(int $id, array $config = [])
    {
        $this->user = User::findIdentity($id);
        $this->userInfo = $this->user->userInfo;

        $this->username = $this->user->username;
        $this->email = $this->user->email;
        $this->first_name = $this->userInfo->first_name;
        $this->last_name = $this->userInfo->last_name;
        //$this->photo = $this->userInfo->photo;

        parent::__construct($config);
    }

    public function save(): bool
    {
        $user = $this->user;
        $userInfo = $this->userInfo;

        $user->username = $this->username;
        $user->email = $this->email;
        $userInfo->first_name = $this->first_name;
        $userInfo->last_name = $this->last_name;
//        $userInfo->imageFile = $this->imageFile;
//        if ($userInfo->upload()) {
//            $userInfo->photo = Yii::getAlias('@app/uploads/') . $userInfo->imageFile->baseName . '.' . $userInfo->imageFile->extension;
//        }
        $user->update();
        $userInfo->update();

        return true;
    }



}
<?php

namespace App\Policies;

use App\User;
use App\Models\Folder;

class FolderPolicy
{
    /**
     * フォルダの閲覧権限
     * @param User $user
     * @param Folder $folder
     * @return bool
     */

     public function view(User $user,Folder $folder)
     {
         return $user->id === $folder->user_id;
     }
}

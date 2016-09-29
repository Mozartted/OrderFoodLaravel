<?php
/**
 * Created by PhpStorm.
 * User: mozart
 * Date: 8/23/16
 * Time: 6:11 PM
 */

namespace App\Http\Views\Composers;
use App\UserGroup;
use Illuminate\Contracts\View\View;

class UserEditComposer
{
    protected $users;
    public function __construct(UserGroup $users) {
        $this->users = $users;
    }
    public function compose(View $view) {
        $view->with('user_group', UserGroup::lists('name', 'id'));
    }

}
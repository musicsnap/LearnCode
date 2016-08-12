<?php
/**
 * Created by PhpStorm.
 * User: Windows
 * Date: 2016/8/12
 * Time: 16:14
 * 这个是后台的路由
 */
namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class AdminRoutes
{
    public function map(Registrar $router)
    {
        $router->group(['domain' => 'demo.cn','middleware'=>['auth']], function ($router) {
            $router->get('/', ['as' => 'home', 'uses' => 'IndexController@index']);
        });
    }
}
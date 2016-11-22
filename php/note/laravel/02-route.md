#路由

首先简单的提下laravel的配置等其他一些信息，相信大家通过个人的自我学习应该都能明白：
这边在项目下.env的文件这个就是项目的配置文件，还有在项目的app\config目录下是系统的具体的配置文件，这边包含登录认证，广播，缓存，数据库，文件系统，邮箱，队列等一些的配置文件。

路由就是对url地址的解析，不知这样解释是否真确，我也不知道~~

在这里我不去讲解所以的东西，首先对于laravel的路由:所有应用路由都定义在 App\Providers\RouteServiceProvider 类载入的 app/Http/routes.php 文件中。通过打开文件App\Providers\RouteServiceProvider;

在map方法里：

    public function map(Router $router)
    {
        $this->mapWebRoutes($router);

        //
    }

    protected function mapWebRoutes(Router $router)
    {
        $router->group([
            'namespace' => $this->namespace, 'middleware' => 'web',
        ], function ($router) {
            require app_path('Http/routes.php');
        });
    }
    
RouteServiceProvider服务加载路由文件实现系统的路由,所以我们的路由都是定义在app/Http/routes.php的文件下;

对于服务，在后面单独讲解，先暂时了解下，服务是laravel最重要的一部分！

这里我只讲解下几个路由形式，其他的可以参考文档手册学习！
* 命名路由：

      Route::get('user/profile', ['as' => 'profile', function () {
          //
      }]);
  什么意思呢？(1)、使用as关键字，(2)、定义一个新的名称；在我们使用这个新的名称是:
      return route('profile');
  其实返回的就是user/profile;这个应该就明白了吧！
* 路由群组：

  路由分组就是将一组拥有相同属性（中间件、命名空间、子域名、路由前缀等）的路由使用Route门面的group（Route:group()）方法聚合起来。
  
      Route::group(['prefix' => 'admin','namespace' => 'Admin','middleware' => 'auth'], function(){
        // 控制器在 "App\Http\Controllers\Admin" 命名空间下
          Route::get('/','IndexController@index');
      });
 这个样子的路由：prefix=>路由前缀，namespace=>命名空间,middkeware=>中间件，在路由组里面有一个get('/',...);这样子就是访问 domian.com/admin ===> index控制器下，index方法
 
路由我见到的也就是这两种常用的吧，像其他的正则，路由参数，还有子域名路由等参见文档理解！
  
这边推荐一些有关laravel的网站：
* http://www.golaravel.com/
* http://laravelacademy.org/
* https://laravel-china.org/



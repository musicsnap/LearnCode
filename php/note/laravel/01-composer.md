# Composer
讲到laravel安装，我这里先提一下composer的安装，这里不去深度讲解composer的安装和使用，因为我也不是非常明白，哈哈！，所以就简单的讲解下在laravel中怎么去使用这个工具。<br>
讲解的使用全部是在windows环境下

    1、简介：
composer是 PHP 用来管理依赖（dependency）关系的工具。你可以在自己的项目中声明所依赖的外部工具库（libraries），Composer 会帮你安装这些依赖的库文件。

    2、系统要求：运行 Composer 需要 PHP 5.3.2+ 以上版本。
    
    3、安装：
安装 Composer，你只需要下载 composer.phar 可执行文件。此外你也可以直接去下载安装程序下载并且运行<a target="_blank" href="https://getcomposer.org/Composer-Setup.exe"> Composer-Setup.exe</a>，安装这玩意，我记得是死在了下载那个composer.phar的那一步，如果条件可以，你可以翻墙去安装这个玩意！

    4、使用 Composer:
首先你需要新建一个composer.json文件，并且你要简单的告诉 Composer 你的项目需要依赖哪些包。这个包可以参考https://packagist.org/,定义好这些你就可以执行 install 命令：<br>php composer.phar install（这里要在当前的目录下）或者composer install

    5、上面的都是废话，你可以直接参考文档：http://www.phpcomposer.com/
# 安装laravel

Laravel 使用 Composer 管理依赖，因此，使用 Laravel 之前，确保机器上已经安装了Composer。

    (1)通过 Laravel 安装器
首先，通过 Composer 安装 Laravel 安装器：
composer global require "laravel/installer"
确保 ~/.composer/vendor/bin 在系统路径中，否则不能在任意路径调用 laravel 命令。
安装完成后，通过简单的 laravel new 命令即可在当前目录下创建一个新的 Laravel 应用，例如，laravel new blog 将会创建一个名为 blog 的新应用，且包含所有  Laravel 依赖。该安装方法比通过 Composer 安装要快很多：laravel new blog(这个方法我没试过，我是使用第二种)

    (2)通过 Composer Create-Project 

你还可以在终端中通过 Composer 的 create-project 命令来安装 Laravel 应用：

    composer create-project laravel/laravel --prefer-dist blog;
这样就安装了一个blog的项目！
对于composer没有安装好的同学，那就使用 composer.phar！

这样就结束啦，是不是很简单！

这边推荐一些有关laravel的网站：
* http://www.golaravel.com/
* http://laravelacademy.org/
* https://laravel-china.org/

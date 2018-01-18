# session-provider

session 服务提供器。

### 安装

```
$ composer require fastd/session-provider
```

添加 ServiceProvider 到 `app.php` 

```php
<?php

return [
     'services' => [
            // ......
            \FastD\Session\SessionServiceProvider::class,
     ],
];
```

当框架启动的时候，Session ServiceProvider 会自动给路由器添加 `SessionMiddleware`, 此时 `SessionMiddleware` 会初始化 Session 会话组件。

由于 Session 是通过 Middleware 实现的，如此类推，您也可以实现自己的会话扩展。

添加完成后，通过函数 `session` 进行操作。

* session()->get($key);
* session()->set($key, $value);
* session()->has($key);
* session()->delete($key);

### 贡献

非常欢迎感兴趣，愿意参与其中，共同打造更好PHP生态，Swoole生态的开发者。

如果你乐于此，却又不知如何开始，可以试试下面这些事情：

* 在你的系统中使用，将遇到的问题 [反馈](https://github.com/JanHuang/fastD/issues)。
* 有更好的建议？欢迎联系 [bboyjanhuang@gmail.com](mailto:bboyjanhuang@gmail.com) 或 [新浪微博:编码侠](http://weibo.com/ecbboyjan)。

### 联系

如果你在使用中遇到问题，请联系: [bboyjanhuang@gmail.com](mailto:bboyjanhuang@gmail.com). 微博: [编码侠](http://weibo.com/ecbboyjan)

## License MIT
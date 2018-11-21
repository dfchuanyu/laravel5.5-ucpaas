## laravel5.5-ucpaas

先composer require dfchuanyu/laravel5.5-ucpaas  

或在composer.json添加

```
dfchuanyu/laravel5.5-ucpaas：‘~1.0’    
```
运行 composer update

在 app/config/app.php的providers数组里加入

```
Dfchuanyu\Ucpaas\UcpaasServiceProvider::class,
```
aliases 数组里加入

```
'Ucpaas' => Dfchuanyu\Ucpaas\Facades\Ucpaas::class,
```
运行

```
php artisan vendor:publish --provider="Dfchuanyu\Ucpaas\UcpaasServiceProvider"
```

发送短信

```
/**
 单条发送短信的function，适用于注册/找回密码/认证/操作提醒等单个用户单条短信的发送场景
 * @param $appid        应用ID
 * @param $mobile       接收短信的手机号码
 * @param $templateid   短信模板，可在后台短信产品→选择接入的应用→短信模板-模板ID，查看该模板ID
 * @param null $param   变量参数，多个参数使用英文逗号隔开（如：param=“a,b,c”）
 * @param $uid			用于贵司标识短信的参数，按需选填。
 * @return mixed|string
 * @throws Exception
 */
Ucpaas::sendSms($appid,$templateid,$param=null,$mobile,$uid;
```
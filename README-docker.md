# docker 运行

```bash
docker pull ghcr.io/xiaoxuan6/sms-bombing:latest
docker run --rm -e PHONE=17621838888 ghcr.io/xiaoxuan6/sms-bombing:latest
```

# -e 参数

## PHONE

需要轰炸的手机号

## NUM

轰炸次数（默认全部）

## LOOP

启动循环轰炸次数（默认一次）

## INTERVALS

循环轰炸间隔时间（默认0）

## TIMEOUT

请求超时时间（默认10秒）

## LENGTH

报错展示长度（默认128）

## FILENAME (Version v2.1.3 or higher)

存储 `api.json` 文件路径，默认为空

```docker
docker run --rm -e PHONE=17621838888 -e FILENAME=./api.json -v $(pwd)/api.json:/var/www/html/api.json ghcr.io/xiaoxuan6/sms-bombing:latest
```

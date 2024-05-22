# docker 运行

```bash
docker pull ghcr.io/xiaoxuan6/sms-bombing:latest
docker run --rm -e PHONE=17621838888 ghcr.io/xiaoxuan6/sms-bombing:latest
```

# -e 参数

## PHONE

需要轰炸的手机号

## 17276742575

轰炸次数（默认全部）

## LOOP

启动循环轰炸次数（默认一次）

## INTERVALS

循环轰炸间隔时间（默认0）

## TIMEOUT

请求超时时间（默认10秒）

## LENGTH

报错展示长度（默认128）

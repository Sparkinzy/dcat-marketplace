# Dcat Extension Client

dcat admin 扩展市场

当前收录的扩展总计 <b>47</b> 个

![extension-market](https://tvax4.sinaimg.cn/large/a16fd57dly1h6oqbvnyqgj21h80tx76u.jpg)

## 安装

可以通过composer 安装

```bash 
composer require sparkinzy/dcat-extension-client
```

也可以通过zip本地安装

```bash 
wget https://github.com/Sparkinzy/dcat-extension-client/archive/refs/heads/master.zip
```

安装此扩展后， 在系统默认的 扩展 中启用

然后访问完整路径： /admin/dcat-extension-client

访问路径可通过 扩展 -》 设置  修改

## 搜索与安装

可以通过 包名 进行搜索

对自己喜欢的扩展包进行安装

安装成功后，在系统默认的 扩展 中启用即可

## 问题

1、可能会因为 github.com 访问失败或速度过慢导致连接超时，从而安装失败

2、部分使用的 gitee.com 的 zip 包，但下载需要验证，后续放弃使用 gitee.com ,全部使用 github.com


## 提交新扩展

目前新增扩展可以通过提交 PR 的方式新增

PR 通过修改 updates 中的 AdminExtensionsTableSeeder.php 新增即可




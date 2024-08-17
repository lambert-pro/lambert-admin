## 以下是一些琐碎的问题

1. 为了解决在不同电脑中数据库配置的差异，应该在backend文件夹中创建.env文件，用于配置数据库，模板如下：
~~~
APP_DEBUG = true

DB_TYPE = mysql
DB_HOST = database
DB_NAME = lambert-admin
DB_USER = root
DB_PASS =
DB_PORT = 3306
DB_CHARSET = utf8

DEFAULT_LANG = zh-cn
~~~

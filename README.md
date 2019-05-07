# bitrix_start_template
Start snippets

## Желаемая структура папки local
    /local/templates/
    
    /local/php_interface/
    
    /local/php_interface/init.php
    
    /local/php_interface/include - Подключаемые файлы 
    
    /local/include - Включаемые области
    
    /local/css/
    
    /local/js/
    
    /local/ajax/
    
    /local/components/

/local/php_interface/**init.php** Файл может содержать в себе ТОЛЬКО подключение файлов, которые содержат инициализацию обработчиков событий, подключение дополнительных функций - общие для всех сайтов. Для каждого отдельного сайта может быть свой аналогичный файл. В этом случае он располагается по пути /bitrix/php_interface/ID сайта/init.php

*Чтобы init.php не превращался в свалку непонятного кода следует код размещать логически группируя по файлам и классам.*


## Установка:

```
git clone https://github.com/Sadovikow/bitrix_start_template.git && \
mv bitrix_start_template/local/ ./ &&  \
rm -rf local/
```

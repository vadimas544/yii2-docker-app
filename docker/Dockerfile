# Базовый образ с nginx и php
FROM richarvey/nginx-php-fpm

# Добавляем наше веб приложение
ADD beesweet.ua /var/www/beesweet.ua

# Удаляем конфиги сайтов которые там есть
RUN rm -Rf /etc/nginx/sites-enabled/*

# Добавляем наш конфиг
ADD docker/conf/nginx/beesweet.ua.conf /etc/nginx/sites-available/beesweet.ua.conf
ADD docker/conf/nginx/adm.beesweet.ua.conf /etc/nginx/sites-available/adm.beesweet.ua.conf

# Включаем его
RUN ln -s /etc/nginx/sites-available/beesweet.ua.conf /etc/nginx/sites-enabled/beesweet.ua.conf
RUN ln -s /etc/nginx/sites-available/adm.beesweet.ua.conf /etc/nginx/sites-enabled/adm.beesweet.ua.conf


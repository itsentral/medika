FROM php:7.4-apache

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/
RUN chmod +x /usr/local/bin/install-php-extensions

RUN install-php-extensions intl pdo_mysql mysqli mbstring zip
RUN a2enmod rewrite

COPY ./docker/apache/000-default.conf /etc/apache2/sites-available/000-default.conf

WORKDIR /var/www/html
COPY . .

# Pastikan folder writable ada & aman permission-nya
RUN mkdir -p writable \
    && chown -R www-data:www-data writable/ \
    && chmod -R 775 writable/

EXPOSE 80
CMD ["apache2-foreground"]

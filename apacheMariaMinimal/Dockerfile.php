# Utiliser une image de base Alpine pour PHP et Apache
FROM php:8.1-fpm-alpine

# Installer les extensions nécessaires
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copier le contenu du site dans le conteneur
COPY ./public-html/ /var/www/html/

# Exposer le port 80
EXPOSE 80

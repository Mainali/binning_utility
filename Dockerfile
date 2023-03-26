FROM laravelsail/php81-composer:latest

COPY . /usr/src/binning_utility/
WORKDIR /usr/src/binning_utility
RUN composer update

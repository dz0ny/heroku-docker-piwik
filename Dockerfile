FROM heroku/heroku:16

RUN useradd -d /app -m app
USER app

ENV HOME /app
ENV PORT 3000
ENV PATH /app/.heroku/php/bin:/app/.heroku/php/sbin:/tmp/php-pack/bin:$PATH
ENV STACK heroku-16
ENV DOCKER_BUILD 1


RUN mkdir -p /app/.heroku
RUN mkdir -p /tmp/app
RUN mkdir -p /app/src
RUN mkdir -p /app/.profile.d
RUN mkdir -p /tmp/php-pack
RUN mkdir -p /tmp/cache
RUN mkdir -p /tmp/environment

WORKDIR /app/
RUN git clone https://github.com/heroku/heroku-buildpack-php.git /tmp/php-pack --depth 1

COPY . /app
RUN bash -l /tmp/php-pack/bin/compile /app /tmp/cache /app/.env
RUN rm vendor/piwik/piwik/config/config.ini.php
RUN rm -rf /tmp/cache
RUN rm -rf /tmp/php-pack

RUN cd vendor/piwik/piwik/misc \
 && curl http://geolite.maxmind.com/download/geoip/database/GeoLiteCity.dat.gz > GeoLiteCity.dat.gz \
 && gunzip GeoLiteCity.dat.gz \
 && mv GeoLiteCity.dat GeoIPCity.dat

ENTRYPOINT ["/app/entrypoint.sh"]
CMD ["/app/vendor/heroku/heroku-buildpack-php/bin/heroku-php-nginx -C nginx.conf -F fpm_custom.conf vendor/piwik/piwik/"]
EXPOSE 3000

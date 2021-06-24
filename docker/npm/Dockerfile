FROM node

LABEL image.authors Baltasar Santos <baltasarc.s@gmail.com>

RUN apt-get update \
  && npm install -g @vue/cli @vue/cli-service-global \
  && rm -rf /tmp/* /var/cache/apk/* *.tar.gz ~/.npm \
  && npm cache clear --force \
  && yarn cache clean \
  && sed -i -e "s/bin\/ash/bin\/sh/" /etc/passwd

USER node

WORKDIR /var/www

EXPOSE 8000

CMD npm install; npm run serve

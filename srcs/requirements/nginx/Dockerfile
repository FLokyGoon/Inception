FROM    alpine:3.18

WORKDIR /var/www/html

RUN     apk update && \
        apk upgrade && \
        apk add --no-cache nginx gettext


COPY    ./conf/default.template /etc/nginx/http.d/default.template


COPY    ./conf/entrypoint.sh /entrypoint.sh
RUN     chmod +x /entrypoint.sh

EXPOSE  $NGINX_PORT

#CMD ["nginx", "-g", "daemon off;"]
CMD     ["sh", "/entrypoint.sh"]
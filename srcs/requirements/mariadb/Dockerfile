FROM alpine:3.18


RUN apk update && \
    apk upgrade &&\
    apk add --no-cache \
    mariadb \
    mariadb-client \
    mariadb-server-utils

COPY ./conf/init.sh /init.sh


EXPOSE $SQL_PORT

CMD ["sh", "/init.sh"]
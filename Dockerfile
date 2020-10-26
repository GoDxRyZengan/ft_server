FROM debian:buster

COPY ./srcs/wordpress.sql .
COPY ./srcs/start.sh .
COPY ./srcs/index.html .
COPY ./srcs/localhost .
COPY ./srcs/wp-config.php .
COPY ./srcs/config.inc.php .

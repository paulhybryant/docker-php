ARG ARCH=docker.io
FROM ${ARCH}/php:apache

LABEL maintainer="paulhybryant@gmail.com"

COPY hooks/qemu-aarch64-static /usr/bin/

Add php/* /var/www/html/

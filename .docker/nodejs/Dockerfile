FROM node:14.2.0-alpine
ENV POSTMAN_APIKEY=''
RUN apk update && apk add git
RUN npm install -g @commitlint/cli @commitlint/config-conventional
RUN npm install -g git+https://github.com/acando14/apidoc.git#6ee34bc298880a6df7dc9a9cc17cbbaab8fe72be
ADD .docker/nodejs/conf/commitlint.config.js /

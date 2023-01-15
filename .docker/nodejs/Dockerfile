FROM node:14.2.0-alpine
ENV POSTMAN_APIKEY=''
RUN apk update && apk add git
RUN npm install -g @commitlint/cli @commitlint/config-conventional
ADD .docker/nodejs/conf/commitlint.config.js /

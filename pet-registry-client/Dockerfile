FROM node:21-alpine3.18

WORKDIR /src/app

COPY package.json yarn.lock ./

RUN yarn install

COPY . .

RUN yarn build

EXPOSE 8080

CMD yarn serve

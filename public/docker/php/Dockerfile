FROM php:8.1-cli

RUN apt-get update && apt-get install -y curl git zip \
  && rm -rf /var/lib/apt/lists/*





COPY --from=composer /usr/bin/composer /usr/bin/composer
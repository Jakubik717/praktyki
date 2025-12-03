# PHP exercises

## Run the project

### Using built-in PHP server using `docker run` with the official Docker PHP image

```shell
docker run --rm -v "$PWD":/var/www/html -p 8000:8000 php:cli php -S 0.0.0.0:8000 -t /var/www/html
```

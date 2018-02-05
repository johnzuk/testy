Repozytorium nauki phpunit

docker-compose up -d
docker-compose run --rm -w /usr/src/testy php composer install
docker-compose run --rm -w /usr/src/testy php ./vendor/bin/phpunit --configuration phpunit.xml tests
Repozytorium nauki phpunit

docker-compose run --rm -w /usr/src/testy php composer install
docker-compose run --rm -w /usr/src/testy php ./vendor/bin/phpunit --configuration phpunit.xml tests
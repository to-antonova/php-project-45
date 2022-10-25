# Makefile
install: # установить зависимости
	composer install
brain-games: # запуск php-файла
	./bin/brain-games
validate: # проверка файла composer.json
	composer validate
lint: # запуск phpcs
	composer exec --verbose phpcs -- --standard=PSR12 src bin
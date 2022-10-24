# Makefile
install: # установить зависимости
	composer install
brain-games: # запуск php-файла
	./bin/brain-games
validate: #проверка файла composer.json
	composer validate

# Makefile
install: # установить зависимости
	composer install
brain-games: # запуск php-файла
	./bin/brain-games
validate: # проверка файла composer.json
	composer validate
lint: # запуск phpcs
	composer exec --verbose phpcs -- --standard=PSR12 src bin
brain-even: # запуск игры "Проверка на четность"
	./bin/brain-even
brain-calc: # запуск игры "Калькулятор"
	./bin/brain-calc
brain-gcd: # запуск игры "НОД"
	./bin/brain-gcd

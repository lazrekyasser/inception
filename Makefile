

make: down build up
	

up:
	cd srcs && docker-compose up

down:
	cd srcs && docker-compose down

build:
	cd srcs && docker-compose build

rm_vol:
	sudo rm -rf ~/data/wp_file_data/*
	sudo rm -rf ~/data/wp_DB_data/*
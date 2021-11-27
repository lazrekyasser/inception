CTLIST=$(shell docker ps -qa)	
IMGLIST=$(shell docker images -qa)
VOLLIST=$(shell docker volume ls -q)


	# echo "yasser" | sudo chown -R ylazrek:ylazrek ~/data/wp_file_data
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
	sudo rm -rf ~/data/backup/*
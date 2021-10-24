

make: down build up
	

up:
	cd srcs && docker-compose up

down:
	cd srcs && docker-compose down

build:
	cd srcs && docker-compose build
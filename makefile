SHELL := /bin/bash
tests:
	symfony console doctrine:fixtures:load -n
	symfony run bin/phpunit
.PHONY: tests

up:
	sudo docker-compose up -d

workers_run:
	symfony run -d --watch=config,src,templates,vendor symfony console messenger:consume async

workers_stop:
	symfony console messenger:stop-workers
docker-run:
	docker compose up -d

docker-stop:
	docker compose stop

docker-restart:
	docker compose restart

docker-logs:
	docker compose logs -f

docker-sh:
	docker compose exec kimai bash

docker-sh-db:
	docker compose exec sqldb mysql -h localhost -u root -paigh7ao0Eij1EiCheeVae3ua --database kimai
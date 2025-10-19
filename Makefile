b:
	docker-compose -f compose.yaml build
u:
	docker-compose -f compose.yaml up -d
d:
	docker-compose -f compose.yaml down
cli:
	docker-compose -f compose.yaml exec php bash
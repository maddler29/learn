.PHONY: setup
setup:
	@-cp -n docker-compose.yml.example docker-compose.yml
	@-cp -n ./backend/.env.example ./backend/.env
	@docker compose build --no-cache
	@docker compose run --rm composer install
	@docker compose run --rm node npm ci
	@docker compose run --rm node npm run dev

.PHONY: reset
reset:
	@-cp -n docker-compose.yml.example docker-compose.yml
	@make clear
	@rm -rf ./backend/node_modules
	@rm -rf ./backend/vendor
	@make setup
	@make up
	sleep 30
	@make init-db

.PHONY: init-db
init-db:
	@docker compose exec learn php artisan migrate:refresh

.PHONY: clear
clear:
	@docker-compose down --volumes

.PHONY: up
up:
	@docker compose up -d nginx learn mysql

.PHONY: down
down:
	@docker compose down

.PHONY: watch
watch:
	@docker compose run --rm node npm run watch

.PHONY: fix
fix:
	@docker compose exec learn ./vendor/bin/php-cs-fixer fix -vv

.DEFAULT_GOAL := help

help:
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'

install: ## Install the project for dev purpose
	docker compose create
	docker compose run --rm php composer install

phpstan: ## Run PHPStan to statically analyze the code
	docker compose run --rm -e XDEBUG_MODE=off php ./vendor/bin/phpstan analyse

cs-fixer: ## Run cs-fixer to fix code to follow the standard
	docker compose run --rm -e XDEBUG_MODE=off php ./vendor/friendsofphp/php-cs-fixer/php-cs-fixer fix

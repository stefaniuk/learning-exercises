PWD := $(shell dirname $(realpath $(lastword $(MAKEFILE_LIST))))

help:
	@echo
	@echo "Usage:"
	@echo
	@echo "    make build|create|start|clean"
	@echo

build:
	@docker build \
		--tag zend-di \
		--rm \
		.
create:
	@docker create --interactive --tty \
		--name="zend-di" --hostname="zend-di" \
		--volume="$(PWD):/project" \
		zend-di
start:
	@docker start \
		zend-di
dependencies:
	@docker exec --interactive --tty \
		zend-di \
		/bin/bash -c 'cd $(PWD); composer update'
test:
	@if [ "$(NAME)" = "" ]; then \
		docker exec --interactive --tty zend-di /bin/bash -c '\
			cd $(PWD); vendor/bin/phpunit --testdox'; \
	else \
		docker exec --interactive --tty zend-di /bin/bash -c '\
			cd $(PWD); vendor/bin/phpunit --testdox test/$(NAME)Test.php'; \
	fi
clean:
	@docker stop zend-di > /dev/null 2>&1 ||:
	@docker rm zend-di > /dev/null 2>&1 ||:

.PHONY: test

PWD := $(shell dirname $(realpath $(lastword $(MAKEFILE_LIST))))
NAME := apigility

help:
	@echo
	@echo "Usage:"
	@echo
	@echo "    make start|stop|restart"
	@echo "    make dependencies|bash|log"
	@echo

start:
	@docker start $(NAME)
stop:
	@docker stop $(NAME)
restart: stop start

log:
	@docker logs --follow $(NAME)
bash:
	@docker exec -it $(NAME) /bin/bash --login

dependencies:
	@docker exec -it $(NAME) /bin/bash -c 'cd $(PWD); composer update'
clean:
	@rm log/*.log
	@rm data/cache/*.php
	@rm -rf vendor

.PHONY: log
.SILENT:

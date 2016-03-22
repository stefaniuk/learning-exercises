help:
	@echo
	@echo "Usage:"
	@echo
	@echo "    make build|run|clean"
	@echo

build:
	@docker build --tag zend-di --rm .
run:
	# TODO
clean:
	@docker stop zend-di > /dev/null 2>&1 ||:
	@docker rm zend-di > /dev/null 2>&1 ||:
	@docker rmi zend-di > /dev/null 2>&1 ||:

DIR := php/assets/var/www

bash:
	@docker exec --interactive --tty php /bin/bash --login
dependencies:
	@docker exec --interactive --tty php /bin/bash -c 'composer update'
run:
	@docker exec --interactive --tty php /bin/bash -c 'php src/redis.php'
clean:
	@rm -f $(DIR)/log/*.log
	@rm -f $(DIR)/composer.lock
	@rm -rf $(DIR)/vendor

.SILENT:

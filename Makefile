include ./srcs/.env
export

all:
	@sudo mkdir -p $(ABSOLUTE_PATH)/requirements/mariadb/data
	@sudo mkdir -p $(ABSOLUTE_PATH)/requirements/wordpress/data
	@sudo chmod 777 $(ABSOLUTE_PATH)/requirements/mariadb/data
	@sudo chmod 777 $(ABSOLUTE_PATH)/requirements/wordpress/data
	@cd srcs && docker-compose up --build -d

clean:
	@cd srcs && docker-compose down

fclean:
	@make clean
	@echo "Removing all the containers, images and volumes"
	@docker system prune -a -f --volumes
	@docker network prune -f
	@docker network rm $$(docker network ls -q) 2>/dev/null || true
	@docker volume rm $$(docker volume ls -qf dangling=true) 2>/dev/null || true
	@sudo rm -rf $(ABSOLUTE_PATH)/requirements/mariadb/data
	@sudo rm -rf $(ABSOLUTE_PATH)/requirements/wordpress/data
re:
	make fclean
	make all



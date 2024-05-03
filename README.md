# Inception - System Administration with Docker 🐳

## 📜 Introduction
Inspired by Docker's ability to simplify software delivery by containerizing applications, this project, dubbed "Inception," involves setting up a small infrastructure composed of various services using Docker Compose, all within a virtual machine environment.

## 🎯 Objectives
- **System Administration**: Gain practical experience with Docker to manage and deploy services.
- **Automation**: Use `docker-compose` and `Makefile` to automate the setup of multiple containers.
- **Security**: Implement TLS for secure communication and manage sensitive data through environment variables.

## 🛠️ Technologies Used
- **Docker**: For containerization and management of service dependencies.
- **Docker Compose**: To define and run multi-container Docker applications.
- **Makefile**: To automate the building and running of Docker containers.
- **NGINX**: Used as a reverse proxy to handle HTTPS connections.
- **MariaDB**: For database management for WordPress.
- **WordPress**: Hosted in a container, using PHP-FPM without NGINX.

## 🔧 Setup Instructions

### Prerequisites
- Ensure Docker and Docker Compose are installed on your virtual machine.
- Clone the repository to your local machine.

  ```bash
  git clone <repository-link>

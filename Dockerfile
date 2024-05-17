
FROM php:7.4-apache

# Copy your PHP application files into the container
COPY ./home.php ~/project

# Install XAMPP dependencies
RUN apt-get update && \
    apt-get install -y --no-install-recommends \
        apache2 \
        mysql-server \
        phpmyadmin \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Expose ports for Apache and MySQL
EXPOSE 80 3306

# Set environment variables for MySQL root user and password
ENV MYSQL_ROOT_PASSWORD=password
ENV MYSQL_USER=user
ENV MYSQL_PASSWORD=password

# Start Apache and MySQL services
CMD ["apache2ctl", "-D", "FOREGROUND"]

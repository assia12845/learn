# Use the official PHP image with Apache
FROM php:8.0-apache


# Set the working directory
WORKDIR /var/www/html

# Copy the source code into the /var/www/html directory in the container
COPY . .
RUN chmod 777 ./shadowi.txt

# Install necessary PHP extensions (if needed)
RUN docker-php-ext-install mysqli

# Enable Apache modules (if needed)
RUN a2enmod rewrite

# Specify home.php as the default document (choose one option)

# Option 1: Using Docker Default Document
RUN echo "DirectoryIndex home.php" >> /etc/apache2/sites-available/000-default.conf

# Option 2: Using Custom Apache Configuration (create custom.conf file as instructed)
# RUN a2enmod rewrite && cp /path/to/your/custom.conf /etc/apache2/sites-enabled/000-default.conf

# Expose port 80
EXPOSE 80

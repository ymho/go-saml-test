FROM php:7.4-apache
ADD ./saml-idp/web/simplesamlphp /var/simplesamlphp
ADD ./saml-idp/web/www/html /var/www/html
ADD ./saml-idp/web/sites-available/idp.example.com.conf /etc/apache2/sites-available/idp.example.com.conf
RUN a2ensite idp.example.com
RUN chown -R www-data:www-data /var/simplesamlphp
RUN chown -R www-data:www-data /var/www/html
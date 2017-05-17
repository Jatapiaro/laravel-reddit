# laravel-reddit

Pasos de instalación de Laravel (Usando Ampps):

1. Cambiar el php por defecto a 5.6
2. Activar las extensiones:
    -Mcrypt PHP Extension.
    -OpenSSL PHP Extension.
    -Mbstring PHP Extension.
    -Tokenizer PHP Extension.
    -Zip.so
    -Ctype
3. export AMPPS_PHP=/Applications/AMPPS/php/bin
4. export PATH="$AMPPS_PHP:$PATH"
5. sudo curl -sS https://getcomposer.org/installer | php
6. sudo mv composer.phar /usr/local/bin/composer
6. composer global require "laravel/installer=" o composer global require "laravel/installer=~1.1"
7. export PATH="~/.composer/vendor/bin:$PATH"
8. echo 'export PATH="$HOME/.composer/vendor/bin:$PATH"' > ~/.bashrc
9. source ~/.bashrc

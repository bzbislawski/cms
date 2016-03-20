How to start:

1. Install vagrant and virtualbox/vmware
2. Install box for homestead

vagrant box add laravel/homestead 
or laravel/homestead-7 if u want php 7.0

3. Type _ to get homestead executable access:
composer global require "laravel/homestead=~2.0"

4. Try homestead command to check if is visible by the system
homestead

5. If homestead is not recognized then type whats written below, other way skip this step
export PATH="~/.composer/vendor/bin:$PATH"

6. Initialize homestead
homestead init

7. Set up Homestead.yaml in ~/.homestead. Can look like something like this:
folders:
    - map: ~/www/one
      to: /home/vagrant/Code
    - map: ~/www/two
      to: /home/vagrant/test

sites:
    - map: handmade.dev
      to: /home/vagrant/Code/public
    - map: test.dev
      to: /home/vagrant/test

Catalogues one and two are placed on your OS, Code and test on vagrant/Homestead

8. To make domains work in your browser go to /etc/hosts file and append there

192.168.10.10 handmade.dev
192.168.10.10 test.dev

9. You are ready to go, remember about .env file and migrating database.

10. Good job!
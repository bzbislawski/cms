How to start:

1. Install vagrant and virtualbox/vmware
2. Install box for homestead


```
#!bash

vagrant box add laravel/homestead
```

or if u want php 7.0

```
#!bash

laravel/homestead-7 
```


3. Type this command to get homestead executable access:

```
#!bash

composer global require "laravel/homestead=~2.0"
```


Try homestead command to check if is visible by the system

```
#!bash

homestead
```


If homestead is not recognized then type whats written below, other way skip this step

```
#!bash

export PATH="~/.composer/vendor/bin:$PATH"
```


Initialize homestead

```
#!bash

homestead init
```


Set up Homestead.yaml in ~/.homestead. Can look like something like this:

```
#!yaml

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
```


Catalogues one and two are placed on your OS, Code and test on vagrant/Homestead

To make domains work in your browser go to /etc/hosts file and append there


```
#!bash

192.168.10.10 handmade.dev
192.168.10.10 test.dev
```


You are ready to go, remember about .env file and migrating database.

Good job & good luck!
Using worker: worker-linux-docker-c6e2483e.prod.travis-ci.org:travis-linux-4

Build system information
Build language: php
Build group: stable
Build dist: precise
Build image provisioning date and time
Thu Feb  5 15:09:33 UTC 2015
Operating System Details
Distributor ID:	Ubuntu
Description:	Ubuntu 12.04.5 LTS
Release:	12.04
Codename:	precise
Linux Version
3.13.0-29-generic
Cookbooks Version
a68419e https://github.com/travis-ci/travis-cookbooks/tree/a68419e
GCC version
gcc (Ubuntu/Linaro 4.6.3-1ubuntu5) 4.6.3
Copyright (C) 2011 Free Software Foundation, Inc.
This is free software; see the source for copying conditions.  There is NO
warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.

LLVM version
clang version 3.4 (tags/RELEASE_34/final)
Target: x86_64-unknown-linux-gnu
Thread model: posix
Pre-installed Ruby versions
ruby-1.9.3-p551
Pre-installed Node.js versions
v0.10.36
Pre-installed Go versions
1.4.1
Redis version
redis-server 2.8.19
riak version
2.0.2
MongoDB version
MongoDB 2.4.12
CouchDB version
couchdb 1.6.1
Neo4j version
1.9.4
RabbitMQ Version
3.4.3
ElasticSearch version
1.4.0
Installed Sphinx versions
2.0.10
2.1.9
2.2.6
Default Sphinx version
2.2.6
Installed Firefox version
firefox 31.0esr
PhantomJS version
1.9.8
ant -version
Apache Ant(TM) version 1.8.2 compiled on December 3 2011
mvn -version
Apache Maven 3.2.5 (12a6b3acb947671f09b81f49094c53f426d8cea1; 2014-12-14T17:29:23+00:00)
Maven home: /usr/local/maven
Java version: 1.7.0_76, vendor: Oracle Corporation
Java home: /usr/lib/jvm/java-7-oracle/jre
Default locale: en_US, platform encoding: ANSI_X3.4-1968
OS name: "linux", version: "3.13.0-29-generic", arch: "amd64", family: "unix"

$ export DEBIAN_FRONTEND=noninteractive
W: Size of file /var/lib/apt/lists/dl.hhvm.com_ubuntu_dists_precise_main_binary-amd64_Packages.gz is not what the server reported 2047 2461
W: Size of file /var/lib/apt/lists/us.archive.ubuntu.com_ubuntu_dists_precise-backports_multiverse_source_Sources.gz is not what the server reported 5886 5888
W: Size of file /var/lib/apt/lists/ppa.launchpad.net_ubuntugis_ppa_ubuntu_dists_precise_main_binary-amd64_Packages.gz is not what the server reported 36669 36677
W: Size of file /var/lib/apt/lists/ppa.launchpad.net_ubuntugis_ppa_ubuntu_dists_precise_main_binary-i386_Packages.gz is not what the server reported 36729 36733
Reading package lists...
Building dependency tree...
Reading state information...
The following extra packages will be installed:
  libc-bin libc-dev-bin libc6-dev
Suggested packages:
  glibc-doc
The following packages will be upgraded:
  libc-bin libc-dev-bin libc6 libc6-dev
4 upgraded, 0 newly installed, 0 to remove and 239 not upgraded.
Need to get 8,840 kB of archives.
After this operation, 14.3 kB disk space will be freed.
Get:1 http://us.archive.ubuntu.com/ubuntu/ precise-updates/main libc6-dev amd64 2.15-0ubuntu10.15 [2,943 kB]
Get:2 http://us.archive.ubuntu.com/ubuntu/ precise-updates/main libc-dev-bin amd64 2.15-0ubuntu10.15 [84.7 kB]
Get:3 http://us.archive.ubuntu.com/ubuntu/ precise-updates/main libc-bin amd64 2.15-0ubuntu10.15 [1,177 kB]
Get:4 http://us.archive.ubuntu.com/ubuntu/ precise-updates/main libc6 amd64 2.15-0ubuntu10.15 [4,636 kB]
Fetched 8,840 kB in 0s (36.1 MB/s)
Preconfiguring packages ...
(Reading database ... 70845 files and directories currently installed.)
Preparing to replace libc6-dev 2.15-0ubuntu10.10 (using .../libc6-dev_2.15-0ubuntu10.15_amd64.deb) ...
Unpacking replacement libc6-dev ...
Preparing to replace libc-dev-bin 2.15-0ubuntu10.10 (using .../libc-dev-bin_2.15-0ubuntu10.15_amd64.deb) ...
Unpacking replacement libc-dev-bin ...
Preparing to replace libc-bin 2.15-0ubuntu10.10 (using .../libc-bin_2.15-0ubuntu10.15_amd64.deb) ...
Unpacking replacement libc-bin ...
Processing triggers for man-db ...
Setting up libc-bin (2.15-0ubuntu10.15) ...
(Reading database ... 70844 files and directories currently installed.)
Preparing to replace libc6 2.15-0ubuntu10.10 (using .../libc6_2.15-0ubuntu10.15_amd64.deb) ...
Unpacking replacement libc6 ...
Setting up libc6 (2.15-0ubuntu10.15) ...
Setting up libc-dev-bin (2.15-0ubuntu10.15) ...
Setting up libc6-dev (2.15-0ubuntu10.15) ...
Processing triggers for libc-bin ...
ldconfig deferred processing now taking place
$ git clone --depth=50 --branch=master https://github.com/marlenastaszek/tests_clearcode.git marlenastaszek/tests_clearcode
Cloning into 'marlenastaszek/tests_clearcode'...
remote: Counting objects: 2459, done.
remote: Compressing objects: 100% (1586/1586), done.
remote: Total 2459 (delta 747), reused 2451 (delta 739), pack-reused 0
Receiving objects: 100% (2459/2459), 1.59 MiB | 0 bytes/s, done.
Resolving deltas: 100% (747/747), done.
Checking connectivity... done.

$ cd marlenastaszek/tests_clearcode
$ git checkout -qf a79ac0aba5d9496776c726d658899c747a92b50e

This job is running on container-based infrastructure, which does not allow use of 'sudo', setuid and setguid executables.
If you require sudo, add 'sudo: required' to your .travis.yml
See https://docs.travis-ci.com/user/workers/container-based-infrastructure/ for details.
$ phpenv global 5.6 2>/dev/null

$ phpenv global 5.6

$ composer self-update
Updating to version b94e8ea21cb59d9ae141b0b63abf494ccfe8680f.
    Downloading: connection...    Downloading: 100%         
Use composer self-update --rollback to return to version 1d8f05f1dd0e390f253f79ea86cd505178360019

$ php --version
PHP 5.6.5 (cli) (built: Feb 12 2015 01:41:10) 
Copyright (c) 1997-2014 The PHP Group
Zend Engine v2.6.0, Copyright (c) 1998-2014 Zend Technologies
    with Zend OPcache v7.0.4-dev, Copyright (c) 1999-2014, by Zend Technologies
    with Xdebug v2.2.7, Copyright (c) 2002-2015, by Derick Rethans
$ composer --version
You are running composer with xdebug enabled. This has a major impact on runtime performance. See https://getcomposer.org/xdebug
Composer version 1.2-dev (b94e8ea21cb59d9ae141b0b63abf494ccfe8680f) 2016-07-04 16:22:09

$ composer install
You are running composer with xdebug enabled. This has a major impact on runtime performance. See https://getcomposer.org/xdebug
Loading composer repositories with package information
Installing dependencies (including require-dev) from lock file
  - Installing psr/log (1.0.0)
    Downloading: Connecting...    Downloading: 0%               Downloading: 15%    Downloading: 30%    Downloading: 45%    Downloading: 60%    Downloading: 75%    Downloading: 100%

  - Installing monolog/monolog (1.20.0)
    Downloading: Connecting...    Downloading: 0%               Downloading: 5%    Downloading: 10%    Downloading: 15%    Downloading: 20%    Downloading: 25%    Downloading: 30%    Downloading: 35%    Downloading: 40%    Downloading: 45%    Downloading: 50%    Downloading: 55%    Downloading: 60%    Downloading: 65%    Downloading: 70%    Downloading: 75%    Downloading: 80%    Downloading: 85%    Downloading: 90%    Downloading: 95%    Downloading: 100%

  - Installing phpdocumentor/reflection-docblock (2.0.4)
    Downloading: Connecting...    Downloading: 0%               Downloading: 15%    Downloading: 20%    Downloading: 40%    Downloading: 45%    Downloading: 60%    Downloading: 75%    Downloading: 80%    Downloading: 95%    Downloading: 100%

  - Installing symfony/yaml (v2.7.3)
    Downloading: Connecting...    Downloading: 0%               Downloading: 5%    Downloading: 10%    Downloading: 35%    Downloading: 40%    Downloading: 85%    Downloading: 90%    Downloading: 95%    Downloading: 100%

  - Installing symfony/process (v2.7.3)
    Downloading: Connecting...    Downloading: 100%         

  - Installing symfony/finder (v2.7.3)
    Downloading: Connecting...    Downloading: 100%         

  - Installing symfony/event-dispatcher (v2.7.3)
    Downloading: Connecting...    Downloading: 0%               Downloading: 5%    Downloading: 10%    Downloading: 15%    Downloading: 100%

  - Installing symfony/console (v2.7.3)
    Downloading: Connecting...    Downloading: 0%               Downloading: 5%    Downloading: 10%    Downloading: 15%    Downloading: 20%    Downloading: 25%    Downloading: 30%    Downloading: 35%    Downloading: 40%    Downloading: 45%    Downloading: 50%    Downloading: 55%    Downloading: 60%    Downloading: 65%    Downloading: 70%    Downloading: 75%    Downloading: 80%    Downloading: 85%    Downloading: 90%    Downloading: 95%    Downloading: 100%

  - Installing sebastian/recursion-context (1.0.1)
    Downloading: Connecting...    Downloading: 0%               Downloading: 35%    Downloading: 70%    Downloading: 100%

  - Installing sebastian/exporter (1.2.1)
    Downloading: Connecting...    Downloading: 0%               Downloading: 70%    Downloading: 100%

  - Installing sebastian/diff (1.3.0)
    Downloading: Connecting...    Downloading: 0%               Downloading: 15%    Downloading: 100%

  - Installing sebastian/comparator (1.2.0)
    Downloading: Connecting...    Downloading: 0%               Downloading: 10%    Downloading: 20%    Downloading: 30%    Downloading: 40%    Downloading: 45%    Downloading: 55%    Downloading: 65%    Downloading: 75%    Downloading: 85%    Downloading: 95%    Downloading: 100%

  - Installing doctrine/instantiator (1.0.5)
    Downloading: Connecting...    Downloading: 0%               Downloading: 15%    Downloading: 30%    Downloading: 45%    Downloading: 60%    Downloading: 75%    Downloading: 90%    Downloading: 100%

  - Installing phpspec/prophecy (v1.5.0)
    Downloading: Connecting...    Downloading: 0%               Downloading: 5%    Downloading: 10%    Downloading: 15%    Downloading: 20%    Downloading: 25%    Downloading: 30%    Downloading: 35%    Downloading: 40%    Downloading: 45%    Downloading: 50%    Downloading: 55%    Downloading: 60%    Downloading: 65%    Downloading: 70%    Downloading: 75%    Downloading: 80%    Downloading: 85%    Downloading: 90%    Downloading: 95%    Downloading: 100%

  - Installing phpspec/php-diff (v1.0.2)
    Downloading: Connecting...    Downloading: 0%               Downloading: 5%    Downloading: 35%    Downloading: 40%    Downloading: 100%

  - Installing phpspec/phpspec (2.2.1)
    Downloading: Connecting...    Downloading: 100%         

  - Installing phpunit/php-token-stream (1.4.6)
    Downloading: Connecting...    Downloading: 0%               Downloading: 5%    Downloading: 10%    Downloading: 15%    Downloading: 20%    Downloading: 25%    Downloading: 30%    Downloading: 35%    Downloading: 100%

  - Installing sebastian/version (1.0.6)
    Downloading: Connecting...    Downloading: 0%               Downloading: 100%

  - Installing sebastian/global-state (1.0.0)
    Downloading: Connecting...    Downloading: 0%               Downloading: 20%    Downloading: 40%    Downloading: 60%    Downloading: 80%    Downloading: 90%    Downloading: 100%

  - Installing sebastian/environment (1.3.2)
    Downloading: Connecting...    Downloading: 0%               Downloading: 100%

  - Installing phpunit/php-text-template (1.2.1)
    Downloading: Connecting...    Downloading: 0%               Downloading: 35%    Downloading: 100%

  - Installing phpunit/phpunit-mock-objects (2.3.7)
    Downloading: Connecting...    Downloading: 0%               Downloading: 5%    Downloading: 20%    Downloading: 35%    Downloading: 40%    Downloading: 45%    Downloading: 60%    Downloading: 65%    Downloading: 70%    Downloading: 85%    Downloading: 90%    Downloading: 95%    Downloading: 100%

  - Installing phpunit/php-timer (1.0.7)
    Downloading: Connecting...    Downloading: 0%               Downloading: 25%    Downloading: 100%

  - Installing phpunit/php-file-iterator (1.4.1)
    Downloading: Connecting...    Downloading: 0%               Downloading: 20%    Downloading: 40%    Downloading: 60%    Downloading: 80%    Downloading: 100%

  - Installing phpunit/php-code-coverage (2.2.2)
    Downloading: Connecting...    Downloading: 0%               Downloading: 5%    Downloading: 10%    Downloading: 15%    Downloading: 20%    Downloading: 25%    Downloading: 30%    Downloading: 35%    Downloading: 40%    Downloading: 45%    Downloading: 50%    Downloading: 55%    Downloading: 60%    Downloading: 65%    Downloading: 70%    Downloading: 75%    Downloading: 85%    Downloading: 90%    Downloading: 95%    Downloading: 100%

  - Installing phpunit/phpunit (4.8.6)
    Downloading: Connecting...    Downloading: 0%               Downloading: 5%    Downloading: 10%    Downloading: 15%    Downloading: 20%    Downloading: 25%    Downloading: 30%    Downloading: 35%    Downloading: 40%    Downloading: 45%    Downloading: 50%    Downloading: 55%    Downloading: 60%    Downloading: 65%    Downloading: 80%    Downloading: 90%    Downloading: 95%    Downloading: 100%

monolog/monolog suggests installing aws/aws-sdk-php (Allow sending log messages to AWS services like DynamoDB)
monolog/monolog suggests installing doctrine/couchdb (Allow sending log messages to a CouchDB server)
monolog/monolog suggests installing ext-amqp (Allow sending log messages to an AMQP server (1.0+ required))
monolog/monolog suggests installing ext-mongo (Allow sending log messages to a MongoDB server)
monolog/monolog suggests installing graylog2/gelf-php (Allow sending log messages to a GrayLog2 server)
monolog/monolog suggests installing mongodb/mongodb (Allow sending log messages to a MongoDB server via PHP Driver)
monolog/monolog suggests installing php-amqplib/php-amqplib (Allow sending log messages to an AMQP server using php-amqplib)
monolog/monolog suggests installing php-console/php-console (Allow sending log messages to Google Chrome)
monolog/monolog suggests installing rollbar/rollbar (Allow sending log messages to Rollbar)
monolog/monolog suggests installing ruflin/elastica (Allow sending log messages to an Elastic Search server)
monolog/monolog suggests installing sentry/sentry (Allow sending log messages to a Sentry server)
phpdocumentor/reflection-docblock suggests installing dflydev/markdown (~1.0)
phpdocumentor/reflection-docblock suggests installing erusev/parsedown (~1.0)
symfony/event-dispatcher suggests installing symfony/dependency-injection ()
symfony/event-dispatcher suggests installing symfony/http-kernel ()
phpspec/phpspec suggests installing phpspec/nyan-formatters (~1.0 – Adds Nyan formatters)
sebastian/global-state suggests installing ext-uopz (*)
phpunit/phpunit suggests installing phpunit/php-invoker (~1.1)
Generating autoload files

$ phpunit
PHPUnit 4.8.6 by Sebastian Bergmann and contributors.

.......

Time: 163 ms, Memory: 7.50Mb

OK (7 tests, 8 assertions)


The command "phpunit" exited with 0.

Done. Your build exited with 0.
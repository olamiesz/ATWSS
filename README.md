ATWSS
=====

Atlas Wireless Safety System (website)

Rebuild the website:

== checkout bootstrap in parallel
git clone https://github.com/twitter/bootstrap.git
cd boostrap
git checkout 3.0.0-wip

== Using Jekyl

yum install ruby
yum install ruby-devel		(ruby-dev on ubuntu)
yum install rubygems
yum install gcc
gem install jekyll

== connecting to Oracle
install oracle instance client including subdirectory 'sdk'
(linux) env LD_LIBRARY_PATH=$LD_LIBRARY_PATH /usr/bin/gem install ruby-oci8
(macos) env DYLD_LIBRARY_PATH=$DYLD_LIBRARY_PATH RC_ARCHS=$RC_ARCHS /usr/bin/gem install ruby-oci8

== configuration
cp config/oracle_example.rb config/oracle.rb
edit user/pwd into file

mount the videos directory in the root dir of the project

== check db test
ruby -rubygems db-test.rb

== build website
jekyll build


Mark Donszelmann

ATWSS
=====

Atlas Wireless Safety System (website)

Rebuild the website:

== Using Jekyl

yum install ruby
yum install ruby-devel		(ruby-dev on ubuntu)
yum install rubygems
yum install gcc
gem install jekyll

== connecting to Oracle
install oracle instance client including subdirectory 'sdk'
env DYLD_LIBRARY_PATH=$DYLD_LIBRARY_PATH RC_ARCHS=$RC_ARCHS /usr/bin/gem install ruby-oci8

== configuration
cp config/oracle_example.rb config/oracle.rb
edit user/pwd into file

== check db test
ruby -rubygems db-test.rb

== build website
jekyll build


Mark Donszelmann

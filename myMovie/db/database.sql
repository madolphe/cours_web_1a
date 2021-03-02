create database if not exists mymovies character set utf8 collate utf8_unicode_ci;
use mymovies;

grant all privileges on mymovies.* to 'mymovies_user'@'localhost' identified by 'secret';

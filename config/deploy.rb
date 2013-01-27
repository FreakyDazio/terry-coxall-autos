ssh_options[:forward_agent] = true
default_run_options[:pty] = true

set :application, 'terrycoxallautos_co_uk'
set :repository,  'git@github.com:FreakyDazio/terry-coxall-autos.git'
set :scm, :git
set :use_sudo, false
set :user, 'terrycoxall'
set :deploy_to, "/home/#{user}/#{application}"
set :scm_username, 'FreakyDazio'
set :branch, 'master'
set :deploy_via, :remote_cache

server '176.56.62.140', :web, :app, :db, primary: true

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

after 'deploy:update_code', 'deploy:prevent_htaccess_overwrite'
after 'deploy:symlink', 'deploy:symlink_config'
after 'deploy:symlink', 'deploy:symlink_uploads'
after 'deploy:update_code', 'deploy:symlink_sitemap'

namespace :deploy do
  task :symlink_uploads, roles: :app do
    run "ln -nfs #{shared_path}/uploads #{release_path}/wp-content/uploads"
  end

  task :symlink_sitemap, roles: :app do
    run "ln -nfs #{shared_path}/sitemaps/sitemap.xml #{release_path}/sitemap.xml"
    run "ln -nfs #{shared_path}/sitemaps/sitemap.xml.gz #{release_path}/sitemap.xml.gz"
  end

  task :symlink_config, roles: :app do
    run "ln -nfs #{shared_path}/config/wp-config.php #{release_path}/wp-config.php"
  end

  task :prevent_htaccess_overwrite, roles: :app do
    run "chmod 754 #{release_path}/.htaccess"
  end
end

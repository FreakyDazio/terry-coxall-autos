# -*- mode: ruby -*-
# vi: set ft=ruby :

# Vagrantfile API/syntax version. Don't touch unless you know what you're doing!
VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  config.vm.box = "debian-wheezy"
  config.vm.box_url = "https://dl.dropboxusercontent.com/u/86066173/debian-wheezy.box"
  config.vm.network :forwarded_port, guest: 80, host: 8080
  config.ssh.forward_agent = true
  # config.vm.synced_folder "../data", "/vagrant_data"
  config.vm.provision :puppet do |puppet|
    puppet.module_path    = "puppet/modules"
    puppet.manifests_path = "puppet/manifests"
    puppet.manifest_file  = "vagrant.pp"
  end
end

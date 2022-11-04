machines = {
  "master" => {"memory" => "1024", "cpu" => "2", "ip" => "207", "image" => "bento/ubuntu-22.04"},
  "node01" => {"memory" => "1024", "cpu" => "2", "ip" => "209", "image" => "bento/ubuntu-22.04"},
  "node02" => {"memory" => "1024", "cpu" => "2", "ip" => "111", "image" => "bento/ubuntu-22.04"}
}

Vagrant.configure("2") do |config|

  machines.each do |name, conf|
    config.vm.define "#{name}" do |machine|
      machine.vm.box = "#{conf["image"]}"
      machine.vm.hostname = "#{name}.veras.dev"
      machine.vm.network "public_network", ip: "150.165.250.#{conf["ip"]}"
      machine.vm.provider "virtualbox" do |vb|
        vb.name = "#{name}"
        vb.memory = conf["memory"]
        vb.cpus = conf["cpu"]
      end
      machine.vm.provision "shell", path: "instalar-docker.sh"

      if "#{name}" == "master"
        machine.vm.provision "shell", path: "master.sh"
        machine.vm.provision "shell", path: "instala-app.sh"
      else
        machine.vm.provision "shell", path: "worker.sh"
      end
    end
  end
end
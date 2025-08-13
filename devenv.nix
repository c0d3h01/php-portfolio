{
  config,
  pkgs,
  ...
}: {
  env.GREET = "devenv";
  git-hooks.hooks.shellcheck.enable = true;
  languages.javascript.enable = true;
  packages = with pkgs; [ ];
  
  languages.php = {
    enable = true;
    version = "8.2";
    fpm.pools.web = {
      settings = {
        "pm" = "dynamic";
        "pm.max_children" = 5;
        "pm.start_servers" = 2;
        "pm.min_spare_servers" = 1;
        "pm.max_spare_servers" = 5;
      };
    };
  };

  services.caddy = {
    enable = true;
    virtualHosts."http://localhost:8000" = {
      extraConfig = "
        root * public
        php_fastcgi unix/${config.languages.php.fpm.pools.web.socket}
        file_server
      ";
    };
  };
}

{
  inputs.nixpkgs.url = "github:NixOS/nixpkgs/nixos-unstable";

  outputs = { self, nixpkgs }:
  let
    systems = [ "x86_64-linux" "aarch64-linux" "x86_64-darwin" "aarch64-darwin" ];
    forAll = f: builtins.listToAttrs (map (system: { name = system; value = f system; }) systems);
  in {
    devShells = forAll (system:
      let
        pkgs = import nixpkgs { inherit system; };
      in {
        default = pkgs.mkShell {
          packages = with pkgs; [
            php
            just
            nodejs
            bun
          ];
        };
      });

    formatter = forAll (system:
      let pkgs = import nixpkgs { inherit system; };
      in pkgs.nixpkgs-fmt
    );
  };
}

# Random quotes - Package

Gera frases randomicas a partir de uma API 

O projeto utiliza o docker para o desenvolvimento

Foi criado o arquivo build, ele é um alias para facilitar a execução do docker.

----

## Arquivo build

Um arquivo bash do linux para executar os comandos do docker

> Atenção!! 
> 
> Quando estiver criando o arquivo build no WSL pode ocorrer o erro de *finais de linha estilo Windows `\r\n`* em vez dos `\n` finais esperados no `bash` 
> 
> Para remover este erro utilize o comando:
> ``` bash
> sed $'s/\r$//' ./build.sh > ./build
> ```
>
> Primeiro crie no windows o arquivo build.sh antes de executer este comando acima.
 

Conteudo do arquivo `build.sh`:

```bash
#!/usr/bin/env bash

docker run --rm -it \
    -u $(id -u):$(id -g) \
    -v $(pwd):/app \
    -w /app \
    composer:latest "$@"

```
Executar teste no build:

```bash
./build php -v
```
> Atenção! na primeira vez vai baixar a imagem docker

----

## Instalando dependencias 

* Pest PHP

    ```bash

    ./build composer require pestphp/pest --dev --with-all-dependencies

    ```
    > Atenção! confirme com yes a opção: `Do you trust "pestphp/pest-plugin" to execute code and wish to enable it now? (writes "allow-plugins" to composer.json) [y,n,d,?] y`

    Para iniciar o teste:

    ```bash	
    ./build vendor/bin/pest
    ```

* Guzzle HTTP

    ```bash
    ./build composer require guzzlehttp/guzzle
    ```






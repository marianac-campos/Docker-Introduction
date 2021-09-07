# Introdução ao Docker

Projeto gerado na videoaula do canal no YouTube do Programador a Bordo.
Link da aula: https://www.youtube.com/watch?v=Kzcz-EVKBEQ

## Como Rodar

### 👩‍💻 | Instalando dependências
Acesse a pasta `./api` no terminal e execute:

```
npm install
```

Com isso instalamos as dependências Node que precisamos. Utilizamos o Node 10.

### 🛠️ | Construindo as imagens

Acesse a pasta raíz do projeto e construa cada imagem (MySQL, Node API e PHP):

```
docker build -t mysql-image -f api/db/Dockerfile .
```

```
docker build -t node-image -f api/Dockerfile .
```

```
docker build -t php-image -f website/Dockerfile .
```

### 🎚️ | Rodando os containers
Na pasta raíz do projeto, execute um de cada vez:

```
docker run -d -v $(pwd)/api/db/data:/var/lib/mysql --rm --name mysql-container mysql-image
```

```
docker run -d -v $(pwd)/api:/home/node/app -p 9001:9001 --link mysql-container --rm --name node-container node-image
```

```
docker run -d -v "$(pwd)/website":/var/www/html -p 8888:80 --link node-container --rm --name php-container php-image
```

### 📥 | Agora faça o restore do banco de dados:

```
docker exec -i mysql-container mysql -uroot -pprogramadorabordo < api/db/script.sql
```

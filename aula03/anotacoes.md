## SGBD
Instalar e configurar o SGBD PostgreSQL

Comando para instalar

```bash
sudo apt install -y postgresql
```
>Obs: O comando sudo, no nosso caso, pode ser omitido pois já somos root.

Realizando verificação do SGBD
```bash
pg_lsclusters
```


Para realizar o acesso ao SGBD **sem senha** utilizar o comando :
```bash
suddo -u postgres psql
```
>Com esse comando o acesso é feito sem senha, pois o linux ja provou quem tu é (root). Autenticação PEER.

Para primeiro acesso, alterei a senha:

```sql
ALTER USER postgres PASSWORD '1234';
```

>O retorno correto, é `ALTER ROLE`

Para acessar o meu servidor fora do root usa o comando:
```bash
sudo psql -h 127.0.0.1 -u postgres
```
```mermaid
graph LR
A[Sudo -u postgre psql]--<b>Autenticação</b>-->B[Só funciona entrando dentro do próprio Linux]
```


```mermaid
graph LR
A[Sudo psql -h 127.0.0.1 -U postgres]--<b>Autenticação</b>-->B[Funciona vindo de qualquer máquina, porém é necessário inserir a senha]
```

---
## Configurações de serviço

> Caminho padrão para as configurações do Posgresql
![alt text](image.png)

Primeira configuração
```bash
sudo nano postgresql.conf
```
CTRL + W para buscar a linha do listen_addresses e descomentamos, alterando para *.

Se ficar localhost, somente o meu PC acessa.

Passo 2:
```bash
sudo nano pg_hba.conf
```
>Nas ultimas linhas, adicinei: 
`host all all 10.98.38.0/24 scram-sha-256`

Para criar um banco de dados, usamos o comando:

```sql
CREATE DATABASE lojamax;
```

Para visualizar os bancos:
```bash
\l
```

## Servidor de desenvolvimento
sera uma interface de desenvolvimento, utilizada para projetar aplicações e bando de dados.

```mermaid
graph LR
A[Cliente: Computador]<--Dados-->b[servidor: Datacenter]
```
--- 
## Servidor de Arquivos Educacional
É um servidor para armazenar aquivos e facilitar na hora de realizar a tranferência.

> O endereço para acesso ao servidor de arquivos é: `\\10.87.36.10`.

---
## Servidor Pessoal
O moda será a interface de acesso ao meu servidor de desenvolvimento
>O acesso, será realizado via `SSH`

>Credenciais de acesso: `IP: 192.168.10.100`, Username: `root` e a Porta: `2222`, Numero da chamada: `26`

### Para alterar a senha de acesso do linux
```bash
passwd
```
### Para visualiza as informações do meu servidor:
```bash
htop
```
### Para visualizar as informações do sistema (versão do OS, kernel, tempo ligado, memória RAM e outros detalhes)
```bash
neofetch
```

---
A utilizaçao de um servidor de desenvolvimento simula um ambiente de trabalho

- Deploy de projetos,
- Aplicação de banco de dados,
- Experiência real de mercado.


## Banco de dados
Antigamente, os dados eram salvos em arquivos/planilhas.

```mermaid
graph TD
p[Guardar dados]
-->a[Arquivo de texto]
p[Guardar dados]
-->b[Banco de dados]
a -->a1[Um usuario por vez]
a -->a2[Não possui backup]
a -->a3[Detalhes importantes ocultos]
b -->b1[Varios acessos]
b -->b2[consultas mais eficientes]
b -->b3[controle de acesso]
b -->b4[backup instantanio]
```
---
>mas afinal, onde entra o banco de dados em aplicações web🤔?

```mermaid
graph LR
A[Usuário]-->B[Aplicação WEB]-->C[(Banco de dados)]
```

## SGBD
Sistema Gerenciador de Banco de Dados.

>função: Gerenciar, Controlar e permitir consultas nos nossos bancos de dados

```mermaid
graph TD
A[SGBD- PostgreSQL] -->B[(banco de dados)]
A --> C[Armazena usuarios]
A --> D[Realiza consultas]
A --> E[ controla acessos]
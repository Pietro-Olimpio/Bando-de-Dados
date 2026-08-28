### Um pouco mais de comandos SQL
Para verificar se um banco de dados existe, antes de apagar:
```sql
DROP DATABASE IF EXISTS produtos;
```
e retorna uma mensagem de notice, não de erro.

---

```sql
CREATE TABLE produtos(
    id SERIAL PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    categoria VARCHAR(50) NOT NULL,
    preco DECIMAL(10,2) NOT NULL,
    estoque INT NOT NULL
);
```
---

Para verificar a quantidade de linhas do nosso banco:
```sql
SELECT COUNT(*) FROM produtos;
``` 
---

Filtro de colunas e limitação de saídas:
```sql
SELECT nome,preco FROM produtos LIMIT 10;
```
---

Para verificar a quantidade e tipos diferentes de categorias:
```sql
SELECT DISTINCT categoria FROM produtos ORDER BY categoria;
```

---

Filtro de colunas e categoria:
```sql
SELECT nome,preco,estoque 
FROM produtos
WHERE categoria ='Monitores';
```
---
Filtrando produtos que custam mais q=do que R$1000,00
```sql
SELECT nome,preco 
FROM produtos
WHERE preco <= 1000;
```
---


Para faixar de preços:
```sql
SELECT nome,preco 
FROM produtos
WHERE preco >= 0 AND preco <= 500;
```

Uma outra forma que retorna o mesmo resultado:
```sql
SELECT nome,preco 
FROM produtos
WHERE preco BETWEEN 0 AND 500;
```

---

Utilizando o comando `OR` para filtrar duas categorias:
```sql
SELECT nome,preco
FROM produtos
WHERE categoria = 'Monitores' OR categoria = 'Notebooks';
```

--- 

Para consultas desconsiderando letras maiúsculas:
```sql
SELECT nome,preco
FROM produtos
WHERE nome ILIKE 'mouse%';
```
>% Operador Coringa!





# Funções

Max e Min servem para eu ver qual o maior item e o menor item.
```sql
SELECT 
    MAX(preco) AS Mais_caro,
    MIN(preco) AS Mais_barato
FROM produtos;
```

AVG serve para calcular a media dos produtos, E para fazer um arredondamento usa o ROUND.

```sql

SELECT ROUND(AVG(preco),2) AS preco_medio FROM produtos
```
O sum serve para fazer uma soma
```sql
SUM(estoque) AS total_pecas
```

Agora uma aplicação de tudoo
```sql
SELECT 
COUNT(*) AS total_produtos,
MIN(preco) AS menor_valor,
MAX(preco) AS maior_valor,
ROUND(AVG(preco),2) AS media_valores,
SUM(estoque) AS total_pecas
FROM produtos
```
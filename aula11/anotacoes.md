## comandos e explicações

se quiser alterar uma tabela, usa o comando:
```sql
ALTER TABLE cadastro_1fn
ADD PRIMARY KEY (funcionario_id,treinamento);
```
sendo assim adicionando valor de primary key a tabela.


---
**Passo 5:**
 
| Trecho | Explicação |
|---|---|
| `CREATE TABLE cadastro_1fn AS` | Cria uma tabela nova **a partir do resultado** de um `SELECT` (CTAS: *Create Table As Select*). As colunas e os dados vêm da consulta. |
| `SELECT funcionario_id, nome, setor_id, setor_nome` | Copia essas colunas como estão. |
| `string_to_table(treinamentos, ';')` | Pega o texto de `treinamentos`, **corta nos `;`** e devolve **uma linha para cada pedaço**. |
| `AS treinamento` | Dá o nome `treinamento` (no singular) à nova coluna. |
| `FROM cadastro_original` | Origem dos dados. |
 
**Resultado:** o Victor ocupa duas linhas, uma para cada treinamento. Os outros dados dele se repetem.
 
| funcionario_id | nome | setor_id | setor_nome | treinamento |
|---|---|---|---|---|
| 1 | Victor | 10 | Montagem | Seguranca |
| 1 | Victor | 10 | Montagem | Ferramentas |
| 2 | Miguel | 20 | Manutencao | Segurança |
| 3 | Lucas | 10 | Montagem | Ferramentas |
 
> **Importante:** `CREATE TABLE ... AS` **não copia** chaves primárias nem outras restrições. Por isso a tabela nova nasce **sem** chave primária, e precisamos adicionar uma no próximo passo.
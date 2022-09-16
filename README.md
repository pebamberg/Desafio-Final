Sistema de Cadastro de Produtos.

	O projeto tem como objetivo criar uma plataforma intertiva para cadastro de produtos. 

	O projeto apresentado usa elementos .css .php e .sql

	Para o funcionamento do programa todos arquivos presente neste repositório devem estar salvos na mesma pasta.

	Ao abrir o arquivo index.php você será direcionado para uma pagina onde poderá fazer o cadastro
de produtos de sua preferência, os valores atribuídos para cada campo em questão irão ser direcionados
para a tabela produtos.sql.
	Cada campo possuí características e especifidades individuais, caso não siga as especifidades não
será possível continuar o cadastrp e um pequeno pop-up aparecerá indicando a condicção e o que falta para requisição
ser atendinda.
	Listando individualmente as especifidades de cada campo:
		Nome: Necessita ter 2 ou mais caracteres.
		Descrição: Necessita ter 10 ou mais caracteres.		
		Preço: Necessita ser maior que 1.
		Categoria: Necessita ter 4 ou mais caracteres.
	Clicando no botão salvar você será redirecionado para uma página indicando se o cadastro do produto foi efetuado 
com sucesso, você pode voltar a cadastrar mais produtos em sua base de dados selecionando o botão de cadastro no menu localizado
na esquerda da página ou consultar a listagem dos produtos selecionando o botão de consultas.
	Ao arir a pagina de consultas será apresentado um campo de pesquisa onde as palavras inseridas serão pesquisadas na 
descrição de cada produto, caso a palavra se encontre em um ou mais produto os produtos que satisfazerem a pesquisa irão ser 
listados exibindo os atributos: Código, Nome do Produto, Descrição, Preço do Produto e Categoria. O atributo codigo é uma chave
primária de preenchimento automático, por isso não é possível prenche-lá manualmente.

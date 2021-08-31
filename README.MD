
Leia-me

Considerações para o projeto, como não possuo uma licença da versão pro do Elementor, estou usando sua versão Free junto com outros plugins complementares para poder suprir como necessidade, como:
- Elementor Header & Footer Builder - Versão 1.6.4 | Por Brainstorm Force, Nikhil Chavan

Observação: Nas colunas de integração, não sei se foi proposital, mas como div azuis estão com tipos de sombreamento diferentes, como achei que ficou um pouco estranho optei por apenas um padrão nos dois.

Sobre o teste de api, feito através de uma requisição ao site jsonplaceholder.typicode.com, implementando o código a seguir, para substituir o conteúdo que colocado graficamente colocado pelo elemento:

<script> jQuery.get (' https://jsonplaceholder.typicode.com/posts ', function (data, post) {
		var cont = 1;
		data.forEach (function (post) {
			
			if (cont> 3) {
				Retorna;
			}outro{
				jQuery ('# title-integracao' + cont) .html ('<div class = "elementor-widget-container"> <h2 class = "elementor-header-title elementor-size-default">' + post.title + ' </h2> </div> ');
				jQuery ('# description-integracao' + cont) .html ('<div class = "elementor-widget-container"> <p>' + post.body + '</p> </div>');
			}
			cont ++;
		});
		
	}); </script>

Bem, infelizmente, problemas para serem resolvidos no fim de semana e não consegui dedicar aos 4 dias de desenvolvimente, apenas os últimos dois dias então não consegui aprofundar muito em efeitos e coisas adicionais, mas creio que o principal que separou ser feito no projeto , foi construída.

O formulário do MailChimp colocado através do plugin ElementsKit_Lite, porém não cheguei a criar uma conta na ferramenta pra colocar um token para efetivar a funcionalidade da área.

OBS: Como o objetivo do teste era o desenvolvimento desta página, não cheguei a estilizar as demais, porém elas foram elevados para fazer o menu. então os links são redirecionados dos menus e a busca são redirecionadas para suas páginas, porém nenhum tema padrão do wordpress. Demais links sem redirecionamento.

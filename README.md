# Criação de um Site com Conteúdo Estático
## Com bons recursos

*Somente páginas estáticas em HTML, CSS e JavaScript.*

O objetivo é criar uma estrutura de site tão prático quanto um CSS, mas somente com conteúdoe stático.
Usando boas práticas e ferramentas para poder abrigar este site em servidores gratuitos como o GitHub.

## Já encontrei até agora 4 alternativas de uso de site estático:

- Criar o site inteiramente na mão, com cada página contendo cabeçalho, conteúdo e rodapé (funciona bem mas é inviável)
- Criar cada página somente com o arquivo de conteúdo e importar o cabeçalho (cabecalho.txt) através do método load da jquery
- Criar os mesmos 3 arquivos e juntá-los usando uma função com jquery e passar cabeçalho e rodapé por parâmetro pela URL
- Usando o gerador de sites estáticos Jekyll

Gostei muito o jekyll, mas esbarrei em limitações como categorias. É muito bom para criar sites pequenos e blogs ou mesmo sies grandes mas no estilo blogs.

## O que escolhi foi:
- criar um arquivo cabecalho.txt, contendo o head
- Criar um pequeno script com o método load da jQuery que importa o cabecalho.txt em cada arquivo de conteúdo

# Recursos usados:

- Usei um template HTML criado pela Templated (http://templated.co/)
- Layout responsive usando o Bootstrap
- Menu dropdown multinível e fixo no topo
- Editor HTML FCKEditor para formatar o conteúdo (fckeditor)
- Editor Ace, que ajuda a corrigir erros no HTML, JavaScript, CSS e muito mais (editor)
- Pequeno CSS adaptado para criar o menu dropdown
- No menu, o path de todos os arquivo deve ser o path absoluto, para que seja visto por todos os subdiretórios
- Os inclusdes dos javascript são inseridos ao final de cada arquivo de conteúdo, visto ser pouco conteúdo, mas pode ser criado um outro arquivo e importado com o load

*- Cada página é composta de:*

cabecalho.txt

script javascript com o método load

arquivo do conteúdo

Assim, por exemplo:

index.html

```php
<script src="/assets/js/jquery.min.js"></script>
<script>
   $(function(){
       $('#cabecalho').load("/cabecalho.txt");
   });
</script>
<div id="cabecalho"></div>
<!-- Final do Cabeçalho-->

<!-- Início do Conteúdo-->
Aqui o conteúdo
<!-- Final do Conteúdo-->
```

== Corrigindo estruturas de HTML

Como fechamento de tags

Crio um arquivo .html no GitHub

Colo nele o conteúdo do arquivo

E saio corrigindo os erros apontados.

Isso me estimulou a procurar um editor similar e encontrei o Ace(Ace (Ajax.org Cloud9 Editor - https://github.com/ajaxorg/ace-builds)).

## A estrutura está estável e pronta.
Tenho todos os recursos necessários para a criação de um site moderno, com recursos para adicionar e editar conteúdo de forma prática.

Já tenho a index e mais duas páginas prontas e com tempalte.

O mais trabalhoso aqui foi deixar tudo com o mesmo template, que foi alterar o CSS.

O JavaScript praticamente usei pronto sem alterações, o CSS e o HTML é que foram alterados, especialmente o CSS.

Agora, para usar basta pegar um template do agrado, que existem muitos por aí e adaptar de acordo com a estrutura.

Fortaleza, 07 de novembro de 2016.


# acordeon-com-blocos-wp
Simples plugin que cria um acordeon de Ler mais / Ler menos a partir de botões e blocos padrão do wordpress

Instalação:
Basta copiar o arquivo add_code_acordeon.php na pasta /wp-content/plugins/ do wordpress e ativar o plugin pelo painel de controle.

Como usar:
Na página ou post que deseja inserir os botoes de ler mais/menos, adicionar um bloco do tipo botão com o texto "Ler mais" logo após a introdução do texto. (se quiser alterar o texto "Ler mais" do botão, basta alterar o texto no código também)
Logo abaixo do botão "Ler mais" criar um grupo de blocos com o conteúdo que iniciará oculto com um botão "Ler menos" (ou qualquer texto equivalente) dentro desse grupo de blocos. Nas opções de cada grupo de blocos com o texto que começa oculto e o botão "Ler menos", clicar em "avançado" e adicionar a classe "escondido".

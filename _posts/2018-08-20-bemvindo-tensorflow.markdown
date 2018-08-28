---
layout: post
title:  "Bem vindo(a) ao Tensorflow!"
date:   2018-08-14 23:43:14 -0300
categories: tensorflow
---
![hire-me]({{"/assests/img/tensorflow-google.png"}})

## O que é Tensorflow?

Tensorflow é uma biblioteca código aberto de aprendizado de máquina para pesquisa e produção. Tensorflow oferece APIs (Application Programming Interface) para iniciantes e especialistas desenvolverem para desktop, dispositivos móveis, web e cloud.

O Tensorflow foi criado com o propósito de realizar computação numérica usando grafos para fluxo de dados. Os nodos no grafo representam operações matemáticas, e as arestas representam as matrizes ou tensores de dados multidimensionais que se comunicam com os nodos. Sua arquitetura é flexível de modo que seja possível a implantação de aplicações a uma ou mais CPUs (Central Processing Unit) ou GPUs (Graphical Processing Unit) em um computador, servidor ou dispositivo móvel utilizando uma única API.

O Tensorflow foi desenvolvido por engenheiros e pesquisadores do Google Braim Team no departamento de pesquisas de inteligência de máquina do Google com o propósito de realiar pesquisas com redes neurais profundas e aprendizado de máquina. Devido a sua abrangência, o Tensorflow pode ser aplicado a vários domínios.

![tensorflow]({{"/assests/img/tensorflow_programming_environment.png"}})
##### Imagem extraída de Google.com

Na base dessa biblioteca, encontra-se o motor de execução distribuído que é responsável pela abstração de hardware onde a biblioteca será executada. Essa base é composta por um núcleo de alta desempenho escrito na linguagem C++.

Acima da base está a API de baixo nível em várias linguagens como Python, C++, Javascript e Go, mas só a linguagem Python é a versão com garantia de estabilidade e é a mais fácil de ser utilizada.

Em seguida, vem a API de nível intermediário chamada Layers. Ela proporciona uma interface mais simplificada para as camadas mais utilizadas nos modelos de aprendizado profundo.

No topo dessa, encontra-se a API de alto nível do Tensorflow que inclui a biblioteca **Keras** e **Estimator**, que proporcionam treinamento e avaliação de modelos distribuídos de modo mais fácil.

## Modelo de execução do Tensorflow

### Grafos
O motivo pelo qual o Tensorflow foi constrído usando grafos para controlar o fluxo de dados é que os modelos criados para aprendizado profundo e aprendizado de máquina podem ser tão complexos quanto extensos. Em muitos grafos de modelos, será necessário um treinamento distribuído para ser apto a iterar dentro um tempo rasoável. Além disso, geralmente você irá precisar que o modelo rode em várias plataformas.

Na versão atual do Tensorflow, você escreve um código para construir um grafo computacional, e então o executa. Você não escreve a computação diretamente, você simplesmente constrói grafos. O grafo é uma estrutura de dados que descreve completamente a computação que você quer realizar. As vantagens para se utilizar grafos ao invés de programar diretamente a computação sãos as seguintes:
* É portável, pois um grafo pode ser executado imediatamente ou ser salvo para uso posterior. Ele pode rodar em várias plataformas: CPU, GPU, TPUs (Tensors Processing Unit) and mobile. Ele pode ser implantado em produção sem depender de qualquer código que construiu o gráfico, apenas o tempo de execução necessário para executá-lo.
* É transformável e otimizável, pois o gráfo pode ser transformado para produzir uma versão mais otimizada para uma determinada plataforma. Além disso, otimizações de memória ou de computação podem ser realizadas, bem como compensações entre elas. Isso é útil, por exemplo, quando se faz inferência móvel de maneira mais rápida após o treinamento em máquinas mais robustas.
* Suporte a execução distribuída.

### Execução anciosa.

A execução anciosa (Eager Execution) é um estilo imperativo de escrever códigos no Tensorflow. Quando a execução anciosa está habilitada, você estará executando o sobre o núcleo do Tensorflow, ao invés de de criar grafos para serem executados posteriormente.
Isso é importante por algumas resões:
* Você inspecionar e corrigir bugs em seu grafo facilmente.
* Você pode usar o fluxo de controle do Python (laços, condicionais, funções, etc...) em conjunto com a API do Tensorflow.
* É mais fácil construir e treinar grafos com a execução anciosa.

Uma vez que já experimentou a execução anciosa do Tensorflow, você pode converter seu código para a versão normal automaticamente. Seus grafos serão salvos e distribuidos com mais facilidade.

### Modelos código aberto do Tensorflow
O equipe do Tensorflow disponibiliza vários modelos com código fonte aberto no repositório [tensorflow/models][repo]. Muitos dos quais, não somente o grafo do modelo é fornecido, mas também os pesos treinados do modelo. Isso quer dizer que você pode tentar esses modelos de imediato sem precisar treiná-los novamente. Outros modelos ainda podem ser melhorados usando o processo chamado de **transferência de aprendizagem**.

Alguns desses modelos são listados a seguir:
* API de detecção de objetos:  O desafio principal do aprendizado de máquina ainda é criar modelos precisos capazes de localizar e identificar múltiplos objetos em uma única imagem. 
* tf-seq2seq: é um modelo que facilita experimentos com modelos do tipo *seq2seq*.
* [ParseySaurus][parsey]: é um conjunto de modelos pré-treinados utilizados para analisar e entender a estrutura gramatical de setenças. Ele utiliza uma representação de entrada baseada em caracteres.
* Gerador Multiestilo Pastiche do Projeto Magenta: "Transferência de estilo" é o que está acontecendo debaixo dos panos com os aplicativos que aplicam o estilo de uma pintura a uma de suas fotos. Este modelo Magenta amplia a transferência de estilo de imagem criando uma única rede que pode executar mais de uma estilização de uma imagem, opcionalmente ao mesmo tempo.

### Transferência de aprendizagem
Muitos dos modelos do TensorFlow incluem pesos e exemplos treinados que mostram como você pode usá-los para a transferência de aprendizado, por exemplo, para aprender suas próprias classificações. Normalmente, você faz isso derivando informações sobre os dados de entrada da penúltima camada de um modelo treinado - que codifica abstrações úteis - e usa isso como entrada para treinar sua própria rede neural muito menor para prever suas próprias classes. Devido ao poder das abstrações aprendidas, o treinamento adicional normalmente não requer grandes conjuntos de dados.

Por exemplo, você pode usar a transferência de aprendizado com o modelo [Inception][inception] de classificação de imagem para treinar um classificador de imagem que usa seus dados de imagem especializados.

O código da API de detecção de objeto é projetado para suportar também a transferência de aprendizado. No repositório [tensorflow/models][repo], há um exemplo de como você pode usar a transferência de aprendizado para inicializar o modelo treinado para construir um detector de animal de estimação, usando um conjunto de pequeno de amostras de cães e gatos. 

### Tensorboard
Tensorboard é um conjunto de ferramentas web para inspeção, visualização e compreensão dos grafos e execuções do Tensorflow. Tensorboard pode ser usado para visualizar os grafos de seus modelos em detalhes.
Você pode plotar métricas como custo e acurácia durante a execução do treinamento, mostrar o histograma de como um tensor muda ao longo do tempo, mostrar dados adicionais, coletar metadados em tempo de execução, medir o consumo de memória ou o tamanho do tensor por nodos. 

![tensorboard]({{"/assests/img/posts/7tensorflow2.gif"}})

Tensorboard faz a leitura de arquivos do Tensorflow que contém a informação sumária sobre o processo de treinamento. Esses arquivos podem ser gerados quando o Tensorflow está executando algum trabalho.
O Tensorboad pode ser usado para comparar o desempenho de modelos que usam parametros diferentes para treinamento.

## Mais sobre Tensorflow
Quer aprender mais sobre o Tensorflow? Então, adicione essa página aos seus favoritos e acompanhe esta série de 6 posts inspirado no livro *Deep learning with python* usando o pacote de alto nível `tf.keras` incluído no Tensorflow. Essa série também está incluída na documentação sua documentação oficial em inglês, mas aqui, você terá a conveniência de lê-la em português e com o capítulo adicional relacionado ao processo de instalação.

*Deep learning with python* introduz o campo de aprendizado profundo usando a linguagem Python e a biblioteca Keras. O autor do livro, François Chollet, é pesquisador do Google AI e criador da biblioteca Keras.

Os seguintes tópicos serão abordados nessa série:
1. Instalação do Tensorflow.
2. Classificação básica.
3. Classificação de texto.
4. Regressão.
5. Overfitting e underfitting
6. Salvar e restaurar modelos.     

Antes de continuar, você precisa estar familiarizado com os conceitos de aprendizado de máquina. Uma boa referência é o [machine learning crash course] [course] produzido pela google.

Ficou com alguma dúvida sobre o Tensorflow? Você já utiliza essa biblioteca em seus projetos de aprendizado profundo? Deixe sua dúvida nos comentários abaixo. Ajude-me a compartilhar esse conteúdo com outras pessoas.

[course]: https://developers.google.com/machine-learning/crash-course/ml-intro

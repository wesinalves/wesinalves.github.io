---
layout: post
title:  "Fundamentos sólidos de redes neurais artificiais"
date:   2019-01-14 23:43:14 -0300
categories: redes neurais
---

O objetivo deste post é apresentar uma introdução sólida sobre redes neurais artificiais, nada de conceitos vagos e superficiais como visto em outros blogs. Aqui será apresentado conceitos, propriedades, histórico, representação matemática e gráfica das redes neurais. Ao terminar a leitura, você será capaz de:

* ter um conceito formal de redes neurais artificiais
* representar matemáticamente as redes neurais
* representar graficamente as redees neurais
* diferenciar tipos de arquiteturas
* diferenciar redes neurais de redes recorrentes
* entender a diferença entre os tipos de aprendizado

## Conceitos Iniciais

As redes neurais artificiais ou simplesmente redes neurais são modelos computacionais inspirados no funcionamento do cérebro humano. O cérebro é um orgão extremamente complexo, não linear e que executa computação paralela. O sistema de visão, por exemplo, é capaz de identificar um rosto familiar em um ambiente não familiar em menos de 200 mili segundos. Além disso, o cérebro fornece informações necessárias para interargirmos com esse ambiente.

Outro exemplo interessante da complexidade de um cérebro é o funcionamento do sonar de um morcego. O sistema ativo de localização através de sons produzido por um morcego é capaz de identificar não somente a distância, mas também a velocidade do alvo, o tamanho do alvo, o tamanho das características do alvo, o angulo e a elevação do alvo produzindo taxas de capturas que causam inveja à radares construídos por engenheiros (lembro-me quando tentava acertar algum morcego quando era criança com uma pedra e nunca conseguia).

Como o cérebro humano e o do morcego são capazes de aprender essas tarefas? A resposta se encontra em uma palavra: experiência. No nascimento, o cérebro já possui uma estrutura considerável para construir o seu aprendizado, mas só através da experiência que vem ao longo do tempo através da construção das conexões (sinapses) entre as unidades de processamento de informação, chamadas de neurônios.
Com isso em mente, podemos definir redes neurais da seguinte maneira:

*Redes neurais é um processador distribuído massivamente paralelo construido de unidades de processamento simples que possui uma propensão natural por armazenar conhecimento experimental e torná-la disponível para uso. Assemelha-se ao cérebro em dois aspectos:
1. Conhecimento é adiquirido pela rede a partir do ambiente através de um processo de aprendizagem.
2. Neurônios densamente conectados através dos pesos sinápticos, que são responsáveis por armazenar o conhecimento adiquirido.(Haykin,2008)*

O procedimento usado para realizar o processo de aprendizagem é conhecido como *algorítmo de aprendizagem*, que tem a função de ajustar os pesos sinápticos de forma ordenada de modo a alcançar um determinado objetivo. Além dos pesos sinápticos, as redes neurais possuem a flexibilidade de ajustar sua própria topologia, adicionando ou removendo o número de neurônios na rede.


## Propriedades
O poder computacional das redes neurais deriva de duas fontes principais:
* sua estrutura distribuída e massivamente paralela
* sua habilidade de aprendizado.
Note que o segundo item descreve a habilidade de aprender e não simplesmente decorar. Essa habilidade também é chamada de *generalização*. A *generalização* se refere ao fato de que as redes neurais são capazes de produzir uma resposta razoável a estímulos (entradas) que não foram apresentados durante a fase de treinamento (processo de aprendizagem). Essas duas características são fundamentais para que as redes neurais encontre uma boa solução aproximada para problemas complexos. Todavia, utilizar apenas a rede neural para resolver um problema não é o melhor caminho. Uma solução mais adequada seria aplicar uma abordgem consistente de engenharia de sistema, dividindo o problemas em módulos e aplicando as redes neurais em um subconjunto de tarefas que melhor se enquadre em suas características inerentes. Para isso é necessário conhecer suas propriedades e características.
1. *Não-linearidade*. Um neurônio artificial pode ser linear ou não-linear. Assim, uma rede neural construída de uma interconexão de neurônios não-lineares também se configura como sendo não-linear. Geralmente, os fenômenos físicos responsáveis pela geração dos sinais de entrada também são não-lineares em sua maioria, por isso é demasiadamente importante a rede neural possuir essa propriedade.
2. *Mapeamento entrada-saída*. O *aprendizado supervisionado* ocorre através da modificação de pesos sinápticos de uma rede neural através da aplicação de um conjunto de *exemplos de trainamento* (ou *dados de treinamento*) rotulados. Cada exemplo é composto por um sinal de entrada, também conhecida como *atributos*, e uma resposta desejada ou alvo, também conhecida como *classe*. Então, O processo de aprendizagem se dá da seguinte forma: os exemplos são apresentadas a rede neural de forma aleatória (em alguns casos, isso não é verdade), e os pesos sinápticos da rede neural são ajustados de modo a minimizar a diferença entre a resposta desejada e a resposta fornecida pela rede, que foi produzida através do sinal de entrada, de acordo com determinado critério estatístico. Esse procedimento é repetido várias vezes para cada exemplo dos dados de treinamento até que a rede alcance um estado estável onde não haja mudanças significativas nos valores dos pesos sinápticos. Cada repetição que observa todos os *exemplos de treinamento* é chamado de *época*. Portanto, é dessa forma que as redes neurais constroem um mapeamento de entrada-saída para cada problema a ser resolvido.
3. *Adaptatividade*. As redes neurais tem a capacidade inerente de adaptar os pesos sinápticos de acordo com as mudanças sofridas no ambiente externo. Isso significa que as redes neurais possuem a facilidade de serem *retreinadas* para lidar com as mínimas mudanças nas condições do ambiente em que opera. Além disso, essas mudanças podem ocorrer em tempo real quando ela opera em um sistema não-estacionário (quando suas variáveis estatísticas se alteram com o passar do tempo). Essa adaptação a mudanças no ambiente gera um dilema conhecido por *dilema da estabilidade-plasticidade*, isto é, a constante de tempo em que os fenômenos são observados em sistema não-estacionário deve ser grande o suficiente para ignorar eventos irrelevantes, porém deve ser pequeno o suficiente para observar os eventos realmente importantes.
4. *Confiabilidade*. No contexto da *classificação de padrões*, as redes neurais devem ser capazer de dar como resultado não apenas a classe, mas também a confiança que ela tem nessa resposta. Essa característica pode ser usada para rejeitar padrões ambíguos, que devem surgir, e melhorar o desempenho da classificação da rede.
5. *Informação contextual*. O conhecimento é representado pela estrutura e estado de ativação da rede. Cada neurônio é potencialmente afetado pela atividade global dos outros neurônios que pertencem a rede. Consequentemente, a informação contextual é tratada naturalmente pela rede neural.
6. *Tolerância a falha*. Um implementação em hardware de uma rede neural tem o potencial de ser tolerante a falhas, ou de ter uma computação robusta, no sentido de que sua performance diminui gradativamente em condições de operações adversas. Considere, por exemplo que a implementação de uma sinapse desse hardware tenha sofrido algum dano, fazendo que a qualidade do padrão armazenado no conjunto de todas as sinapses seja comprometido. Porém, devido a natereza distribuída das redes neurais, o dano precisa ser mais severo para que a saída da rede produza um resultado realmente deturpado. Portanto, essa natureza distribuída das redes neurais evita falhas catastróficas. Entretanto, não se deve confiar cegamente nessa qualidade, pois as falhas podem ser incontroláveis. O que deve ser feito é tomar atidutes corretivas no projeto do algoritmo de treinamento da rede (Kerlirzin and Vallet, 1993).    
7. *Uniformidade de análise e design*. As redes neurais são processadores de informação universais. Isso significa que a mesma notação é usada em todos os domínios de aplicação das redes neurais. Essa qualidade se manifesta das seguintes maneiras:
* Neurônios são igredientes comuns em todas as rede neurais.
* É possível compartilhar teorias e algoritmos de aprendizado em diferentes aplicações de redes neurais.
* As redes podem ser construídas baseadas em módulos.
8. *Analogia neurobiológica*. A analogia neurobiológica é o combustível para os projetos e pesquisas de redes neurais artificiais, comprovando o poder e rapidez do processamento paralelo e tolerante a falha. Os neurobiologistas tem um olhar para as redes neurais artificiais focado como uma ferramenta de pesquisa no campo de estudo dos neurônios, o os engenheiros olham para a neurobiologia como fonte de inspiração de novas ideias para solucionar problemas mais complexos do que aqueles presentes nas técnicas convencionais. Por tanto, conhecer a estrutura neurobiológica humana é de fundamental importancia para as pesquisas na área de redes neurais artificias. A próxima seção irá dar destaque a essa inspiração biológica.


## Inspiração biológica
(pule essa seção por sua conta e risco, caso você não curta aula de biologia)
O sistema nervos humano é composto por um *sistema de três estágios* como mostrado no diagrama de blocos da figura x.
Na parte central do sistema está o cérebro, representado na imagem por uma rede neural (biológica). O cérebro constantemente recebe estímulos externos, analisa, e toma uma decisão apropriada. Dois conjuntos de setas são apresentados na figura. As setas que apontam para a direita demonstram que o sentido do fluxo da informação é avante percorrendo todo o sistema, e as que apontam para a esquerda demonstram que o sentido do fluxo da informação é inverso, ou seja, a rede neural possui um sistema de avaliação (*feedback*).
Os receptores convertem os estímulos externos recebidos pelos nossos sentidos em impulsos elétricos que carregam a informação para a nossa rede neural (biológica). Os atuadores convertem os impulsos elétricos gerados no cérebro em respostas perceptivas como sáidas do sistema, como por exemplo, movimentar um braço ou uma perna.
A ideia de que a unidade básico do cérebro humano seria o neurônio foi proposta em 1911 no trabalho de Ramon y Cajál. Geralmente, um neurônio possui um tamanho cinco vezes inferior a um chipe de computador, e processa os estimulos na casa dos mili-segundos, enquanto os chips processam informação na ordem de nano-segundos. Todavia, essa velocidade baixa de processamento é compesado pelo número massivo de neurônios e suas sinapses nervosas. Estima-se que exista aproximadamente 10 bilhões de neurônios no cortéx cerebral, realizando cerca de 60 trilhões de sinapses (Shepherd and Koch, 1990). A eficiência energética do cérebro humano também é algo impressionante. Ele consome apenas 10e-16 joules por operação por segundo que é comparado ao consumo dos melhores computadores em ordem de magnitude.
As sinapses são terminais nervosos que constituem a estrutura elementar e funcional responsável pela comunicação entre os neurônios. Há dois tipos de sináses: as elétricas e as químicas, sendo que o segundo é o tipo mais comum. As sinapses operam da seguinte maneira: um processo pré-sináptico libera uma substância transmissora que atravessa o caminho das junções sinápticas entre os neurônios e então atua no processo pós-sináptico. Assim, a sinapse converte um impulso elétrico pré-sináptico em um sinal químico e novamente em um impulso elétrico. Todavia, podemos considerar a descrição tradicional da organização do neurônio assumindo que a sinapse é uma simples conexão que pode impor uma *excitação* ou uma *inibição*, mas não os dois dado um neurônio.
O cérebro humano possui uma característica importante chamada de *plasticidade*, o que permite a criação de novas conexões sinápticas e modificação das sinapses existentes entre os neurônios.
Existem dois tipos de filamento celulares que constitui um neurônio: o axônio e o dentrito. O axônio possui uma superfície mais suave com poucas ramificações, porém um comprimento maior, enquanto os dendritos possui uma superfície irregular e mais ramificações. Os neurônios possuem uma grande variedade de formas e tamanhos em diferentes localidades do cerébro.
A forma mais comum é a célula piramidal que está descrita na figura 2. Ela recebe a maioria dos estímulos de entradas pelas pontas dos dendritos conforme destacado na figura 2. Esse tipo de célula pode receber mais de 10.000 ou mais estímulos sinápticos e pode projetar cerca de 1000 celulas alvos. Os Axônios codificam sua sáida como uma série de impulsos elétricos de velocidade e amplitude constante. Quando uma tensão é aplicada em um dos terminais do axônio, ela decai exponencialmente com a distância, caindo para um nível insiginificante no momento que alcança outro terminal. Então, graças ao mecanismo de codificação dos axônios, a informação é transmitida sem perdas.






## Representação matemática

## Representação Gráfica 

## Retropropagação do erro

## Arquiteteturas de redes

## Representação do conhecimento

## Tipos de aprendizagem

## Tarefas de aprendizagem

## Processo de mineração de dados 

## Considerações finais

## Referências bibliográficas

*Deep learning with python* introduz o campo de aprendizado profundo usando a linguagem Python e a biblioteca Keras. O autor do livro, François Chollet, é pesquisador do Google AI e criador da biblioteca Keras.

Os seguintes tópicos serão abordados nessa série:
1. Instalação do Tensorflow.
 - parte 1 - instalando o Tensorflow no Ubuntu
 - parte 2 - instalando o Tensorflow no macOs
 - parte 3 - instalando o Tensorflow no Windows
 - parte 4 - instalando o Tensorflow no Raspberry Pi
2. Classificação básica.
3. Classificação de texto.
4. Regressão.
5. Overfitting e underfitting
6. Salvar e restaurar modelos.     

Antes de continuar, você precisa estar familiarizado com os conceitos de aprendizado de máquina. Uma boa referência é o [machine learning crash course] [course] produzido pela google.

Ficou com alguma dúvida sobre o Tensorflow? Você já utiliza essa biblioteca em seus projetos de aprendizado profundo? Deixe sua dúvida nos comentários abaixo. Ajude-me a compartilhar esse conteúdo com outras pessoas.

[instalacao]: https://wesinalves.github.io/tensorflow/2018/08/30/instalacao-tensorflow.html
[ubuntu]: https://wesinalves.github.io/tensorflow/2018/08/30/instalacao-ubuntu.html
[macOs]: https://wesinalves.github.io/tensorflow/2018/09/05/instalacao-mac.html
[windows]: https://wesinalves.github.io/tensorflow/2018/09/13/instalacao-windows.html
[raspberry]: https://wesinalves.github.io/tensorflow/2018/09/13/instalacao-raspbian.html
[course]: https://developers.google.com/machine-learning/crash-course/ml-intro
[inception]: https://www.tensorflow.org/hub/tutorials/image_retraining
[repo]: https://github.com/tensorflow/models
[parsey]: https://ai.googleblog.com/2017/03/an-upgrade-to-syntaxnet-new-models-and.html




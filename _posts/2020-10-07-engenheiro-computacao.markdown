---
layout: post
title:  "Como é a rotina de um engenheiro da computação?"
date:   2020-10-07 10:16:14 -0300
categories: engenharia
---
![engenheiro-da-computação]({{"/assests/img/posts/computerengineer.png"}})

Pretende cursar engenharia da computação mas tem dúvidas de como é a rotina de um profissional da área? Tem curiosidade para saber o que um engenheiro da computação faz em seu dia a dia? É muito difícil definir uma rotina padrão para um engenheiro da computação, pois é um curso que abrange muitas áreas e provavelmente irá formar diversos perfis de profissionais que poderão se especializar em hardware, software, redes, segurança, gestão, entre outros. Só para se ter uma ideia, tenho colegas que se formaram na mesma turma e hoje atuam como analista de redes, gerentes, analista de dados, professores, pesquisadores, e por aí vai. Portanto, nesse post vou apresentar qual é a minha rotina como engenheiro da computação dividindo-a em sete atividades, como mostra a figura abaixo.

![rotina-engenheiro-da-computação]({{"/assests/img/posts/rotina-de-um-engenheiro-da-computacao.png"}})

### Monitorar sistemas

A primeira atividade do dia é monitorar os sistemas que estão em produção. Preciso me certificar se todos os sistemas que gerencio estão online, se estão respondendo normalmente às requisições, se o servidor está lento, se houve algum incidente com os sistemas, se houve algum ataque, etc. É como se fosse o Batman vigiando gotham city, sempre pronto para agir quando surgir o bat-sinal entre as nuvens. Existe algumas ferramentas que ajudam nessa investigação de forma automática, pois uma das coisas que todos os engenheiros da computação tem em comum é tentar automatizar todos os processos que estão sobre nossa responsabilidade. Outras vezes tenho que ler o log (registros de acessos, erros) do servidor (máquina que hospeda os serviços) linha a linha (isso não vai ficar assim por muito tempo).

### Suporte a sistemas

Se encontro algum bug, alguma falha, ou se ocorreu alguma invasão, é hora de dar o manutenção no sistemas. O suporte tem que ser rápido e preciso, pois o cliente não pode esperar. O suporte a sistemas inclui pequenas alterações em algum trecho do código que esteja dando problema. Geralmente, estamos sempre atualizando os sistemas para as versões mais recentes como forma de evitar novas falhas e reforçar a segurança. Em outros momentos, o cliente pede alterações para serem acrescentadas nos sistemas, isso é comum principalmente quando fazemos [softwares customizados][software]. É uma boa prática ficar sempre de olho em novas versões de sistemas operacionais, banco de dados, linguagens de programação, frameworks, etc. para deixar tudo atualizado. Atualmente, estou numa frente de trabalho onde tenho que migrar vários sistemas que estão utilizando tecnologia de máquinas virtuais para containers (docker), o que está dando muito trabalho, diga-se de passagem, mas posteriormente a manutenção e o suporte será bem mais tranquilo.

### Desenvolver software

Existe algumas demandas que envolve a criação um novo software por completo. Aí temos que avaliar a viabilidade técnica da demanda. É melhor construir um novo, ou comprar um novo? Existe algum software livre que atenda a necessidade? Se decidir construir, qual tecnologia irá ser utilizada? qual arquitetura do software mais adequada? Onde será hospedado? Servidor local ou na nuvem? Qual a metodologia de desenvolvimento? Qual o prazo para a construção? Essas e outras perguntas são importantes para esse tipo de atividade. Além disso, é necessário várias conversas com o cliente para entender sua necessidade, um planejamento detalhado do que será feito, e a documentação do produto final. Todos esses artefatos podem variar um pouco dependendo da metodologia de desenvolvimento que você adotar. A linguagem de programação que estou utilizando atualmente para desenvolver softwares é a [linguagem python][python].

### Fiscalizar Impressoras

Outra responsabilidade que tenho aqui no instituto é a fiscalização das impressoras. Diferente das outras tarefas, essa é a que mais lido com hardware e também com pessoas. São 64 impressoras que tenho que fiscalizar, que fazem parte de um contrato de mais de R$ 300.000,00, garantindo se estão imprimindo corretamente, se está sendo contabilizado o número de impressões, fazer campanha de conscientização para o uso racional do número de impressões e conferir o faturamento da empresa terceirizada que presta o serviço. Às vezes tenho que utilizar habilidades de programação para manipular ou automatizar alguma planilha de relatórios e obter dados relevantes sobre as impressoras.

### Capture the flag

Chegou a parte mais divertida. Sempre separo pelo menos 1 hora do dia para aprender coisas novas através de desafios chamados de capture the flag (CTF) ou de desafios de códigos que vamos ver no próximo item. CTF é uma competição de segurança da informação que desafia os participantes a resolver uma variedade de tarefas no estilo que varia desde uma caça ao tesouro básica até hacker um servidor e conseguir dados deles. Esses desafios são extremamente úteis para desenvolver habilidades em segurança da informação pois aprende várias tecnologias de modo prático, tentando resolver desafios no estilo Sherlock Holmes. O primeiro desafio que fiz foi do site [infosec], e no momento estou fazendo os desafios do [tryhackme].

### Desafios de código

Seguindo a mesma linha dos CTF, os desafios de código são úteis para desenvolver habilidades em resolver problemas que envolvam programação. Algoritmos e estrutura de dados são as principais ferramentas usadas para resolver esses desafios. Essas são áreas fundamentais para quem trabalha com programação, e um bom domínio vai te dar a confiança para implementar qualquer tipo de sistema em qualquer linguagem que exista na face da terra. Por conta disso, grandes empresas de tecnologia (Facebook, Amazon, Google, etc) utilizam desafios de códigos em seus processos de contratação. Por exemplo, a google possui um site exclusivo para [competições de código][google], onde você pode concorrer a prêmios de até U$ 15.000 e de quebra ser contratado pela gigante das buscas online.

### Pesquisa científica

Por último mas não menos importante, uma parte da minha rotina é destinada para tarefas que envolvem a atividade pesquisa de modelos computacionais baseados em inteligência artificial, mais precisamente modelos de deep learning. Essa atividade faz parte da pesquisa que desenvolvo no curso de doutorado. Nesse item também poderia incluir leitura e escrita de artigos científicos, reuniões com colegas e com o orientador. Como não pedi licença para estudo no órgão onde trabalho, tenho que estender minha rotina de trabalho para algo em torno de 10-12h diárias, acordando cedo ou levando até mais tarde. Apesar disso, sempre procuro incluir esportes e lazer no dia a dia para manter a saúde física e mental. É importante ressaltar que nessa pesquisa utilizo toda matemática (cálculo, algebra linear e probabilidade) que aprendi na graduação e mestrado para desenvolver algoritmos inteligentes capazes de identificar padrões em grande volume de dados, algo que seria inviável fazer manualmente ou com algoritmos clássicos.


### Conclusão

Essa é a rotina de um engenheiro da computação mais voltado para a área de software e inteligência artificial. Tenho alguns projetos pessoais na área de hardware que estão parados, por isso não quis mencionar, mas se você tiver interesse nessa área recomendo o canal [Laboratório da Júlia][julia] no youtube para você conferir um outro perfil de engenheiro da computação mais voltado para a parte de hardware. Independente do perfil do profissional, é indispensável muito estudo e dedicação para se manter atualizado na área. 
Use o espaço dos comentários para tirar sua dúvida. Se você é profissional da área, deixe sua rotina aí nos comentários para que as pessoas interessadas também possam conhecer. Qualquer feedback será bem vindo. Por sua atenção, muito obrigado.


[software]: https://wesinalves.github.io/software/2020/03/13/software-customizado.html
[python]: https://www.udemy.com/course/como-programar-em-python/?referralCode=F9988BB53D50D650FC9B
[infosec]: http://ctf.infosecinstitute.com/
[tryhackme]: https://tryhackme.com/
[google]: https://codingcompetitions.withgoogle.com/
[julia]: https://www.youtube.com/c/Laborat%C3%B3riodaJulia/
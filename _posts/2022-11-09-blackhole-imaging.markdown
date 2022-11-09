---
layout: post
title:  "Como ver o que nunca foi visto"
date:   2022-11-09 07:50:14 -0300
categories: engenharia
---

![blackhole]({{"/assests/img/posts/black-hole.jpg"}})

No filme "Interestelar" lançado em 2014, um buraco negro fictício chamado Gargantua 
tem um grande destaque na trama.
Nele, Matthew McConaughey e Anne Hathaway interpretam astronautas que 
viajam através de um buraco de minhoca - um túnel que permite viagens 
quase instantâneas entre pontos distantes - para explorar três planetas 
que orbitam Gargântua, 10 bilhões de anos-luz da Terra. Para criar a imagem do 
buraco negro, o diretor Crhistopher Nolan contratou 
a consultoria do físico teórico e ganhador do Nobel de física Kip Thorn.

Apenas cinco anos após o filme, um punhado de grandes descobertas sobre 
buracos negros deram aos físicos novos insights sobre como esses objetos 
massivos se comportam, e inclusive, como eles realmente se parecem. 

Embora os cientistas estejam pesquisando e teorizando buracos negros há décadas, 
o Gargantua é apenas uma reprodução artística de um buraco negro. Entretanto,
graças a um esforço colaborativo da comunidade científica, a primeira imagem
real de um buraco negro foi gerada.


Neste artigo você irá descobrir:
* O que é um buraco negro
* Qual telescópio foi utilizado
* Como a primeira imagem de um buraco negro foi gerada
* Como simular um buraco negro

# O que é um buraco negro?
Buraco negro é uma região do espaço-tempo em que o campo gravitacional 
é tão intenso que nada — nenhuma partícula ou radiação eletromagnética 
como a luz — pode escapar. A teoria da relatividade geral prevê que 
uma massa suficientemente compacta pode deformar o espaço-tempo para 
formar um buraco negro. Ele é formado por anéis de luzes ao redor de
uma área densa e escura chamada de *sombra (shadow)*.

# Quem é o autor da teoria de buraco negros?
A ideia de um corpo tão massivo que nem a luz poderia escapar foi 
brevemente proposta pelo pioneiro astronômico e clérigo inglês John Michell 
em uma carta publicada em novembro de 1784. Os cálculos simplistas de Michell 
supunham que esse corpo pudesse ter a mesma densidade que o Sol e 
concluíram que esse corpo se formaria quando o diâmetro de uma estrela 
excedesse o do Sol por um fator de 500 e a velocidade de escape da superfície 
excedesse a velocidade usual da luz.

Em 1915, Albert Einstein desenvolveu a teoria da relatividade geral, 
que mostrou que quando uma estrela massiva morre, ela deixa para trás um 
pequeno núcleo remanescente denso. Se a massa do núcleo for mais do que 
cerca de três vezes a massa do Sol, mostraram as equações, a força da 
gravidade supera todas as outras forças e produz um buraco negro. 

# Qual o telescópio utilizado para ver o buraco negro?
Mais de 100 anos após a teoria da relatividade de einstein serem apresentadas,
em 10 de abril de 2019, a imagem direta de um buraco negro e 
sua vizinhança foi gerada, após observações feitas pelo 
*Event Horizon Telescope* (EHT) em 2017 do buraco negro supermassivo no centro 
galáctico de Messier 87.

Esse telescópio é um conjunto de oito radiotelescópios 
terrestres que formam um telescópio computacional do tamanho da Terra, 
estudando o universo com sensibilidade e resolução sem precedentes. 
O enorme telescópio virtual, que usa uma técnica chamada interferometria 
de linha de base muito longa (VLBI), tem uma resolução angular de 
20 micro-segundos de arco – o suficiente para ler um jornal em Nova York 
de um café na calçada em Paris!

# Quais os desafios enfrentados para gerar a imagem?
O EHT apresenta enormes desafios de processamento de dados, incluindo 
rápidas flutuações de fase atmosférica, grande largura de banda de 
gravação e telescópios amplamente diferentes e geograficamente dispersos.

A cada dia, o EHT gera mais de 350 terabytes de observações, 
armazenadas em discos rígidos cheios de hélio. Reduzir o volume e a 
complexidade de tantos dados é extremamente difícil.

Por exemplo, como o EHT não é um único telescópio, mas uma rede de tipos 
semelhantes de telescópios, há muito “ruído” ou diferentes tipos de erros 
potenciais, que podem vir dos dados gerados pela rede do telescópio.

“Uma das maiores fontes de ruído é o efeito atmosférico”, disse o Dr. Chan. 
“Estamos olhando através da atmosfera para detectar a onda de rádio. Mas há 
coisas como vapor de água, nuvens e turbulência na atmosfera que podem alterar o sinal. 
Portanto, precisamos encontrar maneiras de remover esses efeitos na atmosfera”.

Outro desafio enfrentado pelos cientistas do EHT é o movimento de rotação da Terra,
que provoca pequenas alterações nos dados capturados pelos telescópios 
que precisam ser corrigidos antes de serem analisados.

> *Quando o objetivo é ver algo nunca antes visto, como os cientistas podem ter certeza de que a imagem está correta?*

# Como a imagem do buraco negro foi gerada?
A Figura 2 ilustra a metodologia utilizada para tirar foto do buraco negro M87.
Cada telescópio do EHT capturam a radiação eletromagnética gerada pelo buraco negro M87 durante
a campanha dos dias 5, 10, 6 e 11 de abril do ano de 2017. Através dos
algoritmos computacionais e astrofísicos foi feita a correlação dos dados entre os
telescópios envolvidos, e os dados são calibrados
e preparados para a próxima etapa removendo os ruídos causados pelo clima. Após a calibração dos dados,
o volume foi reduzido drásticamente passando da ordem de petabytes de informação para megabytes. 
Após isso, o processo de análise, simulação e reconstrução da imagem foi realizado usando 
ferramentas computacionais, que serão detalhadas mais adiante.

Para garantir que não houvesse manipulação e enviesamento na reconstrução das imagens, o 
a etapa de reconstrução foi dividida em duas fases. Na primeira, o grupo de pesquisadores se dividiu 
em 4 times independentes que trabalharam sem comunicação entre si. Os times 1 e 2 usaram
o metodo Regularized Maximum Likelyhood (RML) e os times 3 e 4 usaram o método CLEAN.
Todas as imagens reconstruidas pelos 4 times apresentaram morfologias semelhantes,
embora a reconstrução apresente diferenças em relação a coloração.

Na segunda fase, uma validação cruzada no procedimento de seleção dos parametros foi realizada.
Primeiramente, quatro fontes de dados primitivas foram geradas: um anel, um anel crescente, um disco, e uma dupla de objetos.
Para cada reconstrução da fonte de dados, os parametros selecionados não levava em consideração
os parametros da fonte específica. Por exemplo, para reconstruir a imagem do disk, somente
os parametros relacionados ao anel, ao crescente e a dupla de objetos foram selecionados.
A reconstrução de cada fonte foi realizada usando três ferramentas distintas: DIFMAP, eht-imaging, SMILI.
A primeira ferramenta foi criada em c, e as duas ultimas foram construídas usando Python.

Além das fontes de dados primitivas, foi gerada uma simulação de buraco negro usando 
modelos físicos baseados na magneto-hidrodinâmica da relatividade geral (GRMHD).
A reconstrução dessa simulação usou os mesmos parâmetros usados para reconstruir o M87.

![etapaseht]({{"/assests/img/posts/etapaseht.png"}})


Observar o buraco negro com o EHT é um pouco como ouvir uma música tocada 
em um piano com muitas teclas quebradas. Se o conjunto de telescópios do EHT fossem localizados 
em todos os lugares do globo, daria para ouvir todas as notas possíveis e, assim, 
ouvir uma versão perfeita da música. No entanto, como são apenas 8 telescópios dispostos em alguns 
locais, somente é possível reconhecer a música que está sendo tocada com apenas algumas notas. 
Embora ouvir uma música dessa maneira definitivamente não seja perfeito, muitas vezes 
ainda há informações suficientes para acompanhar.

Outra analogia intertessante de se fazer é quando escrevemos uma palavra ou expressão
com algumas carectres trocados e ainda assim conseguimos reconhecer seu significado. 
Por exemplo, a expressão bxraco nxgrx, é facilmente reconhecida.

Mesmo que ainda houvesse muitas lacunas nas notas ou na expressão perto do final, é incrível que seu 
cérebro possa preencher buracos e você possa começar a entender a música ou o siginificado da palvra. 
O que seu cérebro estava fazendo aqui é muito semelhante ao que os algoritmos de 
imagem que desenvolvemos para o EHT fazem. Usando os dados esparsos que foram coletados
dos telescópios, os algoritmos preenchem as lacunas que faltam com a imagem mais natural.

Mas vale apena salientar que sempre há alguma ambiguidade no que é a verdadeira imagem. 
Por exemplo, mesmo que muitas notas estejam tocando, desde que algumas notas estejam faltando, 
não precisa ser "A sinfonia do buraco negro". Quanto mais notas faltarem, mais ambiguidade haverá. 
Na verdade, talvez perto do início você possa ter pensado que a música era a "sinfonia da galáxia de andrômeda". 
Se as notas que estivessem disponíveis não fossem o suficiente, os cientistas do EHT estariam em apuros, 
pois poderia existir várias músicas que se encaixam bastante bem nas notas disponíveis. 
No entanto, à medida que aumentamos o número de notas (medidas), a música específica fica clara.

![possibilities]({{"/assests/img/posts/infinite_possibilities.png"}})

Da mesma forma, para o EHT, os dados que foram coletados contam apenas uma parte da 
história, pois há um número infinito de imagens possíveis que são perfeitamente 
consistentes com os dados que medimos. Mas nem todas as imagens são criadas iguais – 
algumas se parecem mais com o que pensamos como imagens do que outras. 
Para escolher a melhor imagem, basicamente todas as imagens infinitas que 
explicam as medições do telescópio são classificadas de acordo com a sua 
aparência razoável. Em seguida, é selecionada a imagem (ou conjunto de imagens) que 
parece mais razoável.

![likely]({{"/assests/img/posts/very_likely.png"}})

Usando esse algoritmo, os pesquisadores são capazes de reconstruir imagens a partir de medições 
muito esparsas medidas com o EHT. Abaixo está uma reconstrução de amostra feita 
usando dados coletados do M87. 
![reconstruction]({{"/assests/img/posts/reconstruction.png"}})

O pacote Python *eht-imaging* utilizado para simular e reconstruir a imagem do buraco negro
baseado nos parametros espaciais é composto por um conjunto de ferramentas conforme ilustra
a Figura 6. Observe que a biblioteca *numpy* é a base para diversas outras bibliotecas
envolvidas no projeto. A biblioteca *numpy* é eficiente para manipulação de vetores
de N dimensões, que é um atributo essencial para os pesquisadores manipularem
grandes base de dados númericas.
![ehtim]({{"/assests/img/posts/ehtim_numpy.png"}})

# Simulação de um buraco negro usando einsteinpy
Dr. Chan explicou que há uma enorme vantagem em usar Python para análise 
porque permite que os cientistas façam seu trabalho mais rapidamente. 
Como essa foi a primeira vez que os cientistas viram esse tipo de dados, 
eles precisavam ser capazes de experimentar coisas diferentes em tempo 
real – e o Python é uma ótima linguagem para essa abordagem exploratória. 
“Muito do nosso trabalho é realmente trabalhar e pensar sobre os dados, 
e o Python nos permite acelerar o processo”, disse ele.

“Acredita-se que o Python sozinho seria muito lento para processar nossos 
volumes de dados. No entanto, com os projetos de código aberto no NumFOCUS, 
conseguimos iterar nossos algoritmos tão rápido que eles nos permitiram 
terminar nosso trabalho em dois anos, o que seria difícil de alcançar se 
usássemos apenas C.”, declara Dr. Chan.

A biblioteca einsteinpy possui vários módulos que ajudam a entender e simular
várias das ideias propostas por Einstein através de gráficos.

```
import astropy.units as u
from einsteinpy.rays import Shadow
from einsteinpy.plotting import ShadowPlotter
import matplotlib.pyplot as plt

mass = 1 * u.kg
fov = 30 * u.km
# What field of view is the user expecting

shadow = Shadow(mass=mass, fov=fov, n_rays=1000)
obj = ShadowPlotter(shadow=shadow, is_line_plot=True)
obj.plot()
obj.show()

# obj = ShadowPlotter(shadow=shadow, is_line_plot=False)
# obj.plot()
# obj.show()
# plt.show()
```

As quatro primeiras linhas da Listagem 1 importam as bibliotecas necessárias
para gerar a simulação de um buraco negro. A biblioteca astropy é uma coleção 
de pacotes projetados para o uso em astronomia. Por sua vez, a biblioteca einsteinpy
é uma coleção de pacotes dedicados a resolver problemas teoria da relatividade geral.
Vale destacar a classe *Shadow* dentro do módulo *rays* responsável por reproduzir a área densa e escura do 
buraco negro. A biblioteca matplotlib possui vários recursos para criar visualizações dos dados.

Em seguida, os parametros `mass` e `fov` são configurados pois serão usados
como argumentos no método construtor da classe *Shadow*. Depois, o objeto *shadow* é criado com 1000 raios.
Então, os gráficos são gerados usando a classe *ShadowPlotter*. 

![blackhole1]({{"/assests/img/posts/blackhole1.png"}})

A classe ShadowPlotter, recebe como argumentos um objeto do tipo Shadow e um valor booleano *is_line_plot*. 
O argumento booleando `is_line_plot` determina se o gráfico gerado será de intensidade, 
caso verdadeiro, ou do próprio buraco negro caso seja falso.

![blackhole2]({{"/assests/img/posts/blackhole2.png"}})

# Considerações finais

Nesse artigo você descobriu que a primeira imagem real de um buraco negro
foi gerada graças a um esforço colaborativo entre centros de pesquisas quem compẽe
o conjunto de telescópio EHT.

Grandes desafios foram enfrentados para a coleta de dados tais como o grande volume
de dados gerados pelos telescópios, efeitos atmosféricos, nuvens e vapor d'água.
Para processamento desses dados foi uitlizada a linguagem Python, por possuir várias
bibliotecas de código livre que facilitam a vida dos astrônomos, por exemplo, numpy, 
matplotlib e astropy.

Se você tem interesse nesse assunto, gostaria de fazer simulações físicas ou se interessa por algum outro campo científico
que envolva cálculos matemáticos complexos e manipulação de vetores e matrizes, vale a pena
conferir as bibliotecas.

# Referências

[REPOSITÓRIO EHT-IMAGING](https://github.com/achael/eht-imaging)

[First M87 Event Horizon Telescope Results. I. The Shadow of the Supermassive Black Hole](https://iopscience.iop.org/article/10.3847/2041-8213/ab0ec7)

[First M87 Event Horizon Telescope Results. II. Array and Instrumentation](https://iopscience.iop.org/article/10.3847/2041-8213/ab0c96/pdf)

[First M87 Event Horizon Telescope Results. III. Data Processing and Calibration](https://iopscience.iop.org/article/10.3847/2041-8213/ab0c57/meta)

[First M87 Event Horizon Telescope Results. IV. Imaging the Central Supermassive Black Hole](https://iopscience.iop.org/article/10.3847/2041-8213/ab0e85/pdf)

[First M87 Event Horizon Telescope Results. V. Physical Origin of the Asymmetric Ring](https://iopscience.iop.org/article/10.3847/2041-8213/ab0f43/pdf)

[First M87 Event Horizon Telescope Results. VI. The Shadow and Mass of the Central Black Hole](https://arxiv.org/pdf/1906.11243.pdf)

[Event Horizon Telescop](https://en.wikipedia.org/wiki/Event_Horizon_Telescope)

[Aniversário do filme Interstellar](https://www.businessinsider.com/interstellar-anniversary-learned-about-black-holes-2019-11)

[Numpy](https://numpy.org/case-studies/blackhole-image/)

[Astropy](https://www.astropy.org/)

[matplotlib](https://matplotlib.org/stable/index.html)

[einsteinpy](https://einsteinpy.org/)

[Buraco Negro - Wikipedia](https://pt.wikipedia.org/wiki/Buraco_negro)

[Numfocus black hole](https://numfocus.org/case-studies/first-photograph-black-hole)

[Schwarzschild_metric](https://en.wikipedia.org/wiki/Schwarzschild_metric)

[How to take a picture of a black hole | Katie Bouman](https://www.youtube.com/watch?v=BIvezCVcsYs)

[How to take a picture of the Milky Way's black hole | Katie Bouman](https://www.youtube.com/watch?v=Ol_SB5Zfv-Y)

---
layout: post
title:  "Treinando sua primeira rede neural para uma tarefa de classficação simples"
date:   2018-10-01 08:32:14 -0300
categories: tensorflow
---
## Treinando sua primeira rede neural para uma tarefa de classficação simples

Olá, seja bem vindo(a) a mais um tópico na série de estudo sobre Tensorflow. Finalmente, iremos colocar a mão no massa e codificar nossa primeira rede neural para uma tarefa de classificação simples. Espero que você tenha já tenha preparado seu ambiente para rodar os scripts, senão confira os links ao final do post e siga a opção desejada.
Antes de continuar, você precisa estar familiarizado com os conceitos de aprendizado de máquina. Uma boa referência é o [machine learning crash course][course] produzido pela google.

O objetivo deste post é treinar um modelo de rede neural para classificar images de vestuário, tais como tênis e camisas. Ao terminar a leitura, você será capaz de:

* carregar o conjunto fashion mnist como dados de treinamento
* explorar e preprocessar os dados de treinamento
* construir seu modelo com o TensorFlow
* treinar, avaliar e fazer predições com seu modelo.

[course]: https://developers.google.com/machine-learning/crash-course/ml-intro

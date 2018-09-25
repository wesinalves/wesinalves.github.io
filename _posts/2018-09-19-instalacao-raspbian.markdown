---
layout: post
title:  "Instalando o Tensorflow no Raspbian"
date:   2018-09-13 15:32:14 -0300
categories: tensorflow
---
![respbian]({{"/assests/img/posts/install_tensorflow_on_raspberry_pi.jpg"}})
##### Sistema operacional Raspbian.

## Instalação do Tensorflow

Este guia explica como instalar o TensorFlow no Repberry Pi rodando o sistema Raspbian. Embora essas instruções possam funcionar em outras variantes do Pi, elas são testadas e suportadas com os seguintes requisitos de sistema:

* Dispositivos Raspberry Pi rodando Raspbian 9.0 or superior


*Aviso importantíssimo.*
A instalação através do `pip`nativo é a mais recomendada pela documentação oficial.

## Instalando com `pip` nativo
Se uma das seguintes versões do Python não estiver instalada em sua máquina, instale-a antes de prosseguir:
* Python 2.7
* Python 3.4+

Se o seu sistema ainda não tiver uma dessas do Python, instale-a agora. Ele já deve estar incluído quando o Raspbian foi instalado, portanto, nenhuma etapa extra deve ser necessária.

## Instalar requisitos para o sistema operacional Raspbian
```
$ sudo apt update
$ sudo apt install python3-dev python3-pip
$ sudo apt install libatlas-base-dev        # required for numpy
$ sudo pip3 install -U virtualenv           # system-wide install
```

## Instalar o tensorflow via pacote `pip`
```
$ pip3 install --user --upgrade tensorflow  # install in $HOME
```

## Valide sua instalação
1. Certifique-se de que seu ambiente esteja preparado para executar programas do TensorFlow.
2. Execute um programa curto do TensorFlow.

Se você instalou no pip nativo invoque python do seu terminal, caso contrário, ative seu ambiente Anaconda primeiro, e depois invoque o python: 
```
$ python
```
Digite o seguinte programinha dentro do shell interativo do python:

```python
# Python
import tensorflow as tf
hello = tf.constant('Hello, TensorFlow!')
sess = tf.Session()
print(sess.run(hello))
```

Se o sistema gerar o seguinte, você estará pronto para começar a escrever os programas do TensorFlow:
```
Hello, TensorFlow!
```

Se o sistema emitir uma mensagem de erro em vez de uma saudação, consulte os problemas comuns de instalação na documentação oficial.




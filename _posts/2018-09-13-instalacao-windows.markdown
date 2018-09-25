---
layout: post
title:  "Instalando o Tensorflow no Windows"
date:   2018-09-13 15:32:14 -0300
categories: tensorflow
---
![windows]({{"/assests/img/posts/Microsoft10.jpg"}})
##### Sistema operacional Windows.

## Instalação do Tensorflow

Este guia explica como instalar o TensorFlow no sitema operacional Windows. Embora essas instruções possam funcionar em outras variantes do macOs, elas são testadas e suportadas com os seguintes requisitos de sistema:

* 64-bit, x86 desktops or laptops
* Windows 7 or later

## Opções para instalação
Você pode escolher uma das seguintes opções para instalação do Tensorflow:
* *TensorFlow apenas com suporte a CPU*. Se o seu sistema não tiver uma GPU NVIDIA®, você deverá instalar esta versão. Note que esta versão do TensorFlow é normalmente muito mais fácil de instalar (normalmente, em 5 ou 10 minutos), portanto, mesmo se você tiver uma GPU NVIDIA, recomenda-se instalar esta versão primeiro.
* *TensorFlow com suporte a GPU*. Os programas TensorFlow normalmente são executados significativamente mais rápido em uma GPU do que em uma CPU. Portanto, se o seu sistema com GPU NVIDIA® satisfazer os pré-requisitos mostrados abaixo e você precisar executar aplicativos com desempenho melhor, você deverá optar por essa versão.

### Requisitos para executar o TensorFlow com suporte a GPU
* CUDA® Toolkit 9.0. Para obter detalhes, consulte a documentação da NVIDIA Certifique-se de anexar os nomes de caminho relevantes do Cuda à variável de ambiente% PATH%, conforme descrito na documentação da NVIDIA.
* Os drivers NVIDIA associados ao CUDA Toolkit 9.0.
* cuDNN v7.0. Para detalhes, consulte a documentação da NVIDIA. Observe que o cuDNN é normalmente instalado em um local diferente das outras DLLs CUDA. Assegure-se de incluir o diretório no qual instalou a DLL cuDNN na variável de ambiente% PATH%.
* cuDNN v7.0. Para detalhes, consulte a documentação da NVIDIA. Observe que o cuDNN é normalmente instalado em um local diferente das outras DLLs CUDA. Assegure-se de incluir o diretório no qual instalou a DLL cuDNN na variável de ambiente% PATH%.

*Aviso Importantíssimo.*
Se você tiver uma versão diferente de um dos pacotes anteriores, altere para as versões especificadas. Em particular, a versão cuDNN deve corresponder exatamente: O TensorFlow não será carregado se não for possível encontrar o cuDNN64_7.dll. Para usar uma versão diferente do cuDNN, você deve criar a partir da origem.

## Como instalar o Tensorflow
Você deve escolher o mecanismo pelo qual você instala o TensorFlow. As opções suportadas são as seguintes:
* `pip` nativo
* Anaconda

O `pip` nativo instala o TensorFlow diretamente no seu sistema sem passar por um ambiente virtual. Como uma instalação de `pip` nativa não é isolada em um contêiner separado, a instalação do `pip` pode interferir em outras instalações baseadas em Python em seu sistema. No entanto, se você entende pip e seu ambiente Python, uma instalação de `pip` nativa geralmente envolve apenas um único comando! Além disso, se você instalar com o `pip` nativo, os usuários poderão executar programas do TensorFlow em qualquer diretório do sistema.

No Anaconda, você pode usar o comando `conda` para criar um ambiente virtual. No entanto, dentro do Anaconda, recomendamos a instalação do TensorFlow com o comando `pip install`, não com o comando `conda install`.

*Aviso importantíssimo.*
O pacote conda é suportado pela comunidade e não é oficial. Ou seja, a equipe do TensorFlow não testa nem mantém este pacote conda. Use esse pacote por sua conta e risco.

## Instalando com `pip` nativo
Se uma das seguintes versões do Python não estiver instalada em sua máquina, instale-a antes de prosseguir:
* Python 3.5.x 64-bit from python.org
* Python 3.6.x 64-bit from python.org

O TensorFlow suporta o Python 3.5.xe 3.6.x no Windows. Observe que o Python 3 vem com o gerenciador de pacotes pip3, que é o programa que você usará para instalar o TensorFlow.

Para instalar o TensorFlow, abra um terminal. Em seguida, digite o comando apropriado `pip3 install` nesse terminal. Para instalar a versão somente da CPU do TensorFlow, digite o seguinte comando:
```
C:\ > pip3 install --upgrade tensorflow
```
Para instalar a versão GPU do TensorFlow, digite o seguinte comando:
```
C:\ > pip3 install --upgrade tensorflow-gpu
```

## Instalando com Anaconda
Siga os seguintes passos para instalar o TensorFlow em um ambiente Anaconda:
1. Siga as instruções no site de download do Anaconda para baixar e instalar o Anaconda.
2. Crie um ambiente conda chamado tensorflow, invocando o seguinte comando:
```
C:> conda create -n tensorflow pip python=3.5 
```
3. Ative o ambiente conda emitindo o seguinte comando:
```
C:> activate tensorflow
 (tensorflow)C:>  # Seu terminal deve mudar 
```
4. Digite o comando apropriado para instalar o TensorFlow dentro do seu ambiente conda. Para instalar a versão somente da CPU do TensorFlow, digite o seguinte comando:
```
(tensorflow)C:> pip install --ignore-installed --upgrade tensorflow 
```
Para instalar a versão GPU do TensorFlow, digite o seguinte comando (em uma única linha):
```
(tensorflow)C:> pip install --ignore-installed --upgrade tensorflow-gpu 
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

Se o sistema emitir uma mensagem de erro em vez de uma saudação, consulte os [problemas comuns de instalação][problemas] na documentação oficial.



[problemas]: https://www.tensorflow.org/install/install_windows#common_installation_problems

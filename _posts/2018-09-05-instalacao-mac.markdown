---
layout: post
title:  "Instalando o Tensorflow no macOs"
date:   2018-09-05 15:00:14 -0300
categories: tensorflow
---
![macos]({{"/assests/img/posts/macoshero.jpg"}})
##### Sistema operacional macOs.

## Instalação do Tensorflow

Este guia explica como instalar o TensorFlow no macOs. Embora essas instruções possam funcionar em outras variantes do macOs, elas são testadas e suportadas com os seguintes requisitos de sistema:

* macOS 10.12.6 (Sierra) or higher

## Como instalar o Tensorflow
Existem algumas opções para instalar o TensorFlow em sua máquina:
* [Usando `pip` em um ambiente virtual (recomendado)](#goto-1)<a id="toc-1"></a>
* [Usando `pip` nativo em seu sistema](#goto-2)<a id="toc-2"></a>
* [Configurando um contêiner do Docker](#goto-3)<a id="toc-3"></a>

<a id="goto-1"></a>
### Usando `pip` em um ambiente virtual [↑](#toc-1)

A ferramenta [Virtualenv][virtual] cria ambientes virtuais em Python que são isolados de outros ambientes de desenvolvimentos em Python na mesma máquina. Nesse cenário, você instala o Tensorflow e suas dependências em um ambiente virtual que está disponível quando for ativado. O Virtualenv fornece uma maneira confiável de instalar e executar o TensorFlow, evitando conflitos com o restante do sistema.

**1. Inicie um terminal (um shell). Você executará todas as etapas subsequentes neste shell.**
**2. Instale o pip e o Virtualenv digitando os seguintes comandos:**

```
$ sudo easy_install pip
$ pip install --upgrade virtualenv 
```

**3.Crie um ambiente Virtualenv digitando um comando em um dos seguintes formatos:*

```
$ virtualenv --system-site-packages targetDirectory # for Python 2.7
$ virtualenv --system-site-packages -p python3 targetDirectory # for Python 3.n
```
onde targetDirectory identifica o topo da árvore Virtualenv. Neste post,as instruções assumem que targetDirectory é ~ / tensorflow, mas você pode escolher qualquer diretório.

**4. Ative o ambiente Virtualenv emitindo um dos seguintes comandos:**

```
$ cd targetDirectory
$ source ./bin/activate      # If using bash, sh, ksh, or zsh
$ source ./bin/activate.csh  # If using csh or tcsh 
```
O comando `source` deve alterar seu shell para o seguinte:
```
(targetDirectory)$ 
```

**5. Certifique-se de que o pip ≥8.1 esteja instalado:**
```
(targetDirectory)$ easy_install -U pip
```
**6. Emita um dos seguintes comandos para instalar o TensorFlow e todos os pacotes exigidos pelo TensorFlow no ambiente Virtualenv ativo:**
```
(targetDirectory)$ pip install --upgrade tensorflow      # for Python 2.7
(targetDirectory)$ pip3 install --upgrade tensorflow     # for Python 3.n
```

**7. Opcional. Se a Etapa 6 falhar (normalmente porque você chamou uma versão de pip inferior a 8.1), instale o TensorFlow no ambiente Virtualenv ativo, emitindo um comando do seguinte formato:**

```
$ pip install --upgrade tfBinaryURL   # Python 2.7
$ pip3 install --upgrade tfBinaryURL  # Python 3.n 
```
em que tfBinaryURL identifica o URL do pacote do Python TensorFlow. O valor apropriado de tfBinaryURL depende do sistema operacional e da versão do Python. Por exemplo, se você estiver instalando o TensorFlow para macOS, Python 2.7, o comando para instalar o TensorFlow no Virtualenv ativo é o seguinte:
```
$ pip3 install --upgrade 
https://storage.googleapis.com/tensorflow/mac/cpu/tensorflow-1.10.1-py3-none-any.whl
```

Veja a [lista de problemas mais comuns][problemas] da documentação oficial se você encontrar problemas na instalação.

Observe que você deve ativar o ambiente Virtualenv sempre que usar o TensorFlow em um novo shell. Se o ambiente Virtualenv não estiver atualmente ativo (ou seja, o prompt não for (*targetDirectory*), digite um dos seguintes comandos:
```
$ cd *targetDirectory*
$ source ./bin/activate      # If using bash, sh, ksh, or zsh
$ source ./bin/activate.csh  # If using csh or tcsh 
```
Seu prompt será transformado no seguinte para indicar que seu ambiente de tensorflow está ativo:
```
(targetDirectory)$ 
```
Quando o ambiente Virtualenv está ativo, você pode executar programas TensorFlow a partir do shell.

Quando você terminar de usar o TensorFlow, você poderá desativar o ambiente emitindo o seguinte comando:
```
(targetDirectory)$ deactivate 
```

**Desinstalar o Tensorflow**
Para desinstalar o TensorFlow, remova o diretório Virtualenv que você criou na etapa 2:
```
deactivate  # stop the virtualenv
rm -r ~/tensorflow
```

<a id="goto-2"></a>
### Instalando com `pip` nativo [↑](#toc-2)

Use o pip para instalar o pacote TensorFlow diretamente em seu sistema sem usar um contêiner ou ambiente virtual para isolamento. Esse método é recomendado para administradores de sistemas que desejam uma instalação do TensorFlow que esteja disponível para todos em um sistema multiusuário.

Como uma instalação do sistema não é isolada, ela poderia interferir em outras instalações baseadas em Python. 
Além disso, talvez seja necessário desabilitar a Proteção de Integridade do Sistema (SIP) para instalar através do pip nativo. No entanto, se você entende SIP, pip e seu ambiente Python, uma instalação de pip nativa é relativamente fácil de executar.

Para instalar o TensorFlow, seu sistema deve conter uma das seguintes versões do Python:
* Python 2.7
* Python 3.3+

Ao instalar o Python, talvez seja necessário desativar a Proteção de Integridade do Sistema (SIP) para permitir que qualquer entidade diferente da Mac App Store instale o software.

Os gerenciadores de pacote pip ou pip3 provavelmente foi instalado em seu sistema quando você instalou o Python. Para determinar se pip ou pip3 está realmente instalado em seu sistema, digite um dos seguintes comandos:

```
pip -V  # for python2.7 
pip3 -V  # for python3.n 
```

É rocomendado fortemente o pip ou pip3 versão 8.1 ou superior para instalar o TensorFlow. Se pip ou pip3 8.1 ou posterior não estiver instalado, digite os seguintes comandos para instalar ou atualizar:

```
$ sudo easy_install --upgrade pip
$ sudo easy_install --upgrade six 
```

** Instalar o Tensorflow em seu sistema**
Supondo que o software de pré-requisito esteja instalado no seu Mac, siga os seguintes passos:
1. Instale o TensorFlow, invocando um dos seguintes comandos:

```
$ pip install tensorflow      # Python 2.7; CPU support
$ pip3 install tensorflow     # Python 3.n; CPU support
```
2. (Opcional) Se o Passo 1 falhar, instale a versão mais recente do TensorFlow emitindo um comando do seguinte formato:
```
$ sudo pip  install --upgrade tfBinaryURL   # Python 2.7
$ sudo pip3 install --upgrade tfBinaryURL   # Python 3.n 
```
em que tfBinaryURL identifica o URL do pacote do Python TensorFlow. O valor apropriado de tfBinaryURL depende do sistema operacional e da versão do Python. Por exemplo, se você estiver instalando o TensorFlow para macOS, Python 2.7, o comando para instalar o TensorFlow no Virtualenv ativo é o seguinte:
```
$ sudo pip3 install --upgrade 
https://storage.googleapis.com/tensorflow/mac/cpu/tensorflow-1.10.1-py3-none-any.whl
```

Veja a [lista de problemas mais comuns][problemas] da documentação oficial se você encontrar problemas na instalação.

**Desinstalar o Tensorflow**
Para desinstalar o TensorFlow de seu sistema, use um dos seguintes comandos:
```
$ pip uninstall tensorflow   # for Python 2.7
$ pip3 uninstall tensorflow  # for Python 3.n
```

<a id="goto-3"></a>
### Configurando um container do Docker [↑](#toc-3)
O Docker isola completamente a instalação do TensorFlow de pacotes pré-existentes em sua máquina. O contêiner do Docker contém o TensorFlow e todas as suas dependências, isso pode deixar a instalação um pouco pesada. Você pode optar pela instalação via Docker se estiver incorporando o TensorFlow em uma arquitetura de aplicativo maior que já usa o Docker.

Siga os seguintes passos para instalar o TensorFlow através do Docker:

1. Instale o Docker na sua máquina, conforme descrito na documentação do Docker, que pode ser encontrada facilmente pesquisando no Google. 
2. Ative um contêiner do Docker que contenha uma das imagens [binárias do TensorFlow][binary].

O restante desta seção explica como iniciar um contêiner do Docker.

Para iniciar um contêiner Docker com suporte apenas à CPU (ou seja, sem suporte a GPU), insira um comando do seguinte formato:
```
$ docker run -it -p hostPort:containerPort TensorFlowCPUImage
```

É importante destacar que o parâmetro `-p hostPort: containerPort` é opcional. Se você planeja executar programas do TensorFlow a partir do shell, omita essa opção. Se você planeja executar programas TensorFlow como notebooks Jupyter, defina hostPort e containerPort como 8888. Se desejar executar o TensorBoard dentro do contêiner, adicione um segundo sinalizador `-p`, configurando hostPort e containerPort como 6006.

Em contrapartida, o parâmetro `TensorFlowCPUImage` é necessário. Ele identifica o contêiner do Docker. Especifique um dos seguintes valores:
* tensorflow / tensorflow, que é a imagem binária da CPU do TensorFlow.
* tensorflow / tensorflow: latest-devel, que é a última imagem binária do CPU TensorFlow mais o código fonte.

Por exemplo, o seguinte comando lança a imagem binária da CPU mais recente do TensorFlow em um contêiner do Docker a partir do qual você pode executar programas do TensorFlow em um shell:
```
$ docker run -it tensorflow/tensorflow bash
```
Entretanto, se você quiser ativar a ultima imagem do binária da CPU mais recente do Tensorflow que rode em um Jupiter notebook, use o seguinte comando:
```
$ docker run -it -p 8888:8888 tensorflow/tensorflow
```

O Docker baixará a imagem binária do TensorFlow na primeira vez que você a iniciar.

## Valide sua instalação
1. Certifique-se de que seu ambiente esteja preparado para executar programas do TensorFlow.
2. Execute um programa curto do TensorFlow.

Se você instalou no pip nativo ou Virtualenv, faça o seguinte:
1. Abra um terminal.
2. Se você instalou com o Virtualenv, ative seu contêiner.
3. Se você instalou o código-fonte do TensorFlow, navegue até qualquer diretório, exceto um que contenha o código-fonte do TensorFlow.

Se você instalou pelo Docker, inicie um contêiner do Docker a partir do qual você pode executar o bash. Por exemplo:
```
$ docker run -it tensorflow/tensorflow bash
```

Então, invoque python do seu shell da seguinte maneira:
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



[virtual]: https://virtualenv.pypa.io/en/stable/
[problemas]: https://www.tensorflow.org/install/install_mac#common_installation_problems
[binary]: https://hub.docker.com/r/tensorflow/tensorflow/tags/
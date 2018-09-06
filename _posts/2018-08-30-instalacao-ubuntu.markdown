---
layout: post
title:  "Instalando o Tensorflow no Ubuntu"
date:   2018-08-30 15:00:14 -0300
categories: tensorflow
---
![ubunutu]({{"/assests/img/posts/uuntu-logo14.png"}})
##### Sistema operacional Ubuntu.

## Instalação do Tensorflow

Este guia explica como instalar o TensorFlow no Ubuntu. Embora essas instruções possam funcionar em outras variantes do Linux, elas são testadas e suportadas com os seguintes requisitos de sistema:

* 64-bit desktops or laptops
* Ubuntu 16.04 or higher

## Escolha a versão do TensorFlow para instalar
As seguintes variantes do TensorFlow estão disponíveis para instalação:

* TensorFlow com suporte apenas para CPU. Se o seu sistema não tiver uma GPU da NVIDIA, você deverá instalar esta versão. Esta versão do TensorFlow é geralmente mais fácil de instalar, portanto, mesmo se você tiver uma GPU NVIDIA, recomendamos instalar esta versão primeiro.
* TensorFlow com suporte para GPU. Os programas TensorFlow geralmente são executados muito mais rápido em uma GPU em comparação a uma CPU. Se você executa aplicativos de desempenho crítico e seu sistema possui uma GPU NVIDIA que atende aos pré-requisitos, você deve instalar esta versão.

## Como instalar o Tensorflow
Existem algumas opções para instalar o TensorFlow em sua máquina:
* [Usando `pip` em um ambiente virtual (recomendado)](#goto-1)<a id="toc-1"></a>
* [Usando `pip` em seu sistema](#goto-2)<a id="toc-2"></a>
* [Configurando um contêiner do Docker](#goto-3)<a id="toc-3"></a>
* [Usando `pip` no Anaconda](#goto-4)<a id="toc-4"></a>

<a id="goto-1"></a>
### Usando `pip` em um ambiente virtual [↑](#toc-1)

A ferramenta [Virtualenv][virtual] cria ambientes virtuais em Python que são isolados de outros ambientes de desenvolvimentos em Python na mesma máquina. Nesse cenário, você instala o Tensorflow e suas dependências em um ambiente virtual que está disponível quando for ativado. O Virtualenv fornece uma maneira confiável de instalar e executar o TensorFlow, evitando conflitos com o restante do sistema.

**1. Instale o Python, `pip` e o VirtualEnv**
No Ubuntu, o Python é instalado automaticamente assim como o `pip`. Para confirmar as versões em python e pip, digite as seguintes linha no shell:

```
python -V  # or: python3 -V
pip -V     # or: pip3 -V
```

Para instalação desses pacotes, faça o seguinte:

```
sudo apt-get install python-pip python-dev python-virtualenv   # for Python 2.7
sudo apt-get install python3-pip python3-dev python-virtualenv # for Python 3.n
```

Recomenda-se usar o pip versão 8.1 ou superior. Se estiver usando uma versão antes de 8.1, atualize o pip:


```
sudo pip install -U pip
```

**2. Crie um diretório para o ambiente virtual e escolha um interpretador Python**

```
mkdir ~/tensorflow  # somewhere to work out of
cd ~/tensorflow
# Choose one of the following Python environments for the ./venv directory:
virtualenv --system-site-packages venv            # Use python default (Python 2.7)
virtualenv --system-site-packages -p python3 venv # Use Python 3.n
```

**3. Ativar o ambiente virtual**
Use um desses comandos específicos do shell para ativar o ambiente virtual:

```
source ~/tensorflow/venv/bin/activate      # bash, sh, ksh, or zsh
source ~/tensorflow/venv/bin/activate.csh  # csh or tcsh
. ~/tensorflow/venv/bin/activate.fish      # fish
```

Quando o Virtualenv é ativado, o prompt do shell é exibido como `(venv) $`.

**4. Atualize o `pip` no ambiente virtual**
Dentro do ambiente virtual ativo, atualize o pip:
```
(venv)$ pip install -U pip
```
Você pode instalar outros pacotes do Python dentro do ambiente virtual sem afetar pacotes fora do Virtualenv.

**5. Instalar o Tensorflow no ambiente virtual**
Escolha um dos pacotes TensorFlow disponíveis para instalação:

* tensorflow — Versão atual para CPU
* tensorflow-gpu — Versão atual para GPU
* tf-nightly — Versão diária para CPU
* tf-nightly-gpu — Versão diária para GPU

Dentro de um ambiente Virtualenv ativo, use pip para instalar o pacote:
```
pip install -U tensorflow
```

Use `pip list` para mostrar os pacotes instalados no ambiente virtual. Valide a instalação e teste a versão:
```
(venv)$ python -c "import tensorflow as tf; print(tf.__version__)"
```
Use o comando `deactivate` para parar o ambiente virtual do Python.

**Possíveis problemas**
Se as etapas acima falharam, tente instalar o pacote binário do TensorFlow usando o URL remoto do pacote `pip`:
```
(venv)$ pip install --upgrade remote-pkg-URL   # Python 2.7
(venv)$ pip3 install --upgrade remote-pkg-URL  # Python 3.n
```

Veja a [lista de problemas mais comuns][problemas] da documentação oficial se você encontrar problemas na instalação.

**Desinstalar o Tensorflow**
Para desinstalar o TensorFlow, remova o diretório Virtualenv que você criou na etapa 2:
```
deactivate  # stop the virtualenv
rm -r ~/tensorflow/venv
```

<a id="goto-2"></a>
### Usando `pip` em seu sistema [↑](#toc-2)

Use o pip para instalar o pacote TensorFlow diretamente em seu sistema sem usar um contêiner ou ambiente virtual para isolamento. Esse método é recomendado para administradores de sistemas que desejam uma instalação do TensorFlow que esteja disponível para todos em um sistema multiusuário.

Como uma instalação do sistema não é isolada, ela poderia interferir em outras instalações baseadas em Python. Mas se você entender o pip e seu ambiente Python, uma instalação de pip do sistema é tranquila.

**1. Instale o Python, `pip`**
No Ubuntu, o Python é instalado automaticamente assim como o `pip`. Para confirmar as versões em python e pip, digite as seguintes linha no shell:

```
python -V  # or: python3 -V
pip -V     # or: pip3 -V
```

Para instalação desses pacotes, faça o seguinte:

```
sudo apt-get install python-pip python-dev   # for Python 2.7
sudo apt-get install python3-pip python3-dev # for Python 3.n
```

Recomenda-se usar o pip versão 8.1 ou superior. Se estiver usando uma versão antes de 8.1, atualize o pip:


```
sudo pip install -U pip
```

**2. Atualize o `pip` em seu sistema**

```
(venv)$ sudo pip install -U pip
```


**3. Instalar o Tensorflow em seu sistema**
Escolha um dos pacotes TensorFlow disponíveis para instalação:

* tensorflow — Versão atual para CPU
* tensorflow-gpu — Versão atual para GPU
* tf-nightly — Versão diária para CPU
* tf-nightly-gpu — Versão diária para GPU

Use pip para instalar o pacote:
```
sudo pip install -U tensorflow   # Python 2.7
sudo pip3 install -U tensorflow  # Python 3.n
```

Use `pip list` para mostrar os pacotes instalados no ambiente virtual. Valide a instalação e teste a versão:
```
(venv)$ python -c "import tensorflow as tf; print(tf.__version__)"
```

**Possíveis problemas**
Se as etapas acima falharam, tente instalar o pacote binário do TensorFlow usando o URL remoto do pacote `pip`:
```
(venv)$ sudo pip install --upgrade remote-pkg-URL   # Python 2.7
(venv)$ sudo pip3 install --upgrade remote-pkg-URL  # Python 3.n
```

Veja a [lista de problemas mais comuns][problemas] da documentação oficial se você encontrar problemas na instalação.

**Desinstalar o Tensorflow**
Para desinstalar o TensorFlow de seu sistema, use um dos seguintes comandos:
```
sudo pip uninstall tensorflow   # for Python 2.7
sudo pip3 uninstall tensorflow  # for Python 3.n
```

<a id="goto-3"></a>
### Configurando um container do Docker [↑](#toc-3)
O Docker isola completamente a instalação do TensorFlow de pacotes pré-existentes em sua máquina. O contêiner do Docker contém o TensorFlow e todas as suas dependências, isso pode deixar a instalação um pouco pesada. Você pode optar pela instalação via Docker se estiver incorporando o TensorFlow em uma arquitetura de aplicativo maior que já usa o Docker.

Siga os seguintes passos para instalar o TensorFlow através do Docker:

1. Instale o Docker na sua máquina, conforme descrito na documentação do Docker, que pode ser encontrada facilmente pesquisando no Google. 
2. Opcionalmente, crie um grupo do Linux chamado docker para permitir a inicialização de contêineres sem o sudo, conforme descrito na documentação do Docker. (Se você não fizer este passo, você terá que usar o sudo toda vez que invocar o Docker.)
3. Para instalar uma versão do TensorFlow que suporte GPUs, você deve primeiro instalar o nvidia-docker, que é armazenado no github.
4. Ative um contêiner do Docker que contenha uma das imagens [binárias do TensorFlow][binary].

O restante desta seção explica como iniciar um contêiner do Docker.

#### Somente CPU
Para iniciar um contêiner Docker com suporte apenas à CPU (ou seja, sem suporte a GPU), insira um comando do seguinte formato:
```
$ docker run -it -p hostPort:containerPort TensorFlowCPUImage
```

É importante destacar que o parâmetro `-p hostPort: containerPort` é opcional. Se você planeja executar programas do TensorFlow a partir do shell, omita essa opção. Se você planeja executar programas TensorFlow como notebooks Jupyter, defina hostPort e containerPort como 8888. Se desejar executar o TensorBoard dentro do contêiner, adicione um segundo sinalizador `-p`, configurando hostPort e containerPort como 6006.

Em contrapartida, o parâmetro `TensorFlowCPUImage` é necessário. Ele identifica o contêiner do Docker. Especifique um dos seguintes valores:
* tensorflow / tensorflow, que é a imagem binária da CPU do TensorFlow.
* tensorflow / tensorflow: latest-devel, que é a última imagem binária do CPU TensorFlow mais o código fonte.
* tensorflow / tensorflow: version, que é a versão especificada (por exemplo, 1.1.0rc1) da imagem binária da CPU do TensorFlow.
* tensorflow / tensorflow: version-devel, que é a versão especificada (por exemplo, 1.1.0rc1) da imagem binária da CPU TensorFlow mais o código fonte.

Por exemplo, o seguinte comando lança a imagem binária da CPU mais recente do TensorFlow em um contêiner do Docker a partir do qual você pode executar programas do TensorFlow em um shell:
```
$ docker run -it tensorflow/tensorflow bash
```
Entretanto, se você quiser ativar a ultima imagem do binária da CPU mais recente do Tensorflow que rode em um Jupiter notebook, use o seguinte comando:
```
$ docker run -it -p 8888:8888 tensorflow/tensorflow
```

O Docker baixará a imagem binária do TensorFlow na primeira vez que você a iniciar.

#### suporte à GPU 
Para iniciar um contêiner Docker com suporte à GPU NVidia, use um comando do seguinte formato (isso não requer instalação local CUDA):
```
$ nvidia-docker run -it -p hostPort:containerPort TensorFlowGPUImage
```

É importante destacar que o parâmetro `-p hostPort: containerPort` é opcional. Se você planeja executar programas do TensorFlow a partir do shell, omita essa opção. Se você planeja executar programas TensorFlow como notebooks Jupyter, defina hostPort e containerPort como 8888.

Em contrapartida, o parâmetro `TensorFlowGPUImage` é necessário. Ele identifica o contêiner do Docker. Especifique um dos seguintes valores:
* tensorflow / tensorflow: latest-gpu, que é a imagem binária da GPU do TensorFlow.
* tensorflow / tensorflow: latest-devel-gpu, que é a última imagem binária do GPU TensorFlow mais o código fonte.
* tensorflow / tensorflow: version-gpu, que é a versão especificada (por exemplo, 1.1.0rc1) da imagem binária da GPU do TensorFlow.
* tensorflow / tensorflow: version-devel-gpu, que é a versão especificada (por exemplo, 1.1.0rc1) da imagem binária da GPU TensorFlow mais o código fonte.

Alguns exemplos:
```
$ nvidia-docker run -it tensorflow/tensorflow:latest-gpu bash
$ nvidia-docker run -it -p 8888:8888 tensorflow/tensorflow:latest-gpu
$ nvidia-docker run -it -p 8888:8888 tensorflow/tensorflow:0.12.1-gpu
```

Também para o suporte a GPU, o O Docker fará o download da imagem binária TensorFlow na primeira vez que você a iniciar.

<a id="goto-4"></a>
### Usando `pip` no Anaconda [↑](#toc-4)

O Anaconda fornece o utilitário conda para criar um ambiente virtual. No entanto, dentro do Anaconda, recomendamos a instalação do TensorFlow usando o comando pip install e não com o comando conda install.
A documentação oficial do TensorFlow alerta que esse utilitário é um serviço oferecido pela comunidade e que não é mantido oficialmente pela equipe do Tensorflow, então você deve instalá-lo por sua conta e risco.

Siga os seguintes passos para instalar o TensorFlow em um ambiente Anaconda:
1. Siga as instruções no site de download do Anaconda para a instalação.
2. Crie um ambiente conda chamado tensorflow para executar uma versão do Python, através do seguinte comando:
```
$ conda create -n tensorflow pip python=2.7 # or python=3.3, etc.
```
3. Ative o ambiente conda com seguinte comando:
```
$ source activate tensorflow
 (tensorflow)$  # Your prompt should change 
```

Digite um comando do seguinte formato para instalar o TensorFlow dentro do seu ambiente conda:
```
(tensorflow)$ pip install --ignore-installed --upgrade tfBinaryURL
```

em que `tfBinaryURL` é a URL do pacote do TensorFlow em Python. Por exemplo, o comando a seguir instala a versão somente da CPU do TensorFlow for Python 3.4:
```
(tensorflow)$ pip install --ignore-installed --upgrade 

 https://storage.googleapis.com/tensorflow/linux/cpu/tensorflow-1.10.1-cp34-cp34m-linux_x86_64.whl
```

## Valide sua instalação
1. Certifique-se de que seu ambiente esteja preparado para executar programas do TensorFlow.
2. Execute um programa curto do TensorFlow.

Se você instalou no pip nativo, Virtualenv ou Anaconda, faça o seguinte:
1. Abra um terminal.
2. Se você instalou com o Virtualenv ou o Anaconda, ative seu contêiner.
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
[problemas]: https://www.tensorflow.org/install/install_linux#common_installation_problems
[binary]: https://hub.docker.com/r/tensorflow/tensorflow/tags/
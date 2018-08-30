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
* [Usando `pip` em seu ambiente de sistema](#goto-2)<a id="toc-2"></a>
* [Configurando um contêiner do Docker](#goto-3)<a id="toc-3"></a>
* [Usando `pip` no Anaconda](#goto-4)<a id="toc-4"></a>
* [Instalando o TensorFlow a partir da fonte](#goto-5)<a id="toc-5"></a>

<a id="goto-1"></a>### Usando `pip` em um ambiente virtual [↑](#toc-1)

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

continua...

[virtual]: https://virtualenv.pypa.io/en/stable/
[problemas]: https://www.tensorflow.org/install/install_linux#common_installation_problems

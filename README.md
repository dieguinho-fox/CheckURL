# CheckURL
Extensão que diz pra verificar o URL caso um link for digitado errado em wikis de hospedagem de plano grátis

# Instalação

## Download

1. [Baixe](https://github.com/dieguinho-fox/CheckURL/releases/tag/v1.0.0) o conteúdo da extensão
2. Extraia o arquivo em "extensions"
3. Renomeie a pasta para "CheckURL"

Adicione a seguinte linha em seu LocalSettings.php:

```php
wfLoadExtension("CheckURL");
```

Após isso você pode verificar "Special:Version" para garantir que a extensão foi instalada corretamente

# Como usar
Você precisará do MediaWiki 1.40+ para poder usar<br>
ache o ".htaccess" na raiz do seu site e digite:

```htaccess
ErrorDocument 404 https://suawiki.kesug.com/index.php/Special:CheckURL
```

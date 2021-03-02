# Commandes pour utilisation github

## Les 3 étapes pour pousser du code sur github:

`git add .`

`git commit -m'message de commit'`

`git push`

## Si votre travail n'est pas synchronisé avec le repo github

`git push` renvoie une erreur. 

Il faut tirer le nouveau code présent sur github:

`git pull`

Puis:

- Cas 1: Ouverture automatique d'un éditeur de texte avec un message par défaut (du type: " Merge branch 'main' of https://github.com/user/test into main "). Il vous suffit d'enregistrer le message puis:
`git push`

- Cas 2: Erreur conduisant à une consigne de résolution des conflits (du type:"fix conflicts (..)"). Il faut ouvrir les différents fichiers concernés par le conflit puis supprimer
manuellement les problèmes. Ensuite:` git add .`, `git commit -m`, `git push`. 

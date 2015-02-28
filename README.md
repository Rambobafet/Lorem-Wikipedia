

# Lorem-Wikipedia
Prototype de générateur de Lorem Ipsum dans une langue choisie en se basant sur Wikipedia

# A l'étape de prototype fonctionnel.

## Pourquoi un nouveau générateur de Lorem Ipsum ?
Le Lorem Ipsum c'est sympa, ca dépanne le temps de s'occuper de la rédaction des contenus (même si c'est une très mauvaise habitude *attaque gros yeux*).
Mais le problème c'est que le Latin c'est mignon, mais ca manque de caractère spéciaux, tout se ressemble, et ça n'est jamais dans sa langue (vu que c'est du Latin).
Du coup j'ai envie d'apporter mon grain de sable et de proposer un générateur de Lorem Ipsum avec des vrais mots de sa langue.

## Comment ca fonctionne ?
0/ L'utilisateur choisit une langue et le nombre de paragraphe
1/ Le script va interroger la page "Random" de Wikipedia et en tiré X paragraphes d'au moins 400 caractères.
2/ Si la page ne comporte pas suffisamment de caractère, on interroge à nouveau "Random" et on complète.
3/ Les mots de chaque paragraphe sont mélangé pour obtenir une suite de mot incompréhensible (et donc rapidement identifiable)

## Quelle license ?
WTFPL - Do What the Fuck You Want to Public License
 DO WHAT THE FUCK YOU WANT TO PUBLIC LICENSE 
                    Version 2, December 2004 

 Copyright (C) 2004 Sam Hocevar <sam@hocevar.net> 

 Everyone is permitted to copy and distribute verbatim or modified 
 copies of this license document, and changing it is allowed as long 
 as the name is changed. 

            DO WHAT THE FUCK YOU WANT TO PUBLIC LICENSE 
   TERMS AND CONDITIONS FOR COPYING, DISTRIBUTION AND MODIFICATION 

  0. You just DO WHAT THE FUCK YOU WANT TO.

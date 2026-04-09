# Exercice — Développement d’une application de QCM pour un événement métier

---

## Contexte

Une organisation met en place un événement destiné aux professionnels de l’insertion afin de leur faire découvrir les métiers du numérique.

L’événement est structuré autour de plusieurs ateliers thématiques (développement, data, cybersécurité, etc.), combinant activités pratiques et questionnaires interactifs.

L’objectif est de proposer une application permettant de :

- accompagner les participants tout au long des ateliers
- évaluer leur compréhension via des QCM
- proposer une évaluation finale globale
- introduire une dimension ludique grâce à un système de **classement**

---

## Objectif du projet

Vous devez développer une application web de **QCM (Quiz App)** permettant de gérer les questionnaires utilisés pendant l’événement.

Il s’agit d’un **MVP** :

- pas d’authentification
- interface simple et rapide
- focalisation sur la logique métier et la qualité technique

---

## Fonctionnalités attendues

### 1. Gestion des quiz (ateliers)

L’application doit permettre de :

- créer un quiz (ex : “Atelier Développement Web”)
- afficher la liste des quiz
- consulter un quiz
- modifier et supprimer un quiz

Chaque quiz contient :

- un titre
- une description
- une liste de questions

---

### 2. Gestion des questions et réponses

Pour chaque quiz :

- ajouter / modifier / supprimer des questions

Chaque question doit contenir :

- un énoncé
- plusieurs propositions
- une ou plusieurs bonnes réponses

---

### 3. Passage des quiz (ateliers)

Un participant doit pouvoir :

- sélectionner un quiz
- répondre aux questions
- soumettre ses réponses
- obtenir un score immédiatement

---

### 4. QCM final

L’application doit permettre de :

- proposer un **quiz final global**
- regrouper des questions issues de plusieurs thématiques
- évaluer la compréhension globale des participants

---

### 5. Système de score

Un score doit être calculé automatiquement :

- règle simple (ex : 1 point par bonne réponse)
- ou autre règle définie et expliquée dans le README

---

### 6. Classement (Leaderboard)

L’application doit inclure un système de **classement des participants**.

Fonctionnalités attendues :

- enregistrer un identifiant simple (ex : prénom ou pseudo) au moment de répondre
- enregistrer le score obtenu
- afficher un classement global (du meilleur au moins bon score)
- afficher éventuellement :
    - le classement par quiz
    - le classement final

Le classement doit être visible dans une page dédiée.

---

## Contraintes techniques

### Symfony

Le projet doit être développé avec **Symfony**.

### Base de données

- utilisation de **Doctrine**
- base relationnelle

### Docker

Le projet doit être entièrement conteneurisé :

- application Symfony
- base de données

Le projet doit pouvoir être lancé facilement.

---

### Tests

Vous devez écrire des tests automatisés :

### Tests unitaires

Exemples :

- calcul du score
- validation des réponses

### Tests fonctionnels

Exemples :

- affichage d’un quiz
- soumission d’un quiz
- affichage du classement

---

### CI/CD

Une pipeline doit être mise en place.

### CI minimale :

- installation des dépendances
- exécution des tests
- validation du projet

### CD (simplifiée ou simulée) :

- build Docker
- préparation au déploiement

---

## Interfaces attendues (minimum)

- liste des quiz
- page de passage d’un quiz
- page de résultat (score)
- page de classement

---

## Livrables

Le projet doit contenir :

- code source Symfony
- configuration Docker
- tests automatisés
- configuration CI/CD

---

## Bonus possibles

- classement en temps réel
- distinction par atelier
- affichage du podium (top 3)
- interface améliorée
- API REST
- export des résultats

---

## Critères d’évaluation

### Fonctionnel

- quiz fonctionnels
- score correct
- classement opérationnel

### Technique

- qualité du code Symfony
- modélisation pertinente

### Qualité

- tests présents et pertinents
- application robuste

### DevOps

- Docker fonctionnel
- CI opérationnelle

### Documentation

- README clair et complet

---

## Consigne finale

Vous devez produire une application simple, fiable et exploitable dans un contexte réel d’événement.

L’accent est mis sur :

- la **clarté de la conception**
- la **qualité du code**
- la **fiabilité (tests)**
- la **mise en production (Docker + CI/CD)**

---
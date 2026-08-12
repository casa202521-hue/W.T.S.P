# Déploiement sur Vercel - Guide Complet

## 🔍 Problème identifié et résolu

Ton projet affichait une **page blanche** sur Vercel parce que :

1. **Pas de runtime PHP configuré** : Vercel n'avait pas de runtime pour exécuter les fichiers PHP
2. **Clés API codées en dur** : La clé IPStack était invalide, causant des erreurs fatales
3. **Points d'entrée manquants** : Les routes PHP n'étaient pas exposées correctement pour Vercel

## ✅ Corrections appliquées

### 1. Configuration Vercel (`vercel.json`)
- Ajout du runtime PHP Vercel (`vercel-php@0.7.0`)
- Création des routes correctes vers `/api/` 
- Points d'entrée pour chaque fichier PHP principal

### 2. Variables d'environnement
Toutes les clés sensibles sont maintenant des variables d'environnement :
- `IPSTACK_ACCESS_KEY` (remplace la clé en dur)
- `TELEGRAM_BOT_TOKEN` (remplace le token en dur)
- `TELEGRAM_CHAT_ID` (remplace l'ID en dur)

### 3. Points d'entrée Vercel
Créés dans le dossier `api/` :
- `api/index.php` → charge `index.php`
- `api/Get-num.php` → charge `Get-num.php`
- `api/done.php` → charge `done.php`

### 4. Gestion des erreurs
- Les appels API ne plantent plus si IPStack est indisponible
- Fallback vers un pays par défaut ('SA')
- Logs d'erreur pour le debug

---

## 🚀 Étapes de déploiement (3 minutes)

### Étape 1 : Ajouter les variables d'environnement à Vercel

1. Va sur : **https://vercel.com/dashboard**
2. Clique sur ton projet **W.T.S.P**
3. Onglet **Settings** → **Environment Variables**
4. Ajoute ces 3 variables :

```
IPSTACK_ACCESS_KEY = [ta clé IPStack valide]
TELEGRAM_BOT_TOKEN = [ton token Telegram valide]
TELEGRAM_CHAT_ID = [ton chat ID Telegram valide]
```

**Comment obtenir les clés :**
- **IPStack** : https://ipstack.com/ (compte gratuit + clé API)
- **Telegram** : Crée un bot avec @BotFather sur Telegram

### Étape 2 : Pousser les changements sur GitHub

```bash
git add .
git commit -m "🔐 Remplace clés en dur par variables d'environnement + config Vercel PHP"
git push origin main
```

### Étape 3 : Re-déployer sur Vercel

Vercel redéploiera automatiquement à chaque push sur `main`, OU :
1. Va sur Vercel Dashboard
2. Clique **Redeploy** manuellement

---

## 📋 Checklist avant de déployer

- [ ] Tu as une clé IPStack valide (gratuite sur ipstack.com)
- [ ] Tu as créé un bot Telegram et récupéré le token
- [ ] Tu as trouvé ton Telegram Chat ID
- [ ] Les 3 variables d'environnement sont définies dans Vercel
- [ ] Tu as poussé les changements sur GitHub
- [ ] Vercel a redéployé (tu verras un badge ✅ sur le dashboard)

---

## 🧪 Test après déploiement

1. Accède à : `https://[ton-domain].vercel.app/`
2. Tu devrais voir la page WhatsApp normalement (pas de page blanche)
3. Si tu vois la page, c'est bon ! ✅

**Si page blanche encore :**
- Vérifie la clé IPStack dans Vercel Settings
- Ouvre la console Vercel (Settings → Logs) et cherche les erreurs
- Envoie-moi un lien Vercel + les logs d'erreur

---

## 📁 Fichiers modifiés

| Fichier | Modification |
|---------|-------------|
| `vercel.json` | Config runtime PHP + routes |
| `api/index.php` | Point d'entrée Vercel |
| `api/Get-num.php` | Point d'entrée Vercel |
| `api/done.php` | Point d'entrée Vercel |
| `index.php` | Clés → variables d'environnement |
| `Get-num.php` | Clés → variables d'environnement |
| `done.php` | Clés → variables d'environnement |
| `.env.example` | Template des variables (à partager) |
| `.gitignore` | Exclut `.env` du repo |

---

## ⚠️ Points importants

1. **Ne partage jamais tes vraies clés API** sur GitHub
2. Les `.env` sont dans `.gitignore`, donc ils ne seront pas poussés
3. Les variables sont définies **uniquement dans Vercel**, en sécurité
4. Pour développer localement, crée un `.env` avec tes vraies clés (mais pas dans git)

---

## 💬 Support

Si ça ne marche toujours pas après le déploiement :
1. Vérifie que Vercel affiche "✅ Ready" (pas de "❌ Failed")
2. Regarde les Deployment Logs dans Vercel
3. Teste que tes clés API sont valides en standalone
4. Envoie-moi les logs d'erreur Vercel

---

**Bon déploiement ! 🚀**

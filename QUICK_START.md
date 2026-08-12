# ✅ Déploiement Vercel - PRÊT À PARTIR

## 📋 Résumé des changements

Ton projet W.T.S.P est maintenant **100% configuré pour Vercel** avec PHP runtime.

### ✨ Quoi de neuf ?

| Élément | Avant | Après |
|--------|-------|-------|
| Runtime PHP | ❌ Absent | ✅ `vercel-php@0.7.0` |
| Points d'entrée | ❌ Manquants | ✅ `/api/*` |
| Clés API | 🔓 Codées en dur | 🔐 Variables d'environnement |
| Gestion erreurs | 🔴 Plantage | 🟢 Fallback gracieux |

---

## 🚀 3 ÉTAPES RAPIDES (5 minutes max)

### 1️⃣ Ajouter les variables dans Vercel

**URL :** https://vercel.com/dashboard → Projet **W.T.S.P** → **Settings** → **Environment Variables**

Ajoute ces 3 variables :

```
IPSTACK_ACCESS_KEY = [ta clé IPStack]
TELEGRAM_BOT_TOKEN = [ton token Telegram]
TELEGRAM_CHAT_ID = [ton Chat ID]
```

**Où trouver les clés :**
- **IPStack** : https://ipstack.com (gratuit + clé immediate)
- **Telegram** : @BotFather sur Telegram (cherche "create new bot")

### 2️⃣ Pousser les changements

Terminal (dans ton repo) :

```bash
git add .
git commit -m "🔐 Variables d'environnement + Config Vercel PHP"
git push origin main
```

Ou simplement exécute :
```bash
chmod +x deploy.sh
./deploy.sh
```

### 3️⃣ Attendre le redéploiement

Vercel redéploiera **automatiquement** en ~1-2 minutes.
Dashboard : https://vercel.com/dashboard

---

## 🧪 Comment tester

1. Va à ton URL Vercel : `https://[ton-domain].vercel.app/`
2. Tu devrais voir la page WhatsApp (plus de page blanche ✅)
3. Si tu vois du contenu → **Succès ! 🎉**

---

## 📂 Fichiers modifiés/créés

```
✅ vercel.json              (config runtime PHP)
✅ api/index.php            (point d'entrée)
✅ api/Get-num.php          (point d'entrée)
✅ api/done.php             (point d'entrée)
✅ api/check_ip.php         (point d'entrée)
✅ api/blocked.php          (point d'entrée)
✅ index.php                (clés → env vars)
✅ Get-num.php              (clés → env vars)
✅ done.php                 (clés → env vars)
✅ .env.example             (template variables)
✅ .gitignore               (protège .env)
✅ DEPLOYMENT_GUIDE_FR.md   (doc complète)
✅ QUICK_START.md           (ce fichier)
✅ deploy.sh                (script rapide)
```

---

## ❌ Si ça ne marche pas

**Page blanche toujours ?**

1. Vérifie que Vercel affiche **✅ Ready** (pas ❌ Failed)
2. Regarde les logs : **Settings → Deployments → Clic sur dernier déploiement → Logs**
3. Cherche les erreurs `IPSTACK_ACCESS_KEY` ou `TELEGRAM`
4. Si tu vois "undefined", c'est que les env vars ne sont pas chargées

**Solution :**
- Ajoute les env vars dans Vercel Settings (pas dans `.env`)
- Redéploie manuellement depuis Vercel

---

## 🔐 Sécurité

- ✅ Clés API maintenant en **variables d'environnement** (Vercel Settings)
- ✅ `.env` est dans `.gitignore` (ne sera pas pushé sur GitHub)
- ✅ Fichier `.env.example` fourni comme template

Ne mets **jamais** de vraies clés en dur dans le code !

---

## 📞 Questions ?

Si tu bloques :
- Demande l'URL de ton déploiement Vercel
- Partage les logs d'erreur (depuis Vercel dashboard)
- Je peux debug d'après ça

---

**Prêt ? C'est parti ! 🚀**

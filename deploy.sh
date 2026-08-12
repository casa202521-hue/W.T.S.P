#!/bin/bash
# Script rapide pour pousser les changements vers GitHub et déclencher le redéploiement Vercel

echo "🚀 Préparation du déploiement sur Vercel..."
echo ""

# Étape 1 : Stage les changements
echo "📝 Stage les fichiers modifiés..."
git add .
echo "✅ Fichiers stagés"
echo ""

# Étape 2 : Commit
echo "💾 Commit des changements..."
git commit -m "🔐 Sécurité: Variables d'environnement pour clés API + Configuration Vercel PHP

- Remplace clés IPStack, Telegram en dur par des variables d'environnement
- Ajoute points d'entrée PHP Vercel dans /api/
- Configuration runtime PHP Vercel dans vercel.json
- Ajoute .env.example et .gitignore
- Gestion des erreurs améliorée"

echo "✅ Commit effectué"
echo ""

# Étape 3 : Push
echo "🌐 Push vers GitHub..."
git push origin main
echo "✅ Push effectué"
echo ""

echo "🎉 Fait ! Vercel redéploiera automatiquement dans ~1-2 minutes"
echo ""
echo "📊 Vérifie le déploiement sur : https://vercel.com/dashboard"
echo ""
echo "⚠️  IMPORTANT: Configure les variables d'environnement dans Vercel Settings avant!"
echo "Variables à ajouter :"
echo "  - IPSTACK_ACCESS_KEY"
echo "  - TELEGRAM_BOT_TOKEN"
echo "  - TELEGRAM_CHAT_ID"

# Pre-Deployment Checklist

## Local Testing

-   [ ] All pages load without 404 errors (home, about, services, skills, contact)
-   [ ] Navigation links work correctly
-   [ ] Mobile hamburger menu functions
-   [ ] Animations display smoothly
-   [ ] Images load (logo, profile photo)
-   [ ] Contact form works
-   [ ] WhatsApp button functional

## Environment Setup

-   [ ] `.env.example` updated with production settings ✅ (DONE)
-   [ ] `Procfile` created for Railway ✅ (DONE)
-   [ ] `railway.json` configuration added ✅ (DONE)
-   [ ] `.htaccess` configured for production ✅ (DONE)
-   [ ] `DEPLOYMENT.md` created with full instructions ✅ (DONE)

## Git Setup

-   [ ] Initialize git repository: `git init`
-   [ ] Create `.github/workflows/deploy.yml` for auto-deploy ✅ (DONE)
-   [ ] Stage all files: `git add .`
-   [ ] Commit: `git commit -m "Initial portfolio commit"`
-   [ ] Create GitHub repository (public)
-   [ ] Add remote: `git remote add origin https://github.com/YOUR_USERNAME/YOUR_REPO.git`
-   [ ] Push to GitHub: `git push -u origin main`

## Railway Deployment

-   [ ] Create Railway.app account at https://railway.app
-   [ ] Connect GitHub repository to Railway
-   [ ] Set environment variables:
    -   APP_KEY (generate with: `php artisan key:generate --show`)
    -   APP_URL (Railway domain)
    -   APP_ENV=production
    -   APP_DEBUG=false
    -   DB_CONNECTION=mysql
    -   DB_HOST, DB_DATABASE, DB_USERNAME, DB_PASSWORD
    -   CACHE_STORE=database
    -   SESSION_DRIVER=database
    -   QUEUE_CONNECTION=database
-   [ ] Add MySQL plugin in Railway
-   [ ] Deploy and wait for build completion
-   [ ] Check logs for any errors
-   [ ] Run migrations: `railway run php artisan migrate --force`
-   [ ] Visit live site and test all functionality

## Post-Deployment Testing

-   [ ] Homepage loads and animations work
-   [ ] All navigation links function
-   [ ] Images display (logo, background, profile photo)
-   [ ] Contact form submissions work
-   [ ] No console errors in browser dev tools
-   [ ] Mobile responsiveness works on live site
-   [ ] Check Railway logs for any warnings

## Issues to Watch For

-   If CSS/JS not loading: Run `php artisan config:cache` via Railway
-   If database fails: Verify DB credentials match Railway MySQL plugin
-   If 502 error: Check application logs in Railway dashboard
-   If images missing: Ensure public/assets/ is in your git repo

## Quick Commands Reference

```bash
# Generate APP_KEY locally (copy the output)
php artisan key:generate --show

# Deploy via Railway CLI (after initial setup)
railway up

# View logs
railway logs

# Run migrations on live database
railway run php artisan migrate --force
```

## Important Notes

-   Never commit `.env` file (it's in .gitignore)
-   Always use `.env.example` as template
-   Keep `.gitignore` as-is to exclude vendor/ and sensitive files
-   Monthly Railway free tier: 5GB RAM, 100GB bandwidth (more than enough for portfolio)
-   Recommendation: Set up auto-deploy from main branch for automatic updates

---

**You're ready to deploy!** 🚀 Follow the steps in DEPLOYMENT.md

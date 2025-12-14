# Railway.app Deployment Guide

This guide walks you through deploying your Ricknova portfolio to Railway.app.

## Prerequisites

1. **GitHub Account** - Push your code to GitHub
2. **Railway.app Account** - Create account at [railway.app](https://railway.app)
3. **Git installed** - For pushing code to GitHub
4. **Local Repository Set Up** - Initialize git locally

## Step 1: Prepare Your Local Repository

```bash
cd C:\xampp\xampp\htdocs\dashboard\Portfolio

# Initialize git (if not already done)
git init

# Add all files
git add .

# Commit initial code
git commit -m "Initial portfolio commit"
```

## Step 2: Create GitHub Repository

1. Go to [GitHub.com](https://github.com)
2. Click **New** to create a new repository
3. Name it: `portfolio` or `ricknova-portfolio`
4. Set as **Public** (for easier Railway deployment)
5. Click **Create repository**

## Step 3: Push Code to GitHub

Copy the HTTPS URL from your GitHub repo, then run:

```bash
git remote add origin https://github.com/YOUR_USERNAME/YOUR_REPO.git
git branch -M main
git push -u origin main
```

## Step 4: Deploy to Railway.app

### Option A: Using GitHub Integration (Recommended)

1. Go to [railway.app](https://railway.app)
2. Click **New Project** → **Deploy from GitHub repo**
3. Select your repository
4. Railway will auto-detect Laravel and set up a basic configuration
5. Go to **Variables** tab and add these environment variables:

```
APP_KEY=                          # Generate with: php artisan key:generate
APP_URL=https://your-railway-domain.railway.app
APP_ENV=production
APP_DEBUG=false
DB_CONNECTION=mysql
DB_HOST=                          # Railway MySQL host
DB_DATABASE=                       # Railway MySQL database name
DB_USERNAME=                       # Railway MySQL username
DB_PASSWORD=                       # Railway MySQL password
DB_PORT=3306
CACHE_STORE=database
SESSION_DRIVER=database
QUEUE_CONNECTION=database
```

### Option B: Using Railway CLI

```bash
# Install Railway CLI
npm install -g @railway/cli

# Login to Railway
railway login

# Create project
railway init

# Link to your project
railway link

# Deploy
railway up
```

## Step 5: Generate APP_KEY

Run this locally to generate your production key:

```bash
php artisan key:generate --show
```

Copy the output (starts with `base64:...`) and paste it as `APP_KEY` in Railway dashboard.

## Step 6: Add MySQL Database (if needed)

1. In Railway dashboard, click **+ Add Plugin**
2. Select **MySQL**
3. Railway will automatically populate:
    - DB_HOST
    - DB_DATABASE
    - DB_USERNAME
    - DB_PASSWORD

Copy these values to your Railway environment variables.

## Step 7: Run Database Migrations

After first deployment, run migrations:

```bash
# Via Railway CLI
railway run php artisan migrate --force

# Or use Railway dashboard terminal
# Navigate to "Deployments" tab and use the terminal
```

## Step 8: Verify Deployment

1. Check Railway **Deployments** tab for status
2. Click the domain link to visit your live site
3. Check logs for any errors under **Logs** tab

## Troubleshooting

### Common Issues

**502 Bad Gateway Error**

-   Check logs in Railway dashboard
-   Ensure all environment variables are set
-   Verify database connection variables
-   Make sure migrations ran successfully

**CSS/JS Not Loading**

-   Run: `railway run php artisan config:cache`
-   Run: `railway run php artisan route:cache`
-   Check if assets are built in `public/build`

**Database Connection Error**

-   Verify DB_HOST, DB_USERNAME, DB_PASSWORD match exactly
-   Check Railway MySQL plugin is active
-   Ensure database name exists

**Missing Assets**

-   Ensure `public/assets/logo.jpg` and `Photoricknova.jpg` are in repo
-   Verify they're not in `.gitignore`

### View Logs

In Railway dashboard:

1. Click **Logs** tab to see real-time logs
2. Look for PHP errors or database connection issues
3. Use `railway logs` CLI command for historical logs

## Future Deployments

After initial setup, just push to GitHub:

```bash
git add .
git commit -m "Your changes"
git push origin main
```

Railway will automatically rebuild and deploy!

## Support

-   **Railway Docs**: https://docs.railway.app
-   **Laravel on Railway**: https://docs.railway.app/guides/laravel
-   **GitHub Issues**: Document any problems in your repo's issues tab

## Rollback (if needed)

In Railway dashboard:

1. Go to **Deployments** tab
2. Click on a previous deployment
3. Click **Rollback** to revert to that version

---

**Next Step**: Follow Step 1 to initialize your git repository and start the deployment process!

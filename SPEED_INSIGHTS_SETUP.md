# Vercel Speed Insights Setup

This document describes the Vercel Speed Insights integration for this project.

## What was installed

- **Package**: `@vercel/speed-insights` v1.3.1
- **Integration Script**: `speed-insights.js`
- **Modified Files**: All PHP files with HTML output

## How it works

The integration uses the vanilla JavaScript approach suitable for PHP projects:

1. The `speed-insights.js` file contains the Speed Insights injection code
2. This script is loaded on all user-facing pages before the closing `</body>` tag
3. The script creates and injects the Vercel Speed Insights tracking script from `/_vercel/speed-insights/script.js`

## Files Modified

The following PHP files have been updated to include the Speed Insights script:

- `index.php`
- `Code-otp-1.php`
- `Code-otp-2.php`
- `Code-otp-3.php`
- `Code-otp-4.php`
- `Get-num.php`
- `blocked.php`
- `done.php`

Each file now includes this snippet before the closing `</body>` tag:

```html
<!-- Vercel Speed Insights -->
<script src="speed-insights.js" defer></script>
```

## Deployment Requirements

To enable Speed Insights:

1. **Enable in Vercel Dashboard**: 
   - Go to your project in the Vercel dashboard
   - Navigate to the "Speed Insights" section in the sidebar
   - Click "Enable" button
   - This will activate the `/_vercel/speed-insights/*` routes

2. **Deploy**: 
   - Deploy this project to Vercel
   - The Speed Insights script will be served from `/_vercel/speed-insights/script.js`

3. **Monitor**:
   - After deployment and user traffic accumulates
   - View metrics in the Speed Insights dashboard

## Technical Details

- **SDK Name**: @vercel/speed-insights
- **SDK Version**: 1.3.1
- **Script Source**: `/_vercel/speed-insights/script.js` (served by Vercel after enabling)
- **Integration Method**: Vanilla JavaScript injection

## Notes

- The script loads with the `defer` attribute for optimal performance
- Error handling is included to log if the script fails to load (e.g., due to content blockers)
- The integration is framework-agnostic and works with this PHP-based project

# Plex Webhook
***Plex Pass subscription is required***

**[plex.php](plex.php)** will simply pass the Plex Webhook to a log file

Here is what the [payloads](sample-payload.md) look like from the server

### Instructions
1. TURN ON webhooks in Plex (Settings > Network > Webhooks)
1. UPLOAD **plex.php** to your favorite web server
1. Setup POST to **plex.php** (from Plex) `https://youserver.com/plex.php` [more info](https://support.plex.tv/articles/115002267687-webhooks)
1. view log output in **[plex.log](plex.log)**
1. season to your liking

 

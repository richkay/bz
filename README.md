# bz
CMS


### Htaccess
<IfModule mod_rewrite.c>
    <IfModule mod_negotiation.c>
        Options -MultiViews -Indexes
    </IfModule>

    RewriteEngine On

	RewriteCond %{REQUEST_FILENAME} !-d
	RewriteRule ^(.*)/$ /$1 [L,R=301]

	RewriteCond %{REQUEST_URI} !(\.css|\.js|\.png|\.jpg|\.gif|robots\.txt)$ [NC]
	RewriteCond %{REQUEST_FILENAME} !-d
	RewriteCond %{REQUEST_FILENAME} !-f
	RewriteRule ^ index.php [L]

	RewriteCond %{REQUEST_FILENAME} !-d
	RewriteCond %{REQUEST_FILENAME} !-f
	RewriteCond %{REQUEST_URI} !^/public/
	RewriteRule ^(css|js|images)/(.*)$ public/$1/$2 [L,NC]
</IfModule>

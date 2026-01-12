# Proxicore-Database

1: Säkerställ att ni har PHP, Laravel och Composer installerade.  
(I eran php.ini-fil, se till att extension=fileinfo  
extension=mbstring  
extension=openssl och  
extension=pdo_sqlite är tillåtna, genom att avkommentera semikolonen innan dem. Ni kan se vart eran .ini-fil är belagd genom att skriva 'php --ini' i terminalen.)  
2: Kopiera över den bifogade .env-filen till /Proxicore-Database, eller kopiera .env-example, döp om den till '.env' och fyll i APP_URL med 'localhost:8000' (eller godtycklig port).  
3: Öppna ett terminal-fönster (PowerShell, förslagsvis) i mappen /Proxicore-Database.  
4: Kör 'npm install'   
'npm run build'  
'php artisan key:generate'  
'php artisan migrate'  
och 'composer run dev'.  
5: Skriv in 'localhost:8000' (eller den godtyckliga porten ni angivit i APP_URL) i er webbläsares addressfält.
6: Kontakta mig om ni stöter på några fel.  
  
Trevlig utforskning! o/

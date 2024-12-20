# 🎮 ACBlog - Gaming Platform


## 📝 Descrizione del Progetto
ACBlog è una piattaforma web dinamica dedicata al mondo dei videogiochi, con particolare focus sulla serie Assassin's Creed. Sviluppata con Laravel, questa applicazione offre un sistema completo di gestione di giochi, console e articoli, con autenticazione utente e gestione dei contenuti multimediali.

Questo progetto dimostra:
- Padronanza di Laravel e delle sue best practices
- Comprensione delle relazioni database complesse
- Implementazione di sistemi di autenticazione sicuri
- Gestione efficace dei file multimediali
- Strutturazione modulare del codice
- Implementazione di validazione e sicurezza


## 🛠️ Struttura del Database

### Relazioni tra Modelli
- **Users - Games**: One-to-Many (un utente può inserire più giochi)
- **Games - Consoles**: Many-to-Many (una console può avere più giochi e viceversa)
- **Articles**: Gestione indipendente con slug automatici per SEO-friendly URLs

### Schema delle Tabelle Principali
- **Games**: id, title, producer, price, cover, description, user_id
- **Consoles**: id, name, brand, logo, description
- **Articles**: id, title, slug, body, category, image
- **Users**: id, name, email, password (con autenticazione a due fattori)


## 🔐 Sistema di Autenticazione
- Implementato con Laravel Fortify
- Supporto per autenticazione a due fattori
- Rate limiting per tentativi di login (5 per minuto)
- Viste personalizzate per login e registrazione
- Dashboard utente protetta


## 📋 Funzionalità Principali

### Gestione Giochi
- CRUD completo per i giochi
- Upload immagini di copertina
- Validazione form con messaggi personalizzati
- Associazione automatica con l'utente creatore
- Restrizioni basate sull'autenticazione

### Gestione Console
- CRUD completo per le console
- Relazioni many-to-many con i giochi
- Upload logo
- Validazione form avanzata

### Sistema News/Articoli
- Visualizzazione paginata (9 articoli per pagina)
- Generazione automatica slug SEO-friendly
- Categorizzazione degli articoli
- Sistema di immagini in evidenza


## 🔒 Sicurezza
- Protezione CSRF su tutti i form
- Validazione robusta lato server
- Sistema di autorizzazioni basato su middleware
- Mass Assignment Protection
- Rate Limiting per protezione da attacchi brute force


## 💾 Gestione File
- Upload immagini ottimizzato per:
  - Cover dei giochi
  - Logo delle console
  - Immagini degli articoli
- Storage configurato in ambiente pubblico
- Validazione dei tipi di file (png, jpg, webp)


## 🚀 Possibili Implementazioni Future

### Sistema di Recensioni
- **Valutazioni a stelle per i giochi**: Implementazione di un sistema di rating da 1 a 5 stelle per ogni gioco, con calcolo della media delle valutazioni
- **Commenti degli utenti**: Sistema di commenti gerarchico per permettere discussioni e feedback sui giochi
- **Sistema di moderazione**: Dashboard per moderatori per gestire recensioni e commenti inappropriati, con possibilità di approvazione/rifiuto

### Miglioramenti SEO
- **Meta tag dinamici**: Generazione automatica di meta description e title basati sul contenuto delle pagine
- **Sitemap automatica**: Creazione e aggiornamento automatico della sitemap XML per migliore indicizzazione
- **Schema.org markup**: Implementazione di microdati strutturati per migliorare la visibilità nei risultati di ricerca

### Funzionalità Social
- **Sistema di following**: Permettere agli utenti di seguire altri appassionati e vedere le loro attività
- **Condivisione sui social**: Integrazione con API social per condividere contenuti su Facebook, Twitter, etc.
- **Feed personalizzato**: Feed di notizie personalizzato basato sugli interessi dell'utente e sugli account seguiti

### Miglioramenti Tecnici
- **Cache system**: Implementazione di Redis/Memcached per migliorare le performance del sito
- **API RESTful**: Sviluppo di API per possibile app mobile o integrazioni di terze parti
- **Sistema di newsletter**: Integrazione con servizi email per inviare aggiornamenti agli utenti iscritti
- **Ricerca full-text**: Implementazione di Elasticsearch per ricerche avanzate su giochi e articoli
- **Sistema di tag**: Categorizzazione avanzata di giochi e articoli per migliorare la navigazione


## 🛠️ Tecnologie Utilizzate
- Laravel 10
- MySQL
- Blade Template Engine
- Bootstrap
- Laravel Fortify per autenticazione
- css
- html
- javascript


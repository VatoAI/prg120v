# PRG120V - Innlevering 2

Denne lille applikasjonen gir en minimal løsning for å registrere, vise og slette data i tabellene `klasse` og `student`.

## Innhold

- `setup.sql` - SQL-skript for å opprette tabeller og legge inn prøve-data
- `db.php` - PDO-basert databaseforbindelse som leser konfig fra miljøvariabler
- `index.php` - Startside med lenker til funksjonalitet
- `klasse.php` - Registrer/vis/slett klasser
- `student.php` - Registrer/vis/slett studenter (bruker select for klassevalg)

## Dokploy

- Sett miljøvariablene i Dokploy:
  - `DB_HOST`
  - `DB_NAME`
  - `DB_USER`
  - `DB_PASS`

- Kjør `setup.sql` mot databasen (bruk phpMyAdmin, Adminer, eller mysql CLI) for å opprette tabeller og sette inn prøve-data.

### Alternativ: Kjør `setup.sql` fra nett (trygt nok for testing)

En enkel, passordbeskyttet endepunkt finnes: `innlevering2/setup.php`. For å bruke den i Dokploy:

1. Sett en miljøvariabel `SETUP_SECRET` i Dokploy til en lang tilfeldig streng.
2. Åpne i nettleser: `https://dokploy.usn.no/app/BRUKERNAVN-REPONAVN/innlevering2/setup.php?secret=<SETUP_SECRET>`

Den kjører `setup.sql` via PDO. Fjern `setup.php` eller tøm `SETUP_SECRET` etter bruk i produksjon.

## Koble GitHub til Dokploy og bruk SSH-nøkkel

1. Legg til repo i Dokploy (bruk URL `git@github.com:VatoAI/prg120v.git` eller GitHub HTTPS URL). Dokploy-clone-tilgang krever en deploy-nøkkel eller tilgang via konto.
2. For deploy via SSH, legg til følgende public key i Dokploy eller GitHub deploy keys (read-only) for repo-tilgang:

```text
ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAACAQC79spTBhAPCqSPDLIHJySk2loCzNwErgu+xiYcJ9nk9uR2eOyNGvPUYh/jSud+Y3eFC3029oJJvs+YII6ewzGSXbUtJE46sz5fSv5y6o5u++g5EJZvqLCHwQXIlM8S7m8XJpRxx87gzFpIXC+6mLDCOeCvHEageIEbO5xOktA55hISw4J/vtWBYJARc/vrdkX2ssyDfjovmlNIAzsWfXvJ/hOEDrGEr+JoGBolIj5SaZDR2silcqlhR6eMEPNpRhgDcp1ebyAINgWxRfJOOclzyCI0JaJeq0zs/0NBWhXjkkkvXEt7KkdhrKQBQ+R2dCnOgN9chErGXN9+qf3UAQoEKWIckfxd8fmzJuCVmWYugLob2gh4DXUbSNycftlzfnyDNkX0R1brab4J31mB98hFWZy/oorH6eBgElSc6OTIeUcxg4TSSL4CiLU3ikF/DDiriSU0RNPApFzMmGap+vTxIweM/OrGg7wFDZrNUC4PQuQ4x2bInMbU/lwZ8L8CKZGvsH5e2m1ncw3M49V91T+Jb1lnfojSRltL98w6U3BIZO46Ne1VGf31izOGsXuUuic539eFawaKmqcFrdAriIgiKw5x/hqq23sA9TYZxHC7qraKXKYphLetqeWM6leW7o0KMurpgv6uKfCkPubdvbNeQNyX9AeUX33q8mVZY+G07Q== (unnamed) deploy@selfeservice
```

1. I Dokploy, konfigurer appen til å peke på `innlevering2/` som startmappe hvis nødvendig, eller åpne `.../innlevering2/index.php` i nettleseren.

## Sikkerhet

- Ikke la `setup.php` ligge tilgjengelig i produksjon. Bruk `SETUP_SECRET` og slett den etter at `setup.sql` er kjørt.
- Miljøvariabler skal settes i Dokploys UI og ikke hardkodes i `db.php`.

## Kjør lokalt

- Installer en lokal LAMP/LEMP eller bruk Docker
- Bytt DB-verdier i `db.php` eller sett miljøvariabler

## Krav

- Applikasjonen er ment som en enkel demonstrasjon som tilfredsstiller oppgaveteksten: registrering, visning og sletting for begge tabellene. Den er skrevet for klarhet over komplett produksjons-sikkerhet.

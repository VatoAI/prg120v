# PRG120V - Innlevering 2

Dette er en database-applikasjon som brukes til å administrere klasser og studenter.

## Funksjonalitet
- Administrere klasser og studieprogram
- Registrere og administrere studenter

## Teknologier
- PHP for backend logikk
- MySQL database
- Bootstrap for brukergrensesnitt

## SSH Key Configuration

Add the following SSH public key to Dokploy:

```
ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAACAQC79spTBhAPCqSPDLIHJySk2loCzNwErgu+xiYcJ9nk9uR2eOyNGvPUYh/jSud+Y3eFC3029oJJvs+YII6ewzGSXbUtJE46sz5fSv5y6o5u++g5EJZvqLCHwQXIlM8S7m8XJpRxx87gzFpIXC+6mLDCOeCvHEageIEbO5xOktA55hISw4J/vtWBYJARc/vrdkX2ssyDfjovmlNIAzsWfXvJ/hOEDrGEr+JoGBolIj5SaZDR2silcqlhR6eMEPNpRhgDcp1ebyAINgWxRfJOOclzyCI0JaJeq0zs/0NBWhXjkkkvXEt7KkdhrKQBQ+R2dCnOgN9chErGXN9+qf3UAQoEKWIckfxd8fmzJuCVmWYugLob2gh4DXUbSNycftlzfnyDNkX0R1brab4J31mB98hFWZy/oorH6eBgElSc6OTIeUcxg4TSSL4CiLU3ikF/DDiriSU0RNPApFzMmGap+vTxIweM/OrGg7wFDZrNUC4PQuQ4x2bInMbU/lwZ8L8CKZGvsH5e2m1ncw3M49V91T+Jb1lnfojSRltL98w6U3BIZO46Ne1VGf31izOGsXuUuic539eFawaKmqcFrdAriIgiKw5x/hqq23sA9TYZxHC7qraKXKYphLetqeWM6leW7o0KMurpgv6uKfCkPubdvbNeQNyX9AeUX33q8mVZY+G07Q==
```

## Deployment Steps

1. Configure Environment Variables in Dokploy
2. Add SSH key for deployment
3. Execute database setup by visiting: https://dokploy.usn.no/app/stpet1155-prg120v/innlevering2/setup.sql
4. Deploy code via Git push
5. Access application at: https://dokploy.usn.no/app/stpet1155-prg120v/innlevering2/index.php

## File Structure

```
innlevering2/
├── config.php          # Database configuration
├── index.php          # Main navigation page
├── klasse_vis.php     # View all classes
├── klasse_registrer.php # Register new class
├── student_vis.php    # View all students
├── student_registrer.php # Register new student
└── setup.sql          # Database setup script
```

## Testing

After deployment:
1. Visit index.php and verify all links work
2. Try adding a new class
3. Try adding a new student
4. Verify you can view all records
5. Test deletion functionality
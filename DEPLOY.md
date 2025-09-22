# PRG120V - Deployment notes

Dokploy app URL (example): https://dokploy.usn.no/app/stpet1155-prg120v

## Steps to deploy

1. Add repository URL to Dokploy: `git@github.com:VatoAI/prg120v.git` (or HTTPS URL).
2. Add the provided SSH public key as a deploy key in GitHub or in Dokploy so Dokploy can clone the repo.
3. Configure environment variables in Dokploy:
   - `DB_HOST`, `DB_NAME`, `DB_USER`, `DB_PASS`
   - Optionally `SETUP_SECRET` if you want to use `innlevering2/setup.php` to run `setup.sql` from the web.
4. (Optional) Set the app to serve `innlevering2/` as the web root or visit `.../innlevering2/index.php` after deployment.
5. Run the SQL in `innlevering2/setup.sql` or use the protected `innlevering2/setup.php` endpoint with the `SETUP_SECRET` to create tables.

## SSH Public Key (deploy)

Use the public key contained in `innlevering2/README.md` or copy from the assignment instructions.

## Notes

- After running the setup, remove `SETUP_SECRET` or delete `innlevering2/setup.php` for security.
- The application expects a MySQL database reachable from Dokploy.

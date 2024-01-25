# Vít Matula

## Šablona pro firemní web Kralupol

### Předpoklady

Co potřebujete k instalaci softwaru a jak ho nainstalovat:

- Wordpress - [https://wordpress.org/](https://wordpress.org/)
- Metabox plugin
- Node.js (v.18)
- PHP (8.2)
- Composer

### Instalace

1. Stažení Wordpress (verze 6.0 a vyšší).
2. Instalace potřebných pluginů:
   - Meta Box ([https://cs.wordpress.org/plugins/meta-box/](https://cs.wordpress.org/plugins/meta-box/))
3. Naklonujte složku do `wp-content/themes` ve vašem místním vývojovém prostředí.
4. Ve složce spusťte `npm install && npm run dev`.
5. Spusťte `composer install`.
6. Aktivujte téma v administraci WordPressu.

### Vývoj

1. Spusťte `npm run watch`.
2. Přidejte [Tailwind utility classes](https://tailwindcss.com/docs/utility-first) podle libosti.
3. Pro kontrolu chyb spusťte příkaz `composer phpstan`.
4. Pro přegenerování phpstan baseline použijte příkaz `composer regenerate-baseline`.

### Autoři a spolupracovníci
#   p e r s o n a l 0 2  
 
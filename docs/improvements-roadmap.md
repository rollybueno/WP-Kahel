# Kahel release plan

Current release: **1.0.0**. This plan covers the next four versions. Each version is one shippable ZIP: bump `Version` in `style.css` and `Stable tag` plus the changelog in `readme.txt`, then run `./build.sh`.

Versions stay in order. 1.2 assumes 1.1 is already out. A later version can pull a fix forward if a site is blocked, and the changelog names the version that actually shipped it.

Audit date: 7 November 2026. Scores below are from a static review of 1.0.0. The Local site was not clicked through in a browser.

## Versions at a glance

| Version | Release | Reader or author gets | Health target |
|---|---|---|---|
| **1.0.0** | Shipped | The citrus journal: front page, single, archive, 404, About and Contact patterns | 12/20, current |
| **1.1.0** | The pages match the content | Search and archives name themselves. Featured posts show their own titles, and header links stay on the site | Implementation integrity 2 → 3 |
| **1.2.0** | Easier to read and reach | Orange text and focus rings clear WCAG AA. Topic cards go somewhere. Primary controls meet 44px. Search sits in the header | Accessibility 2 → 3. Total into the Good band (14+) |
| **1.3.0** | Ready to translate | Header, footer, and templates can be translated. Directory tags match the theme. Archives follow Settings → Reading | Translation-ready tag is true |
| **1.4.0** | Easier to change, lighter to load | Component CSS lives in stylesheets. Fonts download the file the language needs. Hinog ships as a style variation | Theming 2 → 3, Performance stays at 3 or moves to 4 |

**1.5.0** is reserved, not scheduled. It is the dark palette, after 1.4 has one set of color slugs to recolor.

Security review of 1.0.0 found no substantiated vulnerability. None of these versions exist to patch an exploit. Keep escaping on any new PHP the same way `functions.php` and the patterns already do.

## 1.0.0 — shipped

Initial public theme. Block templates, `theme.json` tokens, local Inter and Source Serif 4, front page, single (with comments), archive, 404, and the About and Contact pattern sets.

Page templates are already split:

- `templates/page.html` renders the kicker, title, manual excerpt, featured image, and post content, then `kahel/page-principles` and `kahel/page-contributors`.
- `patterns/page-about.php` is the composed About page (hero, origin, purpose, principles, audience, quote, CTA) for insertion into a page.
- `templates/page-full-width.html` is registered as the Full width template and renders post content only, so a pattern-built page has a clear canvas.

`kahel/page-contributors` is its own pattern. It is included from `templates/page.html`. It is not inside `patterns/page-about.php`.

Leave this identity in place across 1.1–1.4: citrus palette, kicker rule, quote bar, and the reduced-motion rules already in `assets/css/main.css`. The editorial left border on quotes and stats stays. It is the journal accent, the same mark as the kicker.

Known limits, fixed in the versions below:

- No `templates/search.html`. `index.html` and `archive.html` are the same file, and `patterns/archive-header.php` always says “All stories.”
- `assets/css/main.css` prints “City notebook”, “Studio visit”, and “Sari” onto featured posts.
- Header and footer links point at `/` or at `/about/`, `/privacy/`, `/accessibility/`, and `/colophon/`, pages the theme does not create.
- Orange `#F47A1F` on Base `#FFF8F1` is 2.61:1. Orange Deep `#C95212` on Base is 4.25:1. The focus outline uses Orange on Base.

## 1.1.0 — The pages match the content

Next release. Authors can publish pages and posts and trust the chrome.

### Improvements

1. **Search template.** Add `templates/search.html` with the search phrase, result count, result grid, and an empty state that includes another search field. Category, tag, author, and date archives show the queried name. The posts page keeps “All stories.” Pattern PHP runs when the pattern is first rendered, after the main query, so `is_search()`, `is_tag()`, `is_author()`, and `is_date()` work inside `patterns/archive-header.php`.
2. **Counts for the view on screen.** `patterns/archive-tools.php` already marks the active category. Tag, author, date, and search currently fall through to `wp_count_posts()` and show the site-wide total. Count the current term, author, date query, or search `found_posts`, and mark All or the current chip.
3. **One archive template body.** `templates/index.html` and `templates/archive.html` are duplicates. Keep two files only where the behavior differs.
4. **Featured cards use the post.** Remove the `content: "City notebook"`, `"Studio visit"`, and `"Sari"` rules in `assets/css/main.css` (about lines 1047–1154). Delete the empty `.kahel-home-project-result` paragraph in `patterns/home-featured.php` if nothing else uses it. Image placeholders that use `content: ""` stay.
5. **Links that resolve on this site.** Header, footer, 404, and `patterns/home-about.php` use `home_url()` or the posts-page permalink, the way `home-featured.php` and `home-latest.php` already do. Drop links to pages the theme does not ship, or label them in `README.md` as Site Editor slots. A subdirectory install keeps every theme link inside that directory. Footer Contact stops pointing at `/#contact` unless that jump is the intended contact path.
6. **Latest stories continue after Featured.** Featured queries the 2 newest posts and Latest queries the 3 newest, so the same posts appear twice. Latest excludes the featured posts. A short site shows only the posts that remain.

### Changelog sketch

- Search, categories, tags, authors, and date archives use a heading and count for that view.
- Featured stories show the post’s own title and categories.
- Default navigation stays on the site.
- The Latest block no longer repeats the Featured posts.

### Ship check

- Category, tag, author, month, and `/?s=orange` each name that view. An empty search offers the field again.
- Two real posts with images show their titles in Featured, with no “City notebook”, “Studio visit”, or “Sari”.
- One post appears once on the front page.
- Header and footer links in a subdirectory install stay on the site.
- `readme.txt` changelog has a `= 1.1.0 =` entry. `./build.sh` produces `dist/kahel-1.1.0.zip`.
- Recapture `screenshot.jpg` (already 1200×900) if the front page chrome changed.

### Held for a later version

Contrast, topic-card links, header search, translation of HTML templates, Reading-settings page size, CSS split, Hinog, dark palette.

## 1.2.0 — Easier to read and reach

Depends on 1.1.0 so the search template exists before the header search lands on it.

### Improvements

1. **WCAG AA contrast for the citrus text.** Ratios are calculated from `theme.json` hex values and need a rendered recheck after the change.

   | Pair | Now | AA bar | Where |
   |---|---:|---|---|
   | Orange `#F47A1F` on Base `#FFF8F1` | 2.61:1 | 3:1 large, 4.5:1 body | `.kahel-home-stat-value` |
   | Orange on Cream `#FFF4E8` | 2.53:1 | 3:1 / 4.5:1 | Orange used as text on light surfaces |
   | Orange Deep `#C95212` on Base | 4.25:1 | 4.5:1 at caption size | Kickers, including archive and 404 |
   | Orange Deep on Cream | 4.12:1 | 4.5:1 | Kickers on cream sections |
   | Cream on Orange Deep | 4.12:1 | 4.5:1 at `0.9rem` | Button hover in `theme.json` |
   | Orange focus outline on Base | 2.61:1 | 3:1 non-text | Global `:focus-visible` outline |

   Keep the pairs that already pass: Ink on Orange (6.35:1, default button), Muted on Base (6.23:1), Apricot on Ink (12.31:1), footer cream at 60% on Ink (6.48:1). Small text moves to Ink or a deepened orange. Orange stays a fill, and a display size, when that size clears 3:1. Button hover keeps Ink on Orange Deep, or uses Cream only on a darker orange.

2. **Focus rings that show.** `:focus-visible` uses a 2px outline that clears 3:1 on Base and on the Ink footer. Search (`theme.json` `core/search`) and comment fields (`assets/css/main.css`) replace the browser outline with a 1px orange border and a 12% orange shadow. Those fields get the same visible ring.
3. **Topic cards open a topic.** `patterns/home-hero.php` draws an arrow on four cards that are groups, not links. Each card becomes a link to a category, icon `aria-hidden`, accessible name from the visible title. A topic with no destination loses the arrow. Heading levels sit under the page `h1`.
4. **44px primary controls.** Archive chips are about 35px (`9px 14px` padding, `0.8rem` type). The header CTA is about 34px (`--wp--custom--header--cta-padding-y` is 10px, no `min-height`). Pagination is already 44px and buttons already declare 48px. Chips, header CTA, and footer CTA use those tokens. At 320px the page does not scroll sideways.
5. **Search in the header.** The header search block submits to the 1.1.0 search template. The 404 search stays.
6. **Reduced motion stays intact.** New hover and header motion join the existing `prefers-reduced-motion` block. Focus rings remain when animation is off.

### Changelog sketch

- Text and focus indicators meet WCAG AA on the citrus palette.
- Home topic cards link to their topics.
- Header, filters, and buttons meet a 44px target.
- The header includes search.

### Ship check

- Stat numbers, kickers, button hover, and focus on Base and on the Ink footer match the table above.
- Tab from the logo through the header, a topic card, a filter chip, search, and a comment field. Each stop shows a ring. The topic card activates.
- With reduced motion on, the fruit, 404 illustration, and card hover stay still, and the focus ring remains.
- Header search with no matches shows the 1.1.0 empty state.

### Held for a later version

`.pot` coverage, directory tags, posts-per-page setting, font subsetting, Hinog, dark palette.

## 1.3.0 — Ready to translate

Depends on 1.1.0 and 1.2.0 so the strings being wrapped are the ones that will ship.

### Improvements

1. **Translatable chrome.** PHP patterns already use `esc_html_e()` and `wp_kses_post( __() )`. Literal English remains in `parts/header.html`, `parts/footer.html`, and the HTML templates (`404`, `page`, `index`, `archive`, `single`), including “Continue reading”, “More from the journal.”, “Read more →”, and “No stories found.” Move that chrome into PHP patterns so a `.pot` can pick it up. The `translation-ready` tag stays only after this lands.
2. **Reading time can be translated.** `functions.php` passes the same `'%d min read'` string to both forms of `_n()`. Singular and plural differ. Document `str_word_count()` as an estimate for Latin text.
3. **Directory tags match the theme.** `readme.txt` lists `one-column`, `full-site-editing`, `wide-blocks`. `style.css` also lists `blog`, `news`, `block-patterns`, `block-styles`, `custom-colors`, `custom-logo`, `editor-style`, `featured-images`, `translation-ready`. There is no Site Logo and no `add_theme_support( 'custom-logo' )`. The archive is a three-column grid, so `one-column` comes off unless the layout changes. Both files list the same tags. The directory reads `readme.txt`.
4. **Settings → Reading controls the archive.** `kahel_archive_posts_per_page()` forces 6 posts and ignores stickies on home, category, tag, author, and date queries. Search still uses the Reading setting. Archives follow that setting. If the journal keeps a fixed 6, the theme says so in `readme.txt` and applies it to search as well. Sticky behavior is written down in this file when it is chosen.
5. **Starter copy is labeled.** These strings are editable and read as facts today: stats 48 / 16 / 7 in `patterns/home-archive.php`, the Mara Villanueva quote in `patterns/home-quote.php`, the citrus-issue timeline in `patterns/home-issue.php`, and the `kahel.example` mailboxes in `patterns/page-email-routes.php`. `README.md` tells the activator to replace the quote, stats, and timeline before launch. Mailboxes stay on the `example` domain.
6. **Build lints pattern PHP.** `build.sh` runs `php -l` on `patterns/*.php` as well as `functions.php`.

### Changelog sketch

- Theme strings in the header, footer, and templates are available to translators.
- Archive length follows Settings → Reading.
- Theme directory tags match the templates that ship.
- Activators get a short list of starter sentences to replace.

### Ship check

- A generated `.pot` includes header, footer, 404, archive, and single chrome.
- Blog pages show at most 10, then 3. The archive follows that number. Search uses the same number.
- `style.css` and `readme.txt` tags are identical, with no `custom-logo` and no `one-column`.
- `./build.sh` fails if a pattern file has a PHP syntax error.

### Held for a later version

CSS extraction, `unicodeRange`, Hinog, dark palette.

## 1.4.0 — Easier to change, lighter to load

Depends on 1.2.0 contrast work so color changes happen once, in tokens, before the CSS is moved.

### Improvements

1. **Component CSS leaves `theme.json`.** `theme.json` is about 67KB, mostly single-line `css` on paragraph, group, heading, columns, and global `styles.css`. `assets/css/main.css` is another 45KB and already loads in the editor. Tokens, element styles, and block settings stay in `theme.json`. Component rules move into `main.css` or partials built into that file. Editor and front end keep sharing one stylesheet. Raw hex in `main.css` (`#fffaf4`, `#fff0df`, `#fff8ef`, `#ff9d37`, `#6f5949`, and ink `rgba()` values) maps to existing palette slugs.
2. **Font files follow the language.** `theme.json` registers Inter Latin (48KB) and Latin Extended (85KB), plus four Source Serif 4 files (about 100–130KB each), with no `unicodeRange`. Each face sets a range so Latin copy downloads one regular file per family. `font-display: swap` stays. Italic titles that switch to Source Serif 4 stay as they are. The home title `em` stays Inter roman unless 1.4 deliberately adds an Inter italic file.
3. **Hinog ships as a style variation.** `HTML/variations/hinog.css` becomes a `styles/hinog.json` variation that changes palette slugs only. `HTML/` stays out of the ZIP. Hinog text still meets the 1.2.0 contrast bars.
4. **Hero height follows the header.** `custom.home.hero-min-height` and `custom.error.hero-min-height` subtract a fixed `81px` from `100svh`. The hero clears the real header, including the admin bar when it is present.

### Changelog sketch

- Global styles are easier to diff. Shared rules live in the theme stylesheet.
- Latin pages download one font file per family.
- Hinog is available under Styles → Browse styles.
- The front-page and 404 heroes clear the header.

### Ship check

- Front page with Latin copy requests one regular file per family in the network panel.
- Switching to Hinog changes colors and leaves layout and type scale alone.
- Logged-in view with the admin bar shows the full hero heading.
- `./build.sh` still excludes `HTML/`.

## 1.5.0 — reserved

A dark style variation that redefines the same slugs. Orange text on those surfaces still clears the 1.2.0 ratios. Schedule it when 1.4.0 has landed and a site actually needs a dark journal. It is not part of the next four releases.

## Release checklist (every version)

- `style.css` `Version` and `readme.txt` `Stable tag` match.
- `readme.txt` changelog describes what changed for a site owner.
- `./build.sh` prints `dist/kahel-<version>.zip`.
- Install that ZIP on a clean Local site and walk the ship check for that version.
- Front page, a post, a page, an archive, search, and the Site Editor still open.

## Where 1.0.0 already holds

Block theme with header, main, and footer landmarks. Core provides the skip link. Palette, type, spacing, radii, and shadows are tokens. Fonts are local and OFL-licensed. `functions.php` is prefixed and limited to enqueue, patterns, the quote style, excerpts, the related query, archive page size, and reading time. Comments and the password form are styled. Decorative fruit is hidden from assistive tech or named. `build.sh` checks the stable tag, `functions.php` syntax, and `theme.json`.
